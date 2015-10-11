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

        $configData = ArrayHelper::merge(
            ['class' => 'rlabuta\mobiledetect\Module'],$app->params['mobiledetect']);
        $app->setModule('mobiledetect',$configData);
        $app->getModule('mobiledetect');
    }

}