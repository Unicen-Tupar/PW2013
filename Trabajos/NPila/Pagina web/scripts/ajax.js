// Informacion de pacientes
$("#cons_pacientes").submit(function()
{
	$.ajax({
		type: "POST",
		url: "infopaciente.php",
		data: $("#cons_pacientes").serialize(),
		success: function(data)
			{
				document.getElementById('content').innerHTML=data;
			}
		/*error: function(data)
			{
			alert("El paciente consultado no se encuentra. Compruebe que escribio el nombre correctamente y que el paciente este ingresado en la base de datos.")
			}*/
});

return false;

});

// Turnos
$("#cons_turnos").submit(function()
{
var fecha= 'Turnos del dia: ' + document.getElementById('fecha').value;
	$.ajax({
		type: "POST",
		url: "turnos.php",
		data: $("#cons_turnos").serialize(),
		success: function(data)
			{				
				document.getElementById('content').innerHTML=data;
				document.getElementById('fechacons').innerHTML=fecha;

			}
	
});

				
return false;

});
