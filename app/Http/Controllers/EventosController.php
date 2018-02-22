<?php

namespace admin\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Request;

class EventosController extends Controller {

	public function lista(){

		$eventos = DB::select('SELECT * FROM eventos');
		return view('eventos')->with('eventos', $eventos );
	}

	public function mostra(){
		$id = Request::route('id');
		$evento = DB::select('SELECT * FROM eventos where id_evento = ?', [$id]);
		return view('evento')->with('e', $evento[0]);
	}

	public function excluir(){

	}

	public function add(){
		return view('cadastrar');
	}

	public function adicionado(){
		$title = Request::input('title');
		$duracao = Request::input('duracao');
		$inicio = Request::input('data');
		$descricao = Request::input('descricao');
		$file = Request::input('file');
		DB::insert('INSERT INTO eventos (title_evento, duracao_evento, inicio_evento, description_evento, url_evento) VALUES (?,?,?,?,?)', array( $title, $duracao, $inicio,$descricao, $file ));

		// http://localhost:8000/evento/adicionado?title=Bootstrap+Treeview+davidgtest&duracao=3+semanas&data=2018-02-24&descricao=asdasdgasd+asdg+as+asdhasdhs+dhs+h&file=user2-160x160.jpg

		return view('adicionado')->with('title', $title);
	}

}