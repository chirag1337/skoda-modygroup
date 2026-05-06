<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-NNVCCWPT');</script>
    <!-- End Google Tag Manager -->

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="assets/images/favicon.png">
    <title>Toyota Hyderabad</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css?v=2.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"/>

    <style>
        .sales_showroom {
            font-size: 32px;
            font-weight: bold;
        }

        .service_showroom {
            font-size: 32px;
            font-weight: bold;
        }

        .accordion-button::after {
            display: none !important;
        }

        @media only screen and (max-width: 600px) {
            .container {
                font-size: 16px;
            }

            .form-control {
                font-size: 16px;
            }

            .sales_showroom {
                font-size: 26px;
            }

            .service_showroom {
                font-size: 26px;
            }

            .btnSubmitData {
                width: 100%;
            }

            .logo {
                width: 150px;
            }
        }
    </style>

    <style>
        .custom-footer-bg {
            background-color: #383838; /* Matches the dark grey from the image */
            color: #f8f9fa;
        }
        .footer-list-item {
            color: #d1d1d1;
            font-size: 0.85rem;
            letter-spacing: 0.5px;
            text-transform: uppercase;
            margin-bottom: 0.75rem;
        }
        .footer-heading {
            color: #ffffff;
            font-size: 0.95rem;
            font-weight: 700;
            letter-spacing: 0.5px;
            text-transform: uppercase;
            margin-bottom: 1.5rem;
        }
        .address-box {
            background-color: #2b2b2b; /* Slightly darker background for the address section */
            border-radius: 4px;
            position: relative;
        }
        .address-text {
            font-size: 0.85rem;
            line-height: 1.5;
            color: #d1d1d1;
        }
        .nav-arrows {
            cursor: pointer;
            width: 24px;
            height: 24px;
            border: 1px solid #fff;
            border-radius: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 0.75rem;
        }
        .bottom-bar {
            border-top: 1px solid #555;
            font-size: 0.85rem;
            color: #b0b0b0;
        }
        .toyota-logo-text {
            font-size: 1.5rem;
            font-weight: 800;
            letter-spacing: 1px;
            color: #ffffff;
        }
    </style>
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NNVCCWPT"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <?php session_start(); ?>

    <?php if (isset($_SESSION['error'])): ?>
    <script>
        $(document).ready(function () {
            toastr.error("<?= $_SESSION['error']; ?>");
        });
    </script>
    <?php unset($_SESSION['error']); endif; ?>

    <?php if (isset($_SESSION['success'])): ?>
    <script>
        $(document).ready(function () {
            toastr.success("<?= $_SESSION['success']; ?>");
        });
    </script>
    <?php unset($_SESSION['success']); endif; ?>

    <header>
        <div class="container">
            <div style="display: flex;justify-content: space-between;align-items: center;">
                <div class="logo">
                    <a href="/" title="Logo">
                        <img src="assets/images/logo/logo.png" alt="Logo" style="width: 200px">
                    </a>
                </div>
                <div class="right">

                    <!-- Mobile: Only icon -->
                    <a href="tel:8096012222" class="d-block d-md-none">
                        <i class="fa-solid fa-phone text-dark"></i>
                    </a>

                    <!-- Desktop: Icon + Number -->
                    <a href="tel:8096012222"
                        class="d-none d-md-inline-flex align-items-center text-dark text-decoration-none">
                        <i class="fa-solid fa-phone text-dark" style="margin-right: 5px;"></i>
                        8096012222
                    </a>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </header>
    <main>
        <div id="homeSlider" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <!-- <div class="carousel-indicators">
                <button type="button" data-bs-target="#homeSlider" data-bs-slide-to="0" class="active" aria-current="true"
                    aria-label="Slide 1"></button>
            </div> -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <!-- <img src="assets/images/desktop-banner.jpg" class="d-block w-100" alt="Banner"> -->
                    <img data-desktop-src="assets/images/desktop-banner.jpg" data-mobile-src="assets/images/mobile-banner.jpg" class="d-block w-100" alt="Banner">
                </div>
            </div>
            <!-- <button class="carousel-control-prev" type="button" data-bs-target="#homeSlider" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#homeSlider" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button> -->
        </div>
        <div class="container" style="margin-top: 20px;">
            <form name="td_form" id="td_form" method="post" action="send-action.php">
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <h2 class="h3 h-md-3">Contact Us</h2>
                    </div>
                    <div class="col-md-12">
                        <p class="text-muted" style="font-size: 14px">
                            Fields marked with an asterisk (<span class="red">*</span>) are mandatory.
                        </p>
                    </div>

                    <div class="col-md-12">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="name">Name <span class="red">*</span></label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="Enter name">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="mobile">Phone Number <span class="red">*</span></label>
                                <input type="text" class="form-control" name="mobile" id="mobile" placeholder="Enter phone number" minlength="10" maxlength="13">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="email">Email <span class="red">*</span></label>
                                <input type="text" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="model">Model <span class="red">*</span></label>
                                <select class="form-control" name="model" id="model">
                                    <option value="-1">-- Select Model --</option>
                                    <option value="Glanza">Glanza</option>
                                    <option value="Urban Cruiser Taisor">Urban Cruiser Taisor</option>
                                    <option value="Rumion">Rumion</option>
                                    <option value="Urban Cruiser Hyryder">Urban Cruiser Hyryder</option>
                                    <option value="Innova Crysta">Innova Crysta</option>
                                    <option value="Innova Hycross">Innova Hycross</option>
                                    <option value="Hilux">Hilux</option>
                                    <option value="Fortuner">Fortuner</option>
                                    <option value="Legender">Legender</option>
                                    <option value="Camry">Camry</option>
                                    <option value="Vellfire">Vellfire</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="salesORservice">Sales/Service <span class="red">*</span></label>
                                <select class="form-control" name="salesORservice" id="salesORservice" onchange="updateLocations()">
                                    <option value="-1">-- Select Sales/Service --</option>
                                    <option value="Sales">Sales</option>
                                    <option value="Service">Service</option>
                                </select>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="location">Location <span class="red">*</span></label>
                                <select class="form-control" name="location" id="location">
                                    <option value="-1">-- Select Location --</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="submitData">
                        <input type="submit" id="btnSubmitData" name="btnSubmitData" value="Submit"class="btnSubmitData">
                    </div>
            </form>
        </div>
        </div>
        <section class="section bg-grey">
            <!-- <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="col-md-12">
                            <p class="border_head sales_showroom">Sales Showroom</p>
                        </div>

                        <div class="accordion">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button not-collapsible">
                                        Bowenpally
                                    </button>
                                </h2>
                                <div class="accordion-body show">
                                    <ul>
                                        <li>
                                            <img src="assets/images/location.png">
                                            Sy No 33 NH 7, near Checkpost, Bowenpally, Hyderabad, Telangana 500011
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="col-md-12">
                            <p class="border_head sales_showroom">Service Center</p>
                        </div>

                        <div class="accordion">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button not-collapsible">Bowenpally</button>
                                </h2>
                                <div class="accordion-body show">
                                    <ul>
                                        <li>
                                            <img src="assets/images/location.png">
                                          Sy No 33 NH 7, near Checkpost, Bowenpally, Hyderabad, Telangana 500011
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div> -->
        </section>
    </main>
    <footer class="custom-footer-bg pt-5 pb-3">
        <div class="container-fluid px-4 px-lg-5">
            <div class="row mb-4">
                
                <!-- Column 1: About Us -->
                <div class="col-6 col-md-4 col-lg-2 mb-4">
                    <div class="footer-heading">About Us</div>
                    <ul class="list-unstyled">
                        <li class="footer-list-item">Mission</li>
                        <li class="footer-list-item">Dealer Principal</li>
                        <li class="footer-list-item">Contact Us</li>
                        <li class="footer-list-item">Contact Person</li>
                        <li class="footer-list-item">Special Features</li>
                        <li class="footer-list-item">Facilities</li>
                    </ul>
                    <div class="footer-heading mt-4 mb-0">Price List</div>
                </div>

                <!-- Column 2: Products -->
                <div class="col-6 col-md-4 col-lg-2 mb-4">
                    <div class="footer-heading">Products</div>
                    <ul class="list-unstyled">
                        <li class="footer-list-item">TOYOTA Glanza</li>
                        <li class="footer-list-item">TOYOTA Urban Cruiser Hyryder</li>
                        <li class="footer-list-item">TOYOTA Urban Cruiser</li>
                        <li class="footer-list-item">TOYOTA Ebella</li>
                        <li class="footer-list-item">TOYOTA Innova Crysta</li>
                        <li class="footer-list-item">TOYOTA Innova Hycross</li>
                        <li class="footer-list-item">TOYOTA Hilux</li>
                        <li class="footer-list-item">TOYOTA Fortuner</li>
                        <li class="footer-list-item">TOYOTA Legender</li>
                        <li class="footer-list-item">TOYOTA New Camry Hybrid</li>
                        <li class="footer-list-item">TOYOTA Electric Vehicle</li>
                        <li class="footer-list-item">TOYOTA Vellfire</li>
                    </ul>
                </div>

                <!-- Column 3: Finance & Insurance -->
                <div class="col-6 col-md-4 col-lg-2 mb-4">
                    <div class="footer-heading">Finance</div>
                    <ul class="list-unstyled mb-4">
                        <li class="footer-list-item">Apply For Loan</li>
                    </ul>
                    
                    <div class="footer-heading">Insurance</div>
                    <ul class="list-unstyled">
                        <li class="footer-list-item">Apply For Insurance</li>
                    </ul>

                    <div class="footer-heading mt-4">Online Request</div>
                    <ul class="list-unstyled mb-4">
                        <li class="footer-list-item">Test Drive</li>
                        <li class="footer-list-item">Brochure</li>
                    </ul>
                    
                    <div class="footer-heading">Q Service</div>
                </div>

                <!-- Column 6: Address Box -->
                <div class="col-12 col-md-4 col-lg-6 mb-4">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <h5 class="mb-0 fw-bold text-white">DEALERSHIPS</h5>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="address-box p-1 d-flex align-items-center justify-content-between">
                                <div class="address-text flex-grow-1 px-2">
                                    Mody Toyota, Visakhapatnam<br>
                                    <div class="mt-2 text-white">
                                        <span>+91 80960 12222</span><br>
                                        <span>customercare@modytoyota.com</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="address-box p-1 d-flex align-items-center justify-content-between">
                                <div class="address-text flex-grow-1 px-2">
                                    Mody Toyota, Vallabh Nagar<br>
                                    <div class="mt-2 text-white">
                                        <span>+91 80960 12222</span><br>
                                        <span>customercare@modytoyota.com</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="address-box p-1 d-flex align-items-center justify-content-between">
                                <div class="address-text flex-grow-1 px-2">
                                    Mody Toyota, Secunderabad<br>
                                    <div class="mt-2 text-white">
                                        <span>+91 80960 12222</span><br>
                                        <span>customercare@modytoyota.com</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="address-box p-1 d-flex align-items-center justify-content-between">
                                <div class="address-text flex-grow-1 px-2">
                                    Mody Toyota, Visakhapatnam<br>
                                    <div class="mt-2 text-white">
                                        <span>+91 80960 12222</span><br>
                                        <span>customercare@modytoyota.com</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="address-box p-1 d-flex align-items-center justify-content-between">
                                <div class="address-text flex-grow-1 px-2">
                                    Mody Toyota, Srikakulum<br>
                                    <div class="mt-2 text-white">
                                        <span>+91 80960 12222</span><br>
                                        <span>customercare@modytoyota.com</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="address-box p-1 d-flex align-items-center justify-content-between">
                                <div class="address-text flex-grow-1 px-2">
                                    Mody Toyota, Medchal Malkajgiri<br>
                                    <div class="mt-2 text-white">
                                        <span>+91 80960 12222</span><br>
                                        <span>customercare@modytoyota.com</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="address-box p-1 d-flex align-items-center justify-content-between">
                                <div class="address-text flex-grow-1 px-2">
                                    Mody Toyota, Bowenpally<br>
                                    <div class="mt-2 text-white">
                                        <span>+91 80960 12222</span><br>
                                        <span>customercare@modytoyota.com</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="address-box p-1 d-flex align-items-center justify-content-between">
                                <div class="address-text flex-grow-1 px-2">
                                    Mody Toyota, Bowenpally<br>
                                    <div class="mt-2 text-white">
                                        <span>+91 80960 12222</span><br>
                                        <span>customercare@modytoyota.com</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="address-box p-1 d-flex align-items-center justify-content-between">
                                <div class="address-text flex-grow-1 px-2">
                                    Mody Toyota, Sangareddy<br>
                                    <div class="mt-2 text-white">
                                        <span>+91 80960 12222</span><br>
                                        <span>customercare@modytoyota.com</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Bottom Copyright Bar -->
            <div class="bottom-bar pt-3 d-flex flex-column flex-md-row justify-content-between align-items-center">
                <!-- <div class="d-flex align-items-center mb-2 mb-md-0">
                    <span class="toyota-logo-text me-4">TOYOTA</span>
                    <span>Copyright © 2026 TKM. All Rights Reserved.</span>
                </div>
                <div>
                    <span>Powered By:Renaissance Technologies</span>
                </div> -->
                <p>&copy; <?php echo date("Y"); ?> <a href="https://modygroup.co.in/" target="_blank">Mody Group</a></p>
            </div>
        </div>
        <!-- <div class="container">
        </div> -->
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>

    <script>
        function winresize() {
            var desktop = ($(window).width() > 767) ? true : false;

            $('[data-mobile-src]').each(function () {
                src = "";
                if (desktop && $(this).data('desktop-src')) {
                    src = $(this).data('desktop-src')
                } else {
                    src = $(this).data('mobile-src');
                }

                $(this).attr('src', src);
            });
        } 


        $(window).resize(function () {
            winresize();
        });

        winresize();


        $(document).ready(function (event) { 
            winresize();
        });

        function updateLocations() {
            var salesOrService = document.getElementById("salesORservice").value;
            var locationSelect = document.getElementById("location");
            // Reset locations
            locationSelect.innerHTML = '<option value="-1">-- Select Location --</option>';
            var options = [];
            if (salesOrService === "Sales") {
                options = ["Karkhana","Bowenpally","Uppal","Sangareddy","Kama Reddy","Jangaon", "Hyderabad", "Secunderabad"];
            } else if (salesOrService === "Service") {
                options = ["Karkhana","Bowenpally","Uppal","Sangareddy","Kama Reddy","Jangaon"];
            }
            // Add new options
            options.forEach(function (loc) {
                var opt = document.createElement("option");
                opt.value = loc;
                opt.textContent = loc;
                locationSelect.appendChild(opt);
            });
    
            $("#location").valid();
        }

        $(document).ready(function () {
            $("#td_form").validate({
                rules: {
                    name: {
                        required: true,
                        minlength: 2
                    },
                    email: {
                        required: true,
                        email: true
                    },
                    mobile: {
                        required: true,
                        digits: true,
                        minlength: 10,
                        maxlength: 13,
        
                    },
                    model: {
                        required: true,
                        notEqual: "-1"
                    },
                    salesORservice: {
                        required: true,
                        notEqual: "-1"
                    },
                    location: {
                        required: true,
                        notEqual: "-1"
                    }
                },
                messages: {
                    name: {
                        required: "Please enter your name",
                        minlength: "Name must be at least 2 characters"
                    },
                    email: {
                        required: "Please enter your email",
                        email: "Please enter a valid email address"
                    },
                    mobile: {
                        required: "Please enter your phone number",
                        digits: "Please enter only digits",
                        minlength: "Phone number must be at least 10 digits",
                        maxlength: "Phone number cannot exceed 13 digits",
                        
                    },
                    model: {
                        required: "Please select a model",
                        notEqual: "Please select a model"
                    },
                    salesORservice: {
                        required: "Please select Sales or Service",
                        notEqual: "Please select Sales or Service"
                    },
                    location: {
                        required: "Please select a location",
                        notEqual: "Please select a location"
                    }
                },
                
                highlight: function (element) {
                    $(element).addClass("is-invalid");
                },
                unhighlight: function (element) {
                    $(element).removeClass("is-invalid");
                },
                submitHandler: function (form) {
                    $("#btnSubmitData").prop("disabled", true); 
                    $("#btnSubmitData").val("Submitting...");
                    form.submit();
                }
            });

            $.validator.addMethod("notEqual", function (value, element, param) {
                return this.optional(element) || value !== param;
            }, "Please select a valid option");

            $("#salesORservice").change(function () {
                updateLocations();
            });
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>