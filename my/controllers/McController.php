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
        $this->ref();
        if (!\Yii::$app->user->isGuest)
        {
            $mcid=\Yii::$app->request->get("mcid");

            return $this->render('index',[
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
            }
            if(\Yii::$app->request->post()){
                $p = \Yii::$app->request->post();
                if ( (1 < $model->level) && ( 1 > $p["id"] ) )
                {
                    $hangouts = new Hangouts;
                    $hangouts->name = $p["name"];
                    $hangouts->uid=$model->id;

//    $hangouts->date=$p["name"];
//    $hangouts->time=$p["name"];
/*
    $hangouts->yt=$p["name"];
    $hangouts->class=$p["name"];
    $hangouts->title=$p["name"];
    $hangouts->description=$p["name"];
    $hangouts->url=$p["name"];
    $hangouts->download=$p["name"];
    $hangouts->speaker=$p["name"];
    $hangouts->button=$p["name"];
    $hangouts->link=$p["name"];
*/
                    $hangouts->save(false);
                }elseif( (1 < $model->level) && ( 1 > $p["id"] ) )
                {

                    $hangouts=Hangouts::findOne([
                        'id'=>(int)$p["id"]
                    ]);
                    $hangouts->title=$p["title"];
                    $hangouts->update(false);
                }else{
                    return $this->render('mcempty');
                }
            }
            return $this->render('mcedit', [
                'model' => Hangouts::find()
                    ->where(['id'=>'25'])->one()
            ]);
        }
        return $this->goHome();
    }
}