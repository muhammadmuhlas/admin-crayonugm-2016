@extends('layouts.app')

@section('content')
<div id="wrapper">
    <header id="header" class="alt">
        <span class="logo"><img src="images/crayon-logo.png" alt="" /></span>
        <h1>Halo, {{ Auth::user()->name}}</h1>
    </header>
    <nav id="nav">
        <ul>
            <li><a href="#go-to-welcome" class="active">Welcome</a></li>
            <li><a href="#go-to-profil" class="active">Data Pendaftar</a></li>
            <li><a href="/logout" class="active" style="font-weight: bold; color: white; background: red;">Keluar</a></li>
        </ul>
    </nav>
    <div id="main">
            <section id="go-to-welcome" class="main special">
                <header class="major">
                    <h2>Selamat Datang</h2>
                    Data Pendaftar tersedia disini<br> <b>Data yang ditampilkan berikut menggunakan opsi tambahan yaitu "WHERE nama !="" AND WHERE telepon != ""</b>
                    </br>
                    Dikarenakan banyaknya junk data.
                    </p>
                </header>
            </section>
            <section id="go-to-profil" class="main">
                <div class="spotlight">
                    <div class="content">
                        <header class="major">
                            <h2>Data Pendaftar</h2>
                        </header>
                        <div class="table-wrapper">
                            <table class="alt">
                                <thead>
                                    <tr>
                                        <td>Nama</td>
                                        <td>Kealmin</td>
                                        <td>Umur</td>
                                        <td>Telepon</td>
                                        <td>Sekolah</td>
                                        <td>Alamat</td>
                                        <td>Kategori</td>
                                        <td>Tanggal Registrasi</td>
                                        <td>Konfirmasi</td>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($data_pendaftar as $pendaftar)
                                    <tr @if($pendaftar->bayar == "N")style="background: #FFC0CB;" @endif>
                                        <td>{{$pendaftar->nama}}</td>
                                        <td>
                                            @if($pendaftar->kelamin == "1")
                                                Lelaki
                                            @endif
                                            @if($pendaftar->kelamin == "2")
                                                Wanita
                                            @endif
                                        </td>
                                        <td>{{$pendaftar->umur}}</td>
                                        <td>{{$pendaftar->telepon}}</td>
                                        <td>{{$pendaftar->sekolah}}</td>
                                        <td>{{$pendaftar->alamat}}</td>
                                        <td>{{$pendaftar->kategori}}</td>
                                        <td>{{$pendaftar->created_at}}</td>
                                        <td>
                                            @if($pendaftar->bayar == "N")
                                                <a href="/activate-bayar/{{$pendaftar->id}}">Confirm</a>
                                            @endif
                                            @if($pendaftar->bayar == "Y")
                                                <a href="/deactivate-bayar/{{$pendaftar->id}}" style="">UnConfirm</a>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>
    </div>
    <footer id="footer" style="margin: 0px; padding-bottom: 10px">
        <section>
            <h2 style="font-weight: bold">Crayon UGM 2016</h2>
            <p style="font-weight: 400;">
            CRAYON adalah lomba tahunan dari Himpunan Mahasiswa Ilmu Komputer (Himakom) UGM.
            <br>
            Inilah kesempatan untuk berimajinasi dan berkreasi seluas-luasnya.
            <br>
            <br>
            Semangat Berkarya, Selamat Berlomba! 
        </section>
        <section>
            <h2 style="font-weight: bold">Main Office</h2>
            <dl class="alt" style="font-weight: 400">
                <dt>Address</dt>
                <dd>Gedung S1 Fakultas MIPA Universitas Gadjah Mada</dd>
                <dt>Phone</dt>
                <dd>+62 82 234 234 095</dd>
                <dt>Email</dt>
                <dd>info@crayonugm.com</dd>
            </dl>
            <ul class="icons">
                <li><a href="#" class="icon fa-twitter alt"><span class="label">Twitter</span></a></li>
                <li><a href="https://www.facebook.com/CrayonUGM/?fref=ts" class="icon fa-facebook alt"><span class="label">Facebook</span></a></li>
                <li><a href="https://www.instagram.com/crayon.ugm/" class="icon fa-instagram alt"><span class="label">Instagram</span></a></li>
            </ul>
        </section>
        <p class="copyright">© 2016 | Technical Suport Crayon UGM</p>
    </footer>
</div>
@endsection
