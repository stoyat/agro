<div class="row register">
    <div class="col-lg-6 col-lg-offset-3 col-sm-6 col-sm-offset-3 col-xs-12 ">
    
        <?
            $form = \yii\bootstrap\ActiveForm::begin(
            );
        ?>
<? if(Yii::$app->session->hasFlash('success')): ?>

    <?
     $success = Yii::$app->session->getFlash('success');

      echo \yii\bootstrap\Alert::widget([
          'options' => [
              'class' => 'alert-info'
          ],
          'body' => $success
      ])
    ?>
<?
endif;
?>
        <?= $form->field($model,'username')->textInput()->hint('Например:"ЗАО Агро"')->label('Введите название - компании');?>
                        <?= $form->field($model,'inn')->textInput()->label('Введите - ИНН');?>
                        <?= $form->field($model,'ogrn')->textInput()->label('Введите - ОГРН');?>
                        <?= $form->field($model,'how')->textInput()->hint('Например:Производство продуктов питания')->label('Вид деятельности компании');?>
                        <?= $form->field($model,'fact_adress')->textInput()->hint('Например:347900, Самарская область, г.Мухосранск, ул. Дильная 8')->label('Фактический адрес компании:');?>
                        <?= $form->field($model,'boss')->textInput()->hint('Сидоров Андрей Фндреевич')->label('Руководитель');?>
                        <?= $form->field($model,'phonenum')->textInput()->hint('+7 (495) 510-5555 ')->label('Телефон:');?>
                        <?= $form->field($model,'website')->textInput()->label('Веб-сайт:');?>
                        <?= $form->field($model,'email')->input('email')->label('Email:');?>
                        <?=$form->field($model, 'password')->passwordInput()->hint('Длинна пароля не меньше 6 символов.');?>

        <?
          echo \yii\helpers\Html::submitButton('Register',['class' => 'btn btn-success'])
        ?>


        <?
            \yii\bootstrap\ActiveForm::end();
        ?>
    </div>

</div>