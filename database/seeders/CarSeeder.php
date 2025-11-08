<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Car;

class CarSeeder extends Seeder
{
    public function run(): void
    {
        $cars = [
            [
                'brand' => 'Toyota',
                'model' => 'Supra MK4',
                'year' => '1998',
                'price' => 1500000000,
                'color' => 'Midnight Purple',
                'mileage' => 45000,
                'description' => 'Toyota Supra MK4 dengan mesin 2JZ-GTE legendaris. Kondisi istimewa, terawat dengan baik.',
                'engine' => '2JZ-GTE Twin Turbo 3.0L',
                'transmission' => '6-Speed Manual',
                'status' => 'available'
            ],
            [
                'brand' => 'Nissan',
                'model' => 'Skyline GT-R R34',
                'year' => '1999',
                'price' => 2500000000,
                'color' => 'Bayside Blue',
                'mileage' => 38000,
                'description' => 'Nissan Skyline GT-R R34 V-Spec II. Icon JDM sejati dengan RB26DETT engine.',
                'engine' => 'RB26DETT Twin Turbo 2.6L',
                'transmission' => '6-Speed Manual',
                'status' => 'available'
            ],
            [
                'brand' => 'Honda',
                'model' => 'NSX NA1',
                'year' => '1991',
                'price' => 1800000000,
                'color' => 'Formula Red',
                'mileage' => 52000,
                'description' => 'Honda NSX generasi pertama. Supercar Jepang dengan teknologi VTEC dan handling sempurna.',
                'engine' => 'C30A V6 3.0L VTEC',
                'transmission' => '5-Speed Manual',
                'status' => 'reserved'
            ],
            [
                'brand' => 'Mazda',
                'model' => 'RX-7 FD3S',
                'year' => '1997',
                'price' => 850000000,
                'color' => 'Sunburst Yellow',
                'mileage' => 67000,
                'description' => 'Mazda RX-7 FD3S dengan mesin rotary 13B-REW. Design timeless dan performance luar biasa.',
                'engine' => '13B-REW Twin Turbo Rotary',
                'transmission' => '5-Speed Manual',
                'status' => 'available'
            ],
            [
                'brand' => 'Mitsubishi',
                'model' => 'Lancer Evolution VI',
                'year' => '2000',
                'price' => 750000000,
                'color' => 'White',
                'mileage' => 72000,
                'description' => 'Mitsubishi Lancer Evolution VI Tommi Makinen Edition. Rally legend dengan 4WD system.',
                'engine' => '4G63T Turbo 2.0L',
                'transmission' => '5-Speed Manual',
                'status' => 'sold'
            ],
            [
                'brand' => 'Nissan',
                'model' => 'Silvia S15',
                'year' => '2002',
                'price' => 650000000,
                'color' => 'Spec-R Orange',
                'mileage' => 58000,
                'description' => 'Nissan Silvia S15 Spec-R. Drift machine dengan SR20DET engine yang powerful.',
                'engine' => 'SR20DET Turbo 2.0L',
                'transmission' => '6-Speed Manual',
                'status' => 'available'
            ]
        ];

        foreach ($cars as $car) {
            Car::create($car);
        }
    }
}