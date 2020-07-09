<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Projectyear;
use App\NewsMedia;

class ProjectsController extends Controller
{
    public function index($year)
    {
        $year = Projectyear::where('year', $year)->first();
        if ($year == null)
            abort(404);
        return view('projects.index')
            ->with('year', $year);
    }

    public function read($year, Project $project)
    {
        return view('projects.blog')
            ->with('project', $project);
    }

    public function new(NewsMedia $new)
    {
        return view('projects.new')
            ->with('new', $new);
    }
}
