<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use App\Models\Nationalitie;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NationalitieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('nationalities')->delete();

        $al = [

            
            [

                'en'=> 'American Samoan',
                'ar'=> 'أمريكي سامواني'
            ],
            [

                'en'=> 'Andorran',
                'ar'=> 'أندوري'
            ],
            [

                'en'=> 'Angolan',
                'ar'=> 'أنقولي'
            ],
            [

                'en'=> 'Anguillan',
                'ar'=> 'أنغويلي'
            ],
            [

                'en'=> 'Antarctican',
                'ar'=> 'أنتاركتيكي'
            ],
            [

                'en'=> 'Antiguan',
                'ar'=> 'بربودي'
            ],
            [

                'en'=> 'Argentinian',
                'ar'=> 'أرجنتيني'
            ],
            [

                'en'=> 'Armenian',
                'ar'=> 'أرميني'
            ],
            [

                'en'=> 'Aruban',
                'ar'=> 'أوروبهيني'
            ],
            [

                'en'=> 'Australian',
                'ar'=> 'أسترالي'
            ],
            [

                'en'=> 'Austrian',
                'ar'=> 'نمساوي'
            ],
            [

                'en'=> 'Azerbaijani',
                'ar'=> 'أذربيجاني'
            ],
            [

                'en'=> 'Bahamian',
                'ar'=> 'باهاميسي'
            ],
            [

                'en'=> 'Bahraini',
                'ar'=> 'بحريني'
            ],
            [

                'en'=> 'Bangladeshi',
                'ar'=> 'بنغلاديشي'
            ],
            
           
            [

                'en'=> 'Sao Tomean',
                'ar'=> 'ساو تومي وبرينسيبي'
            ],
            [

                'en'=> 'Saudi Arabian',
                'ar'=> 'سعودي'
            ],
            [

                'en'=> 'Senegalese',
                'ar'=> 'سنغالي'
            ],
            [

                'en'=> 'Serbian',
                'ar'=> 'صربي'
            ],
            [

                'en'=> 'Seychellois',
                'ar'=> 'سيشيلي'
            ],
            [

                'en'=> 'Sierra Leonean',
                'ar'=> 'سيراليوني'
            ],
            [

                'en'=> 'Singaporean',
                'ar'=> 'سنغافوري'
            ],
            [

                'en'=> 'Slovak',
                'ar'=> 'سولفاكي'
            ],
            [

                'en'=> 'Slovenian',
                'ar'=> 'سولفيني'
            ],
            [

                'en'=> 'Solomon Island',
                'ar'=> 'جزر سليمان'
            ],
            [

                'en'=> 'Somali',
                'ar'=> 'صومالي'
            ],
            [

                'en'=> 'South African',
                'ar'=> 'أفريقي'
            ],
            [

                'en'=> 'South Georgia and the South Sandwich',
                'ar'=> 'لمنطقة القطبية الجنوبية'
            ],
            [

                'en'=> 'South Sudanese',
                'ar'=> 'سوادني جنوبي'
            ],
            [

                'en'=> 'Spanish',
                'ar'=> 'إسباني'
            ],
            [

                'en'=> 'St. Helenian',
                'ar'=> 'هيلاني'
            ],
            [

                'en'=> 'Sudanese',
                'ar'=> 'سوداني'
            ],
            [

                'en'=> 'Surinamese',
                'ar'=> 'سورينامي'
            ],
            [

                'en'=> 'Svalbardian/Jan Mayenian',
                'ar'=> 'سفالبارد ويان ماين'
            ],
            [

                'en'=> 'Swazi',
                'ar'=> 'سوازيلندي'
            ],
            [

                'en'=> 'Swedish',
                'ar'=> 'سويدي'
            ],
            [

                'en'=> 'Swiss',
                'ar'=> 'سويسري'
            ],
            [

                'en'=> 'Syrian',
                'ar'=> 'سوري'
            ],
            [

                'en'=> 'Taiwanese',
                'ar'=> 'تايواني'
            ],
            [

                'en'=> 'Tajikistani',
                'ar'=> 'طاجيكستاني'
            ],
            [

                'en'=> 'Tanzanian',
                'ar'=> 'تنزانيي'
            ],
            [

                'en'=> 'Thai',
                'ar'=> 'تايلندي'
            ],
            [

                'en'=> 'Timor-Lestian',
                'ar'=> 'تيموري'
            ],
            [

                'en'=> 'Togolese',
                'ar'=> 'توغي'
            ],
            [

                'en'=> 'Tokelaian',
                'ar'=> 'توكيلاوي'
            ],
            [

                'en'=> 'Tongan',
                'ar'=> 'تونغي'
            ],
            [

                'en'=> 'Trinidadian/Tobagonian',
                'ar'=> 'ترينيداد وتوباغو'
            ],
            [

                'en'=> 'Tunisian',
                'ar'=> 'تونسي'
            ],
            [

                'en'=> 'Turkish',
                'ar'=> 'تركي'
            ],
            [

                'en'=> 'Turkmen',
                'ar'=> 'تركمانستاني'
            ],
            [

                'en'=> 'Turks and Caicos Islands',
                'ar'=> 'جزر توركس وكايكوس'
            ],
            [

                'en'=> 'Tuvaluan',
                'ar'=> 'توفالي'
            ],
            [

                'en'=> 'Ugandan',
                'ar'=> 'أوغندي'
            ],
            [

                'en'=> 'Ukrainian',
                'ar'=> 'أوكراني'
            ],
            [

                'en'=> 'Emirati',
                'ar'=> 'إماراتي'
            ],
            [

                'en'=> 'British',
                'ar'=> 'بريطاني'
            ],
            [

                'en'=> 'American',
                'ar'=> 'أمريكي'
            ],
            [

                'en'=> 'US Minor Outlying Islander',
                'ar'=> 'أمريكي'
            ],
            [

                'en'=> 'Uruguayan',
                'ar'=> 'أورغواي'
            ],
            [

                'en'=> 'Uzbek',
                'ar'=> 'أوزباكستاني'
            ],
            [

                'en'=> 'Vanuatuan',
                'ar'=> 'فانواتي'
            ],
            [

                'en'=> 'Venezuelan',
                'ar'=> 'فنزويلي'
            ],
            [

                'en'=> 'Vietnamese',
                'ar'=> 'فيتنامي'
            ],
            [

                'en'=> 'American Virgin Islander',
                'ar'=> 'أمريكي'
            ],
            [

                'en'=> 'Vatican',
                'ar'=> 'فاتيكاني'
            ],
            [

                'en'=> 'Wallisian/Futunan',
                'ar'=> 'فوتوني'
            ],
            [

                'en'=> 'Sahrawian',
                'ar'=> 'صحراوي'
            ],
            [

                'en'=> 'Yemeni',
                'ar'=> 'يمني'
            ],
            [

                'en'=> 'Zambian',
                'ar'=> 'زامبياني'
            ],
            [

                'en'=> 'Zimbabwean',
                'ar'=> 'زمبابوي'
            ]
        ]; 
        foreach ($al as $a) {
            Nationalitie::create(['Name' => $a]);
        }
    }
}
