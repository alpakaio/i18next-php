<?php

// Load autoloader from composer or add the library to another autoloader
require_once __DIR__ . '/../vendor/autoload.php';

use Pkly\I18Next\I18n;


I18n::get([
    'lng'                   =>  'uk',
    'simplifyPluralSuffix' => false,
    'resources'             =>  [
        'uk'                =>  [
            'translation'       =>  [
                'key_one'        =>  'Single form in Ukrainian',
                'key_few'        =>  'Plural form \'few\' in Ukrainian',
                'key_many'        =>  'Plural form \'many\' in Ukrainian',
            ]
            ],
            'pl'                =>  [
                'translation'       =>  [
                    'key_one'        =>  'Single form in Polish',
                    'key_few'        =>  'Plural form \'few\' in Polish',
                    'key_many'        =>  'Plural form \'many\' in Polish',
            ]
            ],
            'ar'                =>  [
                'translation'       =>  [
                    'key_zero'       =>  'Plural form \'zero\'',
                    'key_one'        =>  'Plural form \'one\'',
                    'key_two'        =>  'Plural form \'two\'',
                    'key_few'        =>  'Plural form \'few\'',
                    'key_many'       =>  'Plural form \'many\'',
                    'key_other'      =>  'Plural form \'other\'',
                ]
            ],

    ]
]);

echo "Fetching 1 item in Ukrainian - " . I18n::get()->t('key', ['count' => 1]) . "\n";
// Outputs "Single form in Ukrainian"
echo "Fetching 2 items in Ukrainian - " . I18n::get()->t('key', ['count' => 2]) . "\n";
// Outputs "Plural form 'few' in Ukrainian"
echo "Fetching 15 items in Ukrainian - " . I18n::get()->t('key', ['count' => 15]) . "\n";
// Outputs "Plural form 'other' in Ukrainian"

I18n::get()->changeLanguage('pl');

echo "Fetching 1 item in Polish - " . I18n::get()->t('key', ['count' => 1]) . "\n";
// Outputs "Single form in Polish"
echo "Fetching 2 items in Polish - " . I18n::get()->t('key', ['count' => 2]) . "\n";
// Outputs "Plural form 'few' in Polish"
echo "Fetching 15 items in Polish - " . I18n::get()->t('key', ['count' => 15]) . "\n";
// Outputs "Plural form 'other' in Polish"


I18n::get()->changeLanguage('ar');
echo "************ Arabish ************" . "\n";
echo "Fetching 0 item in Arabish - " . I18n::get()->t('key', ['count' => 0]) . "\n";
// Outputs "Plural form 'zero'"
echo "Fetching 1 item in Arabish - " . I18n::get()->t('key', ['count' => 1]) . "\n";
// Outputs "Plural form 'one'"
echo "Fetching 2 items in Arabish - " . I18n::get()->t('key', ['count' => 2]) . "\n";
// Outputs "Plural form 'two'"
echo "Fetching 3 items in Arabish - " . I18n::get()->t('key', ['count' => 3]) . "\n";
// Outputs "Plural form 'few'"
echo "Fetching 11 items in Arabish - " . I18n::get()->t('key', ['count' => 11]) . "\n";
// Outputs "Plural form 'many'"
echo "Fetching 100 items in Arabish - " . I18n::get()->t('key', ['count' => 100]) . "\n";
// Outputs "Plural form 'other'"