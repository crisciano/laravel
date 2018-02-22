@extends('principal')

@section('conteudo')

<section id="cadastro">
	<div class="container">
		<div class="row">
			<div class="col-6 offset-3">
				<h2>cadastro</h2>
				<form class="form-evento" action="/evento/adicionado" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<label for="">title</label>
						<input type="text" name="title" class="form-control" >
					</div>
					<div class="form-group">
						<label for="">duração</label>
						<input type="text" name="duracao" class="form-control" >
						<small class="form-text text-muted">Semanas, meses, quinzenas...</small>
					</div>
					<div class="form-group">
						<label for="">inicio</label>
						<input type="date" name="data" class="form-control" >
					</div>
					<div class="form-group">
						<label for="">descrição</label>
						<textarea class="form-control" name="descricao" id="exampleFormControlTextarea1" rows="3"></textarea>
					</div>
					<div class="form-group">
					    <label for="exampleFormControlFile1">Example file input</label>
					    <input type="file" name="file" class="form-control-file" id="exampleFormControlFile1">
					</div>

					<button type="submit" class="btn btn-primary">Submit</button>
					
				</form>
				
			</div>
		</div>
	</div>
</section>


@stop