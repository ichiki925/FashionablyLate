<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;

class AdminController extends Controller
{
    
    

    public function showContacts()
    {
        $contacts = contacts::simplePaginate(7);
        return view('index', ['contacts' => $contacts]);
    }
}
