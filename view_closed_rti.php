<?php
session_start();
$uname=$_SESSION['name'];	
?>
<html>
	<head>
		<title>Completed RTI</title>
		<link rel="stylesheet" href="css/prev_rti.css">
		<link rel="stylesheet" href="css/background.css">
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<script src="bootstrap/jQuery/jquery.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
		<meta charset="utf-8">
	</head>
<body>
<div class='container'>

<?php
	include 'config_database.php'; 
	
    $query=" SELECT * FROM add_rti order by date_of_receipt_cio where archive=1";
    $res=mysqli_query($conn,$query);
    
	echo "<br><h2>CLOSED RTIs</h2><br>" ;
  
	if($uname=='ut'||$uname=='pc')
	{
		echo "<table class='table table-bordered'><tr>
			<th>ID</th>
			<th>Applicant Name</th>
			<th>Phone Number</th>
			<th>View Details</th></tr>";
			
		while($r=mysqli_fetch_assoc($res)){

			$query1= "SELECT COUNT(*) AS total FROM info_about_reply where id=".$r['id'].";";
			$res1 = mysqli_query($conn, $query1);
			$values = mysqli_fetch_assoc($res1);
			$num_rows = $values['total'];
			if($num_rows>0)
			{
				$query1="SELECT * FROM info_about_reply where id=".$r['id'].";";
	    		$res1=mysqli_query($conn,$query1);
	    		$s=mysqli_fetch_assoc($res1);
   		
				$d1=strtotime("$s[reply_date]");
				$mth=0;
				$day=30;
				$yr=0;
				$d2=date('Y-m-d h:i:s',mktime(date('h',$d1),date('i',$d1),date('s',$d1),date('m',$d1)+$mth,date('d',$d1)+$day,date('Y',$d1)+$yr));
				$a=strtotime($d2);
				$b=strtotime(date('Y-m-d h:i:s'));
				$d3=floor(($a-$b)/86400);
				echo abs($d3);
				if(abs($dr3)<=30){			
					echo "<tr>
						<td>".$r['id']."</td> 
						<td>".$r['name']."</td> 
						<td>".$r['phone_no']."</td> 		
						<td><a href='compid.php?id=".$r['id']."'>View</a></td> </tr>";
				}
			}
		}	
		echo "</table>";
	}
	else if($uname!='ut'||$uname!='pc'){
	$i=0;
	$m='';
	if($uname=='admin')
		$m='Ad';
	if($uname=='examination')
		$m='Ex';
	if($uname=='Human Resource')
		$m='HR';
	if($uname=='Academics')
		$m='Ac';
	$query=" SELECT * FROM t2 WHERE map='".$m."' order by id;";
    $data=mysqli_query($con,$query);
	$data2=mysqli_num_rows($data);
	echo "<table>" ;
	echo "<tr>
			<th>ID</th>
			<th>Applicant Name</th>
			<th>Date of Receipt</th>
			<th>Last date</th>
			<th>Days left</th>
			<th>Mark as completed</th></tr>";  
   while($data2!=0)
   {	$data3=mysqli_fetch_array($data);
	    $i=$data3['id'];
   $quer="SELECT * FROM add_rti WHERE id=".$i." order by date_of_receipt_cio;";
			$res=mysqli_query($con,$quer);
			$v=mysqli_num_rows($res);
			
	while($v!=0)
	{
		$r=mysqli_fetch_array($res);
		if($r['archive']==1)
		{			
			$d1=strtotime("$r[date_of_receipt_cio]");
			$mth=0;
			$day=30;
			$yr=0;
			$d2=date('Y-m-d h:i:s',mktime(date('h',$d1),date('i',$d1),date('s',$d1),date('m',$d1)+$mth,date('d',$d1)+$day,date('Y',$d1)+$yr));
			$a=strtotime($d2);
			$b=strtotime(date('Y-m-d h:i:s'));
			$d3=floor(($a-$b)/86400);
		echo"<table width=100% border=2>";	
			echo "<tr>";
				echo "<th><a href='previd.php?id=".$r['id']."'>".$r['id']." </a></th>";
				echo "<th><a href='previd.php?id=".$r['id']."'>".$r['name']."</a></th>"; 
				echo "<th><a href='previd.php?id=".$r['id']."'>".$r['date_of_receipt_cio']."</a></th>"; 		
				echo "<th><a href='previd.php?id=".$r['id']."'>".date("Y-m-d",strtotime($d2))."</a></th>"; 
				echo "<th><a href='previd.php?id=".$r['id']."'>".$d3."</a></th>";
				echo "<th><a href='old_rti.php?id=".$r['id']."'>Mark as Completed</a></th>";
			echo "</tr>";
		echo"<table>";	
		}
		$v--;
		echo "</table>";
	}
		echo "</table>";
		$data2--;
}
}
?>
	<br><a href="select_option.php" class=btn >Back</a>
</div>
</body>
</html>