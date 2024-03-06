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
                        <li><a href="home" class="active">Home</a></li>
                        <li><a href="tambah">Tambah Foto</a></li>
                        <li><a href="postingan">Postingan</a></li>
                        @if (auth()->user()->level=="admin")
                        <li><a href="datauser">Data User</a></li>
                        @endif
                        <li><a href="profile">Profile <img src="assets/images/profile-header.jpg" alt=""></a>
                        </li>
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


<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- ***** Most Popular Start ***** -->
                <div class="most-popular">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">
                                @foreach ($posts as $post)
                                <div class="container" style="margin-top: 80px;">
                                    <div style="text-align-last: center;">
                                        <img src="image/{{ $posts->image }}" alt="" style="height: 440px;width:432px;border-radius: 23px">
                                        {{-- <img src="image/{{ $posts->image }}" alt="" style="height: 440px;width:432px"> --}}
                                        <p style="font-size: 20px;margin-top: 15px">{{ $posts->deskripsi}}</p>
                                    </div>
                                    <div style="margin: 30px 0px">
                                        <span style="color: white;">by {{ $posts->username }}</span>
                                        <span style="color: white;float:right" class="user-time pull-right">{{ $posts->created_at->diffForHumans() }}</span>
                                    </div>

                                    <div class="card">
                                        <p style="font-size: larger;color: #e75e8d;">Komentar:</p>
                                        <div class="form-group" style="margin-top: 10px">
                                            <textarea class="form-control" style="background: #dddddd" name="deskripsi" placeholder="Deskripsi Foto"></textarea>
                                            <button style="--bs-btn-bg: #e75e8d;color: white;margin-top: 15px" class="btn btn-pink btn-block">Komentar</button>
                                        </div>

                                        <p style="text-align: center;margin-top: 20px">Tidak Ada Komentar.</p>
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

    <script>
        // Fungsi untuk menyalin link ke clipboard
        function copyToClipboard() {
            // Mengambil elemen input atau textarea dengan value berisi link yang ingin disalin
            const linkInput = document.createElement('input');
            const linkText = window.location.href;

            // Menambahkan link ke elemen input
            linkInput.value = linkText;

            // Menambahkan elemen input ke body
            document.body.appendChild(linkInput);

            // Memilih dan menyalin teks di dalam elemen input
            linkInput.select();
            document.execCommand('copy');

            // Menghapus elemen input setelah disalin
            document.body.removeChild(linkInput);

            // Pemberitahuan bahwa link berhasil disalin (opsional)
            alert('Link has been copied to clipboard: ' + linkText);
        }

        // Menambahkan event listener pada tombol
        const shareButton = document.getElementById('shareButton');
        shareButton.addEventListener('click', copyToClipboard);
    </script>
</body>

</html>
