<?

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
frontend\assets\MainAsset::register($this);
use common\widgets\Alert;
?>
<?php $this->beginPage() ?>

<!DOCTYPE html>
<html>
<head>
	<title><?$this->title?></title>
	<meta charset="<?= Yii::$app->charset ?>">
	<?=Html::csrfMetaTags() ?>
	<?php $this->head() ?>
	<script type="text/javascript">
	// Массив всех объектов
	var data_obj = {
		'no': ['Объект 1', 'Объект 2'],
		'kr': ['Объект 3', 'Объект 4', 'Объект 5'],
		'ir': ['Объект 6', 'Объект 7', 'Объект 8']
	};

	colorRegion = '#1076C8'; // Цвет всех регионов
	focusRegion = '#FF9900'; // Цвет подсветки регионов при наведении на объекты из списка
	selectRegion = '#0A4C82'; // Цвет изначально подсвеченных регионов

	highlighted_states = {};

	// Массив подсвечиваемых регионов, указанных в массиве data_obj
	for(iso in data_obj){
		highlighted_states[iso] = selectRegion;
	}

	$(document).ready(function() {
		$('#vmap').vectorMap({
			map: 'russia',
			backgroundColor: 'transparent',
			borderColor: '#ffffff',
			borderWidth: 1,
			color: colorRegion,
			colors: highlighted_states,
			hoverOpacity: 0.7,
			enableZoom: true,
			showTooltip: true,

			// Отображаем объекты если они есть
			onLabelShow: function(event, label, code){
				name = '<strong>'+label.text()+'</strong><br>';
				if(data_obj[code]){
					list_obj = '<ul>';
					for(ob in data_obj[code]){
						list_obj += '<li>'+data_obj[code][ob]+'</li>';
					}
					list_obj += '</ul>';
				}else{
					list_obj = '';
				}
				label.html(name + list_obj);
				list_obj = '';
			},
			// Клик по региону
			onRegionClick: function(element, code, region){
				alert(region+' - ' +code);
			}
		});

	});
	// Выводим список объектов из массива
	$(document).ready(function() {
		for(region in data_obj){
			for(obj in data_obj[region]){
				$('.list-object').append('<li><a href="'+selectRegion+'" id="'+region+'" class="focus-region">'+data_obj[region][obj]+' ('+region+')</a></li>');
			}
		}
	});

	// Подсветка регионов при наведении на объекты
	$(function(){
		$('.focus-region').mouseover(function(){
			iso = $(this).prop('id');
			fregion = {};
			fregion[iso] = focusRegion;
			$('#vmap').vectorMap('set', 'colors', fregion);
		});
		$('.focus-region').mouseout(function(){
			c = $(this).attr('href');
			cl = (c === '#')?colorRegion:c;
			iso = $(this).prop('id');
			fregion = {};
			fregion[iso] = cl;
			$('#vmap').vectorMap('set', 'colors', fregion);
		});
	});
</script>
</head>
<body>
<?php $this->beginBody() ?>


<?=$this->render("//common/head") ?>

<?=$content ?>

<?=$this->render("//common/footer") ?>



<!-- Modal -->
<div id="loginpop" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="row">
				<div class="col-sm-6 login">
					<h4>Зайти</h4>
					<form class="" role="form">
						<div class="form-group">
							<label class="sr-only" for="exampleInputEmail2">Email address</label>
							<input type="email" class="form-control" id="exampleInputEmail2" placeholder="Введите email">
						</div>
						<div class="form-group">
							<label class="sr-only" for="exampleInputPassword2">Password</label>
							<input type="password" class="form-control" id="exampleInputPassword2" placeholder="Введите пароль">
						</div>
						<div class="checkbox">
							<label>
								<input type="checkbox"> Запомнить меня
							</label>
						</div>
						<button type="submit" class="btn btn-success">Войти</button>
					</form>
				</div>
				<div class="col-sm-6">
					<h4>Регистрация нового пользователя</h4>
					<p>Зарегестрируйтесь пожалуйста, у Вас будет возможность заходить в свой кабинет и добавлять товары.</p>
					<button type="submit" class="btn btn-info"  onclick="window.location.href='<?=Yii::$app->urlManager->createUrl(["site/register"])?>'">Зареестрировать</button>
				</div>

			</div>
		</div>
	</div>
</div>
<!-- /.modal -->



	<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>