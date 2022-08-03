function Paytm()
{
	document.getElementById('p2').style.display = 'none';
	document.getElementById('p1').style.display = 'block';
}
function Debit()
{
	document.getElementById('p1').style.display = 'none';
	document.getElementById('p2').style.display = 'block';
}
function validateMN()
{
	if(document.getElementById('mn').value.length != 10)
	{	
		alert("Enter valid mobile number");
		return false;
	}
}
function validateCN()
{
	if(document.getElementById('cn').value.length != 16)
	{	
		alert("Enter valid card number");
		return false;
	}
	if(document.getElementById('noc').value.length <= 3)
	{	
		alert("Enter valid name");
		return false;
	}
	if(document.getElementById('cvv').value.length != 3)
	{	
		alert("Enter valid cvv");
		return false;
	}
	
}