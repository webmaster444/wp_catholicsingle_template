<!-- Form Section -->

<div class="form-section-wrapper">
  <div class="grid-container">
    <div class="grid-80 prefix-10 form-box search-box tablet-grid-60 tablet-prefix-40 hide-on-mobile">      
      <form method="POST" action="https://app.catholicsingles.com/cgi-bin/guest_search.cgi">
        <h1 class="tag_line cwhite"> Find Your Love & Faith </h1>
        <div class='group align-center'>
          <h1 class="section_title">Get Started! Create A Free Account:</h1>          
        </div>        
        <div class="group align-center">
          <div class="grid-33 table-grid-33">
            <input type='text' name='email' placeholder="Email" />
          </div>
          <div class="grid-33 table-grid-33">
            <input type='password' name='password' placeholder="Password" />
          </div>
          <div class="grid-33 table-grid-33">
            <input type="text" name="zip" class="zip" placeholder="Zip Code">
          </div>
        </div>
        <div class='group align-center'>
          <div class="grid-33 table-grid-33">
            <select name="age_min">
              <?php foreach(range(18, 99) as $number): ?>
                <option value="<?php print $number ?>"><?php print $number ?></option>
              <?php endforeach; ?>
            </select>
          </div>
          <label class="and"> and </label>
          <div class="styled-select alt small inline-block">
            <select name="age_max">
              <?php foreach(range(18, 99) as $number): ?>
                <option value="<?php print $number ?>"><?php print $number ?></option>
              <?php endforeach; ?>
            </select>
          </div>
        </div>
        <div class='group align-center'>          
          <input type="text" name="zip" class="zip" placeholder="Zip Code">
        </div>
        <div class='group align-center'>
          <input type="submit" class="btn alt medium heart" value="Show me some Catholic Singles!">
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
