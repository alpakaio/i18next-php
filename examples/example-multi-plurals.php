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
                'key_0'        =>  'Single form in Ukrainian',
                'key_1'        =>  'Plural form in Ukrainian',
                'key_2'        =>  'Other plural form in Ukrainian',
            ]
            ],
            'pl'                =>  [
                'translation'       =>  [
                    'key_0'        =>  'Single form in Polish',
                    'key_1'        =>  'Plural form in Polish',
                    'key_2'        =>  'Other plural form in Polish',
                ]
            ]
    ]
]);

echo "Fetching single item in Ukrainian - " . I18n::get()->t('key', ['count' => 1]) . "\n";
// Outputs "Single form in Ukrainian"
echo "Fetching plural item in Ukrainian - " . I18n::get()->t('key', ['count' => 2]) . "\n";
// Outputs "Plural form in Ukrainian"
echo "Fetching plural item in Ukrainian - " . I18n::get()->t('key', ['count' => 15]) . "\n";
// Outputs "Other plural form in Ukrainian"

I18n::get()->changeLanguage('pl');

echo "Fetching single item in Polish - " . I18n::get()->t('key', ['count' => 1]) . "\n";
// Outputs "Single form in Polish"
echo "Fetching plural item in Polish - " . I18n::get()->t('key', ['count' => 2]) . "\n";
// Outputs "Plural form in Polish"
echo "Fetching plural item in Polish - " . I18n::get()->t('key', ['count' => 15]) . "\n";
// Outputs "Other plural form in Polish"
