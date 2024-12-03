<?php
namespace app\Component;
use yii\grid\GridView;
use yii\base\Widget;

class Table extends Widget{
    public $dataProvider; // The data provider for the table
    public $columns;      // Columns configuration for the table

    public function run()
    {
        return GridView::widget([
            'dataProvider' => $this->dataProvider,
            'columns' => $this->columns,
            'tableOptions' => ['class' => 'table table-striped table-bordered'],
        ]);
    }
}
