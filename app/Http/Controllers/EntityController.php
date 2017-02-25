<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Entity;
use App\Models\Scene;

class EntityController extends Controller
{
    public function postEntity(Request $request){
        $scene_id = $request->input('scene_id');
        $position = $request->input('position');
        $rotation = $request->input('rotation');
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



    public static function generateTextString($entity){

    }
}
