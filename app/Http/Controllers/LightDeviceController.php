<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LightDevice;

class LightDeviceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lightDevices = LightDevice::all();
        return view('light_devices.index', with('$lightDevice','lightDevices'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('light_devices.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
        'name' => 'required',
        'status' => 'required',
        ]);

        LightDevice::create($request->all());

        return redirect()->route('light_devices.index')
                        ->with('success', 'Light Device created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(LightDevice $lightDevice)
    {
        return view('light_devices.edit', compact('lightDevice'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, LightDevice $lightDevice)
    {
         $request->validate([
        'name' => 'required',
        'status' => 'required',
        ]);

        $lightDevice->update($request->all());

        return redirect()->route('light_devices.index')
                        ->with('success', 'Light Device updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(LightDevice $lightDevice)
    {
        $lightDevice->delete();

        return redirect()->route('light_devices.index')
                        ->with('success', 'Light Device deleted successfully.');
    }
}
