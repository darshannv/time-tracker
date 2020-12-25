<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\User;

class ProjectController extends Controller
{
   public function __construct() {
       $this->middleware('auth');
   }

   public function index() {
       return Projet::mine()->with('timers')->get()->toArray();
   }

   public function store(Request $request) {

    $data = $request->validate(['name' => 'required|between:2, 20']);

    $data = array_merge($data, ['user_id' => auth()->user()->id]);

    $project = Project::create($data);
    return $project ? array_merge($project->toArray(), ['timers' => []]) : false;
    
   }
}
