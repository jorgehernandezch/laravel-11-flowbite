@extends('layouts.master')

@section('content')
    <div class="min-h-screen bg-gray-100">
        @include('layouts.menu.sidebar')
        <main class="relative sm:ml-64 h-screen">
            @include('layouts.menu.nav')
            <div class="overflow-y-scroll pt-14 min-h-full h-full">
                {{ $slot }}
            </div>
        </main>
    </div>
@endsection