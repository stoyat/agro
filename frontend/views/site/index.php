<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="container large_menu">
    <div class="row">
        <div class="col-xs-12 first_line">
            <a href="<?=Yii::$app->urlManager->createUrl(["site/milk"])?>"><img src="/frontend/web/img/IMG/milk.png" alt="milk" width="150" height="150"></a>
            <a href="<?=Yii::$app->urlManager->createUrl(["site/meat"])?>"><img src="/frontend/web/img/IMG/meat.png" alt="" width="150" height="150"></a>
            <a href="#"><img src="/frontend/web/img/IMG/fish.png" alt="" width="150" height="150"></a>
            <a href="#"><img src="/frontend/web/img/IMG/drugs.png" alt="" width="150" height="150"></a>
            <a href="#"><img src="/frontend/web/img/IMG/fruit.png" alt="" width="150" height="150"></a>
            <a href="#"><img src="/frontend/web/img/IMG/zerno.png" alt="" width="150" height="150"></a>
            <a href="#"><img src="/frontend/web/img/IMG/pis.png" alt="" width="150" height="150"></a>
        </div>
        <div class="col-xs-12 second_line">
            <a href="#"><img src="/frontend/web/img/IMG/egg.png" alt="" width="150" height="150"></a>
            <a href="#"><img src="/frontend/web/img/IMG/bread.png" alt="" width="150" height="150"></a>
            <a href="#"><img src="/frontend/web/img/IMG/tea.png" alt="" width="150" height="150"></a>
            <a href="#"><img src="/frontend/web/img/IMG/maslo.png" alt="" width="150" height="150"></a>
            <a href="#"><img src="/frontend/web/img/IMG/pepper.png" alt="" width="150" height="150"></a>
            <a href="#"><img src="/frontend/web/img/IMG/kids.png" alt="" width="150" height="150"></a>
            <a href="#"><img src="/frontend/web/img/IMG/water.png" alt="" width="150" height="150"></a>
        </div>
    </div>
</div>
<div class="container search_map">
    <div class="row">
        <div class="col-xs-4">
            <button type="button" class="btn btn-primary qwer">Выбор региона</button>
        </div>
        <div class="col-xs-4">
            <button type="button" class="btn btn-primary qwer">Выбор города</button>
        </div>
        <div class="col-xs-4">
            <button type="button" class="btn btn-primary qwer">Выбор выбор страны</button>
        </div>
        <div class="col-xs-1"></div>
        <div class="col-xs-6 map">
            <div id="vmap" style="width: 780px; height: 334px; margin-left: -30px;"></div>

        </div>
        <div class="col-xs-4 globe">
            <img src="/frontend/web/img/IMG/globe.png" alt="" width="227" height="246">
        </div>
        <div class="col-xs-12 social">
        </div>
    </div>
</div>