<?php

namespace Database\Seeders;

use JeroenZwart\CsvSeeder\CsvSeeder;
use Illuminate\Support\Facades\DB;
use App\Models\Country;

class CountrySeeder extends CsvSeeder
{

    /**
     * Configuration
     * jeroenzwart/laravel-csv-seeder
     */
    public function __construct()
    {
        $this->file = '/database/seeders/csvs/countries.csv';
        $this->delimiter = ',';
        $this->timestamps = false;
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (Country::count() == 0) {
            DB::disableQueryLog();
            parent::run();
        }
    }
}
