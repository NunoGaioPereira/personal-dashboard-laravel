@extends('layouts.dashboard')

@section('title', 'Dashboard')

@section('content')

  <!-- <div class="flex container mx-auto">
    <div class="w-full mx-auto my-8 px-4">
      <div class="w-full bg-white rounded p-8 sm:p-16">
        <h1 class="text-2xl font-medium mb-2">Welcome to Your IMPACT UK Dashboard</h1>
        <h2 class="font-medium text-gray-600 tracking-wide">Here you can manage your account, update your profile and ask for support</h2>
      </div>
    </div>
  </div> -->
  <div>
    <h2 class="text-2xl font-bold text-gray-800">{{ auth()->user()->name }}'s Dashboard</h2>
  </div>
  <div>
      @foreach($trackers as $tracker)
          <livewire:tracker-counter :tracker=$tracker />
      @endforeach
  </div>
@endsection