<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SssContributionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $contributions = [
            ['range_compensation' => '0 - 4,250', 'ee_amount_contribution' => 380.00, 'er_amount_contribution' => 180.00],
            ['range_compensation' => '4,250 - 4,749.99', 'ee_amount_contribution' => 202.50, 'er_amount_contribution' => 427.50],
            ['range_compensation' => '4,750 - 5,249.99', 'ee_amount_contribution' => 225.00, 'er_amount_contribution' => 475.00],
            ['range_compensation' => '5,250 - 5,749.99', 'ee_amount_contribution' => 247.50, 'er_amount_contribution' => 522.50],
            ['range_compensation' => '5,750 - 6,249.99', 'ee_amount_contribution' => 270.00, 'er_amount_contribution' => 570.00],
            ['range_compensation' => '6,250 - 6,749.99', 'ee_amount_contribution' => 292.50, 'er_amount_contribution' => 617.50],
            ['range_compensation' => '6,750 - 7,249.99', 'ee_amount_contribution' => 315.00, 'er_amount_contribution' => 665.00],
            ['range_compensation' => '7,250 - 7,749.99', 'ee_amount_contribution' => 337.50, 'er_amount_contribution' => 712.50],
            ['range_compensation' => '7,750 - 8,249.99', 'ee_amount_contribution' => 360.00, 'er_amount_contribution' => 760.00],
            ['range_compensation' => '8,250 - 8,749.99', 'ee_amount_contribution' => 382.50, 'er_amount_contribution' => 807.50],
            ['range_compensation' => '8,750 - 9,249.99', 'ee_amount_contribution' => 405.00, 'er_amount_contribution' => 855.00],
            ['range_compensation' => '9,250 - 9,749.99', 'ee_amount_contribution' => 427.50, 'er_amount_contribution' => 902.50],
            ['range_compensation' => '9,750 - 10,249.99', 'ee_amount_contribution' => 450.00, 'er_amount_contribution' => 950.00],
            ['range_compensation' => '10,250 - 10,749.99', 'ee_amount_contribution' => 472.50, 'er_amount_contribution' => 997.50],
            ['range_compensation' => '10,750 - 11,249.99', 'ee_amount_contribution' => 495.00, 'er_amount_contribution' => 1045.00],
            ['range_compensation' => '11,250 - 11,749.99', 'ee_amount_contribution' => 517.50, 'er_amount_contribution' => 1092.50],
            ['range_compensation' => '11,750 - 12,249.99', 'ee_amount_contribution' => 540.00, 'er_amount_contribution' => 1140.00],
            ['range_compensation' => '12,250 - 12,749.99', 'ee_amount_contribution' => 562.50, 'er_amount_contribution' => 1187.50],
            ['range_compensation' => '12,750 - 13,249.99', 'ee_amount_contribution' => 585.00, 'er_amount_contribution' => 1235.00],
            ['range_compensation' => '13,250 - 13,749.99', 'ee_amount_contribution' => 607.50, 'er_amount_contribution' => 1282.50],
            ['range_compensation' => '13,750 - 14,249.99', 'ee_amount_contribution' => 630.00, 'er_amount_contribution' => 1330.00],
            ['range_compensation' => '14,250 - 14,749.99', 'ee_amount_contribution' => 652.50, 'er_amount_contribution' => 1377.50],
            ['range_compensation' => '14,750 - 15,249.99', 'ee_amount_contribution' => 675.00, 'er_amount_contribution' => 1425.00],
            ['range_compensation' => '15,250 - 15,749.99', 'ee_amount_contribution' => 697.50, 'er_amount_contribution' => 1472.50],
            ['range_compensation' => '15,750 - 16,249.99', 'ee_amount_contribution' => 720.00, 'er_amount_contribution' => 1520.00],
            ['range_compensation' => '16,250 - 16,749.99', 'ee_amount_contribution' => 742.50, 'er_amount_contribution' => 1567.50],
            ['range_compensation' => '16,750 - 17,249.99', 'ee_amount_contribution' => 765.00, 'er_amount_contribution' => 1615.00],
            ['range_compensation' => '17,250 - 17,749.99', 'ee_amount_contribution' => 787.50, 'er_amount_contribution' => 1662.50],
            ['range_compensation' => '17,750 - 18,249.99', 'ee_amount_contribution' => 810.00, 'er_amount_contribution' => 1710.00],
            ['range_compensation' => '18,250 - 18,749.99', 'ee_amount_contribution' => 832.50, 'er_amount_contribution' => 1757.50],
            ['range_compensation' => '18,750 - 19,249.99', 'ee_amount_contribution' => 855.00, 'er_amount_contribution' => 1805.00],
            ['range_compensation' => '19,250 - 19,749.99', 'ee_amount_contribution' => 877.50, 'er_amount_contribution' => 1852.50],
            ['range_compensation' => '19,750 - above', 'ee_amount_contribution' => 900.00, 'er_amount_contribution' => 1900.00],
        ];

        DB::table('sss_contributions')->insert($contributions);
    }
}
