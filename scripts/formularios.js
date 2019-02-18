'use strict'

document.addEventListener("DOMContentLoaded",iniciar);

function iniciar(){
       let input = document.getElementsByClassName("input-text"); //obtiene los elementos por clases      
        for (let i = 0; i < input.length; i++){
            input[i].addEventListener("click", (event) =>{
                
                event.target.parentElement.classList.add("input-div-focus");
                event.target.classList.add("input-text-focus");                    
                console.log("con clic "+ alerta)
                alerta = false;
                alerta2 = false;
            });
            input[i].addEventListener("blur", (event) =>{
                if(event.target.value === ""){
                    console.log("con blur vacio "+ alerta)
                    if(!alerta && !alerta2){
                    	event.target.parentElement.classList.add("input-div-vacio");
                    	event.target.classList.add("input-text-vacio");	
                        event.target.nextElementSibling.src = "../img/vacio.png";                    
                    }else{
                        event.target.parentElement.previousElementSibling.classList.add("input-div-vacio");
                        event.target.parentElement.previousElementSibling.firstElementChild.classList.add("input-text-vacio"); 
                        event.target.parentElement.previousElementSibling.firstElementChild.nextElementSibling.src = "../img/vacio.png";
                    }
                }else{
                	event.target.parentElement.classList.remove("input-div-vacio");
                	event.target.classList.remove("input-text-vacio");	
                    event.target.nextElementSibling.src = "../img/lleno.png";
                }
            });
            // LISTENER CONTRASEÑA Y MAIL
            let rcontra = document.getElementById("r-contrasena");
 			let rmail =document.getElementById("r-correo");
 			
 			rcontra.addEventListener("blur", (event) =>{
 				if(rcontra.value !== document.getElementById("contrasena").value && !alerta){
 					alerta = true;
                    
                    event.target.nextElementSibling.src = "../img/vacio.png";
					alert("contra");
 				}
 			});

 			rmail.addEventListener("blur", (event) =>{
 				if(rmail.value !== document.getElementById("correo").value && !alerta){
 					alerta = true;                    
                    event.target.nextElementSibling.src = "../img/vacio.png";
					alert("correo");
 				}
 			});
            
        }
    }
var alerta,alerta2;