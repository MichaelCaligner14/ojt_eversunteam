<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EverChatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ever_chats')->insert([
            'name' => 'General'
        ]);
        DB::table('ever_chats')->insert([
            'name' => 'EverChat'
        ]);
    }
}
