<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Example of Twitter Bootstrap 3 Tooltip</title>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $(".tooltip-examples a").tooltip({
        placement : 'top'
    });
});
</script>
<style type="text/css">
	.bs-example{
    	margin: 100px 50px;
    }
    
    .shadow {
background: #F7F8F9;
padding: 3px;
margin: 10px 0;
}

</style>
</head>
<body>
<div class="bs-example"> 
    
    <!--
        Tooltip-urile si popover-urile sunt dezactivate implicit.
        Trebuie activate de catre user. 
        Modalitatea de activare este prin folosirea metodelor tooltip() si popover() js.
        Ca si parametru, avem un tablou cu anumite proprietati ce pot fi selectate.
        In acest exemplu avem doar proprietatea de plasare: placement.
    -->
    
    <ul class="tooltip-examples list-inline">
        <li><a href="#" data-toggle="tooltip" data-original-title="Default tooltip">Tooltip</a></li>
        <li><a href="#" data-toggle="tooltip" data-original-title="Another tooltip">Another tooltip</a></li>
        <li><a href="#" data-toggle="tooltip" data-original-title="A much longer tooltip to demonstrate the max-width of the Bootstrp tooltip.">Large tooltip</a></li>
        <li><a href="#" data-toggle="tooltip" data-original-title="The last tip!">Last tooltip</a></li>
    </ul>
    
    
    <!--
        Pentru setarea plasarii tooltip-ului folosim un script de genul:
    <script type="text/javascript">
        $(document).ready(function(){
            $(".tip-top").tooltip({placement : 'top'});
            $(".tip-right").tooltip({placement : 'right'});
            $(".tip-bottom").tooltip({placement : 'bottom'});
            $(".tip-left").tooltip({ placement : 'left'});
        });
    </script>
    -->
    
    <hr>
    
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
                                <td>Apply a CSS fade transition to the tooltip.</td>
                            </tr>
                            <tr>
                            	<td>html</td>
                                <td>boolean</td>
                                <td>false</td>
                                <td>Insert html into the tooltip. If false, jQuery's <code>text()</code> method will be used to insert content into the DOM. Use text if you're worried about XSS attacks.</td>
                            </tr>
                            <tr>
                            	<td>placement</td>
                                <td>string | function</td>
                                <td>'top'</td>
                                <td>
                                	<p>Sets the position of the tooltip — top | bottom | left | right | auto. When "auto" value is specified, it will dynamically reorient the tooltip.</p>
                                	<p>For example, if placement value is "auto top", the tooltip will display on the top when possible, otherwise it will display on the bottom.</p>
                                </td>
                            </tr>
                            <tr>
                            	<td>selector</td>
                                <td>string</td>
                                <td>false</td>
                                <td>If a selector is provided, tooltip objects will be attached to the specified targets.</td>
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
                                <td>'hover focus'</td>
                                <td>Specify how tooltip is triggered — click | hover | focus | manual. Note you case pass trigger mutliple, space seperated, trigger types.</td>
                            </tr>
                            <tr>
                            	<td>delay</td>
                                <td>number | object</td>
                                <td>0</td>
                                <td>
                                	<p>Time to delay in showing and hiding the tooltip (ms) — does not apply to manual trigger type.</p>
                                    <p>If a number is supplied, delay is applied to both hide/show Object structure is:<br> <code>delay: { show: 500, hide: 100 }</code></p>
                                </td>
                            </tr>
                            <tr>
                            	<td>container</td>
                                <td>string | false</td>
                                <td>false</td>
                                <td>Appends the tooltip to a specific element <code>container: 'body'</code></td>
                            </tr>
							<tr>
								<td>template</td>
								<td>string</td>
								<td><p style="font-size: 12px;"><code>'&lt;div class="tooltip" role="tooltip"&gt;&lt;div class="tooltip-arrow"&gt;&lt;/div&gt;&lt;div class="tooltip-inner"&gt;&lt;/div&gt;&lt;/div&gt;'</code></p></td>
								<td>
									<p>Base HTML to use when creating the tooltip. The tooltip's title will be inserted into the element having the class <code>.tooltip-inner</code> and the element with the class <code>.tooltip-arrow</code> will become the tooltip's arrow.</p>
									<p>The outermost wrapper element should have the <code>.tooltip</code> class.</p>
								</td>
							</tr>
							<tr>
								<td>viewport</td>
								<td>string | object</td>
								<td><code>{ selector: 'body', padding: 0 }</code></td>
								<td>Keeps the tooltip within the bounds of this element. Example: <code>viewport: '#viewport'</code> or <code>{ selector: '#viewport', padding: 0 }</code></td>
							</tr>
                        </tbody>
                    </table>
                </div>
    
    <hr>
    
    <!--
    
These are the standard bootstrap's tooltip methods:

$().tooltip(options)
    
This method attaches the tooltip handler to a group of elements.

<script type="text/javascript">
$(document).ready(function(){
    $(".tooltip-examples a").tooltip({
        title : 'It works in absence of title attribute.'
    });
});
</script>
    
.tooltip('show')
    
This method reveals an element's tooltip.

<script type="text/javascript">
$(document).ready(function(){
    $(".show-tooltip").click(function(){
        $(".tooltip-examples a").tooltip('show');
    }); 
});
</script>
    
.tooltip('hide')

This method hides an element's tooltip.

<script type="text/javascript">
$(document).ready(function(){
    $(".hide-tooltip").click(function(){
        $(".tooltip-examples a").tooltip('hide');
    }); 
});
</script>

.tooltip('toggle')
This method toggles an element's tooltip.

<script type="text/javascript">
$(document).ready(function(){
    $(".toggle-tooltip").click(function(){
        $(".tooltip-examples a").tooltip('toggle');
    }); 
});
</script>

.tooltip('destroy')

This method hides and destroys an element's tooltip.

<script type="text/javascript">
$(document).ready(function(){
    $(".destroy-tooltip").click(function(){
        $(".tooltip-examples a").tooltip('destroy');
    }); 
});
</script>
    
-->
    
</div>
</body>
</html>                                		