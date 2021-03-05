<!DOCTYPE html>
<html lang="en">
<head>
	
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Register</title>
</head>
<body>

<section id="topbar" class="d-none d-lg-block">
    <div class="container clearfix">
      <div class="contact-info float-left">
        <i class="fa fa-envelope-o"></i> <a href="mailto:contact@example.com">contact@example.com</a>
        <i class="fa fa-phone"></i><a href="#">+1 5589 55488 55</a>
      </div>
      <div class="social-links-1 float-right">
       
        <a href="login.html">Log In</a>
        <a href="register.html">Register</a>
      </div>
    </div>
  </section>

<header class="header-sec">
    <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand" href="#">EDU<span>CATion</span></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse main-menu" id="navbarSupportedContent">
   <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.html">About Us</a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="cource.html">Courses</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="gallery.html">Gallery</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.html">Contact Us</a>
      </li>

    </ul>

  </div>
</nav>
</div>
</header>

<!-- --------breadcrum are start---------- -->

    <div class="breadcrumb-banner-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="breadcrumb-text">
                                    <h1 class="text-center">REGISTER</h1>
                                    <div class="breadcrumb-bar">
                                        <ul class="breadcrumb text-center">
                                            <li><a href="index.html">Home</a></li>
                                            <li><i class="fa fa-angle-double-right" aria-hidden="true"></i></li>
                                            <li>REGISTER</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


<!-- --------breadcrum are end---------- -->      

