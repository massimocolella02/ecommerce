<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            'Abbigliamento e Moda',
            'Elettronica',
            'Casa e Arredamento',
            'Sport e Tempo Libero',
            'Bellezza e Cura Personale',
            'Alimentari e Bevande',
            'Libri, Film e Musica',
            'Salute e Benessere',
            'Animali domestici',
            'Giardino e Giardinaggio',
            'Gioielli e Orologi',
            'Articoli per Bambini e Neonati',
            'Elettroutensili e Fai da Te',
            'Articoli per Ufficio',
            'Auto e Moto',
        ];

        foreach ($categories as $elem) {
            $newCategory = new Category();
            $newCategory->name = $elem;
            $newCategory->slug = Str::slug($elem, '-');
            $newCategory->save();
        };
    }
}
