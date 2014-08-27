<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Adding Twitter Bootstrap 3 Dropdowns via JavaScript</title>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script type="text/javascript">    
    
$(document).ready(function(){
	$(".dropdown-toggle").dropdown();
});  
</script>
<style type="text/css">
	.bs-example{
    	margin: 20px;
    }
</style>
</head>
<body>
<div class="bs-example">
    
    <!--
        Practic, efectul de dropdown se poate aplica si prin cod js.
        Trebuie apelata metoda dropddown() pe obiectul cu clasa .dropdown-toggle.
    -->
    
   <div class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
        <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
        </ul>
    </div>
    
<!--

Se pot folosi evenimentele care au loc la un proce de dropdown pentru diferite cazuri.

Evenimente:

show.bs.dropdown	
    This event fires immediately when the show instance method is called. 
    You can use the event.relatedTarget to target the toggling anchor element.
shown.bs.dropdown	
    This event is fired when the dropdown has been made visible to the user. 
    It will wait for CSS transitions, to complete. You can use the event.relatedTarget to target the toggling anchor element.
hide.bs.dropdown	
    This event is fired immediately when the hide instance method has been called. 
    You can use the event.relatedTarget to target the toggling anchor element.
hidden.bs.dropdown	
    This event is fired when the dropdown has finished being hidden from the user. 
    It will wait for CSS transitions, to complete. You can use the event.relatedTarget to target the toggling anchor element.

Exemplu care foloseste evenimentul show.bs.dropdown pentru a afisa un mesaj de alerta si abia apoi sa se produca efectul de dropdown.

<script type="text/javascript">
$(document).ready(function(){
    $(".dropdown").on("show.bs.dropdown", function(e){
        var linkText = $(e.relatedTarget).text(); // Get the link text
        alert("Click on OK button to view the dropdown menu for - " + linkText);
    });
});
</script>

Prin 'relatedTarget' ne referim la link-ul apasat.

-->
    
    
</div>
</body>
</html>                                		