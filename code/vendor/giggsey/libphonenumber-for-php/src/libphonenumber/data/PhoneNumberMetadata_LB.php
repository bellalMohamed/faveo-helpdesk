<?php
/**
 * This file is automatically @generated by {@link BuildMetadataPHPFromXml}.
 * Please don't modify it directly.
 */


return array (
  'generalDesc' => 
  array (
    'NationalNumberPattern' => '[13-9]\\d{6,7}',
    'PossibleNumberPattern' => '\\d{7,8}',
  ),
  'fixedLine' => 
  array (
    'NationalNumberPattern' => '
          (?:
            [14-6]\\d{2}|
            7(?:
              [2-57]\\d|
              62|
              8[0-7]|
              9[04-9]
            )|
            8[02-9]\\d|
            9\\d{2}
          )\\d{4}
        ',
    'PossibleNumberPattern' => '\\d{7}',
    'ExampleNumber' => '1123456',
  ),
  'mobile' => 
  array (
    'NationalNumberPattern' => '
          (?:
            3\\d|
            7(?:
              [01]\\d|
              6[013-9]|
              8[89]|
              9[1-3]
            )|
            81\\d
          )\\d{5}
        ',
    'PossibleNumberPattern' => '\\d{7,8}',
    'ExampleNumber' => '71123456',
  ),
  'tollFree' => 
  array (
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
  ),
  'premiumRate' => 
  array (
    'NationalNumberPattern' => '9[01]\\d{6}',
    'PossibleNumberPattern' => '\\d{8}',
    'ExampleNumber' => '90123456',
  ),
  'sharedCost' => 
  array (
    'NationalNumberPattern' => '80\\d{6}',
    'PossibleNumberPattern' => '\\d{8}',
    'ExampleNumber' => '80123456',
  ),
  'personalNumber' => 
  array (
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
  ),
  'voip' => 
  array (
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
  ),
  'pager' => 
  array (
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
  ),
  'uan' => 
  array (
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
  ),
  'emergency' => 
  array (
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
  ),
  'voicemail' => 
  array (
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
  ),
  'shortCode' => 
  array (
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
  ),
  'standardRate' => 
  array (
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
  ),
  'carrierSpecific' => 
  array (
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
  ),
  'noInternationalDialling' => 
  array (
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
  ),
  'id' => 'LB',
  'countryCode' => 961,
  'internationalPrefix' => '00',
  'nationalPrefix' => '0',
  'nationalPrefixForParsing' => '0',
  'sameMobileAndFixedLinePattern' => false,
  'numberFormat' => 
  array (
    0 => 
    array (
      'pattern' => '(\\d)(\\d{3})(\\d{3})',
      'format' => '$1 $2 $3',
      'leadingDigitsPatterns' => 
      array (
        0 => '
            [13-6]|
            7(?:
              [2-57]|
              62|
              8[0-7]|
              9[04-9]
            )|
            8[02-9]|
            9
            ',
      ),
      'nationalPrefixFormattingRule' => '0$1',
      'domesticCarrierCodeFormattingRule' => '',
    ),
    1 => 
    array (
      'pattern' => '([7-9]\\d)(\\d{3})(\\d{3})',
      'format' => '$1 $2 $3',
      'leadingDigitsPatterns' => 
      array (
        0 => '
            [89][01]|
            7(?:
              [01]|
              6[013-9]|
              8[89]|
              9[1-3]
            )
          ',
      ),
      'nationalPrefixFormattingRule' => '',
      'domesticCarrierCodeFormattingRule' => '',
    ),
  ),
  'intlNumberFormat' => 
  array (
  ),
  'mainCountryForCode' => false,
  'leadingZeroPossible' => false,
  'mobileNumberPortableRegion' => false,
);