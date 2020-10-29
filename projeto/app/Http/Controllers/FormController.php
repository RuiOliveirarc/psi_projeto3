<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function entrada(){
    	return view('entrada');
    }

     public function onde(){
    	return view('ondeestamos');
    }

    public function noticias(){
    	return view('noticias');
    }

    public function contacto(){
    	return view('contacto');
    }

    public function empresa(){
    	return view('empresa');
    }


    public function mostrarForm(){
        return view('contacto');
    }

    public function processarForm(Request $request)
    {
        $nome=$request->nome;
        $morada=$request->morada;
        $telemovel=$request->telemovel;

        return view('form-enviado', [
            'nome'=>$nome,
            'morada'=>$morada,
            'telemovel'=>$telemovel
        ]);
    }
}
