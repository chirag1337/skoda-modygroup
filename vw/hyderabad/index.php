<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-17503778522"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'AW-17503778522');
    </script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="assets/images/favicon.png">
    <title>Volkswagen Hyderabad</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css?v=2.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

</head>

<body>
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
                    <a href="tel:9160680000">9160680000</a>

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
                    <div class="col-md-12">
                        <h2>Registration Form</h2>
                        <br>
                    </div>
                    <div class="form-group col-md-12">
                        <p style="margin-bottom: 0;">Fields marked with an asterisk (<span class="red">*</span>) are mandatory. </p>
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
                                <label for="model">Model</label>
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
                            <h2 class="border_head sales_showroom">Sales Showroom</h2>
                        </div>
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        Deccan
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <ul>
                                            <li>
                                                <img src="assets/images/location.png">
                                                3-11-468, Shiva Ganga Colony, LB Nagar, Hyderabad 500074, Hyderabad, Telangana 500035
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Mehdipatnam
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <ul>
                                            <li>
                                                <img src="assets/images/location.png">
                                                Pillar No.89, Ring, Attapur Main Rd, Mehdipatnam, Hyderabad, Telangana 500028
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        Visakhapatnam
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <ul>
                                            <li>
                                                <img src="assets/images/location.png">
                                               how Room.No.3, Ground KSR Prime, Madhavadhara Area, near R&B Guest House, Visakhapatnam, Andhra Pradesh 530018
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFive">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                        Rajahmundry
                                    </button>
                                </h2>
                                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <ul>
                                            <li>
                                                <img src="assets/images/location.png">
                                              Dr.No: 84- 1 -3, NH - 16, near ONGC Base Complex, Rajamahendravaram, Andhra Pradesh 533106
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="col-md-12">
                            <h2 class="border_head sales_showroom">Service Center</h2>
                        </div>
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingUppal">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseUppal" aria-expanded="false"
                                        aria-controls="collapseUppal">
                                        Mehdipatnam 
                                    </button>
                                </h2>
                                <div id="collapseUppal" class="accordion-collapse collapse"
                                    aria-labelledby="headingUppal" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <ul>
                                            <li>
                                                <img src="assets/images/location.png" alt="Location">
                                                Pillar No.89, Ring, Attapur Main Rd, Mehdipatnam, Hyderabad, Telangana 500028
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="false"
                                        aria-controls="collapseOne">
                                        Deccan  
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse"
                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <ul>
                                            <li>
                                                <img src="assets/images/location.png" alt="Location">
                                                Hanamkonda- Hyderabad Rd, IDA Uppal, Uppal, Hyderabad, Telangana 500039
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingSix">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseSix" aria-expanded="false"
                                        aria-controls="collapseSix">
                                        Visakhapatnam   
                                    </button>
                                </h2>
                                <div id="collapseSix" class="accordion-collapse collapse"
                                    aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <ul>
                                            <li>
                                                <img src="assets/images/location.png" alt="Location">
                                                B Block, APIE A6 Survey no. 73, Gajuwaka - Scindia Rd, Auto Nagar, Visakhapatnam, Andhra Pradesh 530012
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingSeven">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseSeven" aria-expanded="false"
                                        aria-controls="collapseSeven">
                                        Rajahmundry    
                                    </button>
                                </h2>
                                <div id="collapseSeven" class="accordion-collapse collapse"
                                    aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <ul>
                                            <li>
                                                <img src="assets/images/location.png" alt="Location">
                                                Dr.No: 84- 1 -3, NH - 16, near ONGC Base Complex, Rajamahendravaram, Andhra Pradesh 533106
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
                options = ["Deccan", "Mehdipatnam","Visakhapatnam","Rajahmundry"];
            } else if (salesOrService === "Service") {
                options = ["Mehdipatnam","Deccan","Visakhapatnam","Rajahmundry "];
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