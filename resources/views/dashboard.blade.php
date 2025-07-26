@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

@include('partials.navbar')
@include('partials.sidebar')
<div class="p-6 bg-gray-100 min-h-screen">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="bg-white p-4 rounded shadow">
            <p class="text-gray-600">Statistik 1</p>
        </div>
        <div class="bg-white p-4 rounded shadow">
            <p class="text-gray-600">Statistik 2</p>
        </div>
        <div class="bg-white p-4 rounded shadow">
            <p class="text-gray-600">Statistik 3</p>
        </div>
    </div>
</div>
@endsection
