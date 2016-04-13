<?php
namespace frontend\controllers;

use Yii;
use common\models\LoginForm;
//use frontend\models\SignForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use frontend\models\SearchForm;
use frontend\models\Image;

use yii\web\Response;
use yii\widgets\ActiveForm;

use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;


/**
 * Site controller
 */
class SiteController extends Controller
{
   
/**
     * @inheritdoc
    
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['get'],
                ],
            ],
        ];
    }
     */
    /**
     * @inheritdoc
     */
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

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
	
	/**
     * Displays contact page.
     *
     * @return mixed
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
                Yii::$app->session->setFlash('success', '
                    Благодарим Вас за обращение к нам. Мы ответим вам как можно скорее.');
            } else {
                Yii::$app->session->setFlash('error', 'Произошла ошибка при отправке сообщения.');
            }

            return $this->refresh();
        } else {
            return $this->render('contact', [
                'model' => $model,
            ]);
        }
    }
	
	
        		
	public function actionRegister(){

        $model = new SignupForm();

        if($model->load(Yii::$app->request->post()) && $model->signup()){

            Yii::$app->session->setFlash('success', 'Пользователь зарегестрирован');
                         
        }

        return $this->render("register",['model' => $model]);
    }
    
    /**
     * Logs in a user.
     *
     * @return mixed
     */
    public function actionLogin()
    {
              
      
        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
        
       
    }
    
    /**
     * Logs out the current user.
     *
     * @return mixed
     */
   
public function actionLogout(){

        Yii::$app->user->logout();
        return $this->goHome();
    }

	
	
/**
     * Search.
     *
     * @return mixed
     */
     public function actionSearch() {
               
        return $this->render("search", ['model' => $model]);
                
     }	
	
	
}
