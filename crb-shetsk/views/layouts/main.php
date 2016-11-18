<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="page loaded page-boxed">
    <!-- page header -->
    <header class="page-header main-page">
        <!-- logo -->
        <section id="logo" class="logo">
            <div>
                <?= Html::a(
                        '<img src="img/logo.png" width="90" height="90" alt="Clinico">', 
                        ['/site/index'], 
                        ['class' => ($this->context->route == 'site/index')?'active':'']) 
                    ?>
            </div>
        </section>
        <!--/ logo -->

        <!-- main nav -->
        <nav class="main-nav">

            <ul>
                <li>
                    <?= Html::a(
                        '<i class="fa fa-plus"></i>'.Yii::t('app', 'menu.page.main'), 
                        ['/site/index'], 
                        ['class' => ($this->context->route == 'site/index')?'active':'']) 
                    ?>
                </li>
                <li>
                    <?= Html::a(
                        '<i class="fa fa-plus"></i>'.Yii::t('app', 'menu.page.news'), 
                        ['/site/news'], 
                        ['class' => (strpos($this->context->route, 'site/news') !== false)?'active':'']) 
                    ?>
                    <ul>
                        <li>
                            <?= Html::a(
                                Yii::t('app', 'menu.page.news.info'), 
                                ['site/news-info'], 
                                ['class' => (strpos($this->context->route, 'site/news-info') !== false)?'active':'']) 
                            ?>
                        </li>
                    </ul>
                </li>
                <li>
                    <?= Html::a(
                        '<i class="fa fa-plus"></i>'.Yii::t('app', 'menu.page.about'), 
                        [''], 
                        ['class' => (strpos($this->context->route, 'site/about') !== false)?'active':'']
                        ) 
                    ?>
                    <ul>
                        <li>
                            <?= Html::a(
                                Yii::t('app', 'menu.page.about.structure'), 
                                ['site/about-structure'], 
                                ['class' => ($this->context->route == 'site/about-structure')?'active':'']) 
                            ?>
                        </li>
                        <li>
                            <?= Html::a(
                                Yii::t('app', 'menu.page.about.staff'), 
                                [''], 
                                ['class' => (strpos($this->context->route, 'site/about-staff') !== false)?'active':'']
                                ) 
                            ?>
                            <ul>
                                <li>
                                    <?= Html::a(
                                        Yii::t('app', 'menu.page.about.staff.administration'), 
                                        ['site/about-staff-administration'], 
                                        ['class' => ($this->context->route == 'site/about-staff-administration')?'active':'']) 
                                    ?>
                                </li>
                                <li>
                                    <?= Html::a(
                                        Yii::t('app', 'menu.page.about.staff.precinct'), 
                                        ['site/about-staff-precinct'], 
                                        ['class' => ($this->context->route == 'site/about-staff-precinct')?'active':'']) 
                                    ?>
                                </li>
                                <li>
                                    <?= Html::a(
                                        Yii::t('app', 'menu.page.about.staff.stationary'), 
                                        ['site/about-staff-stationary'], 
                                        ['class' => ($this->context->route == 'site/about-staff-stationary')?'active':'']) 
                                    ?>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <?= Html::a(
                                Yii::t('app', 'menu.page.about.regulation'), 
                                ['site/about-regulation'], 
                                ['class' => ($this->context->route == 'site/about-regulation')?'active':'']) 
                            ?>
                        </li>
                        <li>
                            <?= Html::a(
                                Yii::t('app', 'menu.page.about.schedule'), 
                                [''], 
                                ['class' => (strpos($this->context->route, 'site/about-schedule') !== false)?'active':'']
                                ) 
                            ?>
                            <ul>
                                <li>
                                    <?= Html::a(
                                        Yii::t('app', 'menu.page.about.schedule.district'), 
                                        ['site/about-schedule-district'], 
                                        ['class' => ($this->context->route == 'site/about-schedule-district')?'active':'']) 
                                    ?>
                                </li>
                                <li>
                                    <?= Html::a(
                                        Yii::t('app', 'menu.page.about.schedule.agadyr'), 
                                        ['site/about-schedule-agadyr'], 
                                        ['class' => ($this->context->route == 'site/about-schedule-agadyr')?'active':'']) 
                                    ?>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <?= Html::a(
                                Yii::t('app', 'menu.page.about.support'), 
                                ['site/about-support'], 
                                ['class' => ($this->context->route == 'site/about-support')?'active':'']) 
                            ?>
                        </li>
                    </ul>
                </li>
                <li>
                    <?= Html::a(
                        '<i class="fa fa-plus"></i>'.Yii::t('app', 'menu.page.services'), 
                        [''], 
                        ['class' => (strpos($this->context->route, 'site/services') !== false)?'active':'']) 
                    ?>
                    <ul>
                        <li>
                            <?= Html::a(
                                Yii::t('app', 'menu.page.services.common'), 
                                ['site/services-common'], 
                                ['class' => (strpos($this->context->route, 'site/services-common') !== false)?'active':'']) 
                            ?>
                        </li>
                        <li>
                            <?= Html::a(
                                Yii::t('app', 'menu.page.services.paid'), 
                                [''], 
                                ['class' => (strpos($this->context->route, 'site/services-paid') !== false)?'active':'']
                                ) 
                            ?>
                            <ul>
                                <li>
                                    <?= Html::a(
                                        Yii::t('app', 'menu.page.services.paid.regulation'), 
                                        ['site/services-paid-regulation'], 
                                        ['class' => ($this->context->route == 'site/services-paid-regulation')?'active':'']) 
                                    ?>
                                </li>
                                <li>
                                    <?= Html::a(
                                        Yii::t('app', 'menu.page.services.paid.price'), 
                                        ['site/services-paid-price'], 
                                        ['class' => ($this->context->route == 'site/services-paid-price')?'active':'']) 
                                    ?>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>       
                <li>
                    <?= Html::a(
                        '<i class="fa fa-plus"></i><p style="word-wrap: break-word;">'.Yii::t('app', 'menu.page.state-symbols').'</p>', 
                        ['/site/state-symbols'], 
                        ['class' => ($this->context->route == 'site/state-symbols')?'active':'']) 
                    ?>
                </li>
                <li>
                    <?= Html::a(
                        '<i class="fa fa-plus"></i>'.Yii::t('app', 'menu.page.comments'), 
                        ['/site/comments'], 
                        ['class' => ($this->context->route == 'site/comments')?'active':'']) 
                    ?>
                </li>
                <li>
                    <?= Html::a(
                        '<i class="fa fa-plus"></i>'.Yii::t('app', 'menu.page.answers'), 
                        ['/site/answers'], 
                        ['class' => ($this->context->route == 'site/answers')?'active':'']) 
                    ?>
                </li>
                <li>
                    <?= Html::a(
                        '<i class="fa fa-plus"></i>'.Yii::t('app', 'menu.page.contact'), 
                        ['/site/contact'], 
                        ['class' => ($this->context->route == 'site/contact')?'active':'']) 
                    ?>
                </li>
                <!-- <li>
                    <?= Yii::$app->user->isGuest ? 
                        Html::a(
                            '<i class="fa fa-plus"></i>'.Yii::t('app', 'menu.page.login'), 
                            ['/site/login'], 
                            ['class' => ($this->context->route == 'site/login')?'active':'']):
                        Html::a(
                            '<i class="fa fa-plus"></i>'.Yii::t('app', 'menu.page.logout').' ('.Yii::$app->user->identity->username.')', 
                            ['/site/logout'], 
                            ['class' => ($this->context->route == 'site/logout')?'active':'']) 
                    ?>
                </li> -->
            </ul>
        </nav>
        <!--/ main nav -->
        
        <!-- mobile nav -->
        <nav id="mobile-main-nav" class="mobile-main-nav">
            <i class="fa fa-bars"></i><a href="#" class="opener">Навигация</a>
            <ul>
                <li>
                    <?= Html::a(
                        '<i class="fa fa-plus"></i>'.Yii::t('app', 'menu.page.main'), 
                        ['/site/index'], 
                        ['class' => ($this->context->route == 'site/index')?'active':'']) 
                    ?>
                </li>
                <li>
                    <?= Html::a(
                        '<i class="fa fa-plus"></i>'.Yii::t('app', 'menu.page.news'), 
                        ['/site/news'], 
                        ['class' => ($this->context->route == 'site/news')?'active':'']) 
                    ?>
                </li>
                <li>
                    <?= Html::a(
                        '<i class="fa fa-plus"></i>'.Yii::t('app', 'menu.page.about'), 
                        [''], 
                        ['class' => (strpos($this->context->route, 'site/about') !== false)?'active':'']
                        ) 
                    ?>
                    <ul>
                        <li>
                            <?= Html::a(
                                Yii::t('app', 'menu.page.about.structure'), 
                                ['site/about-structure'], 
                                ['class' => ($this->context->route == 'site/about-structure')?'active':'']) 
                            ?>
                        </li>
                        <li>
                            <?= Html::a(
                                Yii::t('app', 'menu.page.about.staff'), 
                                [''], 
                                ['class' => (strpos($this->context->route, 'site/about-staff') !== false)?'active':'']
                                ) 
                            ?>
                            <ul>
                                <li>
                                    <?= Html::a(
                                        Yii::t('app', 'menu.page.about.staff.administration'), 
                                        ['site/about-staff-administration'], 
                                        ['class' => ($this->context->route == 'site/about-staff-administration')?'active':'']) 
                                    ?>
                                </li>
                                <li>
                                    <?= Html::a(
                                        Yii::t('app', 'menu.page.about.staff.precinct'), 
                                        ['site/about-staff-precinct'], 
                                        ['class' => ($this->context->route == 'site/about-staff-precinct')?'active':'']) 
                                    ?>
                                </li>
                                <li>
                                    <?= Html::a(
                                        Yii::t('app', 'menu.page.about.staff.stationary'), 
                                        ['site/about-staff-stationary'], 
                                        ['class' => ($this->context->route == 'site/about-staff-stationary')?'active':'']) 
                                    ?>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <?= Html::a(
                                Yii::t('app', 'menu.page.about.regulation'), 
                                ['site/about-regulation'], 
                                ['class' => ($this->context->route == 'site/about-regulation')?'active':'']) 
                            ?>
                        </li>
                        <li>
                            <?= Html::a(
                                Yii::t('app', 'menu.page.about.schedule'), 
                                [''], 
                                ['class' => (strpos($this->context->route, 'site/about-schedule') !== false)?'active':'']
                                ) 
                            ?>
                            <ul>
                                <li>
                                    <?= Html::a(
                                        Yii::t('app', 'menu.page.about.schedule.district'), 
                                        ['site/about-schedule-district'], 
                                        ['class' => ($this->context->route == 'site/about-schedule-district')?'active':'']) 
                                    ?>
                                </li>
                                <li>
                                    <?= Html::a(
                                        Yii::t('app', 'menu.page.about.schedule.agadyr'), 
                                        ['site/about-schedule-agadyr'], 
                                        ['class' => ($this->context->route == 'site/about-schedule-agadyr')?'active':'']) 
                                    ?>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <?= Html::a(
                                Yii::t('app', 'menu.page.about.support'), 
                                ['site/about-support'], 
                                ['class' => ($this->context->route == 'site/about-support')?'active':'']) 
                            ?>
                        </li>
                    </ul>
                </li>
                <li>
                    <?= Html::a(
                        '<i class="fa fa-plus"></i>'.Yii::t('app', 'menu.page.services'), 
                        [''], 
                        ['class' => (strpos($this->context->route, 'site/services') !== false)?'active':'']) 
                    ?>
                    <ul>
                        <li>
                            <?= Html::a(
                                Yii::t('app', 'menu.page.services.common'), 
                                ['site/services-common'], 
                                ['class' => (strpos($this->context->route, 'site/services-common') !== false)?'active':'']) 
                            ?>
                        </li>
                        <li>
                            <?= Html::a(
                                Yii::t('app', 'menu.page.services.paid'), 
                                [''], 
                                ['class' => (strpos($this->context->route, 'site/services-paid') !== false)?'active':'']
                                ) 
                            ?>
                            <ul>
                                <li>
                                    <?= Html::a(
                                        Yii::t('app', 'menu.page.services.paid.regulation'), 
                                        ['site/services-paid-regulation'], 
                                        ['class' => ($this->context->route == 'site/services-paid-regulation')?'active':'']) 
                                    ?>
                                </li>
                                <li>
                                    <?= Html::a(
                                        Yii::t('app', 'menu.page.services.paid.price'), 
                                        ['site/services-paid-price'], 
                                        ['class' => ($this->context->route == 'site/services-paid-price')?'active':'']) 
                                    ?>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>       
                <li>
                    <?= Html::a(
                        '<i class="fa fa-plus"></i>'.Yii::t('app', 'menu.page.state-symbols'), 
                        ['/site/state-symbols'], 
                        ['class' => ($this->context->route == 'site/state-symbols')?'active':'']) 
                    ?>
                </li>
                <li>
                    <?= Html::a(
                        '<i class="fa fa-plus"></i>'.Yii::t('app', 'menu.page.comments'), 
                        ['/site/comments'], 
                        ['class' => ($this->context->route == 'site/comments')?'active':'']) 
                    ?>
                </li>
                <li>
                    <?= Html::a(
                        '<i class="fa fa-plus"></i>'.Yii::t('app', 'menu.page.contact'), 
                        ['/site/contact'], 
                        ['class' => ($this->context->route == 'site/contact')?'active':'']) 
                    ?>
                </li>
                <!-- <li>
                    <?= Yii::$app->user->isGuest ? 
                        Html::a(
                            '<i class="fa fa-plus"></i>'.Yii::t('app', 'menu.page.login'), 
                            ['/site/login'], 
                            ['class' => ($this->context->route == 'site/login')?'active':'']):
                        Html::a(
                            '<i class="fa fa-plus"></i>'.Yii::t('app', 'menu.page.logout').' ('.Yii::$app->user->identity->username.')', 
                            ['/site/logout'], 
                            ['class' => ($this->context->route == 'site/logout')?'active':'']) 
                    ?>
                </li> -->
            </ul>
        </nav>
        <!--/ mobile nav -->

        <a href="#" class="right-link"><i class="fa fa-angle-double-up"></i></a>
    </header>
    <!--/ page header -->

    <form id="quick-search" class="quick-search">
        <fieldset>
            <div class="vc_row-fluid">
                <div class="vc_span3">
                        <div class="milestone clearfix" data-counted="yes">
                            <div class="icon"><i class="fa fa-users"></i></div>
                            <div class="title"><?= array_values(array_values(Yii::$app->params['stat-today'])[0])[0]?></div>
                            Пользователей сегодня
                        </div>
                </div>
                <div class="vc_span3">
                        <div class="milestone clearfix" data-counted="yes">
                        <div class="icon"><i class="fa fa-users"></i></div>
                            <div class="title"><?= array_values(array_values(Yii::$app->params['stat-month'])[0])[0]?></div>
                            Пользователей за месяц
                        </div>
                </div>
                <div class="vc_span3">
                        <div class="milestone clearfix" data-counted="yes">
                        <div class="icon"><i class="fa fa-users"></i></div>
                            <div class="title"><?= array_values(array_values(Yii::$app->params['stat-all'])[0])[0]?></div>
                            Пользователей всего
                        </div>
                </div>
                <div class="vc_span3">
                    <?= Html::button('Запись на прием', array('onclick' => 'js:document.location.href="index.php?r=site/appointment"', 'class'=>'btn-appointment'));?>
                </div>
            </div>
            <div class="switcher">
                <button id="quick-search-switcher" type="button" class="btn-view-appointment">Запись на прием</button>
            </div>
        </fieldset>             
    </form>

    <?= $content ?>
    
    <!-- <div class="container">
        
    </div> -->

    <!-- page footer -->
    <footer class="page-footer">
        <a href="#" id="top-link" class="top-link"><i class="fa fa-angle-double-up"></i></a>
        
        <div class="grid-row">
            <div class="grid-col grid-col-3">
                <!-- last news -->
                <section class="widget-alt last-news">
                    <div class="widget-icon"></div>
                    <div class="widget-title"><?= Yii::t('app', 'page.links') ?></div>

                    <div class="auto">

                        <div class="carousel">
                            <ul>
                                <li><a href="http://akorda.kz"><img src="img/links/akorda.jpg" style="width:150px; height:90px;"></a></li>
                                <li><a href="https://www.mzsr.gov.kz"><img src="img/links/minzdrav.jpg" style="width:150px; height:90px;"></a></li>
                                <li><a href="http://knf.kz/index.php"><img src="img/links/knf.jpg" style="width:150px; height:90px;"></a></li>
                                <li><a href="http://zdravkrg.kz"><img src="img/links/zdravkrg.jpg" style="width:150px; height:90px;"></a></li>
                                <li><a href="http://shet-audany.gov.kz"><img src="img/links/shetsk.jpg" style="width:150px; height:90px;"></a></li>
                                <li><a href="http://www.strategy2050.kz"><img src="img/links/2050.jpg" style="width:150px; height:90px;"></a></li>
                                <li><a href="https://bg.eisz.kz"><img src="img/links/bg.jpg" style="width:150px; height:90px;"></a></li>
                            </ul>
                        </div>
                    </div>
                    
                </section>
                <!--/ last news -->
            </div>
            
            <div class="grid-col grid-col-3">
                <!-- location -->
                <section class="widget-alt location">
                    <div class="widget-icon"></div>
                    <div class="widget-title"><?= Yii::t('app', 'page.location') ?></div>
                    <address>Карагандинская область,  Шетский район с.Аксу-Аюлы Ул.Жаппакова 23 </address>
                    <ul>
                        <li><i class="fa fa-phone"></i>8-(71031)-21357</li>
                        <li><i class="fa fa-at">@</i>rmo_schetsk@mail.ru</li>
                        <li><i class="fa fa-skype"></i>Medical Skype Name</li>
                    </ul>
                    <nav>
                        <a href="#" class="fa fa-twitter"></a>
                        <a href="#" class="fa fa-facebook"></a>
                        <a href="#" class="fa fa-instagram"></a>
                    </nav>
                </section>
                <!--/ location -->  
            </div>
            
            <div class="grid-col grid-col-3">
                <!-- last news -->
                <section class="widget-alt recent-posts">
                    <div class="widget-icon"></div>
                    <div class="widget-title"><?= Yii::t('app', 'page.posts') ?></div>
                    <ul>
                        <?php 
                            foreach(Yii::$app->params['news'] as $new){
                                if (Yii::$app->language == 'ru'){
                                    $desc = substr($new->description, 0, 50);
                                    echo '<li>
                                        <a href="#"><img src="'.$new->image.'" width="80" height="80" alt=""></a>
                                        <p><a href="index.php?r=site/news">'.$desc.' ...</a><br>'.$new->create_date_.'</p>
                                    </li>';
                                } else {
                                    $desc = substr($new->description_kk_, 0, 50);
                                    echo '<li>
                                        <a href="#"><img src="'.$new->image.'" width="80" height="80" alt=""></a>
                                        <p><a href="index.php?r=site/news">'.$desc.' ...</a><br>'.$new->create_date_.'</p>
                                    </li>';
                                }
                            }
                        ?>
                    </ul>
                </section>
                <!--/ last news -->                     
            </div>
            
            <div class="grid-col grid-col-3">
                <!-- work time -->
                <section class="widget-alt work-time">
                    <div class="widget-icon"></div>
                    <dl>
                        <dt>Пн</dt>
                        <dd>09:00-18:00</dd>
                        <dt>Вт</dt>
                        <dd>09:00-18:00</dd>
                        <dt>Ср</dt>
                        <dd>09:00-18:00</dd>
                        <dt>Чт</dt>
                        <dd>09:00-18:00</dd>
                        <dt>Пт</dt>
                        <dd>09:00-18:00</dd>
                        <dt>Перерыв</dt>
                        <dd>13:00-14:00</dd>
                        <dt>Стационар</dt>
                        <dd>круглосуточно</dd>
                        <dt>ВОП(врачи)</dt>
                        <dd>Пн-Пт 08:00-20:00</dd>
                    </dl>
                    <a class="button"><?= Yii::t('app', 'page.schedule') ?></a>
                </section>
                <!--/ work time -->                         
            </div>
        </div>
    </footer>
    <!--/ page footer -->
    <!-- copyrights -->
        <div class="copyrights">Copyrights ©2015: magicoff</div>
    <!--/ copyrights -->
</div>

<!-- tuner -->
<div id="tuner" class="tuner">
    <?php 
        foreach(Yii::$app->params['languages'] as $key => $language){
            echo ' <img class="language '.$key.'-language" src="img/languages/'.$key.'.png" id="'.$key.'"></img>';
            // echo '<span class="language" id="'.$key.'" name="'.$this->context->route.'">'.$language.' | </span>';
        }
    ?>
</div>
<!--/ tuner -->

<?php $this->endBody() ?>

</body>
</html>
<?php $this->endPage() ?>
