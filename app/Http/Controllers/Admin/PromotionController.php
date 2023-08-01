<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Promotion;

class PromotionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $promotions = Promotion::all();
        return view('admin.promotion.index', compact('promotions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.promotion.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
            $this->validate($request, [
                'title' => 'required',
                'text' => 'required',
                'link' => 'required',
                'url' => 'required',
            ]);

            $requestData = $request->all();

            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $image_name = time() . '.' . $file->getClientOriginalExtension();
                $file->move('images', $image_name);
                $requestData['image'] = $image_name;
            }


            Promotion::create($requestData);
            return redirect()->route('admin.promotion.index')->with('seccess', 'Promotion created saccessfuly');
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
    public function edit(Promotion $promotion)
    {
        return view('admin.promotion.edit', compact('promotion'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Promotion $promotion)
    {
        $this->validate($request, [
            'title' => 'required',
            'text' => 'required',
            'link' => 'required',
            'url' => 'required',
         ]);

         $requestData = $request->all();

         if ($request->hasFile('image')) {
             $file = $request->file('image');
             $image_name = time() . '.' . $file->getClientOriginalExtension();
             $file->move('images', $image_name);
             $requestData['image'] = $image_name;
         }


        $promotion->update($requestData);
        return redirect()->route('admin.promotion.index')->with('seccess', 'Promotion updeted saccessfuly');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Promotion $promotion)
    {
        $promotion->delete();
        return redirect()->route('admin.promotion.index')->with('seccess', 'Promotion deleted saccessfuly');
    }
}
