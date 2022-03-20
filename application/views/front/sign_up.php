      
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth">
          <div class="row flex-grow">
            <div class="col-lg-6 mx-auto">
              <div class="auth-form-light text-left p-5">
                
                <div class="brand-logo">
                    <a href="<?= base_url() ?>home"><img class="ds-logo-width" src="<?= base_url() ?>/assets/img/logo/letusstore-logo.png" alt="logo"></a>
                  
                </div>
                <div class="alert alert-success d-none success_message">
                  <strong>Success!</strong>
                </div>
                <div class="alert alert-danger d-none failed_message">
                  <strong>Danger!</strong> 
                </div>
                <h4>New here?</h4>
                <h6 class="font-weight-light">Signing up is easy. It only takes a few steps</h6>
                
                <!-- <form class=""  onsubmit="sign_up(this)"> -->
                <form  id="letusstore_sign_up" >
                  <div class="row">
                    <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" class="form-control form-control-lg" name="company_name" id="company_name" value="" placeholder="Company Name">
                  </div>
                    </div>
                     <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" class="form-control form-control-lg" name="username" id="username" value="" placeholder="Username">
                  </div>
                    </div>
                    <div class="col-md-6">
                  <div class="form-group">
                    <input type="email" class="form-control form-control-lg" name="email" id="email" value="" placeholder="Email">
                  </div>
                    </div>
                      <div class="col-md-6">
                  <div class="form-group">
                    <select class="form-control form-control-lg" id="vendor" name="vendor" onChange="$$$(this.value)">
                      <option selected disabled>Choose Vendor Type</option>
                      <option value="Customer">Customer</option>
                      <option value="Supplier">Supplier</option>
                      <option value="Agent">Agent</option>
                      <option value="Investor">Investor</option>
                    </select>
                  </div>
                      </div>
                        <div class="col-md-6 d-none" id="region_area">
                      <div class="form-group">
                        <select class="form-control form-control-lg" id="region"  name="region">
                          <option selected disabled>Choose Region</option>
                          <option value="New Delhi">New Delhi</option>
                          <option value="Goa">Goa</option>
                          <option value="Assam">Assam</option>
                        </select>
                      </div>
                          </div>
                      <div class="col-md-6">
                  <div class="form-group">
                    <input type="password" class="form-control form-control-lg" id="password" value="" name="password" placeholder="Password">
                  </div>
                      </div>
                      <div class="col-md-6">
                  <div class="form-group">
                    <input type="password" class="form-control form-control-lg" id="confirm_password" value="" name="confirm_password" placeholder="Confirm Password">
                  </div>
                      </div>
                       <div class="col-md-6">
                  <div class="form-group">
                      <input type="number" class="form-control form-control-lg" id="mobile" value="" name="mobile" placeholder="Contact Number">
                  </div>
                       </div>
                       <div class="col-md-12"> 
                  <div class="mb-4">
                    <div class="form-check">
                      <label class="form-check-label text-muted">
                        <input type="checkbox" class="form-check-input" name="terms_and_conditions"> I agree to all Terms & Conditions </label>
                    </div>
                  </div>
                        </div>
                        <div class="col-md-12">
                 <!--  <div class="mb-4">
                    <div class="form-check">
                      <label class="form-check-label text-muted">
                        <input type="checkbox" class="form-check-input" name="remember_me"> rememer me </label>
                    </div>
                  </div> -->
                        </div>
                  <div class="col-md-12">
                  <div class="mt-3">
                    <button type="submit" name="sign_up" class=" btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn"  >SIGN UP</button>
                  </div>

                  <div class="text-center mt-4 font-weight-light "> Already have an account? <a href="<?= base_url('home/sign-in') ?>" class="text-primary">Login</a>
                  </div>
                        </div>
                    </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>


<script type="text/javascript">


 // function getRegion(vendor) {
 //     if(vendor !== 'Supplier'){ 
 //       $('#region_area').addClass('d-none');
 //     } else {
 //       $('#region_area').removeClass('d-none');
 //     }
 //  }
   
</script>