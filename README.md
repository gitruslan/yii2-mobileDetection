# yii2-mobileDetection
mobile detection for yii2 advanced version

#Initialisation
Init this in web config 
'bootstrap' => ['rlabuta\mobiledetect\Bootstrap'],
Add code below In you config file like additional params
...
'params' => [
    'mobiledetect' => [
        'autoRedirectToMobile' => 'http://m.site'
    ]
]

