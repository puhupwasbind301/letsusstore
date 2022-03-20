
    <div class="page-title-area style-four bg6" style="background-image: url(<?= base_url().$banner_image ?>);background-size: cover;">
        <div class="container">
            <div class="page-title-content text-start">
                <h2 class="ds-h2">Size Guide</h2>
                <ul>
                    <li><a href="<?= base_url() ?>#">Home</a></li>
                    <li>Size Guide</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container container1 container2">
        <h2 class="ds-h2 text-center">
            Size Guide
        </h2>
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <?php foreach ($size_guide_categories as $key => $value): ?>
            <li class="nav-item" role="presentation">
                <button class="nav-link <?= ($key == 0)?'active':'' ?>" id="<?= $value->sgl_name_key ?>-tab" data-bs-toggle="tab" data-bs-target="#<?= $value->sgl_name_key ?>" type="button"
                    role="tab" aria-controls="<?= $value->sgl_name_key ?>" aria-selected="true"><?= $value->sgl_name 
            ?></button>
            </li>
        <?php endforeach; ?>
           <!--  <li class="nav-item" role="presentation">
                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button"
                    role="tab" aria-controls="profile" aria-selected="false">Gurugram</button>
            </li> -->

        </ul>

            
        <div class="tab-content" id="myTabContent" >
            <?php  foreach($size_guide_categories as $key => $value): ?>
                
            <div class="tab-pane fade show <?= ($key == 0)?$value->sgl_name_key.' active':$value->sgl_name_key ?>" id="<?= $value->sgl_name_key ?>" role="tabpanel" aria-labelledby="<?= $value->sgl_name_key ?>-tab" >
                  
                  
                <table class="table">
                
                    <thead>
                        
                        <tr>
                            <th scope="col">TOTAL SIZE (SQ. FT)</th>
                            <th scope="col">WHAT ITEMS WILL FIT (RECOMMENDED STORAGE)</th>
                            <th scope="col">FLAT SIZE</th>
                        </tr>
                    </thead>
                
                        
                    
                    <tbody>
                        <?php foreach($sample[$value->sgl_name_key] as $key2 => $value2): ?>  
                        <tr>
                            <th scope="row"><?= $value2->sg_total_size ?></th>
                            <td><?= $value2->sg_item ?></td>
                            <td><?= $value2->sg_flat_size ?></td>
                        </tr>
                        <?php endforeach; ?>
                        
                    </tbody>
                    
                </table>
                   

            </div>
           
              <?php endforeach; ?>
        </div>
                         
  
    </div>
    