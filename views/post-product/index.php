<?php

use app\models\Product;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use app\Component\table;
use yii\widgets\ActiveForm;
/** @var yii\web\View $this */
/** @var app\models\PostProductSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Products';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Product', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

 

<?= Table::widget([
    'dataProvider' => $dataProvider,
    'columns' => [
        'id',            // ID column
        'product_name',  // Product name column
        ['class' => 'yii\grid\ActionColumn'], // Action buttons
    ],
]) ?>

</div>
