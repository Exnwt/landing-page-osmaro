@extends('layouts.app')

@section('content')
<section class="tentang_section layout_padding long_section">
    <div class="container">
        <div class="heading_container text-center mb-4" >
            <h2>Tentang Klinik</h2>
        </div>
        <div class="separator"></div>
        <div class="row">
            <div class="col-md-6">
                <div class="img-box">
                    <iframe width="560" height="315" class="video-iframe"
                        src="https://www.youtube.com/embed/38kx7kkOI3c?rel=0"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share;"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                    </iframe>
                </div>
            </div>
            <div class="col-md-6">
                <div class="detail-box">
                    <div class="heading_container">
                        <h2 class="about-heading" id="perkenalan">Perkenalan</h2>
                    </div>
                    <p>
                        Laboratorium Klinik OSMARO merupakan sebuah fasilitas layanan kesehatan Penunjang Diagnostik milik
                        swasta. Rencana pendiriannya adalah untuk memberikan layanan Kesehatan berupa pemeriksaan
                        laboratorium. Laboratorium Klinik Osmaro dibawah naungan dari PT. Osmaro Jaya Medika berdiri pada
                        tanggal 17 Februari 2022 berdasarkan izin Laboratorium Medis dalam Perizinan Berusaha Berbasis Risiko
                        no 12970006712490001 yang dikeluarkan oleh Gubernur Kepulauan Riau, Kepala DPMPTSP Provinsi
                        Kepulauan Riau. Laboratorium Klinik Osmaro Berlokasi di Jln. Letjen Soeprapto Ruko Buana Central Park
                        Blok B no. 15-16, Kel. Kibing, Kec. Batu Aji, Kota Batam.</p>
                        <a href="Company Profile Laboratorium Klinik Osmaro Feb 2024.pdf"
                           download
                           class="read-more"
                           >
                            <i class="fas fa-file-download"></i> Unduh Profil Perusahaan
                        </a>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="separator"></div>
<section class="visi_misi_section layout_padding">
    <div class="container">
        <div class="heading_container text-center">
            <h2 id="visi">Visi & Misi</h2>
        </div>
        <div class="row">
            <div class="col-md-6">
                <h3>Visi</h3>
                <p>Menjadi Laboratorium Klinik terbesar dikota batam, laboratorium utama pilihan masyarakat kota batam dan laboratorium dengan memiliki 3 cabang dibeberapa kota lain pada tahun 2024.
                </p>
            </div>
            <div class="col-md-6">
                <h3>Misi</h3>
                <ul>
                    <li>Menerapkan system pelayanan yang prima dan professional.</li>
                    <li>Meningkatkan kualitas tenaga medis dan nonmedis yang berkesinambungan.</li>
                    <li>Menerapkan system informasi manajemen berbasis IT.</li>
                    <li>Meningkatkan sarana inftrastruktur dan suprastruktur yang sesuai dengan Standard kesehatan.</li>
                    <li>Memberikan pelayanan optimal yang berorentasi pasien.</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<div class="separator"></div>
<div class="motto-core-container">
    <section class="motto_section">
        <div class="container">
            <div class="heading_container">
                <h2 id="moto">Moto</h2>
            </div>
            <p><i> <span class="orange-text">FPF</span> Services / Layanan <span class="orange-text">CPR</span></i></p>
            <p><b>F</b>ast / <b>C</b>epat</p>
            <p><b>P</b>rofessional / <b>P</b>rofesional</p>
            <p><b>F</b>riendly / <b>R</b>amah</p>
        </div>
    </section>

    <section class="core_values_section">
        <div class="container">
            <div class="heading_container">
                <h2 id="prinsip">Prinsip</h2>
            </div>
            <p><b>O</b>bedience (Kepatuhan)</p>
            <p><b>S</b>incerity (Ketulusan)</p>
            <p><b>M</b>otivation (Motivasi)</p>
            <p><b>A</b>ccountability (Bertanggung Jawab)</p>
            <p><b>R</b>espect for Others (Menghormati Orang Lain)</p>
            <p><b>O</b>ptimistics (Optimis)</p>
        </div>
    </section>
</div>
<div class="separator"></div>
<section class="certification_section">
    <div class="container">
        <div class="heading_container">
        <h2 id="sertifikasi">Sertifikasi</h2>
        </div>
        <div class="certification_content">
            <div class="certification_image">
                <img src="{{ asset('frontend/images/sertifikasi.png')}}" alt="ISO 9001:2015 Certified">
            </div>
            <div class="certification_text">
                <p>ZQUAL SERTIFIKASI INDONESIA</p>
                <p>ISO 9001:2015</p>
                <p>CERTIFICATE NUMBER OJM077A</p>
            </div>
        </div>
    </div>
</section>
@endsection
