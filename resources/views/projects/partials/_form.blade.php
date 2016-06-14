<div class="form-group">
	{{ Form::label('name', 'Project Name', ['class' => 'control-label col-sm-2']) }}
	<div class="col-sm-10">
		{{ Form::text('name', NULL, array_merge(['class' => 'form-control', 'placeholder' => 'Project Name'])) }}
	</div>
</div>

<div class="form-group">
	{{ Form::label('slug', 'Project Slug', ['class' => 'control-label col-sm-2']) }}
	<div class="col-sm-10">
		{{ Form::text('slug', NULL, array_merge(['class' => 'form-control', 'placeholder' => 'Project Slug'])) }}
	</div>
</div>

<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
		{{ Form::button('<span class="glyphicon glyphicon-'.$submit_icon.'" aria-hidden="true"></span>&nbsp; '.$submit_text, array('class'=>'btn btn-primary', 'type'=>'submit')) }}
    </div>
</div>