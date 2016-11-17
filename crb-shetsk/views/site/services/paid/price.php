<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
use yii\widgets\LinkPager;

$this->title = Yii::t('app', 'menu.page.services.paid.price');
$this->params['breadcrumbs'][] = $this->title;
?>

<section class="page-title">
    <div class="grid-row clearfix">
        <h1><?= Yii::t('app', 'menu.page.services.paid.price')?></h1>
        
        <nav class="bread-crumbs">
        	<a href=""><?= Yii::t('app', 'menu.page.services')?></a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;
        	<a href=""><?= Yii::t('app', 'menu.page.services.paid')?></a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;
        </nav>
    </div>
</section>

<main class="page-content">
	<div class="grid-row">
		<div class="widget pricing-table wpb_content_element">
			<div class="row">
				<!--
				--><div class="col col-4">
					<div class="head"><span>№  п/п</span></div>
					<ul class="listing">
						<li>&nbsp;</li>
						<li><i class="fa fa-sort-numeric-asc"></i>A01.001.000</li>
						<li><i class="fa fa-sort-numeric-asc"></i>A01.002.000</li>
						<li><i class="fa fa-sort-numeric-asc"></i>A01.003.000</li>
						<li><i class="fa fa-sort-numeric-asc"></i>A01.005.000</li>
						<li><i class="fa fa-sort-numeric-asc"></i>A01.006.000</li>
						<li><i class="fa fa-sort-numeric-asc"></i>A01.007.000</li>
						<li><i class="fa fa-sort-numeric-asc"></i>A01.008.000</li>
						<li><i class="fa fa-sort-numeric-asc"></i>A01.010.000</li>
						<li><i class="fa fa-sort-numeric-asc"></i>A01.011.000</li>
					</ul>
				</div><!--
				--><div class="col col-2">
					<div class="head"><span>Наименование процедур</span></div>
					<ul class="listing">
						<li><i class="fa fa-list"></i>Прием на уровне ПМСП</li>
						<li><i class="fa fa-flask"></i>Терапевт</li>
						<li><i class="fa fa-flask"></i>Педиатр</li>
						<li><i class="fa fa-flask"></i>Семейный врач (Врач общей практики)</li>
						<li><i class="fa fa-flask"></i>Психолог</li>
						<li><i class="fa fa-flask"></i>Социальный работник с высшим образованием</li>
						<li><i class="fa fa-flask"></i>Социальный работник со средним образованием</li>
						<li><i class="fa fa-flask"></i>Фельдшер</li>
						<li><i class="fa fa-flask"></i>Медицинская сестра со средним образованием</li>
						<li><i class="fa fa-flask"></i>Акушерка</li>
					</ul>
				</div><!--
				--><div class="col col-4">
					<div class="head"><span>Стоимость услуг </span></div>
					<ul class="listing">
						<li>&nbsp;</li>
						<li><i class="fa fa-money"></i>654.15	тенге</li>
						<li><i class="fa fa-money"></i>654.15	тенге</li>
						<li><i class="fa fa-money"></i>836.34	тенге</li>
						<li><i class="fa fa-money"></i>422.47	тенге</li>
						<li><i class="fa fa-money"></i>170.47	тенге</li>
						<li><i class="fa fa-money"></i>139.01	тенге</li>
						<li><i class="fa fa-money"></i>211.67	тенге</li>
						<li><i class="fa fa-money"></i>182.19	тенге</li>
						<li><i class="fa fa-money"></i>539.24	тенге</li>
					</ul>
				</div>
			</div>

			<div class="row">
				<!--
				--><div class="col col-4">
					<ul class="listing">
						<li>&nbsp;</li>
						<li><i class="fa fa-sort-numeric-asc"></i>A02.001.000</li>
						<li><i class="fa fa-sort-numeric-asc"></i>A02.002.000</li>
						<li><i class="fa fa-sort-numeric-asc"></i>A02.013.000</li>
						<li><i class="fa fa-sort-numeric-asc"></i>A02.004.000</li>
						<li><i class="fa fa-sort-numeric-asc"></i>A02.005.000</li>
						<li><i class="fa fa-sort-numeric-asc"></i>A02.014.000</li>
						<li><i class="fa fa-sort-numeric-asc"></i>A02.018.000</li>
						<li><i class="fa fa-sort-numeric-asc"></i>A02.019.000</li>
						<li><i class="fa fa-sort-numeric-asc"></i>A02.023.000</li>
						<li><i class="fa fa-sort-numeric-asc"></i>A02.029.000</li>
						<li><i class="fa fa-sort-numeric-asc"></i>A02.039.000</li>
						<li><i class="fa fa-sort-numeric-asc"></i>A02.043.000</li>
						<li><i class="fa fa-sort-numeric-asc"></i>A02.044.000</li>
						<li><i class="fa fa-sort-numeric-asc"></i>A02.046.000</li>
						<li><i class="fa fa-sort-numeric-asc"></i>A02.047.000</li>
						<li><i class="fa fa-sort-numeric-asc"></i>A02.048.000</li>
						<li><i class="fa fa-sort-numeric-asc"></i>A02.051.000</li>
						<li><i class="fa fa-sort-numeric-asc"></i>A02.052.000</li>
						<li><i class="fa fa-sort-numeric-asc"></i>A02.055.000</li>
						<li><i class="fa fa-sort-numeric-asc"></i>A02.056.000</li>
					</ul>
				</div><!--
				--><div class="col col-2">
					<ul class="listing">
						<li><i class="fa fa-list"></i>Консультация специалиста</li>
						<li><i class="fa fa-flask"></i>Терапевт</li>
						<li><i class="fa fa-flask"></i>Педиатр</li>
						<li><i class="fa fa-flask"></i>Хирург</li>
						<li><i class="fa fa-flask"></i>Акушер-гинеколог</li>
						<li><i class="fa fa-flask"></i>Психолог</li>
						<li><i class="fa fa-flask"></i>Оториноларинголог</li>
						<li><i class="fa fa-flask"></i>Невропатолог</li>
						<li><i class="fa fa-flask"></i>Инфекционист</li>
						<li><i class="fa fa-flask"></i>Офтальмолог</li>
						<li><i class="fa fa-flask"></i>Дерматовенеролог</li>
						<li><i class="fa fa-flask"></i>Онколог</li>
						<li><i class="fa fa-flask"></i>Анестезиолог-реаниматолог</li>
						<li><i class="fa fa-flask"></i>Фтизиатр</li>
						<li><i class="fa fa-flask"></i>Психиатр</li>
						<li><i class="fa fa-flask"></i>Профпатолог</li>
						<li><i class="fa fa-flask"></i>Нарколог</li>
						<li><i class="fa fa-flask"></i>Неонатолог</li>
						<li><i class="fa fa-flask"></i>Маммолог</li>
						<li><i class="fa fa-flask"></i>Стоматолог-терапевт</li>
						<li><i class="fa fa-flask"></i>Стоматолог-хирург</li>
					</ul>
				</div><!--
				--><div class="col col-4">
					<ul class="listing">
						<li>&nbsp;</li>
						<li><i class="fa fa-money"></i>879.10	тенге</li>
						<li><i class="fa fa-money"></i>879.10	тенге</li>
						<li><i class="fa fa-money"></i>770.85	тенге</li>
						<li><i class="fa fa-money"></i>1075.52	тенге</li>
						<li><i class="fa fa-money"></i>943.47	тенге</li>
						<li><i class="fa fa-money"></i>770.85	тенге</li>
						<li><i class="fa fa-money"></i>838.64	тенге</li>
						<li><i class="fa fa-money"></i>972.26	тенге</li>
						<li><i class="fa fa-money"></i>770.85	тенге</li>
						<li><i class="fa fa-money"></i>868.12	тенге</li>
						<li><i class="fa fa-money"></i>669.44	тенге</li>
						<li><i class="fa fa-money"></i>855.20	тенге</li>
						<li><i class="fa fa-money"></i>972.26	тенге</li>
						<li><i class="fa fa-money"></i>1048.28	тенге</li>
						<li><i class="fa fa-money"></i>641.96	тенге</li>
						<li><i class="fa fa-money"></i>1048.28	тенге</li>
						<li><i class="fa fa-money"></i>879.10	тенге</li>
						<li><i class="fa fa-money"></i>759.87	тенге</li>
						<li><i class="fa fa-money"></i>658.46	тенге</li>
						<li><i class="fa fa-money"></i>1014.31	тенге</li>
					</ul>
				</div>
			</div>

			<div class="row">
				<!--
				--><div class="col col-4">
					<ul class="listing">
						<li><i class="fa fa-sort-numeric-asc"></i>C03.000.004</li>
						<li><br/><i class="fa fa-sort-numeric-asc"></i>C03.001.004</li>
						<li><i class="fa fa-sort-numeric-asc"></i>C03.002.004</li>
						<li><i class="fa fa-sort-numeric-asc"></i>C03.055.004</li>
						<li><i class="fa fa-sort-numeric-asc"></i>C03.003.004</li>
						<li><i class="fa fa-sort-numeric-asc"></i>C03.004.004</li>
						<li><i class="fa fa-sort-numeric-asc"></i>C03.005.004</li>
						<li><i class="fa fa-sort-numeric-asc"></i>C03.006.004</li>
						<li><br/><i class="fa fa-sort-numeric-asc"></i>C03.008.004</li>
						<li><br/><i class="fa fa-sort-numeric-asc"></i>C03.010.004</li>
						<li><i class="fa fa-sort-numeric-asc"></i>C03.011.004</li>
						<li><i class="fa fa-sort-numeric-asc"></i>C03.012.004</li>
						<li><br/><i class="fa fa-sort-numeric-asc"></i>C03.013.004</li>
						<li><i class="fa fa-sort-numeric-asc"></i>C03.017.004</li>
						<li><i class="fa fa-sort-numeric-asc"></i>C03.018.004</li>
						<li><i class="fa fa-sort-numeric-asc"></i>C03.019.004</li>
						<li><i class="fa fa-sort-numeric-asc"></i>C03.023.004</li>
						<li><i class="fa fa-sort-numeric-asc"></i>C03.057.004</li>
						<li><i class="fa fa-sort-numeric-asc"></i>C03.028.004</li>
						<li><i class="fa fa-sort-numeric-asc"></i>C03.029.004</li>
						<li><i class="fa fa-sort-numeric-asc"></i>C03.031.004</li>
						<li><i class="fa fa-sort-numeric-asc"></i>C03.032.004</li>
					</ul>
				</div><!--
				--><div class="col col-2">
					<ul class="listing">
						<li><i class="fa fa-list"></i>Ультразвуковая диагностика (УЗИ)</li>
						<li><i class="fa fa-flask"></i>гепатобилиопанкреатической области (печень, желчный пузырь, поджелудочная железа, селезенка)</li>
						<li><i class="fa fa-flask"></i>печени</li>
						<li><i class="fa fa-flask"></i>желчного пузыря и протоков</li>
						<li><i class="fa fa-flask"></i>желчного пузыря с определением функций</li>
						<li><i class="fa fa-flask"></i>селезенки</li>
						<li><i class="fa fa-flask"></i>поджелудочной железы</li>
						<li><i class="fa fa-flask"></i>почек</li>
						<li><i class="fa fa-flask"></i>Ультразвуковая диагностика комплексная (печень, желчный пузырь, поджелудочная железа, селезенка, почек)</li>
						<li><i class="fa fa-flask"></i>органов мочеполовой системы комплексное у мужчин (почки, надпочечники, мочевой пузырь с определением остаточной мочи, предстательная железа, яички)</li>
						<li><i class="fa fa-flask"></i>почек, мочевого пузыря с определением остаточной мочи</li>
						<li><i class="fa fa-flask"></i>мочевого пузыря с определением остаточной мочи</li>
						<li><i class="fa fa-flask"></i>Трансабдоминальное УЗИ предстательной железы и мочевого пузыря с определением остаточной мочи</li>
						<li><i class="fa fa-flask"></i>щитовидной железы</li>
						<li><i class="fa fa-flask"></i>молочных желёз</li>
						<li><i class="fa fa-flask"></i>поверхностных лимфатических узлов (одна анатомическая зона) </li>
						<li><i class="fa fa-flask"></i>мягких тканей</li>
						<li><i class="fa fa-flask"></i>брюшной полости, малого таза (наличие жидкости)</li>
						<li><i class="fa fa-flask"></i>гинекологическое (трансабдоминальное)</li>
						<li><i class="fa fa-flask"></i>гинекологическое (трансвагинальное)</li>
						<li><i class="fa fa-flask"></i>акушерское в 1 триместре беременности</li>
						<li><i class="fa fa-flask"></i>акушерское во 2 - 3 триместре беременности</li>
					</ul>
				</div><!--
				--><div class="col col-4">
					<ul class="listing">
						<li>&nbsp;</li>
						<li><br/><i class="fa fa-money"></i>1671.95	тенге</li>
						<li><i class="fa fa-money"></i>1461.08	тенге</li>
						<li><i class="fa fa-money"></i>1557.14	тенге</li>
						<li><i class="fa fa-money"></i>1557.14	тенге</li>
						<li><i class="fa fa-money"></i>993.39	тенге</li>
						<li><i class="fa fa-money"></i>1313.83	тенге</li>
						<li><i class="fa fa-money"></i>804.32	тенге</li>
						<li><br/><i class="fa fa-money"></i>1898.31	тенге</li>
						<li><br/><i class="fa fa-money"></i>2636.27	тенге</li>
						<li><i class="fa fa-money"></i>1497.39	тенге</li>
						<li><i class="fa fa-money"></i>540.55	тенге</li>
						<li><br/><i class="fa fa-money"></i>1241.04	тенге</li>
						<li><i class="fa fa-money"></i>1371.74	тенге</li>
						<li><i class="fa fa-money"></i>1352.71	тенге</li>
						<li><i class="fa fa-money"></i>1035.03	тенге</li>
						<li><i class="fa fa-money"></i>454.04	тенге</li>
						<li><i class="fa fa-money"></i>599.30	тенге</li>
						<li><i class="fa fa-money"></i>1342.90	тенге</li>
						<li><i class="fa fa-money"></i>1342.90	тенге</li>
						<li><i class="fa fa-money"></i>1342.90	тенге</li>
						<li><i class="fa fa-money"></i>1075.42	тенге</li>
					</ul>
				</div>
			</div>

			<div class="row">
				<!--
				--><div class="col col-4">
					<ul class="listing">
						<li><i class="fa fa-sort-numeric-asc"></i>C01.000.000</li>
						<li><i class="fa fa-sort-numeric-asc"></i>C01.000.001</li>
						<li><i class="fa fa-sort-numeric-asc"></i>C01.001.001</li>
					</ul>
				</div><!--
				--><div class="col col-2">
					<ul class="listing">
						<li><i class="fa fa-list"></i>Эндоскопические исследования</li>
						<li><i class="fa fa-list"></i>Диагностическая эндоскопия</li>
						<li><i class="fa fa-flask"></i>Фиброэзофагогастродуоденоскопия</li>
					</ul>
				</div><!--
				--><div class="col col-4">
					<ul class="listing">
						<li>&nbsp;</li>
						<li>&nbsp;</li>
						<li><i class="fa fa-money"></i>1894.81	тенге</li>
					</ul>
				</div>
			</div>

			<div class="row">
				<!--
				--><div class="col col-4">
					<ul class="listing">
						<li><i class="fa fa-sort-numeric-asc"></i>C03.000.005</li>
						<li><i class="fa fa-sort-numeric-asc"></i>C03.001.005</li>
						<li><i class="fa fa-sort-numeric-asc"></i>C03.002.005</li>
						<li><i class="fa fa-sort-numeric-asc"></i>C03.004.005</li>
						<li><i class="fa fa-sort-numeric-asc"></i>C03.005.005</li>
						<li><i class="fa fa-sort-numeric-asc"></i>C03.009.005</li>
						<li><i class="fa fa-sort-numeric-asc"></i>C03.015.005</li>
						<li><i class="fa fa-sort-numeric-asc"></i>C03.017.005</li>
						<li><i class="fa fa-sort-numeric-asc"></i>C03.019.005</li>
						<li><i class="fa fa-sort-numeric-asc"></i>C03.020.005</li>
						<li><i class="fa fa-sort-numeric-asc"></i>C03.022.005</li>
						<li><i class="fa fa-sort-numeric-asc"></i>C03.023.005</li>
						<li><i class="fa fa-sort-numeric-asc"></i>C03.024.005</li>
						<li><i class="fa fa-sort-numeric-asc"></i>C03.095.005</li>
						<li><i class="fa fa-sort-numeric-asc"></i>C03.028.005</li>
						<li><i class="fa fa-sort-numeric-asc"></i>C03.037.005</li>
						<li><i class="fa fa-sort-numeric-asc"></i>C03.096.005</li>
						<li><i class="fa fa-sort-numeric-asc"></i>C03.038.005</li>
						<li><i class="fa fa-sort-numeric-asc"></i>C03.039.005</li>
						<li><i class="fa fa-sort-numeric-asc"></i>C03.040.005</li>
						<li><i class="fa fa-sort-numeric-asc"></i>C03.097.005</li>
						<li><i class="fa fa-sort-numeric-asc"></i>C03.041.005</li>
						<li><i class="fa fa-sort-numeric-asc"></i>C03.043.005</li>
						<li><i class="fa fa-sort-numeric-asc"></i>C03.044.005</li>
						<li><i class="fa fa-sort-numeric-asc"></i>C03.098.005</li>
						<li><i class="fa fa-sort-numeric-asc"></i>C03.099.005</li>
						<li><i class="fa fa-sort-numeric-asc"></i>C03.045.005</li>
						<li><i class="fa fa-sort-numeric-asc"></i>C03.100.005</li>
						<li><i class="fa fa-sort-numeric-asc"></i>C03.101.005</li>
						<li><i class="fa fa-sort-numeric-asc"></i>C03.102.005</li>
						<li><i class="fa fa-sort-numeric-asc"></i>C03.103.005</li>
						<li><i class="fa fa-sort-numeric-asc"></i>C03.046.005</li>
						<li><i class="fa fa-sort-numeric-asc"></i>C03.048.005</li>
						<li><i class="fa fa-sort-numeric-asc"></i>C03.049.005</li>
						<li><i class="fa fa-sort-numeric-asc"></i>C03.050.005</li>
						<li><i class="fa fa-sort-numeric-asc"></i>C03.069.005</li>
						<li><i class="fa fa-sort-numeric-asc"></i>C03.082.005</li>
					</ul>
				</div><!--
				--><div class="col col-2">
					<ul class="listing">
						<li><i class="fa fa-list"></i>Рентген</li>
						<li><i class="fa fa-flask"></i>Диагностическая флюорография (1 проекция)</li>
						<li><i class="fa fa-flask"></i>Диагностическая флюорография (2 проекции)</li>
						<li><i class="fa fa-flask"></i>Рентгенография черепа (2 проекции)</li>
						<li><i class="fa fa-flask"></i>Рентгенография черепа (1 проекция)</li>
						<li><i class="fa fa-flask"></i>Рентгенография костей носа</li>
						<li><i class="fa fa-flask"></i>Рентгенография шейного отдела позвоночника</li>
						<li><i class="fa fa-flask"></i>Рентгенография грудного отдела позвоночника</li>
						<li><i class="fa fa-flask"></i>Рентгенография обзорная органов грудной клетки (1 проекция)</li>
						<li><i class="fa fa-flask"></i>Рентгенография органов грудной клетки (2 проекции)</li>
						<li><i class="fa fa-flask"></i>Рентгенография ребер</li>
						<li><i class="fa fa-flask"></i>Рентгенография грудины</li>
						<li><i class="fa fa-flask"></i>Рентгенография ключицы</li>
						<li><i class="fa fa-flask"></i>Рентгенография лопатки</li>
						<li><i class="fa fa-flask"></i>Обзорная рентгенография органов брюшной полости</li>
						<li><i class="fa fa-flask"></i>Рентгенография костей плеча</li>
						<li><i class="fa fa-flask"></i>Рентгенография костей предплечья</li>
						<li><i class="fa fa-flask"></i>Рентгенография  локтевого сустава</li>
						<li><i class="fa fa-flask"></i>Рентгенография плечевого сустава</li>
						<li><i class="fa fa-flask"></i>Рентгенография кисти с захватом лучезапястного сустава</li>
						<li><i class="fa fa-flask"></i>Рентгенография кисти</li>
						<li><i class="fa fa-flask"></i>Рентгенография пояснично-крестцового отдела позвоночника</li>
						<li><i class="fa fa-flask"></i>Рентгенография костей таза и тазобедренных суставов</li>
						<li><i class="fa fa-flask"></i>Рентгенография крестцово-подвздошных сочленений</li>
						<li><i class="fa fa-flask"></i>Рентгенография крестцово-копчикового отдела</li>
						<li><i class="fa fa-flask"></i>Рентгенография тазобедренного сустава</li>
						<li><i class="fa fa-flask"></i>Рентгенография бедренной кости</li>
						<li><i class="fa fa-flask"></i>Рентгенография коленного сустава (1 проекция)</li>
						<li><i class="fa fa-flask"></i>Рентгенография коленного сустава (2 проекции)</li>
						<li><i class="fa fa-flask"></i>Рентгенография голеностопного сустава (1 проекция)</li>
						<li><i class="fa fa-flask"></i>Рентгенография голеностопного сустава (2 проекции)</li>
						<li><i class="fa fa-flask"></i>Рентгенография костей голени</li>
						<li><i class="fa fa-flask"></i>Рентгенография пальцев кисти/стопы</li>
						<li><i class="fa fa-flask"></i>Рентгенография стопы</li>
						<li><i class="fa fa-flask"></i>Рентгенография стоп в боковой проекции</li>
						<li><i class="fa fa-flask"></i>Рентгенография пазух носа</li>
						<li><i class="fa fa-flask"></i>Маммография (4 снимка)</li>
					</ul>
				</div><!--
				--><div class="col col-4">
					<ul class="listing">
						<li>&nbsp;</li>
						<li><i class="fa fa-money"></i>313.06	тенге</li>
						<li><i class="fa fa-money"></i>477.06	тенге</li>
						<li><i class="fa fa-money"></i>962.23	тенге</li>
						<li><i class="fa fa-money"></i>575.13	тенге</li>
						<li><i class="fa fa-money"></i>311.78	тенге</li>
						<li><i class="fa fa-money"></i>690.25	тенге</li>
						<li><i class="fa fa-money"></i>690.25	тенге</li>
						<li><i class="fa fa-money"></i>559.13	тенге</li>
						<li><i class="fa fa-money"></i>690.25	тенге</li>
						<li><i class="fa fa-money"></i>1032.92	тенге</li>
						<li><i class="fa fa-money"></i>598.25	тенге</li>
						<li><i class="fa fa-money"></i>598.25	тенге</li>
						<li><i class="fa fa-money"></i>598.25	тенге</li>
						<li><i class="fa fa-money"></i>697.11	тенге</li>
						<li><i class="fa fa-money"></i>803.20	тенге</li>
						<li><i class="fa fa-money"></i>1042.48	тенге</li>
						<li><i class="fa fa-money"></i>803.20	тенге</li>
						<li><i class="fa fa-money"></i>376.08	тенге</li>
						<li><i class="fa fa-money"></i>803.20	тенге</li>
						<li><i class="fa fa-money"></i>803.20	тенге</li>
						<li><i class="fa fa-money"></i>1056.79	тенге</li>
						<li><i class="fa fa-money"></i>718.09	тенге</li>
						<li><i class="fa fa-money"></i>394.83	тенге</li>
						<li><i class="fa fa-money"></i>1297.79	тенге</li>
						<li><i class="fa fa-money"></i>803.20	тенге</li>
						<li><i class="fa fa-money"></i>803.20	тенге</li>
						<li><i class="fa fa-money"></i>803.20	тенге</li>
						<li><i class="fa fa-money"></i>803.20	тенге</li>
						<li><i class="fa fa-money"></i>803.20	тенге</li>
						<li><i class="fa fa-money"></i>803.20	тенге</li>
						<li><i class="fa fa-money"></i>803.20	тенге</li>
						<li><i class="fa fa-money"></i>543.81	тенге</li>
						<li><i class="fa fa-money"></i>640.20	тенге</li>
						<li><i class="fa fa-money"></i>640.20	тенге</li>
						<li><i class="fa fa-money"></i>893.78	тенге</li>
						<li><i class="fa fa-money"></i>2268.79	тенге</li>
					</ul>
				</div>
			</div>

			<div class="row">
				<!--
				--><div class="col col-4">
					<ul class="listing">
						<li><i class="fa fa-sort-numeric-asc"></i>14</li>
						<li><i class="fa fa-sort-numeric-asc"></i>В01.002.001</li>
						<li><i class="fa fa-sort-numeric-asc"></i>В01.003.001</li>
						<li><i class="fa fa-sort-numeric-asc"></i>В01.054.001</li>
						<li><i class="fa fa-sort-numeric-asc"></i>В01.069.001</li>
						<li><i class="fa fa-sort-numeric-asc"></i>В01.073.001</li>
						<li><i class="fa fa-sort-numeric-asc"></i>В01.075.001</li>
						<li><i class="fa fa-sort-numeric-asc"></i>В01.077.001</li>
						<li><i class="fa fa-sort-numeric-asc"></i>В01.083.001</li>
						<li><i class="fa fa-sort-numeric-asc"></i>В01.087.001</li>
						<li><i class="fa fa-sort-numeric-asc"></i>В01.091.001</li>
						<li><i class="fa fa-sort-numeric-asc"></i>В01.005.001</li>
						<li><br/><i class="fa fa-sort-numeric-asc"></i>В01.094.001</li>
						<li><i class="fa fa-sort-numeric-asc"></i>В01.100.001</li>
						<li><i class="fa fa-sort-numeric-asc"></i>В01.104.001</li>
						<li><i class="fa fa-sort-numeric-asc"></i>В01.107.001</li>
						<li><i class="fa fa-sort-numeric-asc"></i>В01.109.001</li>
						<li><i class="fa fa-sort-numeric-asc"></i>В01.294.001</li>
						<li><i class="fa fa-sort-numeric-asc"></i>B01.299.001</li>
						<li><i class="fa fa-sort-numeric-asc"></i>B01.300.001</li>
						<li><i class="fa fa-sort-numeric-asc"></i>В01.004.001</li>
						<li><i class="fa fa-sort-numeric-asc"></i>B01.323.001</li>
						<li><i class="fa fa-sort-numeric-asc"></i>B01.332.001</li>
						<li><i class="fa fa-sort-numeric-asc"></i>B01.333.001</li>
						<li><i class="fa fa-sort-numeric-asc"></i>B01.334.001</li>
						<li><i class="fa fa-sort-numeric-asc"></i>B01.341.001</li>
						<li><i class="fa fa-sort-numeric-asc"></i>B01.355.001</li>
						<li><i class="fa fa-sort-numeric-asc"></i>B01.458.001</li>
						<li><i class="fa fa-sort-numeric-asc"></i>B01.479.001</li>
						<li><i class="fa fa-sort-numeric-asc"></i>B02.061.001</li>
						<li><i class="fa fa-sort-numeric-asc"></i>B02.096.001</li>
						<li><i class="fa fa-sort-numeric-asc"></i>B02.112.001</li>
						<li><i class="fa fa-sort-numeric-asc"></i>B02.114.001</li>
						<li><i class="fa fa-sort-numeric-asc"></i>B02.295.001</li>
						<li><i class="fa fa-sort-numeric-asc"></i>B02.322.001</li>
						<li><i class="fa fa-sort-numeric-asc"></i>B02.421.001</li>
						<li><i class="fa fa-sort-numeric-asc"></i>B02.443.001</li>
						<li><i class="fa fa-sort-numeric-asc"></i>B02.528.001</li>
						<li><i class="fa fa-sort-numeric-asc"></i>B02.530.001</li>
						<li><i class="fa fa-sort-numeric-asc"></i>B02.532.001</li>
						<li><i class="fa fa-sort-numeric-asc"></i>B02.534.001</li>
						<li><i class="fa fa-sort-numeric-asc"></i>B02.536.001</li>
						<li><i class="fa fa-sort-numeric-asc"></i>B02.537.001</li>
						<li><br/><i class="fa fa-sort-numeric-asc"></i>B03.116.001</li>
						<li><i class="fa fa-sort-numeric-asc"></i>B03.155.001</li>
						<li><br/><i class="fa fa-sort-numeric-asc"></i>B03.293.001</li>
						<li><i class="fa fa-sort-numeric-asc"></i>B03.335.001</li>
						<li><i class="fa fa-sort-numeric-asc"></i>B03.340.001</li>
						<li><i class="fa fa-sort-numeric-asc"></i>B03.349.001</li>
						<li><i class="fa fa-sort-numeric-asc"></i>B03.356.001</li>
						<li><i class="fa fa-sort-numeric-asc"></i>B03.362.001</li>
						<li><i class="fa fa-sort-numeric-asc"></i>B03.363.001</li>
						<li><i class="fa fa-sort-numeric-asc"></i>B03.386.001</li>
						<li><i class="fa fa-sort-numeric-asc"></i>B03.387.001</li>
						<li><i class="fa fa-sort-numeric-asc"></i>B03.390.001</li>
						<li><br/><i class="fa fa-sort-numeric-asc"></i>B03.394.001</li>
						<li><i class="fa fa-sort-numeric-asc"></i>B03.397.001</li>
						<li><i class="fa fa-sort-numeric-asc"></i>B03.398.001</li>
						<li><i class="fa fa-sort-numeric-asc"></i>B03.401.001</li>
						<li><i class="fa fa-sort-numeric-asc"></i>B03.403.001</li>
						<li><br/><i class="fa fa-sort-numeric-asc"></i>B03.404.001</li>
						<li><i class="fa fa-sort-numeric-asc"></i>B03.435.001</li>
						<li><br/><i class="fa fa-sort-numeric-asc"></i>B03.438.001</li>
						<li><i class="fa fa-sort-numeric-asc"></i>B03.486.001</li>
						<li><i class="fa fa-sort-numeric-asc"></i>B03.488.001</li>
						<li><i class="fa fa-sort-numeric-asc"></i>B03.353.001</li>
						<li><i class="fa fa-sort-numeric-asc"></i>B03.348.001</li>
						<li><i class="fa fa-sort-numeric-asc"></i>B03.389.001</li>
						<li><i class="fa fa-sort-numeric-asc"></i>B03.556.001</li>
						<li><i class="fa fa-sort-numeric-asc"></i>B03.397.002</li>
						<li><i class="fa fa-sort-numeric-asc"></i>B03.156.002</li>
						<li><i class="fa fa-sort-numeric-asc"></i>B03.155.002</li>
						<li><i class="fa fa-sort-numeric-asc"></i>B03.435.002</li>
						<li><i class="fa fa-sort-numeric-asc"></i>B03.398.002</li>
						<li><br/><i class="fa fa-sort-numeric-asc"></i>B03.293.002</li>
						<li><i class="fa fa-sort-numeric-asc"></i>B03.526.002</li>
						<li><i class="fa fa-sort-numeric-asc"></i>B03.403.002</li>
						<li><i class="fa fa-sort-numeric-asc"></i>B03.375.002</li>
						<li><i class="fa fa-sort-numeric-asc"></i>B03.348.002</li>
						<li><i class="fa fa-sort-numeric-asc"></i>B03.353.002</li>
						<li><i class="fa fa-sort-numeric-asc"></i>B03.514.002</li>
						<li><i class="fa fa-sort-numeric-asc"></i>B03.389.002</li>
						<li><i class="fa fa-sort-numeric-asc"></i>B03.378.002</li>
						<li><i class="fa fa-sort-numeric-asc"></i>B03.340.002</li>
						<li><br/><i class="fa fa-sort-numeric-asc"></i>B03.404.002</li>
						<li><i class="fa fa-sort-numeric-asc"></i>B03.401.002</li>
						<li><i class="fa fa-sort-numeric-asc"></i>B03.486.002</li>
						<li><i class="fa fa-sort-numeric-asc"></i>B03.335.002</li>
						<li><i class="fa fa-sort-numeric-asc"></i>B03.386.002</li>
						<li><i class="fa fa-sort-numeric-asc"></i>B03.363.002</li>
						<li><i class="fa fa-sort-numeric-asc"></i>B03.387.002</li>
						<li><i class="fa fa-sort-numeric-asc"></i>B03.401.003</li>
						<li><i class="fa fa-sort-numeric-asc"></i>B03.335.003</li>
						<li><i class="fa fa-sort-numeric-asc"></i>B03.486.003</li>
						<li><i class="fa fa-sort-numeric-asc"></i>B03.103.003</li>
						<li><i class="fa fa-sort-numeric-asc"></i>B06.680.012</li>
						<li><br/><i class="fa fa-sort-numeric-asc"></i>B06.681.012</li>
						<li><i class="fa fa-sort-numeric-asc"></i>B06.683.012</li>
						<li><i class="fa fa-sort-numeric-asc"></i>B06.684.012</li>
						<li><i class="fa fa-sort-numeric-asc"></i>B06.677.012</li>
					</ul>
				</div><!--
				--><div class="col col-2">
					<ul class="listing">
						<li><i class="fa fa-list"></i>Лабораторные исследования</li>
						<li><i class="fa fa-flask"></i>Анализ мочевого осадка по Адисс-Каковскому ручным методом</li>
						<li><i class="fa fa-flask"></i>Анализ мочевого осадка по Амбурже  ручным методом</li>
						<li><i class="fa fa-flask"></i>Бактериоскопия мокроты на БК ручным методом</li>
						<li><i class="fa fa-flask"></i>Исследование биологического материала на патогенные грибы ручным методом</li>
						<li><i class="fa fa-flask"></i>Исследование кала общеклиническое ручным методом</li>
						<li><i class="fa fa-flask"></i>Исследование мокроты общеклиническое ручным методом</li>
						<li><i class="fa fa-flask"></i>Исследование мочи общеклиническое(общий анализ мочи) ручным методом</li>
						<li><i class="fa fa-flask"></i>Исследование синовиальной жидкости общеклиническое ручным методом</li>
						<li><i class="fa fa-flask"></i>Исследование спинномозговой жидкости общеклиническое ручным методом</li>
						<li><i class="fa fa-flask"></i>Исследование биологического материала на демодекоз ручным методом</li>
						<li><i class="fa fa-flask"></i>Анализ мочи по Нечипоренко ручным методом</li>
						<li><i class="fa fa-flask"></i>Микроскопия спинномозговой жидкости на кислотоустоичивые бактерии ручным методом</li>
						<li><i class="fa fa-flask"></i>Исследование кала на простейшие и гельминты  ручным методом</li>
						<li><i class="fa fa-flask"></i>Обнаружение скрытой крови в кале качественное ручным методом</li>
						<li><i class="fa fa-flask"></i>Обнаружение чесоточного клеща в биологическом материале ручным методом</li>
						<li><i class="fa fa-flask"></i>Иследование перианального соскоба ручным методом</li>
						<li><i class="fa fa-flask"></i>Определение атипических клеток в мокроте ручным методом</li>
						<li><i class="fa fa-flask"></i>Определение белка в моче (качественно) ручным методом</li>
						<li><i class="fa fa-flask"></i>Определение белка в моче (количественно) ручным методом</li>
						<li><i class="fa fa-flask"></i>Анализ мочи по Зимницкому ручным методом</li>
						<li><i class="fa fa-flask"></i>Определение гемосидерина в моче ручным методом</li>
						<li><i class="fa fa-flask"></i>Определение глюкозы в моче (качественно) ручным методом</li>
						<li><i class="fa fa-flask"></i>Определение глюкозы в моче (количественно) ручным методом</li>
						<li><i class="fa fa-flask"></i>Определение глюкозы в суточной моче ручным методом</li>
						<li><i class="fa fa-flask"></i>Определение желчных пигментов в моче ручным методом</li>
						<li><i class="fa fa-flask"></i>Определение кетоновых тел в моче ручным методом</li>
						<li><i class="fa fa-flask"></i>Определение степени чистоты гинекологического мазка ручным методом</li>
						<li><i class="fa fa-flask"></i>Определение суточной протеинурии в моче ручным методом</li>
						<li><i class="fa fa-flask"></i>Измерение скорости оседания эритроцитов (СОЭ) в крови ручным методом</li>
						<li><i class="fa fa-flask"></i>Обнаружение LE-клеток крови ручным методом</li>
						<li><i class="fa fa-flask"></i>Общий анализ крови 3 параметра ручным методом</li>
						<li><i class="fa fa-flask"></i>Общий анализ крови 6 параметров ручным методом</li>
						<li><i class="fa fa-flask"></i>Определение аутогемолиза ручным методом</li>
						<li><i class="fa fa-flask"></i>Определение гемоглобина в крови ручным методом</li>
						<li><i class="fa fa-flask"></i>Определение осмотической резистентности эритроцитов крови ручным методом</li>
						<li><i class="fa fa-flask"></i>Определение свободного гемоглобина в сыворотке крови ручным методом</li>
						<li><i class="fa fa-flask"></i>Подсчет лейкоформулы в крови ручным методом</li>
						<li><i class="fa fa-flask"></i>Подсчет лейкоцитов в крови ручным методом</li>
						<li><i class="fa fa-flask"></i>Подсчет ретикулоцитов в крови ручным методом</li>
						<li><i class="fa fa-flask"></i>Подсчет тромбоцитов в крови ручным методом</li>
						<li><i class="fa fa-flask"></i>Подсчет эритроцитов в крови ручным методом</li>
						<li><i class="fa fa-flask"></i>Подсчет эритроцитов с базофильной зернистостью в крови ручным методом</li>
						<li><i class="fa fa-flask"></i>Определение "C" реактивного белка (СРБ) полуколичественно/качественно в сыворотке крови ручным методом</li>
						<li><i class="fa fa-flask"></i>Определение аланинаминотрансферазы (АЛаТ) в сыворотке крови ручным методом</li>
						<li><i class="fa fa-flask"></i>Определение аспартатаминотрансферазы (АСаТ) в сыворотке крови ручным методом</li>
						<li><i class="fa fa-flask"></i>Определение глюкозы в сыворотке крови ручным методом</li>
						<li><i class="fa fa-flask"></i>Определение железа (Fe) в сыворотке крови ручным методом</li>
						<li><i class="fa fa-flask"></i>Определение калия в других биологических материалах ручным методом</li>
						<li><i class="fa fa-flask"></i>Определение кислой фосфатазы в сыворотке крови ручным методом</li>
						<li><i class="fa fa-flask"></i>Определение креатинина в моче ручным методом</li>
						<li><i class="fa fa-flask"></i>Определение креатинина в сыворотке крови ручным методом</li>
						<li><i class="fa fa-flask"></i>Определение мочевины в сыворотке крови ручным методом</li>
						<li><i class="fa fa-flask"></i>Определение мочевой кислоты в сыворотке крови ручным методом</li>
						<li><i class="fa fa-flask"></i>Определение натрия (Na) в других биологических материалах ручным методом</li>
						<li><i class="fa fa-flask"></i>Определение ненасыщенной железосвязывающей способности сыворотки крови (НЖСС) ручным методом</li>
						<li><i class="fa fa-flask"></i>Определение общего белка в сыворотке крови ручным методом</li>
						<li><i class="fa fa-flask"></i>Определение общего билирубина в сыворотке крови ручным методом</li>
						<li><i class="fa fa-flask"></i>Определение общего холестерина в сыворотке крови ручным методом</li>
						<li><i class="fa fa-flask"></i>Определение общей альфа-амилазы в сыворотке крови ручным методом</li>
						<li><i class="fa fa-flask"></i>Определение общей железосвязывающей способности сыворотки крови (ОЖСС) ручным методом</li>
						<li><i class="fa fa-flask"></i>Определение прямого билирубина в сыворотке крови ручным методом</li>
						<li><i class="fa fa-flask"></i>Определение ревматоидного фактора полуколичественно/качественно в сыворотке крови ручным методом</li>
						<li><i class="fa fa-flask"></i>Определение триглицеридов в сыворотке крови ручным методом</li>
						<li><i class="fa fa-flask"></i>Определение тропонина в сыворотке крови ручным методом</li>
						<li><i class="fa fa-flask"></i>Определение кальция (Ca) в сыворотке крови ручным методом</li>
						<li><i class="fa fa-flask"></i>Определение калия (K) в сыворотке крови ручным методом</li>
						<li><i class="fa fa-flask"></i>Определение натрия (Na) в сыворотке крови ручным методом</li>
						<li><i class="fa fa-flask"></i>Тимоловая проба в сыворотке крови ручным методом</li>
						<li><i class="fa fa-flask"></i>Определение общего белка в сыворотке крови на анализаторе</li>
						<li><i class="fa fa-flask"></i>Определение альбумина в сыворотке крови на анализаторе</li>
						<li><i class="fa fa-flask"></i>Определение аланинаминотрансферазы (АЛаТ) в сыворотке крови на анализаторе</li>
						<li><i class="fa fa-flask"></i>Определение прямого билирубина в сыворотке крови на анализаторе</li>
						<li><i class="fa fa-flask"></i>Определение общего билирубина в сыворотке крови на анализаторе</li>
						<li><i class="fa fa-flask"></i>Определение аспартатаминотрансферазы (АСаТ) в сыворотке крови на анализаторе</li>
						<li><i class="fa fa-flask"></i>Определение щелочной фосфатазы в сыворотке крови на анализаторе</li>
						<li><i class="fa fa-flask"></i>Определение общей альфа-амилазы в сыворотке крови на анализаторе</li>
						<li><i class="fa fa-flask"></i>Определение магния (Mg) в сыворотке крови на анализаторе</li>
						<li><i class="fa fa-flask"></i>Определение калия (K) в сыворотке крови на анализаторе</li>
						<li><i class="fa fa-flask"></i>Определение кальция (Ca) в сыворотке крови на анализаторе</li>
						<li><i class="fa fa-flask"></i>Определение хлоридов (Cl) в сыворотке крови на анализаторе</li>
						<li><i class="fa fa-flask"></i>Определение натрия (Na) в сыворотке крови на анализаторе</li>
						<li><i class="fa fa-flask"></i>Определение меди (Cu) в сыворотке крови на анализаторе</li>
						<li><i class="fa fa-flask"></i>Определение железа (Fe) в сыворотке крови на анализаторе</li>
						<li><i class="fa fa-flask"></i>Определение общей железосвязывающей способности сыворотки крови (ОЖСС) на анализаторе</li>
						<li><i class="fa fa-flask"></i>Определение общего холестерина в сыворотке крови на анализаторе</li>
						<li><i class="fa fa-flask"></i>Определение триглицеридов в сыворотке крови на анализаторе</li>
						<li><i class="fa fa-flask"></i>Определение глюкозы в сыворотке крови на анализаторе</li>
						<li><i class="fa fa-flask"></i>Определение мочевины в сыворотке крови на анализаторе</li>
						<li><i class="fa fa-flask"></i>Определение креатинина в сыворотке крови на анализаторе</li>
						<li><i class="fa fa-flask"></i>Определение мочевой кислоты в сыворотке крови на анализаторе</li>
						<li><i class="fa fa-flask"></i>Определение общего холестерина в сыворотке крови экспресс методом</li>
						<li><i class="fa fa-flask"></i>Определение глюкозы в сыворотке крови экспресс методом</li>
						<li><i class="fa fa-flask"></i>Определение триглицеридов в сыворотке крови экспресс методом</li>
						<li><i class="fa fa-flask"></i>Обнаружение скрытой крови в кале (гемокульт-тест) экспресс методом</li>
						<li><i class="fa fa-flask"></i>Постановка реакции Вассермана в сыворотке крови ручным методом</li>
						<li><i class="fa fa-flask"></i>Постановка реакции микропреципитации с кардиолипиновым антигеном в сыворотке крови ручным методом</li>
						<li><i class="fa fa-flask"></i>Постановка реакции Райта в сыворотке крови на бруцеллез</li>
						<li><i class="fa fa-flask"></i>Постановка реакции Хеддельсона в сыворотке крови на бруцеллез</li>
						<li><i class="fa fa-flask"></i>Определение резус-фактора крови</li>
					</ul>
				</div><!--
				--><div class="col col-4">
					<ul class="listing">
						<li>&nbsp;</li>
						<li><i class="fa fa-money"></i>313.75	тенге</li>
						<li><i class="fa fa-money"></i>257.54	тенге</li>
						<li><i class="fa fa-money"></i>352.88	тенге</li>
						<li><i class="fa fa-money"></i>549.82	тенге</li>
						<li><i class="fa fa-money"></i>412.54	тенге</li>
						<li><i class="fa fa-money"></i>540.70	тенге</li>
						<li><i class="fa fa-money"></i>262.99	тенге</li>
						<li><i class="fa fa-money"></i>1205.14	тенге</li>
						<li><i class="fa fa-money"></i>749.83	тенге</li>
						<li><i class="fa fa-money"></i>351.63	тенге</li>
						<li><i class="fa fa-money"></i>337	тенге</li>
						<li><br/><i class="fa fa-money"></i>844.35	тенге</li>
						<li><i class="fa fa-money"></i>340.95	тенге</li>
						<li><i class="fa fa-money"></i>176.80	тенге</li>
						<li><i class="fa fa-money"></i>351.63	тенге</li>
						<li><i class="fa fa-money"></i>680.91	тенге</li>
						<li><i class="fa fa-money"></i>283.64	тенге</li>
						<li><i class="fa fa-money"></i>25.57	тенге</li>
						<li><i class="fa fa-money"></i>80.93	тенге</li>
						<li><i class="fa fa-money"></i>202.48	тенге</li>
						<li><i class="fa fa-money"></i>370.43	тенге</li>
						<li><i class="fa fa-money"></i>55.74	тенге</li>
						<li><i class="fa fa-money"></i>198.56	тенге</li>
						<li><i class="fa fa-money"></i>152.66	тенге</li>
						<li><i class="fa fa-money"></i>73.13	тенге</li>
						<li><i class="fa fa-money"></i>171.45	тенге</li>
						<li><i class="fa fa-money"></i>389.20	тенге</li>
						<li><i class="fa fa-money"></i>138.05	тенге</li>
						<li><i class="fa fa-money"></i>189.05	тенге</li>
						<li><i class="fa fa-money"></i>406.31	тенге</li>
						<li><i class="fa fa-money"></i>531.15	тенге</li>
						<li><i class="fa fa-money"></i>623.85	тенге</li>
						<li><i class="fa fa-money"></i>472.33	тенге</li>
						<li><i class="fa fa-money"></i>179.64	тенге</li>
						<li><i class="fa fa-money"></i>330.93	тенге</li>
						<li><i class="fa fa-money"></i>968.88	тенге</li>
						<li><i class="fa fa-money"></i>505.15	тенге</li>
						<li><i class="fa fa-money"></i>131.10	тенге</li>
						<li><i class="fa fa-money"></i>343.48	тенге</li>
						<li><i class="fa fa-money"></i>393.06	тенге</li>
						<li><i class="fa fa-money"></i>154.67	тенге</li>
						<li><i class="fa fa-money"></i>358.58	тенге</li>
						<li><br/><i class="fa fa-money"></i>398.76	тенге</li>
						<li><i class="fa fa-money"></i>401.87	тенге</li>
						<li><br/><i class="fa fa-money"></i>341.78	тенге</li>
						<li><i class="fa fa-money"></i>326.53	тенге</li>
						<li><i class="fa fa-money"></i>642.21	тенге</li>
						<li><br/><i class="fa fa-money"></i>339.35	тенге</li>
						<li><i class="fa fa-money"></i>339.35	тенге</li>
						<li><i class="fa fa-money"></i>352.39	тенге</li>
						<li><i class="fa fa-money"></i>416.66	тенге</li>
						<li><i class="fa fa-money"></i>506.65	тенге</li>
						<li><i class="fa fa-money"></i>489.28	тенге</li>
						<li><i class="fa fa-money"></i>446.87	тенге</li>
						<li><i class="fa fa-money"></i>339.35	тенге</li>
						<li><i class="fa fa-money"></i>322.64	тенге</li>
						<li><i class="fa fa-money"></i>439.91	тенге</li>
						<li><i class="fa fa-money"></i>393.19	тенге</li>
						<li><i class="fa fa-money"></i>729.75	тенге</li>
						<li><br/><i class="fa fa-money"></i>577.47	тенге</li>
						<li><i class="fa fa-money"></i>439.91	тенге</li>
						<li><br/><i class="fa fa-money"></i>316.05	тенге</li>
						<li><i class="fa fa-money"></i>631.50	тенге</li>
						<li><i class="fa fa-money"></i>296.28	тенге</li>
						<li><i class="fa fa-money"></i>362.29	тенге</li>
						<li><i class="fa fa-money"></i>183.70	тенге</li>
						<li><i class="fa fa-money"></i>183.70	тенге</li>
						<li><i class="fa fa-money"></i>561.70	тенге</li>
						<li><i class="fa fa-money"></i>38.61	тенге</li>
						<li><i class="fa fa-money"></i>41.50	тенге</li>
						<li><i class="fa fa-money"></i>39.18	тенге</li>
						<li><i class="fa fa-money"></i>58.88	тенге</li>
						<li><i class="fa fa-money"></i>52.07	тенге</li>
						<li><br/><i class="fa fa-money"></i>39.18	тенге</li>
						<li><i class="fa fa-money"></i>45.64	тенге</li>
						<li><i class="fa fa-money"></i>149.74	тенге</li>
						<li><i class="fa fa-money"></i>391.59	тенге</li>
						<li><i class="fa fa-money"></i>29.86	тенге</li>
						<li><i class="fa fa-money"></i>45.90	тенге</li>
						<li><i class="fa fa-money"></i>330.71	тенге</li>
						<li><i class="fa fa-money"></i>29.86	тенге</li>
						<li><i class="fa fa-money"></i>330.71	тенге</li>
						<li><i class="fa fa-money"></i>145.73	тенге</li>
						<li><br/><i class="fa fa-money"></i>76.00	тенге</li>
						<li><i class="fa fa-money"></i>46.68	тенге</li>
						<li><i class="fa fa-money"></i>69.61	тенге</li>
						<li><i class="fa fa-money"></i>49.35	тенге</li>
						<li><i class="fa fa-money"></i>49.02	тенге</li>
						<li><i class="fa fa-money"></i>31.02	тенге</li>
						<li><i class="fa fa-money"></i>43.65	тенге</li>
						<li><i class="fa fa-money"></i>585.87	тенге</li>
						<li><i class="fa fa-money"></i>80.77	тенге</li>
						<li><i class="fa fa-money"></i>343.08	тенге</li>
						<li><i class="fa fa-money"></i>1169.77	тенге</li>
						<li><i class="fa fa-money"></i>557.74	тенге</li>
						<li><br/><i class="fa fa-money"></i>163.02	тенге</li>
						<li><i class="fa fa-money"></i>516.06	тенге</li>
						<li><i class="fa fa-money"></i>423.94	тенге</li>
						<li><i class="fa fa-money"></i>424.63	тенге</li>
					</ul>
				</div>
			</div>

			<div class="row">
				<!--
				--><div class="col col-4">
					<ul class="listing">
						<li><i class="fa fa-sort-numeric-asc"></i>D</li>
						<li><i class="fa fa-sort-numeric-asc"></i>D01.000.000</li>
						<li><i class="fa fa-sort-numeric-asc"></i>DХХ.ХХХ.000</li>
						<li><i class="fa fa-sort-numeric-asc"></i>D99.295.007</li>
						<li><i class="fa fa-sort-numeric-asc"></i>D96.700.027</li>
						<li><i class="fa fa-sort-numeric-asc"></i>D04.820.008</li>
						<li><i class="fa fa-sort-numeric-asc"></i>D99.293.012</li>
						<li><i class="fa fa-sort-numeric-asc"></i>D91.911.013</li>
						<li><i class="fa fa-sort-numeric-asc"></i>D96.330.014</li>
						<li><i class="fa fa-sort-numeric-asc"></i>D96.390.015</li>
						<li><i class="fa fa-sort-numeric-asc"></i>D93.891.018</li>
						<li><i class="fa fa-sort-numeric-asc"></i>D99.590.019</li>
						<li><i class="fa fa-sort-numeric-asc"></i>D89.700.020</li>
						<li><i class="fa fa-sort-numeric-asc"></i>D92.060.023</li>
						<li><i class="fa fa-sort-numeric-asc"></i>D86.190.031</li>
						<li><i class="fa fa-sort-numeric-asc"></i>D86.410.032</li>
						<li><i class="fa fa-sort-numeric-asc"></i>D88.790.001</li>
						<li><i class="fa fa-sort-numeric-asc"></i>D97.311.050</li>
					</ul>
				</div><!--
				--><div class="col col-2">
					<ul class="listing">
						<li><i class="fa fa-list"></i>ПРОЦЕДУРЫ И МАНИПУЛЯЦИИ</li>
						<li><i class="fa fa-list"></i>Клинические процедуры и манипуляции</li>
						<li><i class="fa fa-list"></i>Общие</li>
						<li><i class="fa fa-flask"></i>Наркоз внутривенный</li>
						<li><i class="fa fa-flask"></i>Интубационный наркоз</li>
						<li><i class="fa fa-flask"></i>Новокаиновая блокада</li>
						<li><i class="fa fa-flask"></i>Забор крови из вены</li>
						<li><i class="fa fa-flask"></i>Забор материала на микробиологические исследования</li>
						<li><i class="fa fa-flask"></i>Промывание желудка</li>
						<li><i class="fa fa-flask"></i>Клизма</li>
						<li><i class="fa fa-flask"></i>Процедуры сестринского ухода за пациентом старческого возраста</li>
						<li><i class="fa fa-flask"></i>Вакцинация без стоимости препарата</li>
						<li><i class="fa fa-flask"></i>Диагностическая пункция (поверхностная)</li>
						<li><i class="fa fa-flask"></i>Предлучевая топометрическая подготовка-центрация</li>
						<li><i class="fa fa-flask"></i>Открытая биопсия образования лимфоузла</li>
						<li><i class="fa fa-flask"></i>Хирургическое удаление патологии и/или новообразований кожи/подкожной ткани</li>
						<li><i class="fa fa-flask"></i>Пункционная/аспирационная биопсия под УЗ контролем</li>
						<li><i class="fa fa-flask"></i>Снятие швов, удаление лигатур</li>
					</ul>
				</div><!--
				--><div class="col col-4">
					<ul class="listing">
						<li>&nbsp;</li>
						<li>&nbsp;</li>
						<li>&nbsp;</li>
						<li><i class="fa fa-money"></i>1951.72	тенге</li>
						<li><i class="fa fa-money"></i>16002.63	тенге</li>
						<li><i class="fa fa-money"></i>636.03	тенге</li>
						<li><i class="fa fa-money"></i>134.02	тенге</li>
						<li><i class="fa fa-money"></i>142.86	тенге</li>
						<li><i class="fa fa-money"></i>234.73	тенге</li>
						<li><i class="fa fa-money"></i>160.91	тенге</li>
						<li><i class="fa fa-money"></i>177.91	тенге</li>
						<li><i class="fa fa-money"></i>121.19	тенге</li>
						<li><i class="fa fa-money"></i>515.69	тенге</li>
						<li><i class="fa fa-money"></i>1684.61	тенге</li>
						<li><i class="fa fa-money"></i>1398.41	тенге</li>
						<li><i class="fa fa-money"></i>985.10	тенге</li>
						<li><i class="fa fa-money"></i>8870.52	тенге</li>
						<li><i class="fa fa-money"></i>344.41	тенге</li>
					</ul>
				</div>
			</div>

			<div class="row">
				<!--
				--><div class="col col-4">
					<ul class="listing">
						<li><i class="fa fa-sort-numeric-asc"></i>DХХ.ХХХ.100</li>
						<li><i class="fa fa-sort-numeric-asc"></i>D69.700.101</li>
						<li><i class="fa fa-sort-numeric-asc"></i>D91.496.105</li>
						<li><i class="fa fa-sort-numeric-asc"></i>D91.494.107</li>
						<li><i class="fa fa-sort-numeric-asc"></i>D70.210.117</li>
						<li><i class="fa fa-sort-numeric-asc"></i>D71.250.124</li>
						<li><i class="fa fa-sort-numeric-asc"></i>D67.320.125</li>
						<li><i class="fa fa-sort-numeric-asc"></i>D67.110.126</li>
						<li><i class="fa fa-sort-numeric-asc"></i>D67.120.127</li>
						<li><i class="fa fa-sort-numeric-asc"></i>D97.710.128</li>
						<li><i class="fa fa-sort-numeric-asc"></i>D69.090.129</li>
						<li><i class="fa fa-sort-numeric-asc"></i>D69.590.130</li>
					</ul>
				</div><!--
				--><div class="col col-2">
					<ul class="listing">
						<li><i class="fa fa-list"></i>Процедуры и манипуляции гинеколога</li>
						<li><i class="fa fa-flask"></i>Введение внутриматочного противозачаточного устройства</li>
						<li><i class="fa fa-flask"></i>Забор мазка на онкоцитологию</li>
						<li><i class="fa fa-flask"></i>Проба Шуварского-Миллера</li>
						<li><i class="fa fa-flask"></i>Кольпоскопия</li>
						<li><i class="fa fa-flask"></i>Вскрытие абсцесса бартолиниевой железы</li>
						<li><i class="fa fa-flask"></i>Коагуляция эрозии шейки матки</li>
						<li><i class="fa fa-flask"></i>Биопсия шейки матки</li>
						<li><i class="fa fa-flask"></i>Удаление полипа цервикального канала</li>
						<li><i class="fa fa-flask"></i>Извлечение внутриматочного контрацептива (крючком/кюреткой)</li>
						<li><i class="fa fa-flask"></i>Диагностическое выскабливание полости матки</li>
						<li><i class="fa fa-flask"></i>Аспирационный кюретаж полости матки</li>
					</ul>
				</div><!--
				--><div class="col col-4">
					<ul class="listing">
						<li>&nbsp;</li>
						<li><i class="fa fa-money"></i>585.01	тенге</li>
						<li><i class="fa fa-money"></i>121.34	тенге</li>
						<li><i class="fa fa-money"></i>496.30	тенге</li>
						<li><i class="fa fa-money"></i>650.50	тенге</li>
						<li><i class="fa fa-money"></i>1114.51	тенге</li>
						<li><i class="fa fa-money"></i>749.83	тенге</li>
						<li><i class="fa fa-money"></i>729.18	тенге</li>
						<li><i class="fa fa-money"></i>1075.97	тенге</li>
						<li><i class="fa fa-money"></i>549.71	тенге</li>
						<li><i class="fa fa-money"></i>1671.37	тенге</li>
						<li><i class="fa fa-money"></i>1075.97	тенге</li>
					</ul>
				</div>
			</div>

			<div class="row">
				<!--
				--><div class="col col-4">
					<ul class="listing">
						<li><i class="fa fa-sort-numeric-asc"></i>DХХ.ХХХ.200</li>
						<li><i class="fa fa-sort-numeric-asc"></i>D98.120.204</li>
						<li><i class="fa fa-sort-numeric-asc"></i>D98.130.205</li>
						<li><i class="fa fa-sort-numeric-asc"></i>D21.010.206</li>
						<li><i class="fa fa-sort-numeric-asc"></i>D21.020.207</li>
						<li><i class="fa fa-sort-numeric-asc"></i>D21.321.211</li>
						<li><i class="fa fa-sort-numeric-asc"></i>D95.431.214</li>
						<li><i class="fa fa-sort-numeric-asc"></i>D20.940.216</li>
						<li><i class="fa fa-sort-numeric-asc"></i>D86.229.218</li>
						<li><i class="fa fa-sort-numeric-asc"></i>D86.011.219</li>
					</ul>
				</div><!--
				--><div class="col col-2">
					<ul class="listing">
						<li><i class="fa fa-list"></i>Процедуры и манипуляции ЛОР</li>
						<li><i class="fa fa-flask"></i>Удаление внутрипросветного инородного тела из носа, без рассечения</li>
						<li><i class="fa fa-flask"></i>Удаление внутрипросветного инородного тела из глотки, без рассечения</li>
						<li><i class="fa fa-flask"></i>Передняя тампонада носа</li>
						<li><i class="fa fa-flask"></i>Задняя тампонада носа</li>
						<li><i class="fa fa-flask"></i>Анемизация слизистой ЛОР органов</li>
						<li><i class="fa fa-flask"></i>Пневмомасаж барабанной перепонки</li>
						<li><i class="fa fa-flask"></i>Промывание барабанной полости</li>
						<li><i class="fa fa-flask"></i>Вскрытие абсцесса/фурункула (ЛОР)</li>
						<li><i class="fa fa-flask"></i>Вскрытие гематомы (ЛОР)</li>
					</ul>
				</div><!--
				--><div class="col col-4">
					<ul class="listing">
						<li>&nbsp;</li>
						<li><i class="fa fa-money"></i>422.11	тенге</li>
						<li><i class="fa fa-money"></i>304.64	тенге</li>
						<li><i class="fa fa-money"></i>431.56	тенге</li>
						<li><i class="fa fa-money"></i>490.20	тенге</li>
						<li><i class="fa fa-money"></i>472.67	тенге</li>
						<li><i class="fa fa-money"></i>551.19	тенге</li>
						<li><i class="fa fa-money"></i>332.99	тенге</li>
						<li><i class="fa fa-money"></i>831.01	тенге</li>
						<li><i class="fa fa-money"></i>922.01	тенге</li>
					</ul>
				</div>
			</div>

			<div class="row">
				<!--
				--><div class="col col-4">
					<ul class="listing">
						<li><i class="fa fa-sort-numeric-asc"></i>DХХ.ХХХ.300</li>
						<li><i class="fa fa-sort-numeric-asc"></i>D16.210.302</li>
						<li><i class="fa fa-sort-numeric-asc"></i>D95.021.303</li>
						<li><i class="fa fa-sort-numeric-asc"></i>D95.023.305</li>
						<li><i class="fa fa-sort-numeric-asc"></i>D95.024.306</li>
						<li><i class="fa fa-sort-numeric-asc"></i>D95.050.309</li>
						<li><i class="fa fa-sort-numeric-asc"></i>D12.240.310</li>
						<li><i class="fa fa-sort-numeric-asc"></i>D96.512.311</li>
						<li><i class="fa fa-sort-numeric-asc"></i>D96.511.312</li>
						<li><i class="fa fa-sort-numeric-asc"></i>D97.311.314</li>
						<li><i class="fa fa-sort-numeric-asc"></i>D95.031.316</li>
						<li><i class="fa fa-sort-numeric-asc"></i>D95.010.329</li>
						<li><i class="fa fa-sort-numeric-asc"></i>D89.111.331</li>
						<li><i class="fa fa-sort-numeric-asc"></i>D89.113.338</li>
						<li><i class="fa fa-sort-numeric-asc"></i>D89.114.339</li>
						<li><i class="fa fa-sort-numeric-asc"></i>D95.311.353</li>
						<li><i class="fa fa-sort-numeric-asc"></i>D98.210.367</li>
						<li><i class="fa fa-sort-numeric-asc"></i>D09.420.368</li>
						<li><i class="fa fa-sort-numeric-asc"></i>D95.260.369</li>
						<li><i class="fa fa-sort-numeric-asc"></i>D95.070.370</li>
						<li><i class="fa fa-sort-numeric-asc"></i>D95.060.371</li>
					</ul>
				</div><!--
				--><div class="col col-2">
					<ul class="listing">
						<li><i class="fa fa-list"></i>Процедуры и манипуляции офтальмолога</li>
						<li><i class="fa fa-flask"></i>Офтальмоскопия</li>
						<li><i class="fa fa-flask"></i>Определение объективного и субъективного угла косоглазия</li>
						<li><i class="fa fa-flask"></i>Определение характера зрения (гетерофория)</li>
						<li><i class="fa fa-flask"></i>Определение угла девиации по Гиршбергу</li>
						<li><i class="fa fa-flask"></i>Периметрия</li>
						<li><i class="fa fa-flask"></i>Скиаскопия</li>
						<li><i class="fa fa-flask"></i>Массаж слезного мешка/век</li>
						<li><i class="fa fa-flask"></i>Промывание слезных путей</li>
						<li><i class="fa fa-flask"></i>Снятие швов (окулист)</li>
						<li><i class="fa fa-flask"></i>Определение дефектов поверхности роговицы</li>
						<li><i class="fa fa-flask"></i>Подбор очков: сложная коррекция</li>
						<li><i class="fa fa-flask"></i>Измерение внутриглазного давления по Маклакову</li>
						<li><i class="fa fa-flask"></i>Бесконтактная пневмотонометрия</li>
						<li><i class="fa fa-flask"></i>Суточная тонометрия (бесконтактно)</li>
						<li><i class="fa fa-flask"></i>Определение резервов относительной аккомодации</li>
						<li><i class="fa fa-flask"></i>Удаление поверхностного инородного тела с глаз, без рассечения</li>
						<li><i class="fa fa-flask"></i>Проведение пробы из слезных канальцев</li>
						<li><i class="fa fa-flask"></i>Разгрузочные и нагрузочные пробы при глаукоме</li>
						<li><i class="fa fa-flask"></i>Исследование адаптации к темноте</li>
						<li><i class="fa fa-flask"></i>Исследование хроматического зрения</li>
					</ul>
				</div><!--
				--><div class="col col-4">
					<ul class="listing">
						<li>&nbsp;</li>
						<li><i class="fa fa-money"></i>261.60	тенге</li>
						<li><i class="fa fa-money"></i>281.38	тенге</li>
						<li><i class="fa fa-money"></i>221.95	тенге</li>
						<li><i class="fa fa-money"></i>437.68	тенге</li>
						<li><i class="fa fa-money"></i>290.14	тенге</li>
						<li><i class="fa fa-money"></i>229.61	тенге</li>
						<li><i class="fa fa-money"></i>346.77	тенге</li>
						<li><i class="fa fa-money"></i>434.79	тенге</li>
						<li><i class="fa fa-money"></i>191.22	тенге</li>
						<li><i class="fa fa-money"></i>482.44	тенге</li>
						<li><i class="fa fa-money"></i>495.21	тенге</li>
						<li><i class="fa fa-money"></i>512.52	тенге</li>
						<li><i class="fa fa-money"></i>277.15	тенге</li>
						<li><i class="fa fa-money"></i>148.66	тенге</li>
						<li><i class="fa fa-money"></i>265.87	тенге</li>
						<li><i class="fa fa-money"></i>441.56	тенге</li>
						<li><i class="fa fa-money"></i>462.45	тенге</li>
						<li><i class="fa fa-money"></i>2509.56	тенге</li>
						<li><i class="fa fa-money"></i>209.43	тенге</li>
						<li><i class="fa fa-money"></i>177.66	тенге</li>
					</ul>
				</div>
			</div>

			<div class="row">
				<!--
				--><div class="col col-4">
					<ul class="listing">
						<li><i class="fa fa-sort-numeric-asc"></i>DХХ.ХХХ.400</li>
						<li><i class="fa fa-sort-numeric-asc"></i>D86.011.401</li>
						<li><i class="fa fa-sort-numeric-asc"></i>D86.223.402</li>
						<li><i class="fa fa-sort-numeric-asc"></i>D86.225.404</li>
						<li><i class="fa fa-sort-numeric-asc"></i>D86.226.405</li>
						<li><i class="fa fa-sort-numeric-asc"></i>D86.227.406</li>
						<li><i class="fa fa-sort-numeric-asc"></i>D86.271.407</li>
						<li><i class="fa fa-sort-numeric-asc"></i>D86.272.408</li>
						<li><i class="fa fa-sort-numeric-asc"></i>D86.273.409</li>
						<li><i class="fa fa-sort-numeric-asc"></i>D48.811.410</li>
						<li><i class="fa fa-sort-numeric-asc"></i>D86.051.411</li>
						<li><i class="fa fa-sort-numeric-asc"></i>D81.910.412</li>
						<li><i class="fa fa-sort-numeric-asc"></i>D86.228.413</li>
						<li><i class="fa fa-sort-numeric-asc"></i>D86.229.414</li>
						<li><i class="fa fa-sort-numeric-asc"></i>D93.571.415</li>
						<li><i class="fa fa-sort-numeric-asc"></i>D03.310.423</li>
						<li><i class="fa fa-sort-numeric-asc"></i>D38.911.424</li>
						<li><i class="fa fa-sort-numeric-asc"></i>D86.220.436</li>
					</ul>
				</div><!--
				--><div class="col col-2">
					<ul class="listing">
						<li><i class="fa fa-list"></i>Процедуры и манипуляции хирурга</li>
						<li><i class="fa fa-flask"></i>Вскрытие гематомы</li>
						<li><i class="fa fa-flask"></i>Удаление гигромы, ганглия</li>
						<li><i class="fa fa-flask"></i>Вскрытие карбункула</li>
						<li><i class="fa fa-flask"></i>Удаление липомы</li>
						<li><i class="fa fa-flask"></i>Вскрытие нагноившейся мозоли</li>
						<li><i class="fa fa-flask"></i>Удаление / коррекция ногтевой пластинки</li>
						<li><i class="fa fa-flask"></i>Вскрытие панариция</li>
						<li><i class="fa fa-flask"></i>Вскрытие паронихия</li>
						<li><i class="fa fa-flask"></i>Вскрытие парапроктита</li>
						<li><i class="fa fa-flask"></i>Иссечение лигатурного свища</li>
						<li><i class="fa fa-flask"></i>Пункция сустава</li>
						<li><i class="fa fa-flask"></i>Вскрытие флегмоны</li>
						<li><i class="fa fa-flask"></i>Вскрытие фурункула</li>
						<li><i class="fa fa-flask"></i>Перевязка</li>
						<li><i class="fa fa-flask"></i>Проведение спинномозговой пункции</li>
						<li><i class="fa fa-flask"></i>Подключичная катетеризация</li>
						<li><i class="fa fa-flask"></i>Хирургическая обработка раны/ожога</li>
					</ul>
				</div><!--
				--><div class="col col-4">
					<ul class="listing">
						<li>&nbsp;</li>
						<li><i class="fa fa-money"></i>1319.36	тенге</li>
						<li><i class="fa fa-money"></i>1832.20	тенге</li>
						<li><i class="fa fa-money"></i>1377.55	тенге</li>
						<li><i class="fa fa-money"></i>360.03	тенге</li>
						<li><i class="fa fa-money"></i>1096.10	тенге</li>
						<li><i class="fa fa-money"></i>755.98	тенге</li>
						<li><i class="fa fa-money"></i>538.69	тенге</li>
						<li><i class="fa fa-money"></i>681.38	тенге</li>
						<li><i class="fa fa-money"></i>1200.79	тенге</li>
						<li><i class="fa fa-money"></i>651.73	тенге</li>
						<li><i class="fa fa-money"></i>1335.44	тенге</li>
						<li><i class="fa fa-money"></i>1515.60	тенге</li>
						<li><i class="fa fa-money"></i>551.00	тенге</li>
						<li><i class="fa fa-money"></i>379.52	тенге</li>
						<li><i class="fa fa-money"></i>1674.43	тенге</li>
						<li><i class="fa fa-money"></i>2449.63	тенге</li>
						<li><i class="fa fa-money"></i>1249.78	тенге</li>
					</ul>
				</div>
			</div>

			<div class="row">
				<!--
				--><div class="col col-4">
					<ul class="listing">
						<li><i class="fa fa-sort-numeric-asc"></i>DХХ.ХХХ.500</li>
						<li><i class="fa fa-sort-numeric-asc"></i>D79.700.501</li>
						<li><i class="fa fa-sort-numeric-asc"></i>D93.541.502</li>
						<li><i class="fa fa-sort-numeric-asc"></i>D97.881.503</li>
						<li><i class="fa fa-sort-numeric-asc"></i>D83.960.505</li>
						<li><i class="fa fa-sort-numeric-asc"></i>D79.790.506</li>
					</ul>
				</div><!--
				--><div class="col col-2">
					<ul class="listing">
						<li><i class="fa fa-list"></i>Процедуры и манипуляции травматолога</li>
						<li><i class="fa fa-flask"></i>Закрытое вправление вывиха, неуточненная локализация </li>
						<li><i class="fa fa-flask"></i>Наложение гипсовой повязки</li>
						<li><i class="fa fa-flask"></i>Снятие гипсовой повязки</li>
						<li><i class="fa fa-flask"></i>Внутрисуставное введение лекарственных средств</li>
						<li><i class="fa fa-flask"></i>Закрытая репозиция костных отломков</li>
					</ul>
				</div><!--
				--><div class="col col-4">
					<ul class="listing">
						<li>&nbsp;</li>
						<li><i class="fa fa-money"></i>935.27	тенге</li>
						<li><i class="fa fa-money"></i>995.33	тенге</li>
						<li><i class="fa fa-money"></i>259.16	тенге</li>
						<li><i class="fa fa-money"></i>1561.15	тенге</li>
						<li><i class="fa fa-money"></i>1014.30	тенге</li>
					</ul>
				</div>
			</div>

			<div class="row">
				<!--
				--><div class="col col-4">
					<ul class="listing">
						<li><i class="fa fa-sort-numeric-asc"></i>D02.000.000</li>
						<li><i class="fa fa-sort-numeric-asc"></i>D02.000.001</li>
						<li><i class="fa fa-sort-numeric-asc"></i>D02.002.001</li>
						<li><i class="fa fa-sort-numeric-asc"></i>D02.007.001</li>
						<li><i class="fa fa-sort-numeric-asc"></i>D02.014.001</li>
						<li><i class="fa fa-sort-numeric-asc"></i>D02.018.001</li>
						<li><i class="fa fa-sort-numeric-asc"></i>D02.023.001</li>
						<li><i class="fa fa-sort-numeric-asc"></i>D02.024.001</li>
						<li><i class="fa fa-sort-numeric-asc"></i>D02.030.001</li>
						<li><i class="fa fa-sort-numeric-asc"></i>D02.001.003</li>
						<li><i class="fa fa-sort-numeric-asc"></i>D02.001.002</li>
						<li><i class="fa fa-sort-numeric-asc"></i>D02.002.002</li>
						<li><i class="fa fa-sort-numeric-asc"></i>D02.008.001</li>
						<li><i class="fa fa-sort-numeric-asc"></i>D02.021.001</li>
					</ul>
				</div><!--
				--><div class="col col-2">
					<ul class="listing">
						<li><i class="fa fa-list"></i>Физиопроцедуры</li>
						<li><i class="fa fa-list"></i>Электролечение</li>
						<li><i class="fa fa-flask"></i>Электрофорез</li>
						<li><i class="fa fa-flask"></i>Диадинамические токи (ДДТ)</li>
						<li><i class="fa fa-flask"></i>Дарсонвализация</li>
						<li><i class="fa fa-flask"></i>УВЧ - терапия</li>
						<li><i class="fa fa-flask"></i>Магнитотерапия</li>
						<li><i class="fa fa-flask"></i>Ультразвуковая терапия</li>
						<li><i class="fa fa-flask"></i>Биоптрон</li>
						<li><i class="fa fa-flask"></i>Аэрозольтерапия</li>
						<li><i class="fa fa-flask"></i>Местное ультрафиолетовое облучение</li>
						<li><i class="fa fa-flask"></i>Общее ультрафиолетовое облучение</li>
						<li><i class="fa fa-flask"></i>Амплипульстерапия (СМТ)</li>
						<li><i class="fa fa-flask"></i>Дециметровая терапия (ДМВ-терапия)</li>
					</ul>
				</div><!--
				--><div class="col col-4">
					<ul class="listing">
						<li>&nbsp;</li>
						<li>&nbsp;</li>
						<li><i class="fa fa-money"></i>365.18	тенге</li>
						<li><i class="fa fa-money"></i>406.39	тенге</li>
						<li><i class="fa fa-money"></i>180.71	тенге</li>
						<li><i class="fa fa-money"></i>87.55	тенге</li>
						<li><i class="fa fa-money"></i>60.21	тенге</li>
						<li><i class="fa fa-money"></i>193.28	тенге</li>
						<li><i class="fa fa-money"></i>573.07	тенге</li>
						<li><i class="fa fa-money"></i>199.12	тенге</li>
						<li><i class="fa fa-money"></i>86.90	тенге</li>
						<li><i class="fa fa-money"></i>67.57	тенге</li>
						<li><i class="fa fa-money"></i>228.80	тенге</li>
						<li><i class="fa fa-money"></i>143.98	тенге</li>
					</ul>
				</div>
			</div>

			<div class="row">
				<!--
				--><div class="col col-4">
					<ul class="listing">
						<li><i class="fa fa-sort-numeric-asc"></i>D03.000.000</li>
						<li><i class="fa fa-sort-numeric-asc"></i>D03.000.001</li>
						<li><i class="fa fa-sort-numeric-asc"></i>D03.001.001</li>
						<li><i class="fa fa-sort-numeric-asc"></i>D03.002.001</li>
						<li><i class="fa fa-sort-numeric-asc"></i>D03.003.001</li>
						<li><br/><i class="fa fa-sort-numeric-asc"></i>D03.004.001</li>
						<li><br/><i class="fa fa-sort-numeric-asc"></i>D03.006.001</li>
						<li><br/><i class="fa fa-sort-numeric-asc"></i>D03.007.001</li>
						<li><br/><i class="fa fa-sort-numeric-asc"></i>D03.008.001</li>
						<li><br/><i class="fa fa-sort-numeric-asc"></i>D03.009.001</li>
						<li><br/><i class="fa fa-sort-numeric-asc"></i>D03.010.001</li>
						<li><br/><i class="fa fa-sort-numeric-asc"></i>D03.011.001</li>
						<li><br/><i class="fa fa-sort-numeric-asc"></i>D03.012.001</li>
						<li><br/><i class="fa fa-sort-numeric-asc"></i>D03.013.001</li>
						<li><br/><i class="fa fa-sort-numeric-asc"></i>D03.014.001</li>
						<li><br/><i class="fa fa-sort-numeric-asc"></i>D03.015.001</li>
						<li><br/><i class="fa fa-sort-numeric-asc"></i>D03.016.001</li>
						<li><i class="fa fa-sort-numeric-asc"></i>D03.017.001</li>
						<li><i class="fa fa-sort-numeric-asc"></i>D03.018.001</li>
						<li><br/><i class="fa fa-sort-numeric-asc"></i>D03.019.001</li>
						<li><br/><i class="fa fa-sort-numeric-asc"></i>D03.020.001</li>
						<li><br/><i class="fa fa-sort-numeric-asc"></i>D03.021.001</li>
						<li><br/><i class="fa fa-sort-numeric-asc"></i>D03.022.001</li>
						<li><br/><i class="fa fa-sort-numeric-asc"></i>D03.023.001</li>
						<li><br/><i class="fa fa-sort-numeric-asc"></i>D03.024.001</li>
						<li><br/><i class="fa fa-sort-numeric-asc"></i>D03.025.001</li>
						<li><br/><i class="fa fa-sort-numeric-asc"></i>D03.026.001</li>
						<li><br/><i class="fa fa-sort-numeric-asc"></i>D03.027.001</li>
						<li><br/><i class="fa fa-sort-numeric-asc"></i>D03.028.001</li>
						<li><i class="fa fa-sort-numeric-asc"></i>D03.029.001</li>
						<li><br/><i class="fa fa-sort-numeric-asc"></i>D03.030.001</li>
						<li><br/><i class="fa fa-sort-numeric-asc"></i>D03.031.001</li>
						<li><i class="fa fa-sort-numeric-asc"></i>D03.032.001</li>
						<li><i class="fa fa-sort-numeric-asc"></i>D03.033.001</li>
						<li><br/><i class="fa fa-sort-numeric-asc"></i>D03.034.001</li>
						<li><br/><i class="fa fa-sort-numeric-asc"></i>D03.035.001</li>
						<li><i class="fa fa-sort-numeric-asc"></i>D03.036.001</li>
						<li><i class="fa fa-sort-numeric-asc"></i>D03.037.001</li>
						<li><i class="fa fa-sort-numeric-asc"></i>D03.038.001</li>
						<li><i class="fa fa-sort-numeric-asc"></i>D03.039.001</li>
						<li><i class="fa fa-sort-numeric-asc"></i>D03.040.001</li>
						<li><br/><i class="fa fa-sort-numeric-asc"></i>D03.041.001</li>
						<li><br/><i class="fa fa-sort-numeric-asc"></i>D03.042.001</li>
						<li><br/><i class="fa fa-sort-numeric-asc"></i>D03.043.001</li>
						<li><i class="fa fa-sort-numeric-asc"></i>D03.044.001</li>
						<li><br/><i class="fa fa-sort-numeric-asc"></i>D03.045.001</li>
						<li><i class="fa fa-sort-numeric-asc"></i>D03.046.001</li>
						<li><i class="fa fa-sort-numeric-asc"></i>D03.047.001</li>
						<li><i class="fa fa-sort-numeric-asc"></i>D03.048.001</li>
						<li><i class="fa fa-sort-numeric-asc"></i>D03.049.001</li>
						<li><br/><i class="fa fa-sort-numeric-asc"></i>D03.050.001</li>
						<li><br/><i class="fa fa-sort-numeric-asc"></i>D03.051.001</li>
						<li><br/><i class="fa fa-sort-numeric-asc"></i>D03.052.001</li>
						<li><i class="fa fa-sort-numeric-asc"></i>D03.053.001</li>
						<li><i class="fa fa-sort-numeric-asc"></i>D03.054.001</li>
						<li><i class="fa fa-sort-numeric-asc"></i>D03.055.001</li>
						<li><i class="fa fa-sort-numeric-asc"></i>D03.056.001</li>
						<li><i class="fa fa-sort-numeric-asc"></i>D03.057.001</li>
					</ul>
				</div><!--
				--><div class="col col-2">
					<ul class="listing">
						<li><i class="fa fa-list"></i>Стоматологические услуги</li>
						<li><i class="fa fa-list"></i>Терапевтический прием</li>
						<li><i class="fa fa-flask"></i>Лечение пульпита однокорневого зуба завершенное пломбой из КМХО</li>
						<li><i class="fa fa-flask"></i>Лечение пульпита первого премоляра завершенное пломбой из КМХО</li>
						<li><i class="fa fa-flask"></i>Лечение пульпита моляра завершенное пломбой из КМХО</li>
						<li><i class="fa fa-flask"></i>Лечение пульпита временных зубов у дошкольников завершенное пломбой из цемента</li>
						<li><i class="fa fa-flask"></i>Лечение пульпита пломбированием 1 корня постоянного зуба или методом прижизненной ампутации пульпы, завершенное пломбой из цемента</li>
						<li><i class="fa fa-flask"></i>Лечение пульпита пломбированием 1 корня постоянного зуба или методом прижизненной ампутации пульпы, завершенное пломбой из КМХО</li>
						<li><i class="fa fa-flask"></i>Лечение пульпита пломбированием двух корней постоянного зуба, завершенное пломбой из цемента</li>
						<li><i class="fa fa-flask"></i>Лечение пульпита пломбированием двух корней постоянного зуба, завершенное пломбой из КМХО</li>
						<li><i class="fa fa-flask"></i>Лечение пульпита пломбированием 3 корней постоянного зуба, завершенное пломбой из цемента</li>
						<li><i class="fa fa-flask"></i>Лечение пульпита пломбированием 3 корней постоянного зуба, завершенное пломбой из КМХО</li>
						<li><i class="fa fa-flask"></i>Лечение периодонтита моляра с пломбированием всех каналов, завершенное пломбой из КМХО</li>
						<li><i class="fa fa-flask"></i>Лечение периодонтита большого коренного зуба с пломбированием двух каналов, завершенное пломбой из КМХО</li>
						<li><i class="fa fa-flask"></i>Лечение периодонтита моляра с пломбированием одного канала, завершенное пломбой из КМХО</li>
						<li><i class="fa fa-flask"></i>Лечение периодонтита первого премоляра верхней челюсти с пломбированием всех каналов , завершенное пломбой из КМХО</li>
						<li><i class="fa fa-flask"></i>Лечение периодонтита первого премоляра верхней челюсти с пломбированием одного канала, завершенное пломбой из КМХО</li>
						<li><i class="fa fa-flask"></i>Лечение периодонтита однокорневого зуба, завершенное пломбой из цемента</li>
						<li><i class="fa fa-flask"></i>Лечение периодонтита однокорневого зуба, завершенное пломбой из КМХО</li>
						<li><i class="fa fa-flask"></i>Лечение периодонтита временного или постоянного зуба импрегнационным методом, завершенное пломбой из цемента</li>
						<li><i class="fa fa-flask"></i>Лечение периодонтита временного или постоянного зуба импрегнационным методом, завершенное пломбой из КМХО</li>
						<li><i class="fa fa-flask"></i>Лечение периодонтита с пломбированием 1 корня постоянного зуба, завершенное пломбой из цемента</li>
						<li><i class="fa fa-flask"></i>Лечение периодонтита с пломбированием 1 корня постоянного зуба , завершенное пломбой из КМХО</li>
						<li><i class="fa fa-flask"></i>Лечение периодонтита с пломбированием 2 корней постоянного зуба, завершенное пломбой из цемента</li>
						<li><i class="fa fa-flask"></i>Лечение периодонтита с пломбированием 2 корней постоянного зуба, завершенное пломбой из КМХО</li>
						<li><i class="fa fa-flask"></i>Лечение периодонтита с пломбированием 3 корней постоянного зуба, завершенное пломбой из цемента</li>
						<li><i class="fa fa-flask"></i>Лечение периодонтита с пломбированием 3 корней постоянного зуба, завершенное пломбой из КМХО</li>
						<li><i class="fa fa-flask"></i>Распломбирование корневого канала, запломбированного пастой на окись-цинковой основе</li>
						<li><i class="fa fa-flask"></i>Распломбирование корневого канала, запломбированного пастой на резорцин-формалиновой основе</li>
						<li><i class="fa fa-flask"></i>Распломбирование корневого канала, запломбированного цементом</li>
						<li><i class="fa fa-flask"></i>Лечение поверхностного и среднего кариеса I и II степени активности завершенное пломбой из цемента</li>
						<li><i class="fa fa-flask"></i>Лечение поверхностного и среднего кариеса I и II степени активности завершенное пломбой из КМХО</li>
						<li><i class="fa fa-flask"></i>Лечение глубокого кариеса завершенное пломбой из цемента</li>
						<li><i class="fa fa-flask"></i>Лечение глубокого кариеса завершенное пломбой из КМХО</li>
						<li><i class="fa fa-flask"></i>Комплексное лечение 1 зуба при неосложненном кариесе III степени активности, завершенное пломбой из цемента</li>
						<li><i class="fa fa-flask"></i>Комплексное лечение 1 зуба при неосложненном кариесе III степени активности, завершенное пломбой из КМХО</li>
						<li><i class="fa fa-flask"></i>Ремтерапия под контролем окрашивания зуба или местная флюоризация</li>
						<li><i class="fa fa-flask"></i>Извлечение инородного тела из канала коренного зуба</li>
						<li><i class="fa fa-flask"></i>Извлечение инородного тела из фронтального зуба</li>
						<li><i class="fa fa-flask"></i>Удаление старой пломбы</li>
						<li><i class="fa fa-flask"></i>Консервативное лечение при травматическом повреждении 1 зуба</li>
						<li><i class="fa fa-flask"></i>Полное функциональное восстановление анатомической формы зуба при гипоплазии, флюорозе в 1 зубе КМХО</li>
						<li><i class="fa fa-flask"></i>Медикаментозная обработка пародонтальных карманов ирригации, орошения, аппликации</li>
						<li><i class="fa fa-flask"></i>Медикаментозная обработка пародонтальных карманов ирригации, орошения, аппликации с наложением повязки на 2-5 зубов</li>
						<li><i class="fa fa-flask"></i>Кюретаж парадонтального кармана в области 1 зуба</li>
						<li><i class="fa fa-flask"></i>Кюретаж парадонтального кармана в области 1 зуба с использованием методик направленной регенерации костной ткани</li>
						<li><i class="fa fa-flask"></i>Вскрытие парадонтального абсцесса (в области 1 зуба)</li>
						<li><i class="fa fa-flask"></i>Лечение острых форм стоматита</li>
						<li><i class="fa fa-flask"></i>Избирательная пришлифовка (1-2 зуба)</li>
						<li><i class="fa fa-flask"></i>Лечение пульпита моляра, завершенное пломбой светоотвердевающей</li>
						<li><i class="fa fa-flask"></i>Лечение периодонтита большого коренного зуба, завершенное пломбой светоотвердевающей</li>
						<li><i class="fa fa-flask"></i>Лечение периодонтита фронтального зуба, завершенное пломбой светоотвердевающей</li>
						<li><i class="fa fa-flask"></i>Лечение пульпита фронтального зуба в 1 посещение завершенное пломб светоотвердевающей</li>
						<li><i class="fa fa-flask"></i>Лечение пульпита премоляра, завершенное пломбой светоотвердевающей</li>
						<li><i class="fa fa-flask"></i>Лечение периодонтита премоляра, завершенное пломбой светоотвердевающей</li>
						<li><i class="fa fa-flask"></i>Лечение глубокого кариеса завершенное пломбой светоотвердевающей</li>
						<li><i class="fa fa-flask"></i>Лечение среднего кариеса завершенное пломбой светоотвердевающей</li>
						<li><i class="fa fa-flask"></i>Изготовление штифтовой вкладки (для дальнейшего протезирования)</li>
					</ul>
				</div><!--
				--><div class="col col-4">
					<ul class="listing">
						<li>&nbsp;</li>
						<li>&nbsp;</li>
						<li><i class="fa fa-money"></i>1128.77	тенге</li>
						<li><i class="fa fa-money"></i>2311.60	тенге</li>
						<li><i class="fa fa-money"></i>2858.09	тенге</li>
						<li><br/><i class="fa fa-money"></i>2458.30	тенге</li>
						<li><br/><i class="fa fa-money"></i>2479.35	тенге</li>
						<li><br/><i class="fa fa-money"></i>2622.74	тенге</li>
						<li><br/><i class="fa fa-money"></i>1663.69	тенге</li>
						<li><br/><i class="fa fa-money"></i>2204.43	тенге</li>
						<li><br/><i class="fa fa-money"></i>2012.20	тенге</li>
						<li><br/><i class="fa fa-money"></i>2695.47	тенге</li>
						<li><br/><i class="fa fa-money"></i>3272.89	тенге</li>
						<li><br/><i class="fa fa-money"></i>3239.18	тенге</li>
						<li><br/><i class="fa fa-money"></i>3572.60	тенге</li>
						<li><br/><i class="fa fa-money"></i>3402.75	тенге</li>
						<li><br/><i class="fa fa-money"></i>3495.14	тенге</li>
						<li><i class="fa fa-money"></i>3155.98	тенге</li>
						<li><i class="fa fa-money"></i>2578.20	тенге</li>
						<li><br/><i class="fa fa-money"></i>2906.38	тенге</li>
						<li><br/><i class="fa fa-money"></i>3205.96	тенге</li>
						<li><br/><i class="fa fa-money"></i>2561.32	тенге</li>
						<li><br/><i class="fa fa-money"></i>2692.52	тенге</li>
						<li><br/><i class="fa fa-money"></i>3654.43	тенге</li>
						<li><br/><i class="fa fa-money"></i>4432.29	тенге</li>
						<li><br/><i class="fa fa-money"></i>4208.76	тенге</li>
						<li><br/><i class="fa fa-money"></i>5211.54	тенге</li>
						<li><br/><i class="fa fa-money"></i>1005.72	тенге</li>
						<li><br/><i class="fa fa-money"></i>1094.50	тенге</li>
						<li><i class="fa fa-money"></i>1994.86	тенге</li>
						<li><br/><i class="fa fa-money"></i>1720.42	тенге</li>
						<li><br/><i class="fa fa-money"></i>1494.11	тенге</li>
						<li><i class="fa fa-money"></i>776.05	тенге</li>
						<li><i class="fa fa-money"></i>1289.66	тенге</li>
						<li><br/><i class="fa fa-money"></i>586.34	тенге</li>
						<li><br/><i class="fa fa-money"></i>791.98	тенге</li>
						<li><i class="fa fa-money"></i>592.50	тенге</li>
						<li><i class="fa fa-money"></i>1243.80	тенге</li>
						<li><i class="fa fa-money"></i>1204.83	тенге</li>
						<li><i class="fa fa-money"></i>497.98	тенге</li>
						<li><i class="fa fa-money"></i>1239.83	тенге</li>
						<li><br/><i class="fa fa-money"></i>3204.02	тенге</li>
						<li><br/><i class="fa fa-money"></i>438.02	тенге</li>
						<li><br/><i class="fa fa-money"></i>486.90	тенге</li>
						<li><i class="fa fa-money"></i>1410.09	тенге</li>
						<li><br/><i class="fa fa-money"></i>2668.05	тенге</li>
						<li><i class="fa fa-money"></i>421.80	тенге</li>
						<li><i class="fa fa-money"></i>886.13	тенге</li>
						<li><i class="fa fa-money"></i>535.01	тенге</li>
						<li><i class="fa fa-money"></i>3753.65	тенге</li>
						<li><br/><i class="fa fa-money"></i>3829.40	тенге</li>
						<li><br/><i class="fa fa-money"></i>3648.00	тенге</li>
						<li><br/><i class="fa fa-money"></i>2590.04	тенге</li>
						<li><i class="fa fa-money"></i>2920.54	тенге</li>
						<li><i class="fa fa-money"></i>3404.89	тенге</li>
						<li><i class="fa fa-money"></i>2335.34	тенге</li>
						<li><i class="fa fa-money"></i>2073.65	тенге</li>
						<li><i class="fa fa-money"></i>921.50	тенге</li>
					</ul>
				</div>
			</div>

			<div class="row">
				<!--
				--><div class="col col-4">
					<ul class="listing">
						<li><i class="fa fa-sort-numeric-asc"></i>D03.000.002</li>
						<li><i class="fa fa-sort-numeric-asc"></i>D03.001.002</li>
						<li><i class="fa fa-sort-numeric-asc"></i>D03.002.002</li>
						<li><i class="fa fa-sort-numeric-asc"></i>D03.003.002</li>
						<li><i class="fa fa-sort-numeric-asc"></i>D03.004.002</li>
						<li><i class="fa fa-sort-numeric-asc"></i>D03.005.002</li>
						<li><i class="fa fa-sort-numeric-asc"></i>D03.006.002</li>
						<li><i class="fa fa-sort-numeric-asc"></i>D03.009.002</li>
						<li><i class="fa fa-sort-numeric-asc"></i>D03.013.002</li>
						<li><i class="fa fa-sort-numeric-asc"></i>D03.014.002</li>
						<li><i class="fa fa-sort-numeric-asc"></i>D03.017.002</li>
						<li><i class="fa fa-sort-numeric-asc"></i>D03.018.002</li>
						<li><i class="fa fa-sort-numeric-asc"></i>D03.020.002</li>
						<li><i class="fa fa-sort-numeric-asc"></i>D03.025.002</li>
						<li><i class="fa fa-sort-numeric-asc"></i>D03.026.002</li>
						<li><i class="fa fa-sort-numeric-asc"></i>D03.028.002</li>
						<li><i class="fa fa-sort-numeric-asc"></i>D03.029.002</li>
						<li><i class="fa fa-sort-numeric-asc"></i>D03.030.002</li>
						<li><i class="fa fa-sort-numeric-asc"></i>D03.034.002</li>
					</ul>
				</div><!--
				--><div class="col col-2">
					<ul class="listing">
						<li><i class="fa fa-list"></i>Хирургический прием</li>
						<li><i class="fa fa-flask"></i>Удаление постоянного зуба простое</li>
						<li><i class="fa fa-flask"></i>Удаление постоянного зуба сложное</li>
						<li><i class="fa fa-flask"></i>Удаление постоянного зуба с вмешательством на альвеолярном отростке</li>
						<li><i class="fa fa-flask"></i>Вскрытие абсцесса, разрез или иссечение капюшона</li>
						<li><i class="fa fa-flask"></i>Перевязка после операции (стоматолог)</li>
						<li><i class="fa fa-flask"></i>Перевязка гнойной раны с дренированием (стоматолог)</li>
						<li><i class="fa fa-flask"></i>Вправление вывиха верхне-нижнечелюстного сустава</li>
						<li><i class="fa fa-flask"></i>Лечение альвеолита</li>
						<li><i class="fa fa-flask"></i>Альвеолоэктомия в области 1 зуба</li>
						<li><i class="fa fa-flask"></i>Удаление временного зуба по смене прикуса</li>
						<li><i class="fa fa-flask"></i>Удаление временного зуба по поводу осложнения кариеса</li>
						<li><i class="fa fa-flask"></i>Операция пластики уздечки губ, языка</li>
						<li><i class="fa fa-flask"></i>Иссечение мягких тканей полости рта</li>
						<li><i class="fa fa-flask"></i>Удаление эпулиса</li>
						<li><i class="fa fa-flask"></i>Удаление сверхкомплектного зуба, осложненный</li>
						<li><i class="fa fa-flask"></i>Удаление сверхкомплектного зуба, не осложненный</li>
						<li><i class="fa fa-flask"></i>Удаление нескольких зубов в одной зоне (2-3 зуба)</li>
						<li><i class="fa fa-flask"></i>Первичная хирургическая обработка раны ЧЛО</li>
					</ul>
				</div><!--
				--><div class="col col-4">
					<ul class="listing">
						<li>&nbsp;</li>
						<li><i class="fa fa-money"></i>597.66	тенге</li>
						<li><i class="fa fa-money"></i>824.54	тенге</li>
						<li><i class="fa fa-money"></i>1609.86	тенге</li>
						<li><i class="fa fa-money"></i>998.18	тенге</li>
						<li><i class="fa fa-money"></i>383.61	тенге</li>
						<li><i class="fa fa-money"></i>1499.97	тенге</li>
						<li><i class="fa fa-money"></i>1051.52	тенге</li>
						<li><i class="fa fa-money"></i>1235.94	тенге</li>
						<li><i class="fa fa-money"></i>948.49	тенге</li>
						<li><i class="fa fa-money"></i>1019.98	тенге</li>
						<li><i class="fa fa-money"></i>1269.45	тенге</li>
						<li><i class="fa fa-money"></i>1839.53	тенге</li>
						<li><i class="fa fa-money"></i>1795.97	тенге</li>
						<li><i class="fa fa-money"></i>1795.97	тенге</li>
						<li><i class="fa fa-money"></i>1924.44	тенге</li>
						<li><i class="fa fa-money"></i>1512.91	тенге</li>
						<li><i class="fa fa-money"></i>1779.26	тенге</li>
						<li><i class="fa fa-money"></i>1447.59	тенге</li>
					</ul>
				</div>
			</div>

			<div class="row">
				<!--
				--><div class="col col-4">
					<ul class="listing">
						<li><i class="fa fa-sort-numeric-asc"></i>D02.000.007</li>
						<li><i class="fa fa-sort-numeric-asc"></i>D02.001.007</li>
						<li><i class="fa fa-sort-numeric-asc"></i>D02.008.007</li>
						<li><i class="fa fa-sort-numeric-asc"></i>D02.010.007</li>
						<li><i class="fa fa-sort-numeric-asc"></i>D02.011.007</li>
						<li><i class="fa fa-sort-numeric-asc"></i>D02.012.007</li>
						<li><i class="fa fa-sort-numeric-asc"></i>D02.014.007</li>
						<li><i class="fa fa-sort-numeric-asc"></i>D02.015.007</li>
						<li><i class="fa fa-sort-numeric-asc"></i>D02.016.007</li>
						<li><i class="fa fa-sort-numeric-asc"></i>D02.017.007</li>
						<li><i class="fa fa-sort-numeric-asc"></i>D02.018.007</li>
						<li><i class="fa fa-sort-numeric-asc"></i>D02.019.007</li>
						<li><i class="fa fa-sort-numeric-asc"></i>D02.020.007</li>
						<li><i class="fa fa-sort-numeric-asc"></i>D02.021.007</li>
						<li><i class="fa fa-sort-numeric-asc"></i>D02.022.007</li>
						<li><i class="fa fa-sort-numeric-asc"></i>D02.026.007</li>
						<li><i class="fa fa-sort-numeric-asc"></i>D02.027.007</li>
						<li><i class="fa fa-sort-numeric-asc"></i>D02.029.007</li>
					</ul>
				</div><!--
				--><div class="col col-2">
					<ul class="listing">
						<li><i class="fa fa-list"></i>Массаж</li>
						<li><i class="fa fa-flask"></i>Классический массаж всего тела</li>
						<li><i class="fa fa-flask"></i>Массаж головы (лобно-височной  и затылочно-теменной области)</li>
						<li><i class="fa fa-flask"></i>Массаж воротниковой  зоны </li>
						<li><i class="fa fa-flask"></i>Массаж шейно-грудного отдела позвоночника</li>
						<li><i class="fa fa-flask"></i>Массаж шеи, воротниковой зоны и обоих плечевых суставов</li>
						<li><i class="fa fa-flask"></i>Массаж верхней конечностей</li>
						<li><i class="fa fa-flask"></i>Массаж области грудной клетки</li>
						<li><i class="fa fa-flask"></i>Массаж плечевого сустава</li>
						<li><i class="fa fa-flask"></i>Массаж локтевого сустава</li>
						<li><i class="fa fa-flask"></i>Массаж лучезапястного сустава</li>
						<li><i class="fa fa-flask"></i>Массаж кисти и предплечья</li>
						<li><i class="fa fa-flask"></i>Массаж всего позвоночника</li>
						<li><i class="fa fa-flask"></i>Массаж мышц передней брюшной стенки</li>
						<li><i class="fa fa-flask"></i>Массаж пояснично-крестцовой области</li>
						<li><i class="fa fa-flask"></i>Массаж нижней конечности</li>
						<li><i class="fa fa-flask"></i>Массаж коленного сустава</li>
						<li><i class="fa fa-flask"></i>Массаж стопы и голени</li>
					</ul>
				</div><!--
				--><div class="col col-4">
					<ul class="listing">
						<li>&nbsp;</li>
						<li><i class="fa fa-money"></i>674.28	тенге</li>
						<li><i class="fa fa-money"></i>362.11	тенге</li>
						<li><i class="fa fa-money"></i>241.41	тенге</li>
						<li><i class="fa fa-money"></i>583.40	тенге</li>
						<li><i class="fa fa-money"></i>543.17	тенге</li>
						<li><i class="fa fa-money"></i>390.84	тенге</li>
						<li><i class="fa fa-money"></i>546.17	тенге</li>
						<li><i class="fa fa-money"></i>241.41	тенге</li>
						<li><i class="fa fa-money"></i>270.39	тенге</li>
						<li><i class="fa fa-money"></i>270.39	тенге</li>
						<li><i class="fa fa-money"></i>391.09	тенге</li>
						<li><i class="fa fa-money"></i>543.17	тенге</li>
						<li><i class="fa fa-money"></i>313.60	тенге</li>
						<li><i class="fa fa-money"></i>408.84	тенге</li>
						<li><i class="fa fa-money"></i>390.84	тенге</li>
						<li><i class="fa fa-money"></i>276.39	тенге</li>
						<li><i class="fa fa-money"></i>276.39	тенге</li>
					</ul>
				</div>
			</div>

			<div class="row">
				<!--
				--><div class="col col-4">
					<ul class="listing">
						<li>&nbsp;</li>
						<li><i class="fa fa-sort-numeric-asc"></i>1</li>
						<li><i class="fa fa-sort-numeric-asc"></i>2</li>
						<li><i class="fa fa-sort-numeric-asc"></i>3</li>
						<li><i class="fa fa-sort-numeric-asc"></i>4</li>
					</ul>
				</div><!--
				--><div class="col col-2">
					<ul class="listing">
						<li><i class="fa fa-list"></i>Медосмотры</li>
						<li><i class="fa fa-flask"></i>Медицинское обследование (женщины)</li>
						<li><i class="fa fa-flask"></i>Медицинское обследование (мужчины)</li>
						<li><i class="fa fa-flask"></i>Выдача мед.справок (диспансерный учет)</li>
						<li><i class="fa fa-flask"></i>Медосвидетельствования</li>
					</ul>
				</div><!--
				--><div class="col col-4">
					<ul class="listing">
						<li>&nbsp;</li>
						<li><i class="fa fa-money"></i>1500	тенге</li>
						<li><i class="fa fa-money"></i>1300	тенге</li>
						<li><i class="fa fa-money"></i>200	тенге</li>
						<li><i class="fa fa-money"></i>100	тенге</li>
					</ul>
				</div>
			</div>

		</div>
	</div>
</main>