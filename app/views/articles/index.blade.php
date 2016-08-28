@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10"><h1 class="section-header">Articles</h1></div>
		<div class="col-md-2">{{ link_to_action('ArticleController@create', 'Add', array(), array('class' => 'btn btn-primary')) }}</div>
	</div>

	<div class="row">
		<table class="table">
		<tr>
			<th>Title</th>
			<th>Body</th>
			<th>Created</th>
			<th>Updated</th>
			<th>Actions</th>
		</tr>
		@foreach($articles as $article)
		<tr>
			<td>{{e($article->title)}}</td>
			<td>{{e($article->body)}}</td>
			<td>{{$article->created_at}}</td>
			<td>{{$article->updated_at}}</td>
			<td>
				{{ Form::model($article, array('method'=>'DELETE', 'action' => array('ArticleController@destroy', $article->id))) }}
					{{ link_to_action('ArticleController@edit', 'Edit',array('id'=>$article->id),array('class' => 'btn btn-primary')) }}	
					{{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
				{{ Form::close() }}
			</td>
		<tr>
		@endforeach
		</table>
	</div>
</div>
@endsection