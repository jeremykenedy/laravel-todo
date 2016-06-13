@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Edit Task "{{ $task->name }}"
                    </div>
                    <div class="panel-body">

                        {!! Form::model($task, ['method' => 'PATCH', 'route' => ['projects.tasks.update', $project->slug, $task->slug]]) !!}
                            @include('tasks/partials/_form', ['submit_text' => 'Edit Task'])
                        {!! Form::close() !!}

                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection