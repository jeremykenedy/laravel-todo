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


                        {!! Form::model(new App\Project, ['route' => ['projects.store']]) !!}
                            @include('projects/partials/_form', ['submit_text' => 'Create Project'])
                        {!! Form::close() !!}


                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection