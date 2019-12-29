<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function artisan()
    {
        return view('base.artisan');
    }

    public function artisanMaker(Request $request)
    {
        dd($request->all());
        $prints = [];
        $models = explode(', ',$request->input('models'));
        //dd($models);
        foreach ($models as $model) {
            $prints[$model] = 'php artisan make:model ' . ucfirst($model) . ' -a && php artisan make:resource ' . ucfirst($model) . ' && php artisan make:resource '. ucfirst($model) .'Collection';
        }
        return view('base.maker')
            ->with('models', $prints);
    }
}
