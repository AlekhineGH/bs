<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Example of Twitter Bootstrap 3 Warning Alert Message</title>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<style type="text/css">
	.bs-example{
		margin: 20px;
	}
</style>
<script type="text/javascript">
$(document).ready(function(){
    $(".alert").on('closed.bs.alert', function () {
        alert("Alert message box has been closed.");
    });
});  
</script>
</head>
<body>
<div class="bs-example">
    
    <!--
        Alerturile se pot crea cu clasa .alert.
        Ele sunt folositoare pentru momentele in care atentia utilizatorului este dorita.
        Ele sunt de mai multe tipuri: warning, success, etc.
        Se poate adauga si un buton optional pentru ascunderea mesajului.
    -->
    
    <div class="alert alert-warning">
        <a href="#" class="close" data-dismiss="alert">&times;</a>
        <strong>Warning!</strong> There was a problem with your network connection.
    </div>
    
    <hr>
    
    
    <!--
        Similar, se pot crea alerte de pericol sau eroare daca adaugam clasa .alert-danger
        sau .alert-error la clasa de baza .alert.
    -->
    <div class="alert alert-danger">
        <a href="#" class="close" data-dismiss="alert">&times;</a>
        <strong>Error!</strong> A problem has been occurred while submitting your data.
    </div>
    
    <hr>
    
    <!--SUCCES / CONFIRMARE-->
    <div class="alert alert-success">
        <a href="#" class="close" data-dismiss="alert">&times;</a>
        <strong>Success!</strong> Your message has been sent successfully.
    </div>
    
    <hr>
    
    <!--INFORMARE-->
    <div class="alert alert-info">
        <a href="#" class="close" data-dismiss="alert">&times;</a>
        <strong>Note!</strong> Please read the comments carefully.
    </div>
    
    <!--
 
    These are the standard bootstrap's alerts methods:

$().alert()
This method wraps all alerts with close functionality.

<script type="text/javascript">
$(document).ready(function(){
    $(".close").click(function(){
        $(".alert").alert();
    });
});  
</script>
 
Tip: 
    If you to want to enable transition in your alert messages box while closing, 
    make sure you have already applied the class .fade and .in to them.
$().alert('close')
This method closes an alert message box.

<script type="text/javascript">
$(document).ready(function(){
    $(".close").click(function(){
        $("#myAlert").alert('close');
    });
});  
</script>
    
Events
Bootstrap's alert class includes few events for hooking into alert functionality.

close.bs.alert	
    This event fires immediately when the close instance method is called.
closed.bs.alert	
    This event is fired when the alert message box has been closed. 
    It will wait until the CSS transition process has been fully completed before getting fired.

The following example displays an alert message to the user when fade out transition of an alert message box has been fully completed.

<script type="text/javascript">
$(document).ready(function(){
    $("#myAlert").on('closed.bs.alert', function () {
        alert("Alert message box has been closed.");
    });
});  
</script>
    
    -->
    
</div>
</body>
</html>                                		