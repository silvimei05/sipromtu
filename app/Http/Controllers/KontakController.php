<?php

namespace App\Http\Controllers;

use App\Models\Pesan;
use Illuminate\Http\Request;

class KontakController extends Controller
{
    /**
     * Display the kontak page.
     *
     * @return \Illuminate\View\View
     */
    public function kontak()
    {
        return view('kontak.index');
    }

    public function send(Request $request){
        try {
            $validate = $request->validate([
                'sender_name' => 'required|string',
                'sender_email' => 'required|email',
                'subjek' => 'required|string',
                'message' => 'required'
            ]);
            Pesan::create([
                'nama' => $validate['sender_name'],
                'email' => $validate['sender_email'],
                'subjek' => $validate['subjek'],
                'pesan' => $validate['message']
            ]);
            return redirect('kontak') ->with('success', 'Pesan Anda telah berhasil dikirim. Terima kasih!');;
        } catch (\Throwable $th) {
            return back()
                ->withInput()
                ->with('error', 'Maaf, terjadi kesalahan saat mengirim pesan Anda. Silakan coba lagi nanti.');
        }

    }
}
