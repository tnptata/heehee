@extends('layouts.main')

@section('content')
    <h1 class="text-lg">Add New Apartment</h1>

    <form action="{{ route('apartments.store') }}" method="POST">
        @csrf
        <div>
            <label for="name">Apartment Name</label>
            <input type="text" name="name" class="" placeholder="Apartment Name" autocomplete="off">
        </div>

        <div>
            <label for="floors">Floors</label>
            <input type="number" min="1" name="floors">
        </div>

        <div>
            <button type="submit" class="bg-blue-300">Add New Apartment</button>
        </div>
    </form>


@endsection