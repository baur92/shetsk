<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
use yii\widgets\LinkPager;

$this->title = 'Contact';
$this->params['breadcrumbs'][] = $this->title;
?>

<section class="page-title">
    <div class="grid-row clearfix">
        <h1><?= Yii::t('app', 'menu.page.about.staff.stationary')?></h1>
        
        <nav class="bread-crumbs">
        	<a href=""><?= Yii::t('app', 'menu.page.about')?></a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;
        	<a href=""><?= Yii::t('app', 'menu.page.about.staff')?></a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;
        </nav>
    </div>
</section>

<main class="page-content">
	<div class="grid-row">
		<section class="detailed-services">
			<dl>
				<dt id="service4" class="opened"><i class="fa fa-hospital-o"></i>Стационар Центральной районной больницы</dt>
				<dd>
					<div class="crow">
						<div class="col col-4">
							<ul>
								<li>Хирургическое отделение</li>
								<li><strong>Жукупбаев Ерсин Салимжанович</strong></li>
								<li><span>Врач хирург</span></li>
							</ul>
						</div>
						<div class="col col-4">
							<ul>
								<li>Родильное отделение</li>
								<li><strong>Бейсенов Серик Киргизбаевич</strong></li>
								<li><span>Врач акушер-гинеколог</span></li>
							</ul>
						</div>
						<div class="col col-4">
							<ul>
								<li>Общее отделение</li>
								<li><strong>Газдрубал Жанбота</strong></li>
								<li><span>Врач общей практики</span></li>
							</ul>
						</div>
						<div class="col col-4">
							<ul>
								<li>Операционный блок</li>
								<li><strong>Айменбетова Бакытжан Елемесовна</strong></li>
								<li><span>Операционная медсестра</span></li>
							</ul>
						</div>
					</div>
				</dd>
			</dl>
			<dl>
				<dt id="service4" class="opened"><i class="fa fa-hospital-o"></i>Стационар СБ п.Агадырь</dt>
				<dd>
					<div class="crow">
						<div class="col col-4">
							<ul>
								<li>Хирургическое отделение</li>
								<li><strong>Адыханова Гульсум Тлеухановна</strong></li>
								<li><span>Врач хирург</span></li>
							</ul>
						</div>
						<div class="col col-4">
							<ul>
								<li>Родильное отделение</li>
								<li><strong>Коянбаева Гульнара Каировна</strong></li>
								<li><span>Врач акушер-гинеколог</span></li>
							</ul>
						</div>
						<div class="col col-4">
							<ul>
								<li>Общее отделение</li>
								<li><strong>Тамабекова Гульнар Сейдрахмановна</strong></li>
								<li><span>Врач терапевт</span></li>
							</ul>
						</div>
						<div class="col col-4">
							<ul>
								<li>Операционный блок</li>
								<li><strong>Рынк Александра Александровна</strong></li>
								<li><span>Операционная медсестра</span></li>
							</ul>
						</div>
					</div>
				</dd>
			</dl>
			<dl>
				<dt id="service4" class="opened"><i class="fa fa-hospital-o"></i>Дневные стационары КГП «ЦРБ Шетского района»</dt>
				<dd>
					<div class="crow">
						<div class="col col-4">
							<ul>
								<li>Дневной стационар  районной поликлиники</li>
								<li><strong>Газдрубал Жанбота</strong></li>
								<li><span>Врач общей практики</span></li>
							</ul>
						</div>
						<div class="col col-4">
							<ul>
								<li>Дневной стационар поликлиники СБ п.Агадырь</li>
								<li><strong>Кенжебекова Айша Мусаевна</strong></li>
								<li><span>Врач терапевт</span></li>
							</ul>
						</div>
						<div class="col col-4">
							<ul>
								<li>Дневной стационар врачебной амбулатории п.Акжал</li>
								<li><strong>Мухатаев Жанатай Мухатаевич</strong></li>
								<li><span>Врач хирург</span></li>
								<br/>
								<li><strong>Рахимжанова Гульнар Сайрановна</strong></li>
								<li><span>Врач общей практики</span></li>
							</ul>
						</div>
						<div class="col col-4">
							<ul>
								<li>Дневной стационар врачебной амбулатории Жарык п. Сакена Сейфуллина</li>
								<li><strong>Аккушкарова Капия Кехматовна</strong></li>
								<li><span>Врач терапевт</span></li>
							</ul>
						</div>
					</div>
				</dd>
			</dl>
			<dl>
				<dt id="service4" class="opened"><i class="fa fa-hospital-o"></i>2) Женские консультации</dt>
				<dd>
					<div class="crow">
						<div class="col col-2">
							<ul>
								<li>Женская консультация районной поликлиники</li>
								<li><strong>Бейсенов Серик Киргизбаевич</strong></li>
								<li><span>Врач акушер-гинеколог</span></li>
								<br/>
								<li><strong>Акушерки</strong></li>
								<li><span>Жуканова Алма Акжигитовна</span></li>
								<br/>
								<li><span>Сулейменова Камшат Габитовна</span></li>
							</ul>
						</div>
						<div class="col col-2">
							<ul>
								<li>Женская консультация поликлиники СБ п.Агадырь</li>
								<li><strong>Коянбаева Гульнара Каировна</strong></li>
								<li><span>Врач акушер-гинеколог</span></li>
								<br/>
								<li><strong>Акушерки</strong></li>
								<li><span>Крипак Любовь Владимировна</span></li>
								<br/>
								<li><span>Перевалова Наталья Юсифовна</span></li>
							</ul>
						</div>
					</div>
				</dd>
			</dl>
		</section>
	</div>
</main>