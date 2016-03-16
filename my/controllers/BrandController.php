<?php

namespace app\controllers;

use Yii;
use app\models\Users;
use app\models\Levels;
use app\models\UsrCompaniesLink;


class BrandController extends \yii\web\Controller
{
    public function actionBrand()
    {
        if (!\Yii::$app->user->isGuest)
        {
            $u = $this->getModelUsers()->one();
            if(\Yii::$app->request->post())
            {
                $p = \Yii::$app->request->post();
                //print_r($p);die;
                if($p)
                {
                    $a = Users::findOne(['id'=>$u->id]);
                    if($a)
                    {
                        //$a->load($p);
                        $a->companyid=$p["Users"]["companyid"];
                        $a->site=$p["Users"]["site"];
                        $a->playlist=$p["Users"]["playlistId"];
                        $a->save(false);

                        $usrCompLink=(UsrCompaniesLink::find()
                            ->where(["uid"=>$u->id,"lp_id"=>$u->companyid])->count()>0)?
                        (UsrCompaniesLink::findOne(["uid"=>$u->id, "lp_id"=>$u->companyid])):
                        (new UsrCompaniesLink());

                        $usrCompLink->uid=$u->id;
                        $usrCompLink->lp_id=$u->companyid;
                        $usrCompLink->link=$p["Users-comp"]["link"];
                        $usrCompLink->save(false);


                        \Yii::$app->session->setFlash(
                            'success',
                            'Данные успешно обновлены'
                        );
                    }
                }
            }
            $usrDt=$this->getUsrDt();
            $lastFive=(new \yii\db\Query())->select('u.fn AS fn, u.ln AS ln,
            vkontakte, u.socid AS socid, u.userpic AS userpic')
                ->from([Users::tableName().' u'])
                ->where(['u.ref' => $usrDt["refdt"]])
                ->orderBy(['regdate' => SORT_DESC])->limit(5)->all();
            return $this->render('//site/account', [
                'model' => $this->getModelUsers()->one(),
                'usrDt'=> $usrDt,
                'lastFive'=>$lastFive
            ]);
        }
        return $this->goHome();
    }































    private function getUsrDt()
    {
        $identity = \Yii::$app->getUser()->getIdentity()->profile;
        $usrDt=(new \yii\db\Query())->select('u.fn AS fn, u.ln AS ln, u.refdt AS refdt,
                u.active AS active, l.title AS level, u.userpic AS userpic, u.money AS money')
            ->from([Users::tableName().' u'])
            ->innerJoin(Levels::tableName().' l','l.id = u.level');

        switch($identity["service"])
        {
            case "facebook":
                return $usrDt->where(['facebook'=>$identity["id"]])->one();
                break;
            case "vkontakte":
                return $usrDt->where(['vkontakte'=>$identity["id"]])->one();
                break;
            case "linkedin_oauth2":
                return $usrDt->where(['linkedin'=>$identity["id"]])->one();
                break;
            case "google":
                return $usrDt->where(['googleplus'=>$identity["id"]])->one();
                break;
            case "yandex":
                return $usrDt->where(['yandex'=>$identity["id"]])->one();
                break;
            case "mailru":
                return $usrDt->where(['mailru'=>$identity["id"]])->one();
                break;
            case "twitter":
                return $usrDt->where(['twitter'=>$identity["id"]])->one();
                break;
            case "instagram":
                return $usrDt->where(['instagram'=>$identity["id"]])->one();
                break;
        }
    }

    private function getModelUsers()
    {
        $identity = \Yii::$app->getUser()->getIdentity()->profile;
        switch($identity["service"])
        {
            case "facebook":
                return Users::find()->where(['facebook' => $identity["id"]]);
                break;
            case "vkontakte":
                return Users::find()->where(['vkontakte' => $identity["id"]]);
                break;
            case "linkedin_oauth2":
                return Users::find()->where(['linkedin' => $identity["id"]]);
                break;
            case "google":
                return Users::find()->where(['googleplus' => $identity["id"]]);
                break;
            case "yandex":
                return Users::find()->where(['yandex' => $identity["id"]]);
                break;
            case "mailru":
                return Users::find()->where(['mailru' => $identity["id"]]);
                break;
            case "twitter":
                return Users::find()->where(['twitter' => $identity["id"]]);
                break;
            case "instagram":
                return Users::find()->where(['instagram' => $identity["id"]]);
                break;
        }
    }
}
