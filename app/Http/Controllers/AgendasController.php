<?php

namespace App\Http\Controllers;

use App\Agenda;
use Illuminate\Http\Request;
use App\Http\Requests\AgendasFormRequest;

class AgendasController extends Controller
{
    public function index(Request $request)
    {
        $agendas = Agenda::query()
            ->orderBy(column: 'nome')
            ->get();
        $mensagem = $request->session()->get(key: 'mensagem');

        return view('agendas.index', compact('agendas', 'mensagem'));
    }

    public function create()
    {
        return view('agendas.create');
    }

    public function store(AgendasFormRequest $request)
    {
        $serie = Agenda::create($request->all());

        $request->session()
            ->flash(
                'mensagem',
                "Inclusão Realizada Com Sucesso!"
            );

        return redirect(to: '/agendas');
    }

    public function destroy(Request $request)
    {
        Agenda::destroy($request->id);
        $request->session()
            ->flash(
                'mensagem',
                "Exclusão Realizada Com Sucesso!"
            );

        return redirect(to: '/agendas');
    }

    public function update(AgendasFormRequest $request, $id)
    {
        $agendas = Agenda::findOrFail($id);
        $agendas->nome = $request->get('nome');
        $agendas->data = $request->get('data');
        $agendas->horaini = $request->get('horaini');
        $agendas->horater = $request->get('horater');
        $agendas->local = $request->get('local');
        $agendas->obs = $request->get('obs');
        $agendas->update();
        $request->session()
            ->flash(
                'mensagem',
                "Alteração Realizada Com Sucesso!"
            );

        return redirect(to: '/agendas');
    }
}
