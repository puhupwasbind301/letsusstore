// Puhupwas Starts
 $(document).ready(() => {

 const shake = ({...param}) => {
        console.log(param.id);
         const $$ = document.querySelector(param.id), interval = param.interval, distance = param.distance, times = param.times;
         $($$).css('position', 'relative');
         for (var iter = 0; iter < (times + 1) ; iter++) {
             $($$).animate({
                 left: ((iter % 2 == 0 ? distance : distance * -1))
             }, interval);
         }                                                                                                          
         $($$).animate({ left: 0 }, interval);
     }

 const enquiry_form = () => { 
     Swal.fire({
       title: 'Thank you for registering as Investor. we\'ll contact you soon.',
       icon: 'success',
       showClass: {
         popup: 'animate__animated animate__fadeInDown'
       },
       hideClass: {
         popup: 'animate__animated animate__fadeOutUp'
       }
     })
 }

 const success = msg => { 
     Swal.fire({
       title: msg,
       icon: 'success',
       showClass: {
         popup: 'animate__animated animate__fadeInDown'
       },
       hideClass: {
         popup: 'animate__animated animate__fadeOutUp'
       }
     })
 }

 const failure = msg => { 
     Swal.fire({
       title: msg,
       icon: 'warning',
       showClass: {
         popup: 'animate__animated animate__fadeInDown'
       },
       hideClass: {
         popup: 'animate__animated animate__fadeOutUp'
       }
     })
 }



 // $(document).on('click','#forgot_password', e => {
 //    e.preventDefault();
 //    alert('iiii');
 //    email();
 // }

      

$('#letusstore_sign_up').on('submit', e => {
 e.preventDefault();
     let url = $('meta[name=url]').attr("content");
     // let data = new FormData($(this).get(0))
     // console.log($('#letusstore_sign_up').serializeArray());
     // return false;
     $.ajax({
      url:url+"login/auth_vendor/register",
      type:'POST',
      dataType:'json',
      data:$('#letusstore_sign_up').serializeArray(),
      cache: false,
      // contentType: false,
      // processData: false, 
      beforeSend: () => {
          $('.success_message').html("<strong>Success!</strong>");
          $('.failed_message').html("<strong>Danger!</strong>");
         },  
      success: function(result){
      if(result.status) {
          $('.success_message').removeClass('d-none');
          $('.success_message strong').after(' ' +result.message);
          setTimeout(() => {
              if(result.vendor === 'Investor'){
                enquiry_form();
              } else {    
                $('.success_message').addClass('d-none');
                window.open(url+result.vendor.toLowerCase(),'_self');
              }   
           },3000);
          
          // return false;
        } else {
          $('.failed_message').removeClass('d-none');
          // $('.failed_message strong::after').html(' '+result.message);
          $('.failed_message strong').after(' '+result.message);
          
          setTimeout(() => {
             $('.failed_message').addClass('d-none');
           },3000);
        }


      }
 });
})

 $(document).on('submit','#letusstore_sign_in', e => {
 e.preventDefault();
 
     let url = $('meta[name=url]').attr("content");
     // let data = new FormData($(this).get(0))
    
     $.ajax({
      url:url+"login/auth_vendor/login",
      method:'POST',
      dataType:'json',
      data:$('#letusstore_sign_in').serializeArray(),
      cache: false,
      beforeSend: () => {
          $('#sign_in').html("connecting...");
          // $('.success_message').nextAll('strong').remove();
          // $('.success_message').not(':first').siblings().remove();
          $('.success_message').html("<strong>Success!</strong>");
          $('.failed_message').html("<strong>Danger!</strong>");
         },
      success: function(result){
        // console.log(url+result.vendor.toLowerCase());
        // console.log(result.vendor.toLowerCase());
        // console.log(result);
        // return false;
        if(result.status){
          $('.success_message').removeClass('d-none');
          $('.success_message strong').after(' '+result.message);
          setTimeout(() => {
            $('#sign_in').html("SIGN IN");
              $('.success_message').addClass('d-none');
             window.open(url+result.vendor.toLowerCase(),'_self');
           },3000);
        } else {
          let options = {
                id: '#login',
                distance: '20',
                direction:'left',
                times:'1',
                interval:200
          }
          shake(options)  
          // $("#login").effect("shake", options, 800);
          $('.failed_message').removeClass('d-none');
          // $('.failed_message strong::after').html(' '+result.message);
          $('.failed_message strong').after(' '+result.message);
          // $("#login").css("box-shadow","10px 10px 5px 12px red");
          $("#login").css("box-shadow","0 4px 15px 0 red, 0 6px 15px 0 rgba(0, 0, 0, 0.19)");
          setTimeout(() => {
            $("#login").css("box-shadow","0 4px 15px 0 blue, 0 6px 15px 0 rgba(0, 0, 0, 0.19)");
              $('#sign_in').html("SIGN IN");
             $('.failed_message').addClass('d-none');
           },3000);
        }
      }
 });
})


 $(document).on('submit','#change_password', e => {
 e.preventDefault();

     let url = $('meta[name=url]').attr("content");
     // let data = new FormData($(this).get(0))
     $.ajax({
      url:url+"login/change_password",
      method:'POST',
      dataType:'json',
      data:{'new_password':$('#new_password').val(),'confirm_password':$('#confirm_password').val(),},
      cache: false,
      success: function(result){
        console.log(result);
       
          if(result.status){
            success(result.msg)
          } else {
            failure(result.msg)
          }
        // if(result.status){
        //   $('.success_message').removeClass('d-none');
        //   $('.success_message strong').after(' '+result.message);
        //   setTimeout(() => {
        //     $('#sign_in').html("SIGN IN");
        //       $('.success_message').addClass('d-none');
        //      window.open(url+result.vendor.toLowerCase(),'_self');
        //    },3000);
        // } else {
          
        //   // $("#login").effect("shake", options, 800);
        //   $('.failed_message').removeClass('d-none');
        //   // $('.failed_message strong::after').html(' '+result.message);
        //   $('.failed_message strong').after(' '+result.message);
        //   // $("#login").css("box-shadow","10px 10px 5px 12px red");
        //   $("#login").css("box-shadow","0 4px 20px 0 red, 0 6px 20px 0 rgba(0, 0, 0, 0.19)");
        //   setTimeout(() => {
        //     $("#login").css("box-shadow","0 4px 20px 0 blue, 0 6px 20px 0 rgba(0, 0, 0, 0.19)");
        //       $('#sign_in').html("SIGN IN");
        //      $('.failed_message').addClass('d-none');
        //    },3000);
        // }
      }
 });
})



 });


