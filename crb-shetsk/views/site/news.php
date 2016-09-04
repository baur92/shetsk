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
        <h1><?= Yii::t('app', 'menu.page.news')?></h1>        
    </div>
</section>

<main class="page-content"> 
    <div class="grid-row">  
        <?= LinkPager::widget([
                        'pagination' => $pages,
                    ]);?>             
        <!-- news -->
        <section id="news" class="widget news news-1">                    
            <div>
                <?php 
                    foreach($news as $new){
                        if (Yii::$app->language == 'ru'){
                            echo '<div class="item">
                                <h3 class="widget-title"><a href="#">'.$new->header.'</a></h3>
                                <div class="date">'.$new->create_date_.'</div>
                                <div class="wrapper">
                                    <div class="pic">
                                        <img src="'.$new->image.'">
                                        <div class="links">
                                            <ul>
                                                <li><a href="#" class="fa fa-plus"></a></li>                                        
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <p>'.$new->description.'</p>
                                </div>';
                        } else {
                            echo '<div class="item">
                                <h3 class="widget-title"><a href="#">'.$new->header_kk_.'</a></h3>
                                <div class="date">'.$new->create_date_.'</div>
                                <div class="wrapper">
                                    <div class="pic">
                                        <img src="'.$new->image.'">
                                        <div class="links">
                                            <ul>
                                                <li><a href="#" class="fa fa-plus"></a></li>                                        
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <p>'.$new->description_kk_.'</p>
                                </div>';
                        }
                    }
                ?>
                
                <!-- <div class="item">
                    <h3 class="widget-title"><a href="#">Commodo purus sit amet</a></h3>
                    <div class="date">18 JAN 2014<i class="fa fa-comment"><span>4</span></i></div>
                    <div class="wrapper">
                        <div class="video">
                            <iframe src="http://player.vimeo.com/video/44510157?color=ffffff" allowfullscreen></iframe>
                        </div>
                    </div>
                    <p>Phasellus eros nunc, auctor quis elit eu, adipiscing malesuada ligula. Praesent nisl sem, mollis ac gravida id, porttitor ultricies turpis. Praesent bibendum massa mauris, sed porta nunc mattis nec. Vivamus non metus eget nisl adipiscing congue.</p>
                    <p>Aliquam euismod erat libero, eu condimentum nisl hendrerit vel. Ut sit amet congue lectus. Integer porttitor diam eget porta accumsan. Sed placerat tristique urna in egestas. Donec ultricies enim et fermentum imperdiet. Integer eu est ut purus molestie aliquam. Donec dapibus nec dolor et lacinia. Donec eros libero, dignissim id erat ut, rutrum tempus lorem. Quisque eu dui ante. Cras aliquet tellus a urna tempor vulputate. Curabitur in enim quis nibh scelerisque mattis ut eget tortor. Duis ultricies quam sit amet justo rutrum, id vehicula dui bibendum. Maecenas malesuada nisl justo, vitae consectetur quam commodo ac.</p>
                    <div class="cats">Posted in: <a href="#">Dental Clinic</a>, <a href="#">General</a>, <a href="#">News</a><a href="#" class="more fa fa-long-arrow-right"></a></div>
                </div>
                
                <div class="item">
                    <h3 class="widget-title"><a href="#">Quisque venenatis mi at</a></h3>
                    <div class="date">15 JAN 2014<i class="fa fa-comment"><span>1</span></i></div>
                    <p>Aliquam venenatis consectetur sem, eget luctus eros sodales et. Vivamus non metus eget nisl adipiscing congue. Donec placerat, ipsum fringilla cursus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec lectus orci. Nunc suscipit quis mauris non pellentesque. Cras at JANue dui. Vestibulum mollis cursus orci.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec lectus orci. Nunc suscipit quis mauris non pellentesque. Cras at JANue dui. Vestibulum mollis cursus orci ut laoreet. Duis accumsan accumsan adipiscing. Mauris tincidunt a lacus nec pretium.</p>
                    <div class="cats">Posted in: <a href="#">Dental Clinic</a>, <a href="#">General</a>, <a href="#">News</a><a href="#" class="more fa fa-long-arrow-right"></a></div>
                </div>

                <div class="item">
                    <h3 class="widget-title"><a href="#">Quisque venenatis mi</a></h3>
                    <div class="date">11 JAN 2014<i class="fa fa-comment"><span>3</span></i></div>
                    <div class="wrapper">
                        <div class="pic">
                            <img src="pic/photo-tour-2.jpg" alt="Quisque venenatis mi">
                            <div class="links">
                                <ul>
                                    <li><a href="#" class="fa fa-plus"></a></li>                                        
                                </ul>
                            </div>
                        </div>
                    </div>
                    <p><b>Lorem ipsum dolor sit amet</b>, consectetur adipiscing elit. Suspendisse tincidunt vel est quis ultricies. Donec sit amet orci elementum, auctor ipsum ac, mattis tellus. Aenean nulla dui, dignissim id libero eu, consequat auctor tortor. Morbi pulvinar arcu elit, sed placerat risus scelerisque sed. Curabitur et porttitor ipsum, a fringilla elit. Sed et dolor eget ante consectetur fermentum. Sed purus nunc, posuere sit amet nisi ut, sagittis mollis tellus. Quisque sit amet nisl est. Ut fringilla mattis eleifend. Praesent sollicitudin leo et velit faucibus malesuada. Donec ut nunc laoreet justo facilisis venenatis. Donec in hendrerit mi. Integer varius tincidunt elementum. Nulla aliquam leo vitae mauris consectetur, eu condimentum risus auctor. Nullam eu rhoncus risus.</p>

                    <p><b>Ut rhoncus, quam nec ultricies tempor</b>, erat sem tincidunt metus, non vestibulum nulla arcu nec velit. Cras vitae dolor purus. Donec vel mi bibendum, feugiat lacus in, porttitor diam. Nunc sit amet tortor nunc. Phasellus faucibus convallis nisl eu cursus. Nunc molestie, mauris quis varius elementum, arcu libero imperdiet odio, ac venenatis magna enim ac risus. In mollis eu risus et gravida. Donec nunc ante, dignissim ut quam non, bibendum egestas velit. Quisque lobortis id diam eu porttitor. Suspendisse imperdiet fringilla dignissim. Etiam faucibus sapien sed diam condimentum viverra. Aliquam tincidunt iaculis nunc, in pretium mauris porta varius. Integer aliquam volutpat ligula, quis consequat justo placerat vel. Donec erat lorem, pretium pretium sollicitudin et, dignissim a nisl.</p>
                    <div class="cats">Posted in: <a href="#">Dental Clinic</a>, <a href="#">General</a>, <a href="#">News</a><a href="#" class="more fa fa-long-arrow-right"></a></div>
                </div>

                <div class="item">
                    <h3 class="widget-title"><a href="#">Cras gravida tristique odio</a></h3>
                    <div class="date">12 JAN 2014<i class="fa fa-comment"><span>4</span></i></div>
                    <div class="audio">
                        <audio controls preload="none">
                            <source src="audio/californication.html" type="audio/mpeg">
                        </audio>
                    </div>
                    <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aliquam venenatis consectetur sem, eget luctus eros. Sed massa arcu, tincidunt eget JANue at, condimentum feugiat ante. Nullam eleifend aliquam magna.</p>
                    <p>Donec placerat, ipsum fringilla cursus vehicula, velit diam tristique magna. Donec placerat, ipsum fringilla cursus vehicula, velit diam tristique magna, vitae sodales urna ante et lorem. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec lectus orci. </p>
                    <div class="cats">Posted in: <a href="#">Dental Clinic</a>, <a href="#">General</a>, <a href="#">News</a><a href="#" class="more fa fa-long-arrow-right"></a></div>
                </div> -->
                
            </div>
        </section>
        <!--/ photo tour -->
    </div>
</main>
<!--/ page content -->
