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
        if(!isset($_SESSION)){
            session_start();
        }

        $_SESSION['nome'] = $_POST['nome'];
            $ConditionWhereName = rank::select('nome')->where('nome', $_POST['nome'])->get();
            if ( $ConditionWhereName->count() != 0 ){
                return back()->withErrors('Usuário já existente!');
            }

        return redirect('/question');
    }

    public function wn(Request $request){
        $ranks = new rank;
            /* sessão para receber o nome */
        if(!isset($_SESSION)){
            session_start();
        }
        /* str_ireplace (array) para retirar as " do salvamento*/
        /* json_encode para converter pra string */
        $ranks->nome = str_ireplace( array('"'), '', json_encode($_SESSION['nome']));
        $ranks->pontos = str_ireplace( array('"'), '', $cook = json_encode($_COOKIE['ponto']));
        $ranks->tempo = str_ireplace( array('"'), '', $cook = json_encode($_COOKIE['tempo']));


            $ranks->save();
                return redirect('/Win');
    }

    public function ls(Request $request){
        $ranks = new rank;
        if(!isset($_SESSION)){
            session_start();
        }

        $ranks->nome = str_ireplace( array('"'), '', json_encode($_SESSION['nome']));
        $ranks->pontos = str_ireplace( array('"'), '', $cook = json_encode($_COOKIE['ponto']));
        $ranks->tempo = str_ireplace( array('"'), '', $cook = json_encode($_COOKIE['tempo']));
            $ranks->save();
                return redirect('/Lose');
    }

    public function ta(Request $request){
        $ranks = new rank;
        if(!isset($_SESSION)){
            session_start();
        }

        $ranks->nome = str_ireplace( array('"'), '', json_encode($_SESSION['nome']));
        $ranks->pontos = str_ireplace( array('"'), '', $cook = json_encode($_COOKIE['ponto']));
        $ranks->tempo = str_ireplace( array('"'), '', $cook = json_encode($_COOKIE['tempo']));

            $ranks->save();
                return redirect('/TryAgain');
    }

    public function mostra_dados(){
        $ranks = new rank;

        $ranks = rank::orderBy('pontos', 'desc')->orderBy('tempo', 'asc')->get();
        return view('score',['ranks' => $ranks]);
    }
}
