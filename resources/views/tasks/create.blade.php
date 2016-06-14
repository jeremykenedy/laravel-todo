@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Create Task for Project "{{ $project->name }}"
                    </div>
                    <div class="panel-body">

                        {!! Form::model(new App\Task, ['route' => ['projects.tasks.store', $project->slug], 'class'=>'form-horizontal', 'role' => 'form']) !!}
                            @include('tasks/partials/_form', array('submit_text' => 'Create Task', 'submit_icon' => 'plus'))
                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection