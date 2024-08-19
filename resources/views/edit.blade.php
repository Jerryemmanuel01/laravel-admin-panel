@extends('layouts.device')
@section('title','Edit A Device')
@section('content')
    <div class="container mt-5">
        
            <div>
                <button type="submit" class="btn btn-primary text-white mb-3"><a style="text-decoration: none;" class="text-white " href="{{ route('admin.dashboard') }}">Go Back</a></button>
            </div>
        <form>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Device Name</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Device Description</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Device Location</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>

            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Status (On/Off)</label>
            </div>

            <select class="mb-3 form-select" aria-label="Default select example">
                <option selected>Select Device</option>
                <option value="1">Light Bulb Devices</option>
                <option value="2">Temperature Devices</option>
                <option value="3">Security Devices</option>
            </select>

            <select class="mb-3 form-select" aria-label="Default select example">
                <option selected>Select Technology</option>
                <option value="1">Wireless</option>
                <option value="2">Zigbee</option>
            </select>

            <div>
                <button type="submit" class="btn btn-primary mt-3">Update Device</button>
            </div>
        </form>
    </div>   
@endsection