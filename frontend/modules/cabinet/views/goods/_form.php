<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Goods */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="goods-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'region')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'town')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sale')->textInput() ?>

    <?= $form->field($model, 'bye')->textInput() ?>

    <?= $form->field($model, 'main_img')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mini_img')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'prise')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'categories')->dropDownList([ 'Молоко', 'Зерно','Мясо', ], ['prompt' => 'Молоко']) ?>

    <?= $form->field($model, 'tovar')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'properties')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'discription')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'pay')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'delivery')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'contacts')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'visible')->radioList(['Нет', 'Да']) ?>
    
    <?= $form->field($model, 'hot')->radioList(['Нет', 'Да']) ?>
    
    <?//= $form->field($model, 'hot')->dropDownList([ '0', '1', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