<section class="checkout-section ptb-80">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-8 col-md-8 ">
                  <div class="row">
                    <div class="col-12">
                      <div class="heading-part heading-bg">
                        <h2 class="heading">Create your account</h2>
                      </div>
                    </div>
                  </div>
                  <form action="#" class="main-form full fancy-form" autocomplete="off" method="Post" id="frmPinCode">
                    <div class="personal-details mb-30">
                      <div class="row">
                        <div class="col-12 mb-30 mb-xs-15">
                          <div class="heading-part">
                            <h3 class="sub-heading mb-30 mb-xs-15">Your Personal Details</h3>
                          </div>
                          <hr>
                        </div>
                        <div class="col-12">
                          <div class="input-box">
                            <div class="row">
                              <label for="f-name" class="col-md-3 control-label">First Name</label>
                              <div class="col-md-9">
                                <input type="text" class="form-control" id="f-name" required placeholder="First Name">
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-12">
                          <div class="input-box">
                            <div class="row">
                              <label for="l-name" class="col-md-3 control-label">Last Name</label>
                              <div class="col-md-9">
                                <input type="text" class="form-control" id="l-name" required placeholder="Last Name">
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-12">
                          <div class="input-box">
                            <div class="row">
                              <label for="login-email" class="col-md-3 control-label">Email address</label>
                              <div class="col-md-9">
                                <input type="email" class="form-control" id="login-email" required placeholder="Email address">
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-12">
                          <div class="input-box">
                            <div class="row">
                              <label for="telephone" class="col-md-3 control-label">Telephone</label>
                              <div class="col-md-9">
                                <input type="text" class="form-control" id="telephone" required placeholder="Telephone">
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-12">
                          <div class="input-box mb-0">
                            <div class="row">
                              <label for="fax" class="col-md-3 control-label">Fax</label>
                              <div class="col-md-9">
                                <input type="text" class="form-control" id="fax" required placeholder="Fax">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <br>
                    <div class="your-address mb-30">
                      <div class="row">
                        <div class="col-12 mb-30 mb-xs-15">
                          <div class="heading-part">
                            <h3 class="sub-heading mb-30 mb-xs-15">Your Address</h3>
                          </div>
                          <hr>
                        </div>
                        <div class="col-12">
                          <div class="input-box">
                            <div class="row">
                              <label for="input-company" class="col-md-3 control-label">Company</label>
                              <div class="col-md-9">
                                <input type="text" class="form-control" id="input-company" required placeholder="Company">
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-12">
                          <div class="input-box">
                            <div class="row">
                              <label for="input-address-1" class="col-md-3 control-label">Address 1</label>
                              <div class="col-md-9">
                                <input type="text" class="form-control" id="input-address-1" required placeholder="Address 1">
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-12">
                          <div class="input-box">
                            <div class="row">
                              <label for="input-address-2" class="col-md-3 control-label">Address 2</label>
                              <div class="col-md-9">
                                <input type="text" class="form-control" id="input-address-2"  placeholder="Address 2">
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- <div class="col-12">
                          <div class="input-box">
                            <div class="row">
                              <label for="input-city" class="col-md-3 control-label">City</label>
                              <div class="col-md-9">
                                <input type="text" class="form-control" id="input-city" required placeholder="City">
                              </div>
                            </div>
                          </div>
                        </div> -->
                        
                        <div class="col-12">
                          <div class="input-box">
                            <div class="row city-wrap">
                              <label class="col-md-3 control-label" for="city">Select City</label>
                              <div class="col-md-9">
                                <input type="text" name="city" class="textbox" id="city">
                             <!--    <fieldset>
                                  <select name="shippingCountryId" id="shippingcountryid" class="option-drop form-control">
                                    <option selected="" value="">Select Country</option>
                                    <option value="AX">Aland Islands</option>
                                    <option value="AF">Afghanistan</option>
                                    <option value="AL">Albania</option>
                                    <option value="DZ">Algeria</option>
                                    <option value="AS">American Samoa</option>
                                    <option value="AD">Andorra</option>
                                    <option value="AO">Angola</option>
                                    <option value="AI">Anguilla</option>
                                    <option value="AQ">Antarctica</option>
                                    <option value="AG">Antigua and Barbuda</option>
                                    <option value="AR">Argentina</option>
                                    <option value="AM">Armenia</option>
                                    <option value="AW">Aruba</option>
                                    <option value="AU">Australia</option>
                                    <option value="AT">Austria</option>
                                    <option value="AZ">Azerbaijan</option>
                                    <option value="BS">Bahamas</option>
                                    <option value="BH">Bahrain</option>
                                    <option value="BD">Bangladesh</option>
                                    <option value="BB">Barbados</option>
                                    <option value="BY">Belarus</option>
                                    <option value="PW">Belau</option>
                                    <option value="BE">Belgium</option>
                                    <option value="BZ">Belize</option>
                                    <option value="BJ">Benin</option>
                           
                                  </select>
                                </fieldset> -->
                                
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-12">
                          <div class="input-box select-dropdown mb-0">
                            <div class="row state-wrap">
                              <label class="col-md-3 control-label" for="state">Select a State</label>
                              <div class="col-md-9">
                                <input type="text" name="state" class="textbox" id="state">
                                <!-- <fieldset>
                                  <select name="registerstateId" class="option-drop form-control" id="registerstateid">
                                    <option value="">Select a State</option>
                                    <option value="AP">Andhra Pradesh</option>
                                    <option value="AR">Arunachal Pradesh</option>
                                    <option value="AS">Assam</option>
                                    <option value="BR">Bihar</option>
                                    <option value="CT">Chhattisgarh</option>
                                    <option value="GA">Goa</option>
                                    <option value="GJ">Gujarat</option>
                                    <option value="HR">Haryana</option>
                                    <option value="HP">Himachal Pradesh</option>
                                    <option value="JK">Jammu and Kashmir</option>
                                    <option value="JH">Jharkhand</option>
                                    <option value="KA">Karnataka</option>
                                    <option value="KL">Kerala</option>
                                    <option value="MP">Madhya Pradesh</option>
                                    <option value="MH">Maharashtra</option>
                                    <option value="MN">Manipur</option>
                                   
                                  </select>
                                </fieldset> -->
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-12">
                          <div class="input-box">
                            <div class="row zip-wrap">
                              <label for="input-postcode" class="col-md-3 control-label" for="zip">Post Code</label>
                              <div class="col-md-9">
                                <input type="text" pattern="[0-9]*" maxlength="5" required class="form-control textbox" name="zip" id="zip input-postcode" required placeholder="Enter-Pincode" autocomplete="new-password">
                                <p class="zip-error">Not a real zip code.</p>
                              </div>
                             
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <fieldset>
    <legend>Address</legend>
    <p class="instructions">Start by entering your zip code.</p>
    <div>
      <div>
        <input type="text" name="address-line-1" id="address-line-1">
        <label for="address-line-1">Street #1</label>
      </div>
    </div>
    <div>
      <div>
        <input type="text" name="address-line-2" id="address-line-2">
        <label for="address-line-2">Street #2</label>
      </div>
    </div>
    <div>
      <div class="city-wrap">
        <input type="text" name="city" id="city">
        <label for="city">City</label>
      </div>
      <div class="state-wrap">
        <input type="text" name="state" id="state">
        <label for="state">State</label>
      </div>
      <div class="zip-wrap">
        <input type="text" pattern="[0-9]*" maxlength="5" required name="zip" id="zip">
        <label for="zip">Zip</label>
        <p class="zip-error">Not a real zip code.</p>
      </div>
    </div>

    <div class="submit-wrap">
      <input type="submit" value="Submit">
    </div>

  </fieldset>
                    
                    <br>
                    <div class="your-address">
                      <div class="row">
                        <div class="col-12 mb-30 mb-xs-15">
                          <div class="heading-part">
                            <h3 class="sub-heading mb-30 mb-xs-15">Your Password</h3>
                          </div>
                          <hr>
                        </div>
                        <div class="col-12">
                          <div class="input-box">
                            <div class="row">
                              <label for="login-pass" class="col-md-3 control-label">Password</label>
                              <div class="col-md-9">
                                <input type="password" class="form-control" id="login-pass" required placeholder="Enter your Password">
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-12">
                          <div class="input-box">
                            <div class="row">
                              <label for="re-enter-pass" class="col-md-3 control-label">Re-enter Password</label>
                              <div class="col-md-9">
                                <input id="re-enter-pass" type="password" required placeholder="Re-enter your Password">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="Submit-btn">
                      <div class="row">
                        <div class="col-12 mb-30 mb-xs-15">
                          <div class="check-box left-side"> 
                            <span>
                              <input type="checkbox" name="remember_me" id="remember_me" class="checkbox">
                              <label for="remember_me">Remember Me</label>
                            </span>
                          </div>
                          <button name="submit" type="submit" class="btn-color right-side">Submit</button>
                        </div>
                        <div class="col-12">
                          <hr>
                          <div class="new-account align-center mt-30 mt-xs-15"> 
                            <span>Already have an account with us</span> 
                            <a class="link" title="Register with Alcoholic" href="login.html">Login Here</a> 
                          </div>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>











