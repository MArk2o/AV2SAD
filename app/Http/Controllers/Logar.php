<?php

namespace App\Http\Controlles;

use illuminate\Http\Request;

class Logar extends Controller
{
    public function index(){
        $email = "Email";
        $senha = "Senha";

        $dados = [
            'email'=>$email,
            'senha'=>$senha,
        ];
         
         return view('Login', $dados);
}}