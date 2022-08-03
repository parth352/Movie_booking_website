num = prompt("Enter number of seats to be booked");
var lim = num;
if(lim >= 10)
	{
		alert("Maximum 10 tickects allowed");
		lim = prompt("Enter number of seats to be booked");
	}	
function getValue()
{
	var url = window.location.href;
	//alert(url);
	var qparts = url.split("?");
	//alert(qparts);
	if(qparts.length == 0)
		return "";
	
	var query = qparts[1];
	//alert(query);
	var vars = query.split("&");
	//alert(vars);
	var value = "";
	var f = "";
	for(i=0;i<vars.length;i++)
	{
		var parts = vars[i].split("=");
		//alert(parts);
		value = parts[1];
		f = parts[2];
	
		if(f != undefined)
		{
			f = parts[2];
			document.write('<pre class="dw">' + value + "  " + f + "		" + '</pre>');
		}
		//alert(value);
		else
			document.write('<pre class="dw">' + "     " +value + "		 " + '</pre>');

	}
	document.write("<br/>");
	

	
}
var p,count = 0;
var amt = 0;
function Select(x,pr)
{
	p = pr;
	console.log(document.b.s[x].getAttribute("value"));
	if(document.b.s[x].style.backgroundColor == "white")
	{
		if(count >= lim)
		{alert("limit reached");
		}
		else
		{
		while(count < lim)
		{
		document.b.s[x].style.backgroundColor = "#4df777";
		count++;
		x++;
		amt = amt + p;
		}
		}
		getElementById('hi').value = amt;
	}
	else
	{
		document.b.s[x].style.backgroundColor = "white";
		count--;
		amt = amt - p;
	}
	
}
function get(name){
	if(name=(new RegExp('[?&]'+encodeURIComponent(name)+'=([^&]*)')).exec(location.search))
	   return decodeURIComponent(name[1]);	
 }
function display()
{
	var str=""
	for(var i =0;i<80;i++){
	if(document.b.s[i].style.backgroundColor != "white"){
		str+=","+document.b.s[i].getAttribute("value");
	}
	}
	str = str.substring(1);
	s2 = window.location.search;
	s2 = "&"+s2.substring(1);
	str+=s2;
	console.log(str);
	document.getElementById("conn").value = str;
	
	if(count == lim)
	{	
		alert("Payable amount is Rs. " + (amt));
	}
	else
		alert("Select seats");
}