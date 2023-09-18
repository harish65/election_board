<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

use App\Models\Sysinf;

class sysinfController extends Controller
{
    public function store(Request $request){
        $changeKey =  new Sysinf();

        $changeKey->distcd =  $request->distcd;
        $changeKey->change_key_1 =  Crypt::encryptString($request->change_key_1);
        $changeKey->change_key_2 =  Crypt::encryptString($request->change_key_2);
        $changeKey->change_key_3 =  Crypt::encryptString($request->change_key_3);
        $changeKey->change_key_4 =  Crypt::encryptString($request->change_key_4);
        $changeKey->change_key_5 =  Crypt::encryptString($request->change_key_5);
        $changeKey->change_key_6 =  Crypt::encryptString($request->change_key_6);
        $changeKey->change_key_7 =  Crypt::encryptString($request->change_key_7);
        $changeKey->change_key_8 =  Crypt::encryptString($request->change_key_8);
        $changeKey->change_key_9 =  Crypt::encryptString($request->change_key_9);
        $changeKey->change_key_10 =  Crypt::encryptString($request->change_key_10);
        $changeKey->change_key_11 =  Crypt::encryptString($request->change_key_11);
        $changeKey->change_key_12 =  Crypt::encryptString($request->change_key_12);
        $changeKey->change_key_13 =  Crypt::encryptString($request->change_key_13);
        $changeKey->change_key_14 =  Crypt::encryptString($request->change_key_14);
        $changeKey->change_key_15 =  Crypt::encryptString($request->change_key_15);
        $changeKey->change_key_16 =  Crypt::encryptString($request->change_key_16);
        $changeKey->change_key_17 =  Crypt::encryptString($request->change_key_17);
        $changeKey->change_key_18 =   Crypt::encryptString($request->change_key_18);
        $changeKey->save();
        return view('home.index');
    }
}
