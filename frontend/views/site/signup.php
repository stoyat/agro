<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Форма регистрации:';
$this->params['breadcrumbs'][] = $this->title;
?>
   
<div class="container">

    <div class="row clearfix">
        <div class="col-xs-12 title_user">
            <h1><?= Html::encode($this->title) ?></h1>
        </div>

        <?
        $form = \yii\bootstrap\ActiveForm::begin();
        ?>
                    <div class=" col-xs-6 user_form">
                        <?= $form->field($model,'username')->textInput()->hint('Например:"ЗАО Агро"')->label('Введите название - компании');?>
                        <?= $form->field($model,'inn')->textInput()->label('Введите - ИНН');?>
                        <?= $form->field($model,'ogrn')->textInput()->label('Введите - ОГРН');?>
                        <?= $form->field($model,'how')->textInput()->hint('Например:Производство продуктов питания')->label('Вид деятельности компании');?>
                        <?= $form->field($model,'fact_adress')->textInput()->hint('Например:347900, Самарская область, г.Мухосранск, ул. Дильная 8')->label('Фактический адрес компании:');?>
                    </div>
        <div class=" col-xs-6 user_form">
                        <?= $form->field($model,'boss')->textInput()->hint('Сидоров Андрей Фндреевич')->label('Руководитель');?>
                        <?= $form->field($model,'phonenum')->textInput()->hint('+7 (495) 510-5555 ')->label('Телефон:');?>
                        <?= $form->field($model,'website')->textInput()->label('Веб-сайт:');?>
                        <?= $form->field($model,'email')->input('email')->label('Email:');?>
                        <?=$form->field($model, 'password')->passwordInput()->hint('Длинна пароля не меньше 6 символов.');?>
        </div>

                        <?=\yii\helpers\Html::submitButton('Регистрация',['class' => 'btn btn-success'])
                        ?>

                       <?
                        \yii\bootstrap\ActiveForm::end();
                        ?>

    </div>
    </div>
