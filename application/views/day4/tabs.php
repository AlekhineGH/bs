<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Example of Twitter Bootstrap 3 Tabs</title>
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
        Crearea unor taburi simple
    -->
    
    <ul class="nav nav-tabs" id="myTab">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#profile">Profile</a></li>
        <li><a href="#">Messages</a></li>
    </ul>
    
    <hr>
    
    <!--
        Se pot activa dinamic anumite taburi fara a scrie cod js.
        Acest mecanism are loc astfel:
            specificam data-toggle="tab" la fiecare tab
            cream cate un .tab-pane cu id unic pentru fiecare tab si le impachetam
            intr-un tab-content
            
    -->
    
    <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#sectionA">Section A</a></li>
    <li><a data-toggle="tab" href="#sectionB">Section B</a></li>
    <li class="dropdown">
        <a data-toggle="dropdown" class="dropdown-toggle" href="#">Dropdown <b class="caret"></b></a>
        <ul class="dropdown-menu">
            <li><a data-toggle="tab" href="#dropdown1">Dropdown 1</a></li>
            <li><a data-toggle="tab" href="#dropdown2">Dropdown 2</a></li>
        </ul>
    </li>
    </ul>
    
    <div class="tab-content">
    <div id="sectionA" class="tab-pane fade in active">
        <p>Section A content…</p>
    </div>
    <div id="sectionB" class="tab-pane fade">
        <p>Section B content…</p>
    </div>
    <div id="dropdown1" class="tab-pane fade">
        <p>Dropdown 1 content…</p>
    </div>
    <div id="dropdown2" class="tab-pane fade">
        <p>Dropdown 2 content…</p>
    </div>
    </div>
    
    <hr>
    
    <!--
        Taburile se pot activa si prin js.
        Este modalitatea preferata.
    -->
    <script type="text/javascript">
        $(document).ready(function(){
            $("#myTab a").click(function(e){
                e.preventDefault();
                $(this).tab('show');
            });
        });
    </script>
    
    <hr>
    
    <!--
        Taburile pot fi activate in mai multe moduri:
            a. dupa link-ul unde pointeaza
            b. dupa primul tab
            c. dupa ultimul tab
            d. dupa un tab anume(index) folosind li:eq(index) selector.
    -->
    <script type="text/javascript">
        $(document).ready(function(){    
            $('#myTab a[href="#profile"]').tab('show'); // show tab targeted by the selector
            //$("#myTab a:first").tab('show'); // show first tab
            //$("#myTab a:last").tab('show'); // show last tab
            //$("#myTab li:eq(2) a").tab('show'); // show third tab (0-indexed, like an array)    
        });
    </script>    
    
    <hr>
    
    <!--
This is the standard bootstrap's tab method: $().tab
    
Activates a tab element and the related content container. Tab should have either a data-target or an href for targeting a container node in the DOM.

<script type="text/javascript">
$(document).ready(function(){
    $("#myTab li:eq(1) a").tab('show');
})
</script>

Events
These are the standard Bootstrap events to enhance the tab functionality.

show.bs.tab	
    This event fires on tab show, but before the new tab has been shown. 
    You can use the event.target and event.relatedTarget to target the active tab and the previous active tab (if available) respectively.
shown.bs.tab	
    This event fires on tab show after a tab has been shown. 
    You can use the event.target and event.relatedTarget to target the active tab and the previous active tab (if available) respectively.    
-->
    
</div>
</body>
</html>                                		