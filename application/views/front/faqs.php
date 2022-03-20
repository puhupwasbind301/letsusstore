

  <div class="page-title-area style-four bg3" style="background-image: url(<?= base_url().$banner_image ?>);background-size: cover;">
    <div class="container">
      <div class="page-title-content text-start">
        <h2 class="ds-h2">FAQ'S</h2>
        <ul>
          <li><a href="<?= base_url() ?>home">Home</a></li>
          <li>FAQ'S</li>
        </ul>
      </div>
    </div>
  </div>

    <div class="services-area pt-4 pb-5">
        <div class="container">
            <div class="section-title">
                <h2 class="ds-h2">FAQs</h2>
            </div>
            <div class="row">
                <div class="col-md-4 my-3">
                    <div class="input-group rounded">
                        <input type="search" id="myFaqInput" class="form-control rounded" placeholder="Search" aria-label="Search"
                               aria-describedby="search-addon" />
                        <span class="input-group-text border-0 ds-search-clr" id="search-addon">
    <i class="fas fa-search"></i>
  </span>
                    </div>
                </div>
            </div>

            <div class="accordion" id="accordionExample myData" class="">
                <?php foreach ($all_rows as $key => $value): ?>
                <div class="accordion-item" >
                    <h2 class="accordion-header" id="heading<?= $key ?>">
                        <button class="accordion-button ds-tab-title collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?= $key ?>" aria-expanded="true" aria-controls="collapse<?= $key ?>">
                            <?= $value->f_title ?>
                        </button>
                    </h2>
                    <div id="collapse<?= $key ?>" class="accordion-collapse hide collapse " aria-labelledby="heading<?= $key ?>" data-bs-parent="#accordionExample">
                        <div class="accordion-body ds-tab-text">
                            <?= $value->f_desc ?>
                        </div>
                    </div>
                </div>
                <?php endforeach ?>
            <!--     <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button ds-tab-title collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Where can I find a Let Us Store Warehouse in Delhi NCR?
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body ds-tab-text">
                            We are conveniently located in the heart of Gurugram and Noida’s busy Business hubs
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button ds-tab-title collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            What is the process of renting space ?
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body ds-tab-text">
                            Upon confirmation of the storage unit, a signed lease agreement (in person), the first installation, two current colored photographs, and one ID proof is required. Acceptable ID proofs are Aadhar, Driving License, Voter ID, and Passport with visa copy. The first installation comprises of one month's rent with GST (Total Rent), and the Security Deposit (calculated at three times the Total Rent). Taxes are subject as per law. Currently, GST is at 18%.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFour">
                        <button class="accordion-button ds-tab-title collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            What is the payment process?
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                        <div class="accordion-body ds-tab-text">
                            First installation and ten post-dated cheques. Payments are made in advance before the 6th of every month.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFive">
                        <button class="accordion-button ds-tab-title collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            What documentation is required?
                        </button>
                    </h2>
                    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                        <div class="accordion-body ds-tab-text">
                            Two current coloured photographs and one ID proof (Passport, Driving License, Voter ID or Aadhar card). Photo ID and storage key is required to access facility at all times
                        </div>
                    </div>accordion-button
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingSix">
                        <button class="accordion-button ds-tab-title collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                            What is the minimum duration (time) of your rental agreement?
                        </button>
                    </h2>
                    <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                        <div class="accordion-body ds-tab-text">
                            You can store all your valuables from as short as a month to as long as you want. We sign a standard rental agreement for 11 months. However, our minimum requirement to store is 30 days only. To end the contract, we require an advanced written notice of one month.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingSeven">
                        <button class="accordion-button ds-tab-title collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                            How do I end (or terminate) my contract (or lease agreement)?
                        </button>
                    </h2>
                    <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                        <div class="accordion-body ds-tab-text">
                            One month's written notice is required to break the term of the lease period
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingEight">
                        <button class="accordion-button ds-tab-title collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                            When will I receive the security deposit refund?
                        </button>
                    </h2>
                    <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#accordionExample">
                        <div class="accordion-body ds-tab-text">
                            Security deposits are usually refunded at the time of surrender of the rented storage space.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingNine">
                        <button class="accordion-button ds-tab-title collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                            What are the sizes of your private storage rooms?
                        </button>
                    </h2>
                    <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine" data-bs-parent="#accordionExample">
                        <div class="accordion-body ds-tab-text">
                            We offer a wide range of storage rooms to meet your specific requirements from 45 Sq Ft to 300 Sq Ft with a minimum ceiling height of 10 feet.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTen">
                        <button class="accordion-button ds-tab-title collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                            Will I be granted privacy while accessing my storage unit?
                        </button>
                    </h2>
                    <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen" data-bs-parent="#accordionExample">
                        <div class="accordion-body ds-tab-text">
                            You will be granted privacy while accessing your Storage Room and Utility Locker. This will be your own private space that is owned and solely operated by you. You will have one key to your storage space that can be accessed by you and or your nominee, as per your convenience
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>

   

    