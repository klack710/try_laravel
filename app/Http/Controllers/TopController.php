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
        return view('pc.Top.index');
    }
}
