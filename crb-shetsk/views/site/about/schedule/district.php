<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
use yii\widgets\LinkPager;

$this->title = Yii::t('app', 'menu.page.about.schedule.district');
$this->params['breadcrumbs'][] = $this->title;
?>

<section class="page-title">
    <div class="grid-row clearfix">
        <h1><?= Yii::t('app', 'menu.page.about.schedule.district')?></h1>
        
        <nav class="bread-crumbs">
        	<a href=""><?= Yii::t('app', 'menu.page.about')?></a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;
        	<a href=""><?= Yii::t('app', 'menu.page.about.schedule')?></a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;
        </nav>
    </div>
</section>


<main class="page-content">
	<div class="grid-row">
		<section class="widget-alt work-time">
			<div class="widget-icon"></div>
			<table class="ctable">
				<tr>
					<td>Абильжанова Бахыт Кадырмановна</td>
					<td>Врач дерматовенеролог</td>
					<td>09.00-18.00</td>
					<td>Обеденный перерыв 13.00-14.00</td>
				</tr>
				<tr>
					<td>Жанабекова Саулегуль Толеубаевна</td>
					<td>Врач онколог, отоларинголог</td>
					<td>09.00-18.00</td>
					<td>Обеденный перерыв 13.00-14.00</td>
				</tr>
				<tr>
					<td>Толеукенова Алмагуль Самбеткызы</td>
					<td>Врач невропатолог</td>
					<td>09.00-18.00</td>
					<td>Обеденный перерыв 13.00-14.00</td>
				</tr>
				<tr>
					<td>Тлеуберли Бахтыбек Уайсулы</td>
					<td>Врач психиатр, нарколог</td>
					<td>09.00-18.00</td>
					<td>Обеденный перерыв 13.00-14.00</td>
				</tr>
				<tr>
					<td>Жукупбаев Ерсин Салимжанович</td>
					<td>Врач хирург, маммолог</td>
					<td>09.00-18.00</td>
					<td>Обеденный перерыв 13.00-14.00</td>
				</tr>
				<tr>
					<td>Абилова Бикеш Кенесовна</td>
					<td>Врач стоматолог</td>
					<td>09.00-18.00</td>
					<td>Обеденный перерыв 13.00-14.00</td>
				</tr>
				<tr>
					<td>Сулейменов Айтжан Толеубаевич</td>
					<td>Врач инфекционист</td>
					<td>09.00-18.00</td>
					<td>Обеденный перерыв 13.00-14.00</td>
				</tr>
				<tr>
					<td>Бейсенов Серик Кыргызбаевич</td>
					<td>Врач акушер-гинеколог</td>
					<td>09.00-18.00</td>
					<td>Обеденный перерыв 13.00-14.00</td>
				</tr>
				<tr>
					<td>Отыншина Кульвара Нуртаевна</td>
					<td>Врач педиатр</td>
					<td>09.00-18.00</td>
					<td>Обеденный перерыв 13.00-14.00</td>
				</tr>
				<tr>
					<td>Абишева Меруерт Дузелевна</td>
					<td>Врач терапевт</td>
					<td>09.00-18.00</td>
					<td>Обеденный перерыв 13.00-14.00</td>
				</tr>
			</table>
		</section>
	</div>
</main>