<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Status;

class StatusController extends Controller
{
    public function actionCreate()
    {
        $model = new Status;

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            // valid data received in $model
            return $this->render('view', ['model' => $model]);
        } else {
            // either the page is initially displayed or there is some validation error
            return $this->render('create', ['model' => $model]);
        }
    }
}