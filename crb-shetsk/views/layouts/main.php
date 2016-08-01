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
                <a href="index-2.html"><img src="img/blue/logo.png" width="190" height="50" alt="Clinico"></a>
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
                        ['class' => ($this->context->route == 'site/news')?'active':'']) 
                    ?>
                </li>
                <li>
                    <?= Html::a(
                        '<i class="fa fa-plus"></i>'.Yii::t('app', 'menu.page.about'), 
                        [''], 
                        ['class' => ($this->context->route == 'site/about')?'active inactiveLink':'inactiveLink']) 
                    ?>
                    <ul>
                        <li><a href="widgets.html">Various widgets</a></li>
                        <li>
                            <a href="#">Huge number of pages</a>
                            <ul>
                                <li><a href="about-us.html">About Us</a></li>
                                <li><a href="locations.html">Locations</a></li>
                                <li><a href="doctors.html">Our Doctors</a></li>
                                <li><a href="full-width-page.html">Full-Width Page</a></li>
                                <li><a href="page-with-sidebar.html">Page with Sidebar</a></li>
                                <li><a href="page-with-double-sidebar.html">Double Sidebars Page</a></li>
                                <li><a href="page-404.html">404 Page</a></li>
                                <li><a href="page-pricing-table.html">Pricing tables</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="feature-unlimited-color.html">Unlimited Color Variations</a>
                        </li>
                        <li><a href="responsive_and_retina_ready.html">Retina Ready & Responsive</a></li>
                        <li><a href="features-accordion.html">Styled Content Items</a></li>
                    </ul>
                </li>
                <li>
                    <?= Html::a(
                        '<i class="fa fa-plus"></i>'.Yii::t('app', 'menu.page.services'), 
                        ['/site/services'], 
                        ['class' => ($this->context->route == 'site/services')?'active':'']) 
                    ?>
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
        <!--/ main nav -->
        
        <!-- mobile nav -->
        <nav id="mobile-main-nav" class="mobile-main-nav">
            <i class="fa fa-bars"></i><a href="#" class="opener">Navigation</a>
            <ul>
                <li>
                    <i></i><a href="index-2.html" class="active">Home</a>
                    <ul>
                        <li>
                            <i></i><a href="index-2.html">Medical Style</a>
                            <ul>
                                <li class="text">
                                    <h2>Main Campus</h2>
                                    <hr>
                                    <p>123 Fashion Avenue<br>New York, MO 265984</p>
                                    <hr>
                                    <p>203-284-2818<br>clinico@domain.com</p>
                                    <a href="#" class="more fa fa-angle-double-right"></a>
                                </li>
                            </ul>
                        </li>
                        <li><a href="home-news.html">News Style</a></li>
                        <li><a href="wellness-home.html">Wellness Style</a></li>
                        <li><a href="home-one-page.html">Home Alternative</a></li>
                    </ul>
                </li>
                <li>
                    <a href="services.html">Servives</a>
                </li>
                <li>
                    <i></i><a href="timetable-week.html">Timetable</a>
                    <ul>
                        <li><a href="timetable-month.html">Month View</a></li>
                        <li><a href="timetable-week.html">Week View</a></li>
                        <li><a href="timetable-list.html">List View</a></li>
                    </ul>
                </li>
                <li>
                    <i></i><a href="news-default.html">News</a>
                    <ul>
                        <li><a href="news-four-columns.html">Four columns</a></li>
                        <li><a href="news-three-columns.html">Three columns</a></li>
                        <li><a href="news-two-columns.html">Two columns</a></li>
                        <li><a href="news-full-width.html">Full width</a></li>
                        <li><a href="news-blog-post.html">Blog post</a></li>
                    </ul>
                </li>
                <li>
                    <i></i><a href="index-2.html">Features</a>
                    <ul>
                        <li><a href="widgets.html">Various widgets</a></li>
                        <li>
                            <i></i><a href="#">Huge number of pages</a>
                            <ul>
                                <li><a href="about-us.html">About Us</a></li>
                                <li><a href="locations.html">Locations</a></li>
                                <li><a href="doctors.html">Our Doctors</a></li>
                                <li><a href="full-width-page.html">Full-Width Page</a></li>
                                <li><a href="page-with-sidebar.html">Page with Sidebar</a></li>
                                <li><a href="page-with-double-sidebar.html">Double Sidebars Page</a></li>
                                <li><a href="page-404.html">404 Page</a></li>
                                <li><a href="page-pricing-table.html">Pricing tables</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="feature-unlimited-color.html">Unlimited Color Variations</a>
                        </li>
                        <li><a href="responsive_and_retina_ready.html">Retina Ready & Responsive</a></li>
                        <li><a href="features-accordion.html">Styled Content Items</a></li>
                    </ul>
                </li>
                <li>
                    <i></i><a href="photo-gallery.html">Photo Tour</a>
                    <ul>
                        <li>
                            <i></i><a href="photo-four-filter.html">Four columns</a>
                            <ul>
                                <li><a href="photo-four-filter.html">With filter</a></li>
                                <li><a href="photo-four.html">Without filter</a></li>
                            </ul>
                        </li>
                        <li>
                            <i></i><a href="photo-three-filter.html">Three columns</a>
                            <ul>
                                <li><a href="photo-three-filter.html">With filter</a></li>
                                <li><a href="photo-three.html">Without filter</a></li>
                            </ul>
                        </li>
                        <li>
                            <i></i><a href="photo-two-filter.html">Two columns</a>
                            <ul>
                                <li><a href="photo-two-filter.html">With filter</a></li>
                                <li><a href="photo-two.html">Without filter</a></li>
                            </ul>
                        </li>
                        <li><a href="photo-one.html">One column</a></li>
                        <li><a href="photo-single.html">Single item</a></li>
                    </ul>
                </li>
                <li>
                    <a href="contacts.html">Contacts</a>
                </li>
            </ul>
        </nav>
        <!--/ mobile nav -->

        <a href="#" class="right-link"><i class="fa fa-angle-double-up"></i></a>
    </header>
    <!--/ page header -->
    
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
                    <div class="widget-title">Clinico</div>
                    <!-- <ul>
                        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sollicitudin justo non odio molestie, sed venenatis elit, consectetur adipiscing.</li>
                        <li>Donec quis condimentum leo, et congue dolor. Integer auctor facilisis odio. Duis vitae nibh tristique, consectetur lacus a, facilisis rutrum enim.</li>
                        <li>Cras fermentum interdum dapibus. Maecenas imperdiet, consectetur adipiscing magna nec odio cursus, vitae consequat ante.</li>
                    </ul> -->

                    <?php 
                        echo yii\bootstrap\Carousel::widget([
                            'items' => [
                                // the item contains only the image
                                '<img src="/state-symbols/flag.png"/>',
                                // equivalent to the above
                                ['content' => '<img src="/state-symbols/flag.png"/>'],
                                // the item contains both the image and the caption
                                [
                                    'content' => '<img src=""/>',
                                    'caption' => '<h4>This is title</h4><p>This is the caption text</p>'
                                ],
                            ],
                            'options' => [
                               // 'style' => 'width:474px;' // Задаем ширину контейнера
                            ],
                            'showIndicators' => false
                        ]);
                    ?>
                </section>
                <!--/ last news -->
            </div>
            
            <div class="grid-col grid-col-3">
                <!-- location -->
                <section class="widget-alt location">
                    <div class="widget-icon"></div>
                    <div class="widget-title">Location</div>
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
                    <div class="widget-title">Recent Posts</div>
                    <ul>
                        <li>
                            <a href="#"><img src="pic/post/1.png" width="80" height="80" alt=""></a>
                            <p><a href="#">New study links lutein with eye health benefits, consectetur adipiscing</a><br>5 months ago</p>
                        </li>
                        <li>
                            <a href="#"><img src="pic/post/2.png" width="80" height="80" alt=""></a>
                            <p><a href="#">Pets may reduce risk of heart disease, et congue dolor heart</a><br>8 months ago</p>
                        </li>
                        <li>
                            <a href="#"><img src="pic/post/3.png" width="80" height="80" alt=""></a>
                            <p><a href="#">Discoveries offer a new explanation for diabetes, consectetur</a><br>10 months ago</p>
                        </li>
                    </ul>
                </section>
                <!--/ last news -->                     
            </div>
            
            <div class="grid-col grid-col-3">
                <!-- work time -->
                <section class="widget-alt work-time">
                    <div class="widget-icon"></div>
                    <dl>
                        <dt>Mon</dt>
                        <dd>08:00 am - 12:00 pm</dd>
                        <dt>Tue</dt>
                        <dd>01:00 am - 05:00 pm</dd>
                        <dt>Wed</dt>
                        <dd>Free day</dd>
                        <dt>Thu</dt>
                        <dd>08:00 am - 12:00 pm</dd>
                        <dt>Fri</dt>
                        <dd>08:00 am - 12:00 pm</dd>
                        <dt>Sat</dt>
                        <dd>08:00 am - 12:00 pm</dd>
                        <dt>Sun</dt>
                        <dd>Free day</dd>
                    </dl>
                    <a href="#" class="button">Make an Appointment</a>
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
            echo ' <img class="language '.$key.'-language" src="img/languages/'.$key.'.png" id="'.$key.'"></i>';
            // echo '<span class="language" id="'.$key.'" name="'.$this->context->route.'">'.$language.' | </span>';
        }
    ?>
</div>
<!--/ tuner -->

<?php $this->endBody() ?>

</body>
</html>
<?php $this->endPage() ?>
