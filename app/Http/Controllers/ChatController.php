<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class ChatController extends Controller
{
    // 1. Ambil riwayat chat antara user login dan user lain (dosen/mahasiswa)
    public function getMessages($receiverId)
    {
        $myId = Auth::id();

        // Ambil chat dimana SAYA pengirim DAN DIA penerima, ATAU sebaliknya
        $messages = Message::where(function ($query) use ($myId, $receiverId) {
            $query->where('sender_id', $myId)
                  ->where('receiver_id', $receiverId);
        })->orWhere(function ($query) use ($myId, $receiverId) {
            $query->where('sender_id', $receiverId)
                  ->where('receiver_id', $myId);
        })->orderBy('created_at', 'asc')->get();

        return response()->json($messages);
    }

    // 2. Kirim Pesan
    public function sendMessage(Request $request)
    {
        $request->validate([
            'receiver_id' => 'required|exists:users,id',
            'message' => 'required|string',
        ]);

        $message = Message::create([
            'sender_id' => Auth::id(),
            'receiver_id' => $request->receiver_id,
            'message' => $request->message,
        ]);

        return response()->json(['status' => 'Message sent!', 'data' => $message]);
    }

    public function index()
    {
        $user = Auth::user();
        
        // Logika: 
        // Kalau yang login Dosen, tampilkan semua Mahasiswa.
        // Kalau yang login Mahasiswa, tampilkan semua Dosen.
        
        if ($user->role == 'dosen') {
            $users = User::where('role', 'mahasiswa')->get();
        } else {
            $users = User::where('role', 'dosen')->get();
        }

        return view('chat.list', compact('users'));
    }
}


