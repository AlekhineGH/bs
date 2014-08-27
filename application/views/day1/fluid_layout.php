<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Twitter Bootstrap 3 Fluid Layout Example</title>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</head>
<body>
<nav role="navigation" class="navbar navbar-default navbar-static-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="#" class="navbar-brand">NZ</a>
        </div>
        <!-- Collection of nav links and other content for toggling -->
        <div id="navbarCollapse" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="<?php echo base_url().'day1';?>">Home</a></li>
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">Day1 <b class="caret"></b></a>
                    
                    <ul role="menu" class="dropdown-menu">
                        <li><a href="<?php echo base_url().'day1/fixed_layout';?>">Fixed Layout</a></li>
                        <li><a href="<?php echo base_url().'day1/fluid_layout';?>">Fluid Layout</a></li>
                        <li><a href="<?php echo base_url().'day1/grid_system';?>">Grid System</a></li>
                        <li><a href="<?php echo base_url().'day1/responsive_layout';?>">Responsive Layout</a></li>                    
                    </ul>
                </li>
                    
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">Day2 <b class="caret"></b></a>
                    
                    <ul role="menu" class="dropdown-menu">
                        <li><a href="<?php echo base_url().'day2/breadcrumbs';?>">Breadcrumbs</a></li>
                        <li><a href="<?php echo base_url().'day2/components';?>">Components</a></li>
                        <li><a href="<?php echo base_url().'day2/forms';?>">Forms</a></li>
                        <li><a href="<?php echo base_url().'day2/icons';?>">Icons</a></li>
                        <li><a href="<?php echo base_url().'day2/images';?>">Images</a></li>
                        <li><a href="<?php echo base_url().'day2/labels_badges';?>">Labels &amp; Badges</a></li>
                        <li><a href="<?php echo base_url().'day2/lists';?>">Lists</a></li>
                        <li><a href="<?php echo base_url().'day2/navbar';?>">Navbar</a></li>
                        <li><a href="<?php echo base_url().'day2/navbar_r';?>">Navbar r</a></li>
                        <li><a href="<?php echo base_url().'day2/navs';?>">Navs</a></li>
                        <li><a href="<?php echo base_url().'day2/pagination';?>">Pagination</a></li>
                        <li><a href="<?php echo base_url().'day2/panels';?>">Panels</a></li>
                        <li><a href="<?php echo base_url().'day2/progress';?>">Progress</a></li>
                        <li><a href="<?php echo base_url().'day2/tables';?>">Tables</a></li>
                        <li><a href="<?php echo base_url().'day2/typography';?>">Typography</a></li>
                    </ul>
                </li>
                
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">Day3 <b class="caret"></b></a>
                    
                    <ul role="menu" class="dropdown-menu">
                        <li><a href="<?php echo base_url().'day3/buttons';?>">Buttons</a></li>
                        <li><a href="<?php echo base_url().'day3/js1';?>">JavaScript enabled buttons</a></li>
                        <li><a href="<?php echo base_url().'day3/dropdowns';?>">Dropdowns</a></li>
                        <li><a href="<?php echo base_url().'day3/js2';?>">JavaScript Events</a></li>                        
                    </ul>
                </li>                
                
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">Day4 <b class="caret"></b></a>
                    
                    <ul role="menu" class="dropdown-menu">                       
                        <li><a href="<?php echo base_url().'day4/tooltips';?>">Tooltips</a></li>
                        <li><a href="<?php echo base_url().'day4/popovers';?>">Popovers</a></li>
                        <li><a href="<?php echo base_url().'day4/alerts';?>">Alerts</a></li>
                        <li><a href="<?php echo base_url().'day4/tabs';?>">Tabs</a></li>
                        <li><a href="<?php echo base_url().'day4/modals';?>">Modals</a></li>
                        <li><a href="<?php echo base_url().'day4/accordion';?>">Accordion</a></li>
                        <li><a href="<?php echo base_url().'day4/carousel';?>">Carousel</a></li>
                        <li><a href="<?php echo base_url().'day4/typeahead';?>">Typeahead</a></li>
                        <li><a href="<?php echo base_url().'day4/scrollspy';?>">Scrollspy</a></li>
                        <li><a href="<?php echo base_url().'day4/affix';?>">Affix</a></li>
                    </ul>
                </li>                
                
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="<?php echo base_url().'logout';?>">Logout</a></li>
            </ul>
        </div>
    </div>
</nav>
<nav id="myNavbar" class="navbar navbar-default navbar-inverse navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Tutorial Republic</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="http://www.tutorialrepublic.com" target="_blank">Home</a></li>
                <li><a href="http://www.tutorialrepublic.com/about-us.php" target="_blank">About</a></li>
                <li><a href="http://www.tutorialrepublic.com/contact-us.php" target="_blank">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>
<div class="container-fluid">
    <div class="jumbotron">
        <h1>Learn to Create Websites</h1>
        <p>In today's world internet is the most popular way of connecting with the people. At <a href="http://www.tutorialrepublic.com" target="_blank">tutorialrepublic.com</a> you will learn the essential of web development technologies along with real life practice example, so that you can create your own website to connect with the people around the world.</p>
        <p><a href="http://www.tutorialrepublic.com" target="_blank" class="btn btn-success btn-lg">Get started today</a></p>
    </div>
    <div class="row">
        <div class="col-xs-4">
            <h2>HTML</h2>
            <p>HTML is a markup language that is used for creating web pages. The HTML tutorial section will help you understand the basics of HTML, so that you can create your own web pages or website.</p>
            <p><a href="http://www.tutorialrepublic.com/html-tutorial/" target="_blank" class="btn btn-success">Learn More &raquo;</a></p>
        </div>
        <div class="col-xs-4">
            <h2>CSS</h2>
            <p>CSS is used for describing the presentation of web pages. The CSS tutorial section will help you learn the essentials of CSS, so that you can fine control the style and layout of your HTML document.</p>
            <p><a href="http://www.tutorialrepublic.com/css-tutorial/" target="_blank" class="btn btn-success">Learn More &raquo;</a></p>
        </div>
        <div class="col-xs-4">
            <h2>Bootstrap</h2>
            <p>Twitter Bootstrap is a powerful front-end framework for faster and easier web development. The Twitter Bootstrap tutorial section will help you learn the techniques of Bootstrap so that you can create web your own website.</p>
            <p><a href="http://www.tutorialrepublic.com/twitter-bootstrap-tutorial/" target="_blank" class="btn btn-success">Learn More &raquo;</a></p>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-xs-12">
            <footer>
                <p>&copy; Copyright 2013 Tutorial Republic</p>
            </footer>
        </div>
    </div>
</div>
</body>
</html>                                		
