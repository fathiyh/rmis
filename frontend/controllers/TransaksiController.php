<?php

namespace frontend\controllers;
use Yii;
use frontend\models\ParkirForm;

class TransaksiController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

public function actionParkir()
{
    $model = new ParkirForm();

    if ($model->load(Yii::$app->request->post())) {
        if ($model->validate()) {
            // form inputs are valid, do something here
            return;
        }
    }

    return $this->render('parkir', [
        'model' => $model,
    ]);
}

}
