<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\News;

class NewsController extends Controller
{

    News::all();
    return view('news.index', ['news' => $news]);
}
