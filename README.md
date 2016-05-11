# image
Yii2 extension for Image Processing
This yii2 extension is based on kohana image manipulating script
Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist orezomi/image "*"
```

or add

```
"orezomi/image": "*"
```

to the require section of your `composer.json` file.

Usage
-----
Configuration web.php
```
'components' => [
       ...
    	'image'=>[
    		'class'=>'orezomi\yii2rss\Imagos',
    	],
    	...
    	]
```
