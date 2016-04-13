<?php
namespace frontend\models;

use common\models\User;
use yii\base\Model;
use Yii;

/**
 * Signup form
 */
class SignupForm extends Model
{
    public $username;
    public $inn;
    public $ogrn;
    public $how;
    public $fact_adress;
    public $boss;
    public $phonenum;
    public $website;
    public $email;
    public $password;
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['username', 'filter', 'filter' => 'trim'],
            ['username', 'required','message'=>'Поле не может быть пустым'],
            ['username', 'unique', 'targetClass' => '\common\models\User', 'message' => 'Такой пользователь уже зареестрирован.'],
            ['username', 'string', 'min' => 2, 'max' => 255],

            ['inn', 'filter', 'filter' => 'trim'],
            ['inn', 'required','message'=>'Поле не может быть пустым'],

            ['ogrn', 'filter', 'filter' => 'trim'],
            ['ogrn', 'required','message'=>'Поле не может быть пустым'],

            ['how', 'filter', 'filter' => 'trim'],
            ['how', 'required','message'=>'Поле не может быть пустым'],

            ['inn', 'filter', 'filter' => 'trim'],
            ['inn', 'required','message'=>'Поле не может быть пустым'],

            ['fact_adress', 'filter', 'filter' => 'trim'],
            ['fact_adress', 'required','message'=>'Поле не может быть пустым'],

            ['boss', 'filter', 'filter' => 'trim'],
            ['boss', 'required','message'=>'Поле не может быть пустым'],

            ['phonenum', 'filter', 'filter' => 'trim'],
            ['phonenum', 'required','message'=>'Поле не может быть пустым'],
            ['phonenum', 'match', 'pattern' => '/^(\+?\d+)?\s*(\(\d+\))?[\s-]*([\d-]*)$/','message'=>'Не корректный номер'],


            ['website', 'filter', 'filter' => 'trim'],
            ['website', 'match', 'pattern' => '\'(?:(?:ht|f)tps?://)?(?:[\\-\\w]+:[\\-\\w]+@)?(?:[0-9a-z][\\-0-9a-z]*[0-9a-z]\\.)+[a-z]{2,6}(?::\\d{1,5})?(?:[?/\\\\#][?!^$.(){}:|=[\\]+\\-/\\\\*;&~#@,%\\wА-Яа-я]*)?\'','message'=>'Не корректный адресс'],

            ['email', 'filter', 'filter' => 'trim'],
            ['email', 'required','message'=>'Поле не может быть пустым'],
            ['email', 'email','message'=>'Вы ввели не корректный email'],
            ['email', 'string', 'max' => 255],
            ['email', 'unique', 'targetClass' => '\common\models\User', 'message' => 'Такой email уже используется.'],

            ['password', 'required','message'=>'Поле не может быть пустым'],
            ['password', 'string', 'min' => 6],
        ];
    }

    

    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function signup()
    {
        if ($this->validate()) {
            $user = new User();
            $user->username = $this->username;
            $user->inn = $this->inn;
            $user->ogrn = $this->ogrn;
            $user->how = $this->how;
            $user->fact_adress = $this->fact_adress;
            $user->boss = $this->boss;
            $user->phonenum = $this->phonenum;
            $user->website = $this->website;
            $user->email = $this->email;
            $user->setPassword($this->password);
            $user->generateAuthKey();
            if ($user->save()) {
                return $user;
            }
        }

        return null;
    }
}
