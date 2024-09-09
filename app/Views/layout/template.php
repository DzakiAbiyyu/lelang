<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Situs lelang</title>
    <!-- Bootstrap CSS -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css" rel="stylesheet">
    <style>

    </style>

</head>

<body>
    <?= $this->include('layout/navbar'); ?>

    <?= $this->renderSection('content'); ?>

    <footer class="bg-primary">
        <div class="bg-success" style="height: 1px;"></div>
        <div class="d-flex flex-column justify-content-between gap-4 p-4 text-white flex-md-row px-md-4 px-lg-5">
            <div class="d-flex flex-column gap-4">
                <!-- Logo placeholder -->
                <a href="/"><img src="#" alt="Logo" class="h-16 w-40"></a>
                <div class="d-flex gap-2">
                    <span class="pi pi-map-marker text-lg text-white"></span>
                    <span class="text-xs md:text-sm">Cibarusah bagian selatan barat daya </span>
                </div>
            </div>
            <div class="d-flex flex-wrap justify-content-between gap-4 text-white">
                <div>
                    <p class="mb-2 font-bold">Layanan</p>
                    <div class="d-flex flex-column">
                        <a class="text-light text-decoration-underline" href="#">Daftar Balai Lelang</a>
                        <a class="text-light text-decoration-underline" href="#">Daftar PL Kelas II</a>
                        <a class="text-light text-decoration-underline" href="#">Ijin Operasional Balai Lelang</a>
                        <a class="text-light text-decoration-underline" href="#">Pengangkatan PL Kelas II</a>
                        <a class="text-light text-decoration-underline" href="#">Ijin Pindah Wilayah Jabatan PL
                            Kelas
                            II</a>
                        <a class="text-light text-decoration-underline" href="#">Laporan Kinerja</a>
                        <a class="text-light text-decoration-underline" href="#">Ijin Perpanjangan Masa Jabatan PL
                            Kelas
                            II</a>
                    </div>
                </div>
                <div>
                    <p class="mb-2 font-bold">Hubungi Kami</p>
                    <div class="d-flex flex-column gap-2">
                        <div class="d-flex align-items-center gap-2">
                            <span class="bi bi-telephone"></span>
                            <span>Call Center 150-991</span>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <span class="bi bi-envelope"></span>
                            <a href="mailto:halodjkn@kemenkeu.go.id"
                                class="text-white text-decoration-none">halodjkn@kemenkeu.go.id</a>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <span class="bi bi-link"></span>
                            <a href="https://www.djkn.kemenkeu.go.id"
                                class="text-white text-decoration-none">https://djkn.kemenkeu.go.id</a>
                        </div>
                    </div>
                    <div class="mt-2 d-flex gap-2">
                        <a href="https://play.google.com/store/apps" target="_blank"
                            class="text-white text-decoration-none">Play Store</a>
                        <a href="https://www.apple.com/id/app-store/" target="_blank"
                            class="text-white text-decoration-none">App Store</a>
                    </div>
                </div>
                <div>
                    <p class="mb-2 font-bold">Tautan Mitra</p>
                    <div class="d-flex gap-4">
                        <div class="h-8 w-16 bg-light"></div> <!-- Placeholder for partner logo -->
                        <div class="h-8 w-16 bg-light"></div> <!-- Placeholder for partner logo -->
                        <div class="h-8 w-16 bg-light"></div> <!-- Placeholder for partner logo -->
                        <div class="h-8 w-16 bg-light"></div> <!-- Placeholder for partner logo -->
                        <div class="h-8 w-16 bg-light"></div> <!-- Placeholder for partner logo -->
                        <div class="h-8 w-16 bg-light"></div> <!-- Placeholder for partner logo -->
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-white" style="height: 1px;"></div>
        <div class="d-flex justify-content-between bg-primary text-white px-2 py-3">
            <div>©Copyright 2024. Your Company Name.</div>
            <div class="h-8 w-16 bg-light"></div> <!-- Placeholder for logo -->
        </div>
    </footer>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</body>

</html>