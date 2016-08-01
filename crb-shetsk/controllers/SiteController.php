<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Cookie;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use yii\helpers\VarDumper;
use app\models\Users;
use app\models\News;
use yii\data\Pagination;

class SiteController extends Controller
{
    public function behaviors()
    {
        return [
            // 'access' => [
            //     'class' => AccessControl::className(),
            //     'rules' => [
            //         [
            //             'actions' => ['login', 'error', 'language'],
            //             'allow' => true
            //         ],
            //         [
            //             'actions' => ['logout', 'index', 'set-cookie', 'show-cookie'],
            //             'allow' => true,
            //             'roles' => ['@'],
            //         ],
            //     ],
            // ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    //'logout' => ['post'],
                ],
            ],
        ];
    }

    public function init(){
        if(Yii::$app->getRequest()->getCookies()->getValue('lang') != null){
            Yii::$app->language = Yii::$app->getRequest()->getCookies()->getValue('lang');
        }
    }

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function actionIndex()
    {
        $users = Users::find()->all();
        return $this->render('index', ['users'=>$users]);
    }

    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    public function actionLanguage()
    {
        if(isset($_POST['lang'])){
            Yii::$app->language = $_POST['lang'];
            $cookie = new Cookie([
                'name' => 'lang',
                'value' => $_POST['lang']
            ]);
            Yii::$app->getResponse()->getCookies()->add($cookie);
        }
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionContact()
    {
        $model = new ContactForm();

        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            if($model->validate()) {
                // Yii::$app->mailer->compose()
                //     ->setFrom('bauyrzhan.mazhikov@gmail.com')
                //     ->setTo('to@domain.com')
                //     ->setSubject('Message subject')
                //     ->setTextBody('Plain text content')
                //     ->setHtmlBody('<b>HTML content</b>')
                //     ->send();

                $value = Yii::$app->mailer->compose()
                ->setFrom([$model->email => $model->name])
                ->setSubject($model->subject)
                ->setHtmlBody($model->body)
                ->send();
            }

            //return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    public function actionAbout()
    {
        return $this->render('about');
    }

    public function actionNews()
    {

        $query = News::find();
        $countQuery = clone $query;
        $pages = new Pagination(['totalCount' => $countQuery->count()]);
        $news = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();

        return $this->render('news', [
             'news' => $news,
             'pages' => $pages,
        ]);
    }

    public function actionStateSymbols()
    {
        return $this->render('state-symbols');
    }
}
