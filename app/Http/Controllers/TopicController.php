<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Topic;

class TopicController extends Controller
{
    
    public function show(Category $category, Topic $topic)
    {
        return view('pages.topic', [
            'category' => $category,
            'topic' => $topic
        ]);
    }
}
