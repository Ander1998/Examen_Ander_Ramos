<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class PacientsController extends Controller

{
    //
    //public function create($req)
    //{
    //    return view('/resources/views/createpacient.blade.php', ['createpacient' => Pacient::findOrFail($req)]);
    //}
    public function chkPacient(Request $req) {
        //I create a flag variable to check if there's any error
        $flag = 0;
        //check the birthdate variable that comes in the request
        //to see if it's lower than 1900
        if($req->birthdate < 1900) {
            //if it is I echo an error and put the flag to 1
            echo 'The birthdate has to be greater than 1900';
            $flag = 1;
        };

        //check the id to match the data type that we want
        $arrayletras = ["A","B","C","D","E","F","G","H","I","J","K","L","M","N","Ñ","O","P","Q","R","S","T","U","V","W","X","Y","Z"];
        for ($x=0;$x<count($arrayletras);$x++)
        {
            if($req->id[8]==$arrayletras){
                if(numericValue($arrayletras) > 00000000 && numericValue($arrayletras) < 99999999) {
                    echo 'The id must contain 8 digits and one letter';
                    $flag = 1;
                };
            };
        };

        //check the id to match the data type that we want
        if($req->id > (00000000 . "A") && $req->id < (99999999 . "Z")) {
            //if it doesn't match i echo an error message
            //and put the flag to 1
            echo 'The id must contain 8 digits and one letter';
            $flag = 1;
        };
        //if the flag is at 0 it means that there's no error
        //so we return the main view
        if($flag==0) {
            return view('/resources/views/main.blade.php');
        };
    }
}
