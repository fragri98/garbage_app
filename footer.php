<footer class="footer navbar-fixed-bottom container">
	<hr style="height:1px;background-color:#333333;">
	&copy; 2021 | Francesca Grimaldi
</footer>

</body>
</html>
<script>

$('#filter').change(function(){
	$.ajax({
		type: 'post',
		url: "index.php",
		data: $("form.filter").serialize(),
		success: function() {
			$('#list').load('index.php', function(){
			});
			$('#list').show("fast");
		}
	});
	return false;
});
var code = {};
$("select[name='filter'] > option").each(function () {
	if(code[this.text]) {
		$(this).remove();
	} else {
		code[this.text] = this.value;
	}
});

</script>
