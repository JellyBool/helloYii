<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SampleSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Samples';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sample-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Sample', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'thought',
            'goodness',
            'rank',
            'censorship',
            // 'occurred',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
