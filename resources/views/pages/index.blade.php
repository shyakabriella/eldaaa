@extends('layouts.main')

@section('content')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- Include SweetAlert CSS and JS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<section class="hero-section d-flex justify-content-center align-items-center" id="section_1">
                <div class="container">
                    <div class="row">
                    <div class="container min-h-screen bg-[url('bg2.png')] bg-center bg-no-repeat bg-cover px-28 py-5 relative from-gray-100">

                        <div class="col-lg-8 col-12 mx-auto">
                            <h2 class="text-white text-center">Rwandan.Elders.Care.Facilities System</h2>

                            @if ($message = Session::get('success'))
                            <script>
                                document.addEventListener('DOMContentLoaded', function () {
                                    Swal.fire({
                                        icon: 'success',
                                        title: 'Success!',
                                        text: '{{ $message }}',
                                        confirmButtonText: 'OK'
                                    });
                                });
                            </script>
                        @endif

                            <h6 class="text-center">platform for Elders care facilities for Rwandan Citisen</h6>
                            <form method="get" class="custom-form mt-4 pt-2 mb-lg-0 mb-5" role="search">
                                <div class="input-group input-group-lg">
                                    <span class="input-group-text bi-search" id="basic-addon1">
                                        
                                    </span>
                                    <input name="keyword" type="search" class="form-control" id="keyword" placeholder="Design, Code, Marketing, Finance ..." aria-label="Search">
                                    <button type="submit" class="form-control">Search</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>

         
            <section class="featured-section">
                <div class="container">
                    <div class="row justify-content-center">

                        <div class="col-lg-4 col-12 mb-4 mb-lg-0">
                            <div class="custom-block bg-white shadow-lg">
                                <a href="topics-detail.html">
                                    <div class="d-flex">
                                        <div>
                                            <h5 class="mb-2">About Us</h5>
                                            <p>Creating a facilities management system for elder care facilities in Rwanda involves integrating 
                                                various components to ensure the efficient and effective operation of these facilities.</p>
                                            <h3>Our Mission</h3>
                                            <p class="mb-0">Our mission is to enhance the well-being of elderly individuals 
                                                in Rwanda by providing a cutting-edge and compassionate care facilities management system.
                                            </p>
                                        </div>

                                        <span class="badge bg-design rounded-pill ms-auto">14</span>
                                    </div>

                                </a>
                            </div>
                        </div>

                        <div class="col-lg-6 col-12" id="section_2">
                            <div class="custom-block custom-block-overlay">
                                <div class="d-flex flex-column h-100">
                                <img src="images/el.png" class="custom-block-image img-fluid" alt="">

                                    <div class="custom-block-overlay-text d-flex">
                                        <div>
                                            <h5 class="text-white mb-1">What We Do</h5>
                                            <p class="text-white">
                                                
                                            Facility Maintenance:
                                            Equipment Management: Track the maintenance schedule for medical equipment and ensure timely repairs.
                                            Building Maintenance: Schedule regular maintenance for the facility, including cleaning, repairs, and safety inspections
                                        </p>

                                        </div>
                                     </div>
                                    <div class="section-overlay"></div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <section class="explore-section section-padding" >
                <div class="container">

                        <div class="col-12 text-center">
                            <h2 class="mb-4">Web Activities</h1>
                        </div>

                    </div>
                </div>

        <div class="container">
    
                <div class="container-fluid">
                    <div class="row">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="design-tab" data-bs-toggle="tab" data-bs-target="#design-tab-pane" type="button" role="tab" aria-controls="design-tab-pane" aria-selected="true">Check-out List of applicant</button>
                            </li>

                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="marketing-tab" data-bs-toggle="tab" data-bs-target="#marketing-tab-pane" type="button" role="tab" aria-controls="marketing-tab-pane" aria-selected="false">Requirements-to-be-considered</button>
                            </li>

                            <li class="nav-item" role="presentation">
                                <button class="btn btn-info" id="finance-tab" data-bs-toggle="tab" data-bs-target="#finance-tab-pane" type="button" role="tab" aria-controls="finance-tab-pane" data-toggle="modal" data-target="#myModal"  aria-selected="false">Elders application</button>
                            </li>
                           
                        </ul>
                    </div>
                </div>

                <div class="container">
                    <div class="row">

                        <div class="col-12">
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="design-tab-pane" role="tabpanel" aria-labelledby="design-tab" tabindex="0">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
                                            <div class="custom-block bg-white shadow-lg">
                                                <a href="login">
                                                    <div class="d-flex">
                                                        <div>
                                                            <h5 class="mb-2">List Of all Elders With Panding Appried</h5>

                                                            <p class="mb-0">Application for being considered  </p>
                                                        </div>

                                                        <span class="badge bg-design rounded-pill ms-auto">Rw</span>
                                                    </div>

                                                    <img src="images/nid.png" class="custom-block-image img-fluid" alt="">
                                                </a>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
                                            <div class="custom-block bg-white shadow-lg">
                                                <a href="">
                                                    <div class="d-flex">
                                                        <div>
                                                            <h5 class="mb-2">List of Elders Successfull Considered</h5>

                                                                <p class="mb-0">List Of all elders That will be given facilities </p>
                                                        </div>

                                                        <span class="badge bg-design rounded-pill ms-auto">75</span>
                                                    </div>

                                                    <img src="images/nidd.webp" class="custom-block-image img-fluid" alt="">
                                                </a>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-6 col-12">
                                            <div class="custom-block bg-white shadow-lg">
                                                <a href="login">
                                                    <div class="d-flex">
                                                        <div>
                                                            <h5 class="mb-2">List of Elders Rijected</h5>

                                                                <p class="mb-0">According To critera and requirements those elders are not allowed to be given facilities </p>
                                                        </div>

                                                        <span class="badge bg-design rounded-pill ms-auto">100</span>
                                                    </div>

                                                    <img src="images/topics/colleagues-working-cozy-office-medium-shot.png" class="custom-block-image img-fluid" alt="">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="marketing-tab-pane" role="tabpanel" aria-labelledby="marketing-tab" tabindex="0">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-3">
                                                <div class="custom-block bg-white shadow-lg">
                                                    <a href="topics-detail.html">
                                                        <div class="d-flex">
                                                            <div>
                                                                <h5 class="mb-2">About-Asset</h5>

                                                                <p class="mb-0">Check out What is related to the asset and how it can be focused when to choose Elders </p>
                                                            </div>

                                                            <span class="badge bg-advertising rounded-pill ms-auto">30</span>
                                                        </div>

                                                        <img src="images/lice.png" class="custom-block-image img-fluid" alt="">
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-3">
                                                <div class="custom-block bg-white shadow-lg">
                                                    <a href="topics-detail.html">
                                                        <div class="d-flex">
                                                            <div>
                                                                <h5 class="mb-2">Education information</h5>

                                                                <p class="mb-0">All information about education criteria </p>
                                                            </div>

                                                            <span class="badge bg-advertising rounded-pill ms-auto">65</span>
                                                        </div>

                                                        <img src="images/int.png" class="custom-block-image img-fluid" alt="">
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 col-md-6 col-12">
                                                <div class="custom-block bg-white shadow-lg">
                                                    <a href="topics-detail.html">
                                                        <div class="d-flex">
                                                            <div>
                                                                <h5 class="mb-2">Desease and disability </h5>

                                                                <p class="mb-0">Checkout all information about </p>
                                                            </div>

                                                            <span class="badge bg-advertising rounded-pill ms-auto">50</span>
                                                        </div>

                                                        <img src="images/" class="custom-block-image img-fluid" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                  </div>
                                    </div>
                                </div>


                    <!-- ... Your existing HTML content ... -->

                    <script>
                        // Check if the session has a 'success' message and display SweetAlert accordingly
                        @if(session('success'))
                            Swal.fire({
                                icon: 'success',
                                title: 'Success!',
                                text: '{{ session('success') }}',
                                confirmButtonText: 'OK'
                            });
                        @endif

                        // You can also use SweetAlert in other places as needed
                        function showAlert() {
                            Swal.fire({
                                icon: 'success',
                                title: 'Success!',
                                text: 'Your message here',
                                confirmButtonText: 'OK'
                            });
                        }
                    </script>

                    <!-- ... Your existing HTML content ... -->


    <div class="container">
       

        <!-- The Modal -->
        <div class="modal" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">


                @if ($message = Session::get('success'))
        <div class="alert alert-success">
         <p>{{ $message }}</p>

        </div>

    @endif

