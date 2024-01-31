<footer class="footer-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="footer-content">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="footer-logo">
                                <img src="{{ asset('img/logo.png') }}" alt="mdimran41">
                            </div>
                            <div class="footer-about">
                                <p>Dengan penuh dedikasi, Unit Kesehatan Sekolah (UKS) SMKN 1 Lumajang hadir untuk
                                    membantu mewujudkan lingkungan pendidikan yang sehat dan berkualitas. Kami
                                    memprioritaskan kesejahteraan siswa dan memberikan layanan kesehatan yang terbaik.
                                    Bersama-sama, mari kita jaga kesehatan, tingkatkan prestasi, dan ciptakan masa depan
                                    yang cerah. UKS SMKN 1 Lumajang, wadah untuk mengembangkan pola hidup sehat dan
                                    bahagia. Bergabunglah dengan kami dalam perjalanan menuju kesejahteraan dan
                                    kesuksesan. Peduli, Sehat, Unggul – itulah motto kami.</p>
                                <a href="{{ route('about') }}"> <span class="fa fa-angle-right"></span>read more</a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="footer-recent-post">
                                <div class="footer-about">
                                    <div id="map" style="height: 300px;"></div>
                                    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCn4uayw359fjMh4P9i2rKKZYHzXaqTRNs"></script>
                                    <script>
                                        function initializeMap() {
                                            var mapOptions = {
                                                center: new google.maps.LatLng(-8.125476455146003, 113.21802761636664), // Change these coordinates
                                                zoom: 30
                                            };
                                            var map = new google.maps.Map(document.getElementById("map"), mapOptions);
                                        }
                                
                                        google.maps.event.addDomListener(window, 'load', initializeMap);
                                    </script>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="media-carea-contact">
                    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCn4uayw359fjMh4P9i2rKKZYHzXaqTRNs"></script>
                </div>
            </div>
        </div>
    </div>
</footer>
