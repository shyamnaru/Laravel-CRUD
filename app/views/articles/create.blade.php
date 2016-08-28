@section('content')
<div class="container">
	<div class="row">
		<h1 class="section-header">Create Article</h1>
	</div>

	<div class="row">
		<div class="col-sm-12">
			{{ Form::open(array('action' => 'ArticleController@store')) }}
			@include('articles.partials.form')			
		<div class="form-group">
			{{ Form::submit('Save', array('class' => 'btn btn-primary')) }}
		</div>
			{{ Form::close() }}
		</div>
	</div>
</div>
@endsection