const warning = () => {
    Swal.fire({
      title: 'Email address not exists',
      icon: 'warning',
      showClass: {
        popup: 'animate__animated animate__fadeInDown'
      },
      hideClass: {
        popup: 'animate__animated animate__fadeOutUp'
      }
    })
}


 const email = () => {
       (async () => {
        const { value: email } = await Swal.fire({
          title: 'Input email address',
          input: 'email',
          inputLabel: 'Your email address',
          inputPlaceholder: 'Enter your email address'
        })
        if (email) {
          let url = $('meta[name=url]').attr("content");
          $.ajax({
            url:url+'login/forgot_password',
            method:'POST',
            cache:false,
            data:{email:$.trim(email)},
            success: result => {
              if(result){
                Swal.fire(`Reset link sent on email: ${email}`)
              } else {
                warning();
              }
            }
          })
        }
        })()

    }    




const changepass = () => {
        (async () => {
        const { value: formValues } = await Swal.fire({
          title: 'Change Password',
          html:
            '<input id="swal-input1" class="swal2-input" placeholer="New Password">' +
            '<input id="swal-input2" class="swal2-input" placeholer="Confirm Password">',
          focusConfirm: false,
          preConfirm: () => {
            return [
              document.getElementById('swal-input1').value,
              document.getElementById('swal-input2').value
            ]
          }
        })
        if (formValues) {
          Swal.fire(JSON.stringify(formValues))
        }
        })()

  }     




  function $$$(vendor) {
      if(vendor !== 'Supplier'){ 
        $('#region_area').addClass('d-none');
      } else {
        $('#region_area').removeClass('d-none');
      }
   }

