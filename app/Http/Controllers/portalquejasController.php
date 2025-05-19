<?php

namespace App\Http\Controllers;

        use App\Mail\GrievanceSubmitted;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Models\Grievance;

class portalquejasController extends Controller
{
    public function index()
    {
        return view('portalquejas');
        }


public function send(Request $request)
{
    $data = $request->validate([
        'titulo' => 'required|string|max:255',
        'bother' => 'required|string',
        'mood' => 'required|string',
        'severity' => 'required|string',
    ]);
    Grievance::create($data);


    Mail::to('z3r0sh1r0@gmail.com')->send(new GrievanceSubmitted($data));

return redirect()->route('enviado');
}

}
