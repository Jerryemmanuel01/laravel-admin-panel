<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TemperatureSensor;

class TemperatureSensorController extends Controller
{
    public function index()
    {
        $temperatureSensors = TemperatureSensor::all();
        return view('temperature_sensors.index', compact('temperatureSensors'));
    }

    public function create()
    {
        return view('temperature_sensors.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'location' => 'required',
            'temperature' => 'required|numeric',
        ]);

        TemperatureSensor::create($request->all());
        return redirect()->route('temperature-sensors.index')
                         ->with('success', 'Temperature sensor created successfully.');
    }

    public function edit(TemperatureSensor $temperatureSensor)
    {
        return view('temperature_sensors.edit', compact('temperatureSensor'));
    }

    public function update(Request $request, TemperatureSensor $temperatureSensor)
    {
        $request->validate([
            'location' => 'required',
            'temperature' => 'required|numeric',
        ]);

        $temperatureSensor->update($request->all());
        return redirect()->route('temperature-sensors.index')
                         ->with('success', 'Temperature sensor updated successfully.');
    }

    public function destroy(TemperatureSensor $temperatureSensor)
    {
        $temperatureSensor->delete();
        return redirect()->route('temperature-sensors.index')
                         ->with('success', 'Temperature sensor deleted successfully.');
    }
}
