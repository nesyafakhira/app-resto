<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>App Resto</title>
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
            <h2><span>Delicious</span> Restaurant</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            <div>
              {{-- <a href="#menu" class="btn-get-started">Our Menu</a> --}}
              <a href="#book-a-table" class="btn-get-started">Order Now</a>
            </div>
          </div>
        </div><!-- End Carousel Item -->

        <div class="carousel-item">
          <img src="assets/img/hero-carousel/hero-carousel-2.jpg" alt="">
          <div class="carousel-container">
            <h2>At vero eos et accusamus</h2>
            <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut.</p>
            <div>
              {{-- <a href="#menu" class="btn-get-started">Our Menu</a> --}}
              <a href="#book-a-table" class="btn-get-started">Order Now</a>
            </div>
          </div>
        </div><!-- End Carousel Item -->

        <div class="carousel-item">
          <img src="assets/img/hero-carousel/hero-carousel-3.jpg" alt="">
          <div class="carousel-container">
            <h2>Temporibus autem quibusdam</h2>
            <p>Beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt omnis iste natus error sit voluptatem accusantium.</p>
            <div>
              {{-- <a href="#menu" class="btn-get-started">Our Menu</a> --}}
              <a href="#book-a-table" class="btn-get-started">Order Now</a>
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

    <!-- Book A Table Section -->
    <section id="book-a-table" class="book-a-table section">

      {{-- <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Book A Table</h2>
        <div><span>Book a</span> <span class="description-title">Table</span></div>
      </div> --}}

        <div class="container py-5">
            <h1 class="mb-4 text-center">Pilih Meja Restoran</h1>
            <div class="row g-4">

            <!-- Meja 1 -->
            <div class="col-md-4">
            <div class="card table-card border-success">
                <div class="card-body">
                <h5 class="card-title">Meja #1</h5>
                <p class="card-text text-success">Status: Kosong</p>
                <button class="btn btn-primary w-100 select-table" data-table="1">Pilih Meja</button>
                </div>
            </div>
            </div>

            <!-- Meja 2 -->
                <div class="col-md-4">
                <div class="card table-card border-danger">
                    <div class="card-body">
                    <h5 class="card-title">Meja #2</h5>
                    <p class="card-text text-danger">Status: Penuh</p>
                    <button class="btn btn-secondary w-100" disabled>Sudah Penuh</button>
                    </div>
                </div>
                </div>

            <!-- Meja 3 -->
            <div class="col-md-4">
            <div class="card table-card border-success">
                <div class="card-body">
                <h5 class="card-title">Meja #3</h5>
                <p class="card-text text-success">Status: Kosong</p>
                <button class="btn btn-primary w-100 select-table" data-table="3">Pilih Meja</button>
                </div>
            </div>
            </div>

                <!-- Tambahkan meja lainnya sesuai kebutuhan -->
            </div>
        </div>

      <!-- End Section Title -->

      {{-- <div class="container">

        <div class="row g-0" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-4 reservation-img" style="background-image: url({{ asset('/template/Delicious/assets/img/reservation.jpg')  }});"></div>

          <div class="col-lg-8 d-flex align-items-center reservation-form-bg" data-aos="fade-up" data-aos-delay="200">
            <form action="forms/book-a-table.php" method="post" role="form" class="php-email-form">
              <div class="row gy-4">
                <div class="col-lg-4 col-md-6">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required="">
                </div>
                <div class="col-lg-4 col-md-6">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required="">
                </div>
                <div class="col-lg-4 col-md-6">
                  <input type="text" class="form-control" name="phone" id="phone" placeholder="Your Phone" required="">
                </div>
                <div class="col-lg-4 col-md-6">
                  <input type="date" name="date" class="form-control" id="date" placeholder="Date" required="">
                </div>
                <div class="col-lg-4 col-md-6">
                  <input type="time" class="form-control" name="time" id="time" placeholder="Time" required="">
                </div>
                <div class="col-lg-4 col-md-6">
                  <input type="number" class="form-control" name="people" id="people" placeholder="# of people" required="">
                </div>
              </div>

              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
              </div>

              <div class="text-center mt-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your booking request was sent. We will call back or send an Email to confirm your reservation. Thank you!</div>
                <button type="submit">Book a Table</button>
              </div>
            </form>
          </div><!-- End Reservation Form -->

        </div>

      </div> --}}

    </section><!-- /Book A Table Section -->

    <!-- Why Us Section -->
    <section id="why-us" class="why-us section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Why Us</h2>
        <div><span>Why choose</span> <span class="description-title">Our Restaurant</span></div>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="card-item">
              <span>01</span>
              <h4><a href="" class="stretched-link">Lorem Ipsum</a></h4>
              <p>Ulamco laboris nisi ut aliquip ex ea commodo consequat. Et consectetur ducimus vero placeat</p>
            </div>
          </div><!-- Card Item -->

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="card-item">
              <span>02</span>
              <h4><a href="" class="stretched-link">Repellat Nihil</a></h4>
              <p>Dolorem est fugiat occaecati voluptate velit esse. Dicta veritatis dolor quod et vel dire leno para dest</p>
            </div>
          </div><!-- Card Item -->

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
            <div class="card-item">
              <span>03</span>
              <h4><a href="" class="stretched-link">Ad ad velit qui</a></h4>
              <p>Molestiae officiis omnis illo asperiores. Aut doloribus vitae sunt debitis quo vel nam quis</p>
            </div>
          </div><!-- Card Item -->

        </div>

      </div>

    </section><!-- /Why Us Section -->


    <!-- Menu Section -->
    <section id="menu" class="menu section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Menu</h2>
        <div class="text-end">
        <button class="btn btn-sm btn-primary" data-bs-toggle="offcanvas" data-bs-target="#cartSidebar">
            🛒 View Cart
        </button>
        </div>

        <div><span>Check Our Tasty</span> <span class="description-title">Menu</span></div>
      </div><!-- End Section Title -->

      <div class="container isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul class="menu-filters isotope-filters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-starters">Starters</li>
              <li data-filter=".filter-salads">Salads</li>
              <li data-filter=".filter-specialty">Specialty</li>
            </ul>
          </div>
        </div><!-- Menu Filters -->

        <div class="row isotope-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-6 menu-item isotope-item filter-starters">
            <img src="{{ asset('/template/Delicious/assets/img/menu/lobster-bisque.jpg') }}" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Lobster Bisque</a><span>$5.95</span>
            </div>
            <div class="menu-ingredients">
              Lorem, deren, trataro, filede, nerada
            </div>
            <div class="text-end mt-2">
                <button class="btn btn-sm btn-outline-primary add-to-cart">+ Add to Cart</button>
            </div>
          </div><!-- Menu Item -->

          <div class="col-lg-6 menu-item isotope-item filter-specialty">
            <img src="{{ asset('/template/Delicious/assets/img/menu/bread-barrel.jpg') }}" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Bread Barrel</a><span>$6.95</span>
            </div>
            <div class="menu-ingredients">
              Lorem, deren, trataro, filede, nerada
            </div>
            <div class="text-end mt-2">
                <button class="btn btn-sm btn-outline-primary add-to-cart">+ Add to Cart</button>
            </div>
          </div><!-- Menu Item -->

          <div class="col-lg-6 menu-item isotope-item filter-starters">
            <img src="{{ asset('/template/Delicious/assets/img/menu/cake.jpg') }}" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Crab Cake</a><span>$7.95</span>
            </div>
            <div class="menu-ingredients">
              A delicate crab cake served on a toasted roll with lettuce and tartar sauce
            </div>
            <div class="text-end mt-2">
                <button class="btn btn-sm btn-outline-primary add-to-cart">+ Add to Cart</button>
            </div>
          </div><!-- Menu Item -->

          <div class="col-lg-6 menu-item isotope-item filter-salads">
            <img src="{{ asset('/template/Delicious/assets/img/menu/caesar.jpg') }}" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Caesar Selections</a><span>$8.95</span>
            </div>
            <div class="menu-ingredients">
              Lorem, deren, trataro, filede, nerada
            </div>
            <div class="text-end mt-2">
                <button class="btn btn-sm btn-outline-primary add-to-cart">+ Add to Cart</button>
            </div>
          </div><!-- Menu Item -->

          <div class="col-lg-6 menu-item isotope-item filter-specialty">
            <img src="{{ asset('/template/Delicious/assets/img/menu/tuscan-grilled.jpg') }}" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Tuscan Grilled</a><span>$9.95</span>
            </div>
            <div class="menu-ingredients">
              Grilled chicken with provolone, artichoke hearts, and roasted red pesto
            </div>
            <div class="text-end mt-2">
                <button class="btn btn-sm btn-outline-primary add-to-cart">+ Add to Cart</button>
            </div>
          </div><!-- Menu Item -->

          <div class="col-lg-6 menu-item isotope-item filter-starters">
            <img src="{{ asset('/template/Delicious/assets/img/menu/mozzarella.jpg') }}" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Mozzarella Stick</a><span>$4.95</span>
            </div>
            <div class="menu-ingredients">
              Lorem, deren, trataro, filede, nerada
            </div>
            <div class="text-end mt-2">
                <button class="btn btn-sm btn-outline-primary add-to-cart">+ Add to Cart</button>
            </div>
          </div><!-- Menu Item -->

          <div class="col-lg-6 menu-item isotope-item filter-salads">
            <img src="{{ asset('/template/Delicious/assets/img/menu/greek-salad.jpg') }}" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Greek Salad</a><span>$9.95</span>
            </div>
            <div class="menu-ingredients">
              Fresh spinach, crisp romaine, tomatoes, and Greek olives
            </div>
            <div class="text-end mt-2">
                <button class="btn btn-sm btn-outline-primary add-to-cart">+ Add to Cart</button>
            </div>
          </div><!-- Menu Item -->

          <div class="col-lg-6 menu-item isotope-item filter-salads">
            <img src="{{ asset('/template/Delicious/assets/img/menu/spinach-salad.jpg') }}" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Spinach Salad</a><span>$9.95</span>
            </div>
            <div class="menu-ingredients">
              Fresh spinach with mushrooms, hard boiled egg, and warm bacon vinaigrette
            </div>
            <div class="text-end mt-2">
                <button class="btn btn-sm btn-outline-primary add-to-cart">+ Add to Cart</button>
            </div>
          </div><!-- Menu Item -->

          <div class="col-lg-6 menu-item isotope-item filter-specialty">
            <img src="{{  asset('/template/Delicious/assets/img/menu/lobster-roll.jpg') }}" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Lobster Roll</a><span>$12.95</span>
            </div>
            <div class="menu-ingredients">
              Plump lobster meat, mayo and crisp lettuce on a toasted bulky roll
            </div>
            <div class="text-end mt-2">
                <button class="btn btn-sm btn-outline-primary add-to-cart">+ Add to Cart</button>
            </div>
          </div><!-- Menu Item -->

        </div><!-- Menu Container -->

      </div>

    </section>
    <!-- /Menu Section -->

    <!-- Cart Sidebar -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="cartSidebar" aria-labelledby="cartSidebarLabel">
    <div class="offcanvas-header">
        <h5 id="cartSidebarLabel">🛒 Your Cart</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
    </div>
    <div class="offcanvas-body">
        <ul id="cart-items" class="list-group mb-3"></ul>
        <div class="d-flex justify-content-between">
        <strong>Total:</strong>
        <strong id="cart-total">$0.00</strong>
        </div>
        <div class="mt-3 text-end">
        <button class="btn btn-sm btn-outline-danger" id="clear-cart">Clear Cart</button>
        <div class="mt-2 text-end">
        <button class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#paymentModal">Proceed to Payment</button>
        </div>
        </div>
    </div>
    </div>

    <!-- Payment Modal -->
    <div class="modal fade" id="paymentModal" tabindex="-1" aria-labelledby="paymentModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="paymentModalLabel">🧾 Payment Details</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
            <form id="payment-form">
            <div class="mb-3">
                <label for="customerName" class="form-label">Customer Name</label>
                <input type="text" class="form-control" id="customerName" required>
            </div>
            <div class="mb-3">
                <label for="tableNumber" class="form-label">Table Number</label>
                <input type="number" class="form-control" id="tableNumber" required>
            </div>

            <h6>Order Summary</h6>
            <ul class="list-group mb-3" id="payment-summary"></ul>
            <div class="d-flex justify-content-between mb-3">
                <strong>Total:</strong>
                <strong id="payment-total">$0.00</strong>
            </div>

            <div class="mb-3">
                <label class="form-label">Payment Method</label>
                <select class="form-select" id="payment-method" required>
                <option value="">-- Select Payment Method --</option>
                <option value="qris">QRIS</option>
                <option value="cash">Cash</option>
                </select>
            </div>

            <div id="payment-instruction" class="text-center mt-3"></div>
            </form>
        </div>
        <div class="modal-footer">
            <button type="submit" form="payment-form" class="btn btn-success">Done</button>
        </div>
        </div>
    </div>
    </div>

    <!-- Payment Success Modal -->
    <div class="modal fade" id="paymentSuccessModal" tabindex="-1" aria-labelledby="paymentSuccessModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content text-center">
        <div class="modal-header">
            <h5 class="modal-title w-100" id="paymentSuccessModalLabel">✅ Payment Successful</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
            <p>Thank you! Your order has been received.</p>
        </div>
        </div>
    </div>
    </div>


    {{-- <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <div><span>Check Our</span> <span class="description-title">Contact</span></div>
      </div><!-- End Section Title -->

      <div class="mb-5">
        <iframe style="width: 100%; height: 400px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen=""></iframe>
      </div><!-- End Google Maps -->

      <div class="container" data-aos="fade">

        <div class="row gy-5 gx-lg-5">

          <div class="col-lg-4">

            <div class="info">
              <h3>Get in touch</h3>
              <p>Et id eius voluptates atque nihil voluptatem enim in tempore minima sit ad mollitia commodi minus.</p>

              <div class="info-item d-flex">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                  <h4>Location:</h4>
                  <p>A108 Adam Street, New York, NY 535022</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-envelope flex-shrink-0"></i>
                <div>
                  <h4>Email:</h4>
                  <p>info@example.com</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-phone flex-shrink-0"></i>
                <div>
                  <h4>Call:</h4>
                  <p>+1 5589 55488 55</p>
                </div>
              </div><!-- End Info Item -->

            </div>

          </div>

          <div class="col-lg-8">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required="">
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required="">
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required="">
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" placeholder="Message" required=""></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>

    </section><!-- /Contact Section --> --}}

  </main>

  <footer id="footer" class="footer dark-background">

    <div class="container">
      <div class="row gy-3">
        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-geo-alt icon"></i>
          <div class="address">
            <h4>Address</h4>
            <p>A108 Adam Street</p>
            <p>New York, NY 535022</p>
            <p></p>
          </div>

        </div>

        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-telephone icon"></i>
          <div>
            <h4>Contact</h4>
            <p>
              <strong>Phone:</strong> <span>+1 5589 55488 55</span><br>
              <strong>Email:</strong> <span>info@example.com</span><br>
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-clock icon"></i>
          <div>
            <h4>Opening Hours</h4>
            <p>
              <strong>Mon-Sat:</strong> <span>11AM - 23PM</span><br>
              <strong>Sunday</strong>: <span>Closed</span>
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <h4>Follow Us</h4>
          <div class="social-links d-flex">
            <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">Delicious</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
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
