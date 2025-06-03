<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\BlogPost;

class HomeController extends Controller
{
    /**
     * Display the homepage.
     */
    public function index()
    {
        // For now, return empty collections until we have sample data
        $featuredProducts = collect();
        $latestPosts = collect();
        $categories = collect();

        return view('home-modern', compact('featuredProducts', 'latestPosts', 'categories'));
    }

    /**
     * Display the about page.
     */
    public function about()
    {
        return view('pages.about');
    }

    /**
     * Display the contact page.
     */
    public function contact()
    {
        return view('pages.contact');
    }

    /**
     * Handle contact form submission.
     */
    public function contactSubmit(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:2000',
        ]);

        // Here you would typically:
        // 1. Save to database
        // 2. Send email notification
        // 3. Send auto-reply to user

        return back()->with('success', 'Terima kasih! Pesan Anda telah dikirim. Kami akan merespons dalam 24 jam.');
    }

    /**
     * Display the FAQ page.
     */
    public function faq()
    {
        $faqs = [
            [
                'question' => 'Bagaimana cara download produk digital setelah pembelian?',
                'answer' => 'Setelah pembayaran berhasil, Anda akan menerima email konfirmasi dengan link download. Link download juga tersedia di halaman "My Orders" di akun Anda.'
            ],
            [
                'question' => 'Apakah produk digital bisa digunakan untuk komersial?',
                'answer' => 'Ya, sebagian besar produk kami memiliki lisensi komersial. Silakan cek detail lisensi di halaman produk masing-masing.'
            ],
            [
                'question' => 'Bagaimana jika file yang didownload rusak atau error?',
                'answer' => 'Jika ada masalah dengan file, silakan hubungi support kami melalui email atau WhatsApp. Kami akan membantu menyelesaikan masalah dalam 24 jam.'
            ],
            [
                'question' => 'Apakah ada refund policy?',
                'answer' => 'Karena sifat produk digital, kami tidak menyediakan refund. Namun, jika ada masalah teknis dengan produk, kami akan membantu menyelesaikannya.'
            ],
            [
                'question' => 'Bagaimana cara menggunakan kupon diskon?',
                'answer' => 'Masukkan kode kupon di halaman checkout sebelum melakukan pembayaran. Diskon akan otomatis teraplikasi jika kupon valid.'
            ]
        ];

        return view('pages.faq', compact('faqs'));
    }

    /**
     * Display the terms page.
     */
    public function terms()
    {
        return view('pages.terms');
    }

    /**
     * Display the privacy policy page.
     */
    public function privacy()
    {
        return view('pages.privacy');
    }

    /**
     * Display the YouTube channel page.
     */
    public function youtube()
    {
        return view('pages.youtube');
    }
}
