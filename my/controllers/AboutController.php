<?php
namespace app\controllers;
use yii\web\Controller;
use yii\data\ActiveDataProvider;
use app\models\Users;

class AboutController extends Controller
{
    public function actionIndex()
    {
        $this->layout = "main2";

        $search = new Users;

        $dataProvider=(new ActiveDataProvider([
            'query'=>Users::find()
                ->joinWith('levels'),
            /*'sort' => [
                'attributes' => ['fn', 'ln'],
            ],*/
            'pagination' => [
                'pageSize' => 5,
            ]
        ]));

        return $this->render('index',[
            'dataProvider'=>$dataProvider,
            'searchModel'=>$search
        ]);
    }
}