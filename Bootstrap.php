<?php
/**
 * Created by PhpStorm.
 * User: ruslan
 * Date: 10/11/15
 * Time: 7:12 PM
 */
namespace rlabuta\mobiledetect;

class Bootstrap implements \yii\base\BootstrapInterface
{
    /**
     * @param \yii\base\Application $app
     */
    public function bootstrap($app)
    {
        $app->setModule('mobiledetect', [
            'class' => 'rlabuta\mobiledetect\MobileDetect'
        ]);
        $app->getModule('mobiledetect');
    }

}