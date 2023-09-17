<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>Dashboard</title><!--Bari ini untuk memberi judul pada halaman web-->
</head>
<body>
    <h1>SELAMAT DATANG</h1>
    <!--Baris baris berikut merupakan foder class search yang berisikan sebuah kolom inputan bernama search
        dan sebuah tombol dengan nama yang sama dan diberi ikon search-->
    <div class="search">
        <input type="search" placeholder="search" name="search" value="">
        <button name="search"><i class="fas fa-search"></i></button>
    </div>
    <!--Baris baris berikut merupakan folder class navigator yang berisikan link-link menuju halaman web yang
        lain dan sebuah tombol logout-->
    <div class="Navigator">
        <a href="#">Home</a>
        <a href="/dataObat">Data Obat</a>
        <a href="#">Data Penjualan</a>
        <button name="logout">logout</button>
    </div>
    <div>
        <!--Baris baris berikut untuk membuat tabel yang berisikan No, Nama, Dosis dan Harga-->
        <table>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Dosis</th>
                <th>harga</th>
            </tr>
            <tr>
                <!--Baris bari berikut berisikan isi dari tabel tersebut sesuai dengan subjeknya masing-masing-->
                <td>1</td>
                <td>Amoxilin</td>
                <td>50mg</td>
                <td>12000</td>
            </tr>
        </table>
    </div>
    
</body>
</html>