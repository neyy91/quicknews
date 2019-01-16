<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Bullet;

class IndexController extends Controller
{   
    public function index(Request $request) {
        $bullets = Bullet::all();
       
        $categorys = DB::table('bullets')->pluck('category')->unique();
        return view('layouts.main',['bullets' => $bullets, 'categorys'=> $categorys]);
    }

    public function filterByCategory(Request $request) {
       
        $cat_id = $request->cat_id;
        if ($cat_id == 'no filter' || !$cat_id){
            return redirect('/');
        }
        $categorys = DB::table('bullets')->pluck('category')->unique();
        $bullets = DB::table('bullets')->where('category',$cat_id)->get();

        return view('layouts.main',['bullets' => $bullets, 'categorys'=> $categorys]);
        // return ['bullets' => $bullets, 'categorys'=> $categorys];
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
        $categorys = DB::table('bullets')->pluck('category')->unique();
        return view('layouts.manager',['bullets' => $bullets, 'categorys'=> $categorys]);
    }

    public function addBullet() {

        if (view()->exists('layouts.add')) {
          
            return view('layouts.add');
        }
        abort(404);
    }

    

    public function editBullet($id) {
        if(!$id) {
            abort(404);
        }
        if (view()->exists('layouts.edit')) {
            $bullet = Bullet::findOrFail($id);
            return view('layouts.edit',['bullet'=>$bullet]);
        }
        abort(404);
    }

    public function delete($id) {
        if(!$id) {
            abort(404);
        }
        if (view()->exists('layouts.delete')) {
            $bullet = Bullet::findOrFail($id);
            return view('layouts.delete',['bullet'=>$bullet]);
        }
        abort(404);
    }



    






}
