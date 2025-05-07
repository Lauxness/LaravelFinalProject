<?php

namespace App\Http\Controllers\TenantApp;

use App\Http\Controllers\Controller;
use App\Mail\Mailer2;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SupportController extends Controller
{
    public function index()
    {
        $tenant = tenant();
        if (version_compare($tenant->version, '2.0.0', '>=')) {
            return view('tenants.pages.contact_support');
        } else {
            // Fallback to the old version
        }
    }
    public function submit(Request $request)
    {
        $tenant = tenant();
        $concern = $request->input('concern');

        Mail::to("rojoreyanthony@gmail.com")->send(new Mailer2($tenant,  $concern));

        return redirect()->back()->with('success', 'Your concern has been sent!');
    }
}
