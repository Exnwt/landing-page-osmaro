@php
    $site_name = get_pengaturan_value('_site_name');
    $instagram = get_pengaturan_value('_instagram');
    $facebook = get_pengaturan_value('_facebook');
    $linkedin = get_pengaturan_value('_linkedin');
    $lokasi = get_pengaturan_value('_location');

@endphp
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Basic -->
</head>

<body>
    <div class="hero_area">
        @include('partials.header', ['site_name' => $site_name, 'instagram' => $instagram, 'facebook' => $facebook])

        <main>
            @yield('content') <!-- Konten dari halaman lain akan ditampilkan di sini -->
        </main>
    </div>

    @include('partials.footer', ['site_name' => $site_name, 'instagram' => $instagram, 'facebook' => $facebook, 'linkedin' => $linkedin, 'lokasi' => $lokasi])

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="{{ asset('frontend/js/jquery-3.4.1.min.js')}}"></script>
    <script src="{{ asset('frontend/js/bootstrap.js')}}"></script>

    @yield('scripts')
</body>
</html>
