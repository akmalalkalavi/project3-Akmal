<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-
scale=1.0">
    <title>Contact</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>" />
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-light fixed-top bg-light shadow-sm p-2 mb-5 bg-body rounded">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url() ?>">MyBlog</a>
            <button class="navbar-toggler" type="button" data-bs- toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria- expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="<?= base_url() ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?=
                                                    base_url('about') ?>">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('post')
                                                    ?>">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="<?=
                                                    base_url('contact') ?>">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('faqs')
                                                    ?>">FAQ</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="p-5 mb-4 bg-light rounded-3 welcome-section">
        <div class="container py-5">
            <h1 class="display-5 fw-bold">Contact</h1>
            <!-- <p class="col-md-8 fs-4">di laman portal berita</p> -->
            <!-- <button class="btn btn-primary btn-sm" type="button">Read more</button> -->
        </div>
    </div>
    <div class="container">
        <div class="row">
          <div class="col-lg-5">
            <div class="info-wrap">
              <div class="info-item d-flex">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                  <h3>Alamat</h3>
                  <p>Jl. Matraman Dalam III, Kel. Pegangsaan, Kec. Menteng, Jakarta Pusat.</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-telephone flex-shrink-0"></i>
                <div>
                  <h3>Call Us</h3>
                  <p>+62 813 8123 2139</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-envelope flex-shrink-0"></i>
                <div>
                  <h3>Email</h3>
                  <p>akhallavi12@gmail.com</p>
                </div>
              </div><!-- End Info Item -->
            </div>
          </div>

          <div class="col-lg-7">
            
            <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBz8ynSiItupmdzgMphM1XM4q-bBJPJBGk&q=Sekretariat%20Rayon%20PMII%20Teknik%20Unusia,Jakarta" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            
          </div><!-- End Contact Form -->

        </div>

      </div>
    <div class="container py-4">
        <footer class="pt-3 mt-4 text-muted border-top">
            <div class="container">
                &copy; <?= Date('Y') ?>
            </div>
        </footer>
    </div>
    <!-- Jquery dan Bootsrap JS -->
    <script src="<?= base_url('js/jquery.min.js') ?>"></script>
    <script src="<?= base_url('js/bootstrap.min.js') ?>"></script>
</body>

</html>