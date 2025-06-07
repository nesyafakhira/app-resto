<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>A’P Steakhouse</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="{{ asset('/template/Delicious/assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('/template/Delicious/assets/img/favicon.png') }}-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Satisfy:wght@400&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('/template/Delicious/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('/template/Delicious/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('/template/Delicious/assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('/template/Delicious/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('/template/Delicious/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
  <link href="{{ asset('/template/Delicious/assets/css/main.css') }}" rel="stylesheet">

<body class="index-page">

  @include('landing.header')

  <main class="main">

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

    <!-- Why Us Section -->
    <section id="why-us" class="why-us section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <div><span>Mengapa Memilih</span> <span class="description-title">A’P Steakhouse</span></div>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="card-item">
              <span>01</span>
              <h4><a href="" class="stretched-link">Kualitas Utama</a></h4>
              <p>A’P Steakhouse hadir sebagai pilihan utama karena kami mengutamakan kualitas, rasa, dan pelayanan terbaik.</p>
            </div>
          </div><!-- Card Item -->

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="card-item">
              <span>02</span>
              <h4><a href="" class="stretched-link">Menu Variatif</a></h4>
              <p> menyediakan beragam menu, sehingga pelanggan dapat menikmati hidangan yang sesuai selera.</p>
            </div>
          </div><!-- Card Item -->

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
            <div class="card-item">
              <span>03</span>
              <h4><a href="" class="stretched-link"></a>Suasana Hangat</h4>
              <p>Suasana restoran yang nyaman dan hangat membuat setiap kunjungan terasa istimewa</p>
            </div>
          </div><!-- Card Item -->

        </div>

      </div>

    </section><!-- /Why Us Section -->
  </main>

  <footer id="footer" class="footer dark-background">

    <div class="container copyright text-center mt-4">
        <p>© <span>Copyright</span> <strong class="px-1 sitename">A’P Steakhouse</strong> <span>All Rights
                Reserved</span></p>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you've purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
            by Kelompok Alpro
        </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ asset('/template/Delicious/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('/template/Delicious/assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('/template/Delicious/assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('/template/Delicious/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('/template/Delicious/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
  <script src="{{ asset('/template/Delicious/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('/template/Delicious/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

  <script>
        const paymentSummaryEl = document.getElementById('payment-summary');
        const paymentTotalEl = document.getElementById('payment-total');
        const paymentMethodSelect = document.getElementById('payment-method');
        const paymentInstruction = document.getElementById('payment-instruction');

        // Fill payment modal with cart data
        document.getElementById('paymentModal').addEventListener('show.bs.modal', () => {
            paymentSummaryEl.innerHTML = '';
            let total = 0;
            cart.forEach(item => {
            const li = document.createElement('li');
            li.className = 'list-group-item d-flex justify-content-between align-items-center';
            li.innerHTML = `${item.name} <span>$${item.price.toFixed(2)}</span>`;
            paymentSummaryEl.appendChild(li);
            total += item.price;
            });
            paymentTotalEl.textContent = `$${total.toFixed(2)}`;
            paymentInstruction.innerHTML = '';
            paymentMethodSelect.value = '';
        });

        // Show QR code or cash instruction
        paymentMethodSelect.addEventListener('change', () => {
            const method = paymentMethodSelect.value;
            if (method === 'qris') {
            paymentInstruction.innerHTML = `
                <p>Scan the QR code below to complete your payment:</p>
                <img src="https://via.placeholder.com/200x200.png?text=QR+Code" alt="QR Code" class="img-fluid">
            `;
            } else if (method === 'cash') {
            paymentInstruction.innerHTML = `<p>Please proceed to the cashier to complete your payment.</p>`;
            } else {
            paymentInstruction.innerHTML = '';
            }
        });

        // Handle payment done
        document.getElementById('payment-form').addEventListener('submit', function(e) {
        e.preventDefault();
        const name = document.getElementById('customerName').value.trim();
        const table = document.getElementById('tableNumber').value.trim();
        const method = paymentMethodSelect.value;

        if (!name || !table || !method) return alert("Please fill in all fields.");

        const modalEl = bootstrap.Modal.getInstance(document.getElementById('paymentModal'));
        modalEl.hide();

        new bootstrap.Modal(document.getElementById('paymentSuccessModal')).show();
        cart = [];
        renderCart();
        });
    </script>

    <script>
        const cartItemsEl = document.getElementById('cart-items');
        const cartTotalEl = document.getElementById('cart-total');
        const clearCartBtn = document.getElementById('clear-cart');
        let cart = [];
        document.querySelectorAll('.add-to-cart').forEach((btn) => {
            btn.addEventListener('click', function () {
            const menuItem = btn.closest('.menu-item');
            const name = menuItem.querySelector('.menu-content a').innerText;
            const priceText = menuItem.querySelector('.menu-content span').innerText;
            const price = parseFloat(priceText.replace('$', ''));

            cart.push({ name, price });
            renderCart();

            // Optional: open cart automatically
            const cartSidebar = new bootstrap.Offcanvas(document.getElementById('cartSidebar'));
            cartSidebar.show();
            });
        });
        function renderCart() {
            cartItemsEl.innerHTML = '';
            let total = 0;
            cart.forEach((item, index) => {
            const li = document.createElement('li');
            li.className = 'list-group-item d-flex justify-content-between align-items-center';
            li.innerHTML = `
                ${item.name} <span>$${item.price.toFixed(2)}</span>
            `;
            cartItemsEl.appendChild(li);
            total += item.price;
            });
            cartTotalEl.innerText = `$${total.toFixed(2)}`;
        }
        clearCartBtn.addEventListener('click', () => {
            cart = [];
            renderCart();
        });
    </script>

    <script>
        // Event for choosing table and auto-filling the payment modal
        document.querySelectorAll('.select-table').forEach(button => {
            button.addEventListener('click', function () {
            const tableNumber = this.getAttribute('data-table');
            const tableInput = document.getElementById('tableNumber');

            // Set value and open modal
            tableInput.value = tableNumber;

            // Open payment modal
            const paymentModal = new bootstrap.Modal(document.getElementById('paymentModal'));
            paymentModal.show();
            });
        });
        </script>


  <!-- Main JS File -->
  <script src="{{ asset('/template/Delicious/assets/js/main.js') }}"></script>

</body>

</html>
