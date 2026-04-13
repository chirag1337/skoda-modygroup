<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-K3VGSRRV');</script>
    <!-- End Google Tag Manager -->

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="assets/images/favicon.png">
    <title>Toyota Visakhapatnam</title>
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
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K3VGSRRV"
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
    <footer>
        <div class="container">
            <p>&copy; <?php echo date("Y"); ?> <a href="https://modygroup.co.in/" target="_blank">Mody Group</a></p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>

    <script>

        function updateLocations() {
            var salesOrService = document.getElementById("salesORservice").value;
            var locationSelect = document.getElementById("location");
            // Reset locations
            locationSelect.innerHTML = '<option value="-1">-- Select Location --</option>';
            var options = [];
            if (salesOrService === "Sales") {
                options = ["Vishakapatnam","Gajuwaka","Anakapalle","Yelamanchili","Srikakulam","Vizianagaram"];
            } else if (salesOrService === "Service") {
                options = ["Vishakapatnam","Gajuwaka","Anakapalle","Yelamanchili","Srikakulam","Vizianagaram"];
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