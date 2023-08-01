<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Card;

class CardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cards = Card::all();
        return view('admin.card.index', compact('cards'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.card.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'text' => 'required',
            'number' => 'required',
            'btn' => 'required',
         ]);

         $requestData = $request->all();

         if ($request->hasFile('image')) {
             $file = $request->file('image');
             $image_name = time() . '.' . $file->getClientOriginalExtension();
             $file->move('images', $image_name);
             $requestData['image'] = $image_name;
         }


        Card::create($requestData);
        return redirect()->route('admin.card.index')->with('seccess', 'Card created saccessfuly');
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
    public function edit(Card $card)
    {
        return view('admin.card.edit', compact('card'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Card $card)
    {
        $this->validate($request, [
            'title' => 'required',
            'text' => 'required',
            'number' => 'required',
            'btn' => 'required',
         ]);

         $requestData = $request->all();

         if ($request->hasFile('image')) {
             $file = $request->file('image');
             $image_name = time() . '.' . $file->getClientOriginalExtension();
             $file->move('images', $image_name);
             $requestData['image'] = $image_name;
         }


        $card->update($requestData);
        return redirect()->route('admin.card.index')->with('seccess', 'Card updated saccessfuly');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Card $card)
    {
        $card->delete();
        return redirect()->route('admin.card.index')->with('seccess', 'Card deleted saccessfuly');
    }
}
