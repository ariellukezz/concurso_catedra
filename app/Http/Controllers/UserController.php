<?php

namespace App\Http\Controllers;

use App\Models\User;
use Inertia\Inertia;

class UserController extends Controller
{
    public function index()
    {
        return Inertia::render('Users/Index', [
            'users' => User::paginate()
        ]);
    }

    public function getUsuario () {

    $res = User::select('nombres')
    ->join('candidatos','candidatos.usuario_id','users.id')
    ->where('estado', 1)
    ->get();

    $this->response['estado'] = $res->isNotEmpty();
    $this->response['datos'] = $res[0];
    return response()->json($this->response, 200);
    }
}
