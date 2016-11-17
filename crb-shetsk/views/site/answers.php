<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
use yii\widgets\LinkPager;

$this->title = Yii::t('app', 'menu.page.answers');
$this->params['breadcrumbs'][] = $this->title;
?>

<section class="page-title">
    <div class="grid-row clearfix">
        <h1><?= Yii::t('app', 'menu.page.answers')?></h1>
        
        <!-- <nav class="bread-crumbs">
            <a href="index-2.html">Home</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;
            <a href="news-default.html">News</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;
            <a href="#">Full width</a>
        </nav> -->
    </div>
</section>

<main class="page-content">
	<div class="grid-row">
		<section class="widget comments">	
			<div class="widget-title">3 Comments</div>
			
			<ul>
				<li>
					<div class="avatar"><i class="fa fa-user"></i></div>
					<div class="text">
						<div class="author"><a href="#">Reply <i class="fa fa-angle-double-right"></i></a><span>Callis Ta'eed</span> &nbsp; August 17, 47 minutes ago</div>
						<p>Nulla lobortis facilisis eros vitae mollis. Morbi consectetur, tortor ut feugiat rhoncus, nunc augue placerat massa, sit amet laoreet est libero quis nisl. Integer cursus sodales sem eu dapibus. Morbi lobortis eleifend lectus sit amet porttitor. Nam tincidunt congue laoreet.</p>
					</div>
					<ul>
						<li>
							<div class="avatar"><i class="fa fa-user"></i></div>
							<div class="text">
								<div class="author"><a href="#">Reply <i class="fa fa-angle-double-right"></i></a><span>Admin</span> &nbsp; August 18, 47 minutes ago</div>
								<p>Nulla lobortis facilisis eros vitae mollis. Morbi consectetur, tortor ut feugiat rhoncus, nunc augue placerat massa, sit amet laoreet est libero quis nisl. Integer cursus sodales sem eu dapibus. Morbi lobortis eleifend lectus sit amet porttitor. Nam tincidunt congue laoreet.</p>
							</div>
						</li>
					</ul>
				</li>
				<li>
					<div class="avatar"><i class="fa fa-user"></i></div>
					<div class="text">
						<div class="author"><a href="#">Reply <i class="fa fa-angle-double-right"></i></a><span>Callis Ta'eed</span> &nbsp; August 17, 47 minutes ago</div>
						<p>Nulla lobortis facilisis eros vitae mollis. Morbi consectetur, tortor ut feugiat rhoncus, nunc augue placerat massa, sit amet laoreet est libero quis nisl. Integer cursus sodales sem eu dapibus. Morbi lobortis eleifend lectus sit amet porttitor. Nam tincidunt congue laoreet.</p>
					</div>
					<ul>
						<li>
							<div class="avatar"><i class="fa fa-user"></i></div>
							<div class="text">
								<div class="author"><a href="#">Reply <i class="fa fa-angle-double-right"></i></a><span>Admin</span> &nbsp; August 18, 47 minutes ago</div>
								<p>Nulla lobortis facilisis eros vitae mollis. Morbi consectetur, tortor ut feugiat rhoncus, nunc augue placerat massa, sit amet laoreet est libero quis nisl. Integer cursus sodales sem eu dapibus. Morbi lobortis eleifend lectus sit amet porttitor. Nam tincidunt congue laoreet.</p>
							</div>
						</li>
					</ul>
				</li>
			</ul>
		</section>
	</div>
</main>