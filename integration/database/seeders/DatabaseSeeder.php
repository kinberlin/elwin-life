<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Abonne;
use App\Models\Motivation;
use DB;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            ['category_id' => '1', 'name' => 'Santé', 'description' => 'pensez à mettre une description'],
            ['category_id' => '5', 'name' => 'Formations', 'description' => 'pensez à mettre une description'],
            ['category_id' => '7', 'name' => 'Entrepreunariat', 'description' => 'pensez à mettre une description'],
            ['category_id' => '8', 'name' => 'Jeux Educatifs', 'description' => 'pensez à mettre une description'],
            ['category_id' => '9', 'name' => 'Traditions', 'description' => 'pensez à mettre une description'],
            ['category_id' => '10', 'name' => 'Humour', 'description' => 'pensez à mettre une description'],
            ['category_id' => '11', 'name' => 'Fables Africain', 'description' => 'pensez à mettre une description'],
            ['category_id' => '12', 'name' => 'Bien être', 'description' => 'pensez à mettre une description'],
            ['category_id' => '13', 'name' => 'Bien se nourri', 'description' => 'pensez à mettre une description'],
            ['category_id' => '14', 'name' => 'Bien se soigner', 'description' => 'pensez à mettre une description'],
            ['category_id' => '15', 'name' => 'Arts', 'description' => 'pensez à mettre une description'],
            ['category_id' => '16', 'name' => 'Musiques', 'description' => 'pensez à mettre une description'],
            ['category_id' => '17', 'name' => 'Fashion', 'description' => 'pensez à mettre une description'],
            ['category_id' => '18', 'name' => 'Carte de Voeux', 'description' => 'pensez à mettre une description'],
            ['category_id' => '19', 'name' => 'Pack Promos', 'description' => 'pensez à mettre une description'],
            ['category_id' => '20', 'name' => 'Fashion', 'description' => 'pensez à mettre une description'],
            ['category_id' => '21', 'name' => 'Pack Promos', 'description' => 'pensez à mettre une description'],
            ['category_id' => '22', 'name' => 'Carte de Voeux', 'description' => 'pensez à mettre une description']
            // Add more predefined data here...
        ]);
        DB::table('etat')->insert([
            ['id' => '1', 'masquer' => 'Visible'],
            ['id' => '2', 'masquer' => 'Masquer'],
        ]);
        DB::table('status')->insert([
            ['id' => '1', 'name' => 'Actif'],
            ['id' => '2', 'name' => 'Inactif'],
        ]);
        DB::table('info')->insert([
            ['id' => '1', 'phone' => '673955909', 'email' => 'info@elwin.com', 'address' => 'Rue Gallieni, Akwa, Douala - Cameroun', 'lat' => '40.712784', 'lon' => '-74.005941', 'country' => 'Cameroun', 'logo' => '', 'city' => 'Douala', 'name' => 'Elwin  S.A', 'caf' => '0']
        ]);
        DB::table('role')->insert([
            ['id' => '1', 'name' => 'Administrateur'],
            ['id' => '2', 'name' => 'Client'],
            ['id' => '3', 'name' => 'Chaînes'],
            ['id' => '4', 'name' => 'Publicités'],
            ['id' => '5', 'name' => 'Article'],
            ['id' => '6', 'name' => 'Vidéo'],
            ['id' => '7', 'name' => 'Annonces'],
            ['id' => '8', 'name' => 'Slides'],
            ['id' => '9', 'name' => 'Publicités/Annonces'],
            ['id' => '10', 'name' => 'Blog'],
            ['id' => '11', 'name' => 'Boutique']
        ]);
        DB::table('user')->insert([
            [
                'id' => '1',
                'firstname' => 'admin',
                'email' => 'admin@gmail.com',
                'phone' => '+237 ....',
                'adress' => 'Rue Gallieni, Akwa, Douala - Cameroun',
                'status' => '1',
                'country' => 'Cameroun',
                'city' => 'Douala',
                'password' => '$2y$10$TTZsd1wnss/igk3iJ.VFbOhkrTFlFZnurPJq6g0F4BCLvKSCadd6e',
                'role' => '1'
            ]
        ]);
    }
}