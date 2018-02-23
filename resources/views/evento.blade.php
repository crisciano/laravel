@extends('principal')

@section('conteudo')
	<section id="eventos">
		<div class="container">
			<div class="row">

				<div class="col-4 mb-4">
					<div class="card">
						<img class="card-img-top" src="../../{{$e->url_evento}}" alt="Card image cap">
						<div class="card-block">
						<h4 class="card-title black"> {{$e->title_evento}}</h4>
						<p class="card-duracao">Duração: 
							<span class="bold">{{$e->duracao_evento}}</span>
						</p>
						<p class="card-inicio">Início: 
							<span class="bold">{{$e->inicio_evento}}</span>
						</p>
						<p class="card-text"> {{$e->description_evento }}</p>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</section>
@stop
	