# Yii2 Mobile detection

#Initialisation
##Add code below In your ``config`` file like additional params
```php
...
'params' => [
    'mobiledetect' => [
        'autoRedirectToMobile' => 'http://m.site',
        'autoRedirectToTablet' => 'http://tablet.site',
    ]
]
```
