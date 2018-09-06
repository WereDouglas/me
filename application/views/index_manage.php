<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Document Title -->
        <title>Omnierps</title>
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/png" href="<?= base_url(); ?>img/logo_.png">

        <!-- CSS Files -->
        <link href="https://fonts.googleapis.com/css?family=Cabin:400,400i,500i,700%7CRoboto:400,500,700" rel="stylesheet">
        <link rel="stylesheet" href="<?= base_url(); ?>css/bootstrap.min.css">
        <link rel="stylesheet" href="<?= base_url(); ?>plugins/swiper/swiper.min.css">
        <link rel="stylesheet" href="<?= base_url(); ?>plugins/magnific-popup/magnific-popup.min.css">
        <link rel="stylesheet" href="<?= base_url(); ?>css/style.css">
        <link rel="stylesheet" href="<?= base_url(); ?>css/responsive.css">
        <link rel="stylesheet" href="<?= base_url(); ?>css/colors/theme-color-1.css">
        <link rel="stylesheet" href="<?= base_url(); ?>css/custom.css">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        <!--<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">-->

    </head>

    <body>
        <!-- Preloader -->
        <div class="preLoader"></div>
        <!-- Main header -->
        <header class="header">
            <div class="main-header">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-2 col-md-3 col-sm-3 col-9">
                            <!-- Logo -->
                            <div class="logo" data-animate="fadeInUp" data-delay=".7">
                                <a href="index.html">
                                    <img src="<?= base_url(); ?>img/logo.png" alt="Omnierps">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-5 col-sm-3 col-3">
                            <nav data-animate="fadeInUp" data-delay=".9">
                                <!-- Header-menu -->
                                <div class="header-menu">
                                    <ul>
                                        <li class="active"><a href="#home">Home</a></li>
                                        <li class=""><a href="#services">Services</a></li>                                    
                                        <li class=""><a href="#price">Pricing Plans</a></li>
                                        <li><a href="#team">Our Team</a></li>
                                        <li><a href="#clients">Clients</a></li>
                                        <li><a href="#">Contact Us</a></li>

                                    </ul>
                                </div>
                                <!-- End of Header-menu -->
                            </nav>
                        </div>

                    </div>
                </div>
            </div>
        </header>
        <!-- End of Main header -->

        <!-- Banner -->
        <section class="position-relative bg-light pt-4 pb-4">
            <div id="particles_js"></div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-8">
                        <!-- Banner content -->
                        <div class="banner-content">
                            <?php
                            if (is_array($h) && count($h)) {
                                foreach ($h as $l) {
                                    $id = $l->id;
                                    $title = $l->title;
                                    ?>  
                                    <?php echo empty($l->title) ? '<i class="fab fa-check-circle"></i>Home header' : ''; ?>   <h1 id="home:title:<?php echo $l->id; ?>" contenteditable="true" data-animate="fadeInUp" data-delay="1.2"><?php echo $l->title; ?> </h1>
                                    <?php
                                }
                            }
                            ?>

                            <h2 data-animate="fadeInUp" data-delay="1.3"><span class="typed"></span></h2>
                            <h3><a href="#"  data-toggle="modal" data-target="#ListTyped"> <i class="fa  fa-edit" style="font-size:24px;color:green"></i> Manage content</a></h3>
                            <ul class="list-inline" data-animate="fadeInUp" data-delay="1.4">
                            </ul>
                            <div id="ListTyped" class="modal fade modal-dialog modal-sm" role="dialog">
                                <div class="modal-dialog">

                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Typing text</h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>

                                        </div>
                                        <div class="modal-body">
                                            <form id="station-form" parsley-validate novalidate role="form" class="form-horizontal" name="login-form" enctype="multipart/form-data"  action='<?= base_url(); ?>index.php/create/typing'  method="post">
                                                <div class="modal-body overflow-visible"> 

                                                    <div class="row-fluid">
                                                        <div class=" span8">
                                                            <div class="form-group">                        
                                                                <input type="text" name="texting" placeholder="Content" id="texting" required class="form-control"/>
                                                            </div>
                                                            <div class="form-group"> 
                                                            </div>
                                                        </div>
                                                        <div class="">
                                                            <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>  <button class="btn btn-success pull-right" type="submit">SUBMIT</button> 

                                                        </div>
                                                    </div>

                                                </div>
                                            </form>
                                            <br>
                                            <h3>Listings</h3>
                                            <div class="row-fluid">
                                                <table id="sample-table-2" class="table table-striped table-bordered table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th>Texts</th>
                                                            <th class="hidden-phone">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>

                                                        <?php
                                                        if (is_array($y) && count($y)) {
                                                            foreach ($y as $l) {
                                                                ?>  
                                                                <tr class="odd edit_tr" id="<?php echo $l->id; ?>">


                                                                    <td id="typing:texting:<?php echo $l->id; ?>" contenteditable="true">
                                                                        <?php echo $l->texting; ?>
                                                                    </td>
                                                                    <td class="td-actions">
                                                                        <div class="hidden-phone visible-desktop action-buttons">                                                                                       
                                                                            <a class="blue" href="<?php echo base_url() . "index.php/manage/delete/" . $l->id . "/typing"; ?>"><li class="fa fa-trash"></li></a>
                                                                        </div>
                                                                    </td> 
                                                                </tr>
                                                                <?php
                                                            }
                                                        }
                                                        ?>

                                                    </tbody>

                                                </table>
                                            </div><!--/table-responsive-->
                                        </div>                                  
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 d-none d-lg-block">
                        <!-- Banner image -->
                        <div id="ListBanner" class="modal fade modal-dialog modal-sm" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Banner Images</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>

                                    </div>
                                    <div class="modal-body">
                                        <form id="station-form" parsley-validate novalidate role="form" class="form-horizontal" name="login-form" enctype="multipart/form-data"  action='<?= base_url(); ?>index.php/create/banner'  method="post">
                                            <div class="modal-body overflow-visible"> 

                                                <div class="row-fluid">    

                                                    <div class=" span8">
                                                        <div class="setting"></div>
                                                        <div class="setting image_picker">
                                                            <h2>Image</h2>
                                                            <div class="settings_wrap">
                                                                <label class="drop_target">
                                                                    <div class="image_preview"></div>
                                                                    <input id="inputFile" name="userfile" type="file"/>
                                                                </label>
                                                                <div class="settings_actions vertical"><a data-action="choose_from_uploaded"><i class="fa fa-picture-o"></i> Choose from Uploads</a><a class="disabled" data-action="remove_current_image"><i class="fa fa-ban"></i> Remove Current Image</a></div>
                                                                <div class="image_details">
                                                                    <label class="input_line image_title">
                                                                        <input type="text"  name="details" placeholder="Details"/>
                                                                    </label>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="setting"></div>
                                                        <div class="form-group"> 
                                                        </div>
                                                    </div>
                                                    <div class="">
                                                        <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>  <button class="btn btn-success pull-right" type="submit">SUBMIT</button> 

                                                    </div>
                                                </div>

                                            </div>
                                        </form>
                                        <br>
                                        <h3>Listings</h3>
                                        <div class="row-fluid">
                                            <table id="sample-table-2" class="table table-striped table-bordered table-hover">
                                                <thead>
                                                    <tr>

                                                        <th>#</th>
                                                        <th>Details</th>
                                                        <th class="hidden-phone">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    <?php
                                                    if (is_array($b) && count($b)) {
                                                        foreach ($b as $l) {
                                                            ?>  
                                                            <tr class="odd edit_tr" id="<?php echo $l->id; ?>">

                                                                <td > 
                                                                    <?php
                                                                    if ($l->image != "") {
                                                                        ?>
                                                                        <img  height="50px" width="50px"  src="<?= base_url(); ?>uploads/<?php echo $l->image; ?>"  />
                                                                        <?php
                                                                    }
                                                                    ?>
                                                                </td>
                                                                <td id="banner_image:details:<?php echo $l->id; ?>" contenteditable="true">
                                                                    <?php echo $l->details; ?>
                                                                </td>
                                                                <td class="td-actions">
                                                                    <div class="hidden-phone visible-desktop action-buttons">                                                                                       
                                                                        <a class="blue" href="<?php echo base_url() . "index.php/manage/delete/" . $l->id . "/banner_image"; ?>"><li class="fa fa-trash"></li></a>
                                                                    </div>
                                                                </td> 
                                                            </tr>
                                                            <?php
                                                        }
                                                    }
                                                    ?>

                                                </tbody>

                                            </table>
                                        </div><!--/table-responsive-->
                                    </div>                                  
                                </div>

                            </div>
                        </div>
                        <br />

                        <div class="wrap_main_slideshow">
                            <div class="slideshow-revolution">
                                <div>
                                    <!-- Start WOWSlider.com BODY section -->

                                    <div id="wowslider-container1">
                                        <div class="ws_images">
                                            <ul>
                                                <?php
                                                if (is_array($b) && count($b)) {
                                                    foreach ($b as $l) {
                                                        ?> 
                                                        <li> 
                                                            <div class="banner-image">
                                                                <img src="<?= base_url(); ?>uploads/<?php echo $l->image; ?>" alt="" data-animate="fadeInUp" data-delay="1.5" data-depth="0.2">
                                                            </div>
                                                        </li>                                                        
                                                        <?php
                                                    }
                                                }
                                                ?>

                                            </ul>
                                        </div>
                                        <h3> <a href="#"  data-toggle="modal" data-target="#ListBanner"><i class="fa  fa-edit" style="font-size:18px;color:green"></i> Manage content</a></h3>
                                        <!-- Modal -->

                                        <div class="ws_shadow"></div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php echo $this->session->flashdata('msg'); ?>
        <div class="alert alert-success" id="status"></div>
        <!-- End of Banner -->

        <!-- Features -->
        <section  class="pt-7 pb-5-5">
            <div class="container">
                <h3> <a href="#"  data-toggle="modal" data-target="#ListSummary"><i class="fa  fa-edit" style="font-size:18px;color:green"></i> Manage content</a></h3>
                <div id="ListSummary" class="modal fade modal-dialog modal-sm" role="dialog">
                    <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Contents</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>

                            </div>
                            <div class="modal-body">
                                <form id="station-form" parsley-validate novalidate role="form" class="form-horizontal" name="login-form" enctype="multipart/form-data"  action='<?= base_url(); ?>index.php/create/summary'  method="post">
                                    <div class="modal-body overflow-visible"> 

                                        <div class="row-fluid">    

                                            <div class=" span8">
                                                <div class="setting"></div>
                                                <div class="setting image_picker">
                                                    <h2>Image</h2>
                                                    <div class="settings_wrap">
                                                        <label class="drop_target">
                                                            <div class="image_preview"></div>
                                                            <input id="inputFile" name="userfile" type="file"/>
                                                        </label>
                                                        <div class="settings_actions vertical"><a data-action="choose_from_uploaded"><i class="fa fa-picture-o"></i> Choose from Uploads</a><a class="disabled" data-action="remove_current_image"><i class="fa fa-ban"></i> Remove Current Image</a></div>

                                                        <div class="form-group">                        
                                                            <input type="text" name="title" placeholder="Title" id="title" required class="form-control"/>

                                                        </div>
                                                        <div class="form-group">                        
                                                            <textarea type="text" name="details" placeholder="Details" id="details" required class="form-control"></textarea>
                                                        </div> 
                                                    </div>
                                                </div>
                                                <div class="setting"></div>

                                                <div class="">
                                                    <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>  <button class="btn btn-success pull-right" type="submit">SUBMIT</button> 

                                                </div>
                                            </div>                                       
                                        </div>

                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                            </div>
                        </div>

                    </div>
                </div>

                <div class="row">

                    <?php
                    if (is_array($s) && count($s)) {
                        foreach ($s as $l) {
                            ?> 
                            <div class="col-md-4">
                                <div class="single-feature text-center" data-animate="fadeInUp" data-delay=".3">
                                    <img src="<?= base_url(); ?>uploads/<?php echo $l->image; ?>" alt="" alt="" data-no-retina class="svg">
                                    <h3 id="summary:title:<?php echo $l->id; ?>" contenteditable="true" ><?php echo $l->title; ?></h3>
                                    <p id="summary:details:<?php echo $l->id; ?>" contenteditable="true"><?php echo $l->details; ?></p>
                                    <a class="blue" href="<?php echo base_url() . "index.php/manage/delete/" . $l->id . "/summary"; ?>"><li class="fa fa-trash"></li></a>
                                </div>
                            </div>
                            <?php
                        }
                    }
                    ?>

                </div>

            </div>

        </section>
        <!-- End of Features -->

        <!-- Our services -->
        <section>
            <div class="services-title position-relative pt-7" data-bg-img="<?= base_url(); ?>img/buildings.jpg">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-12 col-lg-12">
                            <!-- Section title -->
                            <div class="section-title text-center">
                                <?php
                                if (is_array($h) && count($h)) {
                                    foreach ($h as $l) {
                                        ?>  
                                        <?php echo empty($l->service_title) ? '<i class="fab fa-check-circle"></i>Service header' : ''; ?>  <h2 id="home:service_title:<?php echo $l->id; ?>" contenteditable="true" class="text-white" data-animate="fadeInUp" data-delay=".1"><?php echo $l->service_title; ?></h2>
                                        <?php echo empty($l->service_text) ? '<i class="fab fa-check-circle"></i>Description' : ''; ?>    <p id="home:service_text:<?php echo $l->id; ?>" contenteditable="true" class="text-white" data-animate="fadeInUp" data-delay=".3"><?php echo $l->service_text; ?></p>                                       

                                        <?php
                                    }
                                }
                                ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="services" class="services-wrap bg-white position-relative pt-5 pb-5">
                <h3><a href="#"  data-toggle="modal" data-target="#ListService"><i class="fa  fa-edit" style="font-size:18px;color:green"></i> Manage content</a></h3>
                <div id="ListService" class="modal fade modal-dialog modal-sm" role="dialog">
                    <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Services</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>

                            </div>
                            <div class="modal-body">
                                <form id="station-form" parsley-validate novalidate role="form" class="form-horizontal" name="login-form" enctype="multipart/form-data"  action='<?= base_url(); ?>index.php/create/service'  method="post">
                                    <div class="modal-body overflow-visible"> 
                                        <div class="row-fluid"> 
                                            <div class=" span8">
                                                <div class="setting"></div>
                                                <div class="setting image_picker">
                                                    <h2>Image</h2>
                                                    <div class="settings_wrap">
                                                        <label class="drop_target">
                                                            <div class="image_preview"></div>
                                                            <input id="inputFile" name="userfile" type="file"/>
                                                        </label>
                                                        <div class="settings_actions vertical"><a data-action="choose_from_uploaded"><i class="fa fa-picture-o"></i>Choose from Uploads</a><a class="disabled" data-action="remove_current_image"><i class="fa fa-ban"></i> Remove Current Image</a></div>

                                                        <div class="form-group">                        
                                                            <input type="text" name="title" placeholder="Title" id="title" required class="form-control"/>
                                                        </div>
                                                        <div class="form-group">                        
                                                            <textarea type="text" name="details" placeholder="Details" id="details" required class="form-control"></textarea>
                                                        </div> 
                                                    </div>
                                                </div>
                                                <div class="setting"></div>

                                                <div class="">
                                                    <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>  <button class="btn btn-success pull-right" type="submit">SUBMIT</button> 

                                                </div>
                                            </div>                                       
                                        </div>

                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">

                            </div>
                        </div>

                    </div>
                </div>

                <div class="container">
                    <!-- All services -->
                    <div class="row">
                        <?php
                        if (is_array($se) && count($se)) {
                            foreach ($se as $l) {
                                ?>                                 
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="single-service" data-animate="fadeInUp" data-delay=".15">
                                        <img src="<?= base_url(); ?>uploads/<?php echo $l->image; ?>" alt="" alt="" data-no-retina class="svg">
                                        <h4 id="service:title:<?php echo $l->id; ?>" contenteditable="true"><?php echo $l->title; ?></h4>
                                        <span id="service:details:<?php echo $l->id; ?>" contenteditable="true"><?php echo $l->details; ?></span>
                                        <a class="blue" href="<?php echo base_url() . "index.php/manage/delete/" . $l->id . "/service"; ?>"><li class="fa fa-trash"></li></a>
                                    </div>
                                </div>
                                <?php
                            }
                        }
                        ?>
                    </div>
                    <!-- Service contact info -->

                </div>
            </div>
        </section>
        <!-- End of Our services -->

        <!-- Pricing plans -->
        <section id="price" class="pricing-plans pt-7 pb-7">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <!-- Section title -->
                        <div class="section-title">
                            <?php
                            if (is_array($h) && count($h)) {
                                foreach ($h as $l) {
                                    ?>  
                                    <?php echo empty($l->price_title) ? '<i class="fab fa-check-circle"></i>Price title' : ''; ?><h2 id="home:price_title:<?php echo $l->id; ?>" contenteditable="true" data-animate="fadeInUp" data-delay=".1"><?php echo $l->price_title; ?></h2>
                                    <?php echo empty($l->price_text) ? '<i class="fab fa-check-circle"></i>Price description' : ''; ?>  <p id="home:price_text:<?php echo $l->id; ?>" contenteditable="true"  data-animate="fadeInUp" data-delay=".3"><?php echo $l->price_text; ?></p>                                       

                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <!-- Features list -->
                        <div class="pricing-features">
                            <?php
                            if (is_array($h) && count($h)) {
                                foreach ($h as $l) {
                                    ?>  
                                    <?php echo empty($l->title) ? '<i class="fab fa-check-circle"></i>Requirements title' : ''; ?>  <h3 id="home:require_title:<?php echo $l->id; ?>" contenteditable="true" class="cabin" data-animate="fadeInUp" data-delay=".5"><?php echo $l->require_title; ?></h3>
                                    <?php
                                }
                            }
                            ?>

                            <ul class="list-unstyled list-item clearfix">

                                <?php
                                $ct = 0.5;
                                if (is_array($r) && count($r)) {
                                    foreach ($r as $l) {
                                        ?>  
                                        <li id="requires:title:<?php echo $l->id; ?>" contenteditable="true" data-animate="fadeInUp" data-delay="<?php echo (0.1 + ct + 0.2); ?>"><i class="fas fa-check-circle"></i><?php echo $l->title; ?><a href="<?php echo base_url() . "index.php/manage/delete/" . $l->id . "/requires"; ?>" class="blue">Delete</a></a></li>


                                        <?php
                                    }
                                }
                                ?>                                
                            </ul>
                            <h3> <a href="#"  data-toggle="modal" data-target="#ListRequire"><i class="fa  fa-edit" style="font-size:14px;color:green"></i> Manage content</a></h3>
                            <div id="ListRequire" class="modal fade modal-dialog modal-sm" role="dialog">
                                <div class="modal-dialog">
                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Requirements</h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>

                                        </div>
                                        <div class="modal-body">
                                            <form id="station-form" parsley-validate novalidate role="form" class="form-horizontal" name="login-form" enctype="multipart/form-data"  action='<?= base_url(); ?>index.php/create/requires'  method="post">
                                                <div class="modal-body overflow-visible"> 
                                                    <div class="row-fluid"> 
                                                        <div class=" span8">
                                                            <div class="setting"></div>
                                                            <div class="settings_wrap"> 
                                                                <div class="form-group">                        
                                                                    <textarea type="text" name="title" placeholder="Details" id="details" required class="form-control"></textarea>
                                                                </div> 
                                                            </div>
                                                            <div class="setting"></div>
                                                            <div class="">
                                                                <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>  <button class="btn btn-success pull-right" type="submit">SUBMIT</button> 

                                                            </div>
                                                        </div>                                       
                                                    </div>

                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <!-- Pricing slider -->
                        <h3><a href="#"  data-toggle="modal" data-target="#ListPrice"><i class="fa  fa-edit" style="font-size:18px;color:green"></i> Manage content</a></h3>
                        <div id="ListPrice" class="modal fade modal-dialog modal-sm" role="dialog">
                            <div class="modal-dialog">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">prices</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>

                                    </div>
                                    <div class="modal-body">
                                        <form id="station-form" parsley-validate novalidate role="form" class="form-horizontal" name="login-form" enctype="multipart/form-data"  action='<?= base_url(); ?>index.php/create/price'  method="post">
                                            <div class="modal-body overflow-visible"> 
                                                <div class="row-fluid"> 
                                                    <div class=" span8">
                                                        <div class="setting"></div>
                                                        <div class="setting image_picker">
                                                            <h2>Icon</h2>
                                                            <div class="settings_wrap">
                                                                <label class="drop_target">
                                                                    <div class="image_preview"></div>
                                                                    <input id="inputFile" name="userfile" type="file"/>
                                                                </label>
                                                                <div class="settings_actions vertical"><a data-action="choose_from_uploaded"><i class="fa fa-picture-o"></i>Choose from Uploads</a><a class="disabled" data-action="remove_current_image"><i class="fa fa-ban"></i> Remove Current Image</a></div>

                                                                <div class="form-group">                        
                                                                    <input type="text" name="title" placeholder="Title" id="title" required class="form-control"/>
                                                                </div>
                                                                <div class="form-group">                        
                                                                    <input type="text" name="sub" placeholder="Sub title" id="title" required class="form-control"/>
                                                                </div>
                                                                <div class="form-group">                        
                                                                    <input type="text" name="plan" placeholder="Plan" id="title" required class="form-control"/>
                                                                </div>
                                                                <div class="form-group">                        
                                                                    <input type="text" name="cost" placeholder="Cost" id="cost" required class="form-control"/>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <div class="setting"></div>

                                                        <div class="">
                                                            <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>  <button class="btn btn-success pull-right" type="submit">SUBMIT</button> 

                                                        </div>
                                                    </div>                                       
                                                </div>

                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">

                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="pricing-slides text-center">
                            <div class="swiper-container pricing-slider">
                                <div class="swiper-wrapper">
                                    <?php
                                    if (is_array($p) && count($p)) {
                                        foreach ($p as $l) {
                                            ?>                          
                                            <div class="swiper-slide single-pricing-slide">
                                                <div class="single-pricing-plan">
                                                    <img src="<?= base_url(); ?>uploads/<?php echo $l->image; ?>" alt="" alt="" data-no-retina class="svg">
                                                    <h4 id="price:title:<?php echo $l->id; ?>" contenteditable="true"><?php echo $l->title; ?></h4>
                                                    <span  id="price:sub:<?php echo $l->id; ?>" contenteditable="true" class="time roboto"><?php echo $l->sub; ?></span>
                                                    <strong  id="price:plan:<?php echo $l->id; ?>" contenteditable="true" class="roboto"><?php echo $l->plan; ?><sub></sub></strong>
                                                    <p>Billed <span id="price:cost:<?php echo $l->id; ?>" contenteditable="true">Usage</span> Per Month <br></p>
                                                    <a href="#" class="btn btn-primary">More</a>
                                                    <a class="blue" href="<?php echo base_url() . "index.php/manage/delete/" . $l->id . "/price"; ?>"><li class="fa fa-trash"></li></a>

                                                </div>
                                            </div>
                                            <?php
                                        }
                                    }
                                    ?>


                                </div>
                            </div>
                            <div class="swiper-pagination pricing-pagination position-static"></div>
                        </div>
                        <!-- End of Pricing slider -->
                    </div>
                </div>
            </div>
        </section>
        <!-- End of Pricing plans -->
        <!-- Our team -->
        <section id="team" class="pt-7 pb-5-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8 col-md-10">
                        <div class="section-title text-center">
                            <h2 data-animate="fadeInUp" data-delay=".1">Our Team</h2>
                            <h3><a href="#"  data-toggle="modal" data-target="#ListTeam"><i class="fa  fa-edit" style="font-size:18px;color:green"></i> Manage content</a></h3>
                            <div id="ListTeam" class="modal fade modal-dialog modal-sm" role="dialog">
                                <div class="modal-dialog">
                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Add Member to team</h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>

                                        </div>
                                        <div class="modal-body">
                                            <form id="station-form" parsley-validate novalidate role="form" class="form-horizontal" name="login-form" enctype="multipart/form-data"  action='<?= base_url(); ?>index.php/create/team'  method="post">

                                                <div class="row-fluid"> 
                                                    <div class=" span8">
                                                        <div class="setting"></div>
                                                        <div class="setting image_picker">
                                                            <h2>Picture</h2>
                                                            <div class="settings_wrap">
                                                                <label class="drop_target">
                                                                    <div class="image_preview"></div>
                                                                    <input id="inputFile" name="userfile" type="file"/>
                                                                </label>
                                                                <div class="settings_actions vertical"><a data-action="choose_from_uploaded"><i class="fa fa-picture-o"></i>Choose from Uploads</a><a class="disabled" data-action="remove_current_image"><i class="fa fa-ban"></i> Remove Current Image</a></div>

                                                                <div class="form-group">                        
                                                                    <input type="text" name="title" placeholder="Title" id="title" required class="form-control"/>
                                                                </div>
                                                                <div class="form-group">                        
                                                                    <input type="text" name="name" placeholder="Name" id="title" required class="form-control"/>
                                                                </div>
                                                                <div class="form-group">                        
                                                                    <input type="text" name="email" placeholder="E-mail" id="email" required class="form-control"/>
                                                                </div>
                                                                <div class="form-group"> 
                                                                    <label >Password</label>   
                                                                    <input id="password" type="password" name="password" data-validate-length="4" class="form-control" required="required">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label >Visible on home page</label>                              
                                                                    <select class="optional form-control "  data-placeholder="Show on home page" name="visible" id="visible">                                                                            
                                                                        <option value="Yes" />Yes
                                                                        <option value="No" />No
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="setting"></div>

                                                        <div class="">
                                                            <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>  <button class="btn btn-success pull-right" type="submit">SUBMIT</button> 

                                                        </div>
                                                    </div>                                       
                                                </div>


                                            </form>
                                        </div>
                                        <div class="modal-footer">

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Members -->
                <div class="row">
                    <?php
                    if (is_array($t) && count($t)) {
                        foreach ($t as $l) {
                            ?>                          

                            <div class="col-md-2 col-sm-3">
                                <div class="single-member" data-animate="fadeInUp" data-delay="0">
                                    <div class="image-hover-wrap">
                                        <img src="<?= base_url(); ?>uploads/<?php echo $l->image; ?>" alt="">
                                        <div class="image-hover-content d-flex justify-content-center align-items-center text-center">
                                            <ul class="list-inline">
                                                <li><a href="<?php echo $l->fb; ?>" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="<?php echo $l->twitter; ?>" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="<?php echo $l->google; ?>" target="_blank"><i class="fab fa-google-plus-g"></i></a></li>
                                                <li><a href="<?php echo $l->ldn; ?>" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                                                <li><a href="<?php echo $l->vk; ?>" target="_blank"><i class="fab fa-vk"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="single-member-info bg-light">
                                        <?php echo empty($l->name) ? '<i class="fab fa-check-circle"></i>Name' : ''; ?> <h4 id="team:name:<?php echo $l->id; ?>" contenteditable="true"><?php echo $l->name; ?></h4>
                                        <?php echo empty($l->title) ? '<i class="fab fa-check-circle"></i>Title' : ''; ?>  <span id="team:title:<?php echo $l->id; ?>" contenteditable="true"><?php echo $l->title; ?></span>
                                        <?php echo empty($l->visible) ? '<i class="fab fa-check-circle"></i>Visible Yes/No' : ''; ?>  <span id="team:visible:<?php echo $l->id; ?>" contenteditable="true"><?php echo $l->visible; ?></span>
                                        <?php echo empty($l->email) ? '<i class="fab fa-check-circle"></i>Email' : ''; ?>  <span id="team:email:<?php echo $l->id; ?>" contenteditable="true"><?php echo $l->email; ?></span>
                                        <?php echo empty($l->fb) ? '<i class="fab fa-check-circle"></i>Facebook' : ''; ?> <span id="team:fb:<?php echo $l->id; ?>" contenteditable="true"><?php echo $l->fb; ?></span>
                                        <?php echo empty($l->twitter) ? '<i class="fab fa-check-circle"></i>Twitter' : ''; ?><span id="team:twitter:<?php echo $l->id; ?>" contenteditable="true"><?php echo $l->twitter; ?></span>
                                        <?php echo empty($l->google) ? '<i class="fab fa-check-circle"></i>Google+' : ''; ?><span id="team:google:<?php echo $l->id; ?>" contenteditable="true"><?php echo $l->google; ?></span>
                                        <?php echo empty($l->ldn) ? '<i class="fab fa-check-circle"></i>Linkedin' : ''; ?><span id="team:ldn:<?php echo $l->id; ?>" contenteditable="true"><?php echo $l->ldn; ?></span>
                                        <?php echo empty($l->vk) ? '<i class="fab fa-check-circle"></i>Wikipedia' : ''; ?><span id="team:vk:<?php echo $l->id; ?>" contenteditable="true"><?php echo $l->vk; ?></span>
                                        <a class="blue" href="<?php echo base_url() . "index.php/manage/delete/" . $l->id . "/team"; ?>"><li class="fa fa-trash"></li></a>
                                        <a class="blue" href="<?php echo base_url() . "index.php/create/reset/" . $l->id . "/" . $l->email; ?>"><li class="fa fa-check-circle"></li></a>

                                    </div>
                                </div>
                            </div>

                            <?php
                        }
                    }
                    ?>                

                </div>
            </div>
        </section>
        <!-- End of Our team -->

        <!-- Contact page content -->
        <!-- End of Contact page content -->
        <!-- Servers -->
        <!-- Our clients -->
        <section id="clients" class="clients-wrap pt-4 pb-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8 col-md-10">
                        <div class="section-title text-center">
                            <h2 data-animate="fadeInUp" data-delay=".1">Our Clients</h2>
                            <h3><a href="#"  data-toggle="modal" data-target="#ListClient"><i class="fa  fa-edit" style="font-size:18px;color:green"></i> Manage content</a></h3>
                            <div id="ListClient" class="modal fade modal-dialog modal-sm" role="dialog">
                                <div class="modal-dialog">
                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Add Client</h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>
                                        <div class="modal-body">
                                            <form id="station-form" parsley-validate novalidate role="form" class="form-horizontal" name="login-form" enctype="multipart/form-data"  action='<?= base_url(); ?>index.php/create/client'  method="post">

                                                <div class="row-fluid"> 
                                                    <div class=" span8">
                                                        <div class="setting"></div>
                                                        <div class="setting image_picker">
                                                            <h2>Picture</h2>
                                                            <div class="settings_wrap">
                                                                <label class="drop_target">
                                                                    <div class="image_preview"></div>
                                                                    <input id="inputFile" name="userfile" type="file"/>
                                                                </label>
                                                                <div class="settings_actions vertical"><a data-action="choose_from_uploaded"><i class="fa fa-picture-o"></i>Choose from Uploads</a><a class="disabled" data-action="remove_current_image"><i class="fa fa-ban"></i> Remove Current Image</a></div>


                                                                <div class="form-group">                        
                                                                    <input type="text" name="name" placeholder="Name" id="web" required class="form-control"/>
                                                                </div>
                                                                <div class="form-group">                        
                                                                    <input type="text" name="web" placeholder="Website" id="web" required class="form-control"/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="setting"></div>

                                                        <div class="">
                                                            <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>  <button class="btn btn-success pull-right" type="submit">SUBMIT</button> 

                                                        </div>
                                                    </div>                                       
                                                </div>


                                            </form>
                                        </div>
                                        <div class="modal-footer">

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <ul class="our-clients list-unstyled d-md-flex align-items-md-center justify-content-md-between m-0">

                    <?php
                    if (is_array($c) && count($c)) {
                        foreach ($c as $l) {
                            ?>                          


                            <li data-animate="fadeInUp" data-delay=".1">
                                <a href="<?php echo $l->web; ?>" target="_blank"><img src="<?= base_url(); ?>uploads/<?php echo $l->image; ?>" alt=""></a>
                                <?php echo empty($l->name) ? '<i class="fab fa-check-circle"></i>Client name' : ''; ?>   <h4 id="client:name:<?php echo $l->id; ?>" contenteditable="true"><?php echo $l->name; ?></h4>
                                <?php echo empty($l->web) ? '<i class="fab fa-check-circle"></i>Website' : ''; ?>   <p id="client:web:<?php echo $l->id; ?>" contenteditable="true"><?php echo $l->web; ?></p>
                                <a href="<?php echo base_url() . "index.php/manage/delete/" . $l->id . "/client"; ?>"><li class="fa fa-trash"></li></a>

                            </li>

                            <?php
                        }
                    }
                    ?>                  

                </ul>
            </div>
        </section>
        <!-- End of Our clients -->
        <div id="Login" class="modal fade modal-dialog modal-sm" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Login</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>

                    </div>
                    <div class="modal-body">
                        <form id="station-form" parsley-validate novalidate role="form" class="form-horizontal" name="login-form" enctype="multipart/form-data"  action='<?= base_url(); ?>index.php/manage/login'  method="post">
                            <div class="modal-body overflow-visible"> 
                                <div class="row-fluid"> 
                                    <div class=" span8">
                                        <div class="setting"></div>
                                        <div class="setting image_picker">                                            
                                            <div class="settings_wrap">
                                                <div class="form-group">                        
                                                    <input type="email" name="email" placeholder="e-mail" id="title" required class="form-control"/>
                                                </div>
                                                <div class="form-group"> 
                                                    <label >Password</label>   
                                                    <input id="password" type="password" name="password" data-validate-length="4" class="form-control" required="required">
                                                </div>

                                            </div>
                                        </div>
                                        <div class="setting"></div>

                                        <div class="">
                                            <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>  <button class="btn btn-success pull-right" type="submit">Login</button> 

                                        </div>
                                    </div>                                       
                                </div>

                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">

                    </div>
                </div>

            </div>
        </div>

        <!--Privacy policy--->
        <!--Privacy policy--->
        <div id="terms" class="modal fade modal-dialog modal-sm" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Terms and Conditions</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>

                    </div>

                    <div class="modal-body">
                        <?php
                        if (is_array($h) && count($h)) {
                            foreach ($h as $l) {
                                ?>  
                                <?php echo empty($l->terms) ? '<i class="fab fa-check-circle"></i>Terms and conditions' : ''; ?>  <p id="home:terms:<?php echo $l->id; ?>" contenteditable="true" class="cabin" data-animate="fadeInUp" data-delay=".5"><?php echo $l->terms; ?></p>
                                <?php
                            }
                        }
                        ?>

                    </div>
                    <div class="modal-footer">
                    </div>
                </div>
            </div>
        </div>

        <div id="privacy" class="modal fade modal-dialog modal-sm" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Privacy Policy</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>                    
                    <div class="modal-body">
                        <?php
                        if (is_array($h) && count($h)) {
                            foreach ($h as $l) {
                                ?>  
                                <?php echo empty($l->privacy) ? '<i class="fab fa-check-circle"></i>Privacy terms' : ''; ?>   <p id="home:privacy:<?php echo $l->id; ?>" contenteditable="true" class="cabin" data-animate="fadeInUp" data-delay=".5"><?php echo $l->privacy; ?></p>
                                <?php
                            }
                        }
                        ?>

                    </div>
                    <div class="modal-footer">

                    </div>
                </div>

            </div>
        </div>
        <!-- End policy -->
        <!-- Footer -->
        <footer class="main-footer bg-primary pt-4">
            <div class="container">
                <div class="row pb-3">
                    <!-- Footer info -->
                    <div class="col-md-4">
                        <div class="footer-info">

                            <?php
                            if (is_array($h) && count($h)) {
                                foreach ($h as $l) {
                                    ?>  
                                    <?php echo empty($l->about_title) ? '<i class="fab fa-check-circle"></i>About title' : ''; ?> <h3 id="home:about_title:<?php echo $l->id; ?>" contenteditable="true" class="text-white"  data-animate="fadeInUp" data-delay="0"><?php echo $l->about_title; ?></h3>
                                    <?php echo empty($l->about_text) ? '<i class="fab fa-check-circle"></i>About Content' : ''; ?>  <p id="home:about_text:<?php echo $l->id; ?>" contenteditable="true" data-animate="fadeInUp" data-delay=".05"><?php echo $l->about_text; ?></p>
                                    <?php
                                }
                            }
                            ?>

                            <ul class="footer-contacts list-unstyled">
                                <li data-animate="fadeInUp" data-delay=".1">
                                    <i class="fas fa-phone"></i>
                                    <?php
                                    if (is_array($h) && count($h)) {
                                        foreach ($h as $l) {
                                            ?>  
                                            <?php echo empty($l->tel1) ? '<i class="fab fa-check-circle"></i>Telephone one' : ''; ?>   <a id="home:tel1:<?php echo $l->id; ?>" contenteditable="true" href="<?php echo $l->tel1; ?>"><?php echo $l->tel1; ?></a>, 
                                            <?php echo empty($l->tel2) ? '<i class="fab fa-check-circle"></i>Telephone two' : ''; ?>    <a id="home:tel2:<?php echo $l->id; ?>" contenteditable="true" href="<?php echo $l->tel2; ?>"><?php echo $l->tel2; ?></a>
                                            <?php
                                        }
                                    }
                                    ?>

                                </li>
                                <li data-animate="fadeInUp" data-delay=".15">
                                    <i class="fas fa-envelope"></i>
                                    <?php
                                    if (is_array($h) && count($h)) {
                                        foreach ($h as $l) {
                                            ?>                                                                               
                                            <?php echo empty($l->email) ? '<i class="fab fa-check-circle"></i>Company e-mail' : ''; ?> <a id="home:email:<?php echo $l->id; ?>" contenteditable="true" href="mailto:<?php echo $l->email; ?>"><?php echo $l->email; ?></a>
                                            <?php
                                        }
                                    }
                                    ?>
                                </li>
                                <li data-animate="fadeInUp" data-delay=".2">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <?php
                                    if (is_array($h) && count($h)) {
                                        foreach ($h as $l) {
                                            ?>                                                                               
                                            <?php echo empty($l->address) ? '<i class="fab fa-check-circle"></i>Company address' : ''; ?> <span id="home:address:<?php echo $l->id; ?>" contenteditable="true" ><?php echo $l->address; ?></span>
                                            <?php
                                        }
                                    }
                                    ?>

                                </li>
                            </ul>
                            <ul class="social-links list-inline mb-0">
                                <?php
                                if (is_array($h) && count($h)) {
                                    foreach ($h as $l) {
                                        ?>                                                                               

                                        <li data-animate="fadeInUp" data-delay=".25"><a href="<?php echo $l->fb; ?>" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                        <li data-animate="fadeInUp" data-delay=".3"><a href="<?php echo $l->twitter; ?>" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                        <li data-animate="fadeInUp" data-delay=".35"><a href="<?php echo $l->google; ?>" target="_blank"><i class="fab fa-google-plus-g"></i></a></li>
                                        <li data-animate="fadeInUp" data-delay=".4"><a href="<?php echo $l->ldn; ?>" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                                        <li data-animate="fadeInUp" data-delay=".45"><a href="<?php echo $l->rss; ?>" target="_blank"><i class="fas fa-rss"></i></a></li>
                                        <li data-animate="fadeInUp" data-delay=".5"><a href="<?php echo $l->instagram; ?>" target="_blank"><i class="fab fa-instagram"></i></a></li>

                                        <?php
                                    }
                                }
                                ?>
                                <?php
                                if (is_array($h) && count($h)) {
                                    foreach ($h as $l) {
                                        ?> 
                                        <?php echo empty($l->fb) ? '<i class="fab fa-check-circle"></i>Facebook' : ''; ?> <h3  id="home:fb:<?php echo $l->id; ?>" text="white" contenteditable="true"><?php echo $l->fb; ?></h3>
                                        <?php echo empty($l->twitter) ? '<i class="fab red fa-check-circle"></i>Twitter' : ''; ?><h3  id="home:twitter:<?php echo $l->id; ?>" contenteditable="true"><?php echo $l->twitter; ?></h3>
                                        <?php echo empty($l->google) ? '<i class="fab fa-check-circle"></i>Google' : ''; ?> <h3  id="home:google:<?php echo $l->id; ?>" contenteditable="true"><?php echo $l->google; ?></h3>
                                        <?php echo empty($l->ldn) ? '<i class="fab fa-check-circle"></i>Linkedin' : ''; ?><h3 id="home:ldn:<?php echo $l->id; ?>" contenteditable="true"><?php echo $l->ldn; ?></h3>
                                        <?php echo empty($l->rss) ? '<i class="fab red fa-check-circle"></i>Rss feeds' : ''; ?> <h3 id="home:rss:<?php echo $l->id; ?>" contenteditable="true"><?php echo $l->rss; ?></h3>
                                        <?php echo empty($l->instagram) ? '<i class="fab fa-check-circle"></i>Instagram' : ''; ?> <h3 id="home:instagram:<?php echo $l->id; ?>" contenteditable="true"><?php echo $l->instagram; ?></h3>
                                        <?php
                                    }
                                }
                                ?>

                            </ul>
                        </div>
                    </div>
                    <!-- End of Footer info -->

                    <!-- Footer posts -->

                    <!-- End of Footer posts -->

                    <!-- Footer newsletter -->
                    <div class="col-md-4">
                        <div class="footer-newsletter">
                            <?php
                            if (is_array($h) && count($h)) {
                                foreach ($h as $l) {
                                    ?>                                                                               

                                    <?php echo empty($l->letter_title) ? '<i class="fab fa-check-circle"></i>News Header' : ''; ?>  <h3 id="home:letter_title:<?php echo $l->id; ?>" contenteditable="true"  class="text-white" data-animate="fadeInUp" data-delay=".65"><?php echo $l->letter_title; ?></h3>
                                    <?php echo empty($l->letter) ? '<i class="fab fa-check-circle"></i>News letter' : ''; ?><p  id="home:letter:<?php echo $l->id; ?>" contenteditable="true"  data-animate="fadeInUp" data-delay=".7"><?php echo $l->letter; ?></p>

                                    <?php
                                }
                            }
                            ?>
                            <form enctype="multipart/form-data"  action='<?= base_url(); ?>index.php/create/subscribe'  method="post"  name="mc-embedded-subscribe-form" target="_blank">
                                <div class="form-group" data-animate="fadeInUp" data-delay=".75">
                                    <input class="form-control" type="email" name="email" placeholder="Enter Your E-mail Address" required>
                                </div>
                                <div class="subscribe-submit form-group clearfix mb-0" data-animate="fadeInUp" data-delay=".8">
                                    <button class="btn btn-primary btn-square float-left" type="submit">Subscribe</button>
                                    <span> <br></span>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-4">

                    </div>
                    <!-- End of Footer newsletter -->
                </div>

                <div class="bottom-footer">
                    <div class="row">
                        <!-- Copyright -->
                        <div class="col-md-5 order-last order-md-first">
                            <p class="copyright" data-animate="fadeInDown" data-delay=".85">&copy; Copyright 2018 <a href="#">omnierps.com</a></p>
                        </div>

                        <!-- Footer menu -->
                        <div class="col-md-7 order-first order-md-last">
                            <ul class="footer-menu list-inline text-md-right mb-md-0" data-animate="fadeInDown" data-delay=".95">
                                <li><a href="#">Affiliate</a></li>
                                <li>|</li>
                                <li><a href="#" data-toggle="modal" data-target="#privacy">Privacy Policy</a></li>
                                <li>|</li>
                                <li><a href="#" data-toggle="modal" data-target="#terms">Terms & Conditions</a></li>
                                <li>|</li>
                                <li><a href="#"  data-toggle="modal" data-target="#Login">Manage</a></li>
                                <li>|</li>
                                <li><a href="<?php echo base_url() . "index.php/manage/logout/"; ?>">Logout</a></li>


                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End of Footer -->
        <!-- Back to top -->
        <div class="back-to-top">
            <a href="#"> <i class="fas fa-arrow-up"></i></a>
        </div>
        <!-- JS Files -->
        <script src="<?= base_url(); ?>js/jquery-3.2.1.min.js"></script>
        <script src="<?= base_url(); ?>js/fontawesome-all.min.js"></script>
        <script src="<?= base_url(); ?>js/bootstrap.bundle.min.js"></script>
        <script src="<?= base_url(); ?>plugins/typed.js/typed.min.js"></script>
        <script src="<?= base_url(); ?>plugins/waypoints/jquery.waypoints.min.js"></script>
        <script src="<?= base_url(); ?>plugins/waypoints/sticky.min.js"></script>
        <script src="<?= base_url(); ?>plugins/swiper/swiper.min.js"></script>
        <script src="<?= base_url(); ?>plugins/particles.js/particles.min.js"></script>
        <script src="<?= base_url(); ?>plugins/particles.js/particles.settings.js"></script>
        <script src="<?= base_url(); ?>plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
        <script src="<?= base_url(); ?>plugins/parsley/parsley.min.js"></script>
        <script src="<?= base_url(); ?>plugins/parallax/parallax.min.js"></script>
        <script src="<?= base_url(); ?>plugins/retinajs/retina.min.js"></script>
        <script src="<?= base_url(); ?>js/menu.min.js"></script>
        <script src="<?= base_url(); ?>js/scripts.js"></script>
        <script src="<?= base_url(); ?>js/custom.js"></script>
        <script type="text/javascript" src="<?= base_url(); ?>js/wowslider.js"></script>
        <script type="text/javascript" src="<?= base_url(); ?>js/script.js"></script>        <!-- End WOWSlider.com BODY section -->
        <script type="text/javascript" src="<?= base_url(); ?>js/vnkaz.js"></script>  
    </body>
</html>



<script>
    $(document).ready(function () {
        $("#status").hide();
        $(function () {
            //acknowledgement message
            var message_status = $("#status");
            $("h1[contenteditable=true]").blur(function () {
                // message_status.show();
                var field_id = $(this).attr("id");
                var value = $(this).text();
                //   alert(field_id);
                console.log(field_id);
                console.log(value);
                $.post('<?php echo base_url() . "index.php/manage/update/"; ?>', field_id + "=" + value, function (data) {
                    if (data != '')
                    {
                        message_status.show();
                        message_status.text(data);
                        //hide the message
                        setTimeout(function () {
                            message_status.hide()
                        }, 4000);
                    }
                });
            });
            $("p[contenteditable=true]").blur(function () {
                // message_status.show();
                var field_id = $(this).attr("id");
                var value = $(this).text();
                //   alert(field_id);
                console.log(field_id);
                console.log(value);
                $.post('<?php echo base_url() . "index.php/manage/update/"; ?>', field_id + "=" + value, function (data) {
                    if (data != '')
                    {

                        message_status.show();
                        message_status.text(data);
                        //hide the message
                        setTimeout(function () {
                            message_status.hide()
                        }, 4000);
                    }
                });
            });
            $("span[contenteditable=true]").blur(function () {
                // message_status.show();
                var field_id = $(this).attr("id");
                var value = $(this).text();
                //   alert(field_id);
                console.log(field_id);
                console.log(value);
                $.post('<?php echo base_url() . "index.php/manage/update/"; ?>', field_id + "=" + value, function (data) {
                    if (data != '')
                    {

                        message_status.show();
                        message_status.text(data);
                        //hide the message
                        setTimeout(function () {
                            message_status.hide()
                        }, 4000);
                    }
                });
            });
            $("h2[contenteditable=true]").blur(function () {
                // message_status.show();
                var field_id = $(this).attr("id");
                var value = $(this).text();
                //   alert(field_id);
                console.log(field_id);
                console.log(value);
                $.post('<?php echo base_url() . "index.php/manage/update/"; ?>', field_id + "=" + value, function (data) {
                    if (data != '')
                    {

                        message_status.show();
                        message_status.text(data);
                        //hide the message
                        setTimeout(function () {
                            message_status.hide()
                        }, 4000);
                    }
                });
            });
            $("h3[contenteditable=true]").blur(function () {
                // message_status.show();
                var field_id = $(this).attr("id");
                var value = $(this).text();
                //   alert(field_id);
                console.log(field_id);
                console.log(value);
                $.post('<?php echo base_url() . "index.php/manage/update/"; ?>', field_id + "=" + value, function (data) {
                    if (data != '')
                    {
                        message_status.show();
                        message_status.text(data);
                        //hide the message
                        setTimeout(function () {
                            message_status.hide()
                        }, 4000);
                    }
                });
            });
            $("h3[contenteditable=true]").blur(function () {
                // message_status.show();
                var field_id = $(this).attr("id");
                var value = $(this).text();
                //   alert(field_id);
                console.log(field_id);
                console.log(value);
                $.post('<?php echo base_url() . "index.php/manage/update/"; ?>', field_id + "=" + value, function (data) {
                    if (data != '')
                    {
                        message_status.show();
                        message_status.text(data);
                        //hide the message
                        setTimeout(function () {
                            message_status.hide()
                        }, 4000);
                    }
                });
            });
            $("li[contenteditable=true]").blur(function () {
                // message_status.show();
                var field_id = $(this).attr("id");
                var value = $(this).text();
                //   alert(field_id);
                console.log(field_id);
                console.log(value);
                $.post('<?php echo base_url() . "index.php/manage/update/"; ?>', field_id + "=" + value, function (data) {
                    if (data != '')
                    {

                        message_status.show();
                        message_status.text(data);
                        //hide the message
                        setTimeout(function () {
                            message_status.hide()
                        }, 4000);
                    }
                });
            });
            $("li[contenteditable=true]").blur(function () {
                // message_status.show();
                var field_id = $(this).attr("id");
                var value = $(this).text();
                //   alert(field_id);
                console.log(field_id);
                console.log(value);
                $.post('<?php echo base_url() . "index.php/manage/update/"; ?>', field_id + "=" + value, function (data) {
                    if (data != '')
                    {

                        message_status.show();
                        message_status.text(data);
                        //hide the message
                        setTimeout(function () {
                            message_status.hide()
                        }, 4000);
                    }
                });
            });
            $("a[contenteditable=true]").blur(function () {
                // message_status.show();
                var field_id = $(this).attr("id");
                var value = $(this).text();
                //   alert(field_id);
                console.log(field_id);
                console.log(value);
                $.post('<?php echo base_url() . "index.php/manage/update/"; ?>', field_id + "=" + value, function (data) {
                    if (data != '')
                    {
                        message_status.show();
                        message_status.text(data);
                        //hide the message
                        setTimeout(function () {
                            message_status.hide()
                        }, 4000);
                    }
                });
            });
            $("td[contenteditable=true]").blur(function () {
                // message_status.show();
                var field_id = $(this).attr("id");
                var value = $(this).text();
                //   alert(field_id);
                console.log(field_id);
                console.log(value);
                $.post('<?php echo base_url() . "index.php/manage/update/"; ?>', field_id + "=" + value, function (data) {
                    if (data != '')
                    {
                        message_status.show();
                        message_status.text(data);
                        //hide the message
                        setTimeout(function () {
                            message_status.hide()
                        }, 4000);
                    }
                });
            });

        });
    });

</script>
<script>
    var typedElement = '.typed',
            typedTarget = $(typedElement);

    if (typedTarget.length) {
        var typed = new Typed(typedElement, {
            strings: ['Omnierps,<?php
                            if (is_array($y)) {
                                foreach ($y as $l) {
                                    echo $l->texting . ',';
                                }
                            }
                            ?>'],
            typeSpeed: 100,
            backSpeed: 10,
            loop: true
        });
    }
</script>