<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-P44B9ZGD');</script>
    <!-- End Google Tag Manager -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="assets/images/favicon.png">
    <title>Volkswagen  Mumbai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css?v=2.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P44B9ZGD"
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
                        <img src="assets/images/logo/logo.png" alt="Logo" style="width: 100px">
                    </a>
                </div>
                <!-- <div class="right">
                    <a href="tel:9160680000">9160680000</a>

                    <div class="clear"></div>
                </div> -->
                <div class="right">

                    <!-- Mobile: Only icon -->
                    <a href="tel:9160680000" class="d-block d-md-none">
                        <i class="fa-solid fa-phone text-dark"></i>
                    </a>

                    <!-- Desktop: Icon + Number -->
                    <a href="tel:9160680000"
                        class="d-none d-md-inline-flex align-items-center text-dark text-decoration-none">
                        <i class="fa-solid fa-phone text-dark" style="margin-right: 5px;"></i>
                        9160680000
                    </a>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </header>
    <main>
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
                                    <option value="VIRTUS">VIRTUS</option>
                                    <option value="TAIGUN">TAIGUN</option>
                                    <option value="GOLF GTI">GOLF GTI</option>
                                    <option value="TIGUAN R-LINE">TIGUAN R-LINE</option>
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
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="col-md-12">
                            <p class="border_head sales_showroom">Sales Showroom</p>
                        </div>
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-target="#collapseThree" aria-expanded="true"
                                        aria-controls="collapseThree">
                                        Mumbai North
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse show"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <ul>
                                            <li>
                                                <img src="assets/images/location.png">
                                                Shop no: 7, kandivali kesar Ashish CHSL, New Link Rd, Mahavir Nagar, Kandivali West, Mumbai, Maharashtra 400067
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Vasai  
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse show" aria-labelledby="headingOne"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <ul>
                                            <li>
                                                <img src="assets/images/location.png">
                                                Gala No 09, Ground Floor, Arihant Estate, Sativali, Vasai East, Maharashtra - 401208
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                        Thane  
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse show" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <ul>
                                            <li>
                                                <img src="assets/images/location.png">
                                                Cosmos Jewels, 3/4, Ghodbunder Rd, Rutu Enclave, Kavesar, Thane West, Thane, Maharashtra 400615
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                        Kalyan   
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse show" aria-labelledby="headingFour"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <ul>
                                            <li>
                                                <img src="assets/images/location.png">
                                                No-002, Prince Complex, Bhiwandi Kalyan Road, kongaon, Kalyan-421311
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingSeven">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-target="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">
                                        Panjim   
                                    </button>
                                </h2>
                                <div id="collapseSeven" class="accordion-collapse show" aria-labelledby="headingSeven"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <ul>
                                            <li>
                                                <img src="assets/images/location.png">
                                                Model Legacy Building, Odlem Bhat, Taleigao, Goa 403002
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingEight">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-target="#collapseEight" aria-expanded="true" aria-controls="collapseEight">
                                        Goa   
                                    </button>
                                </h2>
                                <div id="collapseEight" class="accordion-collapse show" aria-labelledby="headingEight"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <ul>
                                            <li>
                                                <img src="assets/images/location.png">
                                                Cross Road Elite court bldg, Eastern Express bypass, road, Margao, Goa 403602
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="col-md-12">
                            <p class="border_head sales_showroom">Service Center</p>
                        </div>
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFive">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                                        Mumbai North  
                                    </button>
                                </h2>
                                <div id="collapseFive" class="accordion-collapse show" aria-labelledby="headingFive"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <ul>
                                            <li>
                                                <img src="assets/images/location.png">
                                                Near Classic Studio, Punjab Foundry, Mira Bhayandar Rd, Kashimira, Mira Bhayandar, Maharashtra 401107
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingSix">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                                        Thane    
                                    </button>
                                </h2>
                                <div id="collapseSix" class="accordion-collapse show" aria-labelledby="headingSix"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <ul>
                                            <li>
                                                <img src="assets/images/location.png">
                                                Rd Number 16, Brodma, Ambika Nagar No. 2, Wagle Industrial Estate, Thane West, Thane, Maharashtra 400604
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingNIne">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-target="#collapseNine" aria-expanded="true" aria-controls="collapseNine">
                                        Goa     
                                    </button>
                                </h2>
                                <div id="collapseNine" class="accordion-collapse show" aria-labelledby="headingNIne"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <ul>
                                            <li>
                                                <img src="assets/images/location.png">
                                                plot no L, 26-A, Verna Industrial Estate, Verna, Goa 403722
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <div class="container">
            <p>&copy; <?php echo date("Y"); ?> <a href="https://modygroup.co.in/" target="_blank">Mody Group</a></p>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>

    <script>

        function updateLocations() {
            var salesOrService = document.getElementById("salesORservice").value;
            var locationSelect = document.getElementById("location");
            // Reset locations
            locationSelect.innerHTML = '<option value="-1">-- Select Location --</option>';
            var options = [];
            if (salesOrService === "Sales") {
                options = ["Mumbai North", "Vasai","Kalyan","Thane","Panjim","Goa", "Mumbai", "Navi Mumbai"];
            } else if (salesOrService === "Service") {
                options = ["Mumbai North","Thane","Goa"];
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>