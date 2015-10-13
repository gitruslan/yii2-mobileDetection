<?php
/**
 * Created by PhpStorm.
 * User: ruslan
 * Date: 10/11/15
 * Time: 7:12 PM
 */
namespace rlabuta\mobiledetect;

use Prophecy\Exception\InvalidArgumentException;
use yii\base\InvalidConfigException;
use yii\helpers\ArrayHelper;

class Bootstrap implements \yii\base\BootstrapInterface
{
    /**
     * @param \yii\base\Application $app
     */
    public function bootstrap($app)
    {
        // Check if we have agreed for mobile auto redirect
        if(!isset($app->params['mobiledetect'])
            || !is_array($app->params['mobiledetect']))
            return;

        // merge parameters
        $configData = ArrayHelper::merge(
            ['class' => 'rlabuta\mobiledetect\MobileDetect'],$app->params['mobiledetect']);

        //Set module and data
        $app->setModule('mobiledetect',$configData);

        //Exec module method init
        $app->getModule('mobiledetect')->init();
    }

}