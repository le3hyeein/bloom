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
</head>

<body style="margin: 50px 0px; cursor:pointer">
    <div class="container">
        <nav class="main-nav">
            <ul class="nav">
                <li><a href="home">Home</a></li>
                <li style="margin-left: 15px;"><a href="profile" style="color: #e75e8d;">Profile</a></li>
            </ul>
        </nav>

        <div class="card">

            <div>
                <a href="editprofile">
                <button style="--bs-btn-bg: #e75e8d;color: white;" class="btn btn-pink"><i class="fa-solid fa-pen" style="margin-right: 10px"></i>Edit Profile</button>
                </a>
                <span style="float: inline-end;color:#e75e8d" href="{{ route('logout') }}"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    {{ __('Log Out') }}
                </span>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>


            <img src="assets/images/profile2.png">
            <div class="desk">
                <p>{{ auth::user()->username }}</p>
                <p><i class="fa-solid fa-plus" style="margin-right: 5px"></i>Tambah Deskripsi Profile</p>
            </div>

            <p style="margin-top: 25px;color:#e75e8d;">Info Pribadi</p>
            <div style="display: flex;">
                <div class="datapribadi">
                    <p>Nama Lengkap</p>
                    <p>Email</p>
                </div>

                <div class="datapribadi" style="margin: 0px 10px;">
                    <p>:</p>
                    <p>:</p>
                </div>

                <div class="datapribadi">
                    <p>{{ auth::user()->name }}</p>
                    <p>{{ auth::user()->email }}</p>
                </div>
            </div>
        </div>
</body>

<style>
    img {
        border-radius: 100%;
        height: 250px;
        width: 250px;
        align-self: center;
    }

    .card {
        background: #27292a;
        padding: 30px;
        margin-top: 50px;
        border-radius: 30px;
    }

    .desk p {
        text-align: center;
        margin-top: 10px;
        font-size: 18px;
        color: white;
    }

    .datapribadi p {
        color: white;
    }
</style>

</html>
