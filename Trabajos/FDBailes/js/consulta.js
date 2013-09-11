function getData()
{
	xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange=function()
	{
		if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
			if (xmlhttp.responseText == false){
				document.getElementById("form_dni").className="form-group has-error";
				document.getElementById("tableData").innerHTML=" ";
			}
			else
			{
				document.getElementById("form_dni").className="form-group has-success";
				document.getElementById("tableData").innerHTML=xmlhttp.responseText;
			}
		}
	}
	dni = document.getElementById("dni").value;
	xmlhttp.open("GET","index.php?dni=" + dni,true);
	xmlhttp.send();
}
