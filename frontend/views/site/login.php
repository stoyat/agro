<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
    
<div class="row register">
    <div class="col-lg-6 col-lg-offset-3 col-sm-6 col-sm-offset-3 col-xs-12 ">
        <h1><?= Html::encode($this->title) ?></h1>

        <p>Пожалуйста, введите данные для авторизации:</p>
        
          <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
        
            <?=$form->field($model,'username')->textInput(['autofocus' => true]) ?>
            <?=$form->field($model,'password')->passwordInput() ?>
            <?=$form->field($model,'rememberMe')->checkbox() ?>
        <?=\yii\helpers\Html::submitButton('Login',['class' => 'btn btn-success']) ?>
        <?
         \yii\bootstrap\ActiveForm::end();
        ?>

</div>

    </div>


           

                

                


