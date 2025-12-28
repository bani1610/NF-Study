@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card h-100">
                <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                    <span>Chat dengan ID: {{ $receiverId }}</span>
                    <a href="{{ route('chat.list') }}" class="btn btn-sm btn-light text-primary">Kembali</a>
                </div>

                <div class="card-body d-flex flex-column" style="height: 500px;">
                    <div id="chat-box" class="flex-grow-1 mb-3 p-3 rounded" style="overflow-y: auto; background-color: #f8f9fa; border: 1px solid #dee2e6;">
                        <div class="text-center text-muted mt-5">Memuat pesan...</div>
                    </div>

                    <form id="chat-form" class="d-flex gap-2">
                        @csrf
                        <input type="hidden" id="receiver_id" value="{{ $receiverId }}">
                        <input type="text" id="message-input" class="form-control" placeholder="Tulis pesan... (Tekan Enter untuk kirim)" autocomplete="off" required>
                        <button type="submit" class="btn btn-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-send" viewBox="0 0 16 16">
                                <path d="M15.854.146a.5.5 0 0 1 .11.54l-5.819 14.547a.75.75 0 0 1-1.329.124l-3.178-4.995L.643 7.184a.75.75 0 0 1 .124-1.33L15.314.037a.5.5 0 0 1 .54.11ZM6.636 10.07l2.761 4.338L14.13 2.576 6.636 10.07Zm6.787-8.201L1.591 6.602l4.339 2.76 7.494-7.493Z"/>
                            </svg>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    const receiverId = document.getElementById('receiver_id').value;
    const chatBox = document.getElementById('chat-box');
    const messageInput = document.getElementById('message-input');
    
    // Variabel buat cek apakah ini load pertama kali
    let isFirstLoad = true;

    function fetchMessages() {
        fetch(`/messages/${receiverId}`)
            .then(response => response.json())
            .then(data => {
                // Cek apakah user sedang di posisi paling bawah sebelum update konten
                // Kita kasih toleransi 100px
                const isNearBottom = chatBox.scrollHeight - chatBox.scrollTop <= chatBox.clientHeight + 100;

                chatBox.innerHTML = ''; 
                
                if (data.length === 0) {
                    chatBox.innerHTML = '<div class="text-center text-muted mt-5">Belum ada pesan. Sapa duluan yuk!</div>';
                }

                data.forEach(msg => {
                    // Pastikan auth id dirender sebagai string/number di JS
                    const myId = "{{ auth()->id() }}"; 
                    const isMe = msg.sender_id == myId;
                    
                    const align = isMe ? 'text-end' : 'text-start'; 
                    const bg = isMe ? 'bg-primary text-white' : 'bg-white border';
                    const time = new Date(msg.created_at).toLocaleTimeString([], {hour: '2-digit', minute:'2-digit'});

                    chatBox.innerHTML += `
                        <div class="${align} mb-2">
                            <div class="d-inline-block p-2 rounded ${bg}" style="max-width: 75%; text-align: left; box-shadow: 0 1px 2px rgba(0,0,0,0.1);">
                                ${msg.message}
                            </div>
                            <div class="small text-muted mt-1" style="font-size: 0.7rem;">${time}</div>
                        </div>
                    `;
                });

                // Logika Auto Scroll:
                // Scroll ke bawah HANYA jika ini load pertama ATAU user memang lagi liat chat paling bawah
                if (isFirstLoad || isNearBottom) {
                    chatBox.scrollTop = chatBox.scrollHeight;
                    isFirstLoad = false;
                }
            });
    }

    // Polling setiap 2 detik
    setInterval(fetchMessages, 2000);
    // Panggil sekali saat halaman dimuat
    fetchMessages();

    // Event Listener untuk Form
    document.getElementById('chat-form').addEventListener('submit', function(e) {
        e.preventDefault();
        sendMessage();
    });

    // Event Listener untuk tombol Enter
    messageInput.addEventListener("keypress", function(event) {
        if (event.key === "Enter") {
            event.preventDefault();
            sendMessage();
        }
    });

    function sendMessage() {
        const message = messageInput.value;
        if(!message.trim()) return; // Jangan kirim kalau kosong

        // Tampilkan pesan sementara (Optimistic UI) biar terasa cepat
        // Nanti akan terganti saat polling berikutnya
        const tempTime = new Date().toLocaleTimeString([], {hour: '2-digit', minute:'2-digit'});
        chatBox.innerHTML += `
            <div class="text-end mb-2" style="opacity: 0.7;">
                <div class="d-inline-block p-2 rounded bg-primary text-white" style="max-width: 75%; text-align: left;">
                    ${message}
                </div>
                <div class="small text-muted mt-1" style="font-size: 0.7rem;">${tempTime} (mengirim...)</div>
            </div>
        `;
        chatBox.scrollTop = chatBox.scrollHeight; // Langsung scroll ke bawah
        messageInput.value = ''; // Kosongkan input segera

        fetch('/messages', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            body: JSON.stringify({
                receiver_id: receiverId,
                message: message
            })
        })
        .then(res => res.json())
        .then(data => {
            // Sukses kirim, fetchMessages akan membereskan tampilannya nanti
            isFirstLoad = true; // Paksa scroll ke bawah lagi saat data asli masuk
            fetchMessages(); 
        })
        .catch(err => {
            alert('Gagal mengirim pesan. Cek koneksi internet.');
        });
    }
</script>
@endsection