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
    {{-- <a href="datauser"><p style="color: white; font-size: larger;"><i class="fa-solid fa-arrow-left"></i>Back</p></a> --}}
    <div class="container">

        <div class="card">
            <p>Edit Data User</p>

            {{-- <div>
                <span>Foto Profile</span>
                <span>Deskripsi Profile</span>
                <span>Nama Lengkap</span>
                <span>Email</span>
            </div> --}}
            <form action="" method="" enctype="">
                {{-- @csrf --}}
                <div class="row mb-3">
                    <label style="color: white" for="name" class="col-md-2 col-form-label">{{ __('Foto Profile') }}</label>

                    <div class="col-md-10">
                        <input type="file" name="image" class="form-control">
                    </div>
                </div>
                <div class="row mb-3">
                    <label style="color: white" for="name" class="col-md-2 col-form-label">{{ __('Deskripsi Profile') }}</label>

                    <div class="col-md-10">
                        <input class="form-control" name="deskripsi" placeholder="deskripsi profile"></input>
                    </div>
                </div>
                <div class="row mb-3">
                    <label style="color: white" for="name" class="col-md-2 col-form-label">{{ __('Nama Lengkap') }}</label>

                    <div class="col-md-10">
                        <input class="form-control" name="name" placeholder="nama lengkap"></input>
                    </div>
                </div>
                <div class="row mb-3">
                    <label style="color: white" for="email" class="col-md-2 col-form-label">{{ __('Email') }}</label>

                    <div class="col-md-10">
                        <input id="email" type="email" placeholder="email" class="form-control @error('email') is-invalid @enderror" name="email" required autocomplete="email">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <button type="submit" style="--bs-btn-bg: #e75e8d;color: white;" class="btn btn-pink btn-block">Update</button>
            </form>
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

</style>

</html>
