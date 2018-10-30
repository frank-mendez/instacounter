<?php 

include('includes/header.php');

?>
   

    <div class="container mt-50">

      <div class="row">
        <div class="col">
          <form>
            <div class="form-group">
              <label for="services">Select Service</label>
              <select name="select-sevices" class="form-control" id="services">
                <option value="" selected="">-- Select --</option>
                <option value="social-media-management">Social Media Management</option>
                <option value="social-media-ads">Social Media Ads</option>
                <option value="wordpress">WordPress Builds</option>
                <option value="blogs">Blogs</option>
                <option value="email">Email Blash</option>
                <option value="flyer">Flyer and Pamphlet Design</option>
                <option value="seo">SEO</option>
                <option value="branding">Branding</option>
                <option value="google-adwords-it">Google Adwords</option>
              </select>
            </div>
          </form>
        </div>
      </div>

      <div class="row services-row hidden" id="social-media-management">
        <div class="col">
          <h2>Social Media Management</h2>
        </div>
      </div>

      <div class="row services-row hidden" id="social-media-ads">
        <div class="col">
          <h2>Social Media Ads</h2>
        </div>
      </div>

      <div class="row services-row hidden" id="wordpress">
        <div class="col">
          <h2>WordPress Builds</h2>
        </div>
      </div>

      <div class="row services-row hidden" id="blogs">
        <div class="col">
          <h2>Blogs</h2>
        </div>
      </div>

      <div class="row services-row hidden" id="email">
        <div class="col">
          <h2>Email Blash</h2>
        </div>
      </div>

      <div class="row services-row hidden" id="flyer">
        <div class="col">
          <h2>Flyer and Pamphlet Design</h2>
        </div>
      </div>

      <div class="row services-row hidden" id="seo">
        <div class="col">
          <h2>SEO</h2>
        </div>
      </div>

      <div class="row services-row hidden" id="google-adwords-it">
        <div class="col">
          <h2>Google Adwords</h2>
        </div>
      </div>

      <div class="row services-row hidden" id="branding">
        <div class="col">
          <h2>Branding</h2>
        </div>
      </div>

    </div>

   
<?php 

include('includes/footer.php');

?>