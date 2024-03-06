<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <title>Gallery</title>

    <!-- Memuat jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Memuat JavaScript Bootstrap -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Bootstrap core CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">


    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">



    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-cyborg-gaming.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <!--TemplateMo 579 Cyborg Gaming
    https://templatemo.com/tm-579-cyborg-gaming-->


    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">

                        <a href="home">
                            <p style="font-size: larger"> Gallery Photo </p>
                        </a>
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li><a href="home">Home</a></li>
                            <li><a href="tambah" class="active">Tambah Foto</a></li>
                            <li><a href="postingan">Postingan</a></li>
                            @if (auth()->user()->level=="admin")
                            <li><a href="datauser">Data User</a></li>
                            @endif
                            <li><a href="profile">Profile <img src="assets/images/profile-header.jpg"
                                        alt=""></a></li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
</head>

<body>
    <div class="container" style="margin-top: 120px">
        <h4>Tambahkan Foto</h4>
        <form action="{{route('post.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group" style="margin: 20px 0px;">
                <input type="file" name="image" class="form-control">
            </div>
            <div class="form-group" style="margin: 20px 0px;">
                <textarea class="form-control" name="deskripsi" placeholder="Deskripsi Foto"></textarea>
            </div>
            <button type="submit" style="--bs-btn-bg: #e75e8d;color: white;" class="btn btn-pink btn-block">Upload</button>
        </form>
    </div>
</body>

</html>
