<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Contact';
$this->params['breadcrumbs'][] = $this->title;
?>

<section class="page-title">
    <div class="grid-row clearfix">
        <h1><?= Yii::t('app', 'page.contact.location')?></h1>
        
        <!-- <nav class="bread-crumbs">
            <a href="index-2.html">Home</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;
            <a href="news-default.html">News</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;
            <a href="#">Full width</a>
        </nav> -->
    </div>
</section>

<div class="site-contact">
    <!-- page content -->
    <main class="page-content">
        <div class="grid-row">
            <!-- map -->
            <section class="map">
                <!-- <div class="widget-title"><?= Yii::t('app', 'page.contact.location')?></div> -->
                <div id="map" class="google-map"></div>
            </section>
            <!--/ map -->
        </div>
        
        <div class="grid-row">
            <div class="grid-col grid-col-9">
                <!-- feedback -->
                <article class="feedback">
                    <div class="widget-title">Свяжитесь с нами, заполнив форму</div>
                    
                    <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>

                        <div class="alert alert-success">
                            Thank you for contacting us. We will respond to you as soon as possible.
                        </div>

                        <p>
                            Note that if you turn on the Yii debugger, you should be able
                            to view the mail message on the mail panel of the debugger.
                            <?php if (Yii::$app->mailer->useFileTransport): ?>
                                Because the application is in development mode, the email is not sent but saved as
                                a file under <code><?= Yii::getAlias(Yii::$app->mailer->fileTransportPath) ?></code>.
                                Please configure the <code>useFileTransport</code> property of the <code>mail</code>
                                application component to be false to enable email sending.
                            <?php endif; ?>
                        </p>

                    <?php else: ?>

                        <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

                            <?= $form->field($model, 'name')->label('Имя')->textInput() ?>

                            <?= $form->field($model, 'email')->label('Е-мэйл') ?>

                            <?= $form->field($model, 'subject')->label('Тема') ?>

                            <?= $form->field($model, 'body')->label('Текст')->textArea(['rows' => 6]) ?>

                            <?= $form->field($model, 'verifyCode')->label('Проверочный код')->widget(Captcha::className(), [
                                'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                            ]) ?>

                            <div class="form-group">
                                <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                            </div>

                        <?php ActiveForm::end(); ?>    
                    <?php endif; ?>                
                </article>
                <!--/ feedback -->
            </div>
            
            <div class="grid-col grid-col-3">                       
                <!-- contacts -->
                <section class="widget widget-contacts">
                    <div class="widget-title">Контакты</div>
                    <dl>
                        <dt class="opened">Adolescent Gynecology</dt>
                        <dd>
                            <ul>
                                <li><i class="fa fa-map-marker"></i>365 Montauk Avenue</li>
                                <li><i class="fa fa-phone"></i>Call us: 203-284-2818</li>
                                <li><i class="fa fa-envelope"></i>E-mail: clinico@domain.com</li>
                            </ul>
                        </dd>
                        <dt>Breast Cancer Gene (BRCA)</dt>
                        <dd>
                            <ul>
                                <li><i class="fa fa-map-marker"></i>365 Montauk Avenue</li>
                                <li><i class="fa fa-phone"></i>Call us: 203-284-2818</li>
                                <li><i class="fa fa-envelope"></i>E-mail: clinico@domain.com</li>
                            </ul>
                        </dd>
                        <dt>Replacement Therapy</dt>
                        <dd>
                            <ul>
                                <li><i class="fa fa-map-marker"></i>365 Montauk Avenue</li>
                                <li><i class="fa fa-phone"></i>Call us: 203-284-2818</li>
                                <li><i class="fa fa-envelope"></i>E-mail: clinico@domain.com</li>
                            </ul>
                        </dd>
                        <dt>Diagnosis With Precise</dt>
                        <dd>
                            <ul>
                                <li><i class="fa fa-map-marker"></i>365 Montauk Avenue</li>
                                <li><i class="fa fa-phone"></i>Call us: 203-284-2818</li>
                                <li><i class="fa fa-envelope"></i>E-mail: clinico@domain.com</li>
                            </ul>
                        </dd>
                        <dt>STD Screening</dt>
                        <dd>
                            <ul>
                                <li><i class="fa fa-map-marker"></i>365 Montauk Avenue</li>
                                <li><i class="fa fa-phone"></i>Call us: 203-284-2818</li>
                                <li><i class="fa fa-envelope"></i>E-mail: clinico@domain.com</li>
                            </ul>
                        </dd>
                        <dt>Occupational Health</dt>
                        <dd>
                            <ul>
                                <li><i class="fa fa-map-marker"></i>365 Montauk Avenue</li>
                                <li><i class="fa fa-phone"></i>Call us: 203-284-2818</li>
                                <li><i class="fa fa-envelope"></i>E-mail: clinico@domain.com</li>
                            </ul>
                        </dd>
                        <dt>Rhinosinusitis</dt>
                        <dd>
                            <ul>
                                <li><i class="fa fa-map-marker"></i>365 Montauk Avenue</li>
                                <li><i class="fa fa-phone"></i>Call us: 203-284-2818</li>
                                <li><i class="fa fa-envelope"></i>E-mail: clinico@domain.com</li>
                            </ul>
                        </dd>
                    </dl>
                </section>
                <!--/ contacts -->
                
                <!-- follow -->
                <section class="widget widget-follow">
                    <ul>
                        <li><a href="#"><i class="fa fa-rss"></i>150<br>Subscribers</a></li>
                        <li><a href="#"><i class="fa fa-facebook"></i>5560<br>Fans</a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i>2300<br>Followers</a></li>
                    </ul>
                </section>
                <!--/ follow -->
            </div>
        </div>
    </main>
    <!--/ page content -->
</div>
