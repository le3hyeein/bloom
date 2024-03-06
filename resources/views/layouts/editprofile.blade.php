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

<body>
    <a href="profile">
        <p style="color: white; font-size: larger;"><i class="fa-solid fa-arrow-left"></i>Back</p>
    </a>
    <div class="container">

        <div class="card">
            <p>Edit Profile</p>

            {{-- <div>
                <span>Foto Profile</span>
                <span>Deskripsi Profile</span>
                <span>Nama Lengkap</span>
                <span>Email</span>
            </div> --}}
            <form action="" method="" enctype="">
                {{-- @csrf --}}
                <div class="form-group">
                    <label style="color: white" for="name">{{ __('Foto Profile') }}</label>
                    <input type="file" name="foto_profile" class="form-control">

                </div>
                <div class="form-group">
                    <label style="color: white" for="name">{{ __('Deskripsi Profile') }}</label>
                    <input class="form-control" name="deskripsi_profile" placeholder="deskripsi profile"></input>
                </div>
                <div class="form-group">
                    <label style="color: white" for="name">{{ __('Nama Lengkap') }}</label>
                    <input class="form-control" name="name" placeholder="nama lengkap"></input>
                </div>
                <div class="form-group">
                    <label style="color: white" for="email">{{ __('Email') }}</label>
                    <input id="email" type="email" placeholder="email"
                        class="form-control @error('email') is-invalid @enderror" nam="email" required
                        autocomplete="email">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <button type="submit" style="--bs-btn-bg: #e75e8d;color: white;"
                    class="btn btn-pink btn-block">Update</button>
            </form>
        </div>
    </div>
    </div>


</body>

<style>
    body {
        padding: 50px
    }

    .card {
        background: #27292a;
        padding: 30px;
    }

    .container {
        margin-top: 20px
    }

    i {
        margin-right: 10px;
        font-size: large
    }

    .card p {
        color: white;
        font-size: large
    }

    form {
        margin-top: 40px
    }

    label {
        padding: 0px
    }
</style>

</html>
