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
//I know it should be called patients and not pacients but I made that mistake at the begging of the
//laravel project and I realized very late so I just stick with it
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

Route::get('/doctors_pacients', function() {
    $html = "<ul>";
    
    //get the info of the doctors and pacients(it should contain the array of doctors and pacients)
    $doctor = new Doctor;
    $pacient = new Pacient;

    //loop through the array of doctors and concat in the html variable the name of doctor in the position $x
    for($x=0;$x<count($doctor->id);$x++) {
        $html = $html . "<li>" . $doctor[$x]->name . "</li>";

        //loop through the array of pacients
        for($i=0;$i<count($pacient->id);$i++) {

            //if the value of the doctor id is the same that the pacient has in the doctor_id column
            if($doctor[$x]->id == $pacient[$i]->doctor_id) {

                //concat in the html variable the name of the pacient in the position $i
                $html = $html . "<li>" . $pacient[$i]->name . "</li>";
            }
        }
    }
    $html = $html . "</ul>";

    return $html;
});

Route::get('/doctorsoveraverage', function() {
    $html = "<ul>";
    
    //get the info of the doctors and pacients(it should contain the array of doctors and pacients)
    $doctor = new Doctor;
    $pacient = new Pacient;

    //get the average number of pacient per doctor
    $avgpacients = count($doctor->pacients)/count($doctor->id);

    //loop through the number of doctors in the recovered object
    for($x=0;$x<count($doctor->id);$x++) {

        //if the number of pacients for the doctor in the position $x is higher than the average
        //number of pacients per doctor
        if(count($doctor[$x]->pacients) > $avgpacients) {

            //concat in the html variable the name and last name of the doctor
            $html = $html . "<li>" . $doctor[$x]->name . $doctor[$x]->surname . "</li>";
        }
    }
    $html = $html . "</ul>";

    return $html;
});