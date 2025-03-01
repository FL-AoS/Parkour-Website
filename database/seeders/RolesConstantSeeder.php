<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesConstantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("roles")->insert([
            ["name" => "founder", "display_name" => "Founder", "game_group" => "admin", "color" => 0xff3333],
            ["name" => "developer", "display_name" => "Developer", "game_group" => "admin", "color" => 0xff3333],
            ["name" => "admin", "display_name" => "Admin", "game_group" => "admin", "color" => 0xff3333],
            ["name" => "moderator", "display_name" => "Moderator", "game_group" => "moderator", "color" => 0x33ff55],
            ["name" => "guard", "display_name" => "Guard", "game_group" => "guard", "color" => 0x3363ff],
            ["name" => "trusted", "display_name" => "Trusted", "game_group" => "trusted", "color" => 0x9e9e9e]
        ]);
    }
}
