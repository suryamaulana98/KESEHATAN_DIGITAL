<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        /* CSS untuk tampilan kartu pelajar di dalam modal */
        .cardd {
            width: 640px;
            height: 400px;
            margin: 0 auto;
            /* Posisikan kartu di tengah */
            background-image: url('../img/background1.png');
            /* Ganti 'background1.png' dengan nama gambar latar belakang Anda */
            background-size: cover;
            border: 2px solid #17a2b8;
            /* Warna border kartu */
            border-radius: 10px;
            /* Rounding border kartu */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            /* Efek bayangan kartu */
        }

        .card-title {
            font-size: 1px;
            font-weight: bold;
            margin-bottom: 0.1rem;
            /* Jarak antara judul dan konten */
        }

        .card-text {
            font-size: 15px;
            color: #05486b;
            font-weight: bold;
            margin-bottom: 0.1rem;
            /* Jarak antara konten */
        }

        /* CSS untuk tampilan cetak */
        @media print {
            body * {
                visibility: hidden;
            }

            .cardd,
            .cardd * {
                visibility: visible;
            }

            .cardd {
                left: 10px;
                top: 10px;
                position: absolute;
                background-image: url('../img/background1.png');
                /* Tetapkan gambar latar belakang untuk mencetak */
                background-size: cover;
            }
        }
    </style>
</head>

<body>

    <div id="modalcetak" class="modal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div>
                        <?php
                        $userPhotoPath = public_path('foto/' . Auth::user()->foto);
                        $userPhotoData = file_get_contents($userPhotoPath);
                        $userPhotoBase64 = base64_encode($userPhotoData);
                        ?>
                        <img class="cardd" src="data:image/svg+xml;base64,<?php echo base64_encode(file_get_contents(public_path('img/background1.png'))); ?>" width="120">
                        <div class="card-body">

                            <img src="data:image/jpg;base64,{{ $userPhotoBase64 }}"
                                style="border-radius: 100%; width:20%; height:15%; z-index: 2;" alt="">
                            <p class="card-text text-uppercase" style="margin-left:340px; margin-top: -215px;">
                                {{ Auth::user()->name }}</p>
                            <p class="card-text text-uppercase" style="margin-left:340px; margin-top: 5px;">
                                {{ Auth::user()->nisn }}</p>
                            <p class="card-text text-uppercase" style="margin-left:340px; margin-top: 5px;">
                                {{ Auth::user()->nis }}</p>
                            <p class="card-text text-uppercase" style="margin-left:340px; margin-top: 4px;">
                                {{ Auth::user()->kelas->kelas }}</p>
                            <p class="card-text text-uppercase" style="margin-left:340px; margin-top: 4px;">
                                {{ Auth::user()->tanggal_lahir }}
                            </p>
                            <p class="card-text text-uppercase" style="margin-left:340px; margin-top: 4px;">
                                {{ Auth::user()->jenis_kelamin }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
