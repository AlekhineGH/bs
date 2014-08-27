<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Example of Twitter Bootstrap 3 Buttons</title>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<style type="text/css">
    .bs-example{
    	margin: 20px;
    }
    
    .btn-toolbar{
        margin-top: 5px;
    }
    
</style>
</head>
<body>
<div class="bs-example">
    
    <!--
        Diferite stiluri pentru butoane.
        Acestea trebuie sa fie aplicate pentru elemente de tip <a>, <input> sau <button>.
    -->
    
    <button type="button" class="btn btn-default">Default</button>
    <button type="button" class="btn btn-primary">Primary</button>
    <button type="button" class="btn btn-info">Info</button>
    <button type="button" class="btn btn-success">Success</button>
    <button type="button" class="btn btn-warning">Warning</button>
    <button type="button" class="btn btn-danger">Danger</button>
    <button type="button" class="btn btn-link">Link</button>
	<hr>
    <input type="button" class="btn btn-default" value="Default">
    <input type="button" class="btn btn-primary" value="Primary">
    <input type="button" class="btn btn-info" value="Info">
    <input type="button" class="btn btn-success" value="Success">
    <input type="button" class="btn btn-warning" value="Warning">
    <input type="button" class="btn btn-danger" value="Danger">
    <input type="button" class="btn btn-link" value="Link">
    <hr>
    <a href="#" class="btn btn-default">Default</a>
    <a href="#" class="btn btn-primary">Primary</a>
    <a href="#" class="btn btn-info">Info</a>
    <a href="#" class="btn btn-success">Success</a>
    <a href="#" class="btn btn-warning">Warning</a>
    <a href="#" class="btn btn-danger">Danger</a>
    <a href="#" class="btn btn-link">Link</a>
    
    <hr>
    
    <!--
        Se poate modifica dimensiunea unui buton prin aplicarea unei clase
        .btn-lg, .btn-sm sau .btn-xs. Nu exista .btn-md deoarece aceasta proprietate
        este implicita pentru orice buton in cazul in care nu se alege o alta.
    -->
    
    <p>
    <button type="button" class="btn btn-primary btn-lg">Large button</button>
    <button type="button" class="btn btn-default btn-lg">Large button</button>
</p>
<p>
    <button type="button" class="btn btn-primary">Default button</button>
    <button type="button" class="btn btn-default">Default button</button>
</p>
<p>
    <button type="button" class="btn btn-primary btn-sm">Small button</button>
    <button type="button" class="btn btn-default btn-sm">Small button</button>
</p>
<p>
    <button type="button" class="btn btn-primary btn-xs">Extra small button</button>
    <button type="button" class="btn btn-default btn-xs">Extra small button</button>
