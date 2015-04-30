<!DOCTYPE html>
<html>
<form method="post" action="polz.php">
<input type="text" name="user"/>
<input type="password" name="password"/>
<select name="gender" value="gender">
<option value="g1">man</option>
<option value="g2">woman</option>
</select>
<input type="submit" name="reg" value="register"/>
</form>
</html>
<?php
if(isset($_POST[reg]))
	{//if(!empty(l trim($_POST[user]))&&(!empty(l trim($_POST[password]))&&(!empty(l trim($_POST[gender])))
		{$csvFile='myCSVfile.csv';
		$_POST[role]="user";
		$csvData="{$_POST[user]};{md5$_POST[password]};{$_POST[gender]};{$_POST[user]}\r";
		file_put_contents($csvFile,$csvData, FILE_APPEND);
		}
	//else echo"не все данные введены";
	}
?>