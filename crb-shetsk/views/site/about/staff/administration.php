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
        <h1><?= Yii::t('app', 'menu.page.about.staff.administration')?></h1>
        
        <nav class="bread-crumbs">
        	<a href=""><?= Yii::t('app', 'menu.page.about')?></a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;
        	<a href=""><?= Yii::t('app', 'menu.page.about.staff')?></a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;
        </nav>
    </div>
</section>

<!-- page content -->
<main class="page-content">
	<div class="grid-row">
					<div class="grid-col grid-col-9">

					<!-- Team -->
					<section id="doctors" class="doctors">
					
						<div class="grid">		
							<?php 
			                    foreach(Yii::$app->params['users'] as $user){
			                    	echo '<div class="item">
											<div class="pic">
												<img src="'.$user->photo_.'" width="370" height="370" alt="'.$user->lastname_.' '.$user->firstname_.' '.$user->patronymic_.'">
												<div class="links">
													<ul>
														<li><a href="#" class="fa fa-skype"></a></li>
														<li><a href="#" class="fa fa-twitter"></a></li>
														<li><a href="#" class="fa fa-facebook"></a></li>
													</ul>
												</div>
											</div>
											<h3>'.$user->lastname_.' '.$user->firstname_.' '.$user->patronymic_.'</h3>
			                                <p>'.$user->position_.'</p>
										</div>';
			                    }
			                ?>		
						</div>
					</section>
					<!--/ Team -->	

					</div>
					<div class="grid-col grid-col-3">

						<!-- categories -->
						<section class="widget widget-sevices">
							<div class="widget-title"><?= Yii::t('app', 'page.administration.org.department')?></div>
							<ul class="employee">
								<li><i class="fa fa-user-md"></i><a><p>Орынбасарова Айжан Орынбасаркызы</p></a></li>
								<li><i class="fa fa-user-md"></i><a><p>Жумабай  Светлана Кабылбеккызы</p></a></li>
								<li><i class="fa fa-user-md"></i><a><p>Есмагамбетова Гульбаршин Нуртаевна</p></a></li>
								<li><i class="fa fa-user-md"></i><a><p>Ибрайкин Талгат Канатович</p></a></li>
								<li><i class="fa fa-user-md"></i><a><p>Рахимбаева Насип Рахимбаевна</p></a></li>
								<li><i class="fa fa-user-md"></i><a><p>Нурланбекова Асель Ерболовна</p></a></li>
								<li><i class="fa fa-user-md"></i><a><p>Малгаждарова Акмарал</p></a></li>
							</ul>
						</section>
						<!--/ categories -->

					</div>
				</div>

</main>
<!--/ page content -->