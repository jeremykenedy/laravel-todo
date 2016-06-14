@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">

                        {!! link_to_route('projects.show', $project->name, [$project->slug]) !!} -
                        {{ $task->name }}

                    </div>
                    <div class="panel-body">

						{{ $task->description }}

                    </div>
                    <div class="panel-footer">
                        <a href="{{ route('projects.show', $project->slug) }}" class="btn btn-sm btn-info" type="button">
                            <span class="fa fa-reply" aria-hidden="true"></span> Back to {{ $project->name }}
                        </a>
                        <a href="{{ route('projects.tasks.edit', array($project->slug, $task->slug)) }}" class="btn btn-sm btn-warning">
                            <span class="fa fa-fw fa-pencil" aria-hidden="true"></span>
                            <span class="hidden-xs">
                                Edit
                            </span>
                            <span class="hidden-sm hidden-xs">
                                Task
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection