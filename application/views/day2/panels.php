<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Example of Twitter Bootstrap 3 Panels</title>
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
        Panel simplu.
    -->
    <div class="panel panel-default">
        <div class="panel-body">Look, I'm in a panel!</div>
    </div>
    
    <hr>
    
    <!--
        Panel cu heading.
    -->

    <div class="panel panel-default">
        <div class="panel-heading">This Page is Disabled</div>
        <div class="panel-body">This page is temporarily disabled by the site administrator for some reason.<br> <a href="#">Click here</a> to enable the page.</div>
    </div>
    
    <hr>
    
    <div class="panel panel-default">
    <div class="panel-heading">
        <h1 class="panel-title">Panel Title</h1>
    </div>
    <div class="panel-body">Panel content…</div>
    </div>
    
    <hr>
    
    
    <!--
        Panel cu footer.
    -->
    <div class="panel panel-default">
    <div class="panel-body">This page is temporarily disabled by the site administrator for some reason.</div> 
    <div class="panel-footer clearfix">
        <div class="pull-right">
            <a href="#" class="btn btn-primary">Learn More</a>
            <a href="#" class="btn btn-default">Go Back</a>
        </div>
    </div>
    </div>
    
    <!--
        Panel cu stari contextuale.
    -->
    
    <div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">301 Moved Permanently</h3>
    </div>
    <div class="panel-body">The requested page has been permanently moved to a new location.</div>
</div>
<div class="panel panel-success">
    <div class="panel-heading">
        <h3 class="panel-title">200 OK</h3>
    </div>
    <div class="panel-body">The server successfully processed the request.</div>
</div>
<div class="panel panel-info">
    <div class="panel-heading">
        <h3 class="panel-title">100 Continue</h3>
    </div>
    <div class="panel-body">The client should continue with its request.</div>
</div>
<div class="panel panel-warning">
    <div class="panel-heading">
        <h3 class="panel-title">400 Bad Request</h3>
    </div>
    <div class="panel-body">The request cannot be fulfilled due to bad syntax.</div>
</div>
<div class="panel panel-danger">
    <div class="panel-heading">
        <h3 class="panel-title">503 Service Unavailable</h3>
    </div>
    <div class="panel-body">The server is temporarily unable to handle the request.</div>
</div>
    
    <hr>
    
    <!--
        Panel ce contine tabel fara border setat.
    -->
    
    <div class="panel panel-default">
    <!-- Default panel contents -->
    <div class="panel-heading">User Information</div>
    <div class="panel-body">
        <p>The following table contains some personal information about users.</p>
    </div>
    <!-- Table -->
    <table class="table">
        <thead>
            <tr>
                <th>Row</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>John</td>
                <td>Carter</td>
                <td>johncarter@mail.com</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Peter</td>
                <td>Parker</td>
                <td>peterparker@mail.com</td>
            </tr>
            <tr>
                <td>3</td>
                <td>John</td>
                <td>Rambo</td>
                <td>johnrambo@mail.com</td>
            </tr>
        </tbody> 
    </table>
</div>
    
    <hr>
    
    <!--
        Panel ce contine o lista de itemuri.
    -->
    
    <div class="panel panel-default">
    <!-- Default panel contents -->
    <div class="panel-heading">Products</div>
    <div class="panel-body">
        <p>The following products are currently available on our store.</p>
    </div>
    <!-- List group -->
    <div class="list-group">
        <a href="#" class="list-group-item">Mobile Phones <span class="badge">50</span>
        </a>
        <a href="#" class="list-group-item">Laptops &amp; Desktops <span class="badge">145</span>
        </a>
        <a href="#" class="list-group-item">Tablets <span class="badge">30</span>
        </a>  
        <a href="#" class="list-group-item">Audio &amp; Video Players <span class="badge">65</span>
        </a>
        <a href="#" class="list-group-item">Camera <span class="badge">8</span>
        </a>
    </div>
</div>
    
</div>
</body>
</html>                                		