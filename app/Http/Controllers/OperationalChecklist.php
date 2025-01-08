<?php

namespace App\Http\Controllers;

use App\Models\User;

class OperationalChecklist extends Controller
{
    public function index()
    {
        $users = User::latest()->paginate();
        return view('operational_checklist', compact('users'));
    }
}
