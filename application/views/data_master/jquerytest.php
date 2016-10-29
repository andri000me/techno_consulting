<!DOCTYPE html>
<html>
<head>
<script src="<?php echo base_url("style/js/jquery-3.1.1.min.js"); ?>" ></script>
<script>
$(document).ready(function(){
    $("li").click(function(){
        $("p").toggle();
    });
});
</script>
</head>
<body>

<li>Toggle between hiding and showing the paragraphs</li>

<p>This is a paragraph with little content.</p>
<p>This is another small paragraph.</p>

</body>
</html>

