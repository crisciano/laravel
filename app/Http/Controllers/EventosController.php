<?php

namespace admin\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Request;
use admin\Evento;

class EventosController extends Controller {

	public function __construct()
    {
        $this->middleware('auth');
    }

	public function lista(){

		// $eventos = DB::select('SELECT * FROM eventos');
		$eventos = Evento::all();
		return view('eventos')->with('eventos', $eventos );
	}

	public function mostra($id){
		$evento = DB::select('SELECT * FROM eventos where id_evento = ?', [$id]);
		return view('evento')->with('e', $evento[0]);
	}

	public function add(){
		return view('cadastrar');
	}

	public function adicionado(){
		$title = Request::input('title');
		$duracao = Request::input('duracao');
		$inicio = Request::input('data');
		$descricao = Request::input('descricao');
		$file = Input::file('file');

		Input::hasFile($file);

		$destinationPath = public_path().DIRECTORY_SEPARATOR.'files';
	    $name = uniqid(date('HisYmd'));
		$ext = $file->getClientOriginalExtension();
		$dest = 'files';
		$fileName = "{$destinationPath}/{$name}.{$ext}";

	    $file->move($destinationPath, $fileName);

	    $url = "{$dest}/{$name}.{$ext}";

	   	$insert = array($title, $duracao, $inicio, $descricao, $url);

		DB::insert('INSERT INTO eventos (title_evento, duracao_evento, inicio_evento, description_evento, url_evento) VALUES (?,?,?,?,?)', $insert);

		// return view('eventos')->with('title', $title);
		return redirect('/eventos')->withInput(Request::only('title'));
	}

	public function excluindo($id){
		$evento = DB::delete('DELETE FROM eventos where id_evento = ?', [$id]);
		return redirect('/eventos')->withInput(Request::only('id'));
	}

	public function eventosJson(){
		$eventos = DB::select('SELECT * FROM eventos');
		return response()->json($eventos);
	}

}