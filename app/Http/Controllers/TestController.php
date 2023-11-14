<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        session()->remove('number');
        $number = session()->get('number', 0);
        return view('tests.controller.test-controller')->with(compact('number'));
    }

    public function increment(Request $request)
    {
        $number = $request->session()->get('number', 0);
        $number++;
        $request->session()->put('number', $number);

        return response()->json(['number' => $number]);
    }


    public function processSelectedOption(Request $request)
    {
        $selectedOption = $request->input('option');
        // Handle the selected option (e.g., perform some processing)
        // Return the response to the client
        return response()->json(['result' => "You selected $selectedOption"]);
    }

    public function processColorOption(Request $request)
    {
        $selectedOption = $request->input('colorOption');
        // Handle the selected color option (e.g., perform some processing)
        // Return the response to the client
        return response()->json(['colorResult' => "You selected the color <span style='color: $selectedOption'>$selectedOption</span>"]);
    }

    public function processTextInput(Request $request)
    {
        $text = $request->input('text');
        // Handle the selected color option (e.g., perform some processing)
        // Return the response to the client
        return response()->json(['text' => "From Back-End: $text"]);
    }

    public function msg()
    {
        $msg = "This is a simple message.";
        return response()->json(['msg' => $msg]);
    }
}
