<?php

namespace App\Http\Controllers;
use App\Models\Veiculo;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $sql = 'Select * from veiculo v ';
        $veiculos = \DB::select($sql);
        return view('dashboard',['veiculos' => $veiculos]);
    }
}
