<?php

use app\models\Employee;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use app\Component\table;
use yii\widgets\ActiveForm;
/** @var yii\web\View $this */
/** @var app\models\PostEmployee $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Employees';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="employee-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Employee', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

 

    <?= Table::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            'id',        // ID column
            'emp_name',  // Employee name column
            ['class' => 'yii\grid\ActionColumn'], // Action buttons
        ],
    ]) ?>


</div>
