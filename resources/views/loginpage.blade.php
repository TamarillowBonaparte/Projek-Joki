<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Dikantin Polije Login</title>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet" />
  <!-- Bootstrap CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background-color: #fff;
      margin: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
    }

    .login-container {
      max-width: 900px;
      margin: auto;
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
      border-radius: 12px;
      overflow: hidden;
    }

    .left-section {
      position: relative;
      background: url('{{asset ('assets/img/loginbanner.png')}}') no-repeat center center;
      background-size: cover;
      min-height: 500px;
      display: flex;
      flex-direction: column;
      justify-content: flex-end;
      color: #fff;
      padding: 2rem;
    }

    .left-overlay {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: url('{{ asset('assets/img/loginoverlay.png') }}');
  background-size: cover;
  background-position: center;
  z-index: 1;
}


    .left-content {
      position: relative;
      z-index: 2;
      text-align: left;
    }

    .left-logo {
      position: absolute;
      top: 20px;
      left: 20px;
      z-index: 2;
      width: 120px;
    }

    .left-content h2 {
      font-weight: 700;
      font-size: 1.6rem;
      margin-bottom: 0.75rem;
    }

    .left-content p {
      font-weight: 300;
      font-size: 0.85rem;
      color: #e2e8f0;
      opacity: 0.85;
    }
  </style>
</head>
<body>
  <div class="container-fluid px-0">
    <div class="row g-0 login-container">
      <!-- Left Section -->
      <div class="col-lg-6 left-section">
        <div class="left-overlay"></div>
        <img class="left-logo" src="{{ asset('assets/img/logo dikantin.png') }}" alt="Logo DIKANTIN POLIJE" />
        <div class="left-content">
          <h2>TIME FOR BUSINESS MANAGEMENT</h2>
          <p>Welcome to "DIKANTIN POLIJE", the JTINOVA affiliated application designed to assist you in streamlining report management, sales recapitulation, and simplifying the sales process.</p>
        </div>
      </div>

      <!-- Right Section -->
      <div class="col-lg-6 p-4 bg-white d-flex flex-column justify-content-center">
        <div class="text-center mb-4">
          <h3 style="font-weight: 600; font-size: 1.5rem; color: #2b2d42;">Welcome</h3>
          <p style="color: #8d99ae; font-size: 0.9rem;">Efficient, Intuitive and Organized</p>
        </div>

        <form>
          <div class="mb-3">
            <label for="email" style="font-weight: 600; color: #2b2d42;">Email</label>
            <input type="email" id="email" class="form-control" placeholder="Masukkan Email Anda di sini" style="border-radius: 8px;" required />
          </div>
          <div class="mb-3">
            <label for="password" style="font-weight: 600; color: #2b2d42;">Password</label>
            <input type="password" id="password" class="form-control" placeholder="Masukkan Password" style="border-radius: 8px;" required />
          </div>
          <button class="btn w-100 text-white" style="background: #28A4D9; border-radius: 8px;">Masuk</button>
        </form>

        <div class="text-center my-3 position-relative">
          <span style="background: #fff; padding: 0 1rem; color: #8d99ae;">Atau</span>
        </div>

        <button class="btn border w-100 mb-3" style="border-radius: 8px;">
          <i class="fab fa-google me-2"></i>Masuk lewat Google
        </button>

        <!-- Hak Cipta -->
        <div class="text-center mt-3" style="font-size: 0.85rem;">
          <p class="mb-1" style="color: #000;">Hak Cipta oleh:</p>
          <img src="{{ asset('assets/img/JTI-Nova.png') }}" alt="Jtinova Logo" style="height: 30px; object-fit: contain;" />
        </div>
      </div>
    </div>
  </div>

  <!-- JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
</body>
</html>
