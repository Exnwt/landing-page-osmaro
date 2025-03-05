
@section('title', 'Osmaro')

@section('content')
    <!-- Heading Section -->
    <section class="heading_section">
        <div class="overlay"></div>
        <div class="container">
            <div class="detail-box">
                <div class="heading_container">
                    <h6 class="orange-text"><b>Laboratorium Klinik Osmaro</b></h6>
                    <h2 class="main-heading">
                        <span class="blue-text">Layanan</span> <span class="orange-text">Cepat,</span>
                        <span class="blue-text">Hasil</span> <span class="orange-text">Akurat,</span>
                        <span class="blue-text">OSMARO</span> <span class="orange-text">Aja!</span>
                    </h2>
                </div>
                <p>
                    Laboratorium Klinik OSMARO merupakan fasilitas layanan kesehatan penunjang diagnostik <br> yang memberikan layanan pemeriksaan laboratorium dengan motto <span class="orange-text">Cepat, Profesional, dan Ramah.</span>
                </p>
                <a href="Company Profile Laboratorium Klinik Osmaro Feb 2024.pdf" download class="read-more">
                    <i class="fas fa-file-download"></i> Unduh Profil Perusahaan
                </a>
            </div>
        </div>
    </section>

    <div class="separator"></div>

    <!-- Layanan Section -->
    <section class="layanan_section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="image-grid">
                        <div class="image-box"><img src="{{ asset('frontend/images/layanan1.png') }}" alt="Medical Check Up"></div>
                        <div class="image-box"><img src="{{ asset('frontend/images/layanan2.jpg') }}" alt="Drug Test"></div>
                        <div class="image-box"><img src="{{ asset('frontend/images/layanan3.jpg') }}" alt="Elderly Check Up"></div>
                        <div class="image-box"><img src="{{ asset('frontend/images/layanan4.png') }}" alt="Lab Testing"></div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="detail-box">
                        <div class="heading_container">
                            <h2 class="layanan-heading" id="layanan">Layanan Kami</h2>
                        </div>
                        <ul class="layanan-list">
                            <li>Consultation Service (Digital and Live)</li>
                            <li>Medical Surveillance (Pre-Employee, Periodic, and Specific Medical Examination)</li>
                            <li>General Medical Check Up</li>
                            <li>Home Care Service</li>
                            <li>Onsite Medical Examination</li>
                            <li>Drug and Alcohol Test</li>
                            <li>Medical Check Up for Student</li>
                            <li>Medical Check Up for Elderly</li>
                            <li>Medical Check Up for Child</li>
                            <li>Medical Examination for Food Handler / Hotel and Restaurant</li>
                            <li>Medical Examination for Indonesian Workers</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section -->
    <section class="about_section layout_padding long_section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="img-box">
                        <iframe width="560" height="315" class="video-iframe" src="https://www.youtube.com/embed/38kx7kkOI3c?si=w61JsfQpFoXwPY9m?rel=0&amp;" title="YouTube video player" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share;" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="detail-box">
                        <div class="heading_container">
                            <h2 class="about-heading" id="tentang">Tentang</h2>
                        </div>
                        <p>
                            Laboratorium Klinik OSMARO merupakan sebuah fasilitas layanan kesehatan Penunjang Diagnostik milik swasta. Rencana pendiriannya adalah untuk memberikan layanan Kesehatan berupa pemeriksaan laboratorium.
                        </p>
                        <a href="{{ route('about') }}" class="read-more">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="principles_section">
        <div class="overlay"></div>
        <div class="container">
            <h2 class="prinsip">Prinsip Kami</h2>
            <div class="principles-grid">
                <div class="principle-box">
                    <div class="letter">O</div>
                    <p>Obedience (Kepatuhan)</p>
                </div>
                <div class="principle-box">
                    <div class="letter">S</div>
                    <p>Sincerity (Ketulusan)</p>
                </div>
                <div class="principle-box">
                    <div class="letter">M</div>
                    <p>Motivation (Motivasi)</p>
                </div>
                <div class="principle-box">
                    <div class="letter">A</div>
                    <p>Accountability (Bertanggung Jawab)</p>
                </div>
                <div class="principle-box">
                    <div class="letter">R</div>
                    <p>Respect for Others (Menghormati Orang Lain)</p>
                </div>
                <div class="principle-box">
                    <div class="letter">O</div>
                    <p>Optimistics (Optimis)</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Fasilitas Section -->
    <section class="fasilitas_section layout_padding">
        <div class="container">
            <div class="heading_container">
                <h2 id="fasilitas">Fasilitas Medis</h2>
                <p>Alat dan Mesin Penunjang Medis:</p>
            </div>
            <div class="fasilitas_slider">
                @foreach(\App\Models\FasilitasMedis::all() as $fasilitas)
                    <div class="box">
                        <div class="img-box">
                            <img src="{{ asset('storage/' . $fasilitas->gambar) }}" alt="{{ $fasilitas->nama }}">
                        </div>
                        <div class="detail-box">
                            <h5>{{ $fasilitas->nama }}</h5>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="fasilitas_nav">
                <button onclick="scrollSlider(-1)"></button>
                <button onclick="scrollSlider(1)"></button>
            </div>
        </div>
    </section>
    <div class="separator"></div>
    <!-- Mitra Section -->
    <section class="mitra_section">
        <div class="container">
            <div class="heading_container">
                <h2 class="text-center">MITRA KAMI</h2>
            </div>
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    @foreach (\App\Models\Mitra::all() as $mitra)
                        <div class="swiper-slide">
                            <img src="{{ asset('storage/' . $mitra->image) }}" alt="{{ $mitra->name }}">
                        </div>
                    @endforeach
                </div>
                <div class="swiper-pagination"></div>
            </div>

            <div class="text-center mt-3">
                <a href="{{ route('mitra') }}" class="read-more">Lihat Mitra Lainnya</a>
            </div>
        </div>
    </section>

    <div class="separator"></div>

    <!-- Lokasi Section -->
    <section class="lokasi_section long_section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="form_container">
                        <div class="heading_container">
                            <h2 id="lokasi">Lokasi</h2>
                        </div>
                        <p>{{$lokasi}}</p>
                        <img src="{{ asset('frontend/images/qr.png')}}" alt="QR Code" class="qr-image">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="map_container">
                        <div class="map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.1524869448253!2d104.00306547496521!3d1.0467666989431708!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d98dcb4a5f5687%3A0xc04631a27a806e32!2sOSMARO%20MEDICAL%20LABORATORY!5e0!3m2!1sen!2sid!4v1738899636483!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Informasi Section -->
    <section class="informasi_section layout_padding">
        <div class="container">
            <div class="heading_container">
                <h4 id="info">Info Terkini</h4>
            </div>
            <div class="row">
                @foreach ($post->take(3) as $item)
                <div class="col-md-4 col-12 mb-4">
                    <div class="box">
                        <div class="img-box">
                            <img src="{{ Storage::url($item->thumbnail) }}" alt="{{ $item->title }}">
                        </div>
                        <div class="detail-box">
                            <h6>{{ $item->category->name }}</h6>
                            <a href="{{ route('posts.show', $item->slug) }}" class="custom-link">
                                <h5>{{ Str::limit($item->title, 30) }}</h5>
                            </a>
                            <p>{{ strip_tags(Str::limit($item->body, 100)) }}</p>
                            <a href="{{ route('posts.show', $item->slug) }}" class="read-more">Baca selengkapnya</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="lihat-semua">
                <a href="{{ route('post') }}" class="lihat-semua-link">Lihat Semua...</a>
            </div>
        </div>
    </section>
    <div class="separator"></div>
@endsection

@section('scripts')
    <script>
        function myMap() {
    var mapProp = {
        center: new google.maps.LatLng(40.712775, -74.005973),
        zoom: 18,
    };
    var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
}
const links = document.querySelectorAll('a[href^="#"]');
    function scrollSlider(direction) {
        const slider = document.querySelector(".fasilitas_slider");
        const scrollAmount = 320;
        slider.scrollBy({ left: direction * scrollAmount, behavior: "smooth" });
    }

    var swiper = new Swiper(".mySwiper", {
    slidesPerView: 5,
    spaceBetween: 15,
    loop: true,
    autoplay: {
        delay: 2000,
        disableOnInteraction: false
    },
    pagination: false,
    freeMode: true,
    grabCursor: true,
    breakpoints: {
        1024: { slidesPerView: 5 },
        768: { slidesPerView: 3 },
        480: { slidesPerView: 2 },
        320: { slidesPerView: 1 }
    }
});
document.addEventListener("scroll", function () {
    let scrollPosition = window.scrollY;
    let headingSection = document.querySelector(".heading_section");
    headingSection.style.backgroundPositionY = `${scrollPosition * 0.5}px`;
});


</script>
@endsection
