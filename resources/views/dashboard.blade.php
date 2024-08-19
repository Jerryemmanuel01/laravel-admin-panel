<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                {{-- <div class="p-6 text-gray-900">
                    {{ __("You're Logged In!") }}
                    
                </div> --}}

                    <h1 class="p-12 font-semibold text-xl text-gray-800 leading-tight text-center">Access Your Smart Home Devices Below</h1>
                    <h1 class="p-6 font-semibold text-xl text-gray-800 leading-tight ">Light Bulb Devices</h1>
                   
                    <!-- my code comes in here  -->
                    <div class="p-6 text-gray-900 d-flex flex-row">
                        <div class="card" style="width: 18rem;">
                            <img src="{{ asset('asset\images\light\light1.jpg') }}" class="card-img-top" alt="light_1">
                            <div class="card-body">
                                <h5 class="card-title">Device Name: Bulb 1</h5>
                                <p class="card-text">This light bulb device is located within the building</p>
                            </div>
                             <ul class="list-group list-group-flush">
                                <li class="list-group-item">Bulb Location: Inside </li>
                                <li class="list-group-item">Bulb Status: On </li>
                                
                            </ul>
                            <div class="card-body">
                                <div>
                                    <button type="submit" class="btn btn-warning"><a style="text-decoration: none;" href="{{ route('edit') }}">Edit Light</a></button>
                                </div>
                            </div>
                        </div>

                        {{-- second light  --}}

                        <div class="card" style="width: 18rem;">
                            <img src="{{ asset('asset\images\light\light1c.jfif') }}" class="card-img-top" alt="light_1">
                            <div class="card-body">
                                <h5 class="card-title">Device Name: Bulb 2</h5>
                                <p class="card-text">This light bulb device is located within the building</p>
                            </div>
                             <ul class="list-group list-group-flush">
                                <li class="list-group-item">Bulb Location: Inside </li>
                                <li class="list-group-item">Bulb Status: On </li>
                                
                            </ul>
                            <div class="card-body">
                                <div>
                                    <button type="submit" class="btn btn-warning"><a style="text-decoration: none;" href="{{ route('edit') }}">Edit Light</a></button>
                                </div>
                            </div>
                        </div>

                        {{-- third light  --}}

                        <div class="card" style="width: 18rem;">
                            <img src="{{ asset('asset\images\light\light1a.jfif') }}" class="card-img-top" alt="light_1">
                            <div class="card-body">
                                <h5 class="card-title">Device Name: Bulb 3</h5>
                                <p class="card-text">This light bulb device is located Outside of the building</p>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Bulb Location: Outside </li>
                                <li class="list-group-item">Bulb Status: On </li>
                                
                            </ul>
                            <div class="card-body">
                                <div>
                                    <button type="submit" class="btn btn-warning"><a style="text-decoration: none;" href="{{ route('edit') }}">Edit Light</a></button>
                                </div>
                            </div>
                        </div>

                        {{-- fourth bulb  --}}

                        <div class="card" style="width: 18rem;">
                            <img src="{{ asset('asset\images\light\light1b.jpg') }}" class="card-img-top" alt="light_1">
                            <div class="card-body">
                                <h5 class="card-title">Device Name: Bulb 4</h5>
                                <p class="card-text">This light bulb device is located Outside of the building</p>
                            </div>
                             <ul class="list-group list-group-flush">
                                <li class="list-group-item">Bulb Location: Outside </li>
                                <li class="list-group-item">Bulb Status: On </li>
                                
                            </ul>
                            <div class="card-body">
                                <div>
                                    <button type="submit" class="btn btn-warning"><a style="text-decoration: none;" href="{{ route('edit') }}">Edit Light</a></button>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Tempareture Device Section  --}}

                    <h1 class="p-6 font-semibold text-xl text-gray-800 leading-tight ">Temperature Devices</h1>
                    <!-- my code comes in here  -->
                    <div class="p-6 text-gray-900 d-flex flex-row">
                        <div class="card" style="width: 18rem;">
                            <img src="{{ asset('asset\images\temp\temp1.jpeg') }}" class="card-img-top" alt="light_1">
                            <div class="card-body">
                                <h5 class="card-title">Device Name: AC 1</h5>
                                <p class="card-text">This temperature device is located outside of the building</p>
                            </div>
                             <ul class="list-group list-group-flush">
                                <li class="list-group-item">Temp Location: Outside </li>
                                <li class="list-group-item">Temp Status: On </li>
                                
                            </ul>
                            <div class="card-body">
                                <div>
                                    <button type="submit" class="btn btn-warning"><a style="text-decoration: none;" href="{{ route('edit') }}">Edit Temp</a></button>
                                </div>
                            </div>
                        </div>

                        {{-- second temp  --}}

                        <div class="card" style="width: 18rem;">
                            <img src="{{ asset('asset\images\temp\temp2.jpg') }}" class="card-img-top" alt="light_1">
                            <div class="card-body">
                                <h5 class="card-title">Device Name: AC 2</h5>
                                <p class="card-text">This temperature device is located inside the building</p>
                            </div>
                             <ul class="list-group list-group-flush">
                                <li class="list-group-item">Temp Location: Inside </li>
                                <li class="list-group-item">Temp Status: On </li>
                                
                            </ul>
                            <div class="card-body">
                                <div>
                                    <button type="submit" class="btn btn-warning"><a style="text-decoration: none;" href="{{ route('edit') }}">Edit Temp</a></button>
                                </div>
                            </div>
                        </div>
                        

                        {{-- third temp  --}}

                        <div class="card" style="width: 18rem;">
                            <img src="{{ asset('asset\images\temp\temp3.jpg') }}" class="card-img-top" alt="light_1">
                            <div class="card-body">
                                <h5 class="card-title">Device Name: AC 3</h5>
                                <p class="card-text">This temperature device is located inside the building</p>
                            </div>
                             <ul class="list-group list-group-flush">
                                <li class="list-group-item">Temp Location: Inside </li>
                                <li class="list-group-item">Temp Status: On </li>
                                
                            </ul>
                            <div class="card-body">
                               <div>
                                    <button type="submit" class="btn btn-warning"><a style="text-decoration: none;" href="{{ route('edit') }}">Edit Temp</a></button>
                                </div>
                            </div>
                        </div>

                        {{-- fourth temp  --}}

                        <div class="card" style="width: 18rem;">
                            <img src="{{ asset('asset\images\temp\temp4.jpg') }}" class="card-img-top" alt="light_1">
                            <div class="card-body">
                                <h5 class="card-title">Device Name: AC 4</h5>
                                <p class="card-text">This temperature device is located inside the building</p>
                            </div>
                             <ul class="list-group list-group-flush">
                                <li class="list-group-item">Temp Location: Inside </li>
                                <li class="list-group-item">Temp Status: On </li>
                                
                            </ul>
                            <div class="card-body">
                                <div>
                                    <button type="submit" class="btn btn-warning"><a style="text-decoration: none;" href="{{ route('edit') }}">Edit Temp</a></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    

                    {{-- Security Device Section  --}}

                    <h1 class="p-6 font-semibold text-xl text-gray-800 leading-tight ">Security Devices</h1>
                    <!-- my code comes in here  -->
                    <div class="p-6 text-gray-900 d-flex flex-row">
                        <div class="card" style="width: 18rem;">
                            <img src="{{ asset('asset\images\cam\cctv3.png') }}" class="card-img-top" alt="light_1">
                            <div class="card-body">
                                <h5 class="card-title">Device Name: CAM 1</h5>
                                <p class="card-text">This CCTV device is located outside of the building</p>
                            </div>
                             <ul class="list-group list-group-flush">
                                <li class="list-group-item">CAM Location: Outside </li>
                                <li class="list-group-item">CAM Status: On </li>
                                
                            </ul>
                            <div class="card-body">
                                <div>
                                    <button type="submit" class="btn btn-warning"><a style="text-decoration: none;" href="{{ route('edit') }}">Edit CAM</a></button>
                                </div>
                            </div>
                        </div>

                        {{-- second cam  --}}

                        <div class="card" style="width: 18rem;">
                            <img src="{{ asset('asset\images\cam\cctv2.png') }}" class="card-img-top" alt="light_1">
                            <div class="card-body">
                                <h5 class="card-title">Device Name: CAM 2</h5>
                                <p class="card-text">This CCTV device is located inside the building</p>
                            </div>
                             <ul class="list-group list-group-flush">
                                <li class="list-group-item">CAM Location: Inside </li>
                                <li class="list-group-item">CAM Status: On </li>
                                
                            </ul>
                            <div class="card-body">
                                <div>
                                    <button type="submit" class="btn btn-warning"><a style="text-decoration: none;" href="{{ route('edit') }}">Edit CAM</a></button>
                                </div>
                            </div>
                        </div>
                        

                        {{-- third cam  --}}

                        <div class="card" style="width: 18rem;">
                            <img src="{{ asset('asset\images\cam\cctv4.png') }}" class="card-img-top" alt="light_1">
                            <div class="card-body">
                                <h5 class="card-title">Device Name: CAM 3</h5>
                                <p class="card-text">This CCTV device is located inside the building</p>
                            </div>
                             <ul class="list-group list-group-flush">
                                <li class="list-group-item">CAM Location: Inside </li>
                                <li class="list-group-item">CAM Status: On </li>
                                
                            </ul>
                            <div class="card-body">
                                <div>
                                    <button type="submit" class="btn btn-warning"><a style="text-decoration: none;" href="{{ route('edit') }}">Edit CAM</a></button>
                                </div>
                            </div>
                        </div>

                        {{-- fourth cam  --}}

                        <div class="card" style="width: 18rem;">
                            <img src="{{ asset('asset\images\cam\cctv5.png') }}" class="card-img-top" alt="light_1">
                            <div class="card-body">
                                <h5 class="card-title">Device Name: CAM 4</h5>
                                <p class="card-text">This CCTV device is located inside the building</p>
                            </div>
                             <ul class="list-group list-group-flush">
                                <li class="list-group-item">CAM Location: Inside </li>
                                <li class="list-group-item">CAM Status: On </li>
                                
                            </ul>
                            <div class="card-body">
                               <div>
                                    <button type="submit" class="btn btn-warning"><a style="text-decoration: none;" href="{{ route('edit') }}">Edit CAM</a></button>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</x-app-layout>
