(()=>{
	let button = document.querySelector("#button-create-produto"); //querySelector permite procurar um elemento e devolve sempre o primeiro resultado
	if (button) {
		button.addEventListener('click',()=>{
			document.querySelector('#form-create-produto').style.display = "block";
		})
	}
})();

(()=>{
	let button = document.querySelector("#button-create-caract"); //querySelector permite procurar um elemento e devolve sempre o primeiro resultado
	if (button) {
		button.addEventListener('click',()=>{
			document.querySelector('#form-create-caract').style.display = "block";
		})
	}
})();