<?php
namespace thinkerg\HermesMailing;

use thinkerg\HermesMailing\Module;
use Yii;
use yii\base\BootstrapInterface;
use yii\base\Event;

class Module extends \yii\base\Module implements BootstrapInterface
{

    const EVENT_UNKNOWN_APP = 'hermesUnknownApp';

    /**
     *
     * @inheritdoc
     */
    public $controllerNamespace = 'thinkerg\HermesMailing\controllers';
    
    /**
     * @override
     * @param \yii\base\Application $app
     */
    public function bootstrap($app)
    {
        if ($app instanceof \yii\web\Application) {

        } elseif ($app instanceof \yii\base\Application) {
            
        } else {
            $this->trigger(static::EVENT_UNKNOWN_APP);
        }
    }



     
}

?>