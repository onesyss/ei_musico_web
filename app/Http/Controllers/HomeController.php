<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $cadastro_musicos=DB::table('musicos')
        ->get();
        
        return view('home',['musicos' => $cadastro_musicos]);
    }


    public function post_index(Request $req)
    {
        
    
        $imagem = base64_encode(file_get_contents($req->file('avatar')));
        
        DB::table('musicos')->insert(
            ['nome'=> $req->input('nome') ,
            'ususario_inst' => $req->input('usuario_insta'),
            'instrumento'=> $req->input('instrumento'),
            'descricao' => $req->input('descricao'),
            'telefone' => $req->input('telefone'),
            'latitude' => $req->input('latitude'),
            'longitude' => $req->input('longitude'),
            'avatar' => $imagem,
        ]);
       
        return redirect()->to(url()->previous())->with('success', 'Solicitação enviada!');

    }

    public function delete_musico(Request $req){
        
        DB::table('musicos')->where('id', '=',$req->input('delete_musico'))->delete();

        return redirect()->to(url()->previous())->with('success', 'Solicitação enviada!');
    }
}
