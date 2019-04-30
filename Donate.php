<html>
<head>
<title>Sponsorship Donation Form</title>
<style type="text/css">
h3{
	font-family: Calibri;
	font-size: 22pt;
	font-style: normal;
	font-weight: bold;
	color:#FFF;
	text-align: center;
	text-decoration: underline
}
table{font-family: Calibri; color:Black; font-size: 11pt; font-style: normal;
text-align:; background-color: WHITE; border-collapse: collapse; border: 0px solid navy}
table.inner{border: 0px}
body {
	background-color: #CCC; 
  
}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body >    
            <div class="content" align="center">
<font color="#000000"><h2>Donation Form:</h2>
	<h2>Fill in the Slots to Donate to the student of choice. </h2>		
<form method="post" action="Kupewa.php" enctype="multipart/form-data" onSubmit="return validation()" name="lodgeform">					
<table width="700" height="500"bgcolor="#FFFFFF"table">

<!----First Name--------------------------------------------------------------->
 <tr>
 <td>FIRST NAME</td>
 <td><input type="text" name="first" maxlength="35" required/></td>
 </tr>

<!----Last Name--------------------------------------------------------------->
 <tr>
 <td>LAST NAME</td>
 <td><input type="text" name="Last" maxlength="35" required/></td>
 </tr>

<!----Email ID--------------------------------------------------------------->
 <tr>
 <td>EMAIL ID</td>
 <td><input type="Email" name="login" maxlength="35" required/></td>
 </tr>

<!----Phone Number--------------------------------------------------------------->
 <tr>
 <td>PHONE NUMBER</td>
 <td><input type="int" name="Phone" maxlength="10" required/></td>
 </tr>

 <!----Amount--------------------------------------------------------------->
 <tr>
 <td>AMOUNT</td>
 <td><input type="int" name="Amount" maxlength="35" required/></td>

 </tr>
 
    <tr>
<td>STUDENT'S FIRST NAME</td>
<td><input type="text" name="student_Fname" maxlength="35"required/>
(max 30 characters a-z and A-Z)
</td>
</tr>
 
<!----- Last Name ---------------------------------------------------------->
<tr>
<td>STUDENT'S LAST NAME</td>
<td><input type="text" name="student_Lname" maxlength="35"required/>
(max 30 characters a-z and A-Z)
</td>
</tr>

<!----School Name--------------------------------------------------------------->
 <tr>
 <td>SCHOOL NAME</td>
 <td><input type="text" name="school" maxlength="35" required/></td>
 </tr>

<!----School Level--------------------------------------------------------------->
 <td>SCHOOL LEVEL</td>
 <td><input type="text" name="level" maxlength="35" required/></td>
 </tr>

 <!----Bank Name--------------------------------------------------------------->
<td>BANK NAME</td>
<td>
<select name="bank"> 
  <option>KENYA COMMERCIAL BANK</option>
  <option>NATIONAL BANK OF KENYA</option>
</select>
 </td></tr>
 
 <!----Confirmation Code--------------------------------------------------------------->
 <tr>
 <td>ENTER BANK RECEIPT NUMBER<br>OR THE MOBILE TRANSACTION CODE</br></td>
 <td><input type="text" name="code" maxlength="35" required/></td>
 </tr>
 
<!----- Submit ------------------------------------------------->
<tr class="color">
<th colspan=2><input type=submit name="register" value="submit" class="fsSubmitButton">
<input type="reset" name="button2" id="button2" value="Reset" />
</th>
</tr>
</form>
<a href="index.php"><input type="button" value="Home"></a>
<table width="700" height="500">
<tr>
	<td>
    <center><font color=Graygreen size=5><b><i><u>MODES OF PAYMENT(DONATING)</u></i></b></center>
	<ul type=square>
	<font color="GrayGeen" size=4><U>NOTE</U>:</font>
	<ul type=disc><font color="darkpink">
	After the<B><U>TRANSACTION</U></B> has been made, whether via phone or bank deposits, you are expected to enter the transaction CODE or the bank's receipt number for easier record keeping for all the transactions on the slot just before the SUBMIT button</b>
	<br><font color="#0000CC" size=4><U>MOBILE MONEY TRANSFER:</U></font></br>
	<ul type=disc><font color="#FF0000">
	<img src="IMAGES/Pesa.png" width="90" height="80" /><br>MPESA PAY BILL No. 45637 ACCOUNT: Sponsormeru</br>
	<img src="IMAGES/Airtel.PNG" width="90" height="80"/><br>AIRTEL BUSINESS No.2345 ACOUNT: Sponsor</br>	
	<font color="#0000CC" size=4><U>BANK DEPOSITS:</U></font>
	<ul type=disc><font color=darkpink>
	KENYA COMMERCIAL BANK ACCOUNT No. 1234567 Meru Branch
	<br>NATIONAL BANK ACCOUNT No. 1234567 Meru Branch</br>
	</ul>
	</ul>
</table>
</body>
</html>