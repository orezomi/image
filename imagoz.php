<?php
namespace orezomi\image;
use Yii;
use yii\base\Component;
use yii\base\ErrorException;
/**
 * Class ImageDriver
 * The main class to wrap Zend Feed Extension
 * @package yii\feed
 */
class Imagoz extends Component
{
        /**
         * Loads read Zend-feed component
         * @return mixed object Zend\Feed\Reader component
         */
        public function image(){
            return true;
        }
}
?>
