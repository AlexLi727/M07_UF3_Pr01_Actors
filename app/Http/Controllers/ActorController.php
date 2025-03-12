<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ActorController extends Controller{

    public static function readActors(){
        $actors = DB::table("actors")->get();

        return $actors;
    }

    public function countActors(){
        $actors = ActorController::readActors();
        $actors_count = 0;

        foreach($actors as $actor){
            $actors_count++;
        }

        return $actors_count;
    }

    public function listActors(){
        $actors = ActorController::readActors();

    }
}