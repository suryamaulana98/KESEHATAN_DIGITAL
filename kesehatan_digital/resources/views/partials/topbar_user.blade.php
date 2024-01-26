   <!-- start topbar area -->

   <!-- end of topbar area -->
   <!-- start topbar area -->
   <!-- navbare area -->
   <!-- Bootstrap CSS -->

   <!-- Bootstrap JS (Popper.js and Bootstrap JS) -->
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

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
                               <img src="{{ asset('img/testimonial-1.png') }}" class="rounded" style="margin-left: 20px;"
                                   width="50px" srcset="">
                           </a>
                           <ul>
                               <li>
                                   <a href="#">
                                       <button type="submit" id="showModalButton" style="background: none">Profile</button>
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
                       <div id="myModal" class="modal">
                           <div class="modal-dialog">
                               <div class="modal-content">
                                   <div class="modal-header">
                                       <h2 class="modal-title" id="exampleModalLabel" class="help">Profil Anda</h2>

                                   </div>
                                   <div class="modal-body">
                                       <form action="{{ route('updateProfile', Auth::user()->id) }}" method="post">
                                           @csrf
                                           @method('PUT')
                                           <div class="form-group">
                                               <label class="form-label"><span class="help">Masukan Nama</span></label>
                                               <input type="text" class="form-control" name="name"
                                                   value="{{ old('name', Auth::user()->name) }}">
                                           </div>
                                           <div class="form-group">
                                               <label class="form-label"><span class="help">Masukan Email</span></label>
                                               <input type="text" class="form-control" name="email"
                                                   value="{{ old('email', Auth::user()->email) }}">
                                           </div>
                                           <div class="form-group">
                                               <label class="form-label"><span class="help">Masukan NISN</span></label>
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
                                               <label class="form-label"><span class="help">Pilih Data
                                                       Vaksin</span></label><br>
                                               <select class="form-select" name="d_vaksin"
                                                   aria-label="Default select example">
                                                   <option selected disabled>{{ Auth::user()->d_vaksin }}</option>
                                                   <option value="Vaksin Pertama"
                                                       {{ old('d_vaksin') === 'Vaksin Pertama' ? 'selected' : '' }}>Vaksin
                                                       Pertama</option>
                                                   <option value="Vaksin Kedua"
                                                       {{ old('d_vaksin') === 'Vaksin Kedua' ? 'selected' : '' }}>Vaksin
                                                       Kedua</option>
                                                   <option value="Vaksin Ketiga"
                                                       {{ old('d_vaksin') === 'Vaksin Ketiga' ? 'selected' : '' }}>Vaksin
                                                       Ketiga</option>
                                               </select>
                                           </div>
                                           <div class="modal-footer">
                                               <button type="button" class="btn btn-secondary" data-bs-dismiss="myModal"
                                                   id="closeButton">Close</button>
                                               <button type="submit" class="btn btn-primary">Edit Profile</button>
                                               <!-- Button trigger modal -->
                                               <button type="button" class="btn btn-primary" data-toggle="modal"
                                                   data-target="#cetakKartuModal" id="cetakKartuButton">
                                                   Cetak Kartu
                                               </button>

                                           </div>
                                       </form>
                                   </div>
                               </div>
                           </div>
                       </div>
                     
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
                       
                           // Event listener untuk tombol tampilkan modal "Cetak Kartu"
                           var cetakKartuButton = document.getElementById("cetakKartuButton");
                           cetakKartuButton.addEventListener("click", function() {
                               hideMyModal(); // Menyembunyikan myModal sebelum menampilkan cetakKartuModal
                               $('#cetakKartuModal').modal('show'); // Menampilkan cetakKartuModal
                           });
                       </script>
                          <!-- Modal -->
                       <!-- New modal for "Cetak Kartu" -->
                       <div class="modal fade" id="cetakKartuModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                           aria-hidden="true">
                           <div class="modal-dialog">
                               <div class="modal-content">
                                   <div class="modal-header">
                                       <h1 class="modal-title fs-5" id="exampleModalLabel">Cetak Kartu</h1>
                                       <button type="button" class="btn-close" data-bs-dismiss="modal"
                                           aria-label="Close"></button>
                                   </div>
                                   <div class="modal-body">
                                       <input type="text">
                                   </div>
                                   <div class="modal-footer">
                                       <button type="button" class="btn btn-secondary"
                                           data-bs-dismiss="modal">Close</button>
                                       <button type="button" class="btn btn-primary">Save changes</button>
                                   </div>
                               </div>
                           </div>
                       </div>


                   @endauth
               </ul>
           </div>
       </div>
   </nav>
   <!-- end of navbare area -->
   <!-- end of topbar area -->
