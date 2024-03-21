<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dosen & Staf » Sistem Informasi - Universitas Telkom Surabaya</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.
css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css
">
    <style>
        header {
            background-color: rgb(103, 28, 123);
            color: white;
            padding: 80px 20px;
            text-align: center;
        }

        .faculty-grid img {
            max-width: 100%;
            height: auto;
        }

        body {
            padding-top: 70px;
        }

        footer {
            padding: 70px;
        }

        .custom-navbar-logo {
            max-height: 100%;
            margin-right: 10px;
        }

        /* Override Bootstrap styles for navbar-brand */
        .custom-navbar-logo {
            width: 100px;
            /* Ganti sesuai kebutuhan */
            height: auto;
            margin-right: 10px;
        }
    </style>
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle
.min.js"></script>

    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg bg-purple" data-bs-theme="light"
        style="background-color: rgb(103, 28, 123);">
        <!-- Container -->
        <div class="container py-3 px-4">
            <!-- Navbar Brand -->
            <a href="https://bis-sby.telkomuniversity.ac.id/" class="navbar-brand">
                <img class="img-fluid" src="{{ Vite::asset('resources/images/logo-TelU-removebg-preview.png ') }}" alt="logo"
                    style="width: 120px;">
            </a>
            <!-- Navbar Toggler -->
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Offcanvas -->
            <div class="offcanvas offcanvas-end bg-purple" id="offcanvasNavbar">
                <!-- Offcanvas Header -->
                <div class="offcanvas-header pb-0 px-4">
                    <h5 class="offcanvas-title text-black" id="offcanvasNavbarLabel">Halaman Utama</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <!-- Offcanvas Body -->
                <div class="offcanvas-body pt-0 px-4">
                    <hr class="d-md-none text-white-50"> <!-- Horizontal Line -->
                    <!-- Top Menu -->
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Tentang Kami
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Informasi Umum</a></li>
                                <li><a class="dropdown-item" href="#">Organisasi</a></li>
                                <li><a class="dropdown-item" href="#">Penghargaan</a></li>
                                <li><a class="dropdown-item" href="#">Kerja Sama</a></li>
                            </ul>
                        </li>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Akademik
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Struktur Kurikulum</a></li>
                                <li><a class="dropdown-item" href="#">Rencana Belajar</a></li>
                                <li><a class="dropdown-item" href="#">Beasiswa</a></li>
                            </ul>
                        </li>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Kehidupan Kampus
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Kehidupan di Suarabaya</a></li>
                                <li><a class="dropdown-item" href="#">Galeri Kegiatan</a></li>
                                <li><a class="dropdown-item" href="#">Penelitian</a></li>
                                <li><a class="dropdown-item" href="#">Pengabdian Masyarakat</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Dosen & Staf</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Blog</a>
                        </li>
                    </ul>
                    <button type="button" class="btn btn-outline-light">Daftar Sekarang</button>
                </div>
            </div>
        </div>
    </nav>
    <!--Header-->
    <header>
        <h1><b>Dosen & Staf Sistem Informasi</b></h1>
        <p>Dosen & Staf Sistem Informasi ITTelkom Surabaya yang berpengalaman, memiliki latar belakang sebagai peneliti,
            akademisi, maupun praktisi di industri</p>
    </header>

    <section class="container my-5">

        <div class="row faculty-grid">
            <div class="col-md-4">
                <img src="https://bis-sby.telkomuniversity.ac.id/wp-content/uploads/2023/03/Ully.svg" alt="Professor 1"
                    class="img-fluid mb-3">
                <p><strong>Ully Asfari, S.Kom., M.Kom.</strong><br>Manajemen Portofolio TI, Budaya Organisasi, Interaksi
                    Manusia Komputer</p>
            </div>
            <div class="col-md-4">
                <img src="https://bis-sby.telkomuniversity.ac.id/wp-content/uploads/2023/03/Nizar.svg" alt="Professor 2"
                    class="img-fluid mb-3">
                <p><strong>Mochamad Nizar Palefi Ma'ady, S.Kom., M.Kom., M.IM </strong><br>Dynamic Programming, Machine
                    Learning, Social Computing</p>
            </div>
            <div class="col-md-4">
                <img src="https://bis-sby.telkomuniversity.ac.id/wp-content/uploads/2023/03/Agus-Sulistya.svg"
                    alt="Professor 3" class="img-fluid mb-3">
                <p><strong>Agus Sulistya, P.hd </strong><br>Social Computing, Data Scientist & Engineering, Software
                    Engineering, IT Planning</p>
            </div>
            <div class="col-md-4">
                <img src="https://bis-sby.telkomuniversity.ac.id/wp-content/uploads/2023/03/No-Photo.svg"
                    alt="Professor 3" class="img-fluid mb-3">
                <p><strong>Yupit Sudianto,S.Kom.,M.Kom</strong><br>Rekayasa Perangkat Lunak, Enterprise Architecture,
                    Internet of Things</p>
            </div>
            <div class="col-md-4">
                <img src="https://bis-sby.telkomuniversity.ac.id/wp-content/uploads/2023/03/Hawwin.svg"
                    alt="Professor 3" class="img-fluid mb-3">
                <p><strong>Hawwin Mardhiana, S.Kom., M.Kom.</strong><br>Pemodelan dan Simulasi, DSS, Sistem Enterprise
                </p>
            </div>
            <div class="col-md-4">
                <img src="https://bis-sby.telkomuniversity.ac.id/wp-content/uploads/2023/03/Toton.svg" alt="Professor 3"
                    class="img-fluid mb-3">
                <p><strong>Noerma Pudji Istiyanto, S.Kom., M.Kom. </strong><br>Bussiness Intelligence, Project
                    Management, e-Government, e-SME, Start-Up</p>
            </div>
            <div class="col-md-4">
                <img src="https://bis-sby.telkomuniversity.ac.id/wp-content/uploads/2023/03/Iin.svg" alt="Professor 1"
                    class="img-fluid mb-3">
                <p><strong>Rokhmatul Insani, S.T., M.T.</strong><br>Data Warehouse, Data Base, Data Mining</p>
            </div>
            <div class="col-md-4">
                <img src="https://bis-sby.telkomuniversity.ac.id/wp-content/uploads/2023/03/Nasrul.svg"
                    alt="Professor 2" class="img-fluid mb-3">
                <p><strong>Muhamad Nasrullah, S.Kom., M.Kom.</strong><br>Smart City, Adopsi IT, Security Engineering</p>
            </div>
            <div class="col-md-4">
                <img src="https://bis-sby.telkomuniversity.ac.id/wp-content/uploads/2023/03/No-Photo.svg"
                    alt="Professor 3" class="img-fluid mb-3">
                <p><strong>Aris Kusumawati, S.Kom., M.Kom </strong><br>IT Business Value, Strategic Information System,
                    IT Risk Management, IT Governance, Management Information System</p>
            </div>
            <div class="col-md-4">
                <img src="https://bis-sby.telkomuniversity.ac.id/wp-content/uploads/2023/03/No-Photo.svg"
                    alt="Professor 3" class="img-fluid mb-3">
                <p><strong>Purnama Anaking, S.Kom, M.Kom</strong><br>Software Engineering, Hybrid Mobile App
                    Development, Agile Project Management, Human Computer Interaction</p>
            </div>
            <div class="col-md-4">
                <img src="https://bis-sby.telkomuniversity.ac.id/wp-content/uploads/2023/10/bu-aan-1.svg"
                    alt="Professor 3" class="img-fluid mb-3">
                <p><strong>Anfazul Faridatul Azizah, S.Kom., M.Kom.</strong><br>Perancangan interaksi, Tata kelola IT,
                    IT Quality Management, Manajemen Proyek TI, Adoption Technology, Audit TI</p>
            </div>
            <div class="col-md-4">
                <img src="https://bis-sby.telkomuniversity.ac.id/wp-content/uploads/2023/03/Fian.svg" alt="Professor 3"
                    class="img-fluid mb-3">
                <p><strong>Alifiansyah Arrizqy Hidayat, S.Kom., M.Kom. </strong><br>Customer Relationship Management,
                    Adoption and Acceptance of Information Technology, Business Process Management</p>
            </div>
            <div class="col-md-4">
                <img src="https://bis-sby.telkomuniversity.ac.id/wp-content/uploads/2023/03/No-Photo.svg"
                    alt="Professor 1" class="img-fluid mb-3">
                <p><strong>Adzanil Rachmadhi Putra, S.Kom, M.Kom</strong><br>Geo Information System, Web Development,
                    Software Engineering</p>
            </div>
            <div class="col-md-4">
                <img src="https://bis-sby.telkomuniversity.ac.id/wp-content/uploads/2023/03/Arip.svg" alt="Professor 2"
                    class="img-fluid mb-3">
                <p><strong>Arip Ramadan, S.Si., M.Stat. </strong><br>Computational Statistics, Linear Model,
                    Nonparametric Regression</p>
            </div>
            <div class="col-md-4">
                <img src="https://bis-sby.telkomuniversity.ac.id/wp-content/uploads/2023/03/Berlian.svg"
                    alt="Professor 3" class="img-fluid mb-3">
                <p><strong>Berlian Rahmy Lidiawaty, S.ST., M.MT. </strong><br>Text Mining, Risk Management, Data
                    Management</p>
            </div>
            <div class="col-md-4">
                <img src="https://bis-sby.telkomuniversity.ac.id/wp-content/uploads/2023/03/Anita.svg" alt="Professor 3"
                    class="img-fluid mb-3">
                <p><strong>Anita Hakim Nasution, S.T., M.T.</strong><br>Risk Management, Human Resource Development,
                    Sales Management, Supply Chain Management, Bussiness Development</p>
            </div>
            <div class="col-md-4">
                <img src="https://bis-sby.telkomuniversity.ac.id/wp-content/uploads/2023/03/Fina.svg" alt="Professor 3"
                    class="img-fluid mb-3">
                <p><strong>Affifiana Prisyanti, S.Kom, M.Kom</strong><br>Sistem Enterprise, management strategi Sistem
                    Informasi</p>
            </div>
            <div class="col-md-4">
                <img src="https://bis-sby.telkomuniversity.ac.id/wp-content/uploads/2023/03/Anisa.svg" alt="Professor 3"
                    class="img-fluid mb-3">
                <p><strong>Anisa Dzulkarnain, S.Kom., M.Kom </strong><br>Pemodelan Sistem Dinamik, System Thinking,
                    Travelling Salesman Problem, Sistem Informasi Geografis</p>
            </div>
            <div class="col-md-4">
                <img src="https://bis-sby.telkomuniversity.ac.id/wp-content/uploads/2023/03/Rosyid.svg"
                    alt="Professor 1" class="img-fluid mb-3">
                <p><strong>Rosyid Abdillah, S.Si., M.Kom</strong><br>UI Design, User Experience & Data Analysis</p>
            </div>
            <div class="col-md-4">
                <img src="https://bis-sby.telkomuniversity.ac.id/wp-content/uploads/2023/03/Raulia.svg"
                    alt="Professor 2" class="img-fluid mb-3">
                <p><strong>Raulia Riski, S.Kom., M.Kom., M.M.Sc. </strong><br>Sistem Enterprise, Pemodelan dan Simulasi,
                    Business Process Management</p>
            </div>
            <div class="col-md-4">
                <img src="https://bis-sby.telkomuniversity.ac.id/wp-content/uploads/2023/03/Tita.svg" alt="Professor 3"
                    class="img-fluid mb-3">
                <p><strong>Tita Ayu Rospricilia, S.Kom., M.Kom.</strong><br>Customer Relationship Management,
                    Information System Management, Enterprise System</p>
            </div>
            <div class="col-md-4">
                <img src="https://bis-sby.telkomuniversity.ac.id/wp-content/uploads/2023/03/No-Photo.svg"
                    alt="Professor 3" class="img-fluid mb-3">
                <p><strong>Sri Hidayati, S.Si., M.Stat.</strong><br>Applied Statistics, Data Analytics, Time Series
                    Forecasting</p>
            </div>
            <div class="col-md-4">
                <img src="https://bis-sby.telkomuniversity.ac.id/wp-content/uploads/2023/09/Pak-Ilham.svg"
                    alt="Professor 3" class="img-fluid mb-3">
                <p><strong>Muhammad Ilham Alhari, S.Kom., M.Kom.</strong><br>IT Governance, Enterprise Architecture,
                    Smart Village</p>
            </div>
        </div>
    </section>

    <!--Footer-->
    <footer class="bg-dark text-white">
        <div class="container">
            <div class="row py-3">
                <div class="col-md-4">
                    <h5>Sistem Informasi</h5>
                    <p></p>
                    <p>Situs resmi Program Studi Sistem Informasi Universitas Telkom Surabaya. Website ini diperuntukkan
                        sebagai media komunikasi internal & eksternal bagi mahasiswa, dosen, dan karyawan.</p>
                    <p>Program Studi Sistem Informasi sudah ada sejak berdirinya Universitas Telkom Surabaya,
                        berdasarkan Keputusan Menteri Riset, Teknologi, dan Pendidikan Tinggi no. 733 / KPT / I / 2018.
                    </p>
                    <p>Website ini menyajikan informasi tentang Program Studi Sistem Informasi, profil, visi dan misi,
                        struktur organisasi, akademisi, kurikulum, dosen, penelitian dan pengabdian kepada masyarakat.
                    </p>
                </div>
                <div class="col-md-4">
                    <h5><br>Tautan Penting</br></h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white">Kerja Sama</a></li>
                        <li><a href="#" class="text-white">Blog</a></li>
                        <li><a href="#" class="text-white">Penghargaan</a></li>
                        <li><a href="#" class="text-white">Beasiswa</a></li>
                    </ul>
                    <h5><br>Tautan Bermanfaat</br></h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white">Telkom Indonesia</a></li>
                        <li><a href="#" class="text-white">Yayasan Pendidikan Telkom</a></li>
                        <li><a href="#" class="text-white">Universitas Telkom Surabaya</a></li>
                        <li><a href="#" class="text-white">Fakultas (FTIB)</a></li>
                        <li><a href="#" class="text-white">Website SMB</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5><br>Info Kontak</br></h5>
                    <ul class="list-unstyled">
                        <li><strong>Alamat:</strong> JI. Ketintang No.156, Surabaya, Jawa Timur 60231</li>
                        <li><strong>Telepon:</strong> +62 31 8280800</li>
                        <li><strong>Email:</strong> is@ittelkom-sby.ac.id</li>
                    </ul>
                    <h5><br>Media Sosial</br></h5>
                    <ul class="list-unstyled">
                    </ul>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>
