<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Player;

class UserController
{
    public function getUserInfosById(int $id) {
        $q = User::query()->where("id", "=", $id)->firstOrFail()
            ->select("id", "player_id", "discord_user_id")
            ->with("player:id,login")
            ->with("discord_user:id,username,global_name,discord_id,avatar_hash")
            ->get();

        return $q->makeHidden(["player_id", "discord_user_id"]);
    }

    public function getUserInfosByPlayerId(int $player_id) {
        $q = User::query()->where("player_id", "=", $player_id)->firstOrFail()
            ->select("id", "player_id", "discord_user_id")
            ->with("player:id,login")
            ->with("discord_user:id,username,global_name,discord_id,avatar_hash")
            ->get();

        return $q->makeHidden(["player_id", "discord_user_id"]);
    }

    public function getUserInfosByPlayerName(string $player_name) {
        $p_id = Player::where("login", "=", $player_name)->firstOrFail();

        return $this->getUserInfosByPlayerId($p_id->id);
    }
}
