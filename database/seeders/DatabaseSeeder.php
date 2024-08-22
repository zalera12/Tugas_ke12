<?php

namespace Database\Seeders;

use App\Models\Cast;
use App\Models\Film;
use App\Models\Genre;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
                // Membuat 5 data user dan profile
                for ($i = 1; $i <= 5; $i++) {
                    $user = User::create([
                        'name' => "User $i",
                        'email' => "user$i@example.com",
                        'password' => Hash::make('password123'),
                    ]);
        
                    // Membuat data profile terkait dengan user tersebut
                    $user->profile()->create([
                        'umur' => rand(20, 35), // Umur acak antara 20 hingga 35
                        'bio' => "Bio for User $i",
                        'alamat' => "Address for User $i",
                    ]);
                }

                // Menambahkan data ke tabel categories
        $genres = ['Action', 'Comedy', 'Drama', 'Horror', 'Sci-Fi'];
        foreach ($genres as $genre) {
            Genre::create([
                'nama' => $genre,
            ]);
        }

        // Menambahkan data ke tabel films
        $genres = Genre::all(); // Ambil semua genre dari tabel genres
        for ($i = 1; $i <= 10; $i++) {
            Film::create([
                'judul' => "Film Title $i",
                'ringkasan' => "A brief summary of Film Title $i.",
                'tahun' => rand(2000, 2023), // Tahun acak antara 2000 hingga 2023
                'poster' => "path_to_poster_$i.jpg",
                'genre_id' => $genres->random()->id, // Ambil genre secara acak
            ]);
        }

         // Menambahkan data ke tabel casts
         for ($i = 1; $i <= 10; $i++) {
            Cast::create([
                'nama' => "Cast Name $i",
                'umur' => rand(20, 60), // Umur acak antara 20 hingga 60
                'bio' => "A brief biography of Cast Name $i.",
            ]);
        }

    }
}
