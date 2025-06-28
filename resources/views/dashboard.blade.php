<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Dashboard - NiceAdmin Bootstrap Template</title>
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
    <link href="{{ asset('assets/vendor/quill/quill.snow.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/simple-datatables/style.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    <style>
        .income-card {
            border-radius: 20px;
            border: none;
            padding: 20px;
            color: white;
            margin-bottom: 15px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .income-card h6 {
            font-size: 14px;
            margin-bottom: 5px;
            opacity: 0.9;
        }

        .income-card h4 {
            font-size: 18px;
            font-weight: bold;
            margin: 0;
            line-height: 1.2;
        }

        .card-red {
            background: linear-gradient(135deg, #ff6b6b, #ee5a52);
        }

        .card-purple {
            background: linear-gradient(135deg, #a855f7, #9333ea);
        }

        .card-pink {
            background: linear-gradient(135deg, #ec4899, #db2777);
        }

        .card-orange {
            background: linear-gradient(135deg, #f59e0b, #d97706);
        }

        .card-yellow {
            background: linear-gradient(135deg, #eab308, #ca8a04);
        }

        .card-brown {
            background: linear-gradient(135deg, #a16207, #92400e);
        }

        .card-teal {
            background: linear-gradient(135deg, #06b6d4, #0891b2);
        }

        .card-lime {
            background: linear-gradient(135deg, #65a30d, #4d7c0f);
        }

        .card-blue {
            background: linear-gradient(135deg, #3b82f6, #2563eb);
        }

        .daily-income-card {
            background: white;
            border-radius: 15px;
            padding: 20px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
        }

        .daily-item {
            display: flex;
            align-items: center;
            padding: 12px 15px;
            margin-bottom: 8px;
            background: #f1f5f9;
            border-radius: 10px;
            border-left: 4px solid #3b82f6;
        }

        .daily-item i {
            background: #e1f5fe;
            color: #0277bd;
            padding: 8px;
            border-radius: 8px;
            margin-right: 15px;
            font-size: 20px;
        }

        .amount-zero {
            color: #6b7280;
            font-weight: 500;
        }
    </style>

</head>

<body>

    <!-- ======= Header ======= -->
    @include('header')

    <!-- ======= Sidebar ======= -->
    @include('sidebar')

    <main id="main" class="main">


        <section class="section dashboard">
            <div class="row">
                <!-- Left side columns -->
                <div class="col-lg-12">
                    <div class="row">

                        <!-- Full Row untuk 9 Card -->
                        <div class="col-12">
                            <div class="row">
                                <!-- Row 1 -->
                                <div class="col-md-4">
                                    <div class="income-card card-red">
                                        <h6>Rp 0</h6>
                                        <h4>Total Pendapatan Hari Ini</h4>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="income-card card-purple">
                                        <h6>0</h6>
                                        <h4>Menu Terjual Hari Ini</h4>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="income-card card-pink">
                                        <h6>0</h6>
                                        <h4>Jumlah Transaksi Hari Ini</h4>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <!-- Row 2 -->
                                <div class="col-md-4">
                                    <div class="income-card card-orange">
                                        <h6>Rp 0</h6>
                                        <h4>Komisi JTI Hari Ini</h4>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="income-card card-yellow">
                                        <h6>Rp 0</h6>
                                        <h4>Komisi DWP Hari Ini</h4>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="income-card card-brown">
                                        <h6>Rp 0</h6>
                                        <h4>Komisi Kurir Hari Ini</h4>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <!-- Row 3 -->
                                <div class="col-md-4">
                                    <div class="income-card card-teal">
                                        <h6>Rp 0</h6>
                                        <h4>Total Pembayaran Qris</h4>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="income-card card-lime">
                                        <h6>Rp 0</h6>
                                        <h4>Total Pembayaran Tunai</h4>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="income-card card-blue">
                                        <h6>Rp 0</h6>
                                        <h4>Total Pendapatan Polije Pay</h4>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Baris Baru: Grafik dan Pendapatan Kantin -->
                        <div class="col-lg-8">
                            <div class="card mt-4">
                                <div class="card-body">
                                    <h5 class="card-title">Grafik Pendapatan Bulanan</h5>
                                    <div id="reportsChart"></div>

                                    <script>
                                        document.addEventListener("DOMContentLoaded", () => {
                                            new ApexCharts(document.querySelector("#reportsChart"), {
                                                series: [{
                                                        name: 'Komisi JTI',
                                                        data: [80, 90, 40, 60]
                                                    },
                                                    {
                                                        name: 'Komisi DWP',
                                                        data: [60, 85, 95, 80]
                                                    }
                                                ],
                                                chart: {
                                                    height: 350,
                                                    type: 'bar',
                                                    toolbar: {
                                                        show: false
                                                    },
                                                },
                                                plotOptions: {
                                                    bar: {
                                                        horizontal: false,
                                                        columnWidth: '40%',
                                                        endingShape: 'rounded',
                                                        borderRadius: 8,
                                                    },
                                                },
                                                dataLabels: {
                                                    enabled: false
                                                },
                                                colors: ['#3b82f6', '#ec4899'],
                                                xaxis: {
                                                    categories: ['Januari', 'Februari', 'Maret', 'April']
                                                },
                                                yaxis: {
                                                    max: 100,
                                                    tickAmount: 5
                                                },
                                                grid: {
                                                    borderColor: '#f1f5f9'
                                                }
                                            }).render();
                                        });
                                    </script>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="daily-income-card mt-4">
                                <h5 class="card-title">Pendapatan Kantin Hari Ini</h5>

                                <div class="daily-item"><i class="bi bi-shop"></i>
                                    <div><strong>Kantin DWP</strong>
                                        <div class="amount-zero">Rp 0</div>
                                    </div>
                                </div>
                                <div class="daily-item"><i class="bi bi-shop"></i>
                                    <div><strong>Kantin 1</strong>
                                        <div class="amount-zero">Rp 0</div>
                                    </div>
                                </div>
                                <div class="daily-item"><i class="bi bi-shop"></i>
                                    <div><strong>Kantin 2</strong>
                                        <div class="amount-zero">Rp 0</div>
                                    </div>
                                </div>
                                <div class="daily-item"><i class="bi bi-shop"></i>
                                    <div><strong>Kantin 3</strong>
                                        <div class="amount-zero">Rp 0</div>
                                    </div>
                                </div>
                                <div class="daily-item"><i class="bi bi-shop"></i>
                                    <div><strong>Kantin 4</strong>
                                        <div class="amount-zero">Rp 0</div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div><!-- End Left side columns -->



            </div>
        </section>

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="copyright">
            &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/chart.js/chart.umd.js') }}"></script>
    <script src="{{ asset('assets/vendor/echarts/echarts.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/quill/quill.js') }}"></script>
    <script src="{{ asset('assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
    <script src="{{ asset('assets/vendor/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>
