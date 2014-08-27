<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Example of Twitter Bootstrap 3 Image Styling</title>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<style type="text/css">
    img{
        margin: 10px;
    }
	.bs-example{
    	margin: 20px;
    }
</style>
</head> 
<body>
<div class="bs-example"> 
    
    <!--
        Se pot aplica stiluri la nivel de imagini prin clasele .img-rounded, .img-circle, .img-thumbnail.
    -->
    
    <img src="http://www.eatthesunlight.com/wp-content/uploads/2014/08/nature-125x125.jpg" class="img-rounded" alt="Rounded Image">
    <img src="http://www.eatthesunlight.com/wp-content/uploads/2014/08/nature-125x125.jpg" class="img-circle" alt="Circular Image">
    <img src="http://www.eatthesunlight.com/wp-content/uploads/2014/08/nature-125x125.jpg" class="img-thumbnail" alt="Thumbnail Image">
    
    <hr>
    
    <!--
        Clasa img-thumbnail este folositoare pentru crearea unor liste de imagini sau de video-uri.
        Exemplu mai jos.
    -->
    
    <div class="container">
        <div class="row">
            <div class="col-xs-offset-2 col-xs-2">
                <a href="#" class="thumbnail">
                    <img src="http://www.eatthesunlight.com/wp-content/uploads/2014/08/nature-125x125.jpg" alt="125x125">
                </a>
            </div>
            <div class="col-xs-offset-2 col-xs-2">
                <a href="#" class="thumbnail">
                    <img src="http://www.eatthesunlight.com/wp-content/uploads/2014/08/nature-125x125.jpg" alt="125x125">
                </a>
            </div>
            <div class="col-xs-offset-2 col-xs-2">
                <a href="#" class="thumbnail">
                    <img src="http://www.eatthesunlight.com/wp-content/uploads/2014/08/nature-125x125.jpg" alt="125x125">
                </a>
            </div>
        </div>
    </div>
    
    <hr>
    
    <!--
        Se pot insera in astfel de thumbnail-uri si alte elemente, gen: butoane, text, imagini, etc.
        Exemplu mai jos.
    -->
    
    <div class="container">
        <div class="row">
            <div class="col-xs-3">
                <div class="thumbnail">
                    <img src="http://www.eatthesunlight.com/wp-content/uploads/2014/08/nature-125x125.jpg" alt="Sample Image">
                    <div class="caption">
                        <h3>Thumbnail label</h3>
                        <p>Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula. Cras justo odio, dapibus ac facilisis in quam.</p>
                        <p><a href="#" class="btn btn-primary">Share</a> <a href="#" class="btn btn-default">Download</a></p>
                    </div>
                </div>
            </div>
            <div class="col-xs-3">
                <div class="thumbnail">
                    <img src="http://www.eatthesunlight.com/wp-content/uploads/2014/08/nature-125x125.jpg" alt="Sample Image">
                    <div class="caption">
                        <h3>Thumbnail label</h3>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula.</p>
                        <p><a href="#" class="btn btn-primary">Share</a> <a href="#" class="btn btn-default">Download</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <hr>
    
    <!--
        Folosind clasa .media se poate realiza o stilare perfecta pentru comentarii.
        Poza, descriere, comentariu, data, etc. Toate intr-o forma simplista si atragatoare.
    -->
    
    <div class="media">
        <a href="#" class="pull-left">
            <img src="http://www.eatthesunlight.com/wp-content/uploads/2014/08/nature-125x125.jpg" class="media-object" alt="Sample Image">
        </a>
        <div class="media-body">
            <h4 class="media-heading">Jhon Carter <small><i>Posted on January 10, 2014</i></small></h4>
            <p>Excellent feature! I love it. One day I'm definitely going to put this Bootstrap component into use and I'll let you know once I do.</p>
        </div>
    </div>
    <hr />
    <div class="media">
        <a href="#" class="pull-right">
            <img src="http://www.eatthesunlight.com/wp-content/uploads/2014/08/nature-125x125.jpg" class="media-object" alt="Sample Image">
        </a>
        <div class="media-body">
            <h4 class="media-heading">Jhon Carter <small><i>Posted on January 10, 2014</i></small></h4>
            <p>Excellent feature! I love it. One day I'm definitely going to put this Bootstrap component into use and I'll let you know once I do.</p>
        </div>
    </div>
    
    <hr>
    
    <!--
        Lista imbricata de obiecte media.
    -->
    
    <ul class="media-list">
        <li class="media">
            <a href="#" class="pull-left">
                <img src="http://www.eatthesunlight.com/wp-content/uploads/2014/08/nature-125x125.jpg" class="media-object" alt="Sample Image">
            </a>
            <div class="media-body">
                <h4 class="media-heading">Media Heading</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante.</p>
                <!-- Nested media object -->
                <div class="media">
                    <a href="#" class="pull-left">
                        <img src="http://www.eatthesunlight.com/wp-content/uploads/2014/08/nature-125x125.jpg" class="media-object" alt="Sample Image">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading">Nested Media Heading</h4>
                        <p>Vestibulum quis quam ut magna consequat faucibus. Pellentesque eget nisi a mi suscipit tincidunt. Ut tempus dictum risus. Pellentesque viverra sagittis quam at mattis.</p>
                        <!-- Nested media object -->
                        <div class="media">
                            <a href="#" class="pull-left">
                                <img src="http://www.eatthesunlight.com/wp-content/uploads/2014/08/nature-125x125.jpg" class="media-object" alt="Sample Image">
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading">Nested Media Heading</h4>
                                <p>Amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Nested media object -->
                <div class="media">
                    <a href="#" class="pull-left">
                        <img src="http://www.eatthesunlight.com/wp-content/uploads/2014/08/nature-125x125.jpg" class="media-object" alt="Sample Image">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading">Nested Media Heading</h4>
                        <p>Phasellus vitae suscipit justo. Mauris pharetra feugiat ante id lacinia. Etiam faucibus mauris id tempor egestas. Duis luctus turpis at accumsan tincidunt.</p>
                    </div>
                </div>
            </div>
        </li>
        <li class="media">
            <a href="#" class="pull-left">
                <img src="http://www.eatthesunlight.com/wp-content/uploads/2014/08/nature-125x125.jpg" class="media-object" alt="Sample Image">
            </a>
            <div class="media-body">
                <h4 class="media-heading">Media Heading</h4>
                <p>Quisque pharetra velit id velit iaculis pretium. Nullam a justo sed ligula porta semper eu quis enim. Pellentesque pellentesque, metus at facilisis hendrerit, lectus velit.</p>
            </div>
        </li>
    </ul>
    
</div>
</body>
</html>                                		