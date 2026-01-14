@extends('layouts.app')

@section('title', 'Biodata')

@section('content')
<div class="min-h-screen flex justify-center items-center bg-gray-100">
    <div class="flex gap-6">

        {{-- ================= BIODATA ================= --}}
        <div class="bg-white rounded-2xl shadow-lg p-8 w-full max-w-md text-center">

            <img 
                src="/foto/{{ $nama }}.jpg"
                onerror="this.onerror=null;this.src='/foto/default.jpg'"
                class="w-32 h-32 mx-auto rounded-full object-cover border-4 border-blue-500"
            >

            <h2 class="text-2xl font-bold mt-4 capitalize">{{ $nama }}</h2>
            <p class="text-gray-500 mb-6">Siswa XII RPL</p>

            <div class="text-left space-y-2">
                @if($nama == 'bian')
                    <p><b>Nama:</b> Bian</p>
                    <p><b>Umur:</b> 17 Tahun</p>
                    <p><b>Hobi:</b> Game</p>
                @elseif($nama == 'rasya')
                    <p><b>Nama:</b> Rasya</p>
                    <p><b>Umur:</b> 17 Tahun</p>
                    <p><b>Hobi:</b> Mancing</p>
                @elseif($nama == 'faiq')
                    <p><b>Nama:</b> Azzam Faiq Ilmi</p>
                    <p><b>Umur:</b> 17 Tahun</p>
                    <p><b>Hobi:</b> Olahraga</p>
                @endif
            </div>

            <div class="flex justify-center gap-3 mt-6">
                <a href="/menu/bian" class="px-4 py-2 bg-blue-500 text-white rounded-lg">Bian</a>
                <a href="/menu/rasya" class="px-4 py-2 bg-green-500 text-white rounded-lg">Rasya</a>
                <a href="/menu/faiq" class="px-4 py-2 bg-purple-500 text-white rounded-lg">Faiq</a>
            </div>
        </div>

        {{-- ================= KOMENTAR ================= --}}
        <div class="bg-white rounded-2xl shadow-lg p-6 w-full max-w-md">

            <h2 class="text-xl font-bold mb-4 text-center">
                Komentar untuk {{ ucfirst($nama) }}
            </h2>

            {{-- FORM --}}
            <form action="/comment/{{ $nama }}" method="POST" class="space-y-3">
                @csrf
                <input type="text" name="nama" placeholder="Nama" required class="w-full border rounded px-3 py-2">
                <textarea name="isi" rows="3" placeholder="Tulis komentar..." required class="w-full border rounded px-3 py-2"></textarea>
                <button class="w-full bg-blue-500 text-white py-2 rounded">
                    Kirim
                </button>
            </form>

            {{-- LIST KOMENTAR --}}
            <div class="mt-5 space-y-3">
                @forelse ($comments as $i => $comment)
                    <div class="border rounded-lg p-3 relative">
                        <p class="font-semibold">{{ $comment['nama'] }}</p>
                        <p class="text-sm text-gray-600">{{ $comment['isi'] }}</p>

                        {{-- HAPUS --}}
                        <form action="/comment/{{ $nama }}/{{ $i }}" method="POST" class="absolute top-2 right-2">
                            @csrf
                            @method('DELETE')
                            <button class="text-red-500 text-xs hover:underline">
                                Hapus
                            </button>
                        </form>
                    </div>
                @empty
                    <p class="text-center text-gray-400 text-sm">
                        Belum ada komentar
                    </p>
                @endforelse
            </div>
        </div>

    </div>
</div>
@endsection
