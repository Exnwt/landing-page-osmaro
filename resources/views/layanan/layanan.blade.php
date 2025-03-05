@extends('layouts.app')

@section('content')
<section class="layanan_page">
    <div class="container">
        <div class="heading_container text-center mb-4" >
            <h2>Layanan Klinik</h2>
        </div>
        <div class="separator"></div>
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
@endsection
