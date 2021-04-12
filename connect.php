<?php
$name=$_POST['name'];
$email=$_POST['email'];
$address=$_POST['address'];
$contact=$_POST['contact'];
$question=$_POST['question'];

$conn=new mysqli('localhost','root','','test1');
if($conn->connect_error){
die('Connection Failed : '.$conn->connect_error);
}
else{
$stmt=$conn->prepare("insert into registration(name,email,address,contact,question)values(?,?,?,?,?)");
$stmt->bind_param("sssis",$name,$email,$address,$contact,$question);
$stmt->execute();
echo "Data stored Successfully";

}
?>

<html>
<head>
<title>Employee Invoice</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap-5.0.0-beta3-dist/css/bootstrap.css"/>
<style>
table {
border-collapse:collapse;
width:100%;
color:#33CCFF;
font-family:"Times New Roman", Times, serif;
font-size:12px;
text-align:left;
}
th {
background-color:#0099FF;
color:#FFFFFF;
}
tr : nth-child(even)
{background-color:f2f2f2;}
</style>
</head>
<body>
<div align="right" >
<img src="logo3.png" height="40px" width="70px"/>
</div>
<br /><br />
<div>
<table>
<tr>
<th>Id</th>
<th>Name</th>
<th>Email</th>
<th>Address</th>
<th>Contact</th>
<th>Question</th>
</tr>
<?php
$sql1="SELECT * FROM registration";
$res=$conn->query($sql1);
if($res->num_rows>0){
while($row=$res->fetch_assoc()){
echo "<tr><td>".$row["id"]."</td><td>".$row["name"]."</td><td>".$row["email"]."</td><td>".$row["address"]."</td><td>".$row["contact"]."</td><td>".$row["question"]."</td><tr>";
}
echo"</table>";
}
else{
echo "0 result";
}
$stmt->close();
$conn->close();
?>
</table>
</div>
<div>
<div>
<form action="fetch.php" method="post">
<button><input type="submit"  class="btn btn-primary" name="Print" value="Print" /></button>
</form>
</div>
</div>
</body>
</html>
