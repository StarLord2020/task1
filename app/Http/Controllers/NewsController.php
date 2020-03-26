<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    public function show()
    {
        $news = DB::table('news')->get();

        dd($news);
    }
}
