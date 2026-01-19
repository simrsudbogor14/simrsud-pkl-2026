@extends('layouts.app')

@section('title', 'Biodata')

@section('content')

<div class="min-h-screen flex items-center justify-center px-4" id="backgroundContainer" style="background-size: cover; background-position: center; background-attachment: fixed;">
    {{-- <style>
        #backgroundContainer {
            background-image: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url('/foto/pemandangan.jpg');
            transition: opacity 2s ease-in-out;
        }

        #backgroundContainer.fade-out {
            opacity: 0.5;
        }
    </style> --}}

    <div class="flex flex-col md:flex-row gap-6">

        {{-- ================= BIODATA ================= --}}
        <div class="bg-white rounded-2xl shadow-lg p-8 w-[380px] text-center">

            {{-- FOTO --}}
            <img
                src="/foto/{{ $nama }}.jpg"
                onerror="this.onerror=null;this.src='/foto/default.jpg'"
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
                    <p><b>TTL:</b> Bogor, 16 Juli 2008</p>
                    <p><b>Kelas:</b> XII RPL</p>
                    <p><b>Umur:</b> 17 Tahun</p>
                    <p><b>Hobi:</b> Game</p>
                    <p><b>Alamat:</b> Cemplang Baru Cilendek Barat</p>
                    <p><b>No HP:</b> 081290223039</p>
                    <p><b>Email:</b> madefabian882@gmail.com</p>

                @elseif($nama == 'rasya')
                    <p><b>Nama:</b> Rasya</p>
                    <p><b>TTL:</b> Bogor, 5 Mei 2008</p>
                    <p><b>Kelas:</b> XII RPL</p>
                    <p><b>Umur:</b> 17 Tahun</p>
                    <p><b>Hobi:</b> Mancing</p>
                    <p><b>Alamat:</b> Pabuaran Poncol, Bogor</p>
                    <p><b>No HP:</b> 089669655520</p>
                    <p><b>Email:</b> mrasyasaputra15@gmail.com</p>

                @elseif($nama == 'faiq')
                    <p><b>Nama:</b> Azzam Faiq Ilmi</p>
                    <p><b>TTL:</b> Bogor, 19 Mei 2008</p>
                    <p><b>Kelas:</b> XII RPL</p>
                    <p><b>Umur:</b> 17 Tahun</p>
                    <p><b>Hobi:</b> Olahraga</p>
                    <p><b>Alamat:</b> Taman Pagelaran Ciomas</p>
                    <p><b>No HP:</b> 085930266131</p>
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
        <div class="bg-white rounded-2xl shadow-lg p-6 w-[380px]">

            <h2 class="text-xl font-bold mb-4 text-center">Komentar</h2>

            <form action="/comment/{{ $nama }}" method="POST" class="space-y-3">
                @csrf

                <input
                    type="text"
                    name="nama"
                    placeholder="Nama"
                    required
                    class="w-full border rounded-lg px-3 py-2"
                >

                <textarea
                    name="isi"
                    rows="3"
                    placeholder="Tulis komentar..."
                    required
                    class="w-full border rounded-lg px-3 py-2"
                ></textarea>

                <button
                    type="submit"
                    class="w-full bg-blue-500 text-white py-2 rounded-lg"
                >
                    Kirim
                </button>
            </form>

            <div class="mt-5 space-y-3 max-h-60 overflow-y-auto pr-2">
                @forelse ($comments as $comment)
                    <div class="border rounded-lg p-3 flex items-start justify-between gap-3">
                        <div class="flex-1">
                            <p class="font-semibold">{{ $comment['nama'] }}</p>
                            <p class="text-sm text-gray-600">{{ $comment['isi'] }}</p>
                        </div>

                        <form action="/comment/{{ $nama }}/{{ $loop->index }}" method="POST" onsubmit="return confirm('Hapus komentar ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="comment-delete">Hapus</button>
                        </form>
                    </div>
                @empty
                    <p class="text-center text-gray-400 text-sm">
                        Belum ada komentar
                    </p>
                @endforelse
            </div>

        </div>

{{-- <script>
    const backgroundContainer = document.getElementById('backgroundContainer');
    const photos = ['download.jpg', 'pemandangan1.jpg', 'pemandangan.jpg'];
    let currentIndex = 0;

    function changeBackground() {
        // Fade out
        backgroundContainer.classList.add('fade-out');

        // Ganti foto setelah fade out
        setTimeout(() => {
            currentIndex = (currentIndex + 1) % photos.length;
            backgroundContainer.style.backgroundImage = `linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url('/foto/${photos[currentIndex]}')`;

            // Fade in
            setTimeout(() => {
                backgroundContainer.classList.remove('fade-out');
            }, 50);
        }, 1000);
    }

    // Ganti background setiap 5 detik
    setInterval(changeBackground, 5000);
</script> --}}

@endsection
