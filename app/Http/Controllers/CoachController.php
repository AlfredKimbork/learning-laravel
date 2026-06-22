<?php

namespace App\Http\Controllers;

use App\Models\Coach;
use Illuminate\Http\Request;

class CoachController extends Controller
{
    public function index() {
        $coaches = Coach::with('agency')->orderBy('created_at', 'desc')->paginate(10);

        return view('coaches.index', ["greeting" => "howdy", "coaches" => $coaches]);
    }

    public function show($id) {
        $coach = Coach::with('agency')->findOrFail($id);
        return view('coaches.show', ["coach" => $coach]);
    }

    public function create() {
        return view('coaches.create');
    }

    
}
