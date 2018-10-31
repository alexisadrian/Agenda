
$resultados=document.getElementById('info');

function logiando() {
	
	var Servidor;

	if (window.XMLHttpRequest) 
	{
				Servidor=new XMLHttpRequest();
			}

		else
			{
		  // code for old IE browsers
		   Servidor = new ActiveXObject("Microsoft.XMLHTTP");
		}

var a=document.getElementById('email').value;
var b=document.getElementById('clave').value;

var InfUser="email="+a+"&clave="+b;

Servidor.onreadystatechange=function()
	{

		  if (Servidor.readyState === 4 && Servidor.status === 200) 
		  	{
			  	
			  	document.getElementById("info").innerHTML= Servidor.responseText;
		    }
	}
			Servidor.open("GET","Mysql/Select.php", true);
			
			Servidor.send();

}

