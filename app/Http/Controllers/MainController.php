<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Social;
use App\Models\Card;
use App\Models\Promotion;

class MainController extends Controller
{
    public function index(){
        $abouts = About::all();
        $socials = Social::all();
        $cards = Card::all();
        $promotions = Promotion::all();
        return view('index', compact('abouts', 'socials', 'cards', 'promotions'));
    }
}
