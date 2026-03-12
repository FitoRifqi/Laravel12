@extends('layouts.master')

@section('content')
<div class="about-page">
    <div class="about-header">
        <h1>Tentang Saya</h1>
        <p>Kenali lebih jauh tentang latar belakang, perjalanan pendidikan, dan karya-karya saya.</p>
    </div>

    <div class="about-content">
        <section class="biodata-section">
            <h2>Biodata Diri</h2>
            <table class="biodata-table">
                <tr>
                    <th>Nama Lengkap</th>
                    <td>: Fito Rifqi Dwi Fatoni</td>
                </tr>
                <tr>
                    <th>Usia</th>
                    <td>: 20 Tahun</td>
                </tr>
                <tr>
                    <th>Tempat Tinggal</th>
                    <td>: Kos As 19,Beringin, Lamongan, Jawa Timur</td>
                </tr>
                <tr>
                    <th>Fokus Studi</th>
                    <td>: Teknik Informatika</td>
                </tr>
                <tr>
                    <th>Peminatan Teknis</th>
                    <td>: Laravel, Flutter, Mysql</td>
                </tr>
            </table>
        </section>

        <section class="education-section">
            <h2>Riwayat Pendidikan</h2>
            <div class="timeline">
                <div class="timeline-item">
                    <h3>Politeknik Elektronika Negeri Surabaya</h3>
                    <p>Mahasiswa D3 Teknik Informatika </p>
                </div>
                <div class="timeline-item">
                    <h3>[SMK Antartika 2 Sidoarjo]</h3>
                    <p>Jurusan [Rekayasa Perangkat Lunak] (2024)</p>
                </div>
                <div class="timeline-item">
                    <h3>[SMP Negeri 2 Sedati]</h3>
                    <p>(2021)</p>
                </div>
                <div class="timeline-item">
                    <h3>[SD Negeri Buncitan 404]</h3>
                    <p>(2018)</p>
                </div>
            </div>
        </section>

        <section class="portfolio-section">
            <h2>Portofolio & Proyek</h2>
            <div class="portfolio-grid">

                <div class="portfolio-card">
                    <div class="portfolio-icon">📁</div>
                    <h3>Internet Of Think</h3>
                    <p>Sistem monitoring IoT realtime untuk energi paving block piezoelectric dan deteksi genangan air.
                    </p>
                </div>

                <div class="portfolio-card">
                    <div class="portfolio-icon">💬</div>
                    <h3>LAN Messenger</h3>
                    <p>Simple Local Network-Based Chat Application. Aplikasi obrolan berbasis jaringan lokal yang
                        dirancang untuk komunikasi instan dalam satu jaringan.</p>
                </div>

                <div class="portfolio-card">
                    <div class="portfolio-icon">🚀</div>
                    <h3>Web & Mobile Integration</h3>
                    <p>Eksplorasi dan pengembangan aplikasi terintegrasi menggunakan framework web, mobile (Flutter),
                        dan layanan cloud.</p>
                </div>

            </div>
        </section>
    </div>
</div>
@endsection