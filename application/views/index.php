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
                            <?php
                        }
                        ?>  

                        <!-- profile titles -->
                        <?php
                        if (is_array($h) && count($h)) {
                            foreach ($h as $l) {
                                ?> 
                                <div  class="title"><?php echo $l->name; ?></div>
                                <div   class="subtitle"><?php echo $l->title; ?></div>
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
                                    <a target="_blank" href="<?php echo $l->link; ?>"><span class="<?php echo $l->class; ?>"></span></a>
                                    <?php
                                }
                            }
                            ?>                           

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
                            <div><a href="#popup-login" class="name has-popup-media">Login</a>   </div>
                        </div>
                    </div>

                </div>                
                <!-- 
                      Pop up all start here
                -->

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
                            <!-- content -->
                            <div class="row">
                                <div class="col col-d-12 col-t-12 col-m-12 border-line-v">
                                    <div class="text-box">
                                        <?php
                                        foreach ($h as $l) {
                                            ?>  
                                            <p class="cabin" data-animate="fadeInUp" data-delay=".5"><?php echo $l->content; ?></p>
                                            <?php
                                        }
                                        ?>                                       
                                    </div>
                                    <div class="info-list">
                                        <ul>
                                            <?php
                                            if (is_array($i) && count($i)) {
                                                foreach ($i as $l) {
                                                    ?> 
                                                    <li ><strong><?php echo $l->title; ?></strong><span> <?php echo $l->value; ?></span></li>

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
                            <!-- content -->
                            <div class="row service-items border-line-v">
                                <?php
                                if (is_array($v) && count($v)) {
                                    foreach ($v as $l) {
                                        ?> 
                                        <li><strong ><?php echo $l->title; ?></strong><span > <?php echo $l->value; ?></span></li>
                                        <div class="col col-d-6 col-t-6 col-m-12 border-line-h">
                                            <div class="service-item">
                                                <div class="icon"><span class="<?php echo $l->class; ?>"></span></div>
                                                <div class="name"><?php echo $l->title; ?></div>
                                                <p >
                                                    <?php echo $l->content; ?>
                                                </p>                                              

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
                            <!-- content -->
                            <div class="row client-items">
                                <?php
                                if (is_array($c) && count($c)) {
                                    foreach ($c as $l) {
                                        ?> 

                                        <div class="col col-d-3 col-t-3 col-m-6 border-line-v">
                                            <div class="client-item">
                                                <div class="image">
                                                    <a target="_blank" href="<?php echo $l->link; ?>"> <img src="<?= base_url(); ?>uploads/<?php echo $l->image; ?>" alt="" /></a>

                                                </div>
                                            </div>
                                        </div>

                                        <?php
                                    }
                                }
                                ?>
                                <!-- client item -->     
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
                                    </div>
                                    <div class="resume-items">
                                        <?php
                                        if (is_array($ex) && count($ex)) {
                                            foreach ($ex as $l) {
                                                ?> 
                                                <div class="resume-item border-line-h <?php echo $l->status; ?>">  
                                                    <div   class="date"><?php echo $l->period; ?></div>
                                                    <div   class="name"><?php echo $l->title; ?></div>
                                                    <div   class="company"><?php echo $l->company; ?></div>
                                                    <p>
                                                        <?php echo $l->details; ?>
                                                    </p>
                                                </div>
                                                <?php
                                            }
                                        }
                                        ?>                                       
                                    </div>
                                </div>
                                <!-- education -->
                                <div class="col col-d-12 col-t-12 col-m-12 border-line-v">
                                    <div class="resume-title border-line-h">
                                        <div class="icon"><i class="ion ion-university"></i></div>
                                        <div class="name">Education</div>                                       
                                    </div>
                                    <div class="resume-items">
                                        <?php
                                        if (is_array($ed) && count($ed)) {
                                            foreach ($ed as $l) {
                                                ?> 
                                                <div class="resume-item border-line-h">
                                                    <div  class="date"><?php echo $l->period; ?></div>
                                                    <div  class="name"><?php echo $l->name; ?></div>
                                                    <div   class="company"><?php echo $l->school; ?></div>
                                                    <p >
                                                        <?php echo $l->details; ?>
                                                    </p>

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
                                                        <div  class="name"><?php echo $l->title; ?></div>                                                        
                                                        <div class="progress">
                                                            <div class="percentage" style="width:<?php echo $l->level; ?>%;"></div>
                                                        </div>
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

                            <!-- filters -->
                            <div class="filter-menu filter-button-group">
                                <div class="f_btn active">
                                    <label><input type="radio" name="fl_radio" value="grid-item" />All</label>
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
                                                    </a>
                                                </div>
                                                <div class="desc">
<!--                                                    <div  class="name"><?php //echo $l->title; ?></div>-->
                                                    <a href="#popup-<?php echo $l->id; ?>" class="name has-popup-media"><?php echo $l->title; ?></a>
                                                    <div  class="category"><?php echo $l->category; ?></div>
                                                </div>
                                                <div id="popup-<?php echo $l->id; ?>" class="popup-box mfp-fade mfp-hide">
                                                    <div class="content">
                                                        <div class="image">
                                                            <img src="<?= base_url(); ?>uploads/<?php echo $l->image; ?>" alt="">
                                                        </div>
                                                        <div class="desc">
                                                            <div class="post-box">
                                                                <h1 ><?php echo $l->title; ?></h1>						
                                                                <div  class="blog-detail"><?php echo $l->category; ?></div>
                                                                <div  class="blog-content">  
                                                                    <?php echo $l->details; ?>
                                                                </div>
                                                                <div  class="name"><?php echo $l->link; ?></div>
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
                                <!-- blog item -->
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
                            <!-- content -->
                            <div class="row">
                                <div class="col col-d-12 col-t-12 col-m-12 border-line-v">
                                    <div class="map" >
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2934.9119395281455!2d-71.31624268453471!3d42.64202677916896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e3a46a7df62175%3A0x192da25978a8af1c!2s110+Canal+St%2C+Lowell%2C+MA+01853!5e0!3m2!1sen!2sus!4v1536179530954" width="400" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
                                    </div>
                                    <?php
                                    if (is_array($t) && count($t)) {
                                        foreach ($t as $l) {
                                            ?> 
                                            <div class="info-list">
                                                <ul>
                                                    <li><strong >Address . . . .</strong><?php echo $l->address; ?></li>
                                                    <li><strong >Email . . . . .</strong><?php echo $l->email; ?></li>
                                                    <li><strong >Phone . . . . .</strong><?php echo $l->contact; ?></li>
                                                    <li><strong >Freelance . . .</strong><?php echo $l->status; ?></li>
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
