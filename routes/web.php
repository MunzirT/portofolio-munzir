<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

// 1. NAVIGATION ROUTES (GET)
Route::get('/', function () { 
    return view('welcome'); 
})->name('home');

Route::get('/experience', function () { 
    return view('experience'); 
})->name('experience');

Route::get('/skills', function () { 
    return view('skills'); 
})->name('skills');

Route::get('/projects', function () { 
    return view('projects'); 
})->name('projects');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');


// 2. CONTACT FORM PROCESSING ROUTE (POST)
Route::post('/contact', function (Request $request) {
    // Validasi input form dari user secara ketat
    $data = $request->validate([
        'name'    => 'required|string|max:255',
        'email'   => 'required|email|max:255',
        'message' => 'required|string',
    ]);

    // Kirim email menggunakan format HTML yang aman & kompatibel penuh dengan SMTP Gmail
    Mail::html("<p><strong>Name:</strong> {$data['name']}</p>
                <p><strong>Email:</strong> {$data['email']}</p>
                <p><strong>Message:</strong><br>" . nl2br(e($data['message'])) . "</p>", function ($message) use ($data) {
        
        // Ambil email tujuan dari .env, jika kosong otomatis kirim ke email aslimu kawan
        $toEmail = env('PORTFOLIO_EMAIL', 'munzirt07@gmail.com');
        
        $message->to($toEmail)
                ->subject('New Portfolio Inquiry from ' . $data['name']);
    });

    // Kembalikan pengguna ke halaman kontak dengan alert sukses warna hijau
    return back()->with('success', 'Thank you! Your message has been sent successfully.');
}); // <-- PASTIKAN TANDA INI SUDAH ADA DI BARIS PALING BAWAH FILE KAMU