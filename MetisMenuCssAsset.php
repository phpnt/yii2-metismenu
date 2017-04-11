<?php
/**
 * Created by PhpStorm.
 * User: phpNT - http://phpnt.com
 * Date: 11.04.2017
 * Time: 18:00
 */

namespace phpnt\metismenu;


use yii\web\AssetBundle;

/**
 * Class AssetBundle
 */
class MetisMenuCssAsset extends AssetBundle
{
    /**
     * @inherit
     */
    public $sourcePath = '@phpnt/metismenu';

    /**
     * @inherit
     */
    public $css = [
        'css/style.css'
    ];
}
