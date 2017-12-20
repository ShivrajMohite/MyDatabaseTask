<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title> Employee Data </title>
	<script></script>
	<script src="jquery.tabledit.min.js"></script>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
	<script type="text/javascript" src="delete.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	
<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "employee_database";
	
	$conn = new mysqli($servername, $username, $password, $database );
	$query = 'Select * from emp';
	$result = mysqli_query($conn,$query);
	
	
	if(isset($_POST['save_changes']))
	 	{
			
			//echo "<script>alert('Update button clicked')</script>";
	// 		//echo($_POST['name']."<br/>\n");
	// 		//echo($_POST['email']."<br/>\n");
	// 		//echo($_POST['comment']."<br/>\n");
	// 		//$id = $_POST['id'];
				
			//$id = $_POST['id'];	
			$id = $_POST['id'];
	 		$EMPNO = $_POST['empno'];
	 		$ENAME = $_POST['ename'];
	 		$JOB = $_POST['job'];
	 		$MGR = $_POST['mgr'];
	 		$HIREDATE = $_POST['hiredate'];
	 		$SAL = $_POST['sal'];
	 		$COMM = $_POST['comm'];
			$DEPTNO = $_POST['deptno'];
			
	// 		//echo $name;
	// 		//echo $email;
	// 		//echo $comment;
			
	 		$sql_update = " UPDATE emp SET ename='$ENAME' ,job='$JOB' ,mgr='$MGR' ,hiredate='$HIREDATE' ,sal='$SAL',comm='$COMM',deptno ='$DEPTNO' WHERE id='$id'";
			echo $sql_update;
			$result_update = mysqli_query($conn,$sql_update);
	// 		$result = mysqli_query($conn,);
	 		if($result){
	 			echo "<script>alert('Data Update Sucessfully!')</script>";
				header("Refresh:0");
	 		}
	// 		else{
	// 			echo "<script>alert('Somthing Went Wrong!')</script>";

	// 		}
	 	}
		// sql to delete a record
		
		//	$sql = "DELETE FROM dept WHERE id";

			//if ($conn->query($sql) === TRUE) {
				//echo "Record deleted successfully";
			//} else {
				//echo "Error deleting record: " . $conn->error;
				//}

?>

	<!-- DELETE DATA -->
<?php
	if(isset($_POST['delete_button'])){
		$id = $_POST['deleteid'];
		
		//echo "<script>alert($id);</script>";
		
		$sql_delete = "DELETE FROM emp WHERE id = $id";
		$result = mysqli_query($conn,$sql_delete);
		if($result){
					echo "<script>alert('Emp Deleted');</script>";
					header("Refresh:0");
		}
	}
			
?>
		
		<!-- ADD DATA -->
<?php

	//include('employee_db.php');
	if(isset($_POST['add_data'])){

			//echo "<script>alert($id);</script>";
		
			$id = $_POST['id'];
	 		$EMPNO = $_POST['empno'];
	 		$ENAME = $_POST['ename'];
	 		$JOB = $_POST['job'];
	 		$MGR = $_POST['mgr'];
	 		$HIREDATE = $_POST['hiredate'];
	 		$SAL = $_POST['sal'];
	 		$COMM = $_POST['comm'];
			$DEPTNO = $_POST['deptno'];
			
			$sql_insert = " INSERT INTO emp (`EMPNO`, `ENAME`, `JOB`, `MGR`, `HIREDATE`, `SAL`, `COMM`, `DEPTNO`) VALUES ($EMPNO,'$ENAME','$JOB',$MGR,'$HIREDATE',$SAL,$COMM,$DEPTNO)";
			
			echo $sql_insert;
			$result_insert = mysqli_query($conn,$sql_insert);
	// 		$result = mysqli_query($conn,);
	 		if($result_insert){
	 			echo "<script>alert('Data Added Sucessfully!')</script>";
				header("Refresh:0");
		
		
		//$id = $_POST['deleteid'];
		
		//echo "<script>alert($id);</script>";
		
	
		}
	}
			
