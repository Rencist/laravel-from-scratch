<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing
{
    public static function lmao(){
        return [
            [
                'id' => 1,
                'title' => 'Listing One',
                'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                Voluptatibus laudantium rerum molestiae, iure sint amet necessitatibus id iusto 
                adipisci aut!'
            ],
            [
                'id' => 2,
                'title' => 'Listing Two',
                'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                Voluptatibus laudantium rerum molestiae, iure sint amet necessitatibus id iusto 
                adipisci aut!'
            ]
            ];
    }

    public static function find($id){
        $listings = self::all();

        foreach($listings as $listing){
            if ($listing['id'] == $id){
                return $listing;
            }
        }

    }
}