<style>
     /* Style the form */
#regForm {
  background-color: #ffffff;
  margin: 100px auto;
  padding: 40px;
  width: 70%;
  min-width: 300px;
}

/* Style the input fields */
input {
  padding: 10px;
  width: 100%;
  font-size: 17px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
}

/* Mark input boxes that gets an error on validation: */
input.invalid {
  background-color: #ffdddd;
}

/* Hide all steps by default: */
.tab {
  display: none;
}

/* Make circles that indicate the steps of the form: */
.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none;
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}

/* Mark the active step: */
.step.active {
  opacity: 1;
}

/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: #04AA6D;
} 
</style>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Check if the URL has a 'success' query parameter
        const urlParams = new URLSearchParams(window.location.search);
        if (urlParams.has('success')) {
            // Trigger SweetAlert for successful form submission
            Swal.fire({
                icon: 'success',
                title: 'Success!',
                text: 'Your registration was successful!',
                confirmButtonText: 'OK'
            });
        }
    });
</script>
<form  action="{{ route('apply.store') }}" id="regForm" method="POST">
@csrf

<h5>E|C|F application:</h5>

<!-- One "tab" for each step in the form: -->
<div class="tab">Personal Information:
  <p><input name="name" placeholder="Names.." oninput="this.className = ''"></p>
  <p><input name="nid" placeholder="National id..." oninput="this.className = ''"></p>
  <p><input name="phone" placeholder="Phone..." oninput="this.className = ''"></p>
  <p><input name="email" placeholder="email..." oninput="this.className = ''"></p>
  
  <label for="combo">Select gender:</label>
  <select name="gender" id="combo" name="combo">
    <option>Male</option>
    <option>Female</option>
    <option>Other</option>
    <!-- Add more options as needed -->
  </select>
