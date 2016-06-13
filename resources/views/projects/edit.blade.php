@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">

                        Edit Project

                    </div>
                    <div class="panel-body">

                        {!! Form::model($project, ['method' => 'PATCH', 'route' => ['projects.update', $project->slug]]) !!}
                            @include('projects/partials/_form', ['submit_text' => 'Edit Project'])
                        {!! Form::close() !!}

                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection