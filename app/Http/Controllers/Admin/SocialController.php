<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Social;

class SocialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $socials = Social::all();
        return view('admin.social.index', compact('socials'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.social.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'icon' => 'required',
            'url' => 'required',
         ]);

         Social::create($request->all());
         return redirect()->route('admin.social.index')->with('seccess', 'Social created saccessfuly');
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
    public function edit(Social $social)
    {
        return view('admin.social.edit', compact('social'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Social $social)
    {
        $this->validate($request, [
            'icon' => 'required',
            'url' => 'required',
         ]);

         $social->update($request->all());
         return redirect()->route('admin.social.index')->with('seccess', 'Social updated saccessfuly');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Social $social)
    {
        $social->delete();
        return redirect()->route('admin.social.index')->with('seccess', 'Social deleted saccessfuly');
    }
}
