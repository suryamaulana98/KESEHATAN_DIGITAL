   <!-- start topbar area -->

   <!-- end of topbar area -->
   <!-- start topbar area -->
   <!-- navbare area -->
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
               <a class="navbar-brand" href="#"><img src="img/logo.png" alt="theimran.com"></a>
           </div>
           <!-- Collect the nav links, forms, and other content for toggling -->
           <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
               <ul class="nav menu navbar-right navbar-nav">
                   <li class="current-menu-item"><a href="#home">Beranda</a>
                   </li>
                   <li><a href="#about">Tentang Kami</a>
                   </li>

                   <li><a href="#pricing">Berita</a>
                   </li>
                   <li><a href="#contact">Kontak</a>

                   </li>
                   <li><a href="#contact">Akun<span class="fa fa-angle-down"></span></a>
                       <ul>
                           <li><a href="{{ route('login') }}">Login</a></li>
                           <li><a href="{{ route('register') }}">Register</a></li>
                       </ul>
                   </li>
                   @auth
                       <li><img src="img/testimonial-2.png" class="rounded" style="margin-bottom: -70px; margin-left: 40px;"
                               width="50px" srcset="">
                           <ul>
                               <li>
                                   <button type="submit" id="showModalButton" style="background: none">Profile</button>
                               </li>
                               <li>
                                   <form action="{{ route('logout') }}" method="POST" id="logout-form">
                                       @csrf
                                       <button type="submit" class="dropdown-item d-none">Logout</button>
                                   </form>
                               </li>
                           </ul>
                       </li>
                       <!-- Modal -->
                       <div id="myModal" class="modal">
                           <div class="modal-dialog">
                               <div class="modal-content">
                                   <div class="modal-header">
                                       <h5 class="modal-title" id="exampleModalLabel">Profil Anda</h5>
                                       <button type="button" class="btn-close" data-bs-dismiss="modal"
                                           aria-label="Close"></button>
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
                                                   value="{{ old('emai', Auth::user()->email) }}">
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
                                                       Vaksin</span></label>
                                               <select class="form-select" name="d_vaksin"
                                                   aria-label="Default select example">
                                                   <option selected disabled>{{ Auth::user()->d_vaksin }}</option>
                                                   <option value="vaksi Pertama">vaksin Pertama</option>
                                                   <option value="vaksin Kedua">vaksin Kedua</option>
                                                   <option value="Vaksin Ketiga">Vaksin Ketiga</option>
                                               </select>
                                           </div>
                                           <div class="modal-footer">
                                               <button type="button" class="btn btn-secondary close"
                                                   data-bs-dismiss="modal">Close</button>
                                               <button type="submit" class="btn btn-primary">Edit Profile</button>
                                           </div>
                                       </form>
                                   </div>
                               </div>
                           </div>
                       </div>

                       <!-- Script JavaScript -->
                       <script>
                           // Dapatkan referensi elemen-elemen yang dibutuhkan
                           var modal = document.getElementById("myModal");
                           var showModalButton = document.getElementById("showModalButton");
                           var closeButton = document.getElementsByClassName("close")[0];

                           // Fungsi untuk menampilkan modal
                           function showModal() {
                               modal.style.display = "block";
                           }

                           // Fungsi untuk menyembunyikan modal
                           function hideModal() {
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
