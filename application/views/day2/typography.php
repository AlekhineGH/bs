<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Example of Twitter Bootstrap 3 Headings with Secondary Text</title>
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
        Clasa page-header permite setarea unui titlu de pagina.
    -->
    <div class="page-header">
    <h1>Twitter Bootstrap <small>An intuitive front-end framework</small></h1>
    </div>
    
    <h1>h1. Bootstrap heading <small>Secondary text</small></h1>
    <h2>h2. Bootstrap heading <small>Secondary text</small></h2>
    <h3>h3. Bootstrap heading <small>Secondary text</small></h3>
    <h4>h4. Bootstrap heading <small>Secondary text</small></h4>
    <h5>h5. Bootstrap heading <small>Secondary text</small></h5>
    <h6>h6. Bootstrap heading <small>Secondary text</small></h6>
    
    <hr>
    
    <h1>h1. Bootstrap heading <span class="small">Secondary text</span></h1>
    <h2>h2. Bootstrap heading <span class="small">Secondary text</span></h2>
    <h3>h3. Bootstrap heading <span class="small">Secondary text</span></h3>
    <h4>h4. Bootstrap heading <span class="small">Secondary text</span></h4>
    <h5>h5. Bootstrap heading <span class="small">Secondary text</span></h5>
    <h6>h6. Bootstrap heading <span class="small">Secondary text</span></h6>
    
    <hr>
    
    <p>Paragraf normal.</p>
    <p class="lead">Paragraf care atrage atentia.</p>
    
    <!--
        Pentru alinierea textului din paragrafe sau din alte elemente folosim clasele 
        de aliniere: text-left, text-right, text-center, text-justify, text-nowrap.
    -->
    
    <p class="text-left">Left aligned text.</p>
    <p class="text-center">Center aligned text.</p>
    <p class="text-right">Right aligned text.</p>
    <p class="text-justify">Justified text.</p>
    <p class="text-nowrap">No wrap text.</p>
    
    <hr>
    
    <!--
        Clasele de transformare a textului permit scrierea unor fragmente cu majuscule, 
        minuscule sau cu prima litera a fiecarui cuvant majuscula.
        Acestea sunt: text-lowercase, text-uppercase, text-capitalize.
    -->
    
    <p class="text-lowercase">The quick brown fox jumps over the lazy dog.</p>
    <p class="text-uppercase">The quick brown fox jumps over the lazy dog.</p>
    <p class="text-capitalize">The quick brown fox jumps over the lazy dog.</p>
   
    <hr>
    
    <!--
        Exista situatii cand dorim afisarea unor mesaje de eroare, de succes, 
        de avertizare, etc. Clasele care permit acest lucru sunt: 
        text-muted, text-primary, text-success, text-info, text-warning, text-danger.
    -->
    
    <p class="text-muted">Muted: This text is grayed out.</p>
    <p class="text-primary">Important: Please read the instructions carefully before proceed.</p>
    <p class="text-success">Success: Your message has been sent successfully.</p>
    <p class="text-info">Note: You must agree with the terms and conditions to complete the sign up process.</p>
    <p class="text-warning">Warning: There was a problem with your network connection.</p>
    <p class="text-danger">Error: An error has been occurred while submitting your data.</p>
    
    <hr>
    
    <!--
        Este posibila scrierea de citate intr-o maniera stilata.
        Se ocupa bs de acest lucru. Singurul aspect necesar este tag-ul 
        <blockquote>
    -->
    
    <blockquote>
     <p>The world is a dangerous place to live; not because of the people who are evil, but because of the people who don't do anything about it.</p>
     <small>by <cite>Albert Einstein</cite></small>
    </blockquote>
    
    <hr>
    
    <!--
        Citat aliniat la dreapta:
    -->
    
    
    <blockquote class="pull-right">
     <p>The world is a dangerous place to live; not because of the people who are evil, but because of the people who don't do anything about it.</p>
     <small>by <cite>Albert Einstein</cite></small>
    </blockquote>
    
    <div class="clearfix"></div>
    
    
    <hr>
    
    
    
</div>
</body>
</html>                                		