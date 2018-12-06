<?php
/**
 * Created by PhpStorm.
 * User: phpNT - http://phpnt.com
 * Date: 22.04.2016
 * Time: 13:47
 */

namespace phpnt\metismenu;

use Yii;
use yii\web\AssetBundle;

/**
 * Class AssetBundle
  */
class MetisMenuAsset extends AssetBundle
{
    /**
     * @inherit
     */
    public $sourcePath = '@bower/metismenu';

    /**
     * @inherit
     */
    public $css = [
        'dist/metisMenu.min.css'
    ];

    /**
     * @inherit
     */
    public $js = [
        'dist/metisMenu.min.js'
    ];

    public function init()
    {
        $this->registerJs();
        parent::init();
    }

    protected function registerJs()
    {
    $js = <<<JS
        $('.side-menu').metisMenu();
JS;
        Yii::$app->view->registerJs($js);
        return $this;
    }
}
