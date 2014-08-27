<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Example of Twitter Bootstrap 3 Popover</title>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $(".myCls a").popover({
        placement : 'top',
        trigger: 'focus'
    });
});
</script>
<style type="text/css">
	.bs-example{
    	margin: 150px 50px;
    }
</style>
</head>
<body>
<div class="bs-example"> 
    
    <!--
        S-a mai spus faptul ca tooltips si popovers trebuie activate manual prin js.
        Se apeleaza metoda popover() cu optiunile de rigoare, daca este cazul.
    -->
    
    <ul class="myCls list-inline">
        <li><a href="#" class="btn btn-primary popover-top" data-toggle="popover" title="Popover title" data-content="Default popover">Popover on top</a></li>
        <li><a href="#" class="btn btn-success popover-right" data-toggle="popover" title="Popover title" data-content="Popover on right.">Popover on right</a></li>
        <li><a href="#" class="btn btn-info popover-bottom" data-toggle="popover" title="Popover title" data-content="Popover on bottom.">Popover on bottom</a></li>
        <li><a href="#" class="btn btn-warning popover-left" data-toggle="popover" title="Popover title" data-content="Popover on left.">Popover on left</a></li>
    </ul>
    
    <hr>
    
    <!--
        Pentru pozitionarea unui popover ne folosim de un astfel de script:
        <script type="text/javascript">
            $(document).ready(function(){
                $(".pop-top").popover({placement : 'top'});
                $(".pop-right").popover({placement : 'right'});
                $(".pop-bottom").popover({placement : 'bottom'});
                $(".pop-left").popover({ placement : 'left'});
            });
        </script>
    -->
    
    <div class="shadow">
                	<table class="table">
                    	<thead>
                        	<tr>
                            	<th>Name</th>
                                <th>Type</th>
                                <th style="width: 130px;">Default&nbsp;Value</th>
                                <th>Description</th>
                            </tr>                        	
                        </thead>
                        <tbody>
                        	<tr>
                            	<td>animation</td>
                                <td>boolean</td>
                                <td>true</td>
                                <td>Apply a CSS fade transition to the popover.</td>
                            </tr>
                            <tr>
                            	<td>html</td>
                                <td>boolean</td>
                                <td>false</td>
                                <td>Insert html into the popover. If false, jQuery's <code>text()</code> method will be used to insert content into the DOM. Use text if you're worried about XSS attacks.</td>
                            </tr>
                            <tr>
                            	<td>placement</td>
                                <td>string | function</td>
                                <td>'right'</td>
                                <td>
                                	<p>Sets the position of the popover — top | bottom | left | right | auto. When "auto" value is specified, it will dynamically reorient the popover.</p>
                                	<p>For example, if placement value is "auto left", the popover will display to the left when possible, otherwise it will display to right.</p>
                                </td>
                            </tr>
                            <tr>
                            	<td>selector</td>
                                <td>string</td>
                                <td>false</td>
                                <td>If a selector is provided, popover objects will be attached to the specified targets.</td>
                            </tr>
                            <tr>
                            	<td>title</td>
                                <td>string | function</td>
                                <td>''</td>
                                <td>Sets the default <code>title</code> value if title attribute isn't present.</td>
                            </tr>
                            <tr>
                            	<td>trigger</td>
                                <td>string</td>
                                <td>'click'</td>
                                <td>Specify how popover is triggered — click | hover | focus | manual.</td>
                            </tr>                            
                            <tr>
                            	<td>content</td>
                                <td>string | function</td>
                                <td>''</td>
                                <td>Sets the default content value if <code>'data-content'</code> attribute isn't present.</td>
                            </tr>
                            <tr>
                            	<td>delay</td>
                                <td>number | object</td>
                                <td>0</td>
                                <td>
                                	<p>Time to delay in showing and hiding the popover (ms) — does not apply to manual trigger type.</p>
                                    <p>If a number is supplied, delay is applied to both hide/show Object structure is: <code>delay: { show: 500, hide: 100 }</code></p>
                                </td>
                            </tr>
                            <tr>
                            	<td>container</td>
                                <td>string | false</td>
                                <td>false</td>
                                <td>Appends the popover to a specific element <code>container: 'body'</code></td>
                            </tr>
							<tr>
								<td>template</td>
								<td>string</td>
								<td><p style="font-size: 12px;"><code>'&lt;div class="popover"&gt;<br>&lt;div class="arrow"&gt;&lt;/div&gt;&lt;h3 class="popover-title"&gt;&lt;/h3&gt;&lt;div class="popover-content"&gt;&lt;/div&gt;&lt;/div&gt;'</code></p></td>
								<td>
									<p>Base HTML to use when creating the popover. The popover's title and content will be inserted into the elements having the class <code>.popover-title</code>  and <code>.popover-content</code> respectively. Whereas the element with the class <code>.arrow</code> will become the popover's arrow.</p>
									<p>The outermost wrapper element should have the <code>.popover</code> class.</p>
								</td>
							</tr>
							<tr>
								<td>viewport</td>
								<td>string | object</td>
								<td><code>{ selector: 'body', padding: 0 }</code></td>
								<td>Keeps the popover within the bounds of this element. Example: <code>viewport: '#viewport'</code> or <code>{ selector: '#viewport', padding: 0 }</code></td>
							</tr>
                        </tbody>
                    </table>
                </div>
    
    <!--
        These are the standard bootstrap's popover methods:

        $().popover(options)
        This method attaches the popover handler to a group of elements.

        <script type="text/javascript">
        $(document).ready(function(){
            $(".popover-examples a").popover({
                title : 'Default title value'
            });
        });
        </script>

        .popover('show')
        This method reveals an element's popover.

        <script type="text/javascript">
        $(document).ready(function(){
            $(".show-popover").click(function(){
                $(".popover-examples a").popover('show');
            }); 
        });
        </script>

        .popover('hide')
        This method hides an element's popover.

        <script type="text/javascript">
        $(document).ready(function(){
            $(".hide-popover").click(function(){
                $(".popover-examples a").popover('hide');
            }); 
        });
        </script>

        .popover('toggle')
        This method toggles an element's popover.

        <script type="text/javascript">
        $(document).ready(function(){
            $(".toggle-popover").click(function(){
                $(".popover-examples a").popover('toggle');
            }); 
        });
        </script>

        .popover('destroy')
        This method hides and destroys an element's popover.

        <script type="text/javascript">
        $(document).ready(function(){
            $(".destroy-popover").click(function(){
                $(".popover-examples a").popover('destroy');
            }); 
        });
        </script>
    -->
    
    
</div>
</body>
</html>                                		