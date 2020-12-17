<?php

use Illuminate\Database\Seeder;

class products_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'productName' => 'Hurricane Viper Stroker Kit',
            'productDescription' => 'Performance-spec crankshaft for Dodge Viper, manufactured by Hurricane Manufacturings',
            'productPrice' => '2500000',
            'categoryID' => '3',
            'productStock' => '1',
            'productImage' => 'hurricane-viper-stoker-kit.jpg'
        ]);
        DB::table('products')->insert([
            'productName' => 'LS Based Crate Engine',
            'productDescription' => 'Used LS8 Equivalent Crate engine, engine brackets and stuts included',
            'productPrice' => '67000000',
            'categoryID' => '1',
            'productStock' => '1',
            'productImage' => '	LS-based-engine.jpg'
        ]);
        DB::table('products')->insert([
            'productName' => 'MecTronik ECU',
            'productDescription' => 'MecTronic Programmable ECU for Yamaha R3',
            'productPrice' => '6000000',
            'categoryID' => '2',
            'productStock' => '5',
            'productImage' => 'MecTronik-ECU.jpg'
        ]);
        DB::table('products')->insert([
            'productName' => 'MSD Coil Blaster',
            'productDescription' => 'MSD Universal Coil Blaster, plug and play for all vehicles from bikes to cars',
            'productPrice' => '2500000',
            'categoryID' => '2',
            'productStock' => '10',
            'productImage' => 'MSD-coil.jpg'
        ]);
        DB::table('products')->insert([
            'productName' => 'KTM RC390 Race Kit',
            'productDescription' => 'KTM RC390 Starter Kit for trackdays, 3 Months Limited Warranty',
            'productPrice' => '16000000',
            'categoryID' => '4',
            'productStock' => '1',
            'productImage' => 'RC390-race-kit.jpg'
        ]);
        DB::table('products')->insert([
            'productName' => 'Wiseco Forged Pistons (Pre-Order)',
            'productDescription' => 'Wiseco Double RIng Forged Pistons for 2UZ-FE, piston speed limit cappable of reaching up to 23 m/s which is suitable for long stroke modifications',
            'productPrice' => '25000000',
            'categoryID' => '3',
            'productStock' => '50',
            'productImage' => 'wiseco-forged-pistons.jpg'
        ]);
    }
}
