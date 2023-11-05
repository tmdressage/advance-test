<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin()

    {
        $admins = Contact::Paginate(10);
        return view('admin', compact('admins'));
    }
}