</p>

    <hr>
    
    <!--
        Se pot crea butoane care sa ajunga la dimensiunea elementului parinte
        prin folosirea clasei .btn-block.
    -->
    
    <button type="button" class="btn btn-primary btn-lg btn-block">Block level button</button>
    <button type="button" class="btn btn-default btn-lg btn-block">Block level button</button>

    <hr>
    
    <!--
        Butoane <a> care sunt dezactivate. Ele pot fi utile pentru momentul in care este nevoie
        de completarea in prealabil a unui formular. Ele pot fi activate numai in cazul completarii
        tuturor campurilor.
    -->
    
    <a href="#" class="btn btn-primary btn-lg disabled">Primary link</a>
    <a href="#" class="btn btn-default btn-lg disabled">Link</a>
    
    <hr>
    
    <!--
        Butoanele de tip <input> sau <button> pot fi dezactivate folosind atributul disabled = "disabled".
    -->
    
    <button type="button" class="btn btn-primary btn-lg disabled" disabled="disabled">Primary button</button>
    <button type="button" class="btn btn-default btn-lg disabled" disabled="disabled">Button</button>
    
    <hr>
    
    <!--
        Pentru a crea butoane cu stari (incarcare...) folosim atributul data-loading-text="Loading...".
    -->
    
    <button type="button" class="btn btn-primary" data-loading-text="Loading...">Loading state</button>
    
    <hr>
    
    <!--
        Se pot crea butoane cu 2 stari: apasat/eliberat prin folosirea atributului data-toggle="button".
    -->
    
    <button type="button" class="btn btn-primary" data-toggle="button">Single Toggle Button</button>
    
    <hr>
    
    <!--
        Se pot crea grupuri de butoane. Tot ce trebuie facut este sa se creeze un div cu clasa
        .btn-group iar in acesta sa se declare butoanele ce se doresc a fi utilizate.
    -->
    
    <div class="btn-group">
        <button type="button" class="btn btn-primary">Left</button>
        <button type="button" class="btn btn-primary">Middle</button>
        <button type="button" class="btn btn-primary">Right</button>
    </div>
    
    <hr>
    
    <!--
        Se pot crea grupuri de butoane pe verticala. Tot ce trebuie facut este sa se creeze un div 
        cu clasa .btn-group-vertical iar in acesta sa se declare butoanele ce se doresc a fi utilizate.
    -->
    
    <div class="btn-group-vertical">
        <button type="button" class="btn btn-primary">Left</button>
        <button type="button" class="btn btn-primary">Middle</button>
        <button type="button" class="btn btn-primary">Right</button>
    </div>
    
    <hr>    
    
    <!--
        Se pot crea checkboxuri de tip butoane. Trebuie creat un div cu clasa .btn-group si care
        sa aiba atributul data-toggle="buttons". In interiorul acestuia se vor declara checkboxurile.
    -->
    
    <div class="btn-group" data-toggle="buttons">
        <label class="btn btn-primary">
            <input type="checkbox" name="options"> Option 1
        </label>
        <label class="btn btn-primary">
            <input type="checkbox" name="options"> Option 2
        </label>
        <label class="btn btn-primary">
            <input type="checkbox" name="options"> Option 3
        </label>
    </div>
    
    <hr>
    
    <!--
        Se pot crea radio-uri de tip butoane. Trebuie creat un div cu clasa .btn-group si care
        sa aiba atributul data-toggle="buttons". In interiorul acestuia se vor declara radio-urile.
    -->
    
    <div class="btn-group" data-toggle="buttons">
        <label class="btn btn-primary">
            <input type="radio" name="options"> Option 1
        </label>
        <label class="btn btn-primary">
            <input type="radio" name="options"> Option 2
        </label>
        <label class="btn btn-primary">
            <input type="radio" name="options"> Option 3
        </label>
    </div>
    
    <hr>    
    
    <!--
        Daca vrem ca un buton radio sa fie preselectat atunci adaugam clasa .active la label-ul
        corespunzator butonului radio.
    -->
    
    <div class="btn-group" data-toggle="buttons">
        <label class="btn btn-primary">
            <input type="radio" name="options"> Option 1
        </label>
        <label class="btn btn-primary active">
            <input type="radio" name="options"> Option 2
        </label>
        <label class="btn btn-primary">
            <input type="radio" name="options"> Option 3
        </label>
    </div>
    
    <hr>
    
    <!--
        Putem pune laolalta mai multe grupuri de butoane. Trebuie sa cream un div cu clasa. btn-toolbar
        iar in interiorul lui sa luam divurile cu clasa .btn-group.
    -->
    
    <div class="btn-toolbar">
        <div class="btn-group">
            <button type="button" class="btn btn-primary">1</button>
            <button type="button" class="btn btn-primary">2</button>
            <button type="button" class="btn btn-primary">3</button>
            <button type="button" class="btn btn-primary">4</button>
        </div>
        <div class="btn-group">
            <button type="button" class="btn btn-primary">5</button>
            <button type="button" class="btn btn-primary">6</button>
            <button type="button" class="btn btn-primary">7</button>
        </div>
        <div class="btn-group">
            <button type="button" class="btn btn-primary">8</button>
        </div>
    </div>
    
    <hr>
    
    <!--
        Se poate ajusta marimea unui grup de butoane folosind clasa .btn-group-* (*=sm,xs,lg)
    -->
    
    <div class="btn-toolbar">
        <div class="btn-group btn-group-lg">
            <button type="button" class="btn btn-primary">Left</button>
            <button type="button" class="btn btn-primary">Middle</button>
            <button type="button" class="btn btn-primary">Right</button>
        </div>
    </div>
    <div class="btn-toolbar">
        <div class="btn-group">
            <button type="button" class="btn btn-primary">Left</button>
            <button type="button" class="btn btn-primary">Middle</button>
            <button type="button" class="btn btn-primary">Right</button>
        </div>
    </div>
    <div class="btn-toolbar">
        <div class="btn-group btn-group-sm">
            <button type="button" class="btn btn-primary">Left</button>
            <button type="button" class="btn btn-primary">Middle</button>
            <button type="button" class="btn btn-primary">Right</button>
        </div>
    </div>
    <div class="btn-toolbar">
        <div class="btn-group btn-group-xs">
            <button type="button" class="btn btn-primary">Left</button>
            <button type="button" class="btn btn-primary">Middle</button>
            <button type="button" class="btn btn-primary">Right</button>
        </div>
    </div>    
    
    <hr>
    
    <!--
        Putem justifica un grup de butoane la dimensiunea elementului parinte daca folosim 
        clasa .btn-group-justified.
    Atentie! Functioneaza numai cu butoane de tip <a>.
    -->
    
    <div class="btn-group btn-group-justified">
        <a href="#" class="btn btn-primary">Left</a>
        <a href="#" class="btn btn-primary">Middle</a>
        <a href="#" class="btn btn-primary">Right</a>
    </div>
    
    <hr>
    
    
    
</div>
</body>
</html>                                		