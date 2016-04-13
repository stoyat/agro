<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Search\GoodsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="goods-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_goods') ?>

    <?= $form->field($model, 'region') ?>

    <?= $form->field($model, 'town') ?>

    <?= $form->field($model, 'sale') ?>

    <?= $form->field($model, 'bye') ?>

    <?php // echo $form->field($model, 'main_img') ?>

    <?php // echo $form->field($model, 'mini_img') ?>

    <?php // echo $form->field($model, 'prise') ?>

    <?php // echo $form->field($model, 'categories') ?>

    <?php // echo $form->field($model, 'tovar') ?>

    <?php // echo $form->field($model, 'properties') ?>

    <?php // echo $form->field($model, 'discription') ?>

    <?php // echo $form->field($model, 'pay') ?>

    <?php // echo $form->field($model, 'delivery') ?>

    <?php // echo $form->field($model, 'phone') ?>

    <?php // echo $form->field($model, 'contacts') ?>

    <?php // echo $form->field($model, 'visible') ?>

    <?php // echo $form->field($model, 'hot') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
