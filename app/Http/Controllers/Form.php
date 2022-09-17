<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Form extends Controller
{
    public function home() {
        return view('welcome');
    }

    public function landing(){
        return view('landingpage');
    }

    public function formu($code=null){
        if($code=='1234'){
            $nombre='Marco Almanza Ibarra';
            $email= "marco@gmail.com";
            $comentario="Hola, cómo estás?";
        }else{
            $nombre='';
            $email= '';
            $comentario='';
        }
    
        return view('form',compact('code','nombre', 'email', 'comentario'));
    }

    public function recibirForm(request $request){
        $request->validate([
            'nombre' => 'required|max:50|min:10',
            'correo'=> ['required', 'email'],
            'comentario' => 'required|max:255|min:3',
        ]);//validar que han ingresado
    }


}

