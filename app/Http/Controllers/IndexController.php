<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Bullet;

class IndexController extends Controller
{   
    public function index(Request $request) {
        $bullets = Bullet::all();
       
        $categorys = Bullet::pluck('category')->unique();
        return view('layouts.main',['bullets' => $bullets, 'categorys'=> $categorys]);
    }

    public function filterByCategory(Request $request) {
       
        $cat_id = $request->cat_id;
        if ($cat_id == 'no filter' || !$cat_id){
            return redirect('/');
        }
        $categorys = Bullet::pluck('category')->unique();
        $bullets = Bullet::where('category',$cat_id)->get();

        return view('layouts.main',['bullets' => $bullets, 'categorys'=> $categorys]);
    }

    public function redirectToBullet($id)
    {   
        if(!$id) {
            abort(404);
        }
        $bullet = Bullet::findOrFail($id);
        
        return view('layouts.bullet', ['bullet' => $bullet]);
    }

    public function manager(Request $request) {
        $bullets = Bullet::all();
        $categorys = Bullet::pluck('category')->unique();
        return view('layouts.manager',['bullets' => $bullets, 'categorys'=> $categorys]);
    }

    public function addBullet(Request $request) {

        if (view()->exists('layouts.add')) {
            if ($request->title && $request->text && $request->category) {

                $bullet = new Bullet;
                $bullet->title = $request->title;
                $bullet->text = $request->text;
                $bullet->category = $request->category;
                $bullet->save();

                return redirect('/');
            }
          
            return view('layouts.add');
        }
        abort(404);
    }

    public function editBullet(Request $request,$id) {
        if(!$id) {
            abort(404);
        }
        if ($request->title && $request->text && $request->category) {
            $bullet = Bullet::findOrFail($id);
            $bullet->title = $request->title;
            $bullet->text = $request->text;
            $bullet->category = $request->category;
            $bullet->save();
            return redirect('/manager');
        }
        if (view()->exists('layouts.edit')) {
            $bullet = Bullet::findOrFail($id);
            return view('layouts.edit',['bullet'=>$bullet]);
        }
        abort(404);
    }

    public function delete(Request $request,$id) {

        if ($request->isMethod('get') && $id) {
            $bullet = Bullet::findOrFail($id)->delete();
            return redirect('/manager');
        }

        abort(404);
    }



    






}
