<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SearchForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Форма поиска:';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="container add_adv">
		<div class="row">
			<div class=" conatiner row adv_form">
				<div class="col-xs-12">
					
						<h2>Расширенный поиск*</h2>
                        
                        <? 
                        //beginForm(pass action,method)
                        echo \yii\helpers\Html::beginForm() ?>
                        
                        
                        
                        
						<div class="col-xs-12 select">
							
									<?
                               echo \yii\helpers\Html::dropDownList('search','', [
                                   'Taganrog' => 'Таганрог',
                                   'All' => 'Все',

                               ], ['class' => 'col-xs-3', 'prompt' => 'Регион']
                               );
                            ?>
							
							
								<?
                               echo \yii\helpers\Html::dropDownList('search','', [
                                   'Taganrog' => 'Таганрог',
                                   'All' => 'Все',

                               ], ['class' => 'col-xs-3', 'prompt' => 'Населенный пункт']
                               );
                            ?>
                            	<?
                               echo \yii\helpers\Html::dropDownList('search','', [
                                   'bye' => 'Покупка',
                                   'sail' => 'Продажа',

                               ], ['class' => 'col-xs-3', 'prompt' => 'Вид сделки']
                               );
                            ?>
                            	<?
                               echo \yii\helpers\Html::dropDownList('search','', [
                                   'bye' => 'Покупка',
                                   'All' => 'Все',

                               ], ['class' => 'col-xs-3', 'prompt' => 'Регион']
                               );
                            ?>
                            	<?
                               echo \yii\helpers\Html::dropDownList('search','', [
                                   'milk products' => 'Молочная продукция',
                                   'meat products' => 'Мясная продукция',

                               ], ['class' => 'col-xs-3', 'prompt' => 'Катеория']
                               );
                            ?>
                            	<?
                               echo \yii\helpers\Html::dropDownList('search','', [
                                   'Taganrog' => 'Таганрог',
                                   'All' => 'Все',

                               ], ['class' => 'col-xs-3', 'prompt' => 'Регион']
                               );
                            ?>
                            	<?
                               echo \yii\helpers\Html::dropDownList('search','', [
                                   'Taganrog' => 'Таганрог',
                                   'All' => 'Все',

                               ], ['class' => 'col-xs-3', 'prompt' => 'Регион']
                               );
                            ?>
                            <?
                               echo \yii\helpers\Html::dropDownList('search','', [
                                   'Taganrog' => 'Таганрог',
                                   'All' => 'Все',

                               ], ['class' => 'col-xs-3', 'prompt' => 'Регион']
                               );
                            ?>

						
							
						
							
						
						<div class="col-xs-12 price">
							<p>Стоимость</p>
                            <? echo \yii\helpers\Html::textInput('search', '', ['placeholder' => 'От']) ?>
							<? echo \yii\helpers\Html::textInput('search', '', ['placeholder' => 'до']) ?>
						</div>						
						<div class="col-xs-4 button_prev">
                        <? echo \yii\helpers\Html::submitButton('Найти', ['class' => 'btn btn-primary']) ?>
						</div>
                        
                         <? echo \yii\helpers\Html::endForm() ?>
                        
                        
                        
                        
						
					
				</div>
			</div>
		</div>
	</div>	