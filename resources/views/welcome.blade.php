<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Delicious - Cafe & Restaurant Mobile Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1  maximum-scale=1 user-scalable=no" />
    <meta name="mobile-web-app-capable" content="yes" />
    <meta name="HandheldFriendly" content="True" />

    <link rel="shortcut icon" href="img/favicon.png" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/materialize.min.css" />
    <link rel="stylesheet" href="css/slick.css" />
    <link rel="stylesheet" href="css/slick-theme.css" />
    <link rel="stylesheet" href="css/owl.carousel.css" />
    <link rel="stylesheet" href="css/owl.theme.css" />
    <link rel="stylesheet" href="css/owl.transitions.css" />
    <link rel="stylesheet" href="css/style.css" />
</head>

<body>
    <!-- navbar -->
    <div class="navbar">
        <div class="container">
            <div class="site-title">
                <a href="index.html" class="logo">
                    <h1>Delicious</h1>
                </a>
            </div>
        </div>
    </div>
    <!-- end navbar -->

    <!-- panel control right -->
    <div class="panel-control-right">
        <div id="slide-out-right" class="side-nav">
            <div class="row entry">
                <div class="col s4">
                    <img src="img/cart1.png" alt="" />
                </div>
                <div class="col s6">
                    <div class="desc">
                        <div class="rating">
                            <span class="active"><i class="fa fa-star"></i></span>
                            <span class="active"><i class="fa fa-star"></i></span>
                            <span class="active"><i class="fa fa-star"></i></span>
                            <span class="active"><i class="fa fa-star"></i></span>
                            <span class=""><i class="fa fa-star"></i></span>
                        </div>
                        <h6><span>$20.00</span></h6>
                    </div>
                </div>
                <div class="col s2">
                    <div class="action">
                        <i class="fa fa-remove"></i>
                    </div>
                </div>
            </div>
            <div class="row entry">
                <div class="col s4">
                    <img src="img/cart2.png" alt="" />
                </div>
                <div class="col s6">
                    <div class="desc">
                        <h6>Drink Title</h6>
                        <div class="rating">
                            <span class="active"><i class="fa fa-star"></i></span>
                            <span class="active"><i class="fa fa-star"></i></span>
                            <span class="active"><i class="fa fa-star"></i></span>
                            <span class=""><i class="fa fa-star"></i></span>
                            <span class=""><i class="fa fa-star"></i></span>
                        </div>
                        <h6><span>$10.00</span></h6>
                    </div>
                </div>
                <div class="col s2">
                    <div class="action">
                        <i class="fa fa-remove"></i>
                    </div>
                </div>
            </div>
            <div class="row price">
                <div class="col s8">
                    <h6>Total</h6>
                </div>
                <div class="col s4">
                    <h6>$30.00</h6>
                </div>
            </div>
            <ul>
                <li>
                    <button class="button">Reservation</button>
                </li>
                <li>
                    <button class="button">View Cart</button>
                </li>
            </ul>
        </div>
    </div>
    <!-- end panel control right -->

    <!-- menu-grid -->
    <div class="menu-grid app-pages app-section">
        <div class="container">
            <div class="pages-title">
                <h3>Menu Grid</h3>
            </div>
            <div class="row">
                {{-- @foreach ($menus as $menu)
                    <div class="col s6">
                        <div class="entry">
                            <img src="{{ $menu->getImage() }}" alt="" />
                            <h4><a href="">{{ $menu->nama }}</a></h4>
                            <div class="price">
                                <h5> {{ $menu->jumlah_stok }} </h5>
                            </div>
                            <div class="price">
                                <h5> {{ $menu->kategori }} </h5>
                            </div>
                            <div class="price">
                                <h5> {{ $menu->harga }} </h5>
                            </div>
                            <div class="price">
                                <h5> {{ $menu->deskripsi }} </h5>
                            </div>
                        </div>
                    </div>
                @endforeach --}}
            </div>
        </div>
    </div>
    <!-- end menu grid -->

    <!-- footer -->
    <footer>
        <div class="container">
            <h6>Find & follow us</h6>
            <ul class="icon-social">
                <li class="facebook">
                    <a href=""><i class="fa fa-facebook"></i></a>
                </li>
                <li class="twitter">
                    <a href=""><i class="fa fa-twitter"></i></a>
                </li>
                <li class="google">
                    <a href=""><i class="fa fa-google"></i></a>
                </li>
                <li class="instagram">
                    <a href=""><i class="fa fa-instagram"></i></a>
                </li>
                <li class="rss">
                    <a href=""><i class="fa fa-rss"></i></a>
                </li>
            </ul>
            <div class="tel-fax-mail">
                <ul>
                    <li><span>Tel:</span> 900000o02</li>
                    <li><span>Fax:</span> 0400000o98</li>
                    <li><span>Email:</span> info@youremail.com</li>
                </ul>
            </div>
            <div class="ft-bottom">
                <span>Copyright © 2016 All Rights Reserved </span>
            </div>
        </div>
    </footer>
    <!-- end footer -->

    <!-- script -->
    <script src="js/jquery.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>
