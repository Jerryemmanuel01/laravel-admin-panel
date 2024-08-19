<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SecurityDevice;

class SecurityDeviceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $securityDevices = SecurityDevice::all();
        return view('security_devices.index', compact('securityDevices'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('security_devices.create');
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

        SecurityDevice::create($request->all());
        return redirect()->route('security-devices.index')
                         ->with('success', 'Security device created successfully.');
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
    public function edit(SecurityDevice $securityDevice)
    {
        return view('security_devices.edit', compact('securityDevice'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SecurityDevice $securityDevice)
    {
         $request->validate([
            'name' => 'required',
            'status' => 'required',
        ]);

        $securityDevice->update($request->all());
        return redirect()->route('security-devices.index')
                         ->with('success', 'Security device updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SecurityDevice $securityDevice)
    {
        $securityDevice->delete();
        return redirect()->route('security-devices.index')
                         ->with('success', 'Security device deleted successfully.');
    }
}
