<section class="info_section long_section">
    <div class="container">
        <div class="info_top">
            <div class="row">
                <div class="col-md-3 col-6">
                    <h5>Menu Utama</h5>
                    <div class="info_links_menu">
                        <a href="{{ route('layanan') }}">Layanan</a>
                        <a href="{{ route('fasilitas') }}">Fasilitas</a>
                        <a href="{{ route('mitra') }}">Mitra</a>
                        <a href="{{ route('post') }}">Blog</a>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <h5>Tentang Kami</h5>
                    <div class="info_links_menu">
                        <a href="{{ url('about#perkenalan') }}">Perkenalan</a>
                        <a href="{{ url('about#visi') }}">Visi & Misi</a>
                        <a href="{{ url('about#moto') }}">Moto</a>
                        <a href="{{ url('about#prinsip') }}">Prinsip</a>
                        <a href="{{ url('about#sertifikasi') }}">Sertifikasi</a>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <h5>Jam Operasional</h5>
                    <div class="info_jam">
                        <i class="fas fa-clock"></i> <strong>08:00 - 21:00 WIB</strong>
                    </div>
                </div>

                <div class="col-md-3 col-6">
                    <div class="info_kontak">
                        <h5>KONTAK</h5>
                        <p>Kontak<br><a href="tel:+628116418181">0811 6418 181</a></p>
                        <p>Email<br><a href="mailto:marketing@osmaro.co.id">marketing@osmaro.co.id</a></p>
                        <p>{{$lokasi}}</p>
                        <div class="social_media_icons">
                            <a href="{{$facebook}}" target="_blank"><i class="fab fa-facebook-f"></i></a>
                            <a href="{{$instagram}}" target="_blank"><i class="fab fa-instagram"></i></a>
                            <a href="{{$linkedin}}" target="_blank"><i class="fab fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<footer class="footer_section">
    <div class="container">
        <p>&copy; <span id="displayYear"></span> All Rights Reserved By {{$site_name}}</p>
    </div>
</footer>
