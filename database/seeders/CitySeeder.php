<?php

namespace Database\Seeders;

use JeroenZwart\CsvSeeder\CsvSeeder;
use Illuminate\Support\Facades\DB;
use App\Models\City;

class CitySeeder extends CsvSeeder
{

    /**
     * Configuration
     * jeroenzwart/laravel-csv-seeder
     */
    public function __construct()
    {
        $this->file = '/database/seeders/csvs/cities.csv';
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
        if (City::count() == 0) {
            // Recommended when importing larger CSVs
            DB::disableQueryLog();
            parent::run();
        }
    }
}
