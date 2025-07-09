<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Tag;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreJobRequest;
use App\Http\Requests\UpdateJobRequest;

class JobController extends Controller
{
    //
     public function index()
    {
        $jobs = Job::all()->groupBy('featured');

        $jobs = Job::latest()->with(['employer', 'tags'])->get()->groupBy('featured');

        
        return view('jobs.index', [
           'featuredJobs' => $jobs[1] ?? [],
             'jobs' => $jobs[0] ?? [],
              'tags' => Tag::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('jobs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreJobRequest $request)
    {
        //
        $attributes = $request->validate([
            'title' => ['required'],
            'salary' => ['required'],
            'location' => ['required'],
            'schedule' => ['required', Rule::in(['Part Time', 'Full Time'])],
            'url' => ['required', 'active_url'],
            'tags' => ['nullable'],
             ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Job $job,$request)
    {
        //
        $attributes['featured'] = $request->has('featured');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Job $job,$request,$attributes)
    {
        //
         $job = Auth::user()->employer->jobs()->create(Arr::except($attributes, 'tags'));
         
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateJobRequest $request, Job $job,$attributes)
    {
        //
        if ($attributes['tags'] ?? false) {
            foreach (explode(',', $attributes['tags']) as $tag) {
                $job->tag($tag);
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Job $job)
    {
        //
        return redirect('/');
    }
}

