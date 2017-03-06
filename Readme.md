Simple php api class with google places
=======================================

[![Packagist](https://img.shields.io/packagist/v/buuum/googleplaces.svg)](https://packagist.org/packages/buuum/googleplaces)
[![license](https://img.shields.io/github/license/mashape/apistatus.svg?maxAge=2592000)](#license)

## Install

### System Requirements

You need PHP >= 7.0.0 to use Buuum\GooglePlaces but the latest stable version of PHP is recommended.

### Composer

Buuum\GooglePlaces is available on Packagist and can be installed using Composer:

```
composer require buuum/googleplaces
```

### Manually

You may use your own autoloader as long as it follows PSR-0 or PSR-4 standards. Just put src directory contents in your vendor directory.


### Documentation

https://developers.google.com/places/web-service/autocomplete

### Initialization

```php
$apikey = 'xxxxxx';
$places = new \Buuum\GooglePlaces($apikey);
```

### setters
#### setLang
The language code, indicating in which language the results should be returned, if possible.

```php
$places->setLang('es');
```

#### setType
The types of place results to return.
https://developers.google.com/places/web-service/autocomplete#place_types

```php
$places->setType('address');
```

#### setComponents
A grouping of places to which you would like to restrict your results.

```php
$places->setComponents(['country' => 'es']);
```

#### setLocation
The point around which you wish to retrieve place information.

```php
$places->setLocation('12312,12312');
```

#### setRadius
The distance (in meters) within which to return place results

```php
$places->setRadius(100);
```

### Get cities
```php
$places->setType('(cities)');
$results = $places->search('montg');
```

#### output
```php
{
   "predictions" : [
      {
         "description" : "Montgat, España",
         "id" : "597a021526a575ea9ea5012c1f67d7b905cb8dba",
         "matched_substrings" : [
            {
               "length" : 5,
               "offset" : 0
            }
         ],
         "place_id" : "ChIJH-WPJmi6pBIRurNpFRmVe5o",
         "reference" : "CjQoAAAAEDBWR-Jb9vvh9yIosK02pjOhnyaHaSo4eiAGheeYIS6ZNQSPH9OXY73ETn0Nen1uEhASpJinNCF9CL702trOFaGNGhSm-btgLPmDWRc8ZCcesK8uvD7-tw",
         "structured_formatting" : {
            "main_text" : "Montgat",
            "main_text_matched_substrings" : [
               {
                  "length" : 5,
                  "offset" : 0
               }
            ],
            "secondary_text" : "España"
         },
         "terms" : [
            {
               "offset" : 0,
               "value" : "Montgat"
            },
            {
               "offset" : 9,
               "value" : "España"
            }
         ],
         "types" : [ "locality", "political", "geocode" ]
      },
      {
         "description" : "Mongay, España",
         "id" : "4213b95fa271545896e764db4938cf59f641af23",
         "matched_substrings" : [
            {
               "length" : 6,
               "offset" : 0
            }
         ],
         "place_id" : "ChIJ6e1Yx0uMphIR9uvohdVGEV4",
         "reference" : "CjQnAAAAbJmD2YnEzpp8HsQrz-CgOWjAnlkeYvfpuyjIw3BhvFL237j8HXRxyL3FMu93cegLEhBQMxbk83QdmPFn42_Ji5CJGhS9CNuZnN1Pp6J3OwdFlLqhYgm0OA",
         "structured_formatting" : {
            "main_text" : "Mongay",
            "main_text_matched_substrings" : [
               {
                  "length" : 6,
                  "offset" : 0
               }
            ],
            "secondary_text" : "España"
         },
         "terms" : [
            {
               "offset" : 0,
               "value" : "Mongay"
            },
            {
               "offset" : 8,
               "value" : "España"
            }
         ],
         "types" : [ "locality", "political", "geocode" ]
      },
      {
         "description" : "Montgarri, España",
         "id" : "d9facf5996da05bf7931167114fda926cbfb3973",
         "matched_substrings" : [
            {
               "length" : 5,
               "offset" : 0
            }
         ],
         "place_id" : "ChIJTUDIi5S7qBIRlVuOHDhd13U",
         "reference" : "CjQqAAAAW5LphMEAuP9hQwJQt1AnZynRzL8j4VF3qsQ44u71hOHNLswiHWFvUWGvRlwy9BFdEhCfPs_BHBPT6y6tb4b7J-kvGhTuWpZaYPCXrPm064-DlpTkGNb5-g",
         "structured_formatting" : {
            "main_text" : "Montgarri",
            "main_text_matched_substrings" : [
               {
                  "length" : 5,
                  "offset" : 0
               }
            ],
            "secondary_text" : "España"
         },
         "terms" : [
            {
               "offset" : 0,
               "value" : "Montgarri"
            },
            {
               "offset" : 11,
               "value" : "España"
            }
         ],
         "types" : [ "locality", "political", "geocode" ]
      },
      {
         "description" : "Montgo, España",
         "id" : "c2f6f412dd40fdcfa8e2345eee06b20861bdead2",
         "matched_substrings" : [
            {
               "length" : 5,
               "offset" : 0
            }
         ],
         "place_id" : "ChIJ13UluxkFnhIRiFZWEE1MLMs",
         "reference" : "CjQnAAAA_RFOM3JVU5_PpsEVFHcy-RM5uFlX4e-ULh88VpFhU6nPeu9CjV34M0htNQv83mePEhDXURC_KzaScbArWrkUimfDGhT_rnC4H6pEUA57zE1-wB2u5pMusw",
         "structured_formatting" : {
            "main_text" : "Montgo",
            "main_text_matched_substrings" : [
               {
                  "length" : 5,
                  "offset" : 0
               }
            ],
            "secondary_text" : "España"
         },
         "terms" : [
            {
               "offset" : 0,
               "value" : "Montgo"
            },
            {
               "offset" : 8,
               "value" : "España"
            }
         ],
         "types" : [ "locality", "political", "geocode" ]
      },
      {
         "description" : "Montgo-Toscamar, España",
         "id" : "46ca12912abe864670aec353f6eccbff0036cd8a",
         "matched_substrings" : [
            {
               "length" : 5,
               "offset" : 0
            }
         ],
         "place_id" : "ChIJ9UAbmBcFnhIR402ie35iGrs",
         "reference" : "CjQwAAAAE6jtRqPErXEZq_8f1VO6aISaVt7OFzBfhDGI-bT8z1tgoVie0VwOxJKIhCTZoPkNEhA-KN6lKtNgHblF0Rf4agooGhRnXMhoomK3_t4fUuPS5xuyL0LN1A",
         "structured_formatting" : {
            "main_text" : "Montgo-Toscamar",
            "main_text_matched_substrings" : [
               {
                  "length" : 5,
                  "offset" : 0
               }
            ],
            "secondary_text" : "España"
         },
         "terms" : [
            {
               "offset" : 0,
               "value" : "Montgo-Toscamar"
            },
            {
               "offset" : 17,
               "value" : "España"
            }
         ],
         "types" : [ "locality", "political", "geocode" ]
      }
   ],
   "status" : "OK"
}
```

### Get address
```php
$places->setType('address');
$results = $places->search('montgat sant antoni maria');
```
#### output
```php
{
   "predictions" : [
      {
         "description" : "Carrer Sant Antoni Maria Claret, Montgat, España",
         "id" : "5dd38d73703d66646ad66cef3f571d8ae1e989da",
         "matched_substrings" : [
            {
               "length" : 17,
               "offset" : 7
            },
            {
               "length" : 7,
               "offset" : 33
            }
         ],
         "place_id" : "EjFDYXJyZXIgU2FudCBBbnRvbmkgTWFyaWEgQ2xhcmV0LCBNb250Z2F0LCBFc3Bhw7Fh",
         "reference" : "CkQ1AAAATvJA5yBRgVQC7zSEn7pgR42qRWxeIMjXDEJhO8N3qYARB3ZLOSkMT2ZWVYE4yuraNa9r2-Xrf1gLSzZ12wBNJRIQhiXNP2U97PYezHZANlv2hRoUa-Cc4lg1HYKus_lgepImMY5Hy9g",
         "structured_formatting" : {
            "main_text" : "Carrer Sant Antoni Maria Claret",
            "main_text_matched_substrings" : [
               {
                  "length" : 17,
                  "offset" : 7
               }
            ],
            "secondary_text" : "Montgat, España",
            "secondary_text_matched_substrings" : [
               {
                  "length" : 7,
                  "offset" : 0
               }
            ]
         },
         "terms" : [
            {
               "offset" : 0,
               "value" : "Carrer Sant Antoni Maria Claret"
            },
            {
               "offset" : 33,
               "value" : "Montgat"
            },
            {
               "offset" : 42,
               "value" : "España"
            }
         ],
         "types" : [ "route", "geocode" ]
      }
   ],
   "status" : "OK"
}
```

### get from code postal
```php
$places->setType('(regions)');
$results = $places->search('08390');
```

#### output
```php
{
   "predictions" : [
      {
         "description" : "08390 Tiana, España",
         "id" : "4cd7ea52f3c1b4737c51e84c45d9f93651262658",
         "matched_substrings" : [
            {
               "length" : 5,
               "offset" : 0
            }
         ],
         "place_id" : "ChIJJ8a0p0O6pBIRkFdHeuP6ABw",
         "reference" : "CjQsAAAAgIVFpb0lpRZxF73ZUwTQFGB-OVhhw-XuexvW8oXNK5wsQKykRV_rfMZgZng_tym9EhAmNokICj4iE2nzsFCWhbpRGhRUi0CdSaOLow1fxh23W3odlzVrPA",
         "structured_formatting" : {
            "main_text" : "08390",
            "main_text_matched_substrings" : [
               {
                  "length" : 5,
                  "offset" : 0
               }
            ],
            "secondary_text" : "Tiana, España"
         },
         "terms" : [
            {
               "offset" : 0,
               "value" : "08390"
            },
            {
               "offset" : 6,
               "value" : "Tiana"
            },
            {
               "offset" : 13,
               "value" : "España"
            }
         ],
         "types" : [ "postal_code", "geocode" ]
      }
   ],
   "status" : "OK"
}
```

### get by place id
```php
$results = $places->getDetailsFromPlaceId('ChIJJ8a0p0O6pBIRkFdHeuP6ABw');
```

#### output
```php
{
   "html_attributions" : [],
   "result" : {
      "address_components" : [
         {
            "long_name" : "08390",
            "short_name" : "08390",
            "types" : [ "postal_code" ]
         },
         {
            "long_name" : "Tiana",
            "short_name" : "Tiana",
            "types" : [ "locality", "political" ]
         },
         {
            "long_name" : "Barcelona",
            "short_name" : "Barcelona",
            "types" : [ "administrative_area_level_2", "political" ]
         },
         {
            "long_name" : "Cataluña",
            "short_name" : "CT",
            "types" : [ "administrative_area_level_1", "political" ]
         },
         {
            "long_name" : "España",
            "short_name" : "ES",
            "types" : [ "country", "political" ]
         }
      ],
      "adr_address" : "\\u003cspan class=\\"postal-code\\"\\u003e08390\\u003c/span\\u003e \\u003cspan class=\\"locality\\"\\u003eTiana\\u003c/span\\u003e, \\u003cspan class=\\"region\\"\\u003eBarcelona\\u003c/span\\u003e, \\u003cspan class=\\"country-name\\"\\u003eEspaña\\u003c/span\\u003e",
      "formatted_address" : "08390 Tiana, Barcelona, España",
      "geometry" : {
         "location" : {
            "lat" : 41.4712564,
            "lng" : 2.2802755
         },
         "viewport" : {
            "northeast" : {
               "lat" : 41.4871754,
               "lng" : 2.2967348
            },
            "southwest" : {
               "lat" : 41.4608014,
               "lng" : 2.2616708
            }
         }
      },
      "icon" : "https://maps.gstatic.com/mapfiles/place_api/icons/geocode-71.png",
      "id" : "4cd7ea52f3c1b4737c51e84c45d9f93651262658",
      "name" : "08390",
      "place_id" : "ChIJJ8a0p0O6pBIRkFdHeuP6ABw",
      "reference" : "CmRbAAAARuRmnc0cppqN5RZECEW5gfjVncPfFnrK1Ue787NHntbUXPYgFouCtQJbhfBrlkRyB4yCLUPdY-wYKTf6KbdkvorRHrbGRRS8wl_Crm7wDap1obUThKcH28sVNlipYQ39EhAwfKZEtKCF2n1Lt_anfKlRGhSTW9Djj7trm6ThKstkv3fmh46RNA",
      "scope" : "GOOGLE",
      "types" : [ "postal_code" ],
      "url" : "https://maps.google.com/?q=08390&ftid=0x12a4ba43a7b4c627:0x1c00fae37a475790",
      "utc_offset" : 60,
      "vicinity" : "Tiana"
   },
   "status" : "OK"
}
```

## LICENSE

The MIT License (MIT)

Copyright (c) 2016

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.