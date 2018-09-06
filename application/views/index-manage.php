<!DOCTYPE html>
<html lang="en">
    <head>

        <!--
                Basic
        -->
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
        <title>DOUGLAS WERE</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <meta name="description" content="vCard & Resume Template" />
        <meta name="keywords" content="vcard, resposnive, resume, personal, card, cv, cards, portfolio" />
        <meta name="author" content="beshleyua" />

        <!--
                Load Fonts
        -->
        <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css" integrity="sha384-5SOiIsAziJl6AWe0HWRKTXlfcSHKmYV4RBF18PPJ173Kzn7jzMyFuTtk8JA7QQG1" crossorigin="anonymous">

        <!--
                Load CSS
        -->
        <link rel="stylesheet" href="<?= base_url(); ?>css/basic.css" />
        <link rel="stylesheet" href="<?= base_url(); ?>css/layout.css" />
        <link rel="stylesheet" href="<?= base_url(); ?>css/blogs.css" />
        <link rel="stylesheet" href="<?= base_url(); ?>css/ionicons.css" />
        <link rel="stylesheet" href="<?= base_url(); ?>css/magnific-popup.css" />
        <link rel="stylesheet" href="<?= base_url(); ?>css/animate.css" />

        <!--
                Template Colors
        -->
        <link rel="stylesheet" href="<?= base_url(); ?>css/template-colors/green.css" />
        <!--<link rel="stylesheet" href="<?= base_url(); ?>css/template-colors/blue.css" />-->
        <!--<link rel="stylesheet" href="<?= base_url(); ?>css/template-colors/orange.css" />-->
        <!--<link rel="stylesheet" href="<?= base_url(); ?>css/template-colors/pink.css" />-->
        <!--<link rel="stylesheet" href="<?= base_url(); ?>css/template-colors/purple.css" />-->
        <!--<link rel="stylesheet" href="<?= base_url(); ?>css/template-colors/red.css" />-->

        <!--[if lt IE 9]>
        <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <!--
                Favicons
        -->
        <link rel="shortcut icon" href="images/favicons/favicon.ico">

    </head>

    <body>
        <div class="page">

            <!-- preloader -->
            <div class="preloader">
                <div class="centrize full-width">
                    <div class="vertical-center">
                        <div class="spinner">
                            <div class="double-bounce1"></div>
                            <div class="double-bounce2"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- background -->
            <div class="background"></div>
            <!--
                    Container
            -->
            <div class="container opened" data-animation-in="fadeInLeft" data-animation-out="fadeOutLeft">
                <!--
                        Header
                -->
                <header class="header">
                    <!-- menu -->
                    <div class="top-menu">
                        <ul>
                            <li class="active">
                                <a href="#about-card">
                                    <span class="icon ion-person"></span>
                                    <span class="link">About</span>
                                </a>
                            </li>
                            <li>
                                <a href="#resume-card">
                                    <span class="icon ion-android-list"></span>
                                    <span class="link">Resume</span>
                                </a>
                            </li>
                            <li>
                                <a href="#works-card">
                                    <span class="icon ion-paintbrush"></span>
                                    <span class="link">Works</span>
                                </a>
                            </li>
                            <li>
                                <a href="#blog-card">
                                    <span class="icon ion-chatbox-working"></span>
                                    <span class="link">Blog</span>
                                </a>
                            </li>
                            <li>
                                <a href="#contacts-card">
                                    <span class="icon ion-at"></span>
                                    <span class="link">Contact</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </header>
                <!--
                        Card - Started
                -->
                <div class="card-started" id="home-card">
                    <!--
                            Profile
                    -->
                    <div class="profile">
                        <!-- profile image -->

                        <?php
                        foreach ($b as $l) {
                            ?> 
                            <div class="slide" style="background-image: url(<?= base_url(); ?>uploads/<?php echo $l->image; ?>);"></div>
                            <a class="blue" href="<?php echo base_url() . "index.php/manage/delete/" . $l->id . "/background"; ?>"><li class="fa fa-trash"></li></a>

                            <?php
                        }
                        ?>
                        <!-- profile photo -->                       

                        <?php
                        foreach ($p as $l) {
                            ?> 
                            <div class="image">
                                <img src="<?= base_url(); ?>uploads/<?php echo $l->image; ?>" alt="" />
                            </div>
                            <a class="blue" href="<?php echo base_url() . "index.php/manage/delete/" . $l->id . "/photo"; ?>"><li class="fa fa-trash"></li></a>

                            <?php
                        }
                        ?>  

                        <!-- profile titles -->
                        <?php
                        if (is_array($h) && count($h)) {
                            foreach ($h as $l) {
                                ?> 
                                <?php echo empty($l->name) ? '<i class="fab fa-check-circle"></i>Name' : ''; ?>   <div id="about:name:<?php echo $l->id; ?>" contenteditable="true"  class="title"><?php echo $l->name; ?></div>
                                <?php echo empty($l->title) ? '<i class="fab fa-check-circle"></i>Title' : ''; ?>   <div  id="about:title:<?php echo $l->id; ?>" contenteditable="true" class="subtitle"><?php echo $l->title; ?></div>
                                <?php
                            }
                        }
                        ?>                      

                        <!-- profile socials -->
                        <div class="social">
                            <?php
                            if (is_array($s) && count($s)) {
                                foreach ($s as $l) {
                                    ?> 
                                    <a id="social:link:<?php echo $l->id; ?>" contenteditable="true" target="_blank" href="<?php echo $l->link; ?>"><span class="<?php echo $l->class; ?>"><?php echo $l->link; ?></span></a>
                                    <a class="blue" href="<?php echo base_url() . "index.php/manage/delete/" . $l->id . "/social"; ?>"><li class="fa fa-trash"></li></a>

                                    <?php
                                }
                            }
                            ?>

