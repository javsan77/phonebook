<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<title>Untitled Document</title>
</head>

<body>

	<?php 
		//echo '<pre>';
		//var_dump($list);
		//echo '</pre>';
	?>

	<p><h1>Phone Book App</h1></p>
	<p>&nbsp;</p>
	<table>
		<tr>
			<td><p><h2>Contacts</h2></p> </td>
			<td width="30%"></td>
			<td><p><button type="button" class="btn btn-primary">+Add Contact</button></p></td>
		</tr>
		<tr>
			<td colspan="3"><input class="form-control" type="text" placeholder="Search for contact by last name..."></td>
			<td><button type="button" class="btn btn-secondary">Search</button></td>
		</tr>
		<tr>
			<td colspan="4">&nbsp;</td>
		</tr>
		<?php
		for ($i=0; $i < count($list); $i++) { 
			echo '<tr>';
				echo '<td>'.$list[$i]["firstname"].' '.$list[$i]["lastname"].'</td>';
				echo '<td>'.$list[$i]["phone"].'</td>';
				echo '<td><button type="button" class="btn btn-info">Edit</button></td>';
				echo '<td><button type="button" class="btn btn-danger">Delete</button></td>';
			echo '</tr>';
		}
		?>
	</table>


	<!--<p>Tableview (foreach nombre-apellido / numero / boton eliminar)</p>
	<p>&nbsp;</p>
	<p>paginador  </p>-->
</body>
</html>
