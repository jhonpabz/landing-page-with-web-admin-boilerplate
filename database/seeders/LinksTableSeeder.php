<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LinksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $links = [
            [
                'id' => 1,
                'description' => 'links',
                'kind' => 'btn-link',
                'website' => 'https://www.google.com/maps'
            ],
            [
                'id' => 2,
                'description' => 'links',
                'kind' => 'btn-link',
                'website' => 'https://www.google.com/maps'
            ],
            [
                'id' => 3,
                'description' => 'links',
                'kind' => 'btn-link',
                'website' => 'https://github.com/'
            ],
            [
                'id' => 4,
                'description' => 'telegram',
                'kind' => 'nav-link-telegram',
                'website' => 'https://www.cursor.com/'
            ],
            [
                'id' => 5,
                'description' => 'links',
                'kind' => 'btn-link',
                'website' => 'https://www.sweldongpinoy.com/'
            ],
            [
                'id' => 6,
                'description' => 'android',
                'kind' => 'nav-link-android',
                'website' => 'https://www.android.com/intl/en_ph/'
            ],
            [
                'id' => 7,
                'description' => 'facebook',
                'kind' => 'nav-link-facebook',
                'website' => 'https://www.facebook.com/'
            ],
            [
                'id' => 8,
                'description' => 'Customer Service',
                'kind' => 'nav-link-cs',
                'website' => 'https://www.counter-strike.net/'
            ],
            [
                'id' => 9,
                'description' => 'links',
                'kind' => 'btn-link',
                'website' => 'https://github.com/'
            ],
            [
                'id' => 10,
                'description' => 'links',
                'kind' => 'btn-link',
                'website' => 'https://github.com/'
            ],
        ];

        DB::table('links')->insert($links);
    }
}
