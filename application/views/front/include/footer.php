
  <footer class="footer-area business-footer">
    <div class="footer-top">
      <div class="container">
        <div class="row align-items-center justify-content-between">
          <div class="col-md-4 col-sm-12">
            <a href="<?= base_url() ?>home" class="ds-footer-logo">Let Us Store</a>
          </div>
          <div class="col-md-8 col-sm-12">
            <div class="content d-flex justify-content-center justify-content-md-between">
              <h3 class="ds-h2-new pr-3 pt-0 text-center text-md-end">Bring Your Project To Startup Today</h3>
              <a href="<?= base_url('home/contact-us') ?>" class="default-btn business-color">Contact Us <i class="fas fa-chevron-right"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container container1">
      <div class="row">
        <div class="col-md-4 col-12">
          <div class="single-footer-widget">
            <h3>Contact Details</h3>
            <ul class="footer-contact">
              <li><i class="fas fa-map-marker-alt"></i> <?= $contact_table->cu_address ?></li>
              <li>
                <?php 
                    $email = explode(' ',$contact_table->cu_email);
                    foreach ($email as $key => $value) {
                       if(!empty($value)){     
                 ?>
                <i class="far fa-envelope"></i> <a href="mail:<?= $value ?>"><span class="__cf_email__"
                    data-cfemail=""><?= $value ?></span></a><br>
                    <?php }
                        } ?>
              </li>
              <li>
                <?php 
                       $mobile = explode('|',$contact_table->cu_phone);
                       // $mobile = implode(',',$mobile);
                       foreach ($mobile as $key => $value) {
                          if(!empty($value)){    
                 ?>
                <i class="fas fa-phone-volume"></i> <a href="tel:<?= $value  ?>"><?= rtrim($value, ',') ?></a><?= ($key != count($mobile) -1)?',':''; ?>
                <?php }} ?>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-4 col-6">
          <div class="single-footer-widget pl-4">
            <h3>Useful Links</h3>
            <ul class="info-links">
              <li><a href="<?= base_url() ?>home">Home</a></li>
              <li><a href="<?= base_url() ?>home/about-us">About</a></li>
              <!-- <li><a href="<?= base_url() ?>home/gallery">Gallery</a></li> -->
              <li><a href="<?= base_url() ?>home/contact-us">Contact Us</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-4 col-6">
          <div class="single-footer-widget">
            <h3>Company</h3>
            <ul class="info-links">
             <!--  <li><a href="<?= base_url() ?>home/faqs">FAQ</a></li>
              <li><a href="<?= base_url() ?>home/news">News</a></li> -->
              <li><a href="<?= base_url() ?>home/privacy-policy">Privacy Policy</a></li>
              <li><a href="<?= base_url() ?>home/terms-and-conditions">Terms & Conditions</a></li>
            </ul>
          </div>
        </div>
        <!--<div class="col-md-3 col-6">-->
        <!--  <div class="single-footer-widget">-->
        <!--    <h3>Subscribe</h3>-->
        <!--    <p>Subscribe to receive latest news and freebies</p>-->
        <!--    <form class="newsletter-form" data-toggle="validator">-->
        <!--      <input type="email" class="input-newsletter" placeholder="Enter your email" name="EMAIL" required-->
        <!--        autocomplete="off">-->
        <!--      <button type="submit"><i class="far fa-paper-plane"></i></button>-->
        <!--      <div id="validator-newsletter" class="form-result"></div>-->
        <!--    </form>-->
        <!--  </div>-->
        <!--</div>-->
      </div>
    </div>
    <div class="copyright-area">
      <div class="container">
        <p>Copyright @2021 letusstore</p>
      </div>
    </div>
  </footer>
  <div class="go-top business-color"><i class="fas fa-chevron-up"></i></div>
 <!--  <div class="ds-rotate-me">
    <a href="<?= base_url() ?>home/storage-calculator" class="btn ds-calc-storage btn-lg ds-main-bg text-white">Calculate Storage</a>
  </div> -->
  <div class="ds-rotate-me">
    
    <button type="button" class="btn btn-primary ds-calc-storage btn-lg ds-main-bg text-white" data-toggle="modal" data-target="#request_generate">
    <!-- <button type="button" class="btn btn-primary ds-req-generate btn-lg ds-main-bg text-white" data-toggle="modal" data-target="#request_generate"> -->
        Request Generate
    </button>
  </div>

  <!-- Button trigger modal -->
 <!--  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    Launch demo modal
  </button> -->

  <!-- Modal -->
  <div class="modal fade" id="request_generate" tabindex="-1" role="dialog" aria-labelledby="request_generate" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">

        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Request Generate</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <div class="modal-body">
            <form  id="customer_service_request_front" method="post">
              <div class="card-body">
                <div id="messageForm"></div>
                <div class="row">
                 <!-- <div class="col-md-6">
                    <div class="form-group">
                      <label for="name">Request ID</label>
                      <input type="text" class="form-control" id="req_id" name="req_id" placeholder="Request Id"  >
                    </div>
                  </div> -->

                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="name">Request Info</label>
                      <!-- <input type="text" class="form-control" id="info" name="info" placeholder="Request Info"  > -->
                      <select class="form-control" name="info" id="info" required>
                         <option value="" selected disabled>Choose Service</option>
                         <?php foreach ($services as $key => $value): ?>
                           <option value="<?= $value->service_name ?>"><?= $value->service_name; ?></option>
                         <?php endforeach ?>
                      </select>
                    </div>
                  </div>

                  <div class="col-md-12">
                      <div class="form-group">
                         <label for="desc">Request Description</label>
                         <textarea class="form-control" name="desc"  rows="3" required></textarea>
                       </div>
                   </div>

                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="name">Name</label>
                      <input type="text" class="form-control" id="user_name" name="user_name" placeholder="User Name"  >
                    </div>
                  </div>

                  <div class="col-md-12">
                     <div class="form-group">
                         <label for="desc">Address</label>
                         <textarea class="form-control" name="address" id="address" rows="3"></textarea>
                       </div>
                  </div>


                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="name">City</label>
                      <input type="text" class="form-control" id="city" name="city" placeholder="City"  >
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="name">State</label>
                      <input type="text" class="form-control" id="state" name="state" placeholder="State"  >
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="name">Zip</label>
                      <input type="number"  class="form-control" id="zip" name="zip" placeholder="Zip"  >
                    </div>
                  </div>

                  <div class="col-md-8">
                    <div class="form-group">
                      <label for="email">Email</label>
                      <input type="email" class="form-control" id="email" name="email" placeholder="email"  >
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="name">Mobile</label>
                      <input type="number" class="form-control" id="mobile" name="mobile" placeholder="Mobile"  >
                    </div>
                  </div>


                 
             
            <!--       <div class="col-md-6">
                    <div class="form-group beamClass">
                      <label for="">Services</label>
                    <select name="service" id="service" class="form-control" >
                        <option value="" style="display: none;">Choose Service</option>
                          <?php foreach ($services as $key => $value): ?>
                            <option value="<?= $value->s_id ?>"><?= $value->service_name ?></option>
                          <?php endforeach ?>
                      </select>
                    </div>
                  </div>  -->
                </div>

           <!-- <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="name">Customer Image</label>
                      <div class="custom-file mb-3">
                        <input type="hidden" class="custom-file-input" id="image_page" name="image_page" value="main-section">
                          <input type="file" class="custom-file-input" id="customFile" name="filename">
                          <label class="custom-file-label" for="customFile" style="overflow:hidden;">Choose Image</label>
                      </div>
                    </div>
                  </div>


                
                </div>  --> 
            
              </div>
            
              
              <!-- /.card-body -->
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary pull-right" name>Send</button>
              </div>
              
            </form>
        </div>
        
      </div>
    </div>
  </div>

  <!-- <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script> -->
  <script data-cfasync="false" src="https://firepitsly.com/cdn-cgi/scripts/5c5dd728/Cloudflare-static/email-decode.min.js"></script>
  <script src="<?= base_url() ?>assets/js/jquery.min.js"></script>
  <script src="<?= base_url() ?>assets/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url() ?>assets/js/magnific-popup.min.js"></script>
  <script src="<?= base_url() ?>assets/js/appear.min.js"></script>
  <script src="<?= base_url() ?>assets/js/odometer.min.js"></script>
  <script src="<?= base_url() ?>assets/js/parallax.min.js"></script>
  <script src="<?= base_url() ?>assets/js/smooth-scroll.js"></script>
  <script src="<?= base_url() ?>assets/js/rangeSlider.min.js"></script>
  <script src="<?= base_url() ?>assets/js/showMoreItems.min.js"></script>
  <script src="<?= base_url() ?>assets/js/mixitup.min.js"></script>
  <script src="<?= base_url() ?>assets/js/meanmenu.min.js"></script>
  <script src="<?= base_url() ?>assets/js/owl.carousel.min.js"></script>
  <script src="<?= base_url() ?>assets/js/form-validator.min.js"></script>
  <script src="<?= base_url() ?>assets/js/contact-form-script.js"></script>
  <script src="<?= base_url() ?>assets/js/ajaxchimp.min.js"></script>
  <script src="<?= base_url() ?>assets/js/main.js"></script>
  <!-- jQuery -->
  


  <!-- // textile footer links -->
      <!-- jQuery -->
      <script src="<?= base_url(); ?>admin_assets/plugins/jquery/jquery.min.js"></script>
      <!-- jQuery UI 1.11.4 -->
      <script src="<?= base_url(); ?>admin_assets/plugins/jquery-ui/jquery-ui.min.js"></script>
      <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
      <script>
        $.widget.bridge('uibutton', $.ui.button)
      </script>
      <!-- Bootstrap 4 -->
      <script src="<?= base_url(); ?>admin_assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
      <!-- ChartJS -->
      <script src="<?= base_url(); ?>admin_assets/plugins/chart.js/Chart.min.js"></script>
      <!-- Sparkline -->
      <script src="<?= base_url(); ?>admin_assets/plugins/sparklines/sparkline.js"></script>
      <!-- JQVMap -->
      <script src="<?= base_url(); ?>admin_assets/plugins/jqvmap/jquery.vmap.min.js"></script>
      <script src="<?= base_url(); ?>admin_assets/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
      <!-- jQuery Knob Chart -->
      <script src="<?= base_url(); ?>admin_assets/plugins/jquery-knob/jquery.knob.min.js"></script>
      <!-- daterangepicker -->
      <script src="<?= base_url(); ?>admin_assets/plugins/moment/moment.min.js"></script>
      <script src="<?= base_url(); ?>admin_assets/plugins/daterangepicker/daterangepicker.js"></script>
      <!-- Tempusdominus Bootstrap 4 -->
      <script src="<?= base_url(); ?>admin_assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
      <!-- Summernote -->
      <script src="<?= base_url(); ?>admin_assets/plugins/summernote/summernote-bs4.min.js"></script>
      <!-- overlayScrollbars -->
      <script src="<?= base_url(); ?>admin_assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
      <!-- AdminLTE App -->
      <script src="<?= base_url(); ?>admin_assets/dist/js/adminlte.js"></script>
      <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
      <script src="<?= base_url(); ?>admin_assets/dist/js/pages/dashboard.js"></script>
      <!-- AdminLTE for demo purposes -->
      <script src="<?= base_url(); ?>admin_assets/dist/js/custom.js"></script>


      <script src="<?= base_url() ?>admin_assets/plugins/datatables/jquery.dataTables.js"></script>
      <script src="<?= base_url() ?>admin_assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
      <script src="<?= base_url() ?>admin_assets/plugins/toastr/toastr.min.js"></script>
      <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>      
      <!-- <script src="<?= base_url()?>admin_assets/dist/js/jquery.timeselector.js"></script> -->
        

            <script type="text/javascript">

                // console.log('sdfldjff');
                // // $("button.sFilter:first").addClass("active");
                // // document.querySelector(".sFilter").firstElementChild.classList.add("active");
                // // console.log(document.querySelector(".fContent").contains('active'));
                // // if($('.fContent').hasClass('active')){
                // //   $('.fContent').show();
                // // } else {
                // //   $('.fContent').css('display','none');
                // // }

                // console.log('hii');

                $(document).ready(function(){
                  const check = $('.filterDataActive').attr('data-filter')
                  $('.fContent').addClass('d-none')
                  $(`${check}`).removeClass('d-none')
                  $('.shorting-menu').find('.filter').first().addClass('active');
                })

                $('.sFilter').click(function(){
                   const check = $(this).attr('data-filter')
                   $('.shorting-menu').find('.filter').removeClass('active');
                   $('.fContent').addClass('d-none')
                    $(`${check}`).removeClass('d-none')
                    $(this).addClass('active')
                })

            </script>                                                                      


    <script>
        var inc = document.getElementsByClassName("stepper");
        for (i = 0; i < inc.length; i++) {
            var incI = inc[i].querySelector("input"),
                id = incI.getAttribute("id"),
                min = incI.getAttribute("min"),
                max = incI.getAttribute("max"),
                step = incI.getAttribute("step");
            document
                .getElementById(id)
                .previousElementSibling.setAttribute(
                "onclick",
                "stepperInput('" + id + "', -" + step + ", " + min + ")"
            );
            document
                .getElementById(id)
                .nextElementSibling.setAttribute(
                "onclick",
                "stepperInput('" + id + "', " + step + ", " + max + ")"
            );
        }

        function stepperInput(id, s, m) {
            var el = document.getElementById(id);
            if (s > 0) {
                if (parseInt(el.value) < m) {
                    el.value = parseInt(el.value) + s;
                }
            } else {
                if (parseInt(el.value) > m) {
                    el.value = parseInt(el.value) + s;
                }
            }
        }


     $(function() {   
     $('.substractSquareFeet').on('click',function (e) {
         e.preventDefault();
         // 144 calculator

         let productInputValue = $(this).next().val();
         let squarefeet_minimum = $('#squarefeet_minimum').html();
         let squarefeet_maximum = $('#squarefeet_maximum').html();
          
         if(squarefeet_minimum == 0 || squarefeet_maximum == 20){
            return false;
         }
          
         let url = $('meta[name=url]').attr("content");
         
         let product_name = $(this).attr("data-id");

         let data = new FormData();
         data.append('product_name',product_name);
         data.append('squarefeet_minimum',squarefeet_minimum);
         data.append('squarefeet_maximum',squarefeet_maximum);

         ajax(url+"home/substract-square-feet", data).then(function(result){
           if(result) {
            setTimeout(()=>{
              $('#squarefeet_minimum').html(result.squarefeet_minimum);
              $('#squarefeet_maximum').html(result.squarefeet_maximum);
             // window.location.reload()
             },3000);
           }
           else {
             $('#messageForm').html('<div class="alert alert-danger">'+result.msg+'</div>');
             // $('#mobileror').html(result);
           }
           // window.location.reload()
         }).catch(function(e){
           console.log(e)
         })

        })    


      $('.additionSquareFeet').on('click', function(e) {
         e.preventDefault();
         let productInputValue = $(this).prev().val();
         let squarefeet_minimum = $('#squarefeet_minimum').html();
         let squarefeet_maximum = $('#squarefeet_maximum').html();
         // alert(squarefeet_minimum);
         // alert(squarefeet_maximum);
         // return false;
         if(productInputValue == 100 ){
            return false;
         }

         let url = $('meta[name=url]').attr("content");
                   
         let product_name = $(this).attr("data-id");

         let data = new FormData();
         data.append('product_name',product_name);
         data.append('squarefeet_minimum',squarefeet_minimum);
         data.append('squarefeet_maximum',squarefeet_maximum);

         ajax(url+"home/addition-square-feet", data).then(function(result) {
           if(result){
            setTimeout(()=>{
              $('#squarefeet_minimum').html(result.squarefeet_minimum);
              $('#squarefeet_maximum').html(result.squarefeet_maximum);
             // window.location.reload()
           },3000);
           }
           else {
             $('#messageForm').html('<div class="alert alert-danger">'+result.msg+'</div>');
             // $('#mobileror').html(result);
           }
           // window.location.reload()
         }).catch(function(e){
           console.log(e)
         })

        })


      $('#user_square_feet_calculator').on('submit', function(e) {
         e.preventDefault();
              const calDetail = []
               $.each($('.stepperClassAdded'),function(){
              const calName = $(this).parent().prev().text();  
              const sqFeet = $(this).val();
              const obj = {calName,sqFeet}
              if(parseInt(sqFeet) !== 0) calDetail.push(obj);
            })
            
            // console.log(calDetail);
         let squarefeet_minimum = $('#squarefeet_minimum').html();
         let squarefeet_maximum = $('#squarefeet_maximum').html();
         let url = $('meta[name=url]').attr("content");
         // let product_name = $(this).attr("data-id");
         // data.append('product_name',product_name);
         let data = new FormData(this);
         data.append('squarefeet_minimum',squarefeet_minimum);
         data.append('squarefeet_maximum',squarefeet_maximum);
         data.append('calDetail',JSON.stringify(calDetail));

         ajax(url+"home/insert-user-square-feet-calculator", data).then(function(result) {
           if(result){
              $('#messageForm').html('<div class="alert alert-success">'+result.msg+'</div>');    
              setTimeout(()=>{
                window.location.reload();
              },3000);        
             
           }
           else{
             $('#messageForm').html('<div class="alert alert-danger">'+result.msg+'</div>');
             setTimeout(()=>{
               window.location.reload();
             },3000);        
             // $('#mobileror').html(result);
           }
           
         }).catch(function(e){
           console.log(e)
         })
        })


      $('.st').click(function(){
          // var id = $(this li).attr('aria-controls');
          // alert(id);
          console.log(this);
      });

    });

    </script>
    <script>
        $(function() {
          $('input[name="doj"]').daterangepicker({
            singleDatePicker: true,
            showDropdowns: true,
            minYear: 1901,
            maxYear: parseInt(moment().format('YYYY'),10)
          });
        });
    </script>


    <script type="text/javascript">
      $(document).ready(function() {
        $('#tbl_id').dataTable({
            "aLengthMenu": [[25, 50, 75, -1], [25, 50, 75, "All"]],
            "iDisplayLength": 75
        });
    } );
    </script>
    <script>

    // Add the following code if you want the name of the file appear on select
    $(".custom-file-input").on("change", function() {
      var fileName = $(this).val().split("\\").pop();
      // alert(fileName);
      // return false;
      $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
      // var src = $(this).val();
      // $("#imagePreview").html(filename ? "<img src='" + filename + "'>" : "");
    });

    
    
      $("#myFaqInput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $(".accordion-button").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });
    </script>

 

    <script>
      $('#customer_service_request_front').on('submit' , function (e) {
        e.preventDefault();
            let url = $('meta[name=url]').attr("content");
            let data = new FormData($(this).get(0))
            $.ajax({
                    url: url+"common/insert_customer_service_request",
                    type: "POST",
                    data: data,
                    dataType: 'JSON',
                    cache: false,
                    processData:false,
                    contentType:false,
                    success: function(dataResult){
                      if(dataResult.result){
                              $('#request_generate .close').click();
                              Swal.fire({
                                title: '<span class="text-primary">Thank you</span> for your request generation. we\'ll contact you soon.',
                                icon: 'success',
                                showClass: {
                                  popup: 'animate__animated animate__fadeInDown'
                                },
                                hideClass: {
                                  popup: 'animate__animated animate__fadeOutUp'
                                }
                              })
                         } else {
                          Swal.fire({
                            title: dataResult.msg,
                            icon: 'warning',
                            showClass: {
                              popup: 'animate__animated animate__fadeInDown'
                            },
                            hideClass: {
                              popup: 'animate__animated animate__fadeOutUp'
                            }
                          })
                         }     
                          
                    }
                  });
               

        //   ajax(url+"customer/insert_customer_service_request", data).then(function(result) {
        //       console.log('hiii');
        //       console.log(result);
        //       return false;
        //   if(result.result){
        //     window.location.reload()
        //   } else {
        //     $('#messageForm').html('<div class="alert alert-danger">'+result.msg+'</div>');
        //     // $('#mobileror').html(result);
        //   }
        //   // window.location.reload()
        // })
       })
    </script>




</body>

</html>