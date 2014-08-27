<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Example of Twitter Bootstrap 3 Unstyled Lists</title>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<style type="text/css">
    .bs-example{
    	margin: 20px;
    }
    .lgw{
        width: 200px;
    }
    
</style>
</head>
<body>
<div class="bs-example">

    <!--
        Liste ordonate/neordonate fara stil:
    -->
    
    <h2>Unstyled Unordered List</h2>
    <ul class="list-unstyled">
        <li>Home</li>
        <li>Products
            <ul>
                <li>Gadgets</li>
                <li>Accessories</li>
            </ul>
        </li>
        <li>About Us</li>
        <li>Contact</li>
    </ul>
    <hr>
    <h2>Unstyled Ordered List</h2>
    <ol class="list-unstyled">
        <li>Home</li>
        <li>Products
            <ol>
                <li>Gadgets</li>
                <li>Accessories</li>
            </ol>
        </li>
        <li>About Us</li>
        <li>Contact</li>
    </ol>
    
    <hr>
    
    <!--
        Pentru a crea liste inline vom aplica o clasa .list-inline.
    -->
    
    <ul class="list-inline">
        <li>Home</li>
        <li>Products</li>
        <li>Clients</li>
        <li>Contact</li>
    </ul>
    
    <hr>
    
    <!--
        Pentru folosirea listelor de definitie orizontale folosim clasa .dl-horizontal.
        Textul din <dt> va fi boldat dar si truncat daca depaseste 160px.
    -->
    
    <dl class="dl-horizontal">
        <dt>User Agent</dt>
        <dd>An HTML user agent is any device that interprets HTML documents.</dd>
        <dt>Client-side Scripting</dt>
        <dd>Client-side scripting generally refers to the category of computer programs on the web that are executed client-side i.e. by the user's web browser.</dd>
        <dt>Document Tree</dt>
        <dd>The tree of elements encoded in the source document.</dd>
    </dl>
    
    <hr>
    
    <!--
        Pentru liste grupate(afisate intr-un mod mai stilat) folosim clasa 
        .list-group pentru lista si clasa .list-group-item pentru <li>.
    -->
    
    <ul class="list-group">
        <li class="list-group-item">Pictures</li>
        <li class="list-group-item">Documents</li>        
        <li class="list-group-item">Music</li>
        <li class="list-group-item">Videos</li>
    </ul>
    
    <hr>
    
    <ul class="list-group lgw">
        <li class="list-group-item">Pictures</li>
        <li class="list-group-item">Documents</li>        
        <li class="list-group-item">Music</li>
        <li class="list-group-item">Videos</li>
    </ul>
    
    <hr>
    
    <!--
        Se pot crea liste stilate care sa contina imagini si insigne fara 
        a folosi neaparat listele ordonate/neordonate. De exemplu, se poate
        folosi un <div> cu clasa .list-group si elemente <a> (link-uri) cu 
        clasa .list-group-item.
    -->
    
    <div class="list-group">
        <a href="#" class="list-group-item active">
            <span class="glyphicon glyphicon-camera"></span> Pictures <span class="badge">25</span>
        </a>
        <a href="#" class="list-group-item">
            <span class="glyphicon glyphicon-file"></span> Documents <span class="badge">145</span>
        </a>
        <a href="#" class="list-group-item">
            <span class="glyphicon glyphicon-music"></span> Music <span class="badge">50</span>
        </a>
        <a href="#" class="list-group-item">
            <span class="glyphicon glyphicon-film"></span> Videos <span class="badge">8</span>
        </a>
    </div>
    
    <hr>
    
     <div class="list-group lgw">
        <a href="#" class="list-group-item active">
            <span class="glyphicon glyphicon-camera"></span> Pictures <span class="badge">25</span>
        </a>
        <a href="#" class="list-group-item">
            <span class="glyphicon glyphicon-file"></span> Documents <span class="badge">145</span>
        </a>
        <a href="#" class="list-group-item">
            <span class="glyphicon glyphicon-music"></span> Music <span class="badge">50</span>
        </a>
        <a href="#" class="list-group-item">
            <span class="glyphicon glyphicon-film"></span> Videos <span class="badge">8</span>
        </a>
    </div>
    
    <hr>
    
    <!--
        Ajungand la un alt nivel, putem crea liste sub forma unor linkuri care 
        sa contina heading-uri si paragrafe corespunzatoare acestora.
    -->
    
    <div class="list-group">
        <a href="#" class="list-group-item">
            <h4 class="list-group-item-heading">What is HTML?</h4>
            <p class="list-group-item-text">HTML stands for HyperText Markup Language. HTML is the main markup language for describing the structure of Web pages.</p>
        </a>
        <a href="#" class="list-group-item active">
            <h4 class="list-group-item-heading">What is Twitter Bootstrap?</h4>
            <p class="list-group-item-text">Twitter Bootstrap is a powerful front-end framework for faster and easier web development. It is a collection of HTML and CSS based design template.</p>
        </a>
        <a href="#" class="list-group-item">
            <h4 class="list-group-item-heading">What is CSS?</h4>
            <p class="list-group-item-text">CSS stands for Cascading Style Sheet. CSS allows you to specify various style properties for a given HTML element such as colors, backgrounds, fonts etc.</p>
        </a>
    </div>
    
    <hr>
    
    <div class="list-group lgw">
        <a href="#" class="list-group-item">
            <h4 class="list-group-item-heading">What is HTML?</h4>
            <p class="list-group-item-text">HTML stands for HyperText Markup Language. HTML is the main markup language for describing the structure of Web pages.</p>
        </a>
        <a href="#" class="list-group-item active">
            <h4 class="list-group-item-heading">What is Twitter Bootstrap?</h4>
            <p class="list-group-item-text">Twitter Bootstrap is a powerful front-end framework for faster and easier web development. It is a collection of HTML and CSS based design template.</p>
        </a>
        <a href="#" class="list-group-item">
            <h4 class="list-group-item-heading">What is CSS?</h4>
            <p class="list-group-item-text">CSS stands for Cascading Style Sheet. CSS allows you to specify various style properties for a given HTML element such as colors, backgrounds, fonts etc.</p>
        </a>
    </div>
    
</div>
</body>
</html>                                		