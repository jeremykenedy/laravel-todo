@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Create Project
                    </div>
                    <div class="panel-body">

                        {!! Form::model(new App\Project, array('route' => ['projects.store'], 'class' => 'form-horizontal', 'role' => 'form')) !!}
                            @include('projects/partials/_form', array('submit_text' => 'Create Project', 'submit_icon' => 'plus'))
                        {!! Form::close() !!}

                    </div>
                    <div class="panel-footer">
                        <a href="{{ route('projects.index') }}" class="btn btn-sm btn-info" type="button">
                            <span class="fa fa-reply" aria-hidden="true"></span> Back to Projects
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection