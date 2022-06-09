<?php

namespace App\Http\Controllers;

use App\Models\job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index(){
        $jobs = job::online()->latest()->get();
        return view('jobs.index', [
            'jobs' =>$jobs
        ]);
    }
}
