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
            background-image: url('{{ asset('img/background1.png') }}');
            /* Ganti 'background.jpg' dengan path gambar Anda */
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
            margin-bottom: 0.5rem;
            /* Jarak antara judul dan konten */
        }

        .card-text {
            font-size: 15px;
            color: #05486b;
            font-weight: bold;
            margin-bottom: 0.1rem;
            /* Jarak antara konten */
        }



        /* CSS untuk tombol cetak */
        #cetakPdfBtn {
            width: 100%;
        }


        /* CSS untuk konten di dalam modal */
        .modal-body,
        .modal-footer {
            background-color: rgba(255, 255, 255, 0.8);
            /* Warna latar belakang konten */
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
                position:
                    absolute;
            }

        }
    </style>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
</head>

<body>

    <div id="modalcetak" class="modal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="cardd">
                        <div class="card-body">
                            <p class="card-text text-uppercase" style="margin-left:340px; margin-top: 185px;">
                                {{ Auth::user()->name }}</p>
                            <p class="card-text text-uppercase" style="margin-left:340px; ">
                                {{ Auth::user()->nisn }}</p>
                            <p class="card-text text-uppercase" style="margin-left:340px; ">
                                {{ Auth::user()->nis }}</p>
                            <p class="card-text text-uppercase" style="margin-left:340px; ">
                                {{ Auth::user()->kelas->kelas }}</p>
                            <p class="card-text text-uppercase" style="margin-left:340px;">
                                {{ Auth::user()->tanggal_lahir }}
                            </p>
                            <p class="card-text text-uppercase" style="margin-left:340px;">
                                {{ Auth::user()->jenis_kelamin }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
