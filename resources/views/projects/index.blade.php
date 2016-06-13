@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default panel-table">
                    <div class="panel-heading">
                        <div class="row">
							<div class="panel-heading">
								Projects
								<a href="{{ url('/projects/create') }}" class="btn btn-sm btn-primary btn-create pull-right" type="button">
									<span class="fa fa-cog fa-plus" aria-hidden="true"></span> New Project
								</a>
							</div>
                        </div>
                    </div>
                    <div class="panel-body">
					    @if ( !$projects->count() )
						    <p>
	    						You have no projects
						    </p>
					    @else
	                        <table class="table table-striped table-bordered table-list">
	                            <thead>
	                                <tr>
	                                    <th class="text-center"><span class="fa fa-cog fa-fw" aria-hidden="true"></span></th>
	                                    <th class="hidden-xs">ID</th>
	                                    <th>Name</th>
	                                    <th>Tasks</th>
	                                </tr>
	                            </thead>
	                            <tbody>
						            @foreach( $projects as $project )
		                                <tr>
		                                    <td align="center">
								                {!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('projects.destroy', $project->slug))) !!}
													<a href="{{ route('projects.edit', array($project->slug)) }}" class="btn btn-default">
														<span class="fa fa-fw fa-pencil" aria-hidden="true"></span>
														<span class="hidden-xs">
															Edit
														</span>
														<span class="hidden-sm hidden-xs">
															Project
														</span>
													</a>
													{{Form::button('<span class="fa fa-fw fa-trash" aria-hidden="true"></span> <span class="hidden-xs">Delete</span> <span class="hidden-sm hidden-xs">Project</span>', array('type' => 'submit', 'class' => 'btn btn-danger'))}}
								                {!! Form::close() !!}
		                                    </td>
		                                    <td class="hidden-xs">
		                                    	{{ $project->id }}
		                                    </td>
		                                    <td>
		                                    	<a href="{{ route('projects.show', $project->slug) }}">{{ $project->name }}</a>
		                                    </td>
		                                    <td >
						                        @if ( !$project->tasks->count() )
						                            <p>
						                            	None
						                            </p>
						                        @else
					                                @foreach( $project->tasks as $task )
														<a href="{{ route('projects.tasks.show', [$project->slug, $task->slug]) }}" class="hidden-xs">
															{{ $task->name }}
															<br />
														</a>
					                                @endforeach
						                            <a href="{{ route('projects.show', $project->slug) }}" class="visible-xs">
						                            	{{ $project->tasks->count() }}
						                            </a>
						                        @endif
		                                    </td>
		                                </tr>
						            @endforeach
	                            </tbody>
	                        </table>
					    @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection