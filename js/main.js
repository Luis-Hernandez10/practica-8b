if(window.location.href.indexOf('index') > -1){
window.onload = function Ventana(){
	var ventana = window.open("control-remoto.html?20200609","Control Remoto", "width=440, height=448, top=238, left=900");

	}

}

// control-remoto
if(window.location.href.indexOf('control-remoto') > -1){
	function cambio(url){

	if(url == 'index.html'){
		window.opener.location.href = url;
	}
	else if (url == 'tableta.html'){
		window.opener.location.href = url;
	}
	else if (url == 'celulares.html'){
		window.opener.location.href = url;
	}
	else if (url == 'caracteristicas.html'){
		window.opener.location.href =  url;
	}
	else if (url == 'reloj.html'){
		window.opener.location.href =  url;
	}

	};
}

//reloj

if(window.location.href.indexOf('reloj') > -1){
window.onload = function() {
            what();

            function what(){
                var d = new Date();
                var hora = d.getHours();
                var minuto = d.getMinutes();
                var segundo = d.getSeconds();

                var tiempo = hora + " : " + minuto + " : " + segundo;

				document.getElementById("demo").innerHTML = tiempo;
				setTimeout(what, 1000);

				//fecha
				var meses = new Array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
        var date = new Date();
        var fecha = date.getDate() + " de " +  meses[date.getMonth()] + " de " + date.getFullYear();

        document.getElementById("demo2").innerHTML = fecha; 
				
            };
        }

        
}

//agregado al carrito

function carrito(){

window.alert("Agregado al carrito");
}