@extends('main')

@section('title', 'Pacientes')

@section('sidebar')
    @parent

    <p>This is the view to create new pacients.</p>
@endsection

@section('content')
    <div>
        <form method="POST" action="#">
            <h1>New Pacient</h1>

            <label for="id">Id:</label>
            <input type="number" value="id">
            
            <label for="name">Name:</label>
            <input type="text" value="name">

            <label for="surname">Surname:</label>
            <input type="text" value="surname">

            <label for="dni">DNI:</label>
            <input type="text" value="dni">
            
            <label for="birthdate">Birthdate:</label>
            <input type="date" value="birthdate">

            <label for="name">Vacinated:</label>
            <input type="radiobutton" value="vacinated">

            <button type="submit" action="/resources/views/doctor.blade.php">
                New Pacient
            </button>
        </form>
    </div>
@endsection