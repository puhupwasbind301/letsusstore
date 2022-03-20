<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details Pdf</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <p style="text-align: center;">INVOICE</p>
    <div class="card">
                <!-- <div class="card-header text-center">
                  INVOICE -->
                </div>
                <div class="card-body">
                    <table class="table "  style="width:100%;height: 20%;">
                      <tbody>
                        <tr>
                          <td> Administator</td>
                          <td> To,</td>
                        </tr>
                        <tr>
                          <td>New Delhi, 110045 India</td>
                          <td> <?= $user_detail->user_company_name  ?></td>
                        </tr>
                        <tr>
                          <td>M: 474979232</td>
                          <td>   <?= $request_detail->r_user_name  ?></td>
                        </tr>
                        <tr>
                          <td> admin@gmail.com</td>
                          <td>  <?= $request_detail->r_user_address  ?></td>
                        </tr>
                      </tbody>
                    </table>
                    <div class="row">
             <!--           <div class="col-md-7">
                           <div class="card">
                              <div class="card-header">Administator</div>
                              <div class="card-body">
                                  <address>
                                    New Delhi, 110045 India
                                  </address>
                                  <h5>M: 474979232</h5>
                                  admin@gmail.com
                              </div>
                           </div>
                       </div>
                       <div class="col-md-5">
                           <div class="card">
                              <div class="card-header">To,</div>
                              <div class="card-body">
                                  <h3>
                                    <?= $user_detail->user_company_name  ?>
                                  </h3>  
                                  <h3>
                                    <?= $request_detail->r_user_name  ?>
                                   </h3>  
                                  <address>
                                    <?= $request_detail->r_user_address  ?>
                                  </address>
                              </div>
                           </div> 
                       </div>
                    </div> -->
                    <input type="hidden" class="form-control" id="user_id" name="user_id" placeholder="User Id" required="" >
                    <table class="table " border="1" style="width:100%;">
                      <thead>
                        <tr>
                          <th>Req No.</th>
                          <th>Service</th>
                          <th>Price</th>
                          <th>Quantity</th>
                          <th>Total Price</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td> <?= $request_invoice->ri_no  ?></td>
                          <td> <?= $request_invoice->ri_name  ?></td>
                          <td>  <?=  $request_invoice->ri_price  ?></td>
                          <td>  <?= $request_invoice->ri_quantity  ?></td>
                          <td>   <?= $request_invoice->ri_total  ?></td>
                        </tr>
                      </tbody>
                    </table>
                  
                        
                  
                </div>
              
              </div>
</body>
</html>