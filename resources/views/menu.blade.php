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
                    <p><b>TTL:</b> Bogor, 16 Juli 2008</p>
                    <p><b>Kelas:</b> XII RPL</p>
                    <p><b>Umur:</b> 17 Tahun</p>
                    <p><b>Hobi:</b> Game</p>
                    <p><b>Email:</b> madefabian882@gmail.com</p>
                @endif

                @if($nama == 'rasya')
                    <p><b>Nama:</b> Rasya</p>
                    <p><b>TTL:</b> Bogor, 5 Mei 2008</p>
                    <p><b>Kelas:</b> XII RPL</p>
                    <p><b>Umur:</b> 17 Tahun</p>
                    <p><b>Hobi:</b> Mancing</p>
                    <p><b>Email:</b> mrasyasaputra15@gmail.com</p>
                @endif

                @if($nama == 'faiq')
                    <p><b>Nama:</b> Azzam Faiq Ilmi</p>
                    <p><b>TTL:</b> Bogor, 19 Mei 2008</p>
                    <p><b>Kelas:</b> XII RPL</p>
                    <p><b>Umur:</b> 17 Tahun</p>
                    <p><b>Hobi:</b> Olahraga</p>
                    <p><b>Email:</b> azzmfaiq19@gmail.com</p>
                @endif

            </div>

            {{-- NAVIGASI --}}
            <div class="flex justify-center gap-4 mt-6">
                <a href="/menu/bian" class="px-4 py-2 bg-blue-500 text-white rounded-lg">Bian</a>
                <a href="/menu/rasya" class="px-4 py-2 bg-green-500 text-white rounded-lg">Rasya</a>
                <a href="/menu/faiq" class="px-4 py-2 bg-purple-500 text-white rounded-lg">Faiq</a>
            </div>
        </div>

        {{-- ================= KOMENTAR ================= --}}
        <div class="bg-white rounded-2xl shadow-lg p-6 w-[380px] h-[600px] flex flex-col">

            <h2 class="text-xl font-bold mb-4 text-center shrink-0">
                Komentar untuk {{ ucfirst($nama) }}
            </h2>

            {{-- FORM KOMENTAR --}}
            <form action="/comment/{{ $nama }}" method="POST" class="shrink-0 mb-4">
                @csrf

                <input
                    type="text"
                    name="nama"
                    placeholder="Nama"
                    required
                    class="w-full border rounded-lg px-3 py-2 mb-2"
                >

                <textarea
                    name="isi"
                    rows="3"
                    placeholder="Tulis komentar..."
                    required
                    class="w-full border rounded-lg px-3 py-2 mb-2"
                ></textarea>

                <button
                    type="submit"
                    class="w-full bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600"
                >
                    Kirim
                </button>
            </form>

            {{-- LIST KOMENTAR --}}
            <div class="space-y-3 overflow-y-auto flex-1 min-h-0">
                @forelse ($comments as $comment)
                    <div class="border rounded-lg p-3 flex justify-between items-start">
                        <div class="flex-1">
                            <p class="font-semibold">{{ $comment['nama'] }}</p>
                            <p class="text-sm text-gray-600">{{ $comment['isi'] }}</p>
                        </div>
                        <form action="/comment/{{ $nama }}/{{ $loop->index }}" method="POST" class="ml-2" onsubmit="return confirm('Yakin ingin menghapus komentar ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500 hover:text-red-700 text-sm font-semibold">
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