</div>

<div class="tab">Location Information:
  <select class="combo" id="the_province_select_option" name="province" id="the_province_select_option" name="combo">
  <option selected="selected" disabled>Provice</option>
  <option selected value="-1">Select Province</option>
  </select>

  <select class="combo" id="the_district_select_option" name="district" id="the_district_select_option" name="combo">
  <option selected="selected" disabled>District</option>
  <option selected value="-1">Select District</option>
  </select>

  <select class="combo" id="the_sectors_select_option" name="sector"  id="the_sectors_select_option" name="combo">
  <option selected="selected" disabled>Sector</option>
  <option selected value="-1">Select Sector</option>
  </select>

  <select class="combo" id="the_cells_select_option" name="village"  id="the_cells_select_option" name="combo">
  <option selected="selected" disabled>Cell</option>
  <option selected value="-1">Select Cell</option>
  </select>
  <style>
    /* Apply styles to the combo box */
.combo {
  padding: 10px; /* Adjust padding as needed */
  font-size: 16px; /* Adjust font size as needed */
  border: 2px solid #ccc; /* Border color */
  border-radius: 4px; /* Optional: Rounded corners */
  background-color: #fff; /* Background color */
  color: #333; /* Text color */
  width: 280px; /* Adjust width as needed */
}

/* Style the dropdown arrow */
#combo::after {
  content: '\25BC'; /* Unicode character for down arrow */
  position: absolute;
  top: 50%;
  right: 10px;
  transform: translateY(-50%);
  pointer-events: none;
}
  </style>
</div>

<div class="tab">Requirement Info:

<label for="combo">Ubudehe:</label>
  <select id="combo" name="ubudehe">
  @foreach ($ubudehe as $ubudehe)
  <option>Select Ubudehe Category</option>
        <option>{{ $ubudehe->category}}</option>
        @endforeach
  </select>

  <label for="combo">Eduction information:</label>
  <select id="combo" name="education">
  @foreach ($education as $education)
  <option>Select Education Level</option>
        <option>{{ $education->level}}</option>
        @endforeach
  </select>

  <label for="combo">Asset Information:</label>
  <select id="combo" name="asset">
  @foreach ($asset as $asset)
  <option>Select The Type of existing asset</option>
        <option>{{ $asset->name}}</option>
        @endforeach
  </select>

  <label for="combo">Deasese Informatin:</label>
  <select id="combo" name="desease">
  @foreach ($desease as $desease)
  <option>Select Clonic Desease you have</option>
        <option>{{ $desease->name}}</option>
        @endforeach
  </select>
  </select>

  <label for="combo">Disability Information:</label>
  <select id="combo" name="disability">
  @foreach ($disability as $disability)
  <option>Select Clonic Disability you have</option>
        <option>{{ $disability->name}}</option>
        @endforeach
  </select>
  </select>
  
  <style>
    /* Apply styles to the combo box */
