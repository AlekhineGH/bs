<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Example of Twitter Bootstrap 3 Modals</title>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$("#myModal").modal('show');
	});
</script>
</head>
<body>
    <?php form_open(); ?>
<div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Login</h4>
            </div>
            <div class="modal-body">
                
        <div class="form-group">
            <label for="inputEmail">Email</label>
            <input type="email" class="form-control" id="inputEmail">
        </div>
        <div class="form-group">
            <label for="inputPassword">Password</label>
            <input type="password" class="form-control" id="inputPassword">
        </div>
        <div class="checkbox">
            <label><input type="checkbox"> Remember me</label>
        </div>
       

                
            </div>
            <div class="modal-footer">
 <button type="submit" class="btn btn-primary">Login</button>
<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
                                
        </div>
    </div>
</div>
        <?php form_close(); ?>
    
<!--
    Activare dinamica a unui modal folosind data-toggle="modal".
    Sa observam ca butonul care activeaza modal-ul are ca si cale exact id-ul modalului.
-->    
    
<!-- Button HTML (to Trigger Modal) -->
<a href="#myModal" role="button" class="btn btn-large btn-primary" data-toggle="modal">Launch Demo Modal</a>
 
<!-- Modal HTML -->
<div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Confirmation</h4>
            </div>
            <div class="modal-body">
                <p>Do you want to save changes you made to document before closing?</p>
                <p class="text-warning"><small>If you don't save, your changes will be lost.</small></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>    
    
<hr>

<script type="text/javascript">
$(document).ready(function(){
    $(".btn").click(function(){
        $("#myModalJS").modal('show');
    });
});
</script>

<!-- Modal HTML -->
<div id="myModalJS" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Confirmation with JS</h4>
            </div>
            <div class="modal-body">
                <p>Do you want to save changes you made to document before closing?</p>
                <p class="text-warning"><small>If you don't save, your changes will be lost.</small></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

<hr>

<!--
    Modaluri pe diferite dimensiuni:
-->

<!-- Large modal -->
<button class="btn btn-primary" data-toggle="modal" data-target="#largeModal">Large modal</button>
 
<div id="largeModal" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Large Modal</h4>
            </div>
            <div class="modal-body">
                <p>Add the <code>.modal-lg</code> class on <code>.modal-dialog</code> to create this large modal.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary">OK</button>
            </div>
        </div>
    </div>
</div>
 
<!-- Small modal -->
<button class="btn btn-primary" data-toggle="modal" data-target="#smallModal">Small modal</button>
 
<div id="smallModal" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Small Modal</h4>
            </div>
            <div class="modal-body">
                <p>Add the <code>.modal-sm</code> class on <code>.modal-dialog</code> to create this small modal.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary">OK</button>
            </div>
        </div>
    </div>
</div>

<!--
Injectare continut intr-un modal dintr-un fisier extern.

<!-- Button HTML (to Trigger Modal) 
    <a href="../bootstrap/remote.php" class="btn btn-lg btn-primary" data-toggle="modal" data-target="#myModal">Launch Demo Modal</a>
    
    <!-- Modal HTML 
    <div id="myModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Content will be loaded here from "remote.php" file 
            </div>
        </div>
    </div>

These are the standard bootstrap's modals methods:

.modal(options)

This method activates your content as a modal.

<script type="text/javascript">
$(document).ready(function(){
    $(".launch-modal").click(function(){
        $("#myModal").modal({
            keyboard: false
        });
    }); 
});
</script>

.modal('toggle')
This method toggles a modal window manually.

<script type="text/javascript">
$(document).ready(function(){
    $(".toggle-modal").click(function(){
        $("#myModal").modal('toggle');
    });
});
</script>

.modal('show')
This method can be used to open a modal window manually.

<script type="text/javascript">
$(document).ready(function(){
    $(".open-modal").click(function(){
        $("#myModal").modal('show');
    });
});
</script>

.modal('hide')
This method can be used to hide a modal window manually.

<script type="text/javascript">
$(document).ready(function(){
    $(".hide-modal").click(function(){
        $("#myModal").modal('hide');
    });
});
</script>


Events
Bootstrap's modal class includes few events for hooking into modal functionality.

show.bs.modal	
    This event fires immediately when the show instance method is called.
shown.bs.modal	
    This event is fired when the modal has been made visible to the user. 
    It will wait until the CSS transition process has been fully completed before getting fired.
hide.bs.modal	
    This event is fired immediately when the hide instance method has been called.
hidden.bs.modal	
    This event is fired when the modal has finished being hidden from the user. It will wait until the CSS transition process has been fully completed before getting fired.

The following example displays an alert message to the user when fade out transition of the modal window has been fully completed.

<script type="text/javascript">
$(document).ready(function(){
    $("#myModal").on('hidden.bs.modal', function(){
        alert("Modal window has been completely closed.");
    });
});
</script>


-->



</body>
</html>                                		