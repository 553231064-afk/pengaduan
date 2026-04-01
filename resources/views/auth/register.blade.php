<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar - SuaraSiswa</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap"
        rel="stylesheet">
        <style>
            /* =========================
   PIXEL ART / 8-BIT THEME (DAFTAR)
========================= */
:root {
    --primary: #000000;
    --accent: #5e35b1;
    --bg: #212121;
    --card: #ffffff;
    --text: #000000;
    
    /* Pixel Border Style */
    --pixel-border: 
        4px 0 0 0 #000, 
        -4px 0 0 0 #000, 
        0 4px 0 0 #000, 
        0 -4px 0 0 #000;
        
    --pixel-shadow: 8px 8px 0px rgba(0,0,0,0.2);
}

body.auth-wrapper {
    background-color: var(--bg);
    background-image: 
        linear-gradient(45deg, #2a2a2a 25%, transparent 25%), 
        linear-gradient(-45deg, #2a2a2a 25%, transparent 25%), 
        linear-gradient(45deg, transparent 75%, #2a2a2a 75%), 
        linear-gradient(-45deg, transparent 75%, #2a2a2a 75%);
    background-size: 40px 40px;
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 100vh;
    font-family: 'Press Start 2P', cursive;
    color: var(--text);
    padding: 20px; /* Jarak agar tidak mepet di layar hp */
}

/* Card Style */
.auth-card {
    background: var(--card);
    width: 100%;
    max-width: 500px; /* Sedikit lebih lebar untuk form daftar */
    padding: 2.5rem 2rem;
    box-shadow: var(--pixel-border), var(--pixel-shadow);
    margin: auto;
}

/* Typography */
h1 {
    font-size: 1.1rem !important;
    line-height: 1.6;
    margin-bottom: 10px;
}

p {
    font-size: 0.55rem !important;
    line-height: 1.6;
}

/* Form Styling */
.form-group {
    margin-bottom: 1.2rem;
}

.form-label {
    display: block;
    font-size: 0.6rem;
    margin-bottom: 8px;
    text-transform: uppercase;
    color: var(--primary);
}

.form-control {
    width: 100%;
    padding: 10px;
    font-family: 'Press Start 2P', cursive;
    font-size: 0.65rem;
    border: 4px solid #000;
    background: #fff;
    outline: none;
    box-sizing: border-box;
}

.form-control:focus {
    background: #f0f0f0;
    border-color: var(--accent);
}

/* Button Styling (8-Bit Pop) */
.btn-primary {
    background: var(--accent);
    color: #fff !important;
    border: 4px solid #000;
    padding: 12px;
    font-family: 'Press Start 2P', cursive;
    font-size: 0.75rem;
    cursor: pointer;
    box-shadow: inset -4px -4px 0px 0px #4527a0;
    margin-top: 10px;
    text-transform: uppercase;
}

.btn-primary:active {
    box-shadow: inset 4px 4px 0px 0px #4527a0;
    transform: translateY(2px);
}

/* Error List Style */
ul {
    list-style: none;
    padding: 0;
}

li {
    font-size: 0.5rem;
    margin-bottom: 5px;
    text-transform: uppercase;
}

/* Link Style */
a {
    color: var(--accent);
    text-decoration: none;
    font-size: 0.6rem;
}

a:hover {
    background: #ffff00;
    color: #000;
}

/* Menghilangkan border-radius dari inline style */
div, input, button {
    border-radius: 0 !important;
}
        </style>
</head>

<body class="auth-wrapper">
    <div class="card auth-card shadow-lg" style="max-width: 500px;">
        <div style="text-align: center; margin-bottom: 2rem;">
            <h1 style="font-size: 1.75rem; color: var(--primary); font-family: 'Playfair Display', serif;">DAFTAR AKUN
            </h1>
            <p
                style="color: var(--accent); font-weight: 600; text-transform: uppercase; letter-spacing: 0.1em; font-size: 0.75rem;">
                Pengaduan Prasarana Sekolah</p>
        </div>

        @if($errors->any())
            <div
                style="background:#FEE2E2; color:#991B1B; padding: 0.75rem; border-radius: 8px; margin-bottom: 1rem; font-size: 0.875rem;">
                <ul style="margin-left: 1.5rem;">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="form-group">
                <label class="form-label" for="nik"><i class="bi bi-card-heading"></i> NIK / NIS
                    (Masyarakat/Siswa)</label>
                <input type="text" id="nik" name="nik" class="form-control" value="{{ old('nik') }}" required autofocus>
            </div>

            <div class="form-group">
                <label class="form-label" for="name"><i class="bi bi-person-badge"></i> Nama Lengkap</label>
                <input type="text" id="name" name="name" class="form-control" value="{{ old('name') }}" required>
            </div>

            <div class="form-group">
                <label class="form-label" for="username"><i class="bi bi-person"></i> Username</label>
                <input type="text" id="username" name="username" class="form-control" value="{{ old('username') }}"
                    required>
            </div>

            <div class="form-group">
                <label class="form-label" for="phone"><i class="bi bi-telephone"></i> Nomor Telepon</label>
                <input type="text" id="phone" name="phone" class="form-control" value="{{ old('phone') }}" required>
            </div>

            <div class="form-group">
                <label class="form-label" for="password"><i class="bi bi-shield-lock"></i> Kata Sandi</label>
                <input type="password" id="password" name="password" class="form-control" required>
            </div>

            <div class="form-group">
                <label class="form-label" for="password_confirmation">Konfirmasi Kata Sandi</label>
                <input type="password" id="password_confirmation" name="password_confirmation" class="form-control"
                    required>
            </div>

            <button type="submit" class="btn btn-primary" style="width: 100%; margin-top: 1rem;">Buat Akun</button>

            <p style="text-align: center; margin-top: 1.5rem; color: var(--text-muted); font-size: 0.875rem;">
                Sudah punya akun? <a href="{{ route('login') }}" style="font-weight: 600;">Masuk di sini</a>
            </p>
        </form>
    </div>
</body>

</html>