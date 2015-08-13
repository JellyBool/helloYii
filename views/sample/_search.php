<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SampleSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sample-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'thought') ?>

    <?= $form->field($model, 'goodness') ?>

    <?= $form->field($model, 'rank') ?>

    <?= $form->field($model, 'censorship') ?>

    <?php // echo $form->field($model, 'occurred') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
