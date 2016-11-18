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
use app\models\Comments;
use app\models\Blog;
use yii\db\Query;

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
        Yii::$app->params['users'] = Users::find()->orderBy(['id_' => SORT_ASC])->all();
        Yii::$app->params['news'] = News::find()->limit(3)->orderBy(['id_' => SORT_DESC])->all();

        Yii::$app->params['stat-today'] = (new \yii\db\Query())->select('value_')->from('counter')->where('key_=\'appointments\' and create_date_ = \''.date("d.m.y").'\'')->createCommand()->queryAll();
        if(!Yii::$app->params['stat-today']){
            Yii::$app->db->createCommand()->insert('counter', ['value_' => 0,'key_' => 'appointments','create_date_'=>date("d.m.y"),])->execute();
            $query = (new \yii\db\Query())->select('value_')->from('counter')->where('key_=\'appointments\' and create_date_ = \''.date("d.m.y").'\'');
            $command = $query->createCommand();
            Yii::$app->params['stat-today'] = $command->queryAll();
        }
        $monthBefore = date("d.m.y", strtotime( date( "d.m.y", strtotime( date("d.m.y") ) ) . "-1 month" ) );
        Yii::$app->params['stat-month'] = (new \yii\db\Query())->select('sum(value_)')->from('counter')->where('key_=\'appointments\' and create_date_ <= \''.date("d.m.y").'\' and create_date_ >= \''.$monthBefore.'\'')->createCommand()->queryAll();
        Yii::$app->params['stat-all'] = (new \yii\db\Query())->select('sum(value_)')->from('counter')->where('key_=\'appointments\'')->createCommand()->queryAll();    
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

    public function actionAppointment()
    {
        $query = (new \yii\db\Query())->select('value_')->from('counter')->where('key_=\'appointments\' and create_date_ = \''.date("d.m.y").'\'');
        $command = $query->createCommand();
        $data = $command->queryAll();
        if(!$data){
            Yii::$app->db->createCommand()->insert('counter', ['value_' => 0,'key_' => 'appointments','create_date_'=>date("d.m.y"),])->execute();
            $query = (new \yii\db\Query())->select('value_')->from('counter')->where('key_=\'appointments\' and create_date_ = \''.date("d.m.y").'\'');
            $command = $query->createCommand();
            $data = $command->queryAll();
        }
        Yii::$app->db->createCommand()->update('counter', ['value_' => ++array_values(array_values($data)[0])[0]], 'key_=\'appointments\' and create_date_ = \''.date("d.m.y").'\'')->execute();
        return $this->redirect('https://dmedlkp.ezdravkrg.org/');
    }

    public function actionIndex()
    {
        $users = Users::find()->where(['>', 'id_', 1])->all();
        $directors = Users::find()->where(['=', 'id_', 1])->all();
        return $this->render('index', ['users'=>$users, 'directors'=>$directors]);
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
        }

        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    // start: section About
    public function actionAbout()
    {
        return $this->render('about');
    }

    public function actionAboutStructure()
    {
        return $this->render('about/structure');
    }

    public function actionAboutStaff()
    {
        return $this->render('about/staff');
    }

    public function actionAboutStaffAdministration()
    {
        return $this->render('about/staff/administration');
    }

    public function actionAboutStaffPrecinct()
    {
        return $this->render('about/staff/precinct');
    }

    public function actionAboutStaffStationary()
    {
        return $this->render('about/staff/stationary');
    }

    public function actionAboutRegulation()
    {
        return $this->render('about/regulation');
    }

    public function actionAboutSchedule()
    {
        return $this->render('about/schedule');
    }

    public function actionAboutScheduleDistrict()
    {
        return $this->render('about/schedule/district');
    }

    public function actionAboutScheduleAgadyr()
    {
        return $this->render('about/schedule/agadyr');
    }

    public function actionAboutSupport()
    {
        return $this->render('about/support');
    }
    // end: section About

    // start: section Services
    public function actionServices()
    {
        return $this->render('services');
    }
    public function actionServicesCommon()
    {
        return $this->render('services/common');
    }
    public function actionServicesCommonFree()
    {
        return $this->render('services/common/free');
    }
    public function actionServicesCommonTypes()
    {
        return $this->render('services/common/types');
    }
    public function actionServicesPaid()
    {
        return $this->render('services/paid');
    }
    public function actionServicesPaidRegulation()
    {
        return $this->render('services/paid/regulation');
    }
    public function actionServicesPaidPrice()
    {
        return $this->render('services/paid/price');
    }
    // end: section Services

    public function actionComments(){
        $model = new ContactForm();
        $model->subject = 'Отзыв';
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');
        }

        $query = Comments::find();
        $countQuery = clone $query;
        $total = $countQuery->count();
        $pages = new Pagination(['totalCount' => $total, 'pageSize' => 5]);
        $comments = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->orderBy(['id_' => SORT_DESC])
            ->all();

        return $this->render('comments', [
            'comments' => $comments,
            'pages' => $pages,
            'total' => $total,
            'model' => $model
        ]);
    }

    public function actionAnswers(){
        return $this->render('/site/answers');
    }

    public function actionNews()
    {
        $query = News::find();
        $countQuery = clone $query;
        $total = $countQuery->count();
        $pages = new Pagination(['totalCount' => $countQuery->count(), 'pageSize' => 5]);
        $news = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->orderBy(['id_' => SORT_DESC])
            ->all();

        return $this->render('news', [
             'news' => $news,
             'pages' => $pages,
             'total' => $total
        ]);
    }

    public function actionNewsInfo(){
        return $this->render('/site/news/info');
    }

    public function actionStateSymbols()
    {
        return $this->render('state-symbols');
    }

    public function actionBlog(){
        $model = new ContactForm();
        $model->subject = 'Обращение';
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->db->createCommand()->insert('blog', ['fullname_' => $model->name,'question_' => $model->body,'date_'=>date("d.m.y"),'posted_'=>false])->execute();
            Yii::$app->session->setFlash('contactFormSubmitted');
        }

        $query = Blog::find()->where('posted_=true');
        $countQuery = clone $query;
        $total = $countQuery->count();
        $pages = new Pagination(['totalCount' => $total, 'pageSize' => 5]);

        $comments = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->orderBy(['id_' => SORT_DESC])
            ->all();

        return $this->render('blog', [
            'comments' => $comments,
            'pages' => $pages,
            'total' => $total,
            'model' => $model
        ]);
    }
}
