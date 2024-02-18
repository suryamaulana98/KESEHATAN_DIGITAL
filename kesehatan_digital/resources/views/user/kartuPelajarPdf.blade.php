<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .cardd {
            width: 640px;
            height: 400px;
            margin: 0 auto;
            background-image: url('../img/background1.png');
            background-size: cover;
            border: 2px solid #17a2b8;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .card-title {
            font-size: 1px;
            font-weight: bold;
            margin-bottom: 0.1rem;
        }

        .card-text {
            font-size: 15px;
            color: #05486b;
            font-weight: bold;
            margin-bottom: 0.1rem;
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
                <div class="modal-body" style="position: relative;">
                    <?php
                    $userPhotoPath = public_path('foto/' . Auth::user()->foto);
                    $userPhotoData = file_get_contents($userPhotoPath);
                    $userPhotoBase64 = base64_encode($userPhotoData);
                    ?>
                    <img class="cardd" src="data:image/svg+xml;base64,<?php echo base64_encode(file_get_contents(public_path('img/background1.png'))); ?>" width="120">
                    <div class="card-body" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;">
                        <img src="data:image/jpg;base64,{{ $userPhotoBase64 }}"
                            style="position: absolute; top: 68px; left: 40px; border-radius: 100%; width:20%; height:15%; z-index: 2;"
                            alt="">
                        <ul style="position: absolute; top: 85px; left: 340px; list-style: none; padding: 0;">
                            <li class="card-text text-uppercase">
                                {{ Auth::user()->name }}</li>
                            <li class="card-text text-uppercase">
                                {{ Auth::user()->nisn }}</li>
                            <li class="card-text text-uppercase">
                                {{ Auth::user()->nis }}</li>
                            <li class="card-text text-uppercase">
                                {{ Auth::user()->kelas->kelas }}</li>
                            <li class="card-text text-uppercase">
                                {{ Auth::user()->tanggal_lahir }}</li>
                            <li class="card-text text-uppercase">
                                {{ Auth::user()->jenis_kelamin }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
</body>

</html>
