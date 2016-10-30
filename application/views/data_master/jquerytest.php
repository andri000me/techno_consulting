<!DOCTYPE html>
<html>
<head>
<script src="<?php echo base_url("style/jqueryui/external/jquery/jquery.js"); ?>" ></script>
<script src="<?php echo base_url("style/jqueryui/jquery-ui.js"); ?>" ></script>
<link rel="stylesheet" href="<?php echo base_url("style/jqueryui/jquery-ui.css"); ?>" />

<script>
	$(document).ready(function(){
    	$("li").click(function(){
        	$("p").toggle();
        });
        $( "#dialog" ).dialog({
			autoOpen: false,
			width: 400,
			buttons: [
					{
						text: "Ok",
						click: function() {
							$( this ).dialog( "close" );
						}
					},
					{
						text: "Cancel",
						click: function() {
							$( this ).dialog( "close" );
						}
					}
				]
		});
		$( "#dialog-link" ).click(function( event ) {
	$( "#dialog" ).dialog( "open" );
	event.preventDefault();
});
   	});
	
</script>
<style>
	body{
		font-family: "Trebuchet MS", sans-serif;
		margin: 50px;
	}
	.demoHeaders {
		margin-top: 2em;
	}
	#dialog-link {
		padding: .4em 1em .4em 20px;
		text-decoration: none;
		position: relative;
	}
	#dialog-link span.ui-icon {
		margin: 0 5px 0 0;
		position: absolute;
		left: .2em;
		top: 50%;
		margin-top: -8px;
	}
	#icons {
		margin: 0;
		padding: 0;
	}
	#icons li {
		margin: 2px;
		position: relative;
		padding: 4px 0;
		cursor: pointer;
		float: left;
		list-style: none;
	}
	#icons span.ui-icon {
		float: left;
		margin: 0 4px;
	}
	.fakewindowcontain .ui-widget-overlay {
		position: absolute;
	}
	select {
		width: 200px;
	}
	</style>
</head>
<body>

	<button id="dialog-link" class="ui-button ui-corner-all ui-widget">
		<span class="ui-icon ui-icon-newwin"></span>Open Dialog
	</button>

	<div id="dialog" title="Dialog Title">
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
	</div>
	
</body>

</html>

