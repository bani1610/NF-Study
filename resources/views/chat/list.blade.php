@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    Halo, {{ Auth::user()->name }} ({{ ucfirst(Auth::user()->role) }})
                    <br><small>Pilih orang untuk memulai chat:</small>
                </div>
                <div class="list-group list-group-flush">
                    @forelse($users as $user)
                        <a href="{{ route('chat.index', $user->id) }}" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                            <div>
                                <strong>{{ $user->name }}</strong>
                                <br>
                                <small class="text-muted">{{ $user->email }}</small>
                            </div>
                            <span class="badge bg-primary rounded-pill">Chat</span>
                        </a>
                    @empty
                        <div class="list-group-item">Belum ada user lain.</div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</div>
@endsection