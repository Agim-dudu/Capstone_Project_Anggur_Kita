<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Product;
use App\Models\Perusahaan;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{
    public function index()
    {
        $perusahaans = Perusahaan::all();
        $products = Product::all();
        $users = User::all();

        return view('contact', compact('products', 'users','perusahaans'));
    }

    public function sendEmail(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        $data = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'subject' => $request->input('subject'),
            'message' => $request->input('message'),
        ];

        // Ganti 'your-email@example.com' dengan alamat email yang akan menerima pesan
        $recipientEmail = env('MAIL_FROM_ADDRESS');

        // Kirim email menggunakan Mail::to
        Mail::to($recipientEmail)->send(new \App\Mail\ContactFormMail($data));

        // Tambahkan notifikasi atau pengalihan sesuai kebutuhan
        return redirect()->back()->with('success', 'Message sent successfully!');
    }
}
