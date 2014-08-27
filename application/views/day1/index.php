<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Example of Twitter Bootstrap 3 Static Top Navbar</title>
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
</body>
</html>                                		