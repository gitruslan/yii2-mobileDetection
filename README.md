# Yii2 Mobile detection
===========================

Extensions main library from http://mobiledetect.net/

Installation
------------
```
php composer.phar require rlabuta/mobiledetect "*"

 or

"rlabuta/mobiledetect" : "*"

If you get error like  ``...could not be found in any version`` during installation, try to add

"minimum-stability": "dev"

in your json file

```

Add code below In your ``config`` file like additional params

```php
...
'params' => [
    'mobiledetect' => [
        'autoRedirectToMobile' => 'http://m.site',
        'autoRedirectToTablet' => 'http://tablet.site',
    ]
]
```
