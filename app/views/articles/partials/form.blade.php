<div class="row">
	<div class="form-group">
		{{ Form::label('title', 'Title *:') }}
		{{ Form::text('title', null, array('class'=>'form-control', 'value'=>Input::old('title'))) }}
	</div>		
	<div class="form-group">
		{{ Form::label('body', 'Body :') }}
		{{ Form::textarea('body', null, array('class'=>'form-control', 'value'=>Input::old('body'))) }}
	</div>	
</div>