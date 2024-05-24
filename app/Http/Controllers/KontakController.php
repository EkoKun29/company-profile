<?php

namespace App\Http\Controllers;

use App\Models\Kontak;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class KontakController extends Controller
{
    
    public function index(){
        return view('users.kontak');
    }

    public function submit(Request $request){
        $data               = new Kontak;
        $data->nama_toko    = $request->toko;
        $data->no_telepon   = $request->telepon;
        $data->email        = $request->email;
        $data->alamat       = $request->alamat;
        $data->order        = $request->order;
        $data->pesan        = $request->komentar;
        $data->save();

        // $request->validate([
        //     'toko' => 'required|string|max:255',
        //     'telepon' => 'required|string|max:20',
        //     'email' => 'required|email|max:255',
        //     'alamat' => 'required|string',
        //     'order' => 'required|string',
        //     'komentar' => 'nullable|string',
        // ]);

        // $data = $request->all();

        // Mail::send('users.kontak', $data, function ($message) use ($data) {
        //     $message->to('ekoseptyonugroho9@gmail.com')
        //     ->subject('Pesan dari Kontak Form')
        //     ->from($data['email'], $data['toko']);
        // });

        return redirect()->back()->with('success', 'Pesan Anda berhasil terkirim.');
    }

}
