<html>
<head><meta charset="utf-8">
<title>Result</title>
</head>
<center>
<body>
<?php
		$ID = $_POST['ID'];
		$age = $_POST['age'];
		$name = $_POST['name'];
		$surname = $_POST['surname'];
		$nickname = $_POST['nickname'];
		$sex = $_POST['sex'];
		$birth = $_POST['birth'];
		$mail = $_POST['mail'];
		$tel = $_POST['tel'];
		$branch = $_POST['branch'];

		if($age >= "15" && $age <= "100"){
		echo "<p>";
		echo "<b> ข้อมูลที่ผู้ใช้ใส่มา </b><br/>";
		echo "ชื่อ-นามสกุล : <i> $name </i><i> $surname </i><i> ($nickname) </i><br/>";
		echo "เพศ : <i> sex </i><br/>";
		echo "อายุ : <i> $age </i><br/>";
		echo "วัน/เดือน/ปีเกิด : <i> $birth </i><br/>";
		echo "E-mail : <i> $mail </i><br/>";
		echo "เบอร์โทรศัพท์ : <i> $tel </i><br/>";
		echo "สาขา : <i> $branch </i><br/>";
		}

		else{echo "อายุที่กรอกไม่ได้อยู่ในช่วงที่เหมาะสม กรุณากรอกข้อมูลใหม่";}
?>
	</body>
</center>
</html>
