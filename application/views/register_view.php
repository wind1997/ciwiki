<html>
<body>
<script type="text/javascript">
	function validate(){
		if(document.userlog.name.value == ""){
			alert('Please enter the Username!');
			document.userlog.name.focus();
			return false;
		}
		else if(document.userlog.password.value == ""){
			alert('Please enter the Password!');
			document.userlog.password.focus();
			return false;
		}
	}
</script>
<form method="post" name="userlog"  action="register_controller/add" onsubmit='return validate()'>

<table>
	<tr>
		<td><i><?="Username :"?></i></td>
		<td><?=form_input('name')?></td>
	</tr>
	<tr>
		<td><i><?="Password :"?></i></td>
		<td><?=form_password('password')?></td>
	</tr>
	<tr>
		<td><i><?="Email :"?></i></td>
		<td><?=form_input('email')?></td>
	</tr>	
	<tr>
		<td><i><?="Profile :"?></i></td>
		<td><?=form_textarea('profile')?></td>
	</tr>
	<tr>
		<td></td>
		<td><?=form_submit('submit', 'Submit')?></td>
	</tr>
</table>
</form>
</body>
</html>
