yii2-redactor
=============
Extension LazyLoad for Yii2 Framework.

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist yiidoc/yii2-lazyload "*"
```

 or
```
 "yiidoc/yii2-lazyload": "*"
```

to the require section of your composer.json.

Configure
-----------------

Default use LazyWidget automatic render with options attributes img html tag and configure client scripts
```
use yiidoc\lazyload\LazyWidget;
...
<?=LazyWidget::widget();
```

or manual generate img tags

```
   use yiidoc\lazyload\LayzAsset;
   LayzAsset::register($view); // $view instanceOf yii\web\View
   $js = "jQuery('img.img-lazy').lazyload();";
   $view->registerJs($js);
   //manaul generate img tag
   Html::img($blank-img,['class'=>'img-lazy','data-src'=>$url]);
```

Bummer! i was tested on my project but not have many time to write document on file and usage.
If you have problem please create a [issue](https://github.com/yiidoc/yii2-lazyload/issues)

Thanks!
