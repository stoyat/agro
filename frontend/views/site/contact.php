<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Контакты';
$this->params['breadcrumbs'][] = $this->title;
?>


<div class="container">
    <div class="row clearfix">
        <div class="col-xs-12 title_user">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        Если у вас есть деловое предложение или другие вопросы , пожалуйста, заполните следующую форму, чтобы связаться с нами .
    </p>
        </div>

        <div class=" col-xs-6 user_form">
            <?php $form = ActiveForm::begin(); ?>

            <?= $form->field($model, 'name')->textInput(['autofocus' => true])->label('Ваше имя:') ?>

            <?= $form->field($model, 'email') ?>

            <?= $form->field($model, 'subject')->label('Тема сообщения:') ?>

            <?= $form->field($model, 'body')->textArea(['rows' => 6])->label('Текст сообщения:') ?>
			
			<?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                    'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                ]) ?>
            
            


                <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>


            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>