<footer class="footer-section">
    <div class="container">
        <p>Copyright  2020 . Made By Sujata Tarale</p>
    </div>
</footer>



<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
     <script type="text/javascript" src="js/custom.js"></script>
     <script type="text/javascript" src="js/counter.js"></script>
<script>
  function is_int(value) {
  if ((parseFloat(value) == parseInt(value)) && !isNaN(value)) {
    return true;
  } else {
    return false;
  }
}



$("#zip").keyup(function() {

  // Cache
  var el = $(this);

  // Did they type five integers?
  if ((el.val().length == 5) && (is_int(el.val()))) {

    // Call Ziptastic for information
    $.ajax({
      url: "https://zip.getziptastic.com/v2/US/" + el.val(),
      cache: false,
      dataType: "json",
      type: "GET",
      success: function(result, success) {

        $(".zip-error, .instructions").slideUp(200);

        $("#city").val(result.city);

        $("#state").val(result.state);

        $(".fancy-form div > div").slideDown();

        $("#zip").blur();
        $("#address-line-1").show().focus();

      },
      error: function(result, success) {

        $(".zip-error").slideDown(300);

      }

    });

  } else if (el.val().length < 5) {

    $(".zip-error").slideUp(200);

  };

});
</script>



 <script src="js/wow.min.js"></script>
 
              <script>
              new WOW().init();
              </script>



</body>
</html> 