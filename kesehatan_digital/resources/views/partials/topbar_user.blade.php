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
   </head>

   <body>
       <!-- start topbar area -->

       <!-- end of topbar area -->
       <!-- start topbar area -->
       <!-- navbare area -->
       <!-- Bootstrap CSS -->

       <!-- Bootstrap JS (Popper.js and Bootstrap JS) -->
       <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
       {{-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script> --}}

       <nav class="navbar navbar-area v2">
           <div class="container">
               <!-- Brand and toggle get grouped for better mobile display -->
               <div class="navbar-header">
                   <button type="button" class="navbar-toggle blacknav collapsed" data-toggle="collapse"
                       data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                       <span class="sr-only">Toggle navigation</span>
                       <span class="icon-bar"></span>
                       <span class="icon-bar"></span>
                       <span class="icon-bar"></span>
                   </button>
                   <a class="navbar-brand" href="#"><img src="{{ asset('img/logo.png') }}" alt="theimran.com"></a>
               </div>
               <!-- Collect the nav links, forms, and other content for toggling -->
               <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                   <ul class="nav menu navbar-right navbar-nav">
                       <li class="{{ request()->routeIs('home2') ? 'current-menu-item' : '' }}">
                           <a href="{{ route('home2') }}">Beranda</a>
                       </li>

                       <li class="{{ request()->routeIs('about') ? 'current-menu-item' : '' }}">
                           <a href="{{ route('about') }}">Tentang Kami</a>
                       </li>

                       <li class="{{ request()->routeIs('berita', 'detail_berita') ? 'current-menu-item' : '' }}">
                           <a href="{{ route('berita') }}">Berita</a>
                       </li>
                       <li class="{{ request()->routeIs('kontak') ? 'current-menu-item' : '' }}"><a
                               href="{{ route('kontak') }}">Kontak</a>

                       </li>
                       <li><a href="#">Akun<span class="fa fa-angle-down"></span></a>
                           <ul>
                               <li><a href="{{ route('login') }}">Login</a></li>
                               <li><a href="{{ route('register') }}">Register</a></li>
                           </ul>
                       </li>
                       @auth
                           <li>
                               <a href="#">
                                   <img src="{{ asset('img/testimonial-1.png') }}" class="rounded"
                                       style="margin-left: 20px;" width="50px" srcset="">
                               </a>
                               <ul>
                                   <li>
                                       <a href="{{ route('profilUser', Auth::user()->id) }}">
                                           <button type="submit" style="background: none">Profile</button>
                                       </a>
                                   </li>
                                   <li>
                                       <a href="#">
                                           <form action="{{ route('logout') }}"
                                               onsubmit="return confirm('Apakah Anda Yakin ?');" method="POST"
                                               id="logout-form">
                                               @csrf
                                               <button type="submit" class="dropdown-item d-none">Logout</button>
                                           </form>
                                       </a>
                                   </li>
                               </ul>
                           </li>
                           <!-- Modal -->
                           <div id="myModal" class="modal" style="overflow-y: scroll;">
                               <div class="modal-dialog modal-dialog-scrollable">
                                   <div class="modal-content">
                                       <div class="modal-header">
                                           <h2 class="modal-title" id="exampleModalLabel" class="help">Profil Anda</h2>

                                       </div>
                                       <div class="modal-body">
                                           <form action="{{ route('updateProfile', Auth::user()->id) }}" method="post">
                                               @csrf
                                               @method('PUT')
                                               <div class="form-group">
                                                   <label class="form-label"><span class="help">Masukan
                                                           Nama</span></label>
                                                   <input type="text" class="form-control" name="name"
                                                       value="{{ old('name', Auth::user()->name) }}">
                                               </div>
                                               <div class="form-group">
                                                   <label class="form-label"><span class="help">Masukan
                                                           Email</span></label>
                                                   <input type="text" class="form-control" name="email"
                                                       value="{{ old('email', Auth::user()->email) }}">
                                               </div>
                                               <div class="form-group">
                                                   <label class="form-label"><span class="help">Masukan
                                                           NIS</span></label>
                                                   <input type="text" class="form-control" name="nis"
                                                       value="{{ old('nis', Auth::user()->nis) }}">
                                               </div>
                                               <div class="form-group">
                                                   <label class="form-label"><span class="help">Masukan Tinggi
                                                           Badam</span></label>
                                                   <input type="text" class="form-control" name="tinggi_badan"
                                                       value="{{ old('tinggi_badan', Auth::user()->tinggi_badan) }}">
                                               </div>

                                               <div class="form-group">
                                                   <label class="form-label"><span class="help">Masukan Berat
                                                           Badan</span></label>
                                                   <input type="text" class="form-control" name="berat_badan"
                                                       value="{{ old('berat_badan', Auth::user()->berat_badan) }}">
                                               </div>
                                               <div class="form-group">
                                                   <label class="form-label"><span class="help">Masukan
                                                           NISN</span></label>
                                                   <input type="text" class="form-control" name="nisn"
                                                       value="{{ old('nisn', Auth::user()->nisn) }}">
                                               </div>
                                               <div class="form-group">
                                                   <label class="form-label"><span class="help">Masukan
                                                           Tanggal lahir</span></label>
                                                   <input type="text" class="form-control" name="tanggal_lahir"
                                                       value="{{ old('tanggal_lahir', Auth::user()->tanggal_lahir) }}">
                                               </div>
                                               <div class="form-group">
                                                   <label class="form-label"><span class="help">Pilih Jenis
                                                           Kelamin</span></label><br>
                                                   <select class="form-select" name="jenis_kelamin"
                                                       aria-label="Default select example">
                                                       <option disabled>Pilih Jenis Kelamin</option>
                                                       <option value="Laki - Laki"
                                                           {{ old('jenis_kelamin', Auth::user()->jenis_kelamin) === 'Laki - Laki' ? 'selected' : '' }}>
                                                           Laki - laki
                                                       </option>
                                                       <option value="Perempuan"
                                                           {{ old('jenis_kelamin', Auth::user()->jenis_kelamin) === 'Perempuan' ? 'selected' : '' }}>
                                                           Perempuan
                                                       </option>
                                                   </select>
                                               </div>
                                               <div class="form-group">
                                                   <label class="form-label"><span class="help">Pilih Data
                                                           Vaksin</span></label><br>
                                                   <select class="form-select" name="d_vaksin"
                                                       aria-label="Default select example">
                                                       <option disabled>Pilih Data Vaksin</option>
                                                       <option value="Vaksin Pertama"
                                                           {{ old('d_vaksin', Auth::user()->d_vaksin) === 'Vaksin Pertama' ? 'selected' : '' }}>
                                                           Vaksin Pertama
                                                       </option>
                                                       <option value="Vaksin Kedua"
                                                           {{ old('d_vaksin', Auth::user()->d_vaksin) === 'Vaksin Kedua' ? 'selected' : '' }}>
                                                           Vaksin Kedua
                                                       </option>
                                                       <option value="Vaksin Ketiga"
                                                           {{ old('d_vaksin', Auth::user()->d_vaksin) === 'Vaksin Ketiga' ? 'selected' : '' }}>
                                                           Vaksin Ketiga
                                                       </option>
                                                   </select>
                                               </div>
                                               <div class="modal-footer">
                                                   <button type="button" class="btn btn-secondary"
                                                       data-bs-dismiss="myModal" id="closeButton">Close</button>
                                                   <button type="submit" class="btn btn-primary">Edit Profile</button>
                                                   <!-- Button trigger modal -->
                                                   <button type="button" class="btn btn-danger">
                                                       Cetak kartu
                                                   </button>

                                               </div>
                                           </form>
                                       </div>
                                   </div>
                               </div>
                           </div>

                           {{-- <!-- Modal -->
                           <div id="modalcetak" class="modal">
                               <div class="modal-dialog modal-lg">
                                   <div class="modal-content">
                                       <div class="modal-header bg-primary text-white">
                                           <h3 class="modal-title text-uppercase" id="exampleModalLabel">
                                               Kartu Pelajar</h3>
                                           <button type="button" class="btn-close" data-bs-dismiss="modal"
                                               aria-label="Close"></button>
                                       </div>
                                       <div class="modal-body">
                                           <div class="cardd">
                                               <div class="card-body">
                                                   <p class="card-text text-uppercase"
                                                       style="margin-left:340px; margin-top: 185px;">
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
                                       <div class="modal-footer">
                                           <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"
                                               onclick="closeModal()">Close</button>
                                           <a href="{{ route('kartuPdf', Auth::user()->id) }}"><button type="submit"
                                                   id="cetakPdfBtn" class="btn btn-primary">Cetak ke
                                                   PDF</button></a>
                                       </div>
                                   </div>
                               </div>
                           </div>


                           <script>
                               document.getElementById('modalSukses').addEventListener('click', function() {
                                   document.getElementById('modalcetak').style.display = 'block';
                               });

                               function closeModal() {
                                   var modal = document.getElementById('modalcetak');
                                   modal.style.display = 'none';
                               }
                           </script> --}}


                           <!-- Script JavaScript -->
                           <script>
                               // Mendapatkan referensi tombol "Close" menggunakan ID
                               var closeButton = document.getElementById('closeButton');

                               // Menambahkan event listener pada tombol "Close"
                               closeButton.addEventListener('click', function() {
                                   // Mendapatkan referensi modal menggunakan ID
                                   var modal = document.getElementById('myModal');

                                   // Menutup modal dengan menghapus kelas "show" dari elemen modal
                                   modal.classList.remove('show');

                                   // Menghapus atribut "aria-modal" dan "style" dari elemen modal
                                   modal.removeAttribute('aria-modal');
                                   modal.removeAttribute('style');

                               }); // Dapatkan referensi elemen-elemen yang dibutuhkan
                               var modal = document.getElementById("myModal");
                               var showModalButton = document.getElementById("showModalButton");
                               var closeButton = document.getElementsByClassName("close")[0];

                               // Fungsi untuk menampilkan modal
                               function showModal() {
                                   modal.style.display = "block";
                               }

                               // Fungsi untuk menyembunyikan modal
                               function hideModal() {
                                   var myModal = document.getElementById('myModal');
                                   modal.style.display = "none";
                               }

                               // Event listener untuk tombol tampilkan modal
                               showModalButton.addEventListener("click", showModal);

                               // Event listener untuk tombol tutup modal
                               closeButton.addEventListener("click", hideModal);

                               // Event listener untuk menutup modal ketika di luar area modal diklik
                               window.addEventListener("click", function(event) {
                                   if (event.target == modal) {
                                       hideModal();
                                   }
                               });
                           </script>


                       @endauth
                   </ul>
               </div>
           </div>
       </nav>
       <!-- end of navbare area -->
       <!-- end of topbar area -->

   </body>

   </html>
