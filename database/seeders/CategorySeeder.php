<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SubCategory;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create(
            ['categories_type'     => 'Sosial dan Kependudukan',
             'id_service'           => 1
            ]
        );
        Category::create(
            ['categories_type'     => 'Ekonomi dan Perdagangan',
             'id_service'           => 1
            ]
        );
        Category::create(
            ['categories_type'     => 'Pertanian dan Pertambangan',
             'id_service'           => 1
            ]
        );
        Category::create(
            ['categories_type'     => 'Pegawai',
             'id_service'           => 2
            ]
        );
    }
}
