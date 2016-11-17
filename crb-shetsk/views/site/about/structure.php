<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
use yii\widgets\LinkPager;

$this->title = Yii::t('app', 'menu.page.about.structure');
$this->params['breadcrumbs'][] = $this->title;
?>


<section class="page-title">
    <div class="grid-row clearfix">
        <h1><?= Yii::t('app', 'menu.page.about.structure')?></h1>
        
        <nav class="bread-crumbs">
            <a href=""><?= Yii::t('app', 'menu.page.about')?></a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;
        </nav>
    </div>
</section>

<div class="site-state-symbols">
    <div class="grid-row">
		<div class="grid-col grid-col-12">
			<img src="img/structure.png" style="width:100%; height:100%"></img>
		</div>
	</div>
</div>