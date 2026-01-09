@extends('layouts.app')

@section('title', 'Biodata')

@section('content')

<div class="flex items-center justify-center min-h-screen">
    <div class="bg-white rounded-2xl shadow-lg p-8 w-full max-w-md text-center">

        {{-- FOTO --}}
        <img 
            src="/foto/{{ $nama }}.jpg"
            class="w-32 h-32 mx-auto rounded-full object-cover border-4 border-blue-500"
            alt="Foto {{ $nama }}"
        >

        {{-- NAMA --}}
        <h2 class="text-2xl font-bold mt-4 capitalize">{{ $nama }}</h2>
        <p class="text-gray-500 mb-6">Siswa XI RPL</p>

        {{-- BIODATA --}}
        <div class="text-left space-y-2">
            @if($nama == 'bian')
                <p><b>Nama:</b> Bian</p>
                <p><b>Umur:</b> 16 Tahun</p>
                <p><b>Hobi:</b> Ngoding</p>
            @endif

            @if($nama == 'rasya')
                <p><b>Nama:</b> Rasya</p>
                <p><b>Umur:</b> 16 Tahun</p>
                <p><b>Hobi:</b> (isi sendiri)</p>

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

    </div>
</div>

@endsection
