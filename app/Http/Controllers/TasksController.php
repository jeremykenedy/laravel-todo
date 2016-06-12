<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\Task;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class TasksController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

	/**
	 * Display a listing of the resource.
	 *
	 * @param  \App\Project $project
	 * @return Response
	 */
	public function index(Project $project)
	{
		return view('tasks.index', compact('project'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @param  \App\Project $project
	 * @return Response
	 */
	public function create(Project $project)
	{
		return view('tasks.create', compact('project'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \App\Project $project
	 * @return Response
	 */
	public function store(Project $project)
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Project $project
	 * @param  \App\Task    $task
	 * @return Response
	 */
	public function show(Project $project, Task $task)
	{
		return view('tasks.show', compact('project', 'task'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Project $project
	 * @param  \App\Task    $task
	 * @return Response
	 */
	public function edit(Project $project, Task $task)
	{
		return view('tasks.edit', compact('project', 'task'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \App\Project $project
	 * @param  \App\Task    $task
	 * @return Response
	 */
	public function update(Project $project, Task $task)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Project $project
	 * @param  \App\Task    $task
	 * @return Response
	 */
	public function destroy(Project $project, Task $task)
	{
		//
	}

}
