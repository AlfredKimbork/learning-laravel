<?php

namespace App\Http\Controllers;

use App\Models\Agency;
use App\Models\Coach;
use Illuminate\Http\Request;

class CoachController extends Controller
{
    public function index() {
        $coaches = Coach::with('agency')->orderBy('created_at', 'desc')->paginate(10);

        return view('coaches.index', ["coaches" => $coaches]);
    }

    public function show(Coach $coach) {
        $coach->load('agency');

        return view('coaches.show', ["coach" => $coach]);
    }

    public function create() {
        $agencies = Agency::all();

        return view('coaches.create', ["agencies" => $agencies]);
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'experience' => 'required|integer|min:0',
            'bio' => 'required|string|min:20|max:1000',
            'agency_id' => 'required|exists:agencies,id',
        ]);

        Coach::create($validated);

        return redirect()->route('coaches.index')->with('success', 'Coach created');
    }
    
    public function destroy(Coach $coach) {
        $coach->delete();

        return redirect()->route('coaches.index')->with('success', 'Coach deleted');
    }
}
