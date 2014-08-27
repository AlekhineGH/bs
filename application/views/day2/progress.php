<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Example of Twitter Bootstrap 3 Progress Bar</title>
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
        Bara de progres simpla.
    -->
    <div class="progress">
        <div class="progress-bar" style="width: 60%;">
            <span class="sr-only">60% Complete</span>
        </div>
    </div>
    
    <hr>
    
    <!--
        Bara de progres spiralata.
    -->
    <div class="progress progress-striped">
        <div class="progress-bar" style="width: 60%;">
            <span class="sr-only">60% Complete</span>
        </div>
    </div>
    
    <hr>
    
    <!--
        Bara de progres activa. (se misca)
    -->
    <div class="progress progress-striped active">
        <div class="progress-bar" style="width: 60%;">
            <span class="sr-only">60% Complete</span>
        </div>
    </div>
    
    <hr>
    
    <!--
        Bara de progres formata din mai multe bari cu stari diferite.
    -->
    
    <div class="progress progress-striped active">
        <div class="progress-bar progress-bar-success" style="width: 35%">
            <span class="sr-only">35% Complete (success)</span>
        </div>
        <div class="progress-bar progress-bar-warning" style="width: 20%">
            <span class="sr-only">20% Complete (warning)</span>
        </div>
        <div class="progress-bar progress-bar-danger" style="width: 10%">
            <span class="sr-only">10% Complete (danger)</span>
        </div>
    </div>
    
    <hr>
    
    <!--
    Bara de progres cu diferite culori.
    -->
    
<div class="progress progress-striped">
    <div class="progress-bar progress-bar-info" style="width: 20%">
        <span class="sr-only">20% Complete</span>
    </div>
</div>
<div class="progress">
    <div class="progress-bar progress-bar-success" style="width: 40%">
        <span class="sr-only">40% Complete</span>
    </div>
</div>
<div class="progress">
    <div class="progress-bar progress-bar-warning" style="width: 60%">
        <span class="sr-only">60% Complete</span>
    </div>
</div>
<div class="progress">
    <div class="progress-bar progress-bar-danger" style="width: 80%">
        <span class="sr-only">80% Complete</span>
    </div>
</div>
    
    <hr>
    
    
    
</div>
</body>
</html>                                		