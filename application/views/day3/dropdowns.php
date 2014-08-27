<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Example of Twitter Bootstrap 3 Dropdowns within a Navbar</title>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<style type="text/css">
	.bs-example{
    	margin: 20px;
    }
</style>
</head>
<body>
<div class="bs-example">
    
    <!--
        Adaugare dropdown la navbar.
    -->
    
    <nav id="myNavbar" class="navbar navbar-default" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Brand</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Profile</a></li>
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle">Messages <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Inbox</a></li>
                            <li><a href="#">Drafts</a></li>
                            <li><a href="#">Sent Items</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Trash</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle">Admin <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Settings</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div>
    </nav>
    
    <hr>
    
    <!--
        Adaugare dropdown la navs.
    -->
    
    <ul class="nav nav-pills">
    <li class="active"><a href="#">Home</a></li>
    <li><a href="#">Profile</a></li>
    <li class="dropdown">
        <a href="#" data-toggle="dropdown" class="dropdown-toggle">Messages <b class="caret"></b></a>
        <ul class="dropdown-menu">
            <li><a href="#">Inbox</a></li>
            <li><a href="#">Drafts</a></li>
            <li><a href="#">Sent Items</a></li>
            <li class="divider"></li>
            <li><a href="#">Trash</a></li>
        </ul>
    </li>
    <li class="dropdown pull-right">
        <a href="#" data-toggle="dropdown" class="dropdown-toggle">Admin <b class="caret"></b></a>
        <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li class="divider"></li>
            <li><a href="#">Settings</a></li>
        </ul>
    </li>
</ul>
    
    
    <hr>
    
    <!--
        Adaugare dropdown la un grup de butoane simple.
    -->
    
<form>
        <!--Default buttons with dropdown menu-->
        <div class="btn-group">
            <button data-toggle="dropdown" class="btn btn-default dropdown-toggle">Action <span class="caret"></span></button>
            <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li class="divider"></li>
                <li><a href="#">Separated link</a></li>
            </ul>
        </div>
        <!--Primary buttons with dropdown menu-->
        <div class="btn-group">
            <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle">Action <span class="caret"></span></button>
            <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li class="divider"></li>
                <li><a href="#">Separated link</a></li>
            </ul>
        </div>
        <!--Info buttons with dropdown menu-->
        <div class="btn-group">
            <button data-toggle="dropdown" class="btn btn-info dropdown-toggle">Action <span class="caret"></span></button>
            <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li class="divider"></li>
                <li><a href="#">Separated link</a></li>
            </ul>
        </div>
        <!--Success buttons with dropdown menu-->
        <div class="btn-group">
            <button data-toggle="dropdown" class="btn btn-success dropdown-toggle">Action <span class="caret"></span></button>
            <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li class="divider"></li>
                <li><a href="#">Separated link</a></li>
            </ul>
        </div>
        <!--Warning buttons with dropdown menu-->
        <div class="btn-group">
            <button data-toggle="dropdown" class="btn btn-warning dropdown-toggle">Action <span class="caret"></span></button>
            <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li class="divider"></li>
                <li><a href="#">Separated link</a></li>
            </ul>
        </div>
        <!--Danger buttons with dropdown menu-->
        <div class="btn-group">
            <button data-toggle="dropdown" class="btn btn-danger dropdown-toggle">Action <span class="caret"></span></button>
            <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li class="divider"></li>
                <li><a href="#">Separated link</a></li>
            </ul>
        </div>
    </form>   
    
    <hr>
    
    <!--
        Dropdown la butoane cu split.
    -->
    
<div class="btn-toolbar">
    <!--Default buttons with dropdown menu-->
    <div class="btn-group">
        <button class="btn btn-default">Action</button>
        <button data-toggle="dropdown" class="btn btn-default dropdown-toggle"><span class="caret"></span></button>
        <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
        </ul>
    </div>
    <!--Primary buttons with dropdown menu-->
    <div class="btn-group">
        <button class="btn btn-primary">Action</button>
        <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle"><span class="caret"></span></button>
        <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
        </ul>
    </div>
    <!--Info buttons with dropdown menu-->
    <div class="btn-group">
        <button class="btn btn-info">Info</button>
        <button data-toggle="dropdown" class="btn btn-info dropdown-toggle"><span class="caret"></span></button>
        <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
        </ul>
    </div>
    <!--Success buttons with dropdown menu-->
    <div class="btn-group">
        <button class="btn btn-success">Success</button>
        <button data-toggle="dropdown" class="btn btn-success dropdown-toggle"><span class="caret"></span></button>
        <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
        </ul>
    </div>
    <!--Warning buttons with dropdown menu-->
    <div class="btn-group">
        <button class="btn btn-warning">Warning</button>
        <button data-toggle="dropdown" class="btn btn-warning dropdown-toggle"><span class="caret"></span></button>
        <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
        </ul>
    </div>
    <!--Danger buttons with dropdown menu-->
    <div class="btn-group">
        <button class="btn btn-danger">Danger</button>
        <button data-toggle="dropdown" class="btn btn-danger dropdown-toggle"><span class="caret"></span></button>
        <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
        </ul>
    </div>
</div>
    
    <hr>
    
    <!--
        Dropdown la unul din butoanele grupului.
    -->
    
    <div class="btn-group">
        <button class="btn btn-primary" type="button">1</button>
        <button class="btn btn-primary" type="button">2</button>
        <div class="btn-group">
            <button type="button" data-toggle="dropdown" class="btn btn-primary dropdown-toggle">Dropdown <span class="caret"></span></button>
            <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li class="divider"></li>
                <li><a href="#">Separated link</a></li>
            </ul>
        </div>
    </div>
    
    <hr>
    
    <!--
        Facilitatea de dropdown se poate aplica oricarui tip de buton daca folosim atributul
        data-toggle="dropdown"
    -->
    
    <div class="dropdown">
        <a href="#" data-toggle="dropdown" class="dropdown-toggle">Dropdown <b class="caret"></b></a>
        <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
        </ul>
    </div>    
    
    <hr>
    
    
    
</div>
</body>
</html>                                		