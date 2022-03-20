<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="url" content="<?=base_url();?>" >
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/animate.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/magnific-popup.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/odometer.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/rangeSlider.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/showMoreItems-theme.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/flaticon.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/meanmenu.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/responsive.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/ds.css">
    <!-- Let us store | Future of Warehousing and Logistics -->

    <title><?= !empty($meta_data->meta_title)?$meta_data->meta_title:'' ?></title>
    <meta name="description" content="<?= !empty($meta_data->meta_desc)?strip_tags($meta_data->meta_desc):'' ?>">
    <meta name="keywords" content="<?= !empty($meta_data->meta_keyword)?$meta_data->meta_keyword:'' ?>">
    
    <?php 
    // bts, deo
    // $puhupwas = $this->session->userdata('page-name');
    // if(in_array($puhupwas,['shed','rcc','bts'])){
    //     echo '<title>Warehouse Page</title>';
    //     echo '<meta name="'.$puhupwas.'" content="warehouse services, manage warehouse, warehouse on rent, warehouse near me, india warehouse, rent
    //             a godown, india warehousing" >';
    // } else if (in_array($puhupwas,['page_pl'])){
    //     echo '<title>3Pl Page</title>';
    //     echo '<meta name="'.$puhupwas.'" content="third party logistics, logistics company, logistics services, 3pl services, 3pl logistics, logistics service
    //         provider, vrl logistics, last mile delivery, india logistics company" >';
    // } else if (in_array($puhupwas,['loaders','pickers_and_packers','security','supervisor','deo'])){
    //     echo '<title>Manpower Page</title>';
    //     echo '<meta name="'.$puhupwas.'" content="manpower agency, manpower services, manpower supply, manpower consultancy, hsc manpower,
    //             talentacquisition,employed agency" >';
    // } else if (in_array($puhupwas,['forklift','stackers','hpt','clamper'])){
    //     echo '<title>Material Handling Page</title>';
    //     echo '<meta name="'.$puhupwas.'" content="material handling, material handling equipment, forklift, stackers, hpt" >';
    // } else if (in_array($puhupwas,['primary_movement','secondary_movement','d2c_services'])){
    //     echo '<title>Distribution Services Page</title>';
    //     echo '<meta name="'.$puhupwas.'" content="distribution logistics, distribution services, network distribution" >';
    // } else if (in_array($puhupwas,['software','hardware'])){
    //     echo '<title>Technology Page</title>';
    //     echo '<meta name="'.$puhupwas.'" content="warehouse management system, warehouse management, wms, inventory management system,
    //             inventory management software, delivery last mile" >';
    // } else if (in_array($puhupwas,['private-rooms','box-storage','utility-locker','document-storage'])){
    //     echo '<title>Self Storage Page</title>';
    //     echo '<meta name="'.$puhupwas.'" content="self storage, storage unit, cold storage warehouse, safestorage, storage bangalore, cold Storage, safe storage bangalore, warehouse in bangalore" >';
    // } else {
    //     echo '<title>Let us store | Future of Warehousing and Logistics</title>';
    //     // echo '<meta name="'.$p.'" content="self storage, storage unit, cold storage warehouse, safestorage, storage bangalore, cold Storage, safe storage bangalore, warehouse in bangalore" >';
    // }
     ?>
    </title>
    <link rel="icon" type="image/png" href="<?= base_url() ?>assets/img/favicon.png">

    <style>
    html{
        display:block;
        width:100%;
       }
        input[type=text],
        select,
        textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-top: 6px;
            margin-bottom: 16px;
            resize: vertical;
        }

        input[type=submit] {
            background-color: blue;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: blue;
        }




        .col1 {
            background-color: grey;
        }

        .container1 h2 {

            color: #5d3dec !important;
        }

        .fab1,
        .fas1 {
            font-size: 45px;
            margin-right: 50px;
        }

        .text1 {
            font-size: 20px;
        }

        .row1 {
            margin-top: 20px;
        }



        @media screen and (max-width: 767px) {
            .container1 h2 {
                margin-top: 36px !important;
            }
        }

        @media screen and (max-width: 767px) {
            .ds-h2-sub1 {
                text-align: center !important;
                font-size: 25px !important;
                padding-top: 15px !important;
            }
        }

        @media screen and (max-width: 767px) {
            .img1 {
                height: 200px !important;
                width: fit-content
            }
        }

        footer {
            margin-top: 20px !important;
        }

        thead {
            background-color: #d9edf7;
        }

        .container-fluid1 {
            margin-top: 50px;
        }

        .img1 {
            height: 500px;
            width: fit-content
        }

        .img2 {
            height: 600px;
            width: fit-content;
            border-radius: 15px;
        }

        .left_img {
            margin-bottom: 70px;
        }

        .sub_heading {
            font-size: 30px !important;
        }

        .ceo-img {
            height: 500px;
            width: fit-content; 
            border-radius: 15px;
            margin-top: 30px;
        }

        .ds-h3{
            padding-top: 0 !important;
        }
        [type="number"]::-webkit-inner-spin-button,
        [type="number"]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            height: auto;
        }


        .stepper {
            border: 1px solid #eee;
            display: inline-block;
            overflow: visible;
            height: 2.1em;
            background: #fff;
            padding: 1px;
        }

        .stepper input {
            width: 3em;
            height: 100%;
            text-align: center;
            border: 0;
            background: transparent;
            color: #000;
        }

        .stepper button {
            width: 1.4em;
            font-weight: 300;
            height: 100%;
            line-height: 0.1em;
            font-size: 1.4em;
            padding: 0.2em !important;
            background: #eee;
            color: #333;
            border: none;
        }
    </style>
    <style>
          a {
           padding-top: -30px !important;
           padding-bottom: -30px !important;
           background-attachment: blue;
         }

         p {
             text-align: justify !important;
         }


