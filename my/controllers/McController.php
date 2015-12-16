<?php

namespace app\controllers;

use app\models\Commands;
use app\models\Hangouts;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use app\models\Users;
use Yii;


class McController extends Controller
{
    public function ref()
    {
        if( !empty(\Yii::$app->request->get("refid")) )
        {
            $refdt=\Yii::$app->request->get("refid");
            $usrDt=Users::find()
                ->where(['refdt' => $refdt]);
            if( $usrDt->count()>0 )
            {
                Yii::$app->session->set('refuserId', $refdt);
            }
        }
    }

    public function actionIndex()
    {
        $this->layout = 'empty';
        $this->ref();
        if (!\Yii::$app->user->isGuest)
        {
            $mcid=(int)\Yii::$app->request->get("mcid");

            return $this->render('hangout',[
                'data'=>Hangouts::findOne(['id'=>$mcid])
            ]);
        }else
        {
            return $this->redirect( Yii::getAlias('@web') );
        }
    }

    public function actionMcarchive()
    {
        if(!\Yii::$app->user->isGuest)
        {
            $identity = \Yii::$app->getUser()->getIdentity()->profile;
            switch($identity["service"])
            {
                case "facebook":
                    $model = Users::find()->where(['facebook'=>$identity["id"]]);
                    break;
                case "vkontakte":
                    $model = Users::find()->where(['vkontakte'=>$identity["id"]]);
                    break;
                case "linkedin_oauth2":
                    $model = Users::find()->where(['linkedin'=>$identity["id"]]);
                    break;
                case "google":
                    $model = Users::find()->where(['googleplus'=>$identity["id"]]);
                    break;
                case "yandex":
                    $model = Users::find()->where(['yandex'=>$identity["id"]]);
                    break;
                case "mailru":
                    $model = Users::find()->where(['mailru'=>$identity["id"]]);
                    break;
                case "twitter":
                    $model = Users::find()->where(['twitter'=>$identity["id"]]);
                    break;
                case "instagram":
                    $model = Users::find()->where(['instagram'=>$identity["id"]]);
                    break;
            }

            return $this->render('mcarchive', [
                'dataProviderSys' => new ActiveDataProvider([
                    'query' =>Hangouts::find()
                    //->where([''=>''])
                ]),
                'dataProviderPartner' => new ActiveDataProvider([
                    'query' =>Hangouts::find()
                        ->where([ 'uid' => $model->one()["ref"] ])
                ]),
                'dataProviderMy' => new ActiveDataProvider([
                    'query' =>Hangouts::find()
                        ->where([ 'uid' => $model->one()["id"] ])
                ]),
                'refdt'=>$model->one()["refdt"]
            ]);
        }
        return $this->goHome();
    }

    public function actionEdit()
    {
        if (!\Yii::$app->user->isGuest)
        {
            $identity = \Yii::$app->getUser()->getIdentity()->profile;
            $model = Users::find();
            switch($identity["service"])
            {
                case "facebook":
                    $model=$model->where(['facebook' => $identity["id"]])->one();
                break;
                case "vkontakte":
                    $model=$model->where(['vkontakte' => $identity["id"]])->one();
                break;
                case "linkedin_oauth2":
                    $model=$model->where(['linkedin' => $identity["id"]])->one();
                break;
                case "google":
                    $model=$model->where(['googleplus' => $identity["id"]])->one();
                break;
                case "yandex":
                    $model=$model->where(['yandex' => $identity["id"]])->one();
                break;
                case "mailru":
                    $model=$model->where(['mailru' => $identity["id"]])->one();
                break;
                case "twitter":
                    $model=$model->where(['twitter' => $identity["id"]])->one();
                    break;
                case "instagram":
                    $model=$model->where(['instagram' => $identity["id"]])->one();
                    break;
            }

            if(\Yii::$app->request->post())
            {
                $p = \Yii::$app->request->post();
                $mcID=(int)$p["Hangouts"]["id"];

                if ( (1 <= $model->level) && ( 1 > $mcID) )
                {
                    $hangouts = new Hangouts;
                    $hangouts->uid=$model->id;
/*
                    $hangouts->name = $p["Hangouts"]["name"];
                    $hangouts->date=@$p["Hangouts"]["date"];
                    $hangouts->time=@$p["Hangouts"]["time"];
                    $hangouts->class=@$p["Hangouts"]["class"];
*/
                    $hangouts->title=@$p["Hangouts"]["title"];
                    $hangouts->description=@$p["Hangouts"]["description"];
                    $hangouts->speaker=@$p["Hangouts"]["speaker"];
                    $hangouts->yt=@$p["Hangouts"]["yt"];
                    $hangouts->url=@$p["Hangouts"]["url"];
                    $hangouts->download=@$p["Hangouts"]["download"];
                    $hangouts->button=@$p["Hangouts"]["button"];
                    $hangouts->link=@$p["Hangouts"]["link"];

                    $hangouts->save(false);
                    $mcID=$hangouts->id;

                }elseif( (1 <= $model->level) && ( 1 <= $mcID ) )
                {
                    $hangouts=Hangouts::findOne([
                        'id'=>(int)$p["Hangouts"]["id"]
                    ]);

                    $hangouts->uid=$model->id;
/*                  $hangouts->name = $p["Hangouts"]["name"];
                    $hangouts->date=@$p["Hangouts"]["date"];
                    $hangouts->time=@$p["Hangouts"]["time"];
                    $hangouts->class=@$p["Hangouts"]["class"];
*/
                    $hangouts->title=@$p["Hangouts"]["title"];
                    $hangouts->description=@$p["Hangouts"]["description"];
                    $hangouts->url=@$p["Hangouts"]["url"];
                    $hangouts->download=@$p["Hangouts"]["download"];
                    $hangouts->speaker=@$p["Hangouts"]["speaker"];
                    $hangouts->yt=@$p["Hangouts"]["yt"];
                    $hangouts->button=@$p["Hangouts"]["button"];
                    $hangouts->link=@$p["Hangouts"]["link"];

                    $hangouts->update(false);
                    $mcID=(int)$p["Hangouts"]["id"];
                }

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

           if($model->level<1)
           {
               return $this->render('mcempty');
           }

            return $this->render('mcnew');
        }
        return $this->goHome();
    }
}