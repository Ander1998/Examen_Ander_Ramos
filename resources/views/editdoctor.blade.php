@extends('main')

@section('title', 'Doctores')

@section('sidebar')
    @parent

    <p>This is the view to edit doctors.</p>
@endsection

@section('content')
    <div>
        <form method="POST" action="#">
            <h1>Edit Doctor</h1>

            <label for="name">Name:</label>
            <input type="text" value="name">

            <label for="surname">Surname:</label>
            <input type="text" value="surname">

            <label for="pacients">Number of pacients</label>
            <input type="number" value="pacients">

            <button type="submit" action="/resources/views/doctor.blade.php">
                Edit Doctor
            </button>
        </form>
    </div>
@endsection