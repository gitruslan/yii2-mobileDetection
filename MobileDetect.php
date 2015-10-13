<?php
/**
 * Created by PhpStorm.
 * User: ruslan
 * Date: 10/6/15
 * Time: 10:14 PM
 */
namespace rlabuta\mobiledetect;

use Yii;
use yii\base\Component;
use yii\helpers\Url;
use rlabuta\mobiledetect\lib\MobileDetectLibrary;

class MobileDetect extends \yii\base\Module
{

    public $controllerNamespace = 'rlabuta\mobiledetect';
    /**
     * @var Init redirect to mobile version
     * need to specify domain name
     */
    public $autoRedirectToMobile;
    /**
     * @var Init redirect to tablet version
     * need to specify domain name
     */
    public $autoRedirectToTablet;
    /**
     * @var lib\MobileDetectLibrary
     * Object MobileDetectLibrary has main
     * methods for manipulation with mob devices
     */
    private $_mobileDetectLibrary;

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
        $this->_mobileDetectLibrary = new MobileDetectLibrary();

        // Auto-redirect to mobile version
        if ($this->autoRedirectToMobile)
        {
            $this->redirectToMobile();
        }
        // Auto-redirect to tablet version
        if ($this->autoRedirectToTablet)
        {
            $this->redirectToTablet();
        }
    }

    /**
     * Redirect to mobile version to
     * specify url in parameter [$autoRedirectToMobile] or $url
     */
    public function redirectToMobile($url = '')
    {
        // Prevent loop page redirect
        if ((URL::base(true) === $url)
            || (URL::base(true) === $this->autoRedirectToMobile))
        {
           return;
        }
        // Detect mobile device
        if ($this->_mobileDetectLibrary->isMobile()) {
            $url = (!empty($url)) ? $url : $this->autoRedirectToMobile;
            \Yii::$app->response->redirect($url.\Yii::$app->request->url);
        }
    }

    /**
     * Redirect to mobile version to
     * specify url in parameter [$autoRedirectToMobile] or $url
     */
    public function redirectToTablet($url = '')
    {
        // Prevent loop page redirect
        if ((URL::base(true) === $url)
            || (URL::base(true) === $this->autoRedirectToTablet))
        {
            return;
        }
        // Detect tablet device
        if ($this->_mobileDetectLibrary->isTablet()) {
            $url = (!empty($url)) ? $url : $this->autoRedirectToTablet;
            \Yii::$app->response->redirect($url.\Yii::$app->request->url);
        }
    }

}
