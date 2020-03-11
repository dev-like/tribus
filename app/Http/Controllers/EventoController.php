<?php
namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Evento;
use Illuminate\Http\Request;

class EventoController extends Controller
{
    public function index()
    {
      $evento = Evento::get();
      $evento = count($evento) ? $evento[0] : new Evento();

      return view('admin.evento.index', ['evento' => $evento]);
    }

    public function create()
    {
      return view('admin.evento.index');
    }

    public function store(Request $request)
    {
      $this->validate($request, array(

      ));
      $requestData = $request->all();
      $evento = Evento::create($requestData);

      $request->session()->flash('success', 'Dados do evento cadastrados com sucesso.');
      return redirect('admin/evento')->with('flash_message', 'Quem Somos adicionado!');
    }

    public function edit($id)
    {
      $evento = Evento::findOrFail($id);
      return view('admin.evento.edit', compact('evento'));
    }

    public function update(Request $request, $id)
    {
      $requestData = $request->all();
      $evento = Evento::findOrFail($id);
      $evento->update($requestData);

      $request->session()->flash('success', 'Registro modificado com sucesso.');
      return redirect('admin/evento')->with('flash_message', 'Quem somos alterado com sucesso !');
    }
}
