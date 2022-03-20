
<div class="page-title-area style-four">
    <div class="container">
        <div class="page-title-content text-start">
            <h2 class="ds-h2">Storage Calculator</h2>
            <ul>
                <li><a href="<?= base_url() ?>">Home</a></li>
                <li>Storage Calculator</li>
            </ul>
        </div>
    </div>
</div>

<div class="works-area pt-100 pb-70">
    <div class="container">
        <div class="shorting-menu">
            <?php foreach ($storage_calculator_categories as $key => $value): ?>
            <button class="filter sFilter <?= ($key == 0)?'active filterDataActive':'' ?>" data-filter=".<?= $value->scc_name_key ?>"><?= $value->scc_name 
            ?></button>
            <?php endforeach ?>
            
        </div>
        <div class="shorting row justify-content-start">
         <!--MATTRESS-->
 <!-- ($key == 0)?'active':''  -->

         <?php 

        foreach($storage_calculator_categories as $key => $value): ?>
            <?php foreach($sample[$value->scc_name_key] as $key2 => $value2): ?>
                
            <div class="col-lg-3 mb-3 col-md-6 mix fContent <?= $value->scc_name_key  ?>">
                <div class="card">
                    <a href="<?= base_url() ?>#"><img src="<?= empty($value2->sc_image)?base_url('assets/img/newone/mattress.jpg'):base_url().$value2->sc_image ?>"  class="card-img-top" alt="mattress" style="width:100%;height:200px"></a>
                    <div class="card-body text-center">
                        <p class="ds-p py-2"><?= $value2->sc_name ?></p>
                        <span class="stepper">
                            <button class="substractSquareFeet" data-id="<?= $value2->sc_name_key ?>">–</button>
                            <input type="number" class="stepperClassAdded" id="<?= ($key2 == 0 && $key == 0)?'stepper':'stepper'.$key.$key2 ?>" value="0" min="0" max="100" step="1" readonly>
                            <button class="additionSquareFeet" data-id="<?= $value2->sc_name_key ?>">+</button>
                        </span>
                    </div>
                </div>
            </div>
           <?php endforeach ?> 
        <?php endforeach ?> 



            <div id="messageForm"></div>
            <div class="row my-5">
                <div class="col-md-12 my-3">
                    <p><strong>TotaL Required Space:</strong> <span id="squarefeet_minimum">0</span> - <span id="squarefeet_maximum">20</span> Sq-Ft</p>
                </div>
                <div class="card shadow-sm">
                    <div class="card-body">
                        <form id="user_square_feet_calculator" method="post">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="username" name="username" placeholder="Password">
                                        <label for="username">Name</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-floating ds-top-6">
                                        <input type="email" class="form-control" id="useremail" name="email" placeholder="Password">
                                        <label for="useremail">Email Address</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <input type="number" name="mobile_number" class="form-control" id="mobile-number" placeholder="Password">
                                        <label for="mobile-number">Mobile Number</label>
                                    </div>
                                </div>
                                <div class="col-md-12 mt-2 text-end">
                                    <button type="submit"  class="btn btn-primary ds-main-bg text-uppercase">Send me my Estimate</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-md-12">
                    <h2 class="ds-h2-disclaimer text-warning">Disclaimer: Calculation based on the assumption that storage inventory is stackable up to 8 feet.</h2>
                </div>

            </div>


        </div>
    </div>
</div>
    

