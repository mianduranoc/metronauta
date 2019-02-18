'use strict'
document.addEventListener("DOMContentLoaded",iniciar);
	function iniciar(){
		
		let tar = document.getElementsByClassName("imagen");
		for(let i=0; i<tar.length;i++){
			tar[i].addEventListener("click",(event) =>{
				event.target.parentElement.nextElementSibling.hidden=!event.target.parentElement.nextElementSibling.hidden; 
		});
		}
	}