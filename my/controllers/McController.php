<?php

namespace app\controllers;

use app\models\Commands;
use app\models\Hangouts;
use yii\data\ActiveDataProvider;
use yii\data\ArrayDataProvider;
use yii\data\SqlDataProvider;
use yii\db\Query;
use yii\web\Controller;
use app\models\Users;
use Yii;


class McController extends Controller
{
    public function ref($mcid)
    {
        //if( !empty(\Yii::$app->request->get("refid")) )
        //{
            $h=Hangouts::findOne(['id'=>$mcid]);
            $usr=Users::find()->where(['id' => $h->uid])->one();
            $usrDt=Users::find()
                ->where(['refdt' => $usr->refdt]);
            if( $usrDt->count()>0 )
            {
                Yii::$app->session->set('refuserId', $usr->refdt);
                Yii::$app->session->set('mcID', $mcid);
            }
        //}
    }

    public function actionIndex()
    {
        $this->layout = '_hangout';
        $mcid=(int)\Yii::$app->request->get("mcid");
        $this->ref($mcid);
        $h=Hangouts::findOne(['id'=>$mcid]);
        if (!\Yii::$app->user->isGuest)
        {
            return $this->render('hangout',[
                'data'=>$h
            ]);
        }else
        {
            $this->layout = 'empty';
            return $this->render('loginform_2',[
                'mc'=>$h,
                'usrref'=>Users::findOne(['id'=>$h["uid"]]),
            ]);
        }
    }

    public function actionMcarchive()
    {
        if(!\Yii::$app->user->isGuest)
        {
            $model=$this->getUsrModel();
            if(1==$model->level)
            {
                return \app\controllers\PayController::PriceList("price");
            }
            return $this->render('mcarchive', [
                'dataProviderSys' => new ActiveDataProvider([
                    'query' =>(new Query())
                        ->select([
                            '"" as `my`',
                            '`h`.`yt`', '`h`.`date`', '`h`.`id`','`h`.`title`'
                        ])
                    ->from([Hangouts::tableName().' h'])
                   ->where(['uid'=>[
                        1//,3,22196
                    ]])
                ]),
                'dataProviderPartner' => new ActiveDataProvider([
                    'query' =>(new Query())
                        ->select([
                            '"" as `my`',
                            '`h`.`yt`', '`h`.`date`', '`h`.`id`','`h`.`title`'
                        ])
                        ->from([Hangouts::tableName().' h'])
                        ->where([ 'uid' =>
                            Users::find()->where([
                                'refdt' => $model->ref
                            ])->one()["id"]
                        ])
                ]),
                'dataProviderMy' => new ActiveDataProvider([
                    'query' =>(new Query())
                        ->select([
                            '"yes" as `my`',
                            '`h`.`yt`', '`h`.`date`', '`h`.`id`','`h`.`title`'
                        ])
                        ->from([Hangouts::tableName().' h'])
                        ->where([ 'uid' => $model->id ])
                ])
            ]);
        }
        return $this->goHome();
    }

    public function actionMcedit()
    {
        if (!\Yii::$app->user->isGuest)
        {
            $model=$this->getUsrModel();
            if(1==$model->level)
            {
                return \app\controllers\PayController::PriceList("price");
            }

            if(\Yii::$app->request->post())
            {
                $p = \Yii::$app->request->post();
                $mcID=(int)$p["Hangouts"]["id"];

                if ( 0==$mcID )
                {
                    $hangouts = new Hangouts;
                }
                else
                {
                    $hangouts=Hangouts::findOne([
                        'id'=>(int)$p["Hangouts"]["id"]
                    ]);
                }
                $hangouts->uid=$model->id;
                /*              $hangouts->name = $p["Hangouts"]["name"];
                                $hangouts->date=@$p["Hangouts"]["date"];
                                $hangouts->time=@$p["Hangouts"]["time"];
                                $hangouts->class=@$p["Hangouts"]["class"];*/
                $hangouts->title=@$p["Hangouts"]["title"];
                $hangouts->description=@$p["Hangouts"]["description"];
                $hangouts->url=@$p["Hangouts"]["url"];
                $hangouts->download=@$p["Hangouts"]["download"];
                $hangouts->speaker=@$p["Hangouts"]["speaker"];
                $hangouts->yt=@$p["Hangouts"]["yt"];
                $hangouts->button=@$p["Hangouts"]["button"];
                $hangouts->link=@$p["Hangouts"]["link"];
                $hangouts->date=@$p["Hangouts"]["date"];
                $hangouts->time=@$p["Hangouts"]["time"];
                $hangouts->save(false);

                \Yii::$app->session->setFlash(
                    'success',
                    'изменения сохранены'
                );

                $mcID=(0==$mcID)?$hangouts->id:$p["Hangouts"]["id"];

                return $this->render('mcedit', [
                    'model' => Hangouts::find()
                        ->where( [ 'id' => $mcID ] )
                        ->one()
                ]);
            }

            if( !empty(\Yii::$app->request->get("id")) )
            {
                    return $this->render('mcedit', [
                    'model' => Hangouts::find()
                        ->where( [ 'id'=>(int)\Yii::$app->request->get("id") ] )
                        ->one()
                ]);
            }

            return $this->render('mcnew');
        }
        return $this->goHome();
    }
    private function getUsrModel()
    {
        $identity = \Yii::$app->getUser()->getIdentity()->profile;
        switch($identity["service"])
        {
            case "facebook":
                return Users::find()->where(['facebook' => $identity["id"]])->one();
            break;
            case "vkontakte":
                return Users::find()->where(['vkontakte' => $identity["id"]])->one();
            break;
            case "linkedin_oauth2":
                return Users::find()->where(['linkedin' => $identity["id"]])->one();
            break;
            case "google":
                return Users::find()->where(['googleplus' => $identity["id"]])->one();
            break;
            case "yandex":
                return Users::find()->where(['yandex' => $identity["id"]])->one();
            break;
            case "mailru":
                return Users::find()->where(['mailru' => $identity["id"]])->one();
            break;
            case "twitter":
                return Users::find()->where(['twitter' => $identity["id"]])->one();
            break;
            case "instagram":
                return Users::find()->where(['instagram' => $identity["id"]])->one();
            break;
        }
    }
}