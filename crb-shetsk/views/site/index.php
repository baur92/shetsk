<?php
/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'КГП "Центральная районная больница Шетского района"';
?>


<!-- slider -->
<div class="slider-wrapper">
    <section class="slider" id="slider">
        <div class="ls-slide" data-ls="transition2d:9;slidedelay:7000;">                    
            <img src="pic/medical-slide-1.jpg" alt="" class="ls-bg">
            
            <div class="intro ls-l" 
            data-ls="offsetyin:top;
            offsetxin:0;
            durationin:2000;
            offsetyout:bottom;
            offsetxout:0;
            durationout:1000;" style="left:80%;top:35%;">
                <span class="icon fa fa-users"></span>
                <h2><?= Yii::t('app', 'page.slide.hot.apparat')?><span><?= Yii::t('app', 'page.slide.hot.management')?></span></h2>            
                <div class="buttons">
                    <a href="#" class="prev"><i class="fa fa-angle-left"></i></a><!--
                    --><a href="index.php?r=site/about-structure" class="button"><?= Yii::t('app', 'page.detailed')?></a><!--
                    --><a href="#" class="next"><i class="fa fa-angle-right"></i></a>
                </div>
            </div>
        </div>
        <div class="ls-slide" data-ls="transition2d:40;slidedelay:7000;">               
            <img src="pic/medical-slide-2.jpg" alt="" class="ls-bg">
            
            <div class="intro ls-l" 
            data-ls="scalexin:0.3;
            scaleyin:0.3;
            rotatexin:180;
            offsetxin:0;
            durationin:2000;
            durationout:2000;
            scalexout:2;
            scaleyout:2;
            offsetxout:0;
            fadeout:true;
            showuntil:3000;" style="left:80%;top:35%;">
                <span class="icon fa fa-ambulance"></span>
                <h2><?= Yii::t('app', 'page.slide.hot.precinct')?><span><?= Yii::t('app', 'page.slide.hot.service')?></span></h2>            
                <div class="buttons">
                    <a href="#" class="prev"><i class="fa fa-angle-left"></i></a><!--
                    --><a href="index.php?r=site/about-staff-precinct" class="button"><?= Yii::t('app', 'page.detailed')?></a><!--
                    --><a href="#" class="next"><i class="fa fa-angle-right"></i></a>
                </div>
            </div>
        </div>
        <div class="ls-slide" data-ls="transition2d:11;slidedelay:7000;">
            <img src="pic/medical-slide-3.jpg" alt="" class="ls-bg">
            
            <div class="intro ls-l" 
            data-ls="skewxin:30;
            skewyin:0;
            offsetxin:right;
            fadein:false;
            durationin:2000;
            durationout:1000;
            offsetxout:right;
            offsetyout:0;
            fadeout:true;" style="left:80%;top:35%;">
                <span class="icon fa fa-hospital-o"></span>
                <h2><?= Yii::t('app', 'page.slide.hot.stationary')?><span><?= Yii::t('app', 'page.slide.hot.service')?></span></h2>            
                <div class="buttons">
                    <a href="#" class="prev"><i class="fa fa-angle-left"></i></a><!--
                    --><a href="index.php?r=site/about-staff-stationary" class="button"><?= Yii::t('app', 'page.detailed')?></a><!--
                    --><a href="#" class="next"><i class="fa fa-angle-right"></i></a>
                </div>
            </div>
        </div>
    </section>
</div>
<!--/ slider -->

<main class="page-content">
    <div class="grid-row">
        <!-- benefits -->
        <section class="benefits">
            <ul>
                <li>
                    <div class="pic"><i class="fa fa-user-md"></i></div>
                    <div class="text">
                        <h2><?= Yii::t('app', 'page.main.hot.our-services')?></h2>                    
                        <a href="index.php?r=site/services-common" class="more"></a>
                    </div>
                </li>
                <li>
                    <div class="pic"><i class="fa fa-file-text-o"></i></div>
                    <<div class="text">
                        <h2><?= Yii::t('app', 'page.main.hot.price-list')?></h2>                    
                        <a href="index.php?r=site/services-paid-price" class="more"></a>
                    </div>
                </li>
                <li>
                    <div class="pic"><i class="fa fa-clock-o"></i></div>
                    <div class="text">
                        <h2><?= Yii::t('app', 'page.main.hot.schedule')?></h2>                    
                        <a href="index.php?r=site/about-schedule-district" class="more"></a>
                    </div>
                </li>
                <li>
                    <div class="pic"><i class="fa fa-comments-o"></i></div>
                    <div class="text">
                        <h2><?= Yii::t('app', 'page.main.hot.news')?></h2>                    
                        <a href="index.php?r=site/news" class="more"></a>
                    </div>
                </li>
            </ul>
        </section>
        <!--/ benefits -->
    </div>
    <div class="grid-row">
        <!-- testimonial -->
        <?php 
            foreach($directors as $director){
                echo '<div class="widget testimonial">
                        <div class="clearfix">
                            <img src="'.$director->photo_.'" width="270" height="270" alt="">
                            <h1 class="citation">'.Yii::t('app', 'page.main.citation.header').'</h1>
                            <p>'.Yii::t('app', 'page.main.citation.first').'</p>
                            <p>'.Yii::t('app', 'page.main.citation.second').'</p>
                            <h1 class="citation">'.Yii::t('app', 'page.main.citation.footer').'</h1>
                        </div>
                        <div class="author">'.$director->lastname_.' '.$director->firstname_.' '.$director->patronymic_.' ('.$director->position_.')</div>
                    </div>';
            }
        ?>
        <!--/ testimonial -->
        <div style="text-align:center;">
            <?= Html::a(
                        Yii::t('app', 'page.main.blog.go'), 
                        ['/site/blog'], 
                        ['class' => 'wpb_button wpb_btn-large blog-button']) 
                    ?>
            <!-- <button class="wpb_button wpb_btn-large" style="top:10px; left:35%">Перейти на Блог Руководителя</button> -->
        </div>
    </div>

</main>