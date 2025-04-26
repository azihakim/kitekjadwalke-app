<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ScheduleController extends Controller
{
    public function index()
    {
        $schedules = Schedule::all();
        if (!auth()->check()) {
            $schedules = Schedule::where('state', 1)->get();
        }
        return view('schedule.index', compact('schedules'));
    }
    public function create()
    {
        return view('schedule.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'file' => 'required|file|mimes:pdf,jpg,jpeg,png',
            'date' => 'required|date',
        ]);

        try {
            if (!$request->hasFile('file') || !$request->file('file')->isValid()) {
                return redirect()->back()->withErrors(['error' => 'Invalid file upload.']);
            }

            $title = str_replace(' ', '_', strtolower($request->input('title')));
            $date = $request->input('date');
            $timestamp = now()->timestamp;
            $extension = $request->file('file')->getClientOriginalExtension();
            $fileName = "{$title}_{$date}_agenda_{$timestamp}.{$extension}";

            // Pastikan folder schedules ada
            if (!\Storage::disk('public')->exists('schedules')) {
                \Storage::disk('public')->makeDirectory('schedules');
            }
            $filePath = $request->file('file')->storeAs('schedules', $fileName, 'public');

            $data = new Schedule();
            $data->title = $request->input('title');
            $data->file = $fileName;
            $data->date = $date;
            $data->save();

            return redirect()->route('schedules.index')->with('success', 'Schedule created successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => 'Failed to create schedule: ' . $e->getMessage()]);
        }
    }

    public function show($id)
    {
        // Show a specific schedule
    }
    public function edit($id)
    {
        $schedule = Schedule::findOrFail($id);
        return view('schedule.edit', compact('schedule'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'file' => 'nullable|file|mimes:pdf,jpg,jpeg,png',
            'date' => 'required|date',
        ]);

        try {
            $schedule = Schedule::findOrFail($id);
            $schedule->title = $request->input('title');
            $schedule->date = $request->input('date');
            if ($request->state) {
                $schedule->state = 1;
            } else {
                $schedule->state = 0;
            }

            if ($request->hasFile('file')) {
                if ($schedule->file) {
                    Storage::disk('public')->delete('schedules/' . $schedule->file);
                }

                $title = str_replace(' ', '_', strtolower($request->input('title')));
                $date = $request->input('date');
                $timestamp = now()->timestamp;
                $extension = $request->file('file')->getClientOriginalExtension();
                $fileName = "{$title}_{$date}_agenda_{$timestamp}.{$extension}";

                // Pastikan folder schedules ada
                if (!\Storage::disk('public')->exists('schedules')) {
                    \Storage::disk('public')->makeDirectory('schedules');
                }
                $filePath = $request->file('file')->storeAs('schedules', $fileName, 'public');
                $schedule->file = $fileName;
            }

            $schedule->save();

            return redirect()->route('schedules.index')->with('success', 'Schedule updated successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => 'Failed to update schedule: ' . $e->getMessage()]);
        }
    }
    public function destroy($id)
    {
        $schedule = Schedule::findOrFail($id);
        $schedule->delete();

        return redirect()->route('schedules.index')->with('success', 'Schedule archived successfully.');
    }
}
