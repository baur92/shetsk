<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
use yii\widgets\LinkPager;

$this->title = Yii::t('app', 'menu.page.services.common');
$this->params['breadcrumbs'][] = $this->title;
?>

<section class="page-title">
    <div class="grid-row clearfix">
        <h1><?= Yii::t('app', 'menu.page.services.common')?></h1>
        
        <nav class="bread-crumbs">
        	<a href=""><?= Yii::t('app', 'menu.page.services')?></a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;
        </nav>
    </div>
</section>

<main class="page-content">
	<div class="grid-row">
		<section class="detailed-services wpb_content_element">
			<div class="widget-title">Оказание гарантированного объема бесплатной медицинской помощи населению.</div>
			<dl>
				<dt id="service4" class="opened"><i class="fa fa-check"></i>Виды и формы медицинской помощи</dt>
				<!-- <dd style="display: block;">
					<div class="details">
						<div class="clearfix">
							<img src="pic/services-1.png" width="185" height="110" alt="">
							<ul>
								<li>Main Campus:</li>
								<li>365 Montauk Avenue<br>New London, CT 06320</li>
								<li>203-284-2818</li>
							</ul>
							<ul>
								<li>Hours:</li>
								<li>8am - 5pm<br>Monday till Friday</li>
							</ul>
						</div>
					</div>
					<div class="row">
						<div class="col">
							<ul>
								<li>Investigations</li>
								<li><span>$250</span><strong>Colonoscopy</strong></li>
								<li><span>$150</span><strong>Gastroscopy</strong></li>
								<li><span>$270</span><strong>Allergy testing</strong></li>
								<li><span>$110</span><strong>CT scan</strong></li>
								<li><a href="#"><i class="fa fa-angle-right"></i>&nbsp;&nbsp;Full list of services</a></li>
							</ul>
						</div>
						<div class="col">
							<ul>
								<li>Treatments</li>
								<li><span>$270</span><strong>Bronchoscopy</strong></li>
								<li><span>$250</span><strong>Cardiac ablation</strong></li>
								<li><span>$110</span><strong>Sport injuries</strong></li>
								<li><span>$150</span><strong>Women’s health</strong></li>
								<li><a href="#"><i class="fa fa-angle-right"></i>&nbsp;&nbsp;Full list of services</a></li>
							</ul>
						</div>
						<div class="col">
							<ul>
								<li>Doctors</li>
								<li><span>Gynecologist</span><strong>Robert Van</strong></li>
								<li><span>Gynecologist</span><strong>Earlene Milone</strong></li>
								<li><span>Gynecologist</span><strong>Sonya Abdel</strong></li>
								<li><span>Gynecologist</span><strong>Anjali Agrawal</strong></li>
								<li><a href="#"><i class="fa fa-angle-right"></i>&nbsp;&nbsp;Full doctors list</a></li>
							</ul>
						</div>
					</div>
				</dd>
				<dt id="service5" class=""><i class="fa fa-check"></i>Addiction Recovery</dt>
				<dd style="display: none;">
					<div class="details">
						<div class="clearfix">
							<img src="pic/services-1.png" width="185" height="110" alt="">
							<ul>
								<li>Main Campus:</li>
								<li>365 Montauk Avenue<br>New London, CT 06320</li>
								<li>203-284-2818</li>
							</ul>
							<ul>
								<li>Hours:</li>
								<li>8am - 5pm<br>Monday till Friday</li>
							</ul>
						</div>
					</div>
					<div class="row">
						<div class="col">
							<ul>
								<li>Investigations</li>
								<li><span>$250</span><strong>Colonoscopy</strong></li>
								<li><span>$150</span><strong>Gastroscopy</strong></li>
								<li><span>$270</span><strong>Allergy testing</strong></li>
								<li><span>$110</span><strong>CT scan</strong></li>
								<li><a href="#"><i class="fa fa-angle-right"></i>&nbsp;&nbsp;Full list of services</a></li>
							</ul>
						</div>
						<div class="col">
							<ul>
								<li>Treatments</li>
								<li><span>$270</span><strong>Bronchoscopy</strong></li>
								<li><span>$250</span><strong>Cardiac ablation</strong></li>
								<li><span>$110</span><strong>Sport injuries</strong></li>
								<li><span>$150</span><strong>Women’s health</strong></li>
								<li><a href="#"><i class="fa fa-angle-right"></i>&nbsp;&nbsp;Full list of services</a></li>
							</ul>
						</div>
						<div class="col">
							<ul>
								<li>Doctors</li>
								<li><span>Gynecologist</span><strong>Robert Van</strong></li>
								<li><span>Gynecologist</span><strong>Earlene Milone</strong></li>
								<li><span>Gynecologist</span><strong>Sonya Abdel</strong></li>
								<li><span>Gynecologist</span><strong>Anjali Agrawal</strong></li>
								<li><a href="#"><i class="fa fa-angle-right"></i>&nbsp;&nbsp;Full doctors list</a></li>
							</ul>
						</div>
					</div>
				</dd>
				<dt id="service6"><i class="fa fa-check"></i>Anesthesiology</dt>
				<dd>
					<div class="details">
						<div class="clearfix">
							<img src="pic/services-1.png" width="185" height="110" alt="">
							<ul>
								<li>Main Campus:</li>
								<li>365 Montauk Avenue<br>New London, CT 06320</li>
								<li>203-284-2818</li>
							</ul>
							<ul>
								<li>Hours:</li>
								<li>8am - 5pm<br>Monday till Friday</li>
							</ul>
						</div>
					</div>
					<div class="row">
						<div class="col">
							<ul>
								<li>Investigations</li>
								<li><span>$250</span><strong>Colonoscopy</strong></li>
								<li><span>$150</span><strong>Gastroscopy</strong></li>
								<li><span>$270</span><strong>Allergy testing</strong></li>
								<li><span>$110</span><strong>CT scan</strong></li>
								<li><a href="#"><i class="fa fa-angle-right"></i>&nbsp;&nbsp;Full list of services</a></li>
							</ul>
						</div>
						<div class="col">
							<ul>
								<li>Treatments</li>
								<li><span>$270</span><strong>Bronchoscopy</strong></li>
								<li><span>$250</span><strong>Cardiac ablation</strong></li>
								<li><span>$110</span><strong>Sport injuries</strong></li>
								<li><span>$150</span><strong>Women’s health</strong></li>
								<li><a href="#"><i class="fa fa-angle-right"></i>&nbsp;&nbsp;Full list of services</a></li>
							</ul>
						</div>
						<div class="col">
							<ul>
								<li>Doctors</li>
								<li><span>Gynecologist</span><strong>Robert Van</strong></li>
								<li><span>Gynecologist</span><strong>Earlene Milone</strong></li>
								<li><span>Gynecologist</span><strong>Sonya Abdel</strong></li>
								<li><span>Gynecologist</span><strong>Anjali Agrawal</strong></li>
								<li><a href="#"><i class="fa fa-angle-right"></i>&nbsp;&nbsp;Full doctors list</a></li>
							</ul>
						</div>
					</div>
				</dd> -->
			</dl>
		</section>
	</div>
</main>