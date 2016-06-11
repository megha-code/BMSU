<!DOCTYPE html>

<html>
	<head>
		<title>RTI Application Form</title>
	</head>
		
	<body>
		<form action="submit.php" method="post">

		<!-- Personal details of applicant--> <table width="100%" border="0" class="heading" cellpadding="0 0 0 15">
			<tbody>
				<tr><th colspan="2">Personal Details of RTI Applicant:-</th></tr>
			</tbody>
		</table>
		
			<table width="100%" border="2"  cellpadding="0" cellspacing="2">
			<tbody>
				<tr>
                    <th class="THfirst">Name of Applicant</th>
                    <td class="TDfirst">
						<input type="text" name="name">
                    </td>
                </tr>
			
				<tr>
                    <th>Gender </th>
                    <td>
						<input type="radio" name="gender" id="gender" class="radio" checked="checked" value="Male"> Male                            
						<input type="radio" name="gender" id="gender" class="radio" value="Female"> Female                           
						<input type="radio" name="gender" id="gender" class="radio" value="Third Gender"> Third Gender
                    </td>
				</tr>
		
			<tr>
				<th> Address</th>
				<td>
                    <input type="text" name="address" id="address1" class="address">
                </td>
			</tr>
		
			<tr>
				<th>Pin code</th>
				<td>
					<input type="text" name="pc" minlength="6" maxlength="6" onkeydown="return isNumeric(event.keyCode);" value="">
				</td>
			</tr>
		
<script>
function test()
{
	if(document.getElementById('chkstate').value=='India')
		document.getElementById('cngStateName').innerHTML='State';
}
function test1()
{
	if(document.getElementById('chkcountry').value=='Other')
		document.getElementById('cngStateName').innerHTML='Country Name';
}		
</script>
			<tr>
				<th>Country</th>
				<td>
					<input type="radio" name="country" id="chkstate" checked="checked" value="India" onclick="test();"> India                  
					<input type="radio" name="country" id="chkcountry" value="Other" onclick="test1();"> Other                			
				</td>
			</tr>
		
			<tr>
				<th><span id="cngStateName">State</span>				
				<td>
				<span><input type="text" name="state"  id="txtCountry" ></span>
				</td>
			</tr>			
		<tr>
			<th>Phone Number</th>
			<td>
			<input type="text" name="phone" id="phone" maxlength="18" onkeydown="return isNumeric(event.keyCode);" class="numeric" value="">
			<cite>Provide STD code with zero eg.01123456789</cite>
			</td>
		</tr>

		<tr>
			<th>Mobile Number<cite>(For receiving SMS alerts)</cite></th>
              <td><input type="text" name="mobile" id="cell" maxlength="15" class="numeric" onkeydown="return isNumeric(event.keyCode);" value="">
				<cite>Provide Country code eg. +910123456789</cite>
			  </td>
		</tr>
	
		<tr>
			<th>Email-ID</th>
			<td>
			<input type="text" name="email" maxlength="70" value="" id="Email" class="watermark">
			</td>
		</tr>
        
       <!-- <tr>
			<th>Confirm Email-ID</th>
			<td>
			<input type="text" name="ConfirmEmail" id="ConfirmEmail" maxlength="70" value="">
			</td>
		</tr> -->
		
		<tr>
			<th class="THfirst">Citizenship<cite><br>(Only Indian citizens can file RTI Request application)</cite>
			
			</th>
			<td class="TDfirst">
			<select name="citizenship" id="Citizenship" class="selectLong" onchange="chkCitizenship(this);">
				<option value="Indian">Indian</option>
				<option value="Other">Other</option>
			</select></td>
		</tr>
			
		</tbody></table>
	<!--Receipt of RTI Application:- -->	<table width="100%" border="0" class="heading" cellpadding="0 0 0 15">
			<tbody>
				<tr><th colspan="2">(I)Receipt of RTI Application:-</th></tr>
				<tr><th colspan="2">(Section 7)</th></tr>
			</tbody>
		</table>

			<table width="100%" border="2" class="tbl-border" cellpadding="0" cellspacing="2">
	<tbody>
	
	<tr>
	<th>Date of receipt of RTI application by R & I section of public authority</th>
	<th><input type="text" name="date_of_receipt" id="Name" maxlength="50" value="" class="name" placeholder="YYYY-MM-DD"></th>
	</tr>
	
	<tr>
	<th>Date of its receipt by CPIO</th><th><input type="text" name="date_of_receipt_cio" id="Name" maxlength="50" value="" class="name" placeholder="YYYY-MM-DD"></th>
	</tr>
	</tbody> </table>
	
<table width="100%" border="0" class="heading" cellpadding="0 0 0 15">
<!DOCTYPE html>
<head>
	<title></title>
</head>
		<body>
		<form action="submit.php" method="post">
		<table width="100%" border="0" class="heading" cellpadding="0 0 0 15">
		<tbody>
				<tr><th colspan="2">(II) Fee Payment Details:-</th></tr>
				<tr><th colspan="2">(Rule-3 of RTI regulation of fee and cost rules)</th></tr>
			</tbody>
		</table>
			<table width="100%" border="2" class="tbl-border" cellpadding="0" cellspacing="2">
	
	<tr>
		<th>Whether fee is enclosed with RTI application</th>
			<td>    
				<input type="radio" value="yes" checked="checked" name="fee"> Yes                         
				<input type="radio" value="no" name="fee"> No 
			</td>
	</tr>

	<tr>
		<th>Date of depositing fee</th>
		<th><input type="text" name="fee_deposit_date" maxlength="50" placeholder="YYYY-MM-DD"></th>
	</tr>
	<tr>
		<th>Mode of payment(cheque/DD,cash,IPO)</th>
		<th><input type="text" name="pay_mode" maxlength="50"></th>
	</tr>
	</table>
	<table>
	<tbody>
		<tr>
			<th colspan="15"></th><th><input type="submit" name="add" value="Add Queries" class="btnaddQuestions"></th>
			<th colspan="15"></th><th><input type="submit" name="submit" value="Save and Exit" class="btnaddQuestions"></th>
		</tr>
	</tbody>
 </table>
	
</body>
</form>
</html>		

<?php
include 'logoff.html';
?>	
