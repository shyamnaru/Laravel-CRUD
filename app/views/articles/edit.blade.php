@section('content')
<div class="container">
	<div class="row">
		<h1 class="section-header">Edit Article</h1>
	</div>

	<div class="row">
		<div class="col-sm-12">
			{{ Form::model($article, array('method'=>'PUT', 'action' => array('ArticleController@update', $article->id))) }}
			@include('articles.partials.form')			
		<div class="form-group">
			{{ Form::submit('Save', array('class' => 'btn btn-primary')) }}
		</div>
			{{ Form::close() }}
		</div>
	</div>
</div>
@endsection