<!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

      <div id="hero-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

        <div class="carousel-item active">
          <img src="assets/img/hero-carousel/hero-carousel-1.jpg" alt="">
          <div class="carousel-container">
            <h2><span>A’P</span> Steakhouse</h2>
            <p>Selamat datang di A’P Steakhouse, destinasi kuliner terbaik untuk para pecinta daging sejati. Kami menyajikan aneka hidangan berkualitas mulai dari steak premium, burger juicy, pasta creamy, hingga dessert manis yang menggoda.</p>
            <div>
              {{-- <a href="#menu" class="btn-get-started">Our Menu</a> --}}
              <a href="{{ route('meja.store') }}" class="btn-get-started">Order Now</a>
            </div>
          </div>
        </div><!-- End Carousel Item -->

        <div class="carousel-item">
          <img src="assets/img/hero-carousel/hero-carousel-2.jpg" alt="">
          <div class="carousel-container">
            <h2>Selalu Fresh</h2>
            <p>Dengan bahan-bahan segar pilihan dan proses masak yang penuh dedikasi, setiap menu kami dirancang untuk memberikan pengalaman makan yang tak terlupakan. Nikmati juga berbagai pilihan minuman hangat dan dingin untuk melengkapi santapan Anda.</p>
            <div>
              {{-- <a href="#menu" class="btn-get-started">Our Menu</a> --}}
              <a href="{{ route('meja.store') }}" class="btn-get-started">Order Now</a>
            </div>
          </div>
        </div><!-- End Carousel Item -->

        <div class="carousel-item">
          <img src="assets/img/hero-carousel/hero-carousel-3.jpg" alt="">
          <div class="carousel-container">
            <h2>Bon appétit</h2>
            <p>Di A’P Steakhouse, bukan hanya rasa yang kami sajikan tapi juga kehangatan, kenyamanan, dan kenangan. Selamat menikmati!</p>
            <div>
              {{-- <a href="#menu" class="btn-get-started">Our Menu</a> --}}
              <a href="{{ route('meja.store') }}" class="btn-get-started">Order Now</a>
            </div>
          </div>
        </div><!-- End Carousel Item -->

        <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

        <ol class="carousel-indicators"></ol>

      </div>

    </section><!-- /Hero Section -->
