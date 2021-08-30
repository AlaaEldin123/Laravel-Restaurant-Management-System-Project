<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/public">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap"
        rel="stylesheet">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


    <title>Klassy Cafe - Restaurant HTML Template</title>
    <!--

TemplateMo 558 Klassy Cafe

https://templatemo.com/tm-558-klassy-cafe

-->
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-klassy-cafe.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">

</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->


    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo">
                            <img src="assets/images/klassy-logo.png" align="klassy cafe html template">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="#about">About</a></li>

                            <!--
                            <li class="submenu">
                                <a href="javascript:;">Drop Down</a>
                                <ul>
                                    <li><a href="#">Drop Down Page 1</a></li>
                                    <li><a href="#">Drop Down Page 2</a></li>
                                    <li><a href="#">Drop Down Page 3</a></li>
                                </ul>
                            </li>
                        -->
                            <li class="scroll-to-section"><a href="#menu">Menu</a></li>
                            <li class="scroll-to-section"><a href="#chefs">Chefs</a></li>
                            <li class="submenu">
                                <a href="javascript:;">Features</a>
                                <ul>
                                    <li><a href="#">Features Page 1</a></li>
                                    <li><a href="#">Features Page 2</a></li>
                                    <li><a href="#">Features Page 3</a></li>
                                    <li><a href="#">Features Page 4</a></li>
                                </ul>
                            </li>
                            <!-- <li class=""><a rel="sponsored" href="https://templatemo.com" target="_blank">External URL</a></li> -->
                            <li class="scroll-to-section"><a href="#reservation">Contact Us</a></li>
                            <li>

                            <li class="scroll-to-section">
                                @auth
                                    <a href="{{ url('/showcart', Auth::user()->id) }}">
                                        Cart{{ $count }}
                                    </a>
                                @endauth
                                @guest
                                    Cart[0]
                                @endguest

                            </li>



                            <li>






                                @if (Route::has('login'))
                                    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                        @auth
                                <li>

                                    <x-app-layout>

                                    </x-app-layout>

                                </li>
                            @else
                                <li> <a href="{{ route('login') }}" class="text-sm text-gray-700 un  derline">Log
                                        in</a></li>

                                @if (Route::has('register'))
                                    <li> <a href="{{ route('register') }}"
                                            class="ml-4 text-sm text-gray-700 underline">Register</a></li>
                                @endif
                            @endauth
                </div>
                @endif

                </li>

                </ul>
                <a class='menu-trigger'>
                    <span>Menu</span>
                </a>
                <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
        </div>
    </header>



    <div class="container ">

        <div class="row">
            <div class="col-md-12">
                <div class="card-body">
                    <h4 class="text-center card-title">Cart</h4>
                    <div class=" table-responsive">
                        <table style="width: 100%" class="border table-hover">
                            <thead>
                                <tr class="table-danger">

                                    <th>Food Name</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Action</th>
                                </tr>

                            </thead>
                            <hr>
                            <tbody>
                                <form method="post" action="{{ url('/orderconfirm') }}" enctype="multipart/form-data">
                                    @csrf
                                    @foreach ($data as $data)


                                        <tr>
                                            <td scope="row">
                                                <input name="foodname[]" type="text" value=" {{ $data->title }}"
                                                    hidden="">
                                                {{ $data->title }}
                                            </td>
                                            <td> <input name="price[]" type="text" value=" {{ $data->price }}"
                                                    hidden="">

                                                {{ $data->price }}</td>

                                            <td><input name="quantity[]" type="text" value=" {{ $data->quanity }}"
                                                    hidden="">{{ $data->quanity }}</td>



                                        </tr>


                                    @endforeach

                                    @foreach ($data2 as $data2)
                                        <tr style="position: relative; top:-76px; left:850px">
                                            <td><a href="{{ url('/remove', $data2->id) }}"
                                                    class="btn btn-danger">Remove</a>
                                            </td>
                                        </tr>
                                    @endforeach




                            </tbody>
                        </table>


                    </div>
                    <div class="text-center">
                        <button class="btn btn-primary" id="order">Order Now</button>
                    </div>
                </div>
            </div>
        </div>

    </div>




    <div class="container" id="appear" style="display: none">

        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Order form</h4>
                        <hr>


                        <div class="form-group">
                            <label for="exampleInputUsername1">Name</label>
                            <input type="text" name="name" placeholder="Write a Name" required class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Phone</label>
                            <input class="form-control" type="text" name="phone" placeholder="Write a Phone" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Address</label>
                            <input type="text" class="form-control" name="address" placeholder="Write a Address"
                                required>
                        </div>

                        <button type="submit" class="btn btn-primary mr-2">Order Submit</button>

                        <button id="close" type="submit" class="btn btn-danger mr-2">Cancel</button>

                        </form>

                    </div>
                </div>
            </div>

        </div>
    </div>



    <script>
        $("#order").click(
            function() {
                $("#appear").show();
            }


        );

        $("#close").click(
            function() {
                $("#appear").hide();
            }


        );
    </script>


    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/accordions.js"></script>
    <script src="assets/js/datepicker.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/isotope.js"></script>

    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>
    <script>
        $(function() {
            var selectedClass = "";
            $("p").click(function() {
                selectedClass = $(this).attr("data-rel");
                $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("." + selectedClass).fadeOut();
                setTimeout(function() {
                    $("." + selectedClass).fadeIn();
                    $("#portfolio").fadeTo(50, 1);
                }, 500);

            });
        });
    </script>
</body>

</html>
