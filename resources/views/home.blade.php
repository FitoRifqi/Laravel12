@extends('layouts.master')

@section('content')

<div class="hero">

    <div class="hero-img">
        <img src="{{ asset('assets/img/profile.jpg') }}" alt="profile">
    </div>

    <div class="hero-text">

        <h1>Welcome to My Profile</h1>

        <p>
            Halo! Saya <b>Fito Rifqi</b>, mahasiswa Teknik Informatika di PENS.
            Saya memiliki passion yang besar dalam dunia Web Development dan UI Design.
        </p>

        <a href="/about" class="btn">Lihat Profil Saya</a>

    </div>

</div>

<div class="background-section">
    <h2>Latar Belakang Singkat</h2>
    <p>
        Saat ini saya sedang menempuh pendidikan di Politeknik Elektronika Negeri Surabaya (PENS).
        Saya sangat tertarik mengeksplorasi teknologi baru, terutama dalam pengembangan aplikasi web dan mobile
        menggunakan <b>Laravel</b> dan <b>Flutter</b>.
        Di luar dunia akademik dan perkodingan, saya juga menikmati merakit dan bermain PC Gaming, serta rutin melakukan
        olahraga kebugaran.
    </p>
</div>

@endsection