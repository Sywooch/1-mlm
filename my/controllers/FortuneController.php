<?php

namespace app\controllers;
use app\models\Fortune;
use app\models\FortuneUsers;
use app\models\Users;
use Yii;

class FortuneController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $this->layout="fortune";
        $usrDt = Users::find()
            ->where([
                'refdt' =>  (string)\Yii::$app->request->get("refdt")
            ]);
        if ($usrDt->count() > 0)
        {
            Yii::$app->session->set('refuserId',(string)\Yii::$app->request->get("refdt"));
        }
        if (!\Yii::$app->user->isGuest)
        {
            $identity = \Yii::$app->getUser()->getIdentity()->profile;
            $usr = Users::find();
            switch($identity["service"])
            {
                case "facebook":
                    $usr=$usr->where(['facebook' => $identity["id"]])->one();
                    break;
                case "vkontakte":
                    $usr=$usr->where(['vkontakte' => $identity["id"]])->one();
                    break;
                case "linkedin_oauth2":
                    $usr=$usr->where(['linkedin' => $identity["id"]])->one();
                    break;
                case "google":
                    $usr=$usr->where(['googleplus' => $identity["id"]])->one();
                    break;
                case "yandex":
                    $usr=$usr->where(['yandex' => $identity["id"]])->one();
                    break;
                case "mailru":
                    $usr=$usr->where(['mailru' => $identity["id"]])->one();
                    break;
                case "twitter":
                    $usr=$usr->where(['twitter' => $identity["id"]])->one();
                    break;
                case "instagram":
                    $usr=$usr->where(['instagram' => $identity["id"]])->one();
                    break;
            }

            //$this->layout = "empty";

            $f = Fortune::findOne(['id' => 1]);
            $f->visited = ++$f->visited;
            $f->update(false);


            if(FortuneUsers::find()->where([
                "fortune_id"=>1,
                "uid"=>$usr["id"]
            ])->count()==0)
            {
                $fu = new FortuneUsers();
                $fu->uid=$usr["id"];
                $fu->fortune_id=1;
                $fu->save(false);
            }

            return $this->render('index',[
                "refdt"=>$usr["refdt"]
            ]);
        }
        return $this->goHome();
    }
}
