<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masuk - Pengaduan Prasarana Sekolah</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap"
        rel="stylesheet">
    <style>
        /* =========================
   PIXEL ART / 8-BIT THEME
========================= */
:root {
    --primary: #000000;
    --accent: #5e35b1;
    --bg: #212121;
    --card: #ffffff;
    --text: #000000;
    --muted: #757575;
    --success: #4caf50;
    --error: #f44336;
    
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
    background-size: 40px 40px; /* Background kotak-kotak retro */
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 100vh;
    font-family: 'Press Start 2P', cursive; /* Font Pixel */
    color: var(--text);
}

/* Card Style */
.auth-card {
    background: var(--card);
    width: 100%;
    max-width: 450px;
    padding: 3rem 2rem;
    position: relative;
    
    /* Pixelated Corners */
    box-shadow: var(--pixel-border), var(--pixel-shadow);
    margin: 20px;
}

/* Typography */
h1 {
    font-size: 1.2rem !important; /* Font pixel biasanya besar, jadi dikecilkan sedikit */
    line-height: 1.5;
    image-rendering: pixelated;
}

p {
    font-size: 0.6rem !important;
    line-height: 1.8;
}

/* Form Styling */
.form-group {
    margin-bottom: 1.5rem;
}

.form-label {
    display: block;
    font-size: 0.7rem;
    margin-bottom: 10px;
    text-transform: uppercase;
}

.form-control {
    width: 100%;
    padding: 12px;
    font-family: 'Press Start 2P', cursive;
    font-size: 0.7rem;
    border: 4px solid #000;
    background: #fff;
    outline: none;
    box-sizing: border-box;
}

.form-control:focus {
    background: #e3f2fd;
    border-color: var(--accent);
}

/* Button Styling (Pixel Pop Effect) */
.btn-primary {
    background: var(--accent);
    color: #fff;
    border: 4px solid #000;
    padding: 15px;
    font-family: 'Press Start 2P', cursive;
    font-size: 0.8rem;
    cursor: pointer;
    box-shadow: inset -4px -4px 0px 0px #4527a0;
    transition: transform 0.1s;
    image-rendering: pixelated;
}

.btn-primary:active {
    transform: translateY(4px);
    box-shadow: inset 4px 4px 0px 0px #4527a0;
}

.btn-primary:hover {
    background: #673ab7;
}

/* Alerts */
.alert {
    border: 4px solid #000;
    font-size: 0.6rem;
    padding: 10px;
    margin-bottom: 1rem;
}

/* Link Style */
a {
    color: var(--accent);
    text-decoration: none;
}

a:hover {
    text-decoration: underline;
    background: #ffff00; /* Efek highlight kuning saat hover */
}

/* Override inline styles from your HTML */
[style*="border-radius"] {
    border-radius: 0 !important; /* Pixel art tidak boleh bulat! */
}
    </style>

<body class="auth-wrapper">
    <div class="card auth-card shadow-lg">
        <div style="text-align: center; margin-bottom: 3rem;">
            <h1 style="font-size: 1.75rem; color: var(--primary); font-family: 'Playfair Display', serif;">PENGADUAN
                PRASARANA SEKOLAH</h1>
            <p
                style="color: var(--accent); font-weight: 600; text-transform: uppercase; letter-spacing: 0.1em; font-size: 0.75rem;">
                Lapor Kendala, Wujudkan Kenyamanan Belajar</p>
        </div>

        @if(session('success'))
            <div style="background:#D1FAE5; color:#065F46; padding: 0.75rem; border-radius: 8px; margin-bottom: 1rem;">
                {{ session('success') }}
            </div>
        @endif

        @if($errors->any())
            <div style="background:#FEE2E2; color:#991B1B; padding: 0.75rem; border-radius: 8px; margin-bottom: 1rem;">
                Username atau password salah.
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group">
                <label class="form-label" for="username"><i class="bi bi-person"></i> Username</label>
                <input type="text" id="username" name="username" class="form-control" value="{{ old('username') }}"
                    required autofocus placeholder="Masukkan username Anda">
            </div>

            <div class="form-group">
                <label class="form-label" for="password"><i class="bi bi-shield-lock"></i> Kata Sandi</label>
                <input type="password" id="password" name="password" class="form-control" required
                    placeholder="Masukkan kata sandi">
            </div>

            <button type="submit" class="btn btn-primary" style="width: 100%; margin-top: 1rem;">Masuk Sekarang</button>

            <p style="text-align: center; margin-top: 1.5rem; color: var(--text-muted); font-size: 0.875rem;">
                Belum punya akun? <a href="{{ route('register') }}" style="font-weight: 600;">Daftar di sini</a>
            </p>
        </form>
    </div>
</body>

</html>