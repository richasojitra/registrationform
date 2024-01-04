<html>
<body><head>
<style>
input,select{border:2px solid #D30000;}

.bor
{border-color:brown;
border-style:solid;
}

</style>
</head>
<center>
<table cellspacing="5" cellpadding="10" align="center" bgcolor="f3e5dc" height="30" width="350px">
<form action="php1.php" method="get">

<tr><td><h2 align="center">Registration Form</h2>
username:<input type="text" name="uname"/><br><br>

Password:<input type="password" name="password"/><br><br>

Name:<input type="text" name="name"/><br><br>

Address:<input type="text" name="address"/><br><br>

Country:<select name="drop-down">
<option value="(place Select a country)">(place Select a country)</option>
<option value="Ceneda">Ceneda</option>
<option value="USA">USA</option>
<option value="India">India</option>
<option value="poland">Poland</option></select><br><br>

Zip Code:<input type="text" name="ZIP_code"><br><br>

Email:<input type="email" name="email"/><br><br>

Sex:<input type="radio" name="gender" id="Male"/><label class="bor">Male</label>
<input type="radio" name="gender" id="Female"/><label class="bor">Female</label><br><br>


Language:<input type="checkbox" name="language" id="English"/><label class="bor">English</label>
<input type="checkbox" name="language" id="Non English"/><label class="bor">Non English</label><br><br>

About:<textarea cols="20" rows="5" name="about"></textarea><br><br>
<input type="submit" align="center"/></tr></td>

</form>
</table>
</center></body>
</html>

<?php

?>