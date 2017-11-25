<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

/**
 * TOPページのコントローラ
 */
class TopController extends Controller
{
    public function index()
    {
        $list = ['apple', 'orange', 'grape'];
        $name = 'fruit';

        // return view('pc.Top.index')->with([
        //     'name' => $name,
        //     'list' => $list
        // ]);

       return view('pc.Top.index', compact('name','list'));
    }
}
