<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = Yii::t('app', 'page.contact.location');
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
                            Благодарим Вас за обращение к нам. Мы ответим вам как можно скорее.
                        </div>

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
                                <?= Html::submitButton('Отправить', ['class' => 'button', 'name' => 'contact-button']) ?>
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
                        <dt class="opened">Поликлиники</dt>
                        <dd>
                            <ul>
                                <li><i class="fa fa-hospital-o"></i>Районная поликлиника в составе ЦРБ</li>
                                <li><i class="fa fa-map-marker"></i>с.Аксу-Аюлы ул. Жапакова 23</li>
                                <li><i class="fa fa-phone"></i>21145, 21357</li>
                            </ul>
                            <ul class="contact-divider"></ul>
                            <ul>
                                <li><i class="fa fa-hospital-o"></i>Поликлиника сельской больницы п. Агадырь</li>
                                <li><i class="fa fa-map-marker"></i>п. Агадырь ул.Абая 17</li>
                                <li><i class="fa fa-phone"></i>927423</li>
                            </ul>
                        </dd>
                        <dt>Больницы</dt>
                        <dd>
                            <ul>
                                <li><i class="fa fa-hospital-o"></i>Центральная районная больница</li>
                                <li><i class="fa fa-map-marker"></i>с.Аксу-Аюлы ул. Жапакова 23</li>
                                <li><i class="fa fa-phone"></i>21145, 21357</li>
                            </ul>
                            <ul class="contact-divider"></ul>
                            <ul>
                                <li><i class="fa fa-hospital-o"></i>Сельская больница п. Агадырь</li>
                                <li><i class="fa fa-map-marker"></i>п. Агадырь ул.Абая 17</li>
                                <li><i class="fa fa-phone"></i>927423</li>
                            </ul>
                        </dd>
                        <dt>Врачебные амбулатории</dt>
                        <dd>
                            <ul>
                                <li><i class="fa fa-hospital-o"></i>Врачебная амбулатория Акжал</li>
                                <li><i class="fa fa-map-marker"></i>п.Акжал ул. Микрорайон 7А</li>
                                <li><i class="fa fa-phone"></i>37103</li>
                            </ul>
                            <ul class="contact-divider"></ul>
                            <ul>
                                <li><i class="fa fa-hospital-o"></i>Врачебная амбулатория «Актобе»</li>
                                <li><i class="fa fa-map-marker"></i>п.Акшатау ул. С.Сейфуллина 1</li>
                                <li><i class="fa fa-phone"></i>924562</li>
                            </ul>
                            <ul class="contact-divider"></ul>
                            <ul>
                                <li><i class="fa fa-hospital-o"></i>Врачебная амбулатория  Бурма</li>
                                <li><i class="fa fa-map-marker"></i>п. Бурма ул Центральная 13</li>
                                <li><i class="fa fa-phone"></i>3435313</li>
                            </ul>
                            <ul class="contact-divider"></ul>
                            <ul>
                                <li><i class="fa fa-hospital-o"></i>Врачебная амбулатория Жарык</li>
                                <li><i class="fa fa-map-marker"></i>п.Жарык ул.С.Сейфуллина 23</li>
                                <li><i class="fa fa-phone"></i>3424395</li>
                            </ul>
                            <ul class="contact-divider"></ul>
                            <ul>
                                <li><i class="fa fa-hospital-o"></i>Врачебная амбулатория Коктенколь</li>
                                <li><i class="fa fa-phone"></i>87103326271</li>
                            </ul>
                            <ul class="contact-divider"></ul>
                            <ul>
                                <li><i class="fa fa-hospital-o"></i>Врачебная амбулатория Красная поляна Врачебная амбулатория Мойынты</li>
                                <li><i class="fa fa-map-marker"></i>п.Красная Поляна ул Набережная 9 п.Мойынты Таныбай Батыр 27</li>
                                <li><i class="fa fa-phone"></i>87105953340, 961055</li>
                            </ul>
                            <ul class="contact-divider"></ul>
                            <ul>
                                <li><i class="fa fa-hospital-o"></i>Врачебная амбулатория Нураталды</li>
                                <li><i class="fa fa-map-marker"></i>п.Нураталды ул. Молдагулова 10</li>
                                <li><i class="fa fa-phone"></i>50772</li>
                            </ul>
                            <ul class="contact-divider"></ul>
                            <ul>
                                <li><i class="fa fa-hospital-o"></i>Врачебная амбулатория Успен</li>
                                <li><i class="fa fa-phone"></i>87104238107</li>
                            </ul>
                        </dd>
                        <dt>ФАПы</dt>
                        <dd>
                            <ul>
                                <li><i class="fa fa-hospital-o"></i>Фельдшерской – акушерский пункт Акой</li>
                            </ul>
                            <ul class="contact-divider"></ul>
                            <ul>
                                <li><i class="fa fa-hospital-o"></i>Фельдшерской – акушерский пункт Батык</li>
                            </ul>
                            <ul class="contact-divider"></ul>
                            <ul>
                                <li><i class="fa fa-hospital-o"></i>Фельдшерской – акушерский пункт Босага</li>
                            </ul>
                            <ul class="contact-divider"></ul>
                            <ul>
                                <li><i class="fa fa-hospital-o"></i>Фельдшерской – акушерский пункт Жумыскер</li>
                            </ul>
                            <ul class="contact-divider"></ul>
                            <ul>
                                <li><i class="fa fa-hospital-o"></i>Фельдшерской – акушерский пункт Кеншокы</li>
                            </ul>
                            <ul class="contact-divider"></ul>
                            <ul>
                                <li><i class="fa fa-hospital-o"></i>Фельдшерской – акушерский пункт Киик</li>
                            </ul>
                            <ul class="contact-divider"></ul>
                            <ul>
                                <li><i class="fa fa-hospital-o"></i>Фельдшерской – акушерский пункт Н.Кайракты</li>
                            </ul>
                            <ul class="contact-divider"></ul>
                            <ul>
                                <li><i class="fa fa-hospital-o"></i>Фельдшерской – акушерский пункт Талды</li>
                            </ul>
                            <ul class="contact-divider"></ul>
                        </dd>
                        <dt>МП</dt>
                        <dd>
                            <ul>
                                <li><i class="fa fa-hospital-o"></i>Медицинский пункт Акшокы</li>
                            </ul>
                            <ul class="contact-divider"></ul>
                            <ul>
                                <li><i class="fa fa-hospital-o"></i>Медицинский пункт Алихан</li>
                            </ul>
                            <ul class="contact-divider"></ul>
                            <ul>
                                <li><i class="fa fa-hospital-o"></i>Медицинский пункт Дария</li>
                                <li><i class="fa fa-map-marker"></i>п.Дария ул Абая 0</li>
                                <li><i class="fa fa-phone"></i>61204</li>
                            </ul>
                            <ul class="contact-divider"></ul>
                            <ul>
                                <li><i class="fa fa-hospital-o"></i>Медицинский пункт Кызылгой</li>
                                <li><i class="fa fa-map-marker"></i>Бейбитшилик  61/2</li>
                            </ul>
                            <ul class="contact-divider"></ul>
                            <ul>
                                <li><i class="fa fa-hospital-o"></i>Медицинский пункт Акшатау</li>
                            </ul>
                            <ul class="contact-divider"></ul>
                            <ul>
                                <li><i class="fa fa-hospital-o"></i>Медицинский пункт Унирек</li>
                            </ul>
                            <ul class="contact-divider"></ul>
                            <ul>
                                <li><i class="fa fa-hospital-o"></i>Медицинский пункт Карабулак</li>
                            </ul>
                            <ul class="contact-divider"></ul>
                            <ul>
                                <li><i class="fa fa-hospital-o"></i>Медицинский пункт Ортау</li>
                            </ul>
                            <ul class="contact-divider"></ul>
                            <ul>
                                <li><i class="fa fa-hospital-o"></i>Медицинский пункт Мынбаева</li>
                            </ul>
                            <ul class="contact-divider"></ul>
                            <ul>
                                <li><i class="fa fa-hospital-o"></i>Медицинский пункт Еркиндик</li>
                            </ul>
                            <ul class="contact-divider"></ul>
                            <ul>
                                <li><i class="fa fa-hospital-o"></i>Медицинский пункт Аксу</li>
                            </ul>
                            <ul class="contact-divider"></ul>
                            <ul>
                                <li><i class="fa fa-hospital-o"></i>Медицинский пункт Енбекшил</li>
                            </ul>
                            <ul class="contact-divider"></ul>
                            <ul>
                                <li><i class="fa fa-hospital-o"></i>Медицинский пункт Актобе</li>
                            </ul>
                            <ul class="contact-divider"></ul>
                            <ul>
                                <li><i class="fa fa-hospital-o"></i>Медицинский пункт Аккияк</li>
                            </ul>
                            <ul class="contact-divider"></ul>
                            <ul>
                                <li><i class="fa fa-hospital-o"></i>Медицинский пункт Тумсык</li>
                            </ul>
                            <ul class="contact-divider"></ul>
                            <ul>
                                <li><i class="fa fa-hospital-o"></i>Медицинский пункт Кармыс</li>
                            </ul>
                            <ul class="contact-divider"></ul>
                            <ul>
                                <li><i class="fa fa-hospital-o"></i>Медицинский пункт Аксу</li>
                            </ul>
                            <ul class="contact-divider"></ul>
                            <ul>
                                <li><i class="fa fa-hospital-o"></i>Медицинский пункт Шопа</li>
                            </ul>
                            <ul class="contact-divider"></ul>
                            <ul>
                                <li><i class="fa fa-hospital-o"></i>Медицинский пункт Берекет</li>
                            </ul>
                            <ul class="contact-divider"></ul>
                            <ul>
                                <li><i class="fa fa-hospital-o"></i>Медицинский пункт Жана Журт</li>
                            </ul>
                            <ul class="contact-divider"></ul>
                            <ul>
                                <li><i class="fa fa-hospital-o"></i>Медицинский пункт Мухтар</li>
                            </ul>
                            <ul class="contact-divider"></ul>
                            <ul>
                                <li><i class="fa fa-hospital-o"></i>Медицинский пункт Пикет</li>
                            </ul>
                            <ul class="contact-divider"></ul>
                            <ul>
                                <li><i class="fa fa-hospital-o"></i>Медицинский пункт Карамурын</li>
                            </ul>
                            <ul class="contact-divider"></ul>
                            <ul>
                                <li><i class="fa fa-hospital-o"></i>Медицинский пункт Куттыбай</li>
                            </ul>
                            <ul class="contact-divider"></ul>
                            <ul>
                                <li><i class="fa fa-hospital-o"></i>Медицинский пункт Айгыржал</li>
                            </ul>
                            <ul class="contact-divider"></ul>
                            <ul>
                                <li><i class="fa fa-hospital-o"></i>Медицинский пункт Айса</li>
                            </ul>
                            <ul class="contact-divider"></ul>
                            <ul>
                                <li><i class="fa fa-hospital-o"></i>Медицинский пункт Кызыл ту</li>
                            </ul>
                            <ul class="contact-divider"></ul>
                            <ul>
                                <li><i class="fa fa-hospital-o"></i>Медицинский пункт Карасаз</li>
                            </ul>
                            <ul class="contact-divider"></ul>
                            <ul>
                                <li><i class="fa fa-hospital-o"></i>Медицинский пункт Верхний Кайракты</li>
                            </ul>
                            <ul class="contact-divider"></ul>
                            <ul>
                                <li><i class="fa fa-hospital-o"></i>Медицинский пункт Аксарлы</li>
                            </ul>
                            <ul class="contact-divider"></ul>
                            <ul>
                                <li><i class="fa fa-hospital-o"></i>Медицинский пункт Жыланды</li>
                            </ul>
                            <ul class="contact-divider"></ul>
                            <ul>
                                <li><i class="fa fa-hospital-o"></i>Медицинский пункт Целиный</li>
                            </ul>
                            <ul class="contact-divider"></ul>
                            <ul>
                                <li><i class="fa fa-hospital-o"></i>Медицинский пункт Ески орта</li>
                            </ul>
                            <ul class="contact-divider"></ul>
                            <ul>
                                <li><i class="fa fa-hospital-o"></i>Медицинский пункт Сулу Мадине</li>
                            </ul>
                            <ul class="contact-divider"></ul>
                            <ul>
                                <li><i class="fa fa-hospital-o"></i>Медицинский пункт Акбауыр</li>
                            </ul>
                            <ul class="contact-divider"></ul>
                            <ul>
                                <li><i class="fa fa-hospital-o"></i>Медицинский пункт Каргалы</li>
                            </ul>
                            <ul class="contact-divider"></ul>
                            <ul>
                                <li><i class="fa fa-hospital-o"></i>Медицинский пункт Кайракты</li>
                            </ul>
                            <ul class="contact-divider"></ul>
                            <ul>
                                <li><i class="fa fa-hospital-o"></i>Медицинский пункт Акшагыл</li>
                            </ul>
                            <ul class="contact-divider"></ul>
                        </dd>
                        <dt>СЭС</dt>
                        <dd>
                            <ul>
                                <li><i class="fa fa-hospital-o"></i>Районное Управления по защите прав потребителей</li>
                                <li><i class="fa fa-map-marker"></i>п. Агадырь ул. Абая</li>
                                <li><i class="fa fa-phone"></i>928323</li>
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
