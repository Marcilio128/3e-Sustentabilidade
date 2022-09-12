<?php

namespace App\Http\Controllers;

use App\Models\Rank;
use Illuminate\Http\Request;

class RankController extends Controller
{
    //navegação
    public function index()
    {
        return view('welcome');
    }

    public function quiz()
    {
        return view('quiz');
    }

    public function question()
    {
        return view('question');
    }

    public function ops(){
        return view('UcanMore');
    }

    // manipulação de dados
    public function usr(Request $request){
        $ranks = new rank;

        $ranks->nome = $request->nome;

        $ranks->save();
        return redirect('/question');
    }

    public function sv(){
        $ranks = new rank;
    
        $ranks->pontos = json_encode($_COOKIE['cookie']);
            $ranks->save();
                return redirect('/TryAgain');
    }
}
