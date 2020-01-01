<script type="text/javascript">
    $(document).ready(function() {
        $('.up').click(function() {
            var parent = $(this).parent();
            parent.insertBefore(parent.prev());
			myFunction();
			$("#reset_priority").addClass("btnactive");
			$("#form_reset").addClass("btnactive");
        });
        $('.down').click(function() {
            var parent = $(this).parent();
            parent.insertAfter(parent.next());
			myFunction();
			$("#reset_priority").addClass("btnactive");
			$("#form_reset").addClass("btnactive");
        });
		
		
    });
	
</script>
	<li><a href="#">Dubai Lagoon</a> <a class="up"><img src="images/uparrows.png"></a><a class="down"><img src="images/downarrows.png"></a></li>
						<li><a href="#">Dubai Lagoon</a> <a class="up"><img src="images/uparrows.png"></a><a class="down"><img src="images/downarrows.png"></a></li>
						<li><a href="#">Studio City</a> <a class="up"><img src="images/uparrows.png"></a><a class="down"><img src="images/downarrows.png"></a></li>
						<li><a href="#">Dubai Marina</a> <a class="up"><img src="images/uparrows.png"></a><a class="down"><img src="images/downarrows.png"></a></li>
						<li><a href="#">Palm Jumeirah</a> <a class="up"><img src="images/uparrows.png"></a><a class="down"><img src="images/downarrows.png"></a></li>
						<li><a href="#">Greens</a> <a class="up"><img src="images/uparrows.png"></a><a class="down"><img src="images/downarrows.png"></a></li>
						<li><a href="#">Springs</a> <a class="up"><img src="images/uparrows.png"></a><a class="down"><img src="images/downarrows.png"></a></li>