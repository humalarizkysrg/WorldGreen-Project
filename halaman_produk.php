<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WorldGreen</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
    :root {
        --primary-color:rgb(47, 163, 192);
        --secondary-color:rgb(47, 163, 192);
        --light-color: #F8F9FA;
    }

    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .navbar {
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    .navbar-brand {
        font-weight: 700;
        color: var(--primary-color) !important;
    }

    .hero-section {
        background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('https://media.istockphoto.com/id/1299595647/id/foto/kura-kura-laut-dalam-air-biru-foto-kura-kura-laut-yang-ramah-di-bawah-air-hewan-samudera-di.jpg?s=170667a&w=0&k=20&c=IxXc9s195UDNTrST9m7Pf9uMhOv3ZQwyqqn9D-LCP00=');
        background-size: cover;
        background-position: center;
        color: white;
        padding: 100px 0;
        margin-bottom: 50px;
    }

    .product-card {
        border: none;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease;
        margin-bottom: 30px;
    }

    .product-card:hover {
        transform: translateY(-10px);
    }

    .product-img {
        height: 200px;
        object-fit: cover;
    }

    .badge-eco {
        background-color: var(--primary-color);
        color: white;
    }

    .price {
        color: var(--primary-color);
        font-weight: 700;
        font-size: 1.2rem;
    }

    .btn-eco {
        background-color: var(--primary-color);
        color: white;
    }

    .btn-eco:hover {
        background-color: var(--secondary-color);
        color: white;
    }

    .product-detail-img {
        border-radius: 10px;
        height: 400px;
        object-fit: cover;
    }

    footer {
        background-color: var(--primary-color);
        color: white;
        padding: 50px 0 0;
        margin-top: 50px;
    }
    </style>
</head>

<body>
    <!-- Hero Section -->
    <section class="hero-section text-center">
        <div class="container">
            <h1 class="display-4 fw-bold mb-4">Produk Ramah Lingkungan</h1>
            <p class="lead">Temukan berbagai produk eco-friendly yang mendukung gaya hidup berkelanjutan</p>
        </div>
    </section>

    <!-- Product Listing -->
    <section class="product-listing mb-5">
        <div class="container">
            <div class="row mb-4">
                <div class="col-md-15">
                    <h2 class="text-center fw-bold">Produk Kami</h2>
                </div>
            </div>

            <div class="row">
                <!-- Product 1 -->
                <div class="col-lg-3 col-md-6">
                    <div class="card product-card h-100">
                        <img src="https://momobil.id/news/wp-content/uploads/2022/06/Mobil-Listrik-Wuling-EV-Indonesia.jpg"
                            class="card-img-top product-img" alt="Mobil listrik">
                        <div class="card-body">
                            <span class="badge badge-eco mb-2">Elektronik</span>
                            <h5 class="card-title">Mobil Listrik Wuling</h5>
                            <p class="card-text">Mobil listrik ramah lingkungan dengan desain modern dan hemat energi.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="price">Rp 250.000..000</span>
                                <a href="#" class="btn btn-sm btn-eco"><i class="fas fa-cart-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product 2 -->
                <div class="col-lg-3 col-md-6">
                    <div class="card product-card h-100">
                        <img src="https://kelistrikan.com/wp-content/uploads/2023/12/Sepeda-Listrik-Uwinfly.jpg"
                            class="card-img-top product-img" alt="Sepda listrik">
                        <div class="card-body">
                            <span class="badge badge-eco mb-2">Elektronik</span>
                            <h5 class="card-title">Sepeda Listrik Uniw</h5>
                            <p class="card-text">Sepeda listrik praktis dan hemat enaergu,cocok untuk perjalanan harian.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="price">Rp 8.500.000</span>
                                <a href="#" class="btn btn-sm btn-eco"><i class="fas fa-cart-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product 3 -->
                <div class="col-lg-3 col-md-6">
                    <div class="card product-card h-100">
                        <img src="https://asset.kompas.com/crops/77NFBHcYuZ1Xw9nDuZx-K1f0tOg=/149x0:1031x588/1200x800/data/photo/2023/02/02/63dbe23301d1f.png"
                            class="card-img-top product-img" alt="Motor listrik">
                        <div class="card-body">
                            <span class="badge badge-eco mb-2">Elektronik</span>
                            <h5 class="card-title">Motor Listrik</h5>
                            <p class="card-text">menekankan bahwa motor listrik hemat energi dan bebas polisi.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="price">Rp 55.000.000</span>
                                <a href="#" class="btn btn-sm btn-eco"><i class="fas fa-cart-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product 4 -->
                <div class="col-lg-3 col-md-6">
                    <div class="card product-card h-100">
                            <img src="https://asset.kompas.com/crops/KR8RnEx2qS3abQhUp39yG5c9sgs=/615x0:1815x800/750x500/data/photo/2022/10/24/63558af3bb80f.jpg"
                            class="card-img-top product-img" alt="Motor listrik">
                        <div class="card-body">
                            <span class="badge badge-eco mb-2">Transportasi</span>
                            <h5 class="card-title">Bus elektronik</h5>
                            <p class="card-text">menggunakan tenaga listrik  dapat menghemat  dan bebas polusi</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="price">Rp 700.000.000</span>
                                <a href="#" class="btn btn-sm btn-eco"><i class="fas fa-cart-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-4">
                <!-- Product 5 -->
                <div class="col-lg-3 col-md-6">
                    <div class="card product-card h-100">
                        <img src="https://media.suara.com/pictures/970x544/2018/05/27/57779-ilustrasi-kereta-api-listrik.jpg"
                            class="card-img-top product-img" alt="Kreta listrik">
                        <div class="card-body">
                            <span class="badge badge-eco mb-2">Transportasi</span>
                            <h5 class="card-title">Kreta listrik</h5>
                            <p class="card-text">Menggambarkan kreta sebagi ramah lingkungan dan efisien.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="price">Rp 150.000</span>
                                <a href="#" class="btn btn-sm btn-eco"><i class="fas fa-cart-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product 6 -->
                <div class="col-lg-3 col-md-6">
                    <div class="card product-card h-100">
                        <img src="https://cf.shopee.co.id/file/9a5fb40e64284137b162e2e3216c2065"
                            class="card-img-top product-img" alt="Kulkas inverter">
                        <div class="card-body">
                            <span class="badge badge-eco mb-2">Organik menjadi elektronik</span>
                            <h5 class="card-title">Kulkas Inverter</h5>
                            <p class="card-text">Lemari es yang menggukanteknologi unterver untuk menjaga suhu tetao stabil.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="price">Rp 5.000.000</span>
                                <a href="#" class="btn btn-sm btn-eco"><i class="fas fa-cart-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product 7 -->
                <div class="col-lg-3 col-md-6">
                    <div class="card product-card h-100">
                        <img src="https://bumienergisurya.com/wp-content/uploads/2018/12/Sumber-Listrik-Panel-Surya.jpg"
                            class="card-img-top product-img" alt="Panel surya">
                        <div class="card-body">
                            <span class="badge badge-eco mb-2"> Elektronik </span>
                            <h5 class="card-title">Panel surya</h5>
                            <p class="card-text">menguabah energi matahari menjadi listrik tampa menghasilkan polusi udara.</p> 
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="price">Rp 75.000</span>
                                <a href="#" class="btn btn-sm btn-eco"><i class="fas fa-cart-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product 8 -->
                <div class="col-lg-3 col-md-6">
                    <div class="card product-card h-100">
                        <img src="https://down-id.img.susercontent.com/file/sg-11134201-22100-l5axofscp2ivdc"
                            class="card-img-top product-img" alt="Lilin Aromaterapi">
                        <div class="card-body">
                            <span class="badge badge-eco mb-2">Organik</span>
                            <h5 class="card-title">Lilin Aromaterapi Soy</h5>
                            <p class="card-text">Lilin aromaterapi dari lilin kedelai dengan essential oil.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="price">Rp 95.000</span>
                                <a href="#" class="btn btn-sm btn-eco"><i class="fas fa-cart-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <nav class="mt-5">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1">Previous</a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>
        </div>
    </section>



    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html