<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Example of Twitter Bootstrap 3 Vertical Form Layout</title>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script> 
<style type="text/css">
    .bs-example{
    	margin: 20px;
    }
    	/* Fix alignment issue of label on extra small devices in Bootstrap 3.2 */
    .form-horizontal .control-label{
        padding-top: 7px;
    }
</style>
</head>
<body>
<div class="bs-example">
    
    <!--
        Exista 3 moduri diferite de afisare a formularelor: vertical, orizontal si inline.
        Mai jos avem un formular pe verticala.
    -->
    
    <form>
        <div class="form-group">
            <label for="inputEmail">Email</label>
            <input type="email" class="form-control" id="inputEmail" placeholder="Email">
        </div>
        <div class="form-group">
            <label for="inputPassword">Password</label>
            <input type="password" class="form-control" id="inputPassword" placeholder="Password">
        </div>
        <div class="checkbox">
            <label><input type="checkbox"> Remember me</label>
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
    </form>
    
    <hr>
    
    <!--
        In formularele orizontale avem labeluri care se aliniaza in stanga casutelor de text.
        Pentru a crea un astfel de formular avem nevoie de clasa .form-horizontal.
        Labelurile si inputurile trebuie plasate in divuri cu clasa .form-group.
        Se pot aplica si pozitionari in sistemul de grid.
    -->
    
    <form class="form-horizontal">
        <div class="form-group">
            <label for="inputEmail" class="control-label col-xs-2">Email</label>
            <div class="col-xs-10">
                <input type="email" class="form-control" id="inputEmail" placeholder="Email">
            </div>
        </div>
        <div class="form-group">
            <label for="inputPassword" class="control-label col-xs-2">Password</label>
            <div class="col-xs-10">
                <input type="password" class="form-control" id="inputPassword" placeholder="Password">
            </div>
        </div>
        <div class="form-group">
            <div class="col-xs-offset-2 col-xs-10">
                <div class="checkbox">
                    <label><input type="checkbox"> Remember me</label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-xs-offset-2 col-xs-10">
                <button type="submit" class="btn btn-primary">Login</button>
            </div>
        </div>
    </form>
    
    <hr>
    
    <!--
        Varianta de formular inline:
    -->
    
    <form class="form-inline" role="form">
        <div class="form-group">
            <label class="sr-only" for="inputEmail">Email</label>
            <input type="email" class="form-control" id="inputEmail" placeholder="Email">
        </div>
        <div class="form-group">
            <label class="sr-only" for="inputPassword">Password</label>
            <input type="password" class="form-control" id="inputPassword" placeholder="Password">
        </div>
        <div class="checkbox">
            <label><input type="checkbox"> Remember me</label>
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
    </form>
    
    <hr>
    
    <!--
        Se poate ajusta dimensiunea unui input sau select cu ajutorul claselor .input-sm si .input-lg.
    -->
    <form>
        <div class="row">
            <div class="col-xs-6">
                <input type="text" class="form-control input-lg" placeholder="Larger input">
            </div>
            <div class="col-xs-6">
                <select class="form-control input-lg">
                    <option>Larger select</option>
                </select>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-xs-6">
                <input type="text" class="form-control" placeholder="Default input">
            </div>
            <div class="col-xs-6">
                <select class="form-control">
                    <option>Default select</option>
                </select>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-xs-6">
                <input type="text" class="form-control input-sm" placeholder="Smaller input">
            </div>
            <div class="col-xs-6">
                <select class="form-control input-sm">
                    <option>Smaller select</option>
                </select>
            </div>
        </div>
    </form>
    
    <hr>
    
    
    <!--
        Ne putem folosi de sistemul de grid pentru plasarea controalelor dintr-un form.
    -->
    
    <form>
        <div class="row">
            <div class="col-xs-3">
                <input type="text" class="form-control">
            </div>
            <div class="col-xs-4">
                <input type="text" class="form-control">
            </div>
            <div class="col-xs-5">
                <input type="text" class="form-control">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-xs-3">
                <textarea class="form-control"></textarea>
            </div>
            <div class="col-xs-4">
                <textarea class="form-control"></textarea>
            </div>
            <div class="col-xs-5">
                <textarea class="form-control"></textarea>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-xs-3">
                <select class="form-control">
                    <option>Select</option>
                </select>
            </div>
            <div class="col-xs-4">
                <select class="form-control">
                    <option>Select</option>
                </select>
            </div>
            <div class="col-xs-5">
                <select class="form-control">
                    <option>Select</option>
                </select>
            </div>
        </div>
    </form>
    
    <hr>
    
    <!--
        Este posibila adaugarea unor elemente la inceputul/finalul unui input de tip text.
    -->
    
    <form>
        <div class="row">
            <div class="col-xs-4">
                <div class="input-group">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                    <input type="text" class="form-control" placeholder="Username">
                </div>
            </div>
            <div class="col-xs-4">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Amount">
                    <span class="input-group-addon">.00</span>
                </div>
            </div>
            <div class="col-xs-4">
                <div class="input-group">
                    <span class="input-group-addon">$</span>
                    <input type="text" class="form-control" placeholder="US Dollar">
                    <span class="input-group-addon">.00</span>
                </div>
            </div>
        </div>
    </form>
    
    <hr>
    
    <!--
        In aceeasi maniera se pot adauga si butoane inaintea/dupa casutele text.
    
    -->
    
    <form>
        <div class="row">
            <div class="col-xs-6">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search&hellip;">
                    <span class="input-group-btn">
                        <button type="button" class="btn btn-default">Go</button>
                    </span>
                </div>
            </div>
            <div class="col-xs-6">
                <div class="input-group">
                    <span class="input-group-btn">
                        <button type="button" class="btn btn-default">Action</button>
                        <button type="button" class="btn btn-default">Options</button>
                    </span>
                    <input type="text" class="form-control"  placeholder="Type something&hellip;">
                </div>
            </div>
        </div>
    </form>
    <hr>
    <form>
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Search&hellip;">
            <span class="input-group-btn">
                <button type="button" class="btn btn-default">Go</button>
            </span>
        </div>
        <br>
        <div class="input-group">
            <span class="input-group-btn">
                <button type="button" class="btn btn-default">Action</button>
                <button type="button" class="btn btn-default">Options</button>
            </span>
            <input type="text" class="form-control"  placeholder="Type something&hellip;">
        </div>
    </form>
    
    <hr>
    
    <!--
        Se pot crea butoane cu dropdown langa inputuri.
    -->
    
    <form>
        <div class="row">
            <div class="col-xs-6">
                <div class="input-group">
                    <div class="input-group-btn">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
                        <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                        </ul>
                    </div>
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="col-xs-6">
                <div class="input-group">
                    <input type="text" class="form-control">
                    <div class="input-group-btn">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <hr>
    <form>
        <div class="input-group">
            <div class="input-group-btn">
                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
                <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                </ul>
            </div>
            <input type="text" class="form-control">
        </div>
        <br>
        <div class="input-group">
            <input type="text" class="form-control">
            <div class="input-group-btn">
                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
                <ul class="dropdown-menu pull-right">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                </ul>
            </div>
        </div>
    </form>
    
    <hr>
    
    <form>
        <div class="row">
            <div class="col-xs-4">
                <div class="input-group input-group-lg">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="col-xs-4">
                <div class="input-group input-group-lg">
                    <span class="input-group-addon">
                        <input type="checkbox">
                    </span>
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="col-xs-4">
                <div class="input-group input-group-lg">
                    <div class="input-group-btn">
                        <button tabindex="-1" class="btn btn-default" type="button">Action</button>
                        <button tabindex="-1" data-toggle="dropdown" class="btn btn-default dropdown-toggle" type="button">
                            <span class="caret"></span>
                            <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <ul class="dropdown-menu"> 
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                        </ul>
                    </div>
                    <input type="text" class="form-control">
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-xs-4">
                <div class="input-group">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="col-xs-4">
                <div class="input-group">
                    <span class="input-group-addon">
                        <input type="checkbox">
                    </span>
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="col-xs-4">
                <div class="input-group">
                    <div class="input-group-btn">
                        <button tabindex="-1" class="btn btn-default" type="button">Action</button>
                        <button tabindex="-1" data-toggle="dropdown" class="btn btn-default dropdown-toggle" type="button">
                            <span class="caret"></span>
                            <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <ul class="dropdown-menu"> 
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                        </ul>
                    </div>
                    <input type="text" class="form-control">
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-xs-4">
                <div class="input-group input-group-sm">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="col-xs-4">
                <div class="input-group input-group-sm">
                    <span class="input-group-addon">
                        <input type="checkbox">
                    </span>
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="col-xs-4">
                <div class="input-group input-group-sm">
                    <div class="input-group-btn">
                        <button tabindex="-1" class="btn btn-default" type="button">Action</button>
                        <button tabindex="-1" data-toggle="dropdown" class="btn btn-default dropdown-toggle" type="button">
                            <span class="caret"></span>
                            <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <ul class="dropdown-menu"> 
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                        </ul>
                    </div>
                    <input type="text" class="form-control">
                </div>
            </div>
        </div>
    </form>
    
    <hr>
    
    <!--
        Se poate dezactiva un input anume.
    -->
    
    <form>
        <input type="text" class="form-control" placeholder="Disabled input" disabled="disabled">
    </form>
    
    <hr>
    
    <!--
        Se poate dezactiva un intreg fieldset.
    -->
    
    <form class="form-horizontal">
        <fieldset disabled="disabled">
            <div class="form-group">
                <label for="inputEmail" class="control-label col-xs-2">Email</label>
                <div class="col-xs-10">
                    <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword" class="control-label col-xs-2">Password</label>
                <div class="col-xs-10">
                    <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-offset-2 col-xs-10">
                    <div class="checkbox">
                        <label><input type="checkbox"> Remember me</label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-offset-2 col-xs-10">
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>
            </div>
        </fieldset>
    </form>
    
    <hr>
    
    <!--
        Plasare text pe langa controalele formularului.
    -->
    
    <form>
        <input type="text" class="form-control">
        <span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>
    </form>
    
    <hr>
    
    <!--
        Se pot folosi diferite stari pentru controale. Diferite culori cu diferite mesaje
        care sa sugereze starea curenta a actiunii.
    -->
    
    <form class="form-horizontal">
        <div class="form-group has-success">
            <label class="col-xs-2 control-label" for="inputSuccess">Username</label>
            <div class="col-xs-10">
                <input type="text" id="inputSuccess" class="form-control" placeholder="Input with success">
                <span class="help-block">Username is available</span>
            </div>
        </div>
        <div class="form-group has-warning">
            <label class="col-xs-2 control-label" for="inputWarning">Password</label>
            <div class="col-xs-10">
                <input type="password" id="inputWarning" class="form-control" placeholder="Input with warning">
                <span class="help-block">Password strength: Weak</span>
            </div>
        </div>
        <div class="form-group has-error">
            <label class="col-xs-2 control-label" for="inputError">Email</label>
            <div class="col-xs-10">
                <input type="email" id="inputError" class="form-control" placeholder="Input with error">
                <span class="help-block">Please enter a valid email address</span>
            </div>
        </div>
    </form>
    
    <hr>
    
    <!--
        Form cu diferite stari si care are imagini asociate pentru a sugera starea actuala.
    -->
    
    <form class="form-horizontal">
        <div class="form-group has-success has-feedback">
            <label class="col-xs-2 control-label" for="inputSuccess">Username</label>
            <div class="col-xs-10">
                <input type="text" id="inputSuccess" class="form-control" placeholder="Input with success">
                <span class="glyphicon glyphicon-ok form-control-feedback"></span>
                <span class="help-block">Username is available</span>
            </div>
        </div>
        <div class="form-group has-warning has-feedback">
            <label class="col-xs-2 control-label" for="inputWarning">Password</label>
            <div class="col-xs-10">
                <input type="password" id="inputWarning" class="form-control" placeholder="Input with warning">
                <span class="glyphicon glyphicon-warning-sign form-control-feedback"></span>
                <span class="help-block">Password strength: Weak</span>
            </div>
        </div>
        <div class="form-group has-error has-feedback">
            <label class="col-xs-2 control-label" for="inputError">Email</label>
            <div class="col-xs-10">
                <input type="email" id="inputError" class="form-control" placeholder="Input with error">
                <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                <span class="help-block">Please enter a valid email address</span>
            </div>
        </div>
    </form>
    
    <hr>
    
    <!--
        Exemplu de formular de inregistrare cu diferite campuri HTML5.
    -->
    
    <form class="form-horizontal">
        <div class="form-group">
            <label class="control-label col-xs-3" for="inputEmail">Email:</label>
            <div class="col-xs-9">
                <input type="email" class="form-control" id="inputEmail" placeholder="Email">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-xs-3" for="inputPassword">Password:</label>
            <div class="col-xs-9">
                <input type="password" class="form-control" id="inputPassword" placeholder="Password">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-xs-3" for="confirmPassword">Confirm Password:</label>
            <div class="col-xs-9">
                <input type="password" class="form-control" id="confirmPassword" placeholder="Confirm Password">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-xs-3" for="firstName">First Name:</label>
            <div class="col-xs-9">
                <input type="text" class="form-control" id="firstName" placeholder="First Name">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-xs-3" for="lastName">Last Name:</label>
            <div class="col-xs-9">
                <input type="text" class="form-control" id="lastName" placeholder="Last Name">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-xs-3" for="phoneNumber">Phone:</label>
            <div class="col-xs-9">
                <input type="tel" class="form-control" id="phoneNumber" placeholder="Phone Number">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-xs-3">Date of Birth:</label>
            <div class="col-xs-3">
                <select class="form-control">
                    <option>Date</option>
                </select>
            </div>
            <div class="col-xs-3">
                <select class="form-control">
                    <option>Month</option>
                </select>
            </div>
            <div class="col-xs-3">
                <select class="form-control">
                    <option>Year</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-xs-3" for="postalAddress">Address:</label>
            <div class="col-xs-9">
                <textarea rows="3" class="form-control" id="postalAddress" placeholder="Postal Address"></textarea>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-xs-3" for="ZipCode">Zip Code:</label>
            <div class="col-xs-9">
                <input type="text" class="form-control" id="ZipCode" placeholder="Zip Code">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-xs-3">Gender:</label>
            <div class="col-xs-2">
                <label class="radio-inline">
                    <input type="radio" name="genderRadios" value="male"> Male
                </label>
            </div>
            <div class="col-xs-2">
                <label class="radio-inline">
                    <input type="radio" name="genderRadios" value="female"> Female
                </label>
            </div>
        </div>
        <div class="form-group">
            <div class="col-xs-offset-3 col-xs-9">
                <label class="checkbox-inline">
                    <input type="checkbox" value="news"> Send me latest news and updates.
                </label>
            </div>
        </div>
        <div class="form-group">
            <div class="col-xs-offset-3 col-xs-9">
                <label class="checkbox-inline">
                    <input type="checkbox" value="agree">  I agree to the <a href="#">Terms and Conditions</a>.
                </label>
            </div>
        </div>
        <br>
        <div class="form-group">
            <div class="col-xs-offset-3 col-xs-9">
                <input type="submit" class="btn btn-primary" value="Submit">
                <input type="reset" class="btn btn-default" value="Reset">
            </div>
        </div>
    </form>
    
</div>
</body>
</html>                                		