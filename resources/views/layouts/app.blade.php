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
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Site -->
    <link rel="icon" href="{{ asset('frontend/images/fevicon.png')}}" type="image/gif" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>@yield('title', 'Osmaro')</title>

    <!-- Stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet" />
    <link href="{{ asset('frontend/css/style.css')}}" rel="stylesheet" />
    <link href="{{ asset('frontend/css/responsive.css')}}" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
</head>

<body>
    <h1>Welcome to Home Page</h1>
</body>
</html>