#combo {
  padding: 10px; /* Adjust padding as needed */
  font-size: 16px; /* Adjust font size as needed */
  border: 2px solid #ccc; /* Border color */
  border-radius: 4px; /* Optional: Rounded corners */
  background-color: #fff; /* Background color */
  color: #333; /* Text color */
  width: 280px; /* Adjust width as needed */
}

/* Style the dropdown arrow */
#combo::after {
  content: '\25BC'; /* Unicode character for down arrow */
  position: absolute;
  top: 50%;
  right: 10px;
  transform: translateY(-50%);
  pointer-events: none;
}
  </style>

</div>

<br><br>
<div style="overflow:auto;">
  <div style="float:right;">
    <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
    <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
    <input type="submit" name="submit" class="submit action-button" value="Submit" />
  </div>
</div>


<!-- Circles which indicates the steps of the form: -->
<div style="text-align:center;margin-top:40px;">
  <span class="step"></span>
  <span class="step"></span>
  <span class="step"></span>
  <span class="step"></span>
</div>

</form> 

<script>
    var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form ...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  // ... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  // ... and run a function that displays the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form... :
  if (currentTab >= x.length) {
    //...the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false:
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class to the current step:
  x[n].className += " active";
}
</script>
    <!-- Modal footer -->
    <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
    </div>

                </div>
            </div>
        </div>
    </div>

</body>
</html>

<script>
    @if(session('sweetAlert'))
        Swal.fire({
            icon: 'success',
            title: 'Success!',
            text: '{{ session('sweetAlert') }}',
            confirmButtonText: 'OK'
        });
    @endif
</script>


<script>
     // Example starter JavaScript for disabling form submissions if there are invalid fields
     (function () {
        'use strict';
        window.addEventListener('load', function () {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function (form) {
                form.addEventListener('next', function (event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');

                    
                    if(form.checkValidity() === true){
                        //enter your code here 
                        event.preventDefault();
                            var form_data = {
                                name : name_id.value,
                                username : username_id.value,
                                password : password_id.value
                            }  
                            console.log(form_data); //printing form data in Console
                            document.forms[0].reset();    //reseting the form
                            document.getElementById('myForm').classList.remove("was-validated");//reseting the form validation

                    }

                }, false);
            });
        }, false);
    })();
</script>


<div class="tab-pane fade" id="education-tab-pane" role="tabpanel" aria-labelledby="education-tab" tabindex="0">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-12 mb-4 mb-lg-3">
            <div class="custom-block bg-white shadow-lg">
                <a href="topics-detail.html">
                    <div class="d-flex">
                        <div>
                            <h5 class="mb-2">Graduation</h5>
                            <p class="mb-0">Lorem Ipsum dolor sit amet consectetur</p>
                        </div>

                        <span class="badge bg-education rounded-pill ms-auto">80</span>
                    </div>

                    <img src="images/topics/undraw_Graduation_re_gthn.png" class="custom-block-image img-fluid" alt="">
                </a>
            </div>
        </div>

        <div class="col-lg-6 col-md-6 col-12">
            <div class="custom-block bg-white shadow-lg">
                <a href="topics-detail.html">
                    <div class="d-flex">
                        <div>
                            <h5 class="mb-2">Educator</h5>

                            <p class="mb-0">Lorem Ipsum dolor sit amet consectetur</p>
                        </div>

                        <span class="badge bg-education rounded-pill ms-auto">75</span>
                    </div>

                    <img src="images/topics/undraw_Educator_re_ju47.png" class="custom-block-image img-fluid" alt="">
                </a>
            </div>
        </div>
    </div>
</div>
</div>

</div>
</div>
</section>



@endsection