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
use rlabuta\mobiledetect\lib\MobileDetectLibrary;

class MobileDetect extends Component
{
    /**
     * @var lib\MobileDetectLibrary
     */
    private $_mobileDetectLibrary;

    /**
     *
     */
    public function init()
    {
        $this->_mobileDetectLibrary = new MobileDetectLibrary();
    }

}
