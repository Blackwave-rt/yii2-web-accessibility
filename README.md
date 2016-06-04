Web Accessibility Extension for Yii 2
=====================================

This is the "Web Accessibility" extension for [Yii framework 2.0](http://www.yiiframework.com). It encapsulates [Web Accessibility](https://github.com/15web/web-accessibility) components
and plugins in terms of Yii widgets, and thus makes using Web Accessibility components/plugins
in Yii applications extremely easy.

For license information check the [LICENSE](LICENSE.md)-file.

Documentation is at [docs/guide/README.md](docs/guide/README.md).


Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist blackwave-rt/yii2-web-accessibility
```

or add

```
"blackwave-rt/yii2-web-accessibility": "*"
```

to the require section of your `composer.json` file.

Usage
----

For example, the following
single line of code in a view file would render a "Web Accessibility" Pagination component:

```php
<?= blackwaveRt\webAccessibility\LinkPager::widget(['pagination' => $pages]); ?>
```
