<?php

namespace app\controllers;

use app\models\Lpbuilder;

class LandBuilderController extends \yii\web\Controller
{
    public function beforeAction($action)
    {
        if("save"==$action->id)
        {
            $this->enableCsrfValidation = false;
        }
        return parent::beforeAction($action);
    }

    public function actionIndex()
    {
        return $this->redirect('/builder/');
    }

    public function actionSave()
    {
        $p = \Yii::$app->request->post();
        if($p)
        {
            $txt=null;
            foreach( $p["pages"] as $page=>$content )
            {
                $content = preg_replace("/GetLeads - Landing Page with Page Builder/", $p['title'], $content);
                $content = preg_replace("/glDescription/", $p['description'], $content);
                $content = preg_replace("/glKeywords/", $p['keywords'], $content);
                $content = preg_replace("/glAuthor/", $p['author'], $content);
                $txt.=/*stripslashes(*/$content;//);
            }

            $lpb = new Lpbuilder();
            $lpb->uid = 0;//$this->usrId();
            $lpb->dt = $txt;
            $lpb->save(false);

            return $this->goHome();
        }
        else
        {
            return $this->goHome();
        }
    }

    protected function usrId()
    {
        $identity = \Yii::$app->getUser()->getIdentity()->profile;
        $id=0;
        switch($identity["service"])
        {
            case "facebook":
                $id = Users::find()->where(['facebook'=>$identity["id"]])->one()["id"];
                break;
            case "vkontakte":
                $id = Users::find()->where(['vkontakte'=>$identity["id"]])->one()["id"];
                break;
            case "linkedin_oauth2":
                $id = Users::find()->where(['linkedin'=>$identity["id"]])->one()["id"];
                break;
            case "google":
                $id = Users::find()->where(['googleplus'=>$identity["id"]])->one()["id"];
                break;
            case "yandex":
                $id = Users::find()->where(['yandex'=>$identity["id"]])->one()["id"];
                break;
            case "mailru":
                $id = Users::find()->where(['mailru'=>$identity["id"]])->one()["id"];
                break;
            case "twitter":
                $id = Users::find()->where(['twitter'=>$identity["id"]])->one()["id"];
                break;
            case "instagram":
                $id = Users::find()->where(['instagram'=>$identity["id"]])->one()["id"];
                break;
        }
        return $id;
    }
}
