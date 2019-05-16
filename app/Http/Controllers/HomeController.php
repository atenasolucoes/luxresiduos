<?php

namespace luxresiduos\Http\Controllers;

use Illuminate\Http\Request;
use luxresiduos\Site;

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
        $site = Site::all()->first();

        return view('home')->with(compact('site'));
    }

    public function home(Request $request){
        $site = Site::all()->first();
     
        $site->update([
            'home_eng_ambiental' => $request->home_eng_ambiental,
            'home_seguranca' => $request->home_seguranca,
            'home_engenharia' => $request->home_engenharia,
            'home_gerenciamento' => $request->home_gerenciamento,        

        ]);
        $site->save();
     

        return redirect('/home');
    }
    public function institucional(Request $request)
    {
        $site = Site::all()->first();

        $site->update([
            'institucional_quem_somos' => $request->institucional_quem_somos,
            'institucional_resumo_quem_somos' => $request->institucional_resumo_quem_somos,
            'institucional_missao' => $request->institucional_missao,
            'institucional_visao' => $request->institucional_visao,
            'institucional_valores' => $request->institucional_valores,

        ]);

        $site->save();


        return redirect('/home');
    }
    public function servicos(Request $request)
    {
        $site = Site::all()->first();

        $site->update([
            'servicos_eng_ambiental' => $request->servicos_eng_ambiental,
            'servicos_seguranca' => $request->servicos_seguranca,
            'servicos_engenharia' => $request->servicos_engenharia,
            'servicos_gerenciamento' => $request->servicos_gerenciamento

        ]);

        $site->save();


        return redirect('/home');
    }
    public function venda_texto(Request $request)
    {
        $site = Site::all()->first();

        $site->update([
            'venda_texto' => $request->venda_texto

        ]);

        $site->save();


        return redirect('/home');
    }
    public function contato(Request $request)
    {
        $site = Site::all()->first();

        $site->update([
            'contato_telefone' => $request->contato_telefone,
            'contato_whatsapp' => $request->contato_whatsapp,
            'contato_email' => $request->contato_email,
            'contato_endereço' => $request->contato_endereço

        ]);

        $site->save();


        return redirect('/home');
    }
}
