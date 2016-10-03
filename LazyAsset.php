<?php
/**
 * Created by PhpStorm.
 * User: cluster
 * Date: 9/20/16
 * Time: 6:41 PM
 */

namespace yiidoc\lazyload;


use yii\web\AssetBundle;

class LazyAsset extends AssetBundle
{
    public $sourcePath = '@bower/jquery-lazyload';
    public $js = [
        'jquery.lazyload.min.js'
    ];
    public $depends =[
        'yii\web\JqueryAsset'
    ];
}