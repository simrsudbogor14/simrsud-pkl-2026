<!DOCTYPE html>
<html>
<head>
    <title>Biodata</title>
</head>
<body>

<h2>Biodata {{ ucfirst($nama) }}</h2>

<nav>
    <a href="/menu/bian">Bian</a> |
    <a href="/menu/rasya">Rasya</a> |
    <a href="/menu/faiq">Faiq</a>
</nav>

<hr>

@if($nama == 'bian')
    <p><b>Nama:</b> Bian</p>
    <p><b>Kelas:</b> XI RPL</p>
    <p><b>Umur:</b> 16 Tahun</p>
    <p><b>Hobi:</b> Ngoding</p>
@endif

@if($nama == 'rasya')
    <p><b>Nama:</b> Rasya</p>
    <p><b>Kelas:</b> XI RPL</p>
    <p><b>Umur:</b> 16 Tahun</p>
    <p><b>Hobi:</b> Desain</p>
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

</body>
</html>
