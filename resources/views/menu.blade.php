@extends('layouts.app')

@section('title', 'Biodata')

@section('content')


<div class="flex items-center justify-center min-h-screen">
    <div class="bg-white rounded-2xl shadow-lg p-8 w-full max-w-md text-center profile-card">

        {{-- HEADER DECOR --}}
        <div class="card-header">
            {{-- FOTO --}}
            <img
                src="/foto/{{ $nama }}.jpg"
                onerror="this.onerror=null;this.src='/foto/default.jpg'"
                class="profile-photo w-32 h-32 mx-auto rounded-full object-cover border-4 border-blue-500"
                alt="Foto {{ $nama }}"
            >
        </div>

        {{-- NAMA + BADGE --}}
        <h2 class="text-2xl font-bold mt-4 capitalize profile-name">{{ $nama }}</h2>
        <p class="text-gray-500 mb-4 profile-role badge">Siswa XII RPL</p>

        {{-- BIODATA --}}
        <div class="text-left space-y-2 profile-details">
            @if($nama == 'bian')
                <p><b class="detail-key">Nama:</b> <span class="detail-val">Bian</span></p>
                <p><b class="detail-key">Tempat/Tanggal Lahir:</b> <span class="detail-val">Bogor, 16 Juli 2008</span></p>
                <p><b class="detail-key">Kelas:</b> <span class="detail-val">XII RPL</span></p>
                <p><b class="detail-key">Umur:</b> <span class="detail-val">17 Tahun</span></p>
                <p><b class="detail-key">Hobi:</b> <span class="detail-val">Game</span></p>
                <p><b class="detail-key">Alamat:</b> <span class="detail-val">Cemplang Baru Cilendek Barat, Bogor</span></p>
                <p><b class="detail-key">No HP:</b> <span class="detail-val">081290223039</span></p>
                <p><b class="detail-key">Email:</b> <span class="detail-val">madefabian882@gmail.com</span></p>
            @endif

            @if($nama == 'rasya')
                <p><b class="detail-key">Nama:</b> <span class="detail-val">Rasya</span></p>
                <p><b class="detail-key">Umur:</b> <span class="detail-val">17 Tahun</span></p>
                <p><b class="detail-key">Hobi:</b> <span class="detail-val">mancing</span></p>
                <p><b class="detail-key">Alamat:</b> <span class="detail-val">pabuaran poncol tanah sareal, Bogor</span></p>
                <p><b class="detail-key">No HP:</b> <span class="detail-val">089669655520</span></p>
                <p><b class="detail-key">Email:</b> <span class="detail-val">mrasyasaputra15@gmail.com</span></p>

