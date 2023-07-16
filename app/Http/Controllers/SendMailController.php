<?php

namespace App\Http\Controllers;

use App\Mail\kirimEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SendMailController extends Controller
{
    public function index() {
        return view('pages.index');
    }

    public function sendEmail(Request $request) {

        $credentials = [
            'nama' => $request->nama,
            'email' => $request->email,
            'pesan' => $request->pesan,
        ];

        Mail::to("mhmmdnvr06@gmail.com")->send(new kirimEmail($credentials));
        return back()->with('pesan_terkirim', 'Pesan kamu telah berhasil terkirim!');
    }
}
