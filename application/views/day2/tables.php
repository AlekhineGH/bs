<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Example of Twitter Bootstrap 3 Simple Tables</title>
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
        
        Nu e nimic mai simplu decat a lua un tag table si a-i atribui clasa .table.
        
        Pentru a colora diferit randurile (alternare) folosim clasa .table-striped.
        
        Pentru a adauga border la tabel folosim clasa .table-bordered.
        
        Pentru a adauga functia de hover la unul din randurile tabelului vom folosi
            clasa .table-hover.
        
        Pentru a face tabelul mai condensat folosim clasa .table-condensed
        
        Se pot colora randurile in culori diferite, nu neaparat alternativ.
        
        Pentru a face un tabel responsiv trebuie sa il plasam intr-un div cu clasa .table-responsive.
            Astfel, la rezolutii mai mici, apare o bara orizontala pentru scroll.
        
    -->
    
    <div class="table-responsive">
    <table class="table table-striped table-bordered table-hover table-condensed">
        <thead>
            <tr class="active">
                <th>Row</th>
                <th>First Name</th>
                <th class="text-uppercase">Last Name(active)</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <tr class="info">
                <td>1</td>
                <td>John</td>
                <td class="text-uppercase">info</td>
                <td>johncarter@mail.com</td>
            </tr>
            <tr class="danger">
                <td>2</td>
                <td>Peter</td>
                <td class="text-uppercase">danger</td>
                <td>peterparker@mail.com</td>
            </tr>
            <tr class="success">
                <td>3</td>
                <td>John</td>
                <td class="text-uppercase">success</td>
                <td>johnrambo@mail.com</td>
            </tr>
            <tr class="warning">
                <td>4</td>
                <td>John</td>
                <td class="text-uppercase">warning</td>
                <td>johnrambo@mail.com</td>
            </tr>         
        </tbody>
    </table>
    </div>
</div>
</body>
</html>                                		