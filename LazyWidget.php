<?php
/**
 * Created by PhpStorm.
 * User: cluster
 * Date: 9/20/16
 * Time: 6:54 PM
 */

namespace yiidoc\lazyload;

use yii\base\Widget;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\web\View;

class LazyWidget extends Widget
{
    public $url;
    public $blank = '//static.tin24h.news/thumbs/logo-600x400.png';
    public $lazyCssClass = 'lazy';
    public $options = ['class' => 'img-responsive'];

    public function init()
    {
        $this->registerAssetBundle();
        $this->registerScript();
        $this->options['id'] = ArrayHelper::getValue($this->options, 'id', $this->id);
        Html::addCssClass($this->options, $this->lazyCssClass);
        $this->options['data-original'] = $this->url;
        echo $this->renderImages();
    }

    protected function renderImages()
    {
        return Html::img($this->blank, $this->options);
    }

    protected function registerScript()
    {
        $js = "jQuery('img.{$this->lazyCssClass}').lazyload();";
        $this->getView()->registerJs($js, View::POS_READY, $this->lazyCssClass);
    }

    protected function registerAssetBundle()
    {
        LazyAsset::register($this->getView());
    }
}