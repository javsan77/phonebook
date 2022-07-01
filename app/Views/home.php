<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<title>Untitled Document</title>
</head>

<body>

	<?php 
		/*echo '<pre>';
		var_dump($list);
		echo '</pre>';*/
	?>

	<p><h1>Phone Book App</h1></p>
	<p>&nbsp;</p>
	<form id="#form1">
	<table>
		<tr>
			<td><p><h2>Contacts</h2></p> </td>
			<td width="30%"></td>
			<td><button id="add_contact" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">+Add Contact</button></td>
		</tr>
		<tr>
		  
			<td colspan="3"><input id="search_contact" class="form-control" type="search" placeholder="Search for contact by last name..."></td>
			<td><button id="search" type="button" class="btn btn-secondary">Search</button></td>
		</tr>
		<tr>
			<td colspan="4">&nbsp;</td>
		</tr>
		<?php
		for ($i=0; $i < count($list); $i++) { 
			echo '<tr>';
				echo '<td>'.$list[$i]["firstname"].' '.$list[$i]["lastname"].'</td>';
				echo '<td>'.$list[$i]["phone"].'</td>';
				echo '<td><button id="edit'.$list[$i]["id"].'" type="button" class="btn btn-info edit" data-toggle="modal" data-target="#editModal">Edit</button></td>';
				echo '<td><button id="del'.$list[$i]["id"].'" type="button" class="btn btn-danger delete">Delete</button></td>';
			echo '</tr>';
		}
		?>
	</table>
	</form>


	<!-- Modal Add Contact-->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">New Contact</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <form id="form_contact" name="form_contact">
	        	<input id="firstname" name="firstname" class="form-control" type="text" placeholder="Enter first name">
	        	&nbsp;
	        	<input id="lastname" name="lastname" class="form-control" type="text" placeholder="Enter last name">
	        	&nbsp;
	        	<input id="phone" name="phone" class="form-control" type="text" placeholder="Enter telephone number">	        	
	        </form>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	        <button id="save_contact" type="button" class="btn btn-primary">Save changes</button>
	      </div>
	    </div>
	  </div>
	</div>	

	<!-- Modal Edit Contact-->
	<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">Edit Contact</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <form id="form_edit_contact" name="form_edit_contact">
	        	<input id="eid" name="eid" type="hidden">
	        	<input id="efirstname" name="efirstname" class="form-control" type="text" placeholder="Enter first name">
	        	&nbsp;
	        	<input id="elastname" name="elastname" class="form-control" type="text" placeholder="Enter last name">
	        	&nbsp;
	        	<input id="ephone" name="ephone" class="form-control" type="text" placeholder="Enter telephone number">	        	
	        </form>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	        <button id="update_contact" type="button" class="btn btn-primary">Update</button>
	      </div>
	    </div>
	  </div>
	</div>	






	<script type="text/javascript">
	  	$(document).ready(function() {
	  		// Add Contact
	    	$('button#save_contact').click(function(){

	    		var form_contact = document.forms.namedItem("form_contact");  		
				var formcontact = new FormData(form_contact);
				$('#exampleModal').modal('hide');
				$('#form_contact')[0].reset();

          		$.ajax({ type: "post",
          			     data:formcontact,
				         processData: false,
				         contentType: false,
				         dataType:"json",
	                     url: "http://phonebook.com/save",
			             success:  function (response) {
			                        //console.log(response);
			                        window.location.href = "http://phonebook.com";
			             }
	               });

			});

	    	// Delete Contact
	    	$('button.delete').click(function(){

	    		let id = this.id.substr(4);

          		$.ajax({ type: "post",
          			     data:{id:id},
	                     url: "http://phonebook.com/delete",
			             success:  function (response) {
			                        //console.log(response);
			                        window.location.href = "http://phonebook.com";
			             }
	               });
	        });	    		

	    	// Edit Contact
	    	$('button.edit').click(function(){

	    		let id = this.id.substr(4);

	    		
          		$.ajax({ type: "post",
          			     data:{id:id},
          			     dataType:"json",
	                     url: "http://phonebook.com/recover",
			             success:  function (response) {
			                        //console.log(typeof(response));
			                        $('#eid').val(response.id);
			                        $('#efirstname').val(response.firstname);
			                        $('#elastname').val(response.lastname);
			                        $('#ephone').val(response.phone);
			                        //window.location.href = "http://phonebook.com";
			             }
	               });
	        });

	    	//Update
	    	$('button#update_contact').click(function(){

	    		var form_contact = document.forms.namedItem("form_edit_contact");  		
				var formcontact = new FormData(form_contact);
				$('#editModal').modal('hide');
				$('#form_edit_contact')[0].reset();

          		$.ajax({ type: "post",
          			     data:formcontact,
				         processData: false,
				         contentType: false,
				         dataType:"json",
	                     url: "http://phonebook.com/update",
			             success:  function (response) {
			                        //console.log(response);
			                        window.location.href = "http://phonebook.com";
			             }
	               });

			});	    	
				    	

	    	$('button#search').click(function(){
	    		var text = document.getElementById('search_contact').value;
	        	document.getElementById('search_contact').value = '';
          		$.ajax({ type: "post",
          			     data:{text:text},
	                     url: "http://phonebook.com/search",
			             success:  function (response) {
			                        console.log(response);
			             }
	               });
	          });

	    });



	</script>

</body>
</html>
