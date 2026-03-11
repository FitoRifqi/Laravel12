@extends('layouts.master')

@section('content')

<div class="hero">

    <div class="hero-text">

        <h1>Welcome to My Profile</h1>

        <p>
            Halo! Saya <b>Fito Rifqi</b>, mahasiswa Teknik Informatika di PENS.
            Saya tertarik pada dunia Web Development dan Teknologi Digital.
        </p>

        <a href="/about" class="btn">Lihat Profil Saya</a>

    </div>

    <div class="hero-img">
        <img src="{{ asset('assets/img/profile.jpg') }}" alt="profile">
    </div>

</div>

@endsection