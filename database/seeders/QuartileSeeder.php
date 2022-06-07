<?php

namespace Database\Seeders;

use App\Models\Quartile;
use Illuminate\Database\Seeder;

class QuartileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $quartiles = [
            [
                'quartile' => 0,
            ],
            [
                'quartile' => 1,
            ],
            [
                'quartile' => 2,
            ],
            [
                'quartile' => 3,
            ],
            [
                'quartile' => 4,
            ],
        ];

        foreach($quartiles as $quartile) {
            Quartile::create($quartile);
        }
    }
}
