<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        return view('index');
    }

    public function login()
    {
        return view('login');
    }

    public function filtrarPorAlumnos()
    {
        return view('alumnos');
    }
    
    public function filtrarPorResponsables()
    {
        return view('responsables');
    }

    public function eventos()
    {
        return view('eventos');
    }

    public function notificaciones()
    {
        return view('notificaciones');
    }

    public function logout()
    {
        return view('login');
    }
}
