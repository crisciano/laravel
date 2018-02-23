@extends('principal')

@section('conteudo')
	<section id="eventos">
		<div class="container">
			<div class="row">
					<div class="col-12">
						@if(old('title'))
						<div class="col-12 alert alert-success">
							Evento <strong>{{old('title')}}</strong> adicionando com sucesso !!
						</div>
						@endif

						@if(old('id'))
						<div class="col-12 alert alert-success">
							Evento <strong>{{old('id')}}</strong> excluido com sucesso !!
						</div>
						@endif
					</div>

				@foreach ($eventos as $e)
					<div class="col-4 mb-4">
						<div class="card">
							<img class="card-img-top" src="{{$e->url_evento}}" alt="Card image cap">
							<div class="card-block">
							<h4 class="card-title black"> {{$e->title_evento}} </h4>
							<p class="card-duracao">Duração: 
								<span class="bold"> {{$e->duracao_evento}} </span>
							</p>
							<p class="card-inicio">Início: 
								<span class="bold"> {{$e->inicio_evento}} </span>
							</p>
							<p class="card-text"> {{$e->description_evento}}</p>
							<a href="/eventos/mostra/{{$e->id_evento}}" class="btn btn-primary">quero saber mais</a>
							<a href="/eventos/excluindo/{{$e->id_evento}}" class="btn btn-danger">excluir</a>
							</div>
						</div>
					</div>
				@endforeach
				
			</div>
		</div>
	</section>
@stop