<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
use yii\widgets\LinkPager;

$this->title = Yii::t('app', 'menu.page.about.staff.precinct');
$this->params['breadcrumbs'][] = $this->title;
?>

<section class="page-title">
    <div class="grid-row clearfix">
        <h1><?= Yii::t('app', 'menu.page.about.staff.precinct')?></h1>
        
        <nav class="bread-crumbs">
        	<a href=""><?= Yii::t('app', 'menu.page.about')?></a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;
        	<a href=""><?= Yii::t('app', 'menu.page.about.staff')?></a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;
        </nav>
    </div>
</section>

<main class="page-content">
	<div class="grid-row">
		<div class="callout wpb_content_element">
			<div class="icon"><i class="fa fa-user-md"></i></div>
			<div class="callout-wrapper">
				<div class="callout-content">
					<div class="title">Общей практики (КДП с.Аксу-Аюлы)</div>
					<div class="subtitle">Толеукенова Алмагуль Самбеткызы <i class="fa fa-phone-square"></i> 21-1-60</div>
				</div>
				<div class="callout-button">
					<a href="#" class="button">№ 1</a>
				</div>
			</div>
		</div>
				<div class="callout wpb_content_element">
			<div class="icon"><i class="fa fa-user-md"></i></div>
			<div class="callout-wrapper">
				<div class="callout-content">
					<div class="title">Общей практики (ВА Красная Поляна)</div>
					<div class="subtitle">Уланова Елена Сергеевна <i class="fa fa-phone-square"></i> 5-33-40</div>
				</div>
				<div class="callout-button">
					<a href="#" class="button">№ 10</a>
				</div>
			</div>
		</div>
		<div class="callout wpb_content_element">
			<div class="icon"><i class="fa fa-user-md"></i></div>
			<div class="callout-wrapper">
				<div class="callout-content">
					<div class="title">Педиатрический (ВА Жарык)</div>
					<div class="subtitle">Тусельбаева Алма Биржановна <i class="fa fa-phone-square"></i> 24-3-95</div>
				</div>
				<div class="callout-button">
					<a href="#" class="button">№ 11</a>
				</div>
			</div>
		</div>
		<div class="callout wpb_content_element">
			<div class="icon"><i class="fa fa-user-md"></i></div>
			<div class="callout-wrapper">
				<div class="callout-content">
					<div class="title">Общей практики (ВА Коктенколь)</div>
					<div class="subtitle">Сулейменов Майдан Калабекович <i class="fa fa-phone-square"></i> 9-26-2-71</div>
				</div>
				<div class="callout-button">
					<a href="#" class="button">№ 12</a>
				</div>
			</div>
		</div>
		<div class="callout wpb_content_element">
			<div class="icon"><i class="fa fa-user-md"></i></div>
			<div class="callout-wrapper">
				<div class="callout-content">
					<div class="title">Терапевтический (ВА Бурма)</div>
					<div class="subtitle">Тультаев Тогамбай Тультаевич <i class="fa fa-phone-square"></i> 34-35-3-13</div>
				</div>
				<div class="callout-button">
					<a href="#" class="button">№ 14</a>
				</div>
			</div>
		</div>
		<div class="callout wpb_content_element">
			<div class="icon"><i class="fa fa-user-md"></i></div>
			<div class="callout-wrapper">
				<div class="callout-content">
					<div class="title">Педиатрический  (ВА Бурма)</div>
					<div class="subtitle">Фирса Людмила Михайловна <i class="fa fa-phone-square"></i> 34-35-3-13</div>
				</div>
				<div class="callout-button">
					<a href="#" class="button">№ 13</a>
				</div>
			</div>
		</div>
		<div class="callout wpb_content_element">
			<div class="icon"><i class="fa fa-user-md"></i></div>
			<div class="callout-wrapper">
				<div class="callout-content">
					<div class="title">Общей практики (КДП Агадырь)</div>
					<div class="subtitle">Ахметова Маран Балхиевна <i class="fa fa-phone-square"></i> 9-27-3-50</div>
				</div>
				<div class="callout-button">
					<a href="#" class="button">№ 15</a>
				</div>
			</div>
		</div>
		<div class="callout wpb_content_element">
			<div class="icon"><i class="fa fa-user-md"></i></div>
			<div class="callout-wrapper">
				<div class="callout-content">
					<div class="title">Педиатрический (КДП Агадырь)</div>
					<div class="subtitle">Сепбосынова Жанаркул Советовна <i class="fa fa-phone-square"></i> 9-27-3-50</div>
				</div>
				<div class="callout-button">
					<a href="#" class="button">№ 16</a>
				</div>
			</div>
		</div>
		<div class="callout wpb_content_element">
			<div class="icon"><i class="fa fa-user-md"></i></div>
			<div class="callout-wrapper">
				<div class="callout-content">
					<div class="title">Педиатрическая (КДП Агадырь)</div>
					<div class="subtitle">Аханова Райхан Ахмедиевна <i class="fa fa-phone-square"></i> 9-27-3-50</div>
				</div>
				<div class="callout-button">
					<a href="#" class="button">№ 17</a>
				</div>
			</div>
		</div>
		<div class="callout wpb_content_element">
			<div class="icon"><i class="fa fa-user-md"></i></div>
			<div class="callout-wrapper">
				<div class="callout-content">
					<div class="title">Терапевтический (КДП Агадырь)</div>
					<div class="subtitle">Ракишев Канапия Ракишевич <i class="fa fa-phone-square"></i> 34-34-5-03</div>
				</div>
				<div class="callout-button">
					<a href="#" class="button">№ 18</a>
				</div>
			</div>
		</div>
		<div class="callout wpb_content_element">
			<div class="icon"><i class="fa fa-user-md"></i></div>
			<div class="callout-wrapper">
				<div class="callout-content">
					<div class="title">Общей практики (КДП Агадырь)</div>
					<div class="subtitle">АженееваАйгуль Орасхановна <i class="fa fa-phone-square"></i> 9-27-3-50</div>
				</div>
				<div class="callout-button">
					<a href="#" class="button">№ 19</a>
				</div>
			</div>
		</div>
		<div class="callout wpb_content_element">
			<div class="icon"><i class="fa fa-user-md"></i></div>
			<div class="callout-wrapper">
				<div class="callout-content">
					<div class="title">Общей практики (КДП Агадырь)</div>
					<div class="subtitle">Флорескул Татьяна Петровна <i class="fa fa-phone-square"></i> 9-6-22-30</div>
				</div>
				<div class="callout-button">
					<a href="#" class="button">№ 20</a>
				</div>
			</div>
		</div>
		<div class="callout wpb_content_element">
			<div class="icon"><i class="fa fa-user-md"></i></div>
			<div class="callout-wrapper">
				<div class="callout-content">
					<div class="title">Общей практики  (КДП Агадырь) </div>
					<div class="subtitle">Медеуова Махаббат Медеуовна <i class="fa fa-phone-square"></i> 9-27-3-50</div>
				</div>
				<div class="callout-button">
					<a href="#" class="button">№ 20</a>
				</div>
			</div>
		</div>
		<div class="callout wpb_content_element">
			<div class="icon"><i class="fa fa-user-md"></i></div>
			<div class="callout-wrapper">
				<div class="callout-content">
					<div class="title">Общей практики (ВА Мойынты)</div>
					<div class="subtitle">Тугамбеков Ермек Аманбаевич <i class="fa fa-phone-square"></i> 9-61-05</div>
				</div>
				<div class="callout-button">
					<a href="#" class="button">№ 21</a>
				</div>
			</div>
		</div>
		<div class="callout wpb_content_element">
			<div class="icon"><i class="fa fa-user-md"></i></div>
			<div class="callout-wrapper">
				<div class="callout-content">
					<div class="title">Общей практики (КДП Агадырь)</div>
					<div class="subtitle">Альбатырова Жанагуль Пурашаевна <i class="fa fa-phone-square"></i> 9-27-3-50</div>
				</div>
				<div class="callout-button">
					<a href="#" class="button">№ 22</a>
				</div>
			</div>
		</div>
		<div class="callout wpb_content_element">
			<div class="icon"><i class="fa fa-user-md"></i></div>
			<div class="callout-wrapper">
				<div class="callout-content">
					<div class="title">Общей практики (КДП Агадырь) </div>
					<div class="subtitle">Аженеева Айгуль Орасхановна <i class="fa fa-phone-square"></i> 9-6-22-30</div>
				</div>
				<div class="callout-button">
					<a href="#" class="button">№ 22</a>
				</div>
			</div>
		</div>
		<div class="callout wpb_content_element">
			<div class="icon"><i class="fa fa-user-md"></i></div>
			<div class="callout-wrapper">
				<div class="callout-content">
					<div class="title">Общей практики (КДП Аксу-Аюлы)</div>
					<div class="subtitle">Толеукенова Алмагул Самбеткызы <i class="fa fa-phone-square"></i> 21-1-60</div>
				</div>
				<div class="callout-button">
					<a href="#" class="button">№ 23</a>
				</div>
			</div>
		</div>
		<div class="callout wpb_content_element">
			<div class="icon"><i class="fa fa-user-md"></i></div>
			<div class="callout-wrapper">
				<div class="callout-content">
					<div class="title">Общей практики (КДП Аксу-Аюлы)</div>
					<div class="subtitle">Абишева Меруерт Дузелевна <i class="fa fa-phone-square"></i> 21-1-60</div>
				</div>
				<div class="callout-button">
					<a href="#" class="button">№ 25</a>
				</div>
			</div>
		</div>
		<div class="callout wpb_content_element">
			<div class="icon"><i class="fa fa-user-md"></i></div>
			<div class="callout-wrapper">
				<div class="callout-content">
					<div class="title">Общей практики (КДП Агадырь) </div>
					<div class="subtitle">Уалибекова Айымгул Бексеитовна <i class="fa fa-phone-square"></i> 9-27-3-50</div>
				</div>
				<div class="callout-button">
					<a href="#" class="button">№ 24</a>
				</div>
			</div>
		</div>
		<div class="callout wpb_content_element">
			<div class="icon"><i class="fa fa-user-md"></i></div>
			<div class="callout-wrapper">
				<div class="callout-content">
					<div class="title">Общей практики (КДП Агадырь) </div>
					<div class="subtitle">Альбатырова Жанагуль Пурашаевна <i class="fa fa-phone-square"></i> 9-27-3-50</div>
				</div>
				<div class="callout-button">
					<a href="#" class="button">№ 24</a>
				</div>
			</div>
		</div>
		<div class="callout wpb_content_element">
			<div class="icon"><i class="fa fa-user-md"></i></div>
			<div class="callout-wrapper">
				<div class="callout-content">
					<div class="title">Общей практики (ВА Акжал)</div>
					<div class="subtitle">Рахимжанова Гульнара Сайрановна  <i class="fa fa-phone-square"></i> 37-1-03</div>
				</div>
				<div class="callout-button">
					<a href="#" class="button">№ 26</a>
				</div>
			</div>
		</div>
		<div class="callout wpb_content_element">
			<div class="icon"><i class="fa fa-user-md"></i></div>
			<div class="callout-wrapper">
				<div class="callout-content">
					<div class="title">Терапевтический (ВА Жарык)</div>
					<div class="subtitle">Аккушкарова Капия Кехматовна <i class="fa fa-phone-square"></i> 34-24-3-95</div>
				</div>
				<div class="callout-button">
					<a href="#" class="button">№ 3</a>
				</div>
			</div>
		</div>
		<div class="callout wpb_content_element">
			<div class="icon"><i class="fa fa-user-md"></i></div>
			<div class="callout-wrapper">
				<div class="callout-content">
					<div class="title">Терапевтический (ВА Жарык)</div>
					<div class="subtitle">Аккушкарова Капия Кехматовна <i class="fa fa-phone-square"></i> 34-24-3-95</div>
				</div>
				<div class="callout-button">
					<a href="#" class="button">№ 4</a>
				</div>
			</div>
		</div>
		<div class="callout wpb_content_element">
			<div class="icon"><i class="fa fa-user-md"></i></div>
			<div class="callout-wrapper">
				<div class="callout-content">
					<div class="title">Общей практики (ВА Актобе)</div>
					<div class="subtitle">Каукенбаева Зайраш Сеитжановна <i class="fa fa-phone-square"></i> 9-24-5-62</div>
				</div>
				<div class="callout-button">
					<a href="#" class="button">№ 7</a>
				</div>
			</div>
		</div>
		<div class="callout wpb_content_element">
			<div class="icon"><i class="fa fa-user-md"></i></div>
			<div class="callout-wrapper">
				<div class="callout-content">
					<div class="title">Общей практики (ВА Нураталды)</div>
					<div class="subtitle">Абильдина Айгуль Кошкимбаевна <i class="fa fa-phone-square"></i> 50-7-72</div>
				</div>
				<div class="callout-button">
					<a href="#" class="button">№ 8</a>
				</div>
			</div>
		</div>
		<div class="callout wpb_content_element">
			<div class="icon"><i class="fa fa-user-md"></i></div>
			<div class="callout-wrapper">
				<div class="callout-content">
					<div class="title">Педиатрический (ВА Кр.Поляна; ФАП Аккой)</div>
					<div class="subtitle">Беркамалова Турсын Султанкызы <i class="fa fa-phone-square"></i> 34-34-5-03</div>
				</div>
				<div class="callout-button">
					<a href="#" class="button">№ 9</a>
				</div>
			</div>
		</div>
	</div>
</main>