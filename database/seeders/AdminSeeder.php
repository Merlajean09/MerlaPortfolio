<?php

namespace Database\Seeders;
// use Illuminate\Database\UniqueConstraintViolationException;
// use Illuminate\Databaase\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        DB::table('users')->insert([
           [ 
            'role' => 'Admin',
            'name' => 'Merla Jean',
            'email' => 'merlajean@gmail.com',
            'password' => Hash::make('merlabuang')
           ]
        ]);

        DB::table('abouts')->insert([
            [ 
                'description' => 'Im Merla Jean Ner, an imaginative soul with a boundless passion for artistic expression. As an avid creator, I find inspiration in the beauty of the world around me and the endless possibilities of imagination. With a background deeply rooted in the arts, particularly in illustration and storytelling, Ive embarked on a journey to bring enchanting narratives to life through my work. From whimsical illustrations to captivating narratives, my goal is to transport viewers to fantastical realms and evoke emotions that linger long after the story ends.',
                'phone' => '09064219655',
                'email' => 'merlajean@gmail.com',
                'address' => 'Brgy. Cacao Hilongos Leyte',
            ]
         ]);
    }
}
