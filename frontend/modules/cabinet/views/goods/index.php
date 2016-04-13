<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\Search\GoodsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Goods';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="goods-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Goods', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_goods',
            'region',
            'town',
            'sale',
            'bye',
             'main_img',
            'mini_img',
             'prise',
            'categories',
            'tovar',
             'properties',
             'discription:ntext',
             'pay',
             'delivery',
             'phone',
             'contacts',
             'visible',
             'hot',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
