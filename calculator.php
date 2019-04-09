
<?php

if(isset($_POST['sub']))
{
	$NO1=$_POST['n1'];
	$NO2=$_POST['n2'];
	$oprnd=$_POST['sub'];
	
	if($oprnd=="+")
	$res=$NO1+$NO2;
	else if($oprnd=="-")
		$res=$NO1-$NO2;
		else if($oprnd=="x")
		$res=$NO1*$NO2;
		else if($oprnd=="/")
			$res=$NO1/$NO2;
}
?>



<form method="post" action="">
Calculator
<br>
No1:<input name="n1" value="<?php echo $NO1; ?>">
<br>
No2:<input name="n2" value="<?php echo $NO2; ?>">
<br>
Res:<input name="res" value="<?php echo $res; ?>">
<br>
<input type="submit" name="sub" value="+">
<input type="submit" name="sub" value="-">
<input type="submit" name="sub" value="x">
<input type="submit" name="sub" value="/">
</form>
