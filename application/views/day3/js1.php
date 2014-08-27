<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Example of Twitter Bootstrap 3 Button Methods</title>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){ 
    $(".nav-tabs a").click(function(){
        $(this).button('loading').delay(500).queue(function(){
            $(this).button('reset');
            $(this).dequeue();
        });        
    });
});
</script>
<style type="text/css">
	.nav a{
        outline: none;
    }
    .bs-example{
    	margin: 20px;
    }
</style>
</head>
<body>
<div class="bs-example">
    
    <!--
        Exemplu de toggle a unui buton folosind cod js.
        Se poate si prin folosirea atributului data-toggle.
    -->
    
    <div class="tabbable">
        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#tab1" data-loading-text="Loading...">Section 1</a></li>
            <li><a data-toggle="tab" href="#tab2" data-loading-text="Loading...">Section 2</a></li>
            <li><a data-toggle="tab" href="#tab3" data-loading-text="Loading...">Section 3</a></li>
        </ul>
        <div class="tab-content">
            <div id="tab1" class="tab-pane active fade in">
            <p>Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui. Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi.</p>
            </div>
            <div id="tab2" class="tab-pane fade">
            <p>Vestibulum nec erat eu nulla rhoncus fringilla ut non neque. Vivamus nibh urna, ornare id gravida ut, mollis a magna. Aliquam porttitor condimentum nisi, eu viverra ipsum porta ut. Nam hendrerit bibendum turpis, sed molestie mi fermentum id. Aenean volutpat velit sem. Sed consequat ante in rutrum convallis. Nunc facilisis leo at faucibus adipiscing. Duis auctor dictum erat hendrerit dapibus. </p>
            </div>
            <div id="tab3" class="tab-pane fade">
            <p>WInteger convallis, nulla in sollicitudin placerat, ligula enim auctor lectus, in mollis diam dolor at lorem. Sed bibendum nibh sit amet dictum feugiat. Vivamus arcu sem, cursus a feugiat ut, iaculis at erat. Donec vehicula at ligula vitae venenatis. Sed nunc nulla, vehicula non porttitor in, pharetra et dolor. Fusce nec velit velit. Pellentesque consectetur eros nec interdum varius. Quisque at mi dolor.</p>
            </div>
        </div>
    </div>
</div>

<!--    
    
These are the standard bootstrap's buttons methods:

$().button('toggle')

This method toggles push state of the button. It changes the appearance of the button, and makes it look like that it has been activated. 
You can also enable auto toggling of a button by using the "data-toggle" attribute.

<script type="text/javascript">
$(document).ready(function(){
    $("#myButton").click(function(){
        $(this).button('toggle');
    });
});
</script>

$().button('loading')

This method sets the button state to loading. 
When loading, the button is disabled and the text is swapped with the value of "data-loading-text" attribute of button element.

<script type="text/javascript">
$(document).ready(function(){
    $("#myButton").click(function(){
        $(this).button('loading');
    });
});
</script>

$().button('reset')

This method resets button state by swapping text to original text.

<script type="text/javascript">
$(document).ready(function(){
    $("#myButton").click(function(){
        $(this).button('loading').delay(1000).queue(function(){
            $(this).button('reset');
            $(this).dequeue();
        });        
    });
});
</script>

$().button(string)

This method resets button state by swapping text to any data defined text state.

<script type="text/javascript">  
$(document).ready(function(){
    $("#myButton").click(function(){
        $(this).button('loading').delay(1000).queue(function() {
            $(this).button('complete');
            $(this).dequeue();
        });        
    });
});   
</script>    
-->

</body>
</html>                                		