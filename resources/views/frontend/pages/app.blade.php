<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    {{-- own css --}}
    <link rel="stylesheet" href="/frontend/css/home.css">
    {{-- google font css --}}
    <link
        href="https://fonts.googleapis.com/css2?family=Cedarville+Cursive&family=Dancing+Script:wght@700&family=Mulish:ital,wght@0,200;1,200&family=Neonderthaw&family=Roboto:wght@300&family=The+Nautigal:wght@700&display=swap"
        rel="stylesheet">
    {{-- fontawesome cdn --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- own css --}}

    <link rel="stylesheet" href="/frontend/css/about.css">
    <link rel="stylesheet" href="/frontend/css/service.css">
    <link rel="stylesheet" href="/frontend/css/gallery.css">
    <link rel="stylesheet" href="/frontend/css/contact.css">


    <title>Nanny</title>
    <script src="https://khalti.s3.ap-south-1.amazonaws.com/KPG/dist/2020.12.17.0.0.0/khalti-checkout.iffe.js"></script>
</head>


<body>
    @include('sweetalert::alert')

    <nav class="navbar">
        <div class="d-none d-lg-block">
            <div class="nav">

                <h1 class="logo " style="font-family: 'Dancing Script', cursive">NANNY</h1>
                <div class="nav-items">
                    <form action="{{ route('search') }}" method="get">
                        <div class="search">
                            {{-- <input type="text" class="search-box" placeholder="search"> --}}
                            <input type="text" class="search-box" name="skill" placeholder="Search by Skill">

                            <button class="search-btn" type="submit">Search</button>
                        </div>
                    </form>
                    <a href="/customer/hire"> <i class="fa-solid fa-circle-user"></i></a>

                </div>
            </div>

            <ul class="links-container">
                <li class="link-item"><a href="/" class="link">Home</a></li>
                <li class="link-item"><a href="/about" class="link">About Us</a></li>
                {{-- <li class="link-item"><a href="/nany" class="link">Nanny</a></li> --}}
                <li class="link-item"><a href="/category" class="link">Category</a></li>
                <li class="link-item"><a href="/gallery" class="link">Gallery</a></li>
                <li class="link-item"><a href="/contact" class="link">Contact</a></li>

                @if (Auth::user())
                    <li class="link-item">
                        <a href="/wishlist" class="link"><i class="fa fa-heart" aria-hidden="true"></i>
                            Wishlists</a>
                    </li>
                @endif

                @if (!Auth::user())
                    <li class="link-item"><a href="/login" class="link">Login</a></li>
                @else
                    <li class="link-item">
                        <a class="link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>

                    </li>
                @endif

            </ul>
        </div>
        {{-- Mobile View --}}
        <div class="d-block d-lg-none w-100">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container">
                    <a class="navbar-brand fs-2" href="#" style="font-family: 'Dancing Script', cursive">
                        Welcome
                    </a>
                    <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                        <div class="search" style="width: 90vw; margin:0%;">
                            <form action="{{ route('search') }}">
                                <input type="text" class="search-box" name="skill" placeholder="search">
                                <button type="submit" class="search-btn btn-sm fs-6">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </button>
                            </form>
                        </div>
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="/">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/about">About Us</a>
                            </li>
                            {{-- <li class="nav-item">
                                <a class="nav-link" href="/nany">Nany</a>
                            </li> --}}
                            <li class="nav-item">
                                <a class="nav-link" href="/category">Category</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/gallery">Gallery</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/contact">Contact</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/login">Login</a>
                            </li>
                            <li class="link-item">
                                <a href="/wishlists"><i class="fa fa-heart" aria-hidden="true"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>

    </nav>
    @yield('content')



    <div class="container-fluid bg-dark p-4 ">
        <div class="container  ">
            <div class="row  ">
                <div class="col-md-4 mt-4 text-white px-4  ">
                    <h2> <strong>Our Policy</strong></h2>
                    <div class="text text-white fs-6 fw-bold  mt-3">
                        <h3>Please Read</h3>
                        <a href="/terms">Terms and Condition</a> <br>
                        <a href="/terms">Before Registering For Nanny</a> <br>
                        <a href="/terms">Before Hiring Nanny</a>

                    </div>

                    <div class="row mt-4  text-white fs-5  " type="button" style="max-width: 20vw; ">
                        <div class="col-md-2 ">
                            <a href="https://www.facebook.com/"
                                class="fab fa-facebook  btn-outline-primary text-decoration-none" target="_blank"></a>

                        </div>
                        <div class="col-md-2 ">
                            <a href="https://twitter.com/?lang=en"
                                class="fab fa-twitter btn-outline-primary text-decoration-none" target="_blank"></a>

                        </div>
                        <div class="col-md-2 ">
                            <a href="https://www.google.com/"
                                class="fab fa-google-plus-g btn-outline-primary text-decoration-none"
                                target="_blank"></a>

                        </div>
                        <div class="col-md-2 ">
                            <a href="https://www.pinterest.com/"
                                class="fab fa-pinterest btn-outline-primary text-decoration-none" target="_blank"></a>

                        </div>
                        <div class="col-md-2">
                            <a href="https://www.linkedin.com/home/?originalSubdomain=np"
                                class="fab fa-linkedin btn-outline-primary style-none text-decoration-none"
                                target="_blank"></a>

                        </div>
                        <div class="col-md-2 ">
                            <a href="https://www.whatsapp.com/"
                                class="fab fa-whatsapp btn-outline-primary text-decoration-none" target="_blank"></a>

                        </div>
                    </div>

                </div>
                <div class="col-md-4 mt-4  text-white px-4">
                    <h2> <strong>Opening Time</strong></h2>
                    <div class="text-white mt-3 fs-6 fw-bold">
                        <p> Sunday - Monday 10:00 AM - 7PM </p>
                        <p> Tuesday - Wednesday 10:00 AM - 7PM</p>
                        <p> Thursday - Friday 10:00 AM - 7PM</p>
                        <p> Saturday - 10:00 AM - 1:00AM</p>
                    </div>

                </div>
                <div class="col-md-4 mt-4 text-white px-4 ">
                    <h2><strong class="text-white">Contact Us</strong></h2>
                    <div class="contact text-white mt-3 fs-6 fw-bold">
                        <P>Location : Dharan</P>
                        <P>Phone No : +977 9842946483</P>
                        <P>Email : nanny@nanny.com</P>

                    </div>
                    <div>
                        <a href="/nany/register" class="btn btn-warning btn-sm">Register as Nanny</a>
                    </div>

                    <div>
                        <button id="payment-button" class="btn btn-warning btn-sm my-2">Pay with Khalti</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- end footer 1 -->

    <!-- footer page 2-->
    <div class="container-fluid  mt-0 ">

        <div class="footer display-flex justify-content-center  text-center">
            <p class="fs-6 p-2  text-dark">2022 All Right Reserved. Developed By Nanny@Nanny.com</p>

        </div>
    </div>

    <!-- End Footer page 2 -->







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>


    <script>
        var config = {
            // replace the publicKey with yours
            "publicKey": "test_secret_key_263a84aff37a41c799c8811c317e9b5c",
            "productIdentity": "1234567890",
            "productName": "Dragon",
            "productUrl": "http://gameofthrones.wikia.com/wiki/Dragons",
            "paymentPreference": [
                "KHALTI",
                "EBANKING",
                "MOBILE_BANKING",
                "CONNECT_IPS",
                "SCT",
            ],
            "eventHandler": {
                onSuccess(payload) {
                    // hit merchant api for initiating verfication
                    console.log(payload);
                },
                onError(error) {
                    console.log(error);
                },
                onClose() {
                    console.log('widget is closing');
                }
            }
        };

        var checkout = new KhaltiCheckout(config);
        var btn = document.getElementById("payment-button");
        btn.onclick = function() {
            // minimum transaction amount must be 10, i.e 1000 in paisa.
            checkout.show({
                amount: 1000
            });
        }
    </script>
    <!-- Paste this code anywhere in you body tag -->
</body>

</html>
