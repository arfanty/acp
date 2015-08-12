<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php 
function ReplaceComma($string)
{
	return str_replace(',',' ',$string);
}
$con = mysql_connect("localhost","acpconf1_0","GUANG2013yan&&&");
mysql_select_db("acpconf1_invitationLetter",$con);
$result = mysql_query("select * from InvitationLetter_table",$con);
if(!$result)
{
	echo"<script>
	alert('Failed to connect to server. Pleas submit again later.');
	</script>";
	die('Could not connect: ' . mysql_error());
}
else
{
	echo '<table>
		<tr>
		  	<th>名</th>
		  	<th>姓</th>
		  	<th>姓名</th>
		  	<th>称呼</th>
		  	<th>工作单位</th>
		  	<th>地址</th>
			<th>地址C</th>
		  	<th>城市</th>
		  	<th>州</th>
		  	<th>邮编</th>
		  	<th>国家</th>			
		  	<th>电邮</th>
		  	<th>电话</th>
		  	<th>分机</th>
		  	<th>传真</th>
		  	<th>生日</th>
		  	<th>性别</th>
		  	<th>是否提交</th>
			<th>文章名字</th>
		  	<th>文章代号</th>			
		  	<th>参加展览</th>
		  	<th>护照号</th>
		  	<th>国家护照号</th>
		  	<th>逗留时间</th>
			

		</tr>';
	while($row = mysql_fetch_array($result))
	{
		echo '<tr>';
		echo '
			<td>'.$row['FirstName'].'</td>
		  	<td>'.$row['FamilyName'].'</td>
		  	<td>'.$row['Name'].'</td>
		  	<td>'.$row['Title'].'</td>
		  	<td>'.$row['Company'].'</td>
		  	<td>'.$row['Address'].'</td>
		  	<td>'.$row['AddressC'].'</td>	
		  	<td>'.$row['City'].'</td>
		  	<td>'.$row['State'].'</td>
		  	<td>'.$row['ZIP'].'</td>
		  	<td>'.$row['Country'].'</td>
		  	<td>'.$row['Email'].'</td>	
		  	<td>'.$row['Telephone'].'</td>	
		  	<td>'.$row['Ext'].'</td>
		  	<td>'.$row['Fax'].'</td>
		  	<td>'.$row['Birthdate'].'</td>
		  	<td>'.$row['Gender'].'</td>
		  	<td>'.$row['IsSubmission'].'</td>
		  	<td>'.$row['PaperTitle'].'</td>
		  	<td>'.$row['PaperCode'].'</td>			
		  	<td>'.$row['IsExhibition'].'</td>
		  	<td>'.$row['Passport'].'</td>
		  	<td>'.$row['CountryPassport'].'</td>
		  	<td>'.$row['StayTime'].'</td>';
		echo '</tr>';
	}
	echo '</table>';
}
?>
</body>