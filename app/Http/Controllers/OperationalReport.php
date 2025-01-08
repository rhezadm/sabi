<?php

namespace App\Http\Controllers;

use App\Models\User;

class OperationalReport extends Controller
{
    public function index()
    {
        $users = User::latest()->paginate();
        return view('operational_report', compact('users'));
    }
}
