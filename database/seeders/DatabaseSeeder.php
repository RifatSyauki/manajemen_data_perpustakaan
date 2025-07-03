<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Users;
use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Admin::create();
        $books = [
            [
                'title' => 'Kalkulus',
                'author' => 'Dale Varberg, Purcell, Edwin J, Rigdon, Steven E',
                'isbn' => '978-979-033-937-8',
                'Publisher' => 'Erlangga, 2010 ',
                'publication' => 2010,
                'Edition' => '9',
                'shelf' => '500',
                'availability' => '3'
            ]
        ];
        $users = [
            [
                'username' => 'Andi',
                'email' => 'andi@gmail.com',
                'password' => Hash::make('andi123')
            ],
            [
                'username' => 'Budi',
                'email' => 'budi@gmail.com',
                'password' => Hash::make('budi123')
            ],
            [
                'username' => 'Caca',
                'email' => 'caca@gmail.com',
                'password' => Hash::make('caca123')
            ]
        ];

        foreach($users as $user) {
            Users::create($user);
        }

        Admin::create([
            'username' => 'admin',
            'password' => Hash::make('admin'),
        ]);

        foreach($books as $book){
            Book::create($book);
        }
    }
}
