<?php
namespace App\Http\Controllers;

use App\Models\Fuente;


class MainController extends Controller {

    public function dashboard() {

        $fuentes = Fuente::oldest()->get();

        return view('dashboard/dashboard')->with(compact('fuentes'));
    }

}
