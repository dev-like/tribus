<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Ministrante;
use Illuminate\Http\Request;
use DB;
use Image;
use Storage;

class MinistrantesController extends Controller
{
    public function index(Request $request)
    {
      $ministrante = Ministrante::all();

      return view('admin.ministrantes.index', compact('ministrante'));
    }

    public function create()
    {
      $ministrante = Ministrante::all();

      return view('admin.ministrantes.create', compact('ministrantes'));
    }

    public function store(Request $request)
    {
      $this->validate($request, array(
        'nome'             => 'required',
        'imagem'           => 'sometimes|image|mimes:jpeg,png,jpg',
      ));

      $ministrante = new Ministrante;
      $ministrante->fill($request->all());

      if ($request->hasFile('imagem')) {
          $image = $request->file('imagem');
          $filename = time() . '.' . $image->getClientOriginalName();
          $location = public_path('uploads/ministrantes/' . $filename);
          Image::make($image)->save($location);
          $ministrante->imagem = $filename;
      }

      $ministrante->save();
      $request->session()->flash('success', 'Ministrante '.$ministrante->nome.' adicionado com sucesso.');
      return redirect()->route('ministrantes.index');
    }

    public function edit($id, Request $request)
    {
      $ministrante = Ministrante::findOrFail($id);
      return view('admin.ministrantes.edit', compact('ministrante'));
    }

    public function update(Request $request, $id)
    {
      $ministrante = Ministrante::find($id);

      $ministrante->fill($request->all());

      if ($request->hasFile('imagem')) {
        $image = $request->file('imagem');
        $filename = time() . '.' . $image->getClientOriginalName();
        $location = public_path('uploads/ministrantes/' . $filename);
        Image::make($image)->save($location);
        if ($ministrante->logo) {
            $oldFilename = $ministrante->logo;
            Storage::delete('uploads/ministrantes/'.$oldFilename);
        }
        $ministrante->logo = $filename;
      }

      $ministrante->save();
      $request->session()->flash('success', 'Ministrante '.$ministrante->nome.' alterado com sucesso.');
      return redirect()->route('ministrantes.index');
    }

    public function destroy($id)
    {
        $ministrante = Ministrante::find($id);
        $ministrante->delete();
        return [response()->json("success"), redirect('admin/ministrantes')];
    }
}
