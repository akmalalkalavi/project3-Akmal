<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyBlog</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>" />
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-light fixed-top bg-light shadow-sm p-2 mb-5 bg-body rounded">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url() ?>">MyBlog</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data- bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle
navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('admin/post') ?>">Blog</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="<?= base_url('admin/post/new') ?>" class="btn btn-primary mr-3">New Post</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('logout') ?>">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="p-5 mb-4 bg-light rounded-3 welcome-section">
        <div class="container py-5">
            <h1 class="display-5 fw-bold">Post > New</h1>
        </div>
    </div>
    <div class="container">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group mb-2">
                <label for="image">Image</label>
                <input class="form-control" type="file" id="image" name="image">
            </div>
            <div class="form-group mb-2">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control" placeholder="Posttitle" required>
            </div>
            <div class="form-group mb-2">
                <textarea name="content" class="form-control" cols="30" rows="10" placeholder="Write a great post!"></textarea>
            </div>
            <div class="form-group">
                <button type="submit" name="status" value="published" class="btn btn-primary">Publish</button>
                <button type="submit" name="status" value="draft" class="btn btn-secondary">Save to Draft</button>
            </div>
        </form>
    </div>
    <script>
        function confirmToDelete(el) {
            document.getElementById("delete-button").setAttribute("href", el.dataset.href);
            var myModal = new bootstrap.Modal(document.getElementById('confirm-dialog '), {
                keyboard: false
            });
            myModal.show();
        }
    </script>
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
    <script src="<?= base_url('js/bootstrap.bundle.min.js') ?>"></script>
</body>

</html>