/*@media (min-width: 1250px) and (max-width: 1348px){
.noke-nav .navbar .navbar-nav {
     margin-left: 16px !important; 
    position: relative;
}
.noke-nav .navbar .navbar-nav .nav-item a {
    font-size: 9.5px !important;
}
.noke-nav .navbar .navbar-nav .nav-item a{
    padding-top: 32px;
}
}*/
    @media (min-width: 1201px) and (max-width: 1359px){
              .noke-nav .navbar .navbar-nav .nav-item .dropdown-toggle {
      padding-right: 16px;
  }
  .noke-nav .navbar .navbar-nav .nav-item a {
      font-size: 9.9px !important;
  }
  .noke-nav .navbar .navbar-nav .nav-item {
      margin-right: 14px !important;
      margin-left: 0px !important;
  }
  .noke-nav .navbar .navbar-nav {
       margin-left: 20px !important; 
      position: relative;
  }
  .noke-nav .navbar .navbar-nav .nav-item a{
      padding-top: 34px;
  }
          }

 @media (min-width: 1360px) and (max-width: 1403px){
              .noke-nav .navbar .navbar-nav .nav-item .dropdown-toggle {
      padding-right: 16px;
  }
  .noke-nav .navbar .navbar-nav .nav-item a {
      font-size: 11px !important;
  }
  .noke-nav .navbar .navbar-nav .nav-item {
      margin-right: 17px !important;
      margin-left: 0px !important;
  }
  .noke-nav .navbar .navbar-nav {
       margin-left: 80px !important; 
      position: relative;
  }
  .noke-nav .navbar .navbar-nav .nav-item a{
      padding-top: 34px;
  }
          }

        @media (min-width: 768px) and (max-width: 1023px){
            .jcenter {
                text-align: center;
                margin-bottom: 10px;
            } .shape12 {
                right: 44px;
                bottom: -19px;
            }
        }
        @media (min-width: 1024px) and  (max-width: 1200px){
              .shape12{
                right: 44px;
                bottom: -19px;
            }   
        }
       </style>

</head>

<body style="overflow-x:hidden;">