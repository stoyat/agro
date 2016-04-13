<?php
/**
 * Created by PhpStorm.
 * User: Evgeniy
 * Date: 27.03.2016
 * Time: 12:02
 */
namespace frontend\component;

use yii\base\Component;

class Common extends Component {

   public function sendMail($subject,$text,$emailFrom='optimus58@mail.ru',$nameFrom='Advert'){
        if(\Yii::$app->mail->compose()
            ->setFrom(['yii2.school@yandex.ru' => 'Advert'])
            ->setTo([$emailFrom => $nameFrom])
            ->setSubject($subject)
            ->setHtmlBody($text)
            ->send()){
            $this->trigger(self::EVENT_NOTIFY);
            return true;
        }
    }

}

