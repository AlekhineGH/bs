<!DOCTYPE html>
<html lang="en">
<head>
<title>Example of Twitter Bootstrap 3 Grid System</title>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<style type="text/css">
    p{
        padding: 50px;
        font-size: 32px;
        font-weight: bold;
        text-align: center;
        background: #f2f2f2;
    }
</style>
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
    <div class="container">
        
        <!-- Toate div-urile cu clasa .row trebuie puse in interiorul unui div cu clasa .container -->
        
        <!-- Fiecare rand contine 12 coloane -->
        
        <!-- Pentru a avea un layout de 4 coloane si 3 randuri pe dispozitive peste 1200px = desktop-uri
                se va alege clasa col-lg-3 pentru fiecare element. Practic, dupa fiecare 4 elemente afisate
                se va crea un rand nou. -->
        
        <!-- Pentru a avea un layout de 3 coloane si 4 randuri pe dispozitive peste 992px = laptop-uri
                se va alege clasa col-md-4 pentru fiecare element. Practic, dupa fiecare 3 elemente afisate
                se va crea un rand nou. -->
        
        <!-- Pentru a avea un layout de 2 coloane si 6 randuri pe dispozitive peste 768px = tablete
                se va alege clasa col-sm-6 pentru fiecare element. Practic, dupa fiecare 2 elemente afisate
                se va crea un rand nou. -->
        
        <!-- Nu trebuie sa se aleaga layout pentru dispozitive xs- extra small => exista implicit -->
        
        <div class="row">
            <div class="col-md-4 col-sm-6 col-lg-3"><p>Box 1</p></div>
            <div class="col-md-4 col-sm-6 col-lg-3"><p>Box 2</p></div>
            <div class="col-md-4 col-sm-6 col-lg-3"><p>Box 3</p></div>
            <div class="col-md-4 col-sm-6 col-lg-3"><p>Box 4</p></div>
            <div class="col-md-4 col-sm-6 col-lg-3"><p>Box 5</p></div>
            <div class="col-md-4 col-sm-6 col-lg-3"><p>Box 6</p></div>
            <div class="col-md-4 col-sm-6 col-lg-3"><p>Box 7</p></div>
            <div class="col-md-4 col-sm-6 col-lg-3"><p>Box 8</p></div>
            <div class="col-md-4 col-sm-6 col-lg-3"><p>Box 9</p></div>
            <div class="col-md-4 col-sm-6 col-lg-3"><p>Box 10</p></div>
            <div class="col-md-4 col-sm-6 col-lg-3"><p>Box 11</p></div>
            <div class="col-md-4 col-sm-6 col-lg-3"><p>Box 12</p></div>
        </div>
        
        <!-- Clasa .visible-xs|sm|md|lg-block|inline|inline-block este utila pentru momentul in care se doreste
            afisarea unui element numai pentru un target anume = pentru o platforma anume.
            Ea poate fi folosita la mai mult de un dispozitiv.
        Ex. <p class="visible-xs-block visible-sm-block">Telefonul si tableta vor vedea acest text.</p>-->
        
        <p class="visible-xs-block">Florin</p>
        <p class="visible-sm-block">este</p>
        <p class="visible-md-block">L</p>
        <p class="visible-lg-block">User</p>
        
        <!-- In aceeasi ordine de idei, exista si o clasa pentru ascunderea unui element doar pentru o platforma
            anume. Ea este .hidden-xs|sm|md|lg. Ea poate fi folosita chiar si pentru toate platformele. -->
        <p class="hidden-md hidden-sm hidden-xs hidden-lg">Florin</p>
        
    </div>
</body>
</html>                                		