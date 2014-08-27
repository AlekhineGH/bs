<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Example of Twitter Bootstrap 3 Tabs</title>
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
            Taburile se creeaza foarte usor cu bs. Lista ce contine taburile va avea clasa .nav.
            In plus, ea va contine clasa .nav-tabs.
        
            Deoarece glyphiconurile sunt fonturi de la bs 3.0 incoace acum se pot aplica proprietati de
            culoare si dimensiune asupra acestora utilizand stilarea css.
        
        -->
    
	<ul class="nav nav-tabs">
            <li class="active">
                <a href="#"><span class="glyphicon glyphicon-home" style="color: blue;"></span> Home</a>
            </li>
            <li>
                <a href="#"><span class="glyphicon glyphicon-phone"></span> Profile</a>
            </li>
            <li>
                <a href="#"><span class="glyphicon glyphicon-cloud" style="color: blue;"></span> Messages</a>
            </li>
	</ul>
        
    <hr>        
        
        <!--
            Pentru navigare cu pills lista va contine clasa .nav-pills si nu .nav-tabs.
        -->
    
        <ul class="nav nav-pills">
            <li class="active">
                <a href="#"><span class="glyphicon glyphicon-home" style="color: white;"></span> Home</a>
            </li>
            <li>
                <a href="#"><span class="glyphicon glyphicon-user"></span> Profile</a>
            </li>
            <li>
                <a href="#"><span class="glyphicon glyphicon-envelope" style="color: white;"></span> Messages</a>
            </li>
	</ul>
        
        <hr>
        
        
        <!--
            Se poate crea si navigare verticala. Mecanismul e asemanator cu navigarea orizontala.
            In plus, se adauga clasa .nav-stacked.
        -->
        <ul class="nav nav-pills nav-stacked">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#">Profile</a></li>
            <li><a href="#">Messages</a></li>
        </ul>
        
        <hr>
        
        <!--
            Crearea unor taburi cu dropdown. Pentru o astfel de facilitate este nevoie de fisierele .js.
        -->
        <ul class="nav nav-tabs">
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
    </ul>
        
        <hr>
        
        <!--
            Pills cu dropdown.
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
        </ul>
        
        <hr>
        
        <!--
            Taburi si pills justificate la dimensiunea elementului parinte.
            Functioneaza doar pentru dispozitive md si mai mari, in rest ele raman
            neafectate.
        -->
        <!-- Justified tabs -->
        <ul class="nav nav-tabs nav-justified">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#">Profile</a></li>
            <li><a href="#">Messages</a></li>
        </ul>
        <!-- Justified pills -->
        <ul class="nav nav-pills nav-justified">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#">Profile</a></li>
            <li><a href="#">Messages</a></li>
        </ul>

        <hr>

        <!--
            Se poate dezactiva un link in meniu.
        -->
        
        <ul class="nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#">Profile</a></li>
            <li><a href="#">Messages</a></li>
            <li class="disabled"><a href="#">Admin</a></li>
        </ul>
        
        <hr>
        
        
        
</div>
</body>
</html>                                		