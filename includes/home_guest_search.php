<!-- Form Section -->
<div class="form-section-wrapper fluid_width" id="signup_widget">
  <div class="grid-container">
    <div class="grid-90 prefix-5 form-box search-box tablet-grid-60 tablet-prefix-40 hide-on-mobile">
      <form method="POST" action="https://app.catholicsingles.com/cgi-bin/guest_search.cgi">
        <h1 class="tag_line cwhite"> Find Your Love & Faith </h1>
        <div class='group align-center'>
          <h1 class="widget_title  text-center">Get Started! Create A Free Account:</h1>
        </div>
        <div id="login_btns_section" class="text-center">
        <a href="#" class="btn btn-blue" id="fb_login_btn"><img src="<?php echo get_template_directory_uri();?>/images/fb256.png" alt="Login with Facebook" width='20px'>Login with Facebook</a>
        <a href="#" class="btn btn-google-img btn-white" > <img src="<?php echo get_template_directory_uri();?>/images/google256.png" alt="Login with Facebook" width='20px'> Login with Google</a>
        </div>
        <h2 class="split"><span>Or signup via email</span></h2>
        <div class="mail-signup-wrapper">
        <div class="group align-center">
          <div class="grid-33 table-grid-33" style="text-align:left">
            <input type='email' name='email' placeholder="Email" />
          </div>
          <div class="grid-33 table-grid-33">
            <input type='password' name='password' placeholder="Password" />
          </div>
          <div class="grid-33 table-grid-33">
            <input type="text" name="zip" class="zip" placeholder="Zip Code">
          </div>
          <div class="clearfix"></div>
        </div>
        <div class='group align-center' style="margin-top:30px;">
          <div class="grid-40 table-grid-40 text-left" id="birthday_wrapper">
          <label> Birthday </label>
          <div class="dropdown" id="month_dropdown">
            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
              Jan
              <span class="caret"></span>
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
              <li><a href="#">Jan</a></li>
              <li><a href="#">Feb</a></li>
              <li><a href="#">Mar</a></li>
              <li><a href="#">Apr</a></li>
              <li><a href="#">Mar</a></li>
              <li><a href="#">May</a></li>
              <li><a href="#">Jun</a></li>
              <li><a href="#">Jul</a></li>              
              <li><a href="#">Aug</a></li>
              <li><a href="#">Sep</a></li>
              <li><a href="#">Oct</a></li>
              <li><a href="#">Nov</a></li>
              <li><a href="#">Dec</a></li>
            </ul>
          </div>

          <div class="dropdown" id="day_dropdown">
            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
              1
              <span class="caret"></span>
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
              <?php foreach(range(1, 31) as $number): ?>
                <li> <a href="#"><?php print $number ?></a></li>
              <?php endforeach; ?>
            </ul>
          </div>

          <div class="dropdown" id="year_dropdown">
            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
              1980
              <span class="caret"></span>
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
              <?php foreach(range(1980, 2017) as $number): ?>
                <li> <a href="#"><?php print $number ?></a></li>
              <?php endforeach; ?>
            </ul>
          </div>            
          </div>
          
          <div class="grid-30 table-grid-30">
          <input type="text" name="username" placeholder="Username" style="height:38px"/>
          </div>

          <div class="grid-30 table-grid-30 mail-signup-btn">
          <a href="#next" class="btn btn-filled">Next</a>
          </div>
          <div class="clearfix"> </div>
        </div>
        </div>
      </form>
    </div>


    <div class="start-search hide-on-desktop hide-on-tablet mobile-grid-100">
      <a href="https://app.catholicsingles.com/cgi-bin/members_secure_signup_1.cgi" class="btn alt">Search for Catholic Singles!</a>
    </div>

    <div class="join-for-free hide-on-desktop hide-on-tablet mobile-grid-100">
      <a href="https://app.catholicsingles.com/cgi-bin/members_secure_signup_1.cgi" class="btn">Join for FREE</a>
    </div>
  </div>
</div>
<!-- End Form Section -->