<div class="min-h-screen flex justify-center items-center bg-gray-100">
    <div class="flex gap-6">

        {{-- ================= BIODATA ================= --}}
        <div class="bg-white rounded-2xl shadow-lg p-8 w-full max-w-md text-center">

            {{-- FOTO --}}
            <img 
                src="/foto/{{ $nama }}.jpg"
                class="w-32 h-32 mx-auto rounded-full object-cover border-4 border-blue-500"
                alt="Foto {{ $nama }}"
            >

            {{-- NAMA --}}
            <h2 class="text-2xl font-bold mt-4 capitalize">{{ $nama }}</h2>
            <p class="text-gray-500 mb-6">Siswa XII RPL</p>

            {{-- BIODATA --}}
            <div class="text-left space-y-2">
                @if($nama == 'bian')
                    <p><b>Nama:</b> Bian</p>
                    <p><b>Tempat/Tanggal Lahir:</b> Bogor, 16 Juli 2008</p>
                    <p><b>Kelas:</b> XII RPL</p>
                    <p><b>Umur:</b> 17 Tahun</p>
                    <p><b>Hobi:</b> Game</p>
                    <p><b>Alamat:</b> Cemplang Baru Cilendek Barat, Bogor</p>
                    <p><b>No HP:</b> 081290223039</p>
                    <p><b>Email:</b> madefabian882@gmail.com</p>
                @endif


                @if($nama == 'rasya')
                    <p><b>Nama:</b> Rasya</p>
                    <p><b>Umur:</b> 16 Tahun</p>
                    <p><b>Hobi:</b> Doni nama bapaku</p>
                @endif

                @if($nama == 'faiq')
                    <p><b>Nama:</b> Azzam Faiq Ilmi</p>
                    <p><b>Tempat/Tanggal Lahir:</b> Bogor, 19 Mei 2008</p>
                    <p><b>Kelas:</b> XII RPL</p>
                    <p><b>Umur:</b> 17 Tahun</p>
                    <p><b>Hobi:</b> Olahraga</p>
                    <p><b>Alamat:</b> Taman Pagelaran Ciomas, Bogor</p>
                    <p><b>No HP:</b> 085930266131</p>
                    <p><b>Email:</b> azzmfaiq19@gmail.com</p>
                @endif
            </div>

            {{-- NAVIGASI --}}
            <div class="flex justify-center gap-4 mt-6">
                <a href="/menu/bian" class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600">Bian</a>
                <a href="/menu/rasya" class="px-4 py-2 bg-green-500 text-white rounded-lg hover:bg-green-600">Rasya</a>
                <a href="/menu/faiq" class="px-4 py-2 bg-purple-500 text-white rounded-lg hover:bg-purple-600">Faiq</a>
            </div>


            @if($nama == 'faiq')
                <p><b class="detail-key">Nama:</b> <span class="detail-val">Azzam Faiq Ilmi</span></p>
                <p><b class="detail-key">Tempat/Tanggal Lahir:</b> <span class="detail-val">Bogor, 19 Mei 2008</span></p>
                <p><b class="detail-key">Kelas:</b> <span class="detail-val">XII RPL</span></p>
                <p><b class="detail-key">Umur:</b> <span class="detail-val">17 Tahun</span></p>
                <p><b class="detail-key">Hobi:</b> <span class="detail-val">Olahraga</span></p>
                <p><b class="detail-key">Alamat:</b> <span class="detail-val">Taman Pagelaran Ciomas, Bogor</span></p>
                <p><b class="detail-key">No HP:</b> <span class="detail-val">085930266131</span></p>
                <p><b class="detail-key">Email:</b> <span class="detail-val">azzmfaiq19@gmail.com</span></p>
            @endif
        </div>

        {{-- NAVIGASI --}}
        <div class="divider my-4"></div>

        <div class="flex justify-center gap-4 mt-6 nav-group">
            <a href="/menu/bian" class="px-4 py-2 bg-gradient-to-r from-blue-500 to-blue-600 text-white rounded-lg hover:from-blue-600 hover:to-blue-700 nav-button">
                <svg class="btn-icon" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="8" cy="8" r="6" stroke="white" stroke-opacity=".18"/></svg>
                Bian
            </a>
            <a href="/menu/rasya" class="px-4 py-2 bg-gradient-to-r from-red-500 to-red-600 text-white rounded-lg hover:from-red-600 hover:to-red-700 nav-button">
                <svg class="btn-icon" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="3" y="3" width="14" height="14" rx="3" stroke="white" stroke-opacity=".16"/></svg>
                Rasya
            </a>
            <a href="/menu/faiq" class="px-4 py-2 bg-gradient-to-r from-purple-500 to-purple-600 text-white rounded-lg hover:from-purple-600 hover:to-purple-700 nav-button">
                <svg class="btn-icon" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4 10h12" stroke="white" stroke-opacity=".14" stroke-width="1.2"/></svg>
                Faiq
            </a>

        </div>

        {{-- ================= KOMENTAR ================= --}}
        <div class="bg-white rounded-2xl shadow-lg p-6 w-full max-w-md">

            <h2 class="text-xl font-bold mb-4 text-center">Komentar</h2>

            {{-- FORM KOMENTAR --}}
            <form action="/comment/{{ $nama }}" method="POST">
                @csrf

                <input
                    type="text"
                    name="nama"
                    placeholder="Nama"
                    required
                    class="w-full border rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400"
                >

                <textarea
                    name="isi"
                    rows="3"
                    placeholder="Tulis komentar..."
                    required
                    class="w-full border rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400"
                ></textarea>

                <button
                    type="submit"
                    class="w-full bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600"
                >
                    Kirim
                </button>
            </form>

            {{-- LIST KOMENTAR --}}
            <div class="mt-5 space-y-3">
                @forelse ($comments as $comment)
                    <div class="border rounded-lg p-3">
                        <p class="font-semibold">{{ $comment['nama'] }}</p>
                        <p class="text-sm text-gray-600">{{ $comment['isi'] }}</p>
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
