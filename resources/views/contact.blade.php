@extends('layouts.master')

@section('content')
<div class="contact-page">
    <div class="contact-header">
        <h1>Hubungi Saya</h1>
        <p>Mari berdiskusi, berkolaborasi, atau sekadar menyapa! Silakan hubungi saya melalui jalur di bawah ini.</p>
    </div>

    <div class="contact-container">
        <div class="contact-info">
            <h2>Informasi Kontak</h2>

            <div class="info-item">
                <span class="info-icon">📍</span>
                <div class="info-text">
                    <strong>Alamat:</strong>
                    <p>Lamongan, Jawa Timur, Indonesia</p>
                </div>
            </div>

            <div class="info-item">
                <span class="info-icon">✉️</span>
                <div class="info-text">
                    <strong>Email:</strong>
                    <p>fitordf@email.com</p>
                </div>
            </div>

            <div class="info-item">
                <span class="info-icon">📷</span>
                <div class="info-text">
                    <strong>Instagram:</strong>
                    <p><a href="https://instagram.com/fitordf" target="_blank">@fito</a></p>
                </div>
            </div>

            <div class="info-item">
                <span class="info-icon">💻</span>
                <div class="info-text">
                    <strong>GitHub:</strong>
                    <p><a href="https://github.com/FitoRifqi" target="_blank">github.com/fito</a></p>
                </div>
            </div>
        </div>

        <div class="contact-form">
            <h2>Kirim Pesan</h2>
            <form action="#" method="POST">
                <div class="form-group">
                    <label for="name">Nama Lengkap</label>
                    <input type="text" id="name" name="name" placeholder="Masukkan nama Anda" required>
                </div>

                <div class="form-group">
                    <label for="email">Alamat Email</label>
                    <input type="email" id="email" name="email" placeholder="Masukkan email Anda" required>
                </div>

                <div class="form-group">
                    <label for="message">Pesan</label>
                    <textarea id="message" name="message" rows="5" placeholder="Tulis pesan Anda di sini..."
                        required></textarea>
                </div>

                <button type="submit" class="btn-submit">Kirim Pesan</button>
            </form>
        </div>
    </div>
</div>
@endsection