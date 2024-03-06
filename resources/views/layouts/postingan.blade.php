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
                            <li><a href="tambah">Tambah Foto</a></li>
                            <li><a href="postingan" class="active">Postingan</a></li>
                            @if (auth()->user()->level == 'admin')
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
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="most-popular">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">
                                @foreach ($posts as $post)
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="item">
                                            <img src="image/{{ $post->image }}" style="height: 220px">
                                            <span>{{$post->created_at->diffForHumans()}}</span>
                                            <a href="/delete/{{ $post->id }}"
                                                onclick="return confirm('Apakah anda yakin ingin hapus foto ini?');">
                                            <button style="--bs-btn-bg: #e75e8d;color: white;margin-top: 15px"
                                                class="btn btn-pink btn-block"><i class="fa-solid fa-trash"
                                                    style="color: white;margin:5px;"></i>Hapus</button></a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ***** Most Popular End ***** -->

            </div>
        </div>
    </div>
</body>

<style>
    .most-popular .item {
        background-color: #27292a;
        padding: 15px 15px;
        border-radius: 23px;
        margin-bottom: 30px;
    }
</style>

</html>
