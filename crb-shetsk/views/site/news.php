<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
use yii\widgets\LinkPager;

$this->title = Yii::t('app', 'menu.page.news');
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
            <div class="widget-title">Всего отзывов <?= $total ?></div>                
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
                
            </div>
        </section>
        <!--/ photo tour -->
    </div>
</main>
<!--/ page content -->
