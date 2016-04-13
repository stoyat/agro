<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Goods */

$this->title = $model->id_goods;
$this->params['breadcrumbs'][] = ['label' => 'Goods', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="goods-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_goods], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_goods], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
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
        ],
    ]) ?>

</div>
