<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use App\Models\Admin\Type;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::All();

        return view('admin.projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $types = Type::all();
        return view('admin.projects.create' , compact('types'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'name' => 'required|unique:projects',
                'description' => 'required',
                'img' => 'nullable|image',
                'type_id' => 'nullable|exists:types,id'
            ],
            [
                'name.required' => 'Il campo name deve essere compilato',
                'name.unique' => 'Esiste già un project con quel nome',
                'description.required' => 'Il campo Description deve essere compilato',
            ]
        );

        $form_data = $request->all();

        $newProject = new Project();
        
        $newProject->fill($form_data);
        // dd($newProject);
        $newProject->save();

        return redirect()->route('admin.project.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        return view('admin.projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        return view('admin.projects.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        $request->validate(
            [
                'name' => 'required|unique:projects',
                'description' => 'required',
                'img' => 'nullable|image',
                'type_id' => 'nullable| exists:types,id'
            ],
            [
                'name.required' => 'Il campo name deve essere compilato',
                'name.unique' => 'Esiste già un project con quel nome',
                'description.required' => 'Il campo Description deve essere compilato',
            ]
        );

        $form_data = $request->all();

        $project->update($form_data);

        return redirect()->route('admin.project.show', $project);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route('admin.project.index');
    }
}