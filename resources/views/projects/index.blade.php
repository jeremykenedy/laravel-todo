@extends('layouts.app')

@section('content')
	<div class="container">
	    <div class="row">

		    <div class="col-md-10 col-md-offset-1">
		        <div class="panel panel-default">
		            <div class="panel-heading">
		            		Projects
		            	</div>
		            <div class="panel-body">

					    @if ( !$projects->count() )
					        You have no projects
					    @else
					        <ul>
					            @foreach( $projects as $project )
					                <li><a href="{{ route('projects.show', $project->slug) }}">{{ $project->name }}</a></li>
					            @endforeach
					        </ul>
					    @endif

		            </div>
		        </div>
		    </div>

	    </div>
	</div>
@endsection
