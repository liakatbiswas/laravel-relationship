<?php

namespace App\Http\Controllers;

use App\Models\Phone;
use App\Models\User;

class PhoneController extends Controller
{
 public function index()
 {
  $users  = User::all();
  $phones = Phone::all();

  return \view('user', [
   'users'  => $users,
   'phones' => $phones,
  ]);
 }

}