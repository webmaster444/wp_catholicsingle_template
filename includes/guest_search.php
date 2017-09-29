<!-- Form Section -->
<div class="form-section-wrapper">
  <div class="grid-container">
    <div class="grid-40 prefix-50 suffix-10 form-box search-box tablet-grid-60 tablet-prefix-40 hide-on-mobile">
      <form method="POST" action="https://app.catholicsingles.com/cgi-bin/guest_search.cgi">
        <div class='group align-center'>
          I am:
          <label class="gender" for="my_gender"> <input type="radio" name="my_gender" value="M"> Male </label>
          <label class="gender" for="my_gender"> <input type="radio" name="my_gender" value="F"> Female </label>
        </div>
        <div class='group align-center'>
          and would like to meet someone between
        </div>
        <div class='group align-center'>
          <div class="styled-select alt up small inline-block">
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
          My zip code is:
          <input type="text" name="zip" class="zip">
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
