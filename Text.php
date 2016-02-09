<html>
  <head><title>แบบฟอร์มการสมัครสมาชิก</title>
    <meta charset="utf-8">
  </head>
  <body>
    <form action="Result.php" method="post">
      <table border="1" align="center" width="500">
        <tr>
          <td colspan="2" align="center">
            <big>กรุณากรอกข้อมูลประวัติส่วนตัวให้ครบถ้วน</big>
          </td>
        </tr>
        <tr>
          <td>รหัสนักศึกษา : </td>
          <td><input type="text" name="ID" maxlength="13" size="15" value=""></td>
		</tr>
		<tr>
          <td>ชื่อ : </td>
          <td><input type="text" name="name" size="15" value=""></td>
		</tr>
		<tr>
          <td>นามสกุล : </td>
          <td><input type="text" name="surname" size="15" value=""></td>
		</tr>
		<tr>
          <td>ชื่อเล่น : </td>
          <td><input type="text" name="nickname" size="15" value=""></td>
		</tr>
		<tr>
          <td>เพศ : </td>
          <td><input type="radio" name="sex" size="15" value="ชาย"> ชาย
              <input type="radio" name="sex" size="15" value="หญิง"> หญิง
          </td>
		</tr>
    <tr>
          <td>อายุ : </td>
			<td><input type="text" name="age" size="15" value=""></td>
		</tr>
		<tr>
          <td>วัน/เดือน/ปีเกิด : </td>
          <td><input type="date" name="birth" size="15" value=""></td>
		</tr>
		<tr>
          <td>E-mail : </td>
          <td><input type="Email" name="mail" size="15" value=""></td>
		</tr>
		<tr>
          <td>เบอร์โทรศัพท์ : </td>
          <td><input type="text" name="tel" maxlength="10" size="15" value=""></td>
		</tr>
		<tr>
          <td>สาขา : </td>
          <td>
		  <select>
				<name="branch" value="IT"><option> IT
				<name="branch" value="ITI"><option> ITI
				<name="branch" value="IM"><option> IM
				<name="branch" value="IMT"><option> IMT
				<name="branch" value="TA"><option> TA
				<name="branch" value="TAM"><option> TAM
				<name="branch" value="TH"><option> TH
				<name="branch" value="CA"><option> CA
			</td>
        </tr>
		<tr>
			<td colspan="2" align="center">
				<input type="submit" value="OK"/>
				<input type="reset" value="Clear"/>
			</td>
		</tr>
      </table>
    </form>
  </body>
</html>
