<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class ClubController extends Controller
{
    public function index(): View
    {
        $clubs = [
            ['name' => 'AI & Robotics', 'category' => 'Tech', 'day' => 'Rabu'],
            ['name' => 'Gamelan Nusantara', 'category' => 'Arts', 'day' => 'Jumat'],
            ['name' => 'Basket Warriors', 'category' => 'Sports', 'day' => 'Senin'],
        ];

        return view('clubs.index', compact('clubs'));
    }
}