?>

	
</head>
  <body>
    <div class="container">
		<p><br></p>
		<div class="row">
		<button type="button" name="add_button" class="btn btn-success" data-toggle="modal" data-target="#addModal">Add Data</button>
		<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					  <div class="modal-dialog" role="document">
						<div class="modal-content">
						  <div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Insert Modal</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							  <span aria-hidden="true">&times;</span>
							</button>
						  </div>
				<table class="table table-straped table-bordered table-hover" id="mydata">
				<form method="post" class="form-inline">
					<div class="modal-body">
							<div class="form-group">
								
								<input type="hidden" name="id" class="form-control">
							</div>
							<div class="form-group">
								<label > EMPNO: </label>
								<input type="number" name="empno"  class="form-control" placeholder="Employee Number">
							</div>
							<div class="form-group">
								<label>ENAME:</label>
								<input type="text" name="ename"  class="form-control" placeholder="Employee Name">
							</div>
							<div class="form-group">
								<label>JOB:</label>
								<input type="text" name="job" class="form-control" placeholder="Job name">
							</div>
							<div class="form-group">
								<label>MGR:</label>
								<input type="number" name="mgr" class="form-control" placeholder="Manager Emp Number">
							</div>
							<div class="form-group">
								<label>HIREDATE:</label>
								<input type="date" name="hiredate" class="form-control" placeholder="Add Date">
							</div>
							<div>
							<label>SAL:</label>
							<input type="number" name="sal"  class="form-control" placeholder="Add Salary">
							</Div>
							<div>
							<label>COMM:</label>
							<input type="number" name="comm"  class="form-control" placeholder="Add Commission">
							</div>
							<div>
							<label>DEPTNO:</label>
							<input type="number" name="deptno"  class="form-control" placeholder="Department Number">
							</div>
						  </div>
						  <div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							<button type="submit" name="add_data" class="btn btn-primary">Add</button>
						  </div>
						</form>
						</table>

						</div>
					  </div>
					</div>
		<p><br></P>
			<table class="table table-straped table-bordered table-hover" id="mydata">
		
		<thead>
			<tr>
				<th> id </th> 
				<th> EMPNO </th>
				<th> ENAME </th>
				<th> JOB </th>
				<th> MGR </th>
				<th> HIREDATE </th>
				<th> SAL </th>
				<th> COMM </th>
				<th> DEPTNO </th>
				<th> Edit </th>
				<th> DELETE </th>
			</tr>
		</thead>
		<tbody>
				<?php
				while($row = mysqli_fetch_array($result)){
					//print_r($row);
					?>
					<tr>
						<td><?= $row['id']?></td>
						<td><?= $row['EMPNO'] ?></td>
						<td><?= $row['ENAME']?></td>
						<td><?= $row['JOB']?></td>
						<td><?= $row['MGR']?></td>
						<td><?= $row['HIREDATE']?></td>
						<td><?= $row['SAL']?></td>
						<td><?= $row['COMM']?></td>
						<td><?= $row['DEPTNO']?></td>
						<td><button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal<?= $row['id'] ?>">
									<span class="glyphicon glyphicon-pencil"></span> 
							</button>
						</td>
						<td><button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal<?= $row['id'] ?>">
							    <span class="glyphicon glyphicon-trash"></span>
							</button></td>
					</tr>
					<div class="modal fade" id="exampleModal<?= $row['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					  <div class="modal-dialog" role="document">
						<div class="modal-content">
						  <div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Edit Modal</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							  <span aria-hidden="true">&times;</span>
							</button>
						  </div>
				<form method="post" class="form-inline">
					<div class="modal-body">
							<div class="form-group">
								
								<input type="hidden" name="id" value=<?= $row['id'] ?> class="form-control">
							</div>
							<div class="form-group">
								<label > EMPNO </label>
								<input type="number" name="empno" value=<?= $row['EMPNO'] ?> class="form-control" placeholder="Employee Number">
							</div>
							<div class="form-group">
								<label>ENAME</label>
								<input type="text" name="ename" value=<?= $row['ENAME'] ?> class="form-control" placeholder="Employee Name">
							</div>
							<div class="form-group">
								<label>JOB</label>
								<input type="text" name="job" value=<?= $row['JOB']?> class="form-control" placeholder="Job name">
							</div>
							<div class="form-group">
								<label>MGR</label>
								<input type="number" name="mgr" value=<?= $row['MGR']?> class="form-control" placeholder="Manager Emp Number">
							</div>
							<div class="form-group">
								<label>HIREDATE</label>
								<input type="date" name="hiredate" value=<?= $row['HIREDATE']?> class="form-control" placeholder="Add Date">
							</div>
							<div>
							<label>SAL</label>
							<input type="number" name="sal" value=<?= $row['SAL']?> class="form-control" placeholder="Add Salary">
							</Div>
							<div>
							<label>COMM</label>
							<input type="number" name="comm" value=<?= $row['COMM']?> class="form-control" placeholder="Add Commission">
							</div>
							<div>
							<label>DEPTNO</label>
							<input type="number" name="deptno" value=<?= $row['DEPTNO']?> class="form-control" placeholder="Department Number">
							</div>
						  </div>
						  <div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							<button type="submit" name="save_changes" class="btn btn-primary">Save changes</button>
						  </div>
						</form>

						</div>
					  </div>
					</div>
					
					<div class="modal fade" id="deleteModal<?= $row['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					  <div class="modal-dialog" role="document">
						<div class="modal-content">
						  <div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Delete Modal</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							  <span aria-hidden="true">&times;</span>
							</button>
						  </div>
						  <form method="POST">
						  <div class="modal-body">
						  <input type="hidden" value="<?= $row['id'] ?>" name="deleteid">
							<div class="alert alert-danger" role="alert">
							  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
							  <span class="sr-only">Delete</span>Do You really want to delete the row  
							  </div>
						  </div>
						  <div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							<button type="submit" name="delete_button" class="btn btn-primary">Delete</button>
						  </div>
						</form>

						</div>
					  </div>
					</div>
					<?php
				}
				?>
				    
		</tbody>
		</table>
		</div>
	</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	
  </body>
</html>
<script>
	//$(document).ready(function(){
		//$('#mydata').Tabeldit({
			//url:'action.php',
			//colums:{
				//identifier:[0,"id"],
				//editable:[[1,'EMPNO'],[2,'ENAME'],[3,'JOB'],[4,'MGR'],[5,'HIREDATE'],[6,'SAL'],[7,'COMM'],[8,DEPTNO]]
			//},
			//restoreButton:false,
			//onSuccess function(data,textStatus,jqXHR)
			//{
				//if(data.action== 'delete')
				//{
					//$('#'+data.id).remove();
				//}
			//}
		//});
	//});
</script>