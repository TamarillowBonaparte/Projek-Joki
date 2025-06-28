<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Food Ordering - NiceAdmin Bootstrap Template</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    <style>
        body {
            background-color: #f0f4f8;
            font-family: 'Nunito', sans-serif;
        }

        .main-container {
            display: flex;
            gap: 20px;
            padding: 20px;
            min-height: 100vh;
        }

        /* Left Side - Food Grid */
        .food-section {
            flex: 2;
            background: white;
            border-radius: 15px;
            padding: 20px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
        }

        .search-section {
            margin-bottom: 20px;
        }

        .search-bar {
            position: relative;
            margin-bottom: 15px;
        }

        .search-bar input {
            width: 100%;
            padding: 12px 20px 12px 45px;
            border: 2px solid #e2e8f0;
            border-radius: 25px;
            font-size: 14px;
            outline: none;
            transition: all 0.3s ease;
        }

        .search-bar input:focus {
            border-color: #3b82f6;
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
        }

        .search-bar i {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #94a3b8;
        }

        .filter-buttons {
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
        }

        .filter-btn {
            padding: 8px 16px;
            border: 2px solid #e2e8f0;
            background: white;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .filter-btn.active {
            background: #3b82f6;
            color: white;
            border-color: #3b82f6;
        }

        .filter-btn:hover {
            border-color: #3b82f6;
            color: #3b82f6;
        }

        /* Food Grid */
        .food-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }

        .food-card {
            border: 2px solid #e2e8f0;
            border-radius: 15px;
            overflow: hidden;
            transition: all 0.3s ease;
            cursor: pointer;
            background: white;
        }

        .food-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
            border-color: #3b82f6;
        }

        .food-image {
            width: 100%;
            height: 120px;
            object-fit: cover;
        }

        .food-info {
            padding: 15px;
        }

        .food-name {
            font-size: 14px;
            font-weight: 600;
            color: #1e293b;
            margin-bottom: 5px;
        }

        .food-category {
            font-size: 12px;
            color: #64748b;
            margin-bottom: 8px;
        }

        .food-price {
            color: #3b82f6;
            font-weight: 700;
            font-size: 14px;
        }

        .add-btn {
            position: absolute;
            top: 10px;
            right: 10px;
            width: 30px;
            height: 30px;
            border-radius: 50%;
            background: #3b82f6;
            color: white;
            border: none;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s ease;
            opacity: 0;
        }

        .food-card:hover .add-btn {
            opacity: 1;
        }

        .add-btn:hover {
            background: #2563eb;
            transform: scale(1.1);
        }

        /* Right Side - Order Summary */
        .order-section {
            flex: 1;
            background: white;
            border-radius: 15px;
            padding: 20px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
            height: fit-content;
            position: sticky;
            top: 20px;
        }

        .order-header {
            text-align: center;
            margin-bottom: 20px;
            padding-bottom: 15px;
            border-bottom: 2px solid #f1f5f9;
        }

        .order-title {
            font-size: 16px;
            font-weight: 600;
            color: #1e293b;
            margin-bottom: 5px;
        }

        .order-date {
            font-size: 12px;
            color: #64748b;
        }

        .order-form {
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-label {
            font-size: 12px;
            font-weight: 600;
            color: #374151;
            margin-bottom: 5px;
            display: block;
        }

        .form-input {
            width: 100%;
            padding: 10px 12px;
            border: 2px solid #e5e7eb;
            border-radius: 8px;
            font-size: 12px;
            outline: none;
            transition: border-color 0.3s ease;
        }

        .form-input:focus {
            border-color: #3b82f6;
        }

        .form-input::placeholder {
            color: #9ca3af;
        }

        .order-summary {
            border-top: 2px solid #f1f5f9;
            padding-top: 15px;
        }

        .summary-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 10px;
            font-size: 12px;
        }

        .summary-label {
            color: #64748b;
        }

        .summary-value {
            font-weight: 600;
            color: #1e293b;
        }

        .total-row {
            border-top: 1px solid #e5e7eb;
            padding-top: 10px;
            margin-top: 15px;
            font-weight: 700;
            font-size: 14px;
        }

        .action-buttons {
            margin-top: 20px;
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .btn-primary {
            background: #3b82f6;
            color: white;
            border: none;
            padding: 12px;
            border-radius: 10px;
            font-weight: 600;
            font-size: 14px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            background: #2563eb;
            transform: translateY(-2px);
        }

        .btn-danger {
            background: #ef4444;
            color: white;
            border: none;
            padding: 12px;
            border-radius: 10px;
            font-weight: 600;
            font-size: 14px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .btn-danger:hover {
            background: #dc2626;
            transform: translateY(-2px);
        }

        @media (max-width: 768px) {
            .main-container {
                flex-direction: column;
            }

            .food-grid {
                grid-template-columns: repeat(auto-fill, minmax(150px, 1fr));
                gap: 15px;
            }

            .order-section {
                position: relative;
                top: 0;
            }
        }
    </style>

</head>

<body>

    <!-- ======= Header ======= -->
    @include('header')

    <!-- ======= Sidebar ======= -->
    @include('sidebar')

    <main id="main" class="main">
        <div class="main-container">
            <!-- Left Side - Food Selection -->
            <div class="food-section">
                <!-- Search Section -->
                <div class="search-section">
                    <div class="search-bar">
                        <i class="bi bi-search"></i>
                        <input type="text" placeholder="Search..." />
                        <i class="bi bi-funnel-fill" style="right: 15px; left: auto;"></i>
                    </div>

                    <div class="filter-buttons">
                        <button class="filter-btn active">Semua</button>
                        <button class="filter-btn">Kantin DWP</button>
                        <button class="filter-btn">Kantin 1</button>
                        <button class="filter-btn">Kantin 2</button>
                        <button class="filter-btn">Kantin 3</button>
                        <button class="filter-btn">Kantin 4</button>
                        <button class="filter-btn">Kantin 5</button>
                    </div>
                </div>

                <!-- Food Grid -->
                <div class="food-grid">
                    <!-- Food Card 1 -->
                    <div class="food-card" style="position: relative;">
                        <img src="https://images.unsplash.com/photo-1512058564366-18510be2db19?w=300&h=200&fit=crop" alt="Nasi Ayam Geprek" class="food-image">
                        <button class="add-btn">
                            <i class="bi bi-plus"></i>
                        </button>
                        <div class="food-info">
                            <div class="food-name">Nasi Ayam Geprek</div>
                            <div class="food-category">Kantin 1</div>
                            <div class="food-price">Rp 10.000</div>
                        </div>
                    </div>

                    <!-- Food Card 2 -->
                    <div class="food-card" style="position: relative;">
                        <img src="https://images.unsplash.com/photo-1512058564366-18510be2db19?w=300&h=200&fit=crop" alt="Nasi Ayam Geprek" class="food-image">
                        <button class="add-btn">
                            <i class="bi bi-plus"></i>
                        </button>
                        <div class="food-info">
                            <div class="food-name">Nasi Ayam Geprek</div>
                            <div class="food-category">Kantin 1</div>
                            <div class="food-price">Rp 10.000</div>
                        </div>
                    </div>

                    <!-- Food Card 3 -->
                    <div class="food-card" style="position: relative;">
                        <img src="https://images.unsplash.com/photo-1512058564366-18510be2db19?w=300&h=200&fit=crop" alt="Nasi Ayam Geprek" class="food-image">
                        <button class="add-btn">
                            <i class="bi bi-plus"></i>
                        </button>
                        <div class="food-info">
                            <div class="food-name">Nasi Ayam Geprek</div>
                            <div class="food-category">Kantin 1</div>
                            <div class="food-price">Rp 10.000</div>
                        </div>
                    </div>

                    <!-- Food Card 4 -->
                    <div class="food-card" style="position: relative;">
                        <img src="https://images.unsplash.com/photo-1512058564366-18510be2db19?w=300&h=200&fit=crop" alt="Nasi Ayam Geprek" class="food-image">
                        <button class="add-btn">
                            <i class="bi bi-plus"></i>
                        </button>
                        <div class="food-info">
                            <div class="food-name">Nasi Ayam Geprek</div>
                            <div class="food-category">Kantin 1</div>
                            <div class="food-price">Rp 10.000</div>
                        </div>
                    </div>

                    <!-- Food Card 5 -->
                    <div class="food-card" style="position: relative;">
                        <img src="https://images.unsplash.com/photo-1512058564366-18510be2db19?w=300&h=200&fit=crop" alt="Nasi Ayam Geprek" class="food-image">
                        <button class="add-btn">
                            <i class="bi bi-plus"></i>
                        </button>
                        <div class="food-info">
                            <div class="food-name">Nasi Ayam Geprek</div>
                            <div class="food-category">Kantin 1</div>
                            <div class="food-price">Rp 10.000</div>
                        </div>
                    </div>

                    <!-- Food Card 6 -->
                    <div class="food-card" style="position: relative;">
                        <img src="https://images.unsplash.com/photo-1512058564366-18510be2db19?w=300&h=200&fit=crop" alt="Nasi Ayam Geprek" class="food-image">
                        <button class="add-btn">
                            <i class="bi bi-plus"></i>
                        </button>
                        <div class="food-info">
                            <div class="food-name">Nasi Ayam Geprek</div>
                            <div class="food-category">Kantin 1</div>
                            <div class="food-price">Rp 10.000</div>
                        </div>
                    </div>

                    <!-- Food Card 7 -->
                    <div class="food-card" style="position: relative;">
                        <img src="https://images.unsplash.com/photo-1512058564366-18510be2db19?w=300&h=200&fit=crop" alt="Nasi Ayam Geprek" class="food-image">
                        <button class="add-btn">
                            <i class="bi bi-plus"></i>
                        </button>
                        <div class="food-info">
                            <div class="food-name">Nasi Ayam Geprek</div>
                            <div class="food-category">Kantin 1</div>
                            <div class="food-price">Rp 10.000</div>
                        </div>
                    </div>

                    <!-- Food Card 8 -->
                    <div class="food-card" style="position: relative;">
                        <img src="https://images.unsplash.com/photo-1512058564366-18510be2db19?w=300&h=200&fit=crop" alt="Nasi Ayam Geprek" class="food-image">
                        <button class="add-btn">
                            <i class="bi bi-plus"></i>
                        </button>
                        <div class="food-info">
                            <div class="food-name">Nasi Ayam Geprek</div>
                            <div class="food-category">Kantin 1</div>
                            <div class="food-price">Rp 10.000</div>
                        </div>
                    </div>

                    <!-- Food Card 9 -->
                    <div class="food-card" style="position: relative;">
                        <img src="https://images.unsplash.com/photo-1512058564366-18510be2db19?w=300&h=200&fit=crop" alt="Nasi Ayam Geprek" class="food-image">
                        <button class="add-btn">
                            <i class="bi bi-plus"></i>
                        </button>
                        <div class="food-info">
                            <div class="food-name">Nasi Ayam Geprek</div>
                            <div class="food-category">Kantin 1</div>
                            <div class="food-price">Rp 10.000</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Side - Order Summary -->
            <div class="order-section">
                <div class="order-header">
                    <div class="order-title">Pesanan</div>
                    <div class="order-date">10-5-2024 12:30</div>
                </div>

                <div class="order-form">
                    <div class="form-group">
                        <label class="form-label">Nomor Meja</label>
                        <input type="text" class="form-input" placeholder="Masukkan No. Meja">
                    </div>

                    <div class="form-group">
                        <label class="form-label">Metode Pembayaran</label>
                        <select class="form-input">
                            <option>Tunai</option>
                            <option>QRIS</option>
                            <option>Polije Pay</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Kode Diskon</label>
                        <input type="text" class="form-input" placeholder="Masukkan Kode Diskon">
                    </div>

                    <div class="form-group">
                        <label class="form-label">Nama Pembeli</label>
                        <input type="text" class="form-input" placeholder="Masukkan Nama Pembeli">
                    </div>
                </div>

                <div class="order-summary">
                    <div class="summary-row">
                        <span class="summary-label">Sub Total</span>
                        <span class="summary-value">Rp 0</span>
                    </div>
                    <div class="summary-row">
                        <span class="summary-label">Diskon</span>
                        <span class="summary-value">0 %</span>
                    </div>
                    <div class="summary-row total-row">
                        <span class="summary-label">Total</span>
                        <span class="summary-value">Rp 0</span>
                    </div>
                    <div class="summary-row">
                        <span class="summary-label">Bayar</span>
                        <span class="summary-value">Rp 0</span>
                    </div>
                    <div class="summary-row">
                        <span class="summary-label">Kembali</span>
                        <span class="summary-value">Rp 0</span>
                    </div>
                </div>

                <div class="action-buttons">
                    <button class="btn-primary">Cetak Resi</button>
                    <button class="btn-danger">Hapus</button>
                </div>
            </div>
        </div>
    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="copyright">
            &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

    <script>
        // Add click functionality to filter buttons
        document.querySelectorAll('.filter-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active'));
                this.classList.add('active');
            });
        });

        // Add click functionality to add buttons
        document.querySelectorAll('.add-btn').forEach(btn => {
            btn.addEventListener('click', function(e) {
                e.stopPropagation();
                // Add item to cart logic here
                console.log('Item added to cart');
            });
        });
    </script>

</body>

</html>
