<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Shopping</title>
    {{-- <link rel="stylesheet" href="style.css" /> --}}
    @include('newUser.partials.style')
</head>

<body>
    <!-- navbar -->
    <div class="navbar navbar-expand-lg navbar-light bg-white py-4 fixed-top">
        <div class="container">
            <!-- logo & brand -->
            <a href="index.html"
                class="navbar-brand d-flex justify-content-between align-items-center order-0 order-lg-0">
                <img src="images/shopping-bag-icon.png" alt="" srcset="" />
                <span class="text-uppercase fw-lighter ms-auto">E-shop</span>
            </a>
            <!-- badge -->
            <div class="order-lg-3">
                <button type="button" class="btn position-relative">
                    <i class="fa fa-shopping-cart"></i>
                    <span class="position-absolute top-0 start-100 translate-middle badge badge1">6</span>
                </button>
                <button type="button" class="btn position-relative">
                    <i class="fa fa-heart"></i>
                    <span class="position-absolute top-0 start-100 translate-middle badge badge1">5</span>
                </button>
                <button type="button" class="btn position-relative">
                    <i class="fa fa-search"></i>
                </button>
            </div>
            <!-- toggle button -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- end badge -->

            <!-- button items -->
            <div class="collapse navbar-collapse order-1 order-lg-2" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0 text-center">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#header">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#collection">collection</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#special-selection">specials</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#latest-blog">blogs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about-us">about us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#popular">popular</a>
                    </li>
                </ul>
            </div>
            <!-- end button items -->
        </div>
    </div>
    <!-- end of navbar -->

    <!-- header  -->
    <header id="header" class="vh-100 carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner container h-100 d-flex align-items-center">
            <div class="text-center carousel-item active">
                <h2 class="text-capitalize text-black">best collection</h2>
                <h1 class="text-uppercase py-2 text-black">new arrivals</h1>
                <a href="" class="btn1 text-uppercase mt-3">shop now </a>
            </div>
            <div class="text-center carousel-item">
                <h2 class="text-capitalize text-black">best price & offer</h2>
                <h1 class="text-uppercase py-2 text-black">new season</h1>
                <a href="" class="btn1 text-uppercase mt-3">buy now </a>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#header" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#header" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </header>
    <!-- end of header -->

    <!-- collection -->
    <section id="collection" class="py-5">
        <div class="container">
            <div class="section-title text-center">
                <h2 class="position-relative d-inline-block">New Collection</h2>
            </div>

            <div class="row g-0">
                <div class="d-flex flex-wrap justify-content-center mt-5 filter-button-group">
                    <button data-filter="*" type="button" class="btn1 text-dark m-2 active-filter-btn">
                        All
                    </button>
                    <button data-filter=".best" type="button" class="btn1 text-dark m-2">
                        Best Sellers
                    </button>
                    <button data-filter=".feat" type="button" class="btn1 text-dark m-2">
                        Featured
                    </button>
                    <button data-filter=".new" type="button" class="btn1 text-dark m-2">
                        New Arrival
                    </button>
                </div>

                <div class="collection-list mt-4 row gy-3">
                    <div class="col-lg-3 col-xl-3 best">
                        <div class="collection-img">
                            <img src="{{ asset('frontend/images/c_formal_gray_shirt.png') }}" alt=""
                                srcset="" class="w-100" />
                            <span
                                class="span-style text-white d-flex align-items-center justify-content-center">scale</span>
                        </div>
                        <div class="text-center">
                            <div class="rating mt-3">
                                <span class="text-primary"><i class="fas fa-star"></i></span>
                                <span class="text-primary"><i class="fas fa-star"></i></span>
                                <span class="text-primary"><i class="fas fa-star"></i></span>
                                <span class="text-primary"><i class="fas fa-star"></i></span>
                                <span class="text-primary"><i class="fas fa-star"></i></span>
                            </div>
                            <p class="text-capitalize my-1">gray shirt</p>
                            <span class="fw-bold">$45.50</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-xl-3 feat">
                        <div class="collection-img">
                            <img src="{{ asset('frontend/images/c_pant_girl.png') }}" alt="" srcset=""
                                class="w-100" />
                            <span
                                class="span-style text-white d-flex align-items-center justify-content-center">scale</span>
                        </div>
                        <div class="text-center">
                            <div class="rating mt-3">
                                <span class="text-primary"><i class="fas fa-star"></i></span>
                                <span class="text-primary"><i class="fas fa-star"></i></span>
                                <span class="text-primary"><i class="fas fa-star"></i></span>
                                <span class="text-primary"><i class="fas fa-star"></i></span>
                                <span class="text-primary"><i class="fas fa-star"></i></span>
                            </div>
                            <p class="text-capitalize my-1">gray shirt</p>
                            <span class="fw-bold">$45.50</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-xl-3 best">
                        <div class="collection-img">
                            <img src="{{ asset('frontend/images/c_polo-shirt.png') }}" alt="" srcset=""
                                class="w-100" />
                            <span
                                class="span-style text-white d-flex align-items-center justify-content-center">scale</span>
                        </div>
                        <div class="text-center">
                            <div class="rating mt-3">
                                <span class="text-primary"><i class="fas fa-star"></i></span>
                                <span class="text-primary"><i class="fas fa-star"></i></span>
                                <span class="text-primary"><i class="fas fa-star"></i></span>
                                <span class="text-primary"><i class="fas fa-star"></i></span>
                                <span class="text-primary"><i class="fas fa-star"></i></span>
                            </div>
                            <p class="text-capitalize my-1">gray shirt</p>
                            <span class="fw-bold">$45.50</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-xl-3 new">
                        <div class="collection-img">
                            <img src="{{ asset('frontend/images/c_shirt-girl.png') }}" alt="" srcset=""
                                class="w-100" />
                            <span
                                class="span-style text-white d-flex align-items-center justify-content-center">scale</span>
                        </div>
                        <div class="text-center">
                            <div class="rating mt-3">
                                <span class="text-primary"><i class="fas fa-star"></i></span>
                                <span class="text-primary"><i class="fas fa-star"></i></span>
                                <span class="text-primary"><i class="fas fa-star"></i></span>
                                <span class="text-primary"><i class="fas fa-star"></i></span>
                                <span class="text-primary"><i class="fas fa-star"></i></span>
                            </div>
                            <p class="text-capitalize my-1">gray shirt</p>
                            <span class="fw-bold">$45.50</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-xl-3 best">
                        <div class="collection-img">
                            <img src="{{ asset('frontend/images/c_t-shirt_men.png') }}" alt="" srcset=""
                                class="w-100" />
                            <span
                                class="span-style text-white d-flex align-items-center justify-content-center">scale</span>
                        </div>
                        <div class="text-center">
                            <div class="rating mt-3">
                                <span class="text-primary"><i class="fas fa-star"></i></span>
                                <span class="text-primary"><i class="fas fa-star"></i></span>
                                <span class="text-primary"><i class="fas fa-star"></i></span>
                                <span class="text-primary"><i class="fas fa-star"></i></span>
                                <span class="text-primary"><i class="fas fa-star"></i></span>
                            </div>
                            <p class="text-capitalize my-1">gray shirt</p>
                            <span class="fw-bold">$45.50</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-xl-3 feat">
                        <div class="collection-img">
                            <img src="{{ asset('frontend/images/c_tunic-shirt_girl.png') }}" alt=""
                                srcset="" class="w-100" />
                            <span
                                class="span-style text-white d-flex align-items-center justify-content-center">scale</span>
                        </div>
                        <div class="text-center">
                            <div class="rating mt-3">
                                <span class="text-primary"><i class="fas fa-star"></i></span>
                                <span class="text-primary"><i class="fas fa-star"></i></span>
                                <span class="text-primary"><i class="fas fa-star"></i></span>
                                <span class="text-primary"><i class="fas fa-star"></i></span>
                                <span class="text-primary"><i class="fas fa-star"></i></span>
                            </div>
                            <p class="text-capitalize my-1">gray shirt</p>
                            <span class="fw-bold">$45.50</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-xl-3 best">
                        <div class="collection-img">
                            <img src="{{ asset('frontend/images/c_undershirt.png') }}" alt="" srcset=""
                                class="w-100" />
                            <span
                                class="span-style text-white d-flex align-items-center justify-content-center">scale</span>
                        </div>
                        <div class="text-center">
                            <div class="rating mt-3">
                                <span class="text-primary"><i class="fas fa-star"></i></span>
                                <span class="text-primary"><i class="fas fa-star"></i></span>
                                <span class="text-primary"><i class="fas fa-star"></i></span>
                                <span class="text-primary"><i class="fas fa-star"></i></span>
                                <span class="text-primary"><i class="fas fa-star"></i></span>
                            </div>
                            <p class="text-capitalize my-1">gray shirt</p>
                            <span class="fw-bold">$45.50</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-xl-3 feat">
                        <div class="collection-img">
                            <img src="{{ asset('frontend/images/c_western-shirt.png') }}" alt=""
                                srcset="" class="w-100" />
                            <span
                                class="span-style text-white d-flex align-items-center justify-content-center">scale</span>
                        </div>
                        <div class="text-center">
                            <div class="rating mt-3">
                                <span class="text-primary"><i class="fas fa-star"></i></span>
                                <span class="text-primary"><i class="fas fa-star"></i></span>
                                <span class="text-primary"><i class="fas fa-star"></i></span>
                                <span class="text-primary"><i class="fas fa-star"></i></span>
                                <span class="text-primary"><i class="fas fa-star"></i></span>
                            </div>
                            <p class="text-capitalize my-1">gray shirt</p>
                            <span class="fw-bold">$45.50</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end of collection -->

    <!-- special collection -->
    <section id="special-selection" class="py-5">
        <div class="container">
            <div class="section-title text-center">
                <h2 class="text-capitalize">Special Selection</h2>
            </div>

            <div class="row special-list g-0">
                <div class="col-lg-4 col-md-6 col-xl-3 p-2">
                    <div class="special-img position-relative overflow-hidden">
                        <img src="{{ asset('frontend/images/special_product_1.jpg') }}" class="w-100" />
                        <span class="position-absolute d-flex align-items-center justify-content-center fs-4">
                            <i class="fas fa-heart" style="color: red"></i>
                        </span>
                    </div>
                    <div class="text-center">
                        <p class="text-capitalize mt-2 mb-1">Gray Shirt</p>
                        <span class="fw-bold d-block mb-3">$ 45.50</span>
                        <a href="#" class="btn1">Add to Cart</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-xl-3 p-2">
                    <div class="special-img position-relative overflow-hidden">
                        <img src="{{ asset('frontend/images/special_product_2.jpg') }}" class="w-100" />
                        <span class="position-absolute d-flex align-items-center justify-content-center fs-4">
                            <i class="fas fa-heart" style="color: red"></i>
                        </span>
                    </div>
                    <div class="text-center">
                        <p class="text-capitalize mt-2 mb-1">Gray Shirt</p>
                        <span class="fw-bold d-block mb-3">$ 45.50</span>
                        <a href="#" class="btn1">Add to Cart</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-xl-3 p-2">
                    <div class="special-img position-relative overflow-hidden">
                        <img src="{{ asset('frontend/images/special_product_3.jpg') }}" class="w-100" />
                        <span class="position-absolute d-flex align-items-center justify-content-center fs-4">
                            <i class="fas fa-heart" style="color: red"></i>
                        </span>
                    </div>
                    <div class="text-center">
                        <p class="text-capitalize mt-2 mb-1">Gray Shirt</p>
                        <span class="fw-bold d-block mb-3">$ 45.50</span>
                        <a href="#" class="btn1">Add to Cart</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-xl-3 p-2">
                    <div class="special-img position-relative overflow-hidden">
                        <img src="{{ asset('frontend/images/special_product_4.jpg') }}" class="w-100" />
                        <span class="position-absolute d-flex align-items-center justify-content-center fs-4">
                            <i class="fas fa-heart" style="color: red"></i>
                        </span>
                    </div>
                    <div class="text-center">
                        <p class="text-capitalize mt-2 mb-1">Gray Shirt</p>
                        <span class="fw-bold d-block mb-3">$ 45.50</span>
                        <a href="#" class="btn1">Add to Cart</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end of special collection -->

    <!-- offers -->
    <section id="offers" class="py-5">
        <div class="container">
            <div class="row d-flex align-items-center justify-content-lg-center text-lg-left">
                <div class="offers-content">
                    <span class="text-white">Discount Up To 40%</span>
                    <h2 class="mt-2 mb-4 text-white">Grand Sale Offer!</h2>
                    <a href="" class="btn1">Buy Now</a>
                </div>
            </div>
        </div>
    </section>
    <!-- end of offers -->

    <!-- latest blog -->
    <section id="latest-blog" class="py-5">
        <div class="container">
            <div class="section-title text-center">
                <h2 class="text-capitalize">Our latest blog</h2>
            </div>
            <div class="row">
                <div class="card border-0 col-md-6 col-lg-4 bg-transparent">
                    <img src="{{ asset('frontend/images/blog_1.jpg') }}" />
                    <div class="card-body px-0">
                        <h4 class="card-title">
                            Lorem ipsum, dolor sit amet consectetur adipisicing
                        </h4>
                        <p class="card-test">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Reiciendis a amet dolor aspernatur quae et quod laborum quisquam
                            ipsam dolores.
                        </p>
                        <p class="card-text">
                            <small> <span>Author:</span>John Doe </small>
                        </p>
                        <a href="" class="btn1">Read More</a>
                    </div>
                </div>
                <div class="card border-0 col-md-6 col-lg-4 bg-transparent">
                    <img src="{{ asset('frontend/images/blog_2.jpg') }}" />
                    <div class="card-body px-0">
                        <h4 class="card-title">
                            Lorem ipsum, dolor sit amet consectetur adipisicing
                        </h4>
                        <p class="card-test">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Reiciendis a amet dolor aspernatur quae et quod laborum quisquam
                            ipsam dolores.
                        </p>
                        <p class="card-text">
                            <small> <span>Author:</span>John Doe </small>
                        </p>
                        <a href="" class="btn1">Read More</a>
                    </div>
                </div>
                <div class="card border-0 col-md-6 col-lg-4 bg-transparent">
                    <img src="{{ asset('frontend/images/blog_3.jpg') }}" />
                    <div class="card-body px-0">
                        <h4 class="card-title">
                            Lorem ipsum, dolor sit amet consectetur adipisicing
                        </h4>
                        <p class="card-test">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Reiciendis a amet dolor aspernatur quae et quod laborum quisquam
                            ipsam dolores.
                        </p>
                        <p class="card-text">
                            <small> <span>Author:</span>John Doe </small>
                        </p>
                        <a href="" class="btn1">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--end of latest blog -->

    <!-- about us -->
    <section id="about-us" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-us-img">
                        <img src="{{ asset('frontend/images/about_us.jpg') }}" class="img-fluid" />
                    </div>
                </div>
                <div class="col-lg-6 py-5 text-center text-lg-start">
                    <div class="section-title">
                        <h2 class="text-capitalize">About us</h2>
                    </div>
                    <div class="about-us-content py-3">
                        <p class="lead text-muted">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque,
                            nesciunt.
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima
                            impedit omnis cum eum magni eos nisi corporis veritatis, harum
                            iste.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end of about us -->

    <!-- popular -->
    <section id="popular" class="py-5">
        <div class="container">
            <div class="section-title text-center">
                <h2 class="text-capitalize">popular of this year</h2>
            </div>

            <div class="row">
                <!-- top rated  -->
                <div class="col-lg-4 g-3">
                    <h3 class="fs-5">Top Rated</h3>
                    <div class="d-flex align-items-lg-start justify-content-lg-start">
                        <img src="{{ asset('frontend/images/top_rated_1.jpg') }}" class="img-fluid w-25" />
                        <div class="m-3">
                            <p class="mb-0">Blue Shirt</p>
                            <span>$ 20.00</span>
                        </div>
                    </div>
                    <div class="d-flex align-items-lg-start justify-content-lg-start">
                        <img src="{{ asset('frontend/images/top_rated_2.jpg') }}" class="img-fluid w-25" />
                        <div class="m-3">
                            <p class="mb-0">Watch</p>
                            <span>$ 20.00</span>
                        </div>
                    </div>
                    <div class="d-flex align-items-lg-start justify-content-lg-start">
                        <img src="{{ asset('frontend/images/top_rated_3.jpg') }}" class="img-fluid w-25" />
                        <div class="m-3">
                            <p class="mb-0">Red Jacket</p>
                            <span>$ 20.00</span>
                        </div>
                    </div>
                </div>
                <!-- end top rated -->

                <!-- best selling  -->
                <div class="col-lg-4 g-3">
                    <h3 class="fs-5">Best Selling</h3>
                    <div class="d-flex align-items-lg-start justify-content-lg-start">
                        <img src="{{ asset('frontend/images/best_selling_1.jpg') }}" class="img-fluid w-25" />
                        <div class="m-3">
                            <p class="mb-0">Blue Shirt</p>
                            <span>$ 20.00</span>
                        </div>
                    </div>
                    <div class="d-flex align-items-lg-start justify-content-lg-start">
                        <img src="{{ asset('frontend/images/best_selling_2.jpg') }}" class="img-fluid w-25" />
                        <div class="m-3">
                            <p class="mb-0">Black & White</p>
                            <span>$ 20.00</span>
                        </div>
                    </div>
                    <div class="d-flex align-items-lg-start justify-content-lg-start">
                        <img src="{{ asset('frontend/images/best_selling_3.jpg') }}" class="img-fluid w-25" />
                        <div class="m-3">
                            <p class="mb-0">Gray Shirt</p>
                            <span>$ 20.00</span>
                        </div>
                    </div>
                </div>
                <!-- end of best selling -->

                <!-- on sale -->
                <div class="col-lg-4 g-3">
                    <h3 class="fs-5">On Sale</h3>
                    <div class="d-flex align-items-lg-start justify-content-lg-start">
                        <img src="{{ asset('frontend/images/on_sale_1.jpg') }}" class="img-fluid w-25" />
                        <div class="m-3">
                            <p class="mb-0">Blue Shirt</p>
                            <span>$ 20.00</span>
                        </div>
                    </div>
                    <div class="d-flex align-items-lg-start justify-content-lg-start">
                        <img src="{{ asset('frontend/images/on_sale_2.jpg') }}" class="img-fluid w-25" />
                        <div class="m-3">
                            <p class="mb-0">Watch</p>
                            <span>$ 20.00</span>
                        </div>
                    </div>
                    <div class="d-flex align-items-lg-start justify-content-lg-start">
                        <img src="{{ asset('frontend/images/on_sale_3.jpg') }}" class="img-fluid w-25" />
                        <div class="m-3">
                            <p class="mb-0">Red Jacket</p>
                            <span>$ 20.00</span>
                        </div>
                    </div>
                </div>
                <!-- end of on sale -->
            </div>
        </div>
    </section>
    <!-- end of popular -->

    <!-- newsletter  -->
    <section id="newsletter" class="py-5">
        <div class="container">
            <div class="section-title text-capitalize">
                <h2 class="text-center">newsletter subscription</h2>
                <p class="text-center text-muted mt-4">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                    Exercitationem, illo.
                </p>
            </div>
            <div class="row">
                <div class="col d-flex justify-content-center">
                    <div class="input-group mb-3 mt-3">
                        <input type="text" class="form-control" placeholder="your email" />
                        <button class="btn btn-primary">Subscribe</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end of newsletter  -->

    <!-- footer -->
    <footer class="bg-dark py-5">
        <div class="container">
            <div class="row text-white">
                <!-- e shop -->
                <div class="col-lg-3">
                    <a href="" class="text-uppercase text-decoration-none brand text-white">e-shop</a>
                    <p class="text-muted">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Natus ea
                        sunt deserunt sed ex omnis expedita. Odio consequuntur dolor, rem
                        nihil inventore fugit repellat vitae porro, quaerat fugiat aliquid
                        commodi, necessitatibus nobis velit quia maxime. Repellendus saepe
                        natus quia ipsum.
                    </p>
                </div>
                <!-- end of eshop -->

                <!-- links -->
                <div class="col-lg-3">
                    <h5 class="fw-light">Links</h5>
                    <ul class="list-unstyled">
                        <li class="my-3">
                            <a href="index.html" class="text-white text-decoration-none text-muted">
                                <i class="fas fa-chevron-right me-1"></i>Home
                            </a>
                        </li>
                        <li class="my-3">
                            <a href="#collection" class="text-white text-decoration-none text-muted">
                                <i class="fas fa-chevron-right me-1"></i>Collection
                            </a>
                        </li>
                        <li class="my-3">
                            <a href="#latest-blog" class="text-white text-decoration-none text-muted">
                                <i class="fas fa-chevron-right me-1"></i>Blogs
                            </a>
                        </li>
                        <li class="my-3">
                            <a href="#about-us" class="text-white text-decoration-none text-muted">
                                <i class="fas fa-chevron-right me-1"></i>About Us
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- end of links -->

                <!-- contact us -->
                <div class="col-lg-3">
                    <h5 class="fw-light">Contact Us</h5>
                    <p class="text-muted">
                        <i class="fas fa-location me-1"></i>Albert Street, New York, AS
                        756, United States of America
                    </p>
                    <p class="text-muted">
                        <i class="fas fa-envelope me-1"></i>sohan@gmail.com
                    </p>
                    <p class="text-muted">
                        <i class="fas fa-phone me-1"></i>+8801750813285
                    </p>
                </div>
                <!-- end of contact us -->

                <!-- follow us -->
                <div class="col-lg-3">
                    <h5 class="fw-light">Follow Us</h5>
                    <ul class="list-unstyled d-flex">
                        <li>
                            <a href="" class="text-white text-decoration-none text-muted fs-4 pe-2">
                                <i class="fab fa-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="" class="text-white text-decoration-none text-muted fs-4 pe-2">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </li>
                        <li>
                            <a href="" class="text-white text-decoration-none text-muted fs-4 pe-2">
                                <i class="fab fa-linkedin"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- end of  follow us -->
            </div>
        </div>
    </footer>
    <!--end of  footer -->

    @include('newUser.partials.scripts')
    {{-- <script src="script.js"></script> --}}
</body>

</html>
