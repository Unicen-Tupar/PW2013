function getdatos()
{
	xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange=function()
	  {
	  if (xmlhttp.readyState==4 && xmlhttp.status==200)
	    {
	    	var json = JSON.parse(xmlhttp.responseText);
	       document.getElementById("Nombre").value=json.Nombre;
	    }
	  }

	nombre = document.getElementById("nombre").value;
	xmlhttp.open("GET","getdata.php?nombre=" + nombre,true);
	xmlhttp.send();
}
