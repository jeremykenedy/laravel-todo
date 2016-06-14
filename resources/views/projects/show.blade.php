@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default panel-table">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="panel-heading">
                                {{ $project->name }} Tasks
                                <a href="/projects/{{$project->slug}}/tasks/create" class="btn btn-sm btn-primary btn-create pull-right" type="button">
                                    <span class="fa fa-plus" aria-hidden="true"></span> New Task
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        @if ( !$project->tasks->count() )
                            There are no tasks. <a href="/projects/{{$project->slug}}/tasks/create">Create one</a>.

                        @else
                            <table class="table table-striped table-bordered table-list">
                                <thead>
                                    <tr>
                                        <th>Task</th>
                                        <th class="hidden-xs">Description</th>
                                        <th class="text-center"><span class="fa fa-cog fa-fw" aria-hidden="true"></span></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach( $project->tasks as $task )
                                        <tr>

                                            <td>
                                                <a href="{{ route('projects.tasks.show', [$project->slug, $task->slug]) }}">
                                                    {{ $task->name }}
                                                </a>
                                            </td>
                                            <td class="hidden-xs">
                                                {{ $task->description }}
                                            </td>
                                            <td align="center">
                                                {!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('projects.tasks.destroy', $project->slug, $task->slug))) !!}

                                                    <a href="{{ route('projects.tasks.show', array($project->slug, $task->slug)) }}" class="btn btn-default">
                                                        <span class="fa fa-fw fa-eye" aria-hidden="true"></span>
                                                        <span class="hidden-xs">
                                                            View
                                                        </span>
                                                        <span class="hidden-sm hidden-xs">
                                                            Task
                                                        </span>
                                                    </a>

                                                    <a href="{{ route('projects.tasks.edit', array($project->slug, $task->slug)) }}" class="btn btn-warning">
                                                        <span class="fa fa-fw fa-pencil" aria-hidden="true"></span>
                                                        <span class="hidden-xs">
                                                            Edit
                                                        </span>
                                                        <span class="hidden-sm hidden-xs">
                                                            Task
                                                        </span>
                                                    </a>

                                                    {{Form::button('<span class="fa fa-trash fa-fw" aria-hidden="true"></span> <span class="hidden-xs">Delete</span> <span class="hidden-sm hidden-xs">Task</span>', array('type' => 'submit', 'class' => 'btn btn-danger'))}}

                                                {!! Form::close() !!}

                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @endif
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