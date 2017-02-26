<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Entity;
use App\Models\Scene;

class EntityController extends Controller
{
    public function postEntity($id, Request $request){
        //position xyz
        //position x - left right
        //position y - down up
        //positon z - away behind

        //rotation xyz
        //rotation x tilt up/down
        //rotation y rotate left right
        //rotation z clocks

        $scene_id = $id;
        $position = $this->positionCalc($request->input("position"));
        $rotation = 0;
        $value = $request->input('value');
        $title = $request->input('title');

        $entity = Entity::create([
            'scene_id' => $scene_id,
            'position' => $position,
            'rotation' => $rotation,
            'value' => $value
        ]);

        $scene = Scene::with('entities')->with('user')->where('id', $scene_id)->first();

        if(is_null($title)){
            $title = "Hello, World!";
        }

        $scene->title = $title;
        $scene->save();

        return view('create', [
            'scene' => $scene
        ]);

    }



    public function positionCalc($position){

         $positionX = 0;
         $positionY = 0;
         $positionZ = -1;

         if($position == 1){
             $positionX = -1;
             $positionY = 1;
         } else if($position == 2){
             $positionX = 0;
             $positionY = 1;
         } else if($position == 3){
             $positionX = 1;
             $positionY = 1;
         } else if($position == 4){
             $positionX = -1;
             $positionY = 0;
         } else if($position == 5){
             $positionX = 0;
             $positionY = 0;
         } else if($position == 6){
             $positionX = 1;
             $positionY = 0;
         } else if($position == 7){
             $positionX = -1;
             $positionY = -1;
         } else if($position == 8){
             $positionX = 0;
             $positionY = -1;
         }  else if($position == 9){
             $positionX = 1;
             $positionY = -1;
         }

         return $positionX . " " . $positionY . " " . $positionZ;

    }

    public function rotationCalc($rotation){

         $rotationX = 0;
         $rotationY = 0;
         $rotationZ = 0;

         if($rotation == 2){
             //Tilt up
             $rotationX = 30;
             $rotationY = 1;
         } else if($rotation == 3){
             $rotationX = 0;
             $rotationY = -30;
         } else if($rotation == 4){
             $rotationX = 0;
             $rotationY = 30;
         } else if($rotation == 5){
             $rotationX = -30;
             $rotationY = 0;
         }

         return $rotationX . " " . $rotationY . " " . $rotationZ;

    }
}
