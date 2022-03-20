
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth">
          <div class="row flex-grow ">
            <div class="col-lg-4 offset-4 ">
              <div class="auth-form-light text-left p-5 " id="login" >
                <div class="brand-logo" >
                  <a href="<?= base_url() ?>home"><img class="ds-logo-width" src="<?= base_url() ?>/assets/img/logo/letusstore-logo.png" alt="logo"></a>
                </div>
                <div class="alert alert-success d-none success_message">
                  <strong>Success!</strong>
                </div>
                <div class="alert alert-danger d-none failed_message">
                  <strong>Danger!</strong> 
                </div>
                <h4>Hello! let's get started</h4>
                <h6 class="font-weight-light">Sign in to continue.</h6>
                <form class="pt-3 " id="letusstore_sign_in" >
                  <div class="form-group">
                    <input type="email" class="form-control form-control-lg" id="email" placeholder="Email" name="email">
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control form-control-lg" id="password" placeholder="Password" name="password">
                  </div>
                  <div class="mt-3">
                    <button type="submit" name="sign_in" id="sign_in" class=" btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn" >SIGN IN</button>
                  </div>
                 </form> 
                  <div class="my-2 d-flex justify-content-between align-items-center">
                    <div class="form-check">
                      <label class="form-check-label text-muted">
                        <input type="checkbox" class="form-check-input"> Keep me signed in </label>
                    </div>
                  <!--   <button type="button" onClick="email()" class="auth-link text-black" >Forgot Passwords</button> -->

                    <a href="#" onClick="email()" class="auth-link text-black">Forgot password?</</a>
                    <a href="#" data-toggle="modal" data-target="#change_password" id="ch" class="auth-link text-black d-none">Change password?</</a>
                  </div>
                        <!-- <div class="mb-2">
                          <button type="button" class="btn btn-block btn-facebook auth-form-btn">
                            <i class="mdi mdi-facebook mr-2"></i>Connect using facebook </button>
                        </div> -->
                  <div class="text-center mt-4 font-weight-light"> Don't have an account? <a href="<?= base_url('home/sign-up') ?>" class="text-primary">Create</a>
                  </div>
                
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

    <!-- Modal -->
    <div class="modal fade" id="change_password" tabindex="-1" role="dialog" aria-labelledby="request_generate" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">

          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Change Password</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

          <div class="modal-body">
              
                <div class="card-body">
                  <div id="messageForm"></div>
                  <form  id="change_password">
                  <div class="row">
                   <input type="hidden" class="form-control" id="email2" name="email2" placeholder="Email"  >
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="name">New Password</label>
                        <input type="text" class="form-control" id="new_password" name="new_password" placeholder="New Password"  >
                      </div>
                    </div>

                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="name">Confirm Password</label>
                        <input type="text" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirm Password"  >
                      </div>
                    </div>
              
                </div>
              
                
                <!-- /.card-body -->
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary pull-right" name="submit">Change Password</button>
                </div>
                
              </form>
          </div>
          
        </div>
      </div>
    </div>
    
<script>
    window.addEventListener('load', (event) => {
      const queryString = location.href;
          // console.log(document.URL);
      const urlParams = new URLSearchParams(queryString);
      const email = urlParams.get('email');
      const msg = urlParams.get('msg');
      console.log(email);
       if(email != null) {
           document.getElementById("email2").value = email;
           document.getElementById("ch").click();
       }
      });
</script>
