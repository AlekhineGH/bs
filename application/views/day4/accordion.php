<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Example of Twitter Bootstrap 3 Accordion</title>
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
    <div class="panel-group" id="accordion">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">1. What is HTML?</a>
                </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse in">
                <div class="panel-body">
                    <p>HTML stands for HyperText Markup Language. HTML is the main markup language for describing the structure of Web pages. <a href="http://www.tutorialrepublic.com/html-tutorial/" target="_blank">Learn more.</a></p>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">2. What is Twitter Bootstrap?</a>
                </h4>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse">
                <div class="panel-body">
                    <p>Twitter Bootstrap is a powerful front-end framework for faster and easier web development. It is a collection of CSS and HTML conventions. <a href="http://www.tutorialrepublic.com/twitter-bootstrap-tutorial/" target="_blank">Learn more.</a></p>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">3. What is CSS?</a>
                </h4>
            </div>
            <div id="collapseThree" class="panel-collapse collapse">
                <div class="panel-body">
                    <p>CSS stands for Cascading Style Sheet. CSS allows you to specify various style properties for a given HTML element such as colors, backgrounds, fonts etc. <a href="http://www.tutorialrepublic.com/css-tutorial/" target="_blank">Learn more.</a></p>
                </div>
            </div>
        </div>
    </div>
    
    <hr>
    
    <!--
        Se poate activa un panel cu ajutorul data-target="#id-ul toggle-ului", fara js.
        Prin apasarea unui buton se activeaza/dezactiveaza acel panel.
    -->
    <!-- Trigger Button HTML -->
    <input type="button" class="btn btn-primary" data-toggle="collapse" data-target="#toggleDemo" value="Toggle Button">
    <!-- Collapsible Element HTML -->
    <div id="toggleDemo" class="collapse in">
        <p>This is a simple example of expanding and collapsing individual element via data attribute. Click on the <b>Toggle Button</b> button to see the effect.</p>
    </div>
    
    <hr>
    
    <!-- Trigger Button HTML -->
    <input type="button" class="btn" value="Toggle Button">
    <!-- Collapsible Element HTML -->
    <div id="toggleDemoJS" class="collapse in"><p>This is a simple example of expanding and collapsing individual element via JavaScript. Click on the <b>Simple Collapsible</b> button to see the effect.</p></div>
    
    <script type="text/javascript">
        $(document).ready(function(){
           $('.btn').click(function(){
               $('#toggleDemoJS').collapse('toggle');
           }); 
        });
    </script>
    
    
    <!--
    These are the standard bootstrap's collapse methods:

.collapse(options)
This method activates your content as a collapsible element.

<script type="text/javascript">
$(document).ready(function(){
    $(".btn").click(function(){
        $("#myCollapsible").collapse({
            toggle: false
        });
    });
});
</script>
    
.collapse('toggle')
This method toggles (show or hide) a collapsible element.

<script type="text/javascript">
$(document).ready(function(){
    $(".toggle-btn").click(function(){
        $("#myCollapsible").collapse('toggle');
    });
});
</script>
    
.collapse('show')
This method shows a collapsible element.

<script type="text/javascript">
$(document).ready(function(){
    $(".show-btn").click(function(){
        $("#myCollapsible").collapse('show');
    });
});
</script>
    
.collapse('hide')
This method hides a collapsible element.

<script type="text/javascript">
$(document).ready(function(){
    $(".hide-btn").click(function(){
        $("#myCollapsible").collapse('hide');
    });
});
</script>
    
    
Events
Bootstrap's collapse class includes few events for hooking into collapse functionality.

show.bs.collapse	
    This event fires immediately when the show instance method is called.
shown.bs.collapse	
    This event is fired when a collapse element has been made visible to the user. It will wait until the CSS transition process has been fully completed before getting fired.
hide.bs.collapse	
    This event is fired immediately when the hide method has been called.
hidden.bs.collapse	
    This event is fired when a collapse element has been hidden from the user. 
    It will wait until the CSS transition process has been fully completed before getting fired.

    The following example displays an alert message to the user when sliding transition of a collapsible element has been fully completed.

<script type="text/javascript">
$(document).ready(function(){
    $("#myCollapsible").on('hidden.bs.collapse', function(){
        alert("Collapsible element has been completely closed.");
    });
});
</script>
    -->
    
</div>
</body>
</html>                                		                                		