<!--                            <a target="_blank" href="https://dribbble.com/"><span class="fab fa-dribbble"></span></a>
                            <a target="_blank" href="https://twitter.com/"><span class="fab fa-twitter"></span></a>
                            <a target="_blank" href="https://github.com/"><span class="fab fa-github"></span></a>
                            <a target="_blank" href="https://www.spotify.com/"><span class="fab fa-spotify"></span></a>
                            <a target="_blank" href="https://stackoverflow.com/"><span class="fab fa-stack-overflow"></span></a>-->

                        </div>
                        <!-- profile buttons -->
                        <div class="lnks">
                            <?php
                            foreach ($cv as $l) {
                                ?> 
                                <a href="<?= base_url(); ?>uploads/<?php echo $l->file; ?>" class="lnk">
                                    <?php
                                }
                                ?>  
                                <span class="text">Download CV</span>
                                <span class="ion ion-archive"></span>
                            </a>
                            <a href="#" class="lnk discover">
                                <span class="text">Contact Me</span>
                                <span class="arrow"></span>
                            </a>
                            <div>Manage:<a href="#popup-cv" class="name has-popup-media">CV</a> | <a href="#popup-bg" class="name has-popup-media">Background</a> |<a href="#popup-photo" class="name has-popup-media">Profile pic</a> |   <a href="#popup-social" class="name has-popup-media">Social media</a> | <a href="#popup-login" class="name has-popup-media">Login</a>   </div>
                        </div>
                    </div>

                </div>                
                <!-- 
                      Pop up all start here
                -->
                <div id="popup-bg" class="popup-box mfp-fade mfp-hide">
                    <div class="content">
                        <div class="desc">
                            <div class="post-box">
                                <h1>Background</h1>						

                                <form id="station-form" parsley-validate novalidate role="form" class="form-horizontal" name="login-form" enctype="multipart/form-data"  action='<?= base_url(); ?>index.php/create/background'  method="post">
                                    <div class="modal-body overflow-visible"> 
                                        <div class="row-fluid"> 
                                            <div class=" span8">
                                                <div class="setting image_picker">
                                                    <h2>Image</h2>
                                                    <div class="settings_wrap">
                                                        <label class="drop_target">
                                                            <div class="image_preview"></div>
                                                            <input id="inputFile" name="userfile" type="file"/>
                                                        </label>
                                                        <div class="settings_actions vertical"><a data-action="choose_from_uploaded"><i class="fa fa-picture-o"></i> Choose from Uploads</a><a class="disabled" data-action="remove_current_image"><i class="fa fa-ban"></i> Remove Current Image</a></div>
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
                        </div>
                    </div>
                </div>
                <div id="popup-photo" class="popup-box mfp-fade mfp-hide">
                    <div class="content">
                        <div class="desc">
                            <div class="post-box">
                                <h1>Photo</h1>	
                                <form id="station-form" parsley-validate novalidate role="form" class="form-horizontal" name="login-form" enctype="multipart/form-data"  action='<?= base_url(); ?>index.php/create/photo'  method="post">
                                    <div class="modal-body overflow-visible"> 
                                        <div class="row-fluid"> 
                                            <div class=" span8">
                                                <div class="setting image_picker">
                                                    <h2>Image</h2>
                                                    <div class="settings_wrap">
                                                        <label class="drop_target">
                                                            <div class="image_preview"></div>
                                                            <input id="inputFile" name="userfile" type="file"/>
                                                        </label>
                                                        <div class="settings_actions vertical"><a data-action="choose_from_uploaded"><i class="fa fa-picture-o"></i> Choose from Uploads</a><a class="disabled" data-action="remove_current_image"><i class="fa fa-ban"></i> Remove Current Image</a></div>
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
                        </div>
                    </div>
                </div>
                <div id="popup-social" class="popup-box mfp-fade mfp-hide">
                    <div class="content">

                        <div class="desc">
                            <div class="post-box">
                                <h1>Social media</h1>						
                                <div class="blog-detail">Social Media</div>
                                <form id="station-form" parsley-validate novalidate role="form" class="form-horizontal" name="login-form" enctype="multipart/form-data"  action='<?= base_url(); ?>index.php/create/social'  method="post">
                                    <div class="modal-body overflow-visible"> 
                                        <div class="row-fluid"> 
                                            <div class=" span8">
                                                <div class="form-group">                        
                                                    <input type="text" name="class" placeholder="Class" id="class" required class="form-control"/>
                                                </div>
                                                <div class="form-group">                        
                                                    <input type="text" name="link" placeholder="Link" id="link" required class="form-control"/>
                                                </div>

                                                <div class="">
                                                    <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>  <button class="btn btn-success pull-right" type="submit">SUBMIT</button> 

                                                </div>
                                            </div>                                       
                                        </div>

                                    </div>
                                </form>                                            
                            </div>
                        </div>
                    </div>
                </div>
                <div id="popup-login" class="popup-box mfp-fade mfp-hide">
                    <div class="content">
                        <div class="desc">
                            <div class="post-box">
                                <h1>Login</h1>						

                                <form id="station-form" parsley-validate novalidate role="form" class="form-horizontal" name="login-form" enctype="multipart/form-data"  action='<?= base_url(); ?>index.php/manage/login'  method="post">
                                    <div class="modal-body overflow-visible"> 
                                        <div class="row-fluid"> 
                                            <div class=" span8">
                                                <div class="form-group">                        
                                                    <input type="email" name="email" placeholder="e-mail" id="title" required class="form-control"/>
                                                </div>
                                                <div class="form-group"> 
                                                    <label >Password</label>   
                                                    <input id="password" type="password" name="password" data-validate-length="4" class="form-control" required="required">
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
                        </div>
                    </div>
                </div>
                <div id="popup-cv" class="popup-box mfp-fade mfp-hide">
                    <div class="content">
                        <div class="desc">
                            <div class="post-box">
                                <h1>CV</h1>						

                                <form id="station-form" parsley-validate novalidate role="form" class="form-horizontal" name="login-form" enctype="multipart/form-data"  action='<?= base_url(); ?>index.php/create/cv'  method="post">
                                    <div class="modal-body overflow-visible"> 
                                        <div class="row-fluid"> 
                                            <div class=" span8">
                                                <div class="setting image_picker">
                                                    <h2>FILE/PDF</h2>
                                                    <div class="settings_wrap">
                                                        <label class="drop_target">
                                                            <div class="image_preview"></div>
                                                            <input id="inputFile" name="userfile" type="file"/>
                                                        </label>
                                                        <div class="settings_actions vertical"><a data-action="choose_from_uploaded"><i class="fa fa-picture-o"></i> Choose from Uploads</a><a class="disabled" data-action="remove_current_image"><i class="fa fa-ban"></i> Remove Current Image</a></div>
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
                        </div>
                    </div>
                </div>
                <!-- 
                        End-pop up 
                -->
                <!-- 
                        Card - About
                -->
                <div class="card-inner animated active" id="about-card">
                    <div class="card-wrap">
                        <!-- 
                                About 
                        -->
                        <div class="content about">

                            <!-- title -->
                            <div class="title">About Me</div>
                            <div class="desc">
                                <a href="#popup-about" class="name has-popup-media">Manage about</a>                                
                            </div>
                            <div id="popup-about" class="popup-box mfp-fade mfp-hide">
                                <div class="content">

                                    <div class="desc">
                                        <div class="post-box">
                                            <h1>About me</h1>						

                                            <form id="station-form" parsley-validate novalidate role="form" class="form-horizontal" name="login-form" enctype="multipart/form-data"  action='<?= base_url(); ?>index.php/create/about'  method="post">
                                                <div class="modal-body overflow-visible"> 
                                                    <div class="row-fluid"> 
                                                        <div class=" span8">
                                                            <div class="form-group">                        
                                                                <input type="text" name="content" placeholder="Content" id="content" required class="form-control"/>
                                                            </div>
                                                            <div class="form-group">                        
                                                                <input type="text" name="address" placeholder="Address" id="address" required class="form-control"/>
                                                            </div>
                                                            <div class="form-group">                        
                                                                <input type="text" name="details" placeholder="Details" id="details" required class="form-control"/>
                                                            </div>
                                                            <div class="form-group">                        
                                                                <input type="text" name="name" placeholder="Name" id="name" required class="form-control"/>
                                                            </div>
                                                            <div class="form-group">                        
                                                                <input type="text" name="title" placeholder="Title" id="title" required class="form-control"/>
                                                            </div>

                                                            <div class="">
                                                                <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>  <button class="btn btn-success pull-right" type="submit">SUBMIT</button> 

                                                            </div>
                                                        </div>                                       
                                                    </div>

                                                </div>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- content -->
                            <div class="row">
                                <div class="col col-d-12 col-t-12 col-m-12 border-line-v">
                                    <div class="text-box">
                                        <?php
                                        foreach ($h as $l) {
                                            ?>  
                                            <?php echo empty($l->content) ? '<i class="ion ion-music-note"></i>About you' : ''; ?>  <p id="about:content:<?php echo $l->id; ?>" contenteditable="true" class="cabin" data-animate="fadeInUp" data-delay=".5"><?php echo $l->content; ?></p>
                                            <?php
                                        }
                                        ?>

                                    </div>
                                    <div class="info-list">
                                        <div class="desc">
                                            <a href="#popup-info" class="name has-popup-media">Manage info</a>                                
                                        </div>
                                        <div id="popup-info" class="popup-box mfp-fade mfp-hide">
                                            <div class="content">
                                                <div class="desc">
                                                    <div class="post-box">
                                                        <h1>Info</h1>						

                                                        <form id="station-form" parsley-validate novalidate role="form" class="form-horizontal" name="login-form" enctype="multipart/form-data"  action='<?= base_url(); ?>index.php/create/info'  method="post">
                                                            <div class="modal-body overflow-visible"> 
                                                                <div class="row-fluid"> 
                                                                    <div class=" span8">
                                                                        <div class="form-group">                        
                                                                            <input type="text" name="title" placeholder="Title" id="title" required class="form-control"/>
                                                                        </div>
                                                                        <div class="form-group">                        
                                                                            <input type="text" name="value" placeholder="Value" id="value" required class="form-control"/>
                                                                        </div>                                                                     
                                                                        <div class="">
                                                                            <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>  <button class="btn btn-success pull-right" type="submit">SUBMIT</button> 

                                                                        </div>
                                                                    </div>                                       
                                                                </div>

                                                            </div>
                                                        </form>                                                       
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <ul>
                                            <?php
                                            if (is_array($i) && count($i)) {
                                                foreach ($i as $l) {
                                                    ?> 
                                                    <li ><strong id="info:title:<?php echo $l->id; ?>" contenteditable="true"><?php echo $l->title; ?></strong><span id="info:value:<?php echo $l->id; ?>" contenteditable="true"> <?php echo $l->value; ?></span><a class="blue" href="<?php echo base_url() . "index.php/manage/delete/" . $l->id . "/info"; ?>">.X</a></li>

                                                    <?php
                                                }
                                            }
                                            ?>

                                        </ul>
                                    </div>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>                        <!--
                                Services
                        -->
                        <div class="content services">
                            <!-- title -->
                            <div class="title">My Services</div>
                            <a href="#popup-services" class="name has-popup-media">Manage</a> 
                            <div id="popup-services" class="popup-box mfp-fade mfp-hide">
                                <div class="content">
                                    <div class="desc">
                                        <div class="post-box">

                                            <div class="blog-detail">Add services</div>
                                            <form id="station-form" parsley-validate novalidate role="form" class="form-horizontal" name="login-form" enctype="multipart/form-data"  action='<?= base_url(); ?>index.php/create/services'  method="post">
                                                <div class="modal-body overflow-visible"> 
                                                    <div class="row-fluid"> 
                                                        <div class=" span8">
                                                            <div class="form-group">                        
                                                                <input type="text" name="class" placeholder="Class" id="class" required class="form-control"/>
                                                            </div>
                                                            <div class="form-group">                        
                                                                <input type="text" name="title" placeholder="Title" id="title" required class="form-control"/>
                                                            </div>
                                                            <div class="form-group">                        
                                                                <input type="text" name="content" placeholder="Details" id="content" required class="form-control"/>
                                                            </div>
                                                            <div class="">
                                                                <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>  <button class="btn btn-success pull-right" type="submit">SUBMIT</button> 

                                                            </div>
                                                        </div>                                       
                                                    </div>

                                                </div>
                                            </form>                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- content -->
                            <div class="row service-items border-line-v">
                                <?php
                                if (is_array($v) && count($v)) {
                                    foreach ($v as $l) {
                                        ?> 
                                        <li ><strong id="info:title:<?php echo $l->id; ?>" contenteditable="true"><?php echo $l->title; ?></strong><span id="info:value:<?php echo $l->id; ?>" contenteditable="true"> <?php echo $l->value; ?></span><a class="blue" href="<?php echo base_url() . "index.php/manage/delete/" . $l->id . "/info"; ?>">.X</a></li>

                                        <div class="col col-d-6 col-t-6 col-m-12 border-line-h">
                                            <div class="service-item">
                                                <div class="icon"><span class="<?php echo $l->class; ?>"></span></div>
                                                <div id="services:title:<?php echo $l->id; ?>" contenteditable="true" class="name"><?php echo $l->title; ?></div>
                                                <p id="services:content:<?php echo $l->id; ?>" contenteditable="true">
                                                    <?php echo $l->content; ?>
                                                </p>
                                                <a class="blue" href="<?php echo base_url() . "index.php/manage/delete/" . $l->id . "/services"; ?>"><li class="fa fa-trash"></li></a>

                                            </div>
                                        </div>                                                   

                                        <?php
                                    }
                                }
                                ?>
                                <div class="clear"></div>
                            </div>
                        </div>
                        <!--
                                Price Tables
                        -->
                        <!--
                                Clients
                        -->
                        <div class="content clients">
                            <!-- title -->
                            <div class="title">Clients</div>
                            <a href="#popup-client" class="name has-popup-media">Manage</a> 
                            <div id="popup-client" class="popup-box mfp-fade mfp-hide">
                                <div class="content">
                                    <div class="desc">
                                        <div class="post-box">                                       					
                                            <div class="blog-detail">Add client</div>
                                            <form id="station-form" parsley-validate novalidate role="form" class="form-horizontal" name="login-form" enctype="multipart/form-data"  action='<?= base_url(); ?>index.php/create/client'  method="post">
                                                <div class="modal-body overflow-visible"> 
                                                    <div class="row-fluid"> 
                                                        <div class=" span8">
                                                            <div class="setting image_picker">
                                                                <h2>Image</h2>
                                                                <div class="settings_wrap">
                                                                    <label class="drop_target">
                                                                        <div class="image_preview"></div>
                                                                        <input id="inputFile" name="userfile" type="file"/>
                                                                    </label>
                                                                    <div class="settings_actions vertical"><a data-action="choose_from_uploaded"><i class="fa fa-picture-o"></i> Choose from Uploads</a><a class="disabled" data-action="remove_current_image"><i class="fa fa-ban"></i> Remove Current Image</a></div>
                                                                    <div class="form-group">                        
                                                                        <input type="text" name="link" placeholder="URL" id="link" required class="form-control"/>
                                                                    </div>
                                                                </div>
                                                                <div class="">
                                                                    <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>  <button class="btn btn-success pull-right" type="submit">SUBMIT</button> 

                                                                </div>
                                                            </div>
                                                            <div class="setting"></div>
                                                        </div>                                       
                                                    </div>
                                                </div>
                                            </form>                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- content -->
                            <div class="row client-items">
                                <?php
                                if (is_array($c) && count($c)) {
                                    foreach ($c as $l) {
                                        ?> 
                                        <li ><strong id="info:title:<?php echo $l->id; ?>" contenteditable="true"><?php echo $l->title; ?></strong><span id="info:value:<?php echo $l->id; ?>" contenteditable="true"> <?php echo $l->value; ?></span><a class="blue" href="<?php echo base_url() . "index.php/manage/delete/" . $l->id . "/info"; ?>">.X</a></li>

                                        <div class="col col-d-3 col-t-3 col-m-6 border-line-v">
                                            <div class="client-item">
                                                <div class="image">
                                                    <a id="client:link:<?php echo $l->id; ?>" contenteditable="true" target="_blank" href="<?php echo $l->link; ?>"><?php echo $l->link; ?>

                                                    </a> <a target="_blank" href="<?php echo $l->link; ?>"> <img src="<?= base_url(); ?>uploads/<?php echo $l->image; ?>" alt="" /></a><a class="blue" href="<?php echo base_url() . "index.php/manage/delete/" . $l->id . "/client"; ?>"><li class="fa fa-trash"></li></a>

                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                    }
                                }
                                ?>
                                <div class="clear"></div>
                            </div>

                        </div>

                    </div>
                </div>

                <!--
                        Card - Resume
                -->
                <div class="card-inner" id="resume-card">
                    <div class="card-wrap">
                        <!--
                                Resume
                        -->
                        <div class="content resume">

                            <!-- title -->
                            <div class="title">Resume</div>
                            <!-- content -->
                            <div class="row">

                                <!-- experience -->
                                <div class="col col-d-6 col-t-6 col-m-12 border-line-v">
                                    <div class="resume-title border-line-h">
                                        <div class="icon"><i class="ion ion-briefcase"></i></div>
                                        <div class="name">Experience</div>
                                        <a href="#popup-exp" class="name has-popup-media">Manage</a> 
                                        <div id="popup-exp" class="popup-box mfp-fade mfp-hide">
                                            <div class="content">
                                                <div class="desc">
                                                    <div class="post-box">                                       					
                                                        <div class="blog-detail">Add Experience</div>
                                                        <form id="station-form" parsley-validate novalidate role="form" class="form-horizontal" name="login-form" enctype="multipart/form-data"  action='<?= base_url(); ?>index.php/create/experience'  method="post">
                                                            <div class="modal-body overflow-visible"> 
                                                                <div class="row-fluid"> 
                                                                    <div class=" span8">

                                                                        <div class="form-group">                        
                                                                            <input type="text" name="period" placeholder="Period" id="class" required class="form-control"/>
                                                                        </div>
                                                                        <div class="form-group">                        
                                                                            <input type="text" name="company" placeholder="Company" id="company" required class="form-control"/>
                                                                        </div>
                                                                        <div class="form-group">                        
                                                                            <input type="text" name="title" placeholder="Title" id="title" required class="form-control"/>
                                                                        </div>
                                                                        <div class="form-group">                        
                                                                            <textarea type="text" name="details" placeholder="Details" id="details" required class="form-control"></textarea>
                                                                        </div>
                                                                        <div class="form-group">                        
                                                                            <input type="number" name="order" placeholder="Order" id="order" required class="form-control"/>
                                                                        </div>
                                                                        <div class="form-group">                        
                                                                            <input type="text" name="status" placeholder="Active" id="status" required class="form-control"/>
                                                                        </div>

                                                                        <div class="">
                                                                            <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>  <button class="btn btn-success pull-right" type="submit">SUBMIT</button> 

                                                                        </div>
                                                                    </div>                                       
                                                                </div>
                                                            </div>
                                                        </form>                                            
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="resume-items">

                                        <?php
                                        if (is_array($ex) && count($ex)) {
                                            foreach ($ex as $l) {
                                                ?> 
                                                <div class="resume-item border-line-h <?php echo $l->status; ?>">
                                                    <p id="experience:status:<?php echo $l->id; ?>" contenteditable="true" >
                                                        <?php echo $l->status; ?>
                                                    </p>
                                                    <p id="experience:order:<?php echo $l->id; ?>" contenteditable="true" >
                                                        <?php echo $l->order; ?>
                                                    </p>
                                                    <div id="experience:period:<?php echo $l->id; ?>" contenteditable="true"  class="date"><?php echo $l->period; ?></div>
                                                    <div  id="experience:title:<?php echo $l->id; ?>" contenteditable="true"  class="name"><?php echo $l->title; ?></div>
                                                    <div id="experience:company:<?php echo $l->id; ?>" contenteditable="true"  class="company"><?php echo $l->company; ?></div>
                                                    <p id="experience:details:<?php echo $l->id; ?>" contenteditable="true" >
                                                        <?php echo $l->details; ?>
                                                    </p>
                                                    <a class="blue" href="<?php echo base_url() . "index.php/manage/delete/" . $l->id . "/experience"; ?>">.X</a></li>
                                                </div>
                                                <?php
                                            }
                                        }
                                        ?>                                       
                                    </div>
                                </div>

                                <!-- education -->
                                <div class="col col-d-6 col-t-6 col-m-12 border-line-v">
                                    <div class="resume-title border-line-h">
                                        <div class="icon"><i class="ion ion-university"></i></div>
                                        <div class="name">Education</div>
                                        <a href="#popup-ed" class="name has-popup-media">Manage</a> 
                                        <div id="popup-ed" class="popup-box mfp-fade mfp-hide">
                                            <div class="content">
                                                <div class="desc">
                                                    <div class="post-box">                                       					
                                                        <div class="blog-detail">Add Education</div>
                                                        <form id="station-form" parsley-validate novalidate role="form" class="form-horizontal" name="login-form" enctype="multipart/form-data"  action='<?= base_url(); ?>index.php/create/education'  method="post">
                                                            <div class="modal-body overflow-visible"> 
                                                                <div class="row-fluid"> 
                                                                    <div class=" span8">
                                                                        <div class="form-group">                        
                                                                            <input type="text" name="period" placeholder="Period" id="class" required class="form-control"/>
                                                                        </div>
                                                                        <div class="form-group">                        
                                                                            <input type="text" name="name" placeholder="Course" id="name" required class="form-control"/>
                                                                        </div>
                                                                        <div class="form-group">                        
                                                                            <input type="text" name="school" placeholder="School" id="school" required class="form-control"/>
                                                                        </div>
                                                                        <div class="form-group">                        
                                                                            <textarea type="text" name="details" placeholder="Details" id="details" required class="form-control"></textarea>
                                                                        </div>
                                                                        <div class="form-group">                        
                                                                            <input type="number" name="order" placeholder="Order" id="order" required class="form-control"/>
                                                                        </div>
                                                                        <div class="">
                                                                            <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>  <button class="btn btn-success pull-right" type="submit">SUBMIT</button> 

                                                                        </div>
                                                                    </div>                                       
                                                                </div>
                                                            </div>
                                                        </form>                                            
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="resume-items">
                                        <?php
                                        if (is_array($ed) && count($ed)) {
                                            foreach ($ed as $l) {
                                                ?> 
                                                <div class="resume-item border-line-h">
                                                    <div id="education:period:<?php echo $l->id; ?>" contenteditable="true" class="date"><?php echo $l->period; ?></div>
                                                    <div id="education:name:<?php echo $l->id; ?>" contenteditable="true" class="name"><?php echo $l->name; ?></div>
                                                    <div id="education:school:<?php echo $l->id; ?>" contenteditable="true"  class="company"><?php echo $l->school; ?></div>
                                                    <p id="education:details:<?php echo $l->id; ?>" contenteditable="true">
                                                        <?php echo $l->details; ?>
                                                    </p>
                                                    <span id="education:order:<?php echo $l->id; ?>" contenteditable="true" >
                                                        <?php echo $l->order; ?>
                                                    </span>
                                                    <a class="blue" href="<?php echo base_url() . "index.php/manage/delete/" . $l->id . "/education"; ?>">.X</a></li>
                                                </div>

                                                <?php
                                            }
                                        }
                                        ?>

                                    </div>
                                </div>

                                <div class="clear"></div>
                            </div>

                        </div>
                        <!--
                                Skills
                        -->
                        <div class="content skills">
                            <!-- title -->
                            <div class="title">My Skills</div>
                            <a href="#popup-skill" class="name has-popup-media">Manage</a> 
                            <div id="popup-skill" class="popup-box mfp-fade mfp-hide">
                                <div class="content">
                                    <div class="desc">
                                        <div class="post-box">                                       					
                                            <div class="blog-detail">Add Skill</div>
                                            <form id="station-form" parsley-validate novalidate role="form" class="form-horizontal" name="login-form" enctype="multipart/form-data"  action='<?= base_url(); ?>index.php/create/skills'  method="post">
                                                <div class="modal-body overflow-visible"> 
                                                    <div class="row-fluid"> 
                                                        <div class=" span8">
                                                            <div class="form-group">                        
                                                                <input type="text" name="title" placeholder="Title" id="class" required class="form-control"/>
                                                            </div>

                                                            <div class="form-group">                        
                                                                <input type="number" name="level" placeholder="%" id="level" required class="form-control"/>
                                                            </div>
                                                            <div class="">
                                                                <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>  <button class="btn btn-success pull-right" type="submit">SUBMIT</button> 
                                                            </div>
                                                        </div>                                       
                                                    </div>
                                                </div>
                                            </form>                                            
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- content -->
                            <div class="row">
                                <!-- skill item -->
                                <!-- skill item -->
                                <div class="col col-d-6 col-t-6 col-m-12 border-line-v">
                                    <div class="skills-list">
                                        <div class="skill-title border-line-h">
                                            <div class="icon"><i class="ion ion-code"></i></div>
                                            <div class="name">Skills</div>

                                        </div>
                                        <ul>
                                            <?php
                                            if (is_array($sk) && count($sk)) {
                                                foreach ($sk as $l) {
                                                    ?> 

                                                    <li class="border-line-h"> 
                                                        <div id="skills:title:<?php echo $l->id; ?>" contenteditable="true" class="name"><?php echo $l->title; ?></div>
                                                        <div id="skills:level:<?php echo $l->id; ?>" contenteditable="true" class="name"><?php echo $l->level; ?></div>
                                                        <div class="progress">
                                                            <div class="percentage" style="width:<?php echo $l->level; ?>%;"></div>
                                                        </div>
                                                        <a class="blue" href="<?php echo base_url() . "index.php/manage/delete/" . $l->id . "/skills"; ?>">.X</a></li>
                                                    </li>
                                                    <?php
                                                }
                                            }
                                            ?>

                                        </ul>
                                    </div>
                                </div>

                                <div class="clear"></div>
                            </div>

                        </div>

                    </div>
                </div>

                <!--
                        Card - Works
                -->
                <div class="card-inner" id="works-card">
                    <div class="card-wrap">
                        <!--
                                Works
                        -->
                        <div class="content works">
                            <!-- title -->
                            <div class="title">Recent Projects/Works</div>
                            <a href="#popup-works" class="name has-popup-media">Manage</a> 
                            <div id="popup-works" class="popup-box mfp-fade mfp-hide">
                                <div class="content">
                                    <div class="desc">
                                        <div class="post-box">                                       					
                                            <div class="blog-detail">Add Works</div>
                                            <form id="station-form" parsley-validate novalidate role="form" class="form-horizontal" name="login-form" enctype="multipart/form-data"  action='<?= base_url(); ?>index.php/create/works'  method="post">
                                                <div class="modal-body overflow-visible"> 
                                                    <div class="row-fluid"> 
                                                        <div class=" span8">
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
                                                                        <input type="text" name="category" placeholder="Category" id="category" required class="form-control"/>
                                                                    </div>
                                                                    <div class="form-group">                        
                                                                        <textarea name="details"  id="details" required class="form-control"/></textarea>
                                                                    </div>
                                                                    <div class="form-group">                        
                                                                        <input type="text" name="link" placeholder="URL" id="link" required class="form-control"/>
                                                                    </div>
                                                                </div>
                                                                <div class="">
                                                                    <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>  <button class="btn btn-success pull-right" type="submit">SUBMIT</button> 

                                                                </div>
                                                            </div>
                                                            <div class="setting"></div>
                                                        </div>                                       
                                                    </div>
                                                </div>
                                            </form>                                            
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <!-- filters -->
                            <div class="filter-menu filter-button-group">
                                <div class="f_btn active">
                                    <label><input type="radio" name="fl_radio" value="grid-item" />All</label>
                                </div>
                                <div class="f_btn">
                                    <label><input type="radio" name="fl_radio" value="photo" />Photo</label>
                                </div>
                                <div class="f_btn">
                                    <label><input type="radio" name="fl_radio" value="video" />Video</label>
                                </div>
                                <div class="f_btn">
                                    <label><input type="radio" name="fl_radio" value="music" />Music</label>
                                </div>
                                <div class="f_btn">
                                    <label><input type="radio" name="fl_radio" value="design" />Design</label>
                                </div>
                            </div>

                            <!-- content -->
                            <div class="row grid-items border-line-v">
                                <?php
                                if (is_array($w) && count($w)) {
                                    foreach ($w as $l) {
                                        ?> 

                                        <div class="col col-d-6 col-t-6 col-m-12 grid-item design border-line-h">
                                            <div class="box-item">
                                                <div class="image">
                                                    <a href="#popup-<?php echo $l->id; ?>" class="has-popup-media">
                                                        <img src="<?= base_url(); ?>uploads/<?php echo $l->image; ?>" alt="" />
                                                        <span class="info">
                                                            <span class="ion ion-images"></span>
                                                        </span>
                                                        <a class="blue" href="<?php echo base_url() . "index.php/manage/delete/" . $l->id . "/works"; ?>">.X</a></li>
                                                    </a>
                                                </div>
                                                <div class="desc">
                                                    <div id="works:title:<?php echo $l->id; ?>" contenteditable="true" class="name"><?php echo $l->title; ?></div>
                                                    <a href="#popup-<?php echo $l->id; ?>" class="name has-popup-media"><?php echo $l->title; ?></a>
                                                    <div id="works:category:<?php echo $l->id; ?>" contenteditable="true" class="category"><?php echo $l->category; ?></div>
                                                </div>
                                                <div id="popup-<?php echo $l->id; ?>" class="popup-box mfp-fade mfp-hide">
                                                    <div class="content">
                                                        <div class="image">
                                                            <img src="<?= base_url(); ?>uploads/<?php echo $l->image; ?>" alt="">
                                                        </div>
                                                        <div class="desc">
                                                            <div class="post-box">
                                                                <h1 id="works:title:<?php echo $l->id; ?>" contenteditable="true"><?php echo $l->title; ?></h1>						
                                                                <div id="works:category:<?php echo $l->id; ?>" contenteditable="true" class="blog-detail"><?php echo $l->category; ?></div>
                                                                <div id="works:details:<?php echo $l->id; ?>" contenteditable="true"  class="blog-content">  
                                                                    <?php echo $l->details; ?>
                                                                </div>
                                                                <a class="blue" href="<?php echo base_url() . "index.php/manage/delete/" . $l->id . "/works"; ?>"><li class="fa fa-trash"></li></a>

                                                                <div id="works:link:<?php echo $l->id; ?>" contenteditable="true" class="name"><?php echo $l->link; ?></div>
                                                                <a href="<?php echo $l->link; ?>" class="button">
                                                                    <span class="text">View Project</span>
                                                                    <span class="arrow"></span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                    }
                                }
                                ?>


                                <div class="clear"></div>
                            </div>

                        </div>

                    </div>
                </div>

                <!--
                        Card - Blog
                -->
                <div class="card-inner blog" id="blog-card">
                    <div class="card-wrap">

                        <!--
                                Blog
                        -->
                        <div class="content blog">

                            <!-- title -->
                            <div class="title">Latest Posts</div>
                            <div id="disqus_thread"></div>
                            <script>

                                /**
                                 *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                                 *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
                                /*
                                 var disqus_config = function () {
                                 this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
                                 this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                                 };
                                 */
                                (function () { // DON'T EDIT BELOW THIS LINE
                                    var d = document, s = d.createElement('script');
                                    s.src = 'https://douglaswere.disqus.com/embed.js';
                                    s.setAttribute('data-timestamp', +new Date());
                                    (d.head || d.body).appendChild(s);
                                })();
                            </script>
                            <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                            <!-- content -->
                            <div class="row border-line-v"> 
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--
                        Card - Contacts
                -->
                <div class="card-inner contacts" id="contacts-card">
                    <div class="card-wrap">
                        <!--
                                Conacts Info
                        -->
                        <div class="content contacts">
                            <!-- title -->
                            <div class="title">Get in Touch</div>
                            <div class="desc">
                                <a href="#popup-contact" class="name has-popup-media">Manage contact</a>                                
                            </div>
                            <!-- content -->
                            <div class="row">
                                <div class="col col-d-12 col-t-12 col-m-12 border-line-v">
                                    <div class="map" >
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2934.9119395281455!2d-71.31624268453471!3d42.64202677916896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e3a46a7df62175%3A0x192da25978a8af1c!2s110+Canal+St%2C+Lowell%2C+MA+01853!5e0!3m2!1sen!2sus!4v1536179530954" width="400" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
                                    </div>
                                    <div id="popup-contact" class="popup-box mfp-fade mfp-hide">
                                        <div class="content">
                                            <div class="desc">
                                                <div class="post-box">
                                                    <h1>Info</h1>	
                                                    <form id="station-form" parsley-validate novalidate role="form" class="form-horizontal" name="login-form" enctype="multipart/form-data"  action='<?= base_url(); ?>index.php/create/contact'  method="post">
                                                        <div class="modal-body overflow-visible"> 
                                                            <div class="row-fluid"> 
                                                                <div class=" span8">
                                                                    <div class="form-group">                        
                                                                        <input type="text" name="address" placeholder="Address" id="address" required class="form-control"/>
                                                                    </div>
                                                                    <div class="form-group">                        
                                                                        <input type="text" name="email" placeholder="Email" id="value" required class="form-control"/>
                                                                    </div>     
                                                                    <div class="form-group">                        
                                                                        <input type="text" name="contact" placeholder="Contact" id="value" required class="form-control"/>
                                                                    </div>    
                                                                    <div class="form-group">                        
                                                                        <input type="text" name="status" placeholder="Status" id="value" required class="form-control"/>
                                                                    </div>     
                                                                    <div class="">
                                                                        <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>  <button class="btn btn-success pull-right" type="submit">SUBMIT</button> 

                                                                    </div>
                                                                </div>                                       
                                                            </div>

                                                        </div>
                                                    </form>                                                       
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                    <?php
                                    if (is_array($t) && count($t)) {
                                        foreach ($t as $l) {
                                            ?>  

                                            <div class="info-list">
                                                <ul>
                                                    <strong >Address . . . .</strong><?php echo empty($l->address) ? '<i class="fab fa-check-circle"></i>Page title' : ''; ?> <li id="contact:address:<?php echo $l->id; ?>" contenteditable="true"><?php echo $l->address; ?></li>
                                                    <strong >Email . . . . .</strong><?php echo empty($l->email) ? '<i class="fab fa-check-circle"></i>Page title' : ''; ?> <li id="contact:email:<?php echo $l->id; ?>" contenteditable="true"><?php echo $l->email; ?></li>
                                                    <strong >Phone . . . . .</strong><?php echo empty($l->contact) ? '<i class="fab fa-check-circle"></i>Page title' : ''; ?> <li id="contact:contact:<?php echo $l->id; ?>" contenteditable="true"> <?php echo $l->contact; ?></li>
                                                    <strong >Freelance . . .</strong><?php echo empty($l->status) ? '<i class="fab fa-check-circle"></i>Page title' : ''; ?><li id="contact:status:<?php echo $l->id; ?>" contenteditable="true"> <?php echo $l->status; ?></li>
                                                </ul>
                                            </div>
                                            <?php
                                        }
                                    }
                                    ?>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                        <!--
                                Contact Form
                        -->
                        <div class="content contacts">

                            <!-- title -->
                            <div class="title">Contact Form</div>

                            <!-- content -->
                            <div class="row">
                                <div class="col col-d-12 col-t-12 col-m-12 border-line-v">
                                    <div class="contact_form">
                                        <form  enctype="multipart/form-data" class="form-horizontal form-label-left"  action='<?= base_url(); ?>index.php/home/mail'  method="post">

                                            <div class="row">
                                                <div class="col col-d-6 col-t-6 col-m-12">
                                                    <div class="group-val">
                                                        <input type="text" name="name" placeholder="Full Name" />
                                                    </div>
                                                </div>
                                                <div class="col col-d-6 col-t-6 col-m-12">
                                                    <div class="group-val">
                                                        <input type="text" name="email" placeholder="Email Address" />
                                                    </div>
                                                </div>
                                                <div class="col col-d-6 col-t-6 col-m-12">
                                                    <div class="group-val">
                                                        <input type="text" name="contact" placeholder="Contact" />
                                                    </div>
                                                </div>
                                                <div class="col col-d-12 col-t-12 col-m-12">
                                                    <div class="group-val">
                                                        <textarea name="message" placeholder="Your Message"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="align-left">
                                                <input type="submit" class="btn right" value="Send">
                                            </div>
                                        </form>
                                        <div class="alert-success">
                                            <p>Thanks, your message is sent successfully.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="clear"></div>
                            </div>

                        </div>

                    </div>
                </div>

            </div>
        </div>

        <!--
                jQuery Scripts
        -->
        <script src="<?= base_url(); ?>js/jquery.min.js"></script>
        <script src="<?= base_url(); ?>js/jquery.validate.js"></script>
        <script src="<?= base_url(); ?>js/jquery.magnific-popup.js"></script>
        <script src="<?= base_url(); ?>js/imagesloaded.pkgd.js"></script>
        <script src="<?= base_url(); ?>js/masonry.pkgd.js"></script>
        <script src="<?= base_url(); ?>js/masonry-filter.js"></script>
        <script src="<?= base_url(); ?>js/jquery.slimscroll.js"></script>

        <!--
                Google map api
        -->
        <script src="https://maps.google.com/maps/api/js?sensor=false"></script>

        <!--
                Main Scripts
        -->
        <script src="<?= base_url(); ?>js/scripts.js"></script>

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
                                        $("div[contenteditable=true]").blur(function () {
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
