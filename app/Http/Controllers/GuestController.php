<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

// Classe de Controller de Usuário não-autenticado
class GuestController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => ['home']]);
    }
    
    public function home()
    {
        return view("pages.home");
    }
    
    public function createUser()
    {
        // Caso o usuário não esteja autenticado, permita que seja acessada a página de criação de usuário
        return view('pages.user.create');
    }
}
