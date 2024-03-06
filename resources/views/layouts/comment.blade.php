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
    @foreach ($posts as $post)
        <div class="container" style="margin-top: 80px;">
            <div style="text-align-last: center;">
                <img src="image/{{ $post->image }}" alt=""
                    style="height: 440px;width:432px;border-radius: 23px">
                {{-- <img src="image/{{ $post->image }}" alt="" style="height: 440px;width:432px"> --}}
                <p style="font-size: 20px;margin-top:
            15px">{{ $post->deskripsi }}</p>
            </div>
            <div style="margin: 30px 0px">
                <span style="color: white;">by username</span>
                <span style="color: white;float:right" class="user-time pull-right">2 min ago</span>
            </div>

            <div class="card">
                <p style="font-size: larger;color: #e75e8d;">Komentar:</p>
                <form action="{{ route('addComent', $post->id) }}" method="post">
                    @csrf
                    <div class="form-group" style="margin-top: 10px">
                        <textarearequired type="text" class="form-control" style="background: #dddddd" name="content"
                            placeholder="Deskripsi Foto"></textarea>
                        <button style="--bs-btn-bg: #e75e8d;color: white;margin-top: 15px"
                            class="btn btn-pink btn-block">Komentar</button>
                    </div>
                </form>

                @if (session('notif'))
                    <div class="alert alert-success" style="margin-top: 15px;">
                        {{ session('notif') }}
                    </div>
                @endif
                <hr>

                <div class="komen-list">
                    @if ($post->comments->isEmpty())
                        <div class="text-center" style="color: white;">Tidak Ada Komentar.</div>
                    @else
                        @foreach ($post->comments as $comment)
                            <div class="komen-body">
                                <p style="color: white;">{{ $comment->content }}</p>
                                <span style="color: black;font-size:15px;">by
                                    {{ $comment->user->username }}</span>
                                <span
                                    style="color: black;font-size:15px;float:right">{{ $comment->created_at->diffForHumans() }}</span>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>

        </div>
    @endforeach

</body>

<style>
    .card {
        padding: 10px;
        background-color: #27292a;
    }

    body {
        margin-bottom: 10%;
    }
</style>


</html>
