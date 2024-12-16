<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Computer;
use App\Models\issues;
class issuesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $issues = issues::with('Computer')->paginate(5);
        return view('index' ,compact('issues'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $computers = Computer::get();
        return view('create', compact('computers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        issues::create($request->all());
        return redirect()->route('index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $issue = issues::findorFail($id);
        $computers = Computer::all();
        // echo($issue);
        return view('edit',compact('issue','computers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $issue = issues::findOrFail($id);
        $issue->update($request->all());
        return redirect()->route('index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $issue = issues::findOrFail($id);
        $issue->delete();
        return redirect()->route('index');
    }
}
