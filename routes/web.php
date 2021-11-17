<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Pacient;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('main');
});
Route::get('/doctor', function () {
    return view('doctor');
});

Route::get('/pacient', function () {
    return view('pacient');
});

Route::get('/pacient/{id}', function () {
    return view('/pacient/{id}/createpacient');
});
Route::get('/doctor/{id}', function() {
    return view('doctor/{id}/editdoctor');
});

Route::get('/doctor/{id}', function() {
    return view('doctor/{id}/createdoctor');
});

Route::get('/pacient', function () {
    return view('pacient');
});

Route::post('/createdoctor', function(Request $req) {

    $doctor = new Doctor;
    $doctor->id = $req->id;
    $doctor->name = $req->name;
    $doctor->surname = $req->surname;
    $doctor->pacients = $req->pacients;
    $doctor->save();

    return view('main');
});

Route::post('/editdoctor', function(Request $req) {
    $doctor = new Doctor;
    for ($x = 0;$x<count($req->id);$x++){
        if($doctor->id == $req[$x]->id) {
            $doctor->name = $req->name;
            $doctor->surname = $req->surname;
            $doctor->pacients = $req->pacients;
            $doctor->save();
        }
    }
    
});

Route::post('/createpacient', function(Request $req) {

    $pacient = new Pacient;
    $pacient->id = $req->id;
    $pacient->name = $req->name;
    $pacient->surname = $req->surname;
    $pacient->dni = $req->dni;
    $pacient->birthdate = $req->birthdate;
    $pacient->vacinated = $req->vacinated;
    $pacient->doctor_id = "";
    $pacient->save();

    return view('main');
});
