@extends('layouts.app')
@section('title', 'Home')
@section('content')
    <div class="grid grid-cols-12 gap-2">
        <div class="col-span-4">
            <livewire:counter />
        </div>
        <div class="col-span-4">
            <livewire:counter />
        </div>
        <div class="col-span-4">
            <livewire:counter />
        </div>
    </div>
@endsection
