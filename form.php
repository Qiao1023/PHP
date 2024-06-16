<html>
<head>
<meta charset=utf8>  
<title>資管晚會表單</title>
張紳喬<br/>
homwork_3/21<br/>
ID:A1113367<br/>
<br/>
<br/>
</head>
<form action="formresult.php" method="post">
帳號：<input type="text" name="sName" value="" placeholder="Please input your name">
<br/>
<br/>
密碼：<input type="password" name="sPWD" required> <br/>
<br/>
地點：
<input type="checkbox" name="sCity" value="Taipei">台北
<input type="checkbox" name="sCity" value="Tainan" checked>高雄
<input type="checkbox" name="sCity" value="Taichung">台中
<br/>
性別：
<input type="radio" name="sGender" value="male">男
<input type="radio" name="sGender" value="female" checked>女
<input type="radio" name="sGender" value="else">其他
<br/>
Tshirt 顏色：
<input type="color" name="sColor" value="">
<br/>
生日：
<input type="date" name="sDate" value="">
<input type="time" name="sTime" value="">
<br/>
Email:
<input type="email" name="sEmail" value="">
<br/>
File:
<input type="file" name="sFile" value="">
<br/>
ID:
<input type="number" name="sID" value="1113300" selected>
<br/>
Expectation:
<input type="range" name="sETA" value="">
<br/>
Tshirt Size:
<select name="sSize[]" multiple>
<option value="s" selected>S
<option value="m">M
<option value="l">L
<option value="xl">XL
</select>
<br/>
<br/>
Comment:
<textarea name="sCommet" value="" rows="10" cols="">

</textarea>
<br/>
<br/>
<input type="hidden" name="sSecret" value="thank you">
<input type="submit" value="login">
<input type="reset" value="reset">
</form>

</html>