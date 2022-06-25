<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Branch;
class BranchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Branch::create([
            'name' => 'Alma Residences Iligan',
            'address' => 'Zamora Street Poblacion Iligan City, 9200',
            'cellphone' => '0942 649 5254',
            'telephone' => '228-2789',
        ]);

        Branch::create([
            'name' => 'Alming Guest House',
            'address' => 'Milestone Drive, San Miguel Tibanga, Iligan City, 9200',
            'cellphone' => '09326257153',
            'telephone' => '228-3262',
        ]);
        Branch::create([
            'name' => 'Famous Pension House I',
            'address' => 'North Gate, Brgy, San Miguel Tibanga, Iligan City, 9200',
            'cellphone' => '0942 650 3512',
            'telephone' => '228 2297',
        ]);
        Branch::create([
            'name' => 'Famous Pension House II',
            'address' => '#21 Milestone Drive, San Miguel, Tibanga, Iligan City',
            'cellphone' => '09322076880',
            'telephone' => '228-4488',
        ]);
        Branch::create([
            'name' => 'Flor – Al Mansion Iligan',
            'address' => 'General Aguinaldo Street Poblacion, Iligan City, 9200',
            'cellphone' => '09426338176',
            'telephone' => '228-2198',
        ]);

        Branch::create([
            'name' => 'D’Morvie Suites Iligan',
            'address' => '#27 A Bonifacio Avenue Saray – Tibanga, Iligan City 9200',
            'cellphone' => '0932 207 5953',
            'telephone' => '228-5302',
        ]);

        Branch::create([
            'name' => 'D’Morvie Suites - Velez',
            'address' => 'Yacapin-Velez St. Brgy. 11 Cagayan De Oro City, 9000',
            'cellphone' => '09421330267',
            'telephone' => '323-0294',
        ]);

        Branch::create([
            'name' => 'D’Morvie Suites – Capistrano',
            'address' => 'Capistrano-Velez St. Brgy. 10 Cagayan De Oro City, 9000',
            'cellphone' => '09422797410',
            'telephone' => '852-2015',
        ]);

        Branch::create([
            'name' => 'D’Morvie Suites – Lapasan',
            'address' => 'CM Recto Avenue, Lapasan Cagayan De Oro City, 9000',
            'cellphone' => '09426930146',
            'telephone' => '856-8117',
        ]);

        Branch::create([
            'name' => 'Flor-Al Mansion Butuan',
            'address' => 'JC Aquino Avenue Tandang Sora, Butuan City, 8600',
            'cellphone' => '09310773625',
            'telephone' => '815 9515',
        ]);

        Branch::create([
            'name' => 'Flor-Al Mansion Pasay',
            'address' => '527 A Brgy. 119 EDSA Cabrera Street, Pasay City, 1300',
            'cellphone' => '09434175118',
            'telephone' => '000 0000',
        ]);

        Branch::create([
            'name' => 'D’Morvie Suites Recto',
            'address' => 'Brgy. 35 D CM Recto St. Claveria Davao City, 8000',
            'cellphone' => '09425918521',
            'telephone' => '221 0075',
        ]);

        Branch::create([
            'name' => 'D’Morvie Suites San Pedro',
            'address' => 'Brgy. 2-A San Pedro Street, Poblacion, Davao City, 8000',
            'cellphone' => '09433881153',
            'telephone' => '285 3756',
        ]);

        Branch::create([
            'name' => 'Alma Residences Gensan',
            'address' => 'J. Catolico Avenue Sr, Brgy. Lagao General Santos City, 9500',
            'cellphone' => '09333538130',
            'telephone' => '877-5321',
        ]);

    }
}
