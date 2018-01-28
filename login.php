<?php

$error=''; 

include "connection.php";
if(isset($_POST['submit']))
{				
	$username	= $_POST['username'];
	$password	= $_POST['password'];
	$level		= $_POST['level'];
					
	$query = mysqli_query($connection, "SELECT * FROM user WHERE username='$username' AND password='$password'");
	if(mysqli_num_rows($query) == 0)
	{
		$error = "Username or Password is invalid";
	}
	else
	{
		$row = mysqli_fetch_assoc($query);
		$_SESSION['username']=$row['username'];
		$_SESSION['level'] = $row['level'];
		
		if($row['level'] == "Administrator" && $level=="1")
		{
			
			header("Location: asset/simdesa/index.php");
		}
		else if($row['level'] =="Desa_Ciandur" && $level=="2")
		{
			header("Location: asset/Ciandur/kecamatan.php");
		}
		else if($row['level'] == "Desa_Girijaya" && $level=="3")
		{
			
			header("Location: asset/girijaya/kecamatan.php");
		}
		else if($row['level'] == "Desa_Kadudampit" && $level=="4")
		{
			
			header("Location: asset/kadudampit/kecamatan.php");
		}
		else if($row['level'] == "Desa_Langensari" && $level=="5")
		{
			
			header("Location: asset/langensari/kecamatan.php");
		}
		else if($row['level'] == "Desa_Majau" && $level=="6")
		{
			
			header("Location: asset/majau/kecamatan.php");
		}
		else if($row['level'] == "Desa_Medalsari" && $level=="7")
		{
			
			header("Location: asset/medalsari/kecamatan.php");
		}
		else if($row['level'] == "Desa_Mekarwangi" && $level=="8")
		{
			
			header("Location: asset/mekarwangi/kecamatan.php");
		}
		else if($row['level'] == "Desa_Parigi" && $level=="9")
		{
			
			header("Location: asset/parigi/kecamatan.php");
		}
		else if($row['level'] == "Desa_Saketi" && $level=="10")
		{
			
			header("Location: asset/saketi/kecamatan.php");
		}
		else if($row['level'] == "Desa_Sindanghayu" && $level=="11")
		{
			
			header("Location: asset/sindanghayu/kecamatan.php");
		}
		else if($row['level'] == "Desa_Sodong" && $level=="12")
		{
			
			header("Location: asset/sodong/kecamatan.php");
		}
		else if($row['level'] == "Desa_Sukalangu" && $level=="13")
		{
			
			header("Location: asset/sukalangu/kecamatan.php");
		}
		else if($row['level'] == "Desa_Talagasari" && $level=="14")
		{
			
			header("Location: asset/talagasari/kecamatan.php");
		}
		else if($row['level'] == "Desa_Wanagiri" && $level=="15")
		{
			
			header("Location: asset/wanagiri/kecamatan.php");
		}
		else
		{
			$error = "Failed Login";
		}
	}
}

			
?>