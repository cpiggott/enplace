<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Validator;
use JavaScript;

use Carbon\Carbon;
use Ramsey\Uuid\Uuid;

use App\Models\EnplaceUser;
use App\Models\Scene;

class LandingController extends Controller
{

    public function getHome(){
        return view('welcome');
    }

    public function showHello(){
        return view('create');
    }

    public function postScene(Request $request){

        $validator = Validator::make($request->all(), [
            'email' => 'required|email'
        ]);

        if ($validator->fails()) {
            abort(400, $validator->errors());
        } else {
            $email = $request->input('email');

            $user = EnplaceUser::where('email', $email)->first();

            if(is_null($user)){
                $user = EnplaceUser::create([
                    'email' => $email
                ]);
            }

            $uuid4 = Uuid::uuid4();
            $uuid = $uuid4->toString();

            $scene = Scene::create([
                'title' => 'Hello World!',
                'shareable_link' => 'hello',
                'editable_link' => 'hello',
                'uuid' => $uuid,
                'enplace_user_id' => $user->id
            ]);

            $scene_id = $scene->id;

            $base_url = config('app.url');

            $share_url = $base_url . 'scene/' . $scene_id;
            $edit_url = $base_url . 'scene/' . $scene_id . '/edit' . '/' . $uuid;

            $scene->shareable_link = $share_url;
            $scene->editable_link = $edit_url;
            $scene->save();

            $scene = Scene::with('entities')->with('user')->where('id', $scene_id)->first();

            return view('create', [
                'scene' => $scene
            ]);

        }
    }

    public function getScene($id, Request $request){
        $scene = Scene::with('entities')->with('user')->where('id', $id)->first();

            // return view('create', [
            //     'scene' => $scene
            // ]);
    }
}
