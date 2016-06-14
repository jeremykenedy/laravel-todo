<div class="form-group">
	{{ Form::label('name', 'Task Name', ['class' => 'control-label col-sm-2']) }}
	<div class="col-sm-10">
		{{ Form::text('name', NULL, array_merge(['class' => 'form-control', 'placeholder' => 'Task Name'])) }}
	</div>
</div>

<div class="form-group">
	{{ Form::label('slug', 'Task Slug', ['class' => 'control-label col-sm-2']) }}
	<div class="col-sm-10">
		{{ Form::text('slug', NULL, array_merge(['class' => 'form-control', 'placeholder' => 'Task Slug'])) }}
	</div>
</div>

<div class="form-group">
	{{ Form::label('description', 'Description', ['class' => 'control-label col-sm-2']) }}
	<div class="col-sm-10">
		{{ Form::textarea('description', NULL, array_merge(['class' => 'form-control', 'placeholder' => 'Task Description'])) }}
	</div>
</div>

<div class="form-group">
	<div class="col-sm-10 col-sm-offset-2">
		<div class="input-group">
			<div class="checkbox">
				<label>
					{!! Form::checkbox('completed') !!} Completed
				</label>
			</div>
		</div>
	</div>
</div>

<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
		{{ Form::button('<span class="glyphicon glyphicon-'.$submit_icon.'" aria-hidden="true"></span> '.$submit_text, array('class'=>'btn btn-primary', 'type'=>'submit')) }}
    </div>
</div>