<?php

namespace App\Http\Controllers;

use App\Project;

// use App\User;


use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        // $users = User::all();

        //  return $users;
        // return $projects;

        return view('projects.index', compact('projects'));
    }

    public function create(){

        return view('projects.create');

    }

    public function store(){
        $projects = new Project();

        $projects->title = request('title');
        $projects->description = request('description');

        $projects->save();

        return redirect('/projects');

        // return request()->all();

    }


        public function edit($id)
        {
            $project = Project::find($id);
            return view('projects.edit', compact('project'));
        }

        
        public function update($id)

        {
            $project = Project::find($id);
            $project->title = request('title');
            $project->description = request('description');
    
            $project->save();
    
            return redirect('/projects');

            // dd(request()->all());
        }

       
        public function destroy($id)
        {
            $projects = Project::find($id);
            $projects->delete();

            return redirect('/projects');

            // dd('delete' . $id);
        }


}
