<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Example of Twitter Bootstrap 3 Carousel</title>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<style type="text/css">
h2{
    margin: 0;     
    color: #666;
    padding-top: 90px;
    font-size: 52px;
    font-family: "trebuchet ms", sans-serif;    
}
.item{
    background: #333;    
    text-align: center;
    height: 300px !important;
}
.carousel{
    margin-top: 20px;
}
.bs-example{
	margin: 20px;
}
</style>
</head>
<body>
<div class="bs-example">
    
    <!--
        Carusel-ul este acea componenta de slide care afiseaza diferite imagini utilizatorului impreuna cu 
        alte informatii importante.
    -->
    <div id="myCarousel" class="carousel slide" data-interval="3000" data-ride="carousel">
    	<!-- Carousel indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>   
       <!-- Carousel items -->
        <div class="carousel-inner">
            <div class="active item">
                <h2>Slide 1</h2>
                <div class="carousel-caption">
                  <h3>First slide label</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
            <div class="item">
                <h2>Slide 2</h2>
                <div class="carousel-caption">
                  <h3>Second slide label</h3>
                  <p>Aliquam sit amet gravida nibh, facilisis gravida odio.</p>
                </div>
            </div>
            <div class="item">
                <h2>Slide 3</h2>
                <div class="carousel-caption">
                  <h3>Third slide label</h3>
                  <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                </div>
            </div>
        </div>
        <!-- Carousel nav -->
        <a class="carousel-control left" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="carousel-control right" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
    </div>
    
    <hr>
    
    <!--
        Controlarea caruselului prin data-attributes.
    -->
    <div id="myCarousel2" class="carousel slide" data-interval="3000" data-ride="carousel">
    <!-- Carousel indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel2" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel2" data-slide-to="1"></li>
        <li data-target="#myCarousel2" data-slide-to="2"></li>
    </ol>   
    <!-- Carousel items -->
    <div class="carousel-inner">
        <div class="item active">
            <h2>Slide 1</h2>
            <div class="carousel-caption">
              <h3>First slide label</h3>
              <p>Lorem ipsum dolor sit amet consectetur…</p>
            </div>
        </div>
        <div class="item">
            <h2>Slide 2</h2>
            <div class="carousel-caption">
              <h3>Second slide label</h3>
              <p>Aliquam sit amet gravida nibh, facilisis gravida…</p>
            </div>
        </div>
        <div class="item">
            <h2>Slide 3</h2>
            <div class="carousel-caption">
              <h3>Third slide label</h3>
              <p>Praesent commodo cursus magna vel…</p>
            </div>
        </div>
    </div>
    <!-- Carousel nav -->
    <a class="carousel-control left" href="#myCarousel2" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
    </a>
    <a class="carousel-control right" href="#myCarousel2" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
    </a>
</div>
    
    <hr>
    
    <!--
        Controlarea caruselului prin cod js.
    -->
    
    <script type="text/javascript">
        $(document).ready(function(){
             $("#myCarousel3").carousel();
        });
    </script>
    
    <div id="myCarousel3" class="carousel slide" data-interval="5000" data-ride="carousel">
    <!-- Carousel indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel3" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel3" data-slide-to="1"></li>
        <li data-target="#myCarousel3" data-slide-to="2"></li>
    </ol>   
    <!-- Carousel items -->
    <div class="carousel-inner">
        <div class="item active">
            <h2>Slide 1</h2>
            <div class="carousel-caption">
              <h3>First slide label</h3>
              <p>Lorem ipsum dolor sit amet consectetur…</p>
            </div>
        </div>
        <div class="item">
            <h2>Slide 2</h2>
            <div class="carousel-caption">
              <h3>Second slide label</h3>
              <p>Aliquam sit amet gravida nibh, facilisis gravida…</p>
            </div>
        </div>
        <div class="item">
            <h2>Slide 3</h2>
            <div class="carousel-caption">
              <h3>Third slide label</h3>
              <p>Praesent commodo cursus magna vel…</p>
            </div>
        </div>
    </div>
    <!-- Carousel nav -->
    <a class="carousel-control left" href="#myCarousel3" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
    </a>
    <a class="carousel-control right" href="#myCarousel3" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
    </a>
</div>
    
    <hr>
    
    <table class="table table-condensed table-bordered table-striped">
                    	<thead>
                        	<tr>
                            	<th>Name</th>
                                <th>Type</th>
                                <th>Default&nbsp;Value</th>
                                <th>Description</th>
                            </tr>                        	
                        </thead>
                        <tbody>
                        	<tr>
                            	<td>interval</td>
                                <td>number</td>
                                <td>5000</td>
                                <td>Specifies the amount of time to delay (in milliseconds) between one slide to another in automatic cycling. If false, carousel will not automatically cycle.</td>
                            </tr>
                            <tr>
                            	<td>pause</td>
                                <td>string</td>
                                <td>"hover"</td>
                                <td>Pauses the cycling of the carousel on mouse enter and resumes the cycling of the carousel on mouse leave.</td>
                            </tr>
                            <tr>
                            	<td>wrap</td>
                                <td>boolean</td>
                                <td>true</td>
                                <td>Specifies whether the carousel should cycle continuously or have hard stops.</td>
                            </tr>
                        </tbody>
                    </table>
    
</div>
    
    <!--
        These are the standard bootstrap's carousels methods:

.carousel(options)
This method initializes the carousel with optional options and starts cycling through items.

<script type="text/javascript">
$(document).ready(function(){
     $("#myCarousel").carousel({
         interval : 3000
     });
});
</script>
    
.carousel('cycle')
This method start carousel for cycling through the items from left to right.

<script type="text/javascript">
$(document).ready(function(){
    $(".start-slide").click(function(){
        $("#myCarousel").carousel('cycle');
    });
});
</script>
.carousel('pause')
    
This method stops the carousel from cycling through items.

<script type="text/javascript">
$(document).ready(function(){
    $(".pause-slide").click(function(){
        $("#myCarousel").carousel('pause');
    });
});
</script>
.carousel(number)
    
This method cycles the carousel to a particular frame (start with 0, similar to an array).

<script type="text/javascript">
$(document).ready(function(){
    $(".slide-three").click(function(){
        $("#myCarousel").carousel(3);
    });
});
</script>
    
.carousel('prev')
This method cycles the carousel to the previous item.

<script type="text/javascript">
$(document).ready(function(){
    $(".prev-slide").click(function(){
        $("#myCarousel").carousel('prev');
    });
});
</script>
    
.carousel('next')
This method cycles the carousel to the next item.

<script type="text/javascript">
$(document).ready(function(){
    $(".next-slide").click(function(){
        $("#myCarousel").carousel('next');
    });
});
</script>
    
Events
Bootstrap's carousel class includes few events for hooking into carousel functionality.

slide.bs.carousel	
    This event fires immediately when the slide instance method is called.
slid.bs.carousel	
    This event is fired when the carousel has completed its slide transition.

The following example displays an alert message to the user when sliding transition 
of a carousel item has been fully completed.

<script type="text/javascript">
$(document).ready(function(){
    $('#myCarousel').on('slid.bs.carousel', function () {
        alert("The sliding transition of previous carousel item has been fully completed.");
    }); 
});
</script>
    -->
    
</body>
</html>                                		