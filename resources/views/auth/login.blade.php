@extends('layouts.app')

@section('content')
<div id="wrapper">
    <header id="header" class="alt">
        <span class="logo"><img src="images/crayon-logo.png" alt="" /></span>
        <h1>Halaman Admin Crayon 9</h1>
    </header>
    <nav id="nav">
        <ul>
            <li><a href="#go-to-masuk" class="active">Masuk</a></li>
        </ul>
    </nav>
    <div id="main">
            <section id="go-to-masuk" class="main">
                <div class="spotlight">
                    <div class="content">
                        <header class="major">
                            <h2>Masuk</h2>
                        </header>

                        <form method="post" action="/login">
                            {{ csrf_field() }}
                            <div class="row uniform">
                                <div class="9u 12u$(xsmall)">
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                    <input type="email" name="email" id="email" value="" placeholder="Email">
                                </div>
                            </div>
                            <div class="row uniform">
                                <div class="9u$ 12u$(xsmall)">
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                    <input type="password" name="password" id="password" value="" placeholder="Password">
                                </div>
                            </div>
                            <div class="row uniform">
                                <div class="12u$">
                                    <ul class="actions">
                                        <li><input type="submit" value="Masuk" class="special"></li>
                                        <li id="forgot-password"><a href="#go-to-password" class="button">Lupa Password</a></li>
                                    </ul>
                                </div>
                            </div>
                        </form>
                    </div>
                    <span class="image" style="background:rgba(97, 221, 224, 0.72)"><img src="images/1.png" alt="" /></span>
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
