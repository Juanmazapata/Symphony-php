
$(document).ready(function (){

	/*Foto*/
const filefoto = document.getElementById("flanexofoto");
const botonfoto = document.getElementById("dvfondobtnfoto");
const avisofoto = document.getElementById("nomarchivofoto");

botonfoto.addEventListener("click", function(){
	filefoto.click();
	});

filefoto.addEventListener("change", function(){
	if (filefoto.value) {
		avisofoto.innerHTML = filefoto.value.match(/[\/\\]([\w\d\s\.\-\(\)]+)$/)[1];

		}else{
			avisofoto.innerHTML = "Sin Archivo";

			}
		});

	/*Cedula*/

const filecedula = document.getElementById("flanexocedula");
const botoncedula = document.getElementById("dvfondobtncedula");
const avisocedula = document.getElementById("nomarchivocedula");

botoncedula.addEventListener("click", function(){
	filecedula.click();
	});

filecedula.addEventListener("change", function(){
	if (filecedula.value) {
		avisocedula.innerHTML = filecedula.value.match(/[\/\\]([\w\d\s\.\-\(\)]+)$/)[1];

		}else{
			avisocedula.innerHTML = "Sin Archivo";

			}
		});

    /*EPS*/
const fileEPS = document.getElementById("flanexoEPS");
const botonEPS = document.getElementById("dvfondobtnEPS");
const avisoEPS = document.getElementById("nomarchivoEPS");

botonEPS.addEventListener("click", function(){
	fileEPS.click();
	});

fileEPS.addEventListener("change", function(){
	if (fileEPS.value) {
		avisoEPS.innerHTML = fileEPS.value.match(/[\/\\]([\w\d\s\.\-\(\)]+)$/)[1];

		}else{
			avisoEPS.innerHTML = "Sin Archivo";

			}
		});

    /*pension*/
const filepension = document.getElementById("flanexopension");
const botonpension = document.getElementById("dvfondobtnpension");
const avisopension = document.getElementById("nomarchivopension");

botonpension.addEventListener("click", function(){
	filepension.click();
	});

filepension.addEventListener("change", function(){
	if (filepension.value) {
		avisopension.innerHTML = filepension.value.match(/[\/\\]([\w\d\s\.\-\(\)]+)$/)[1];

		}else{
			avisopension.innerHTML = "Sin Archivo";

			}
		});

	/*ARL*/
const fileARL = document.getElementById("flanexoARL");
const botonARL = document.getElementById("dvfondobtnARL");
const avisoARL = document.getElementById("nomarchivoARL");

botonARL.addEventListener("click", function(){
	fileARL.click();
	});

fileARL.addEventListener("change", function(){
	if (fileARL.value) {
		avisoARL.innerHTML = fileARL.value.match(/[\/\\]([\w\d\s\.\-\(\)]+)$/)[1];

		}else{
			avisoARL.innerHTML = "Sin Archivo";

			}
		});

	/*RUT*/
const fileRUT = document.getElementById("flanexoRUT");
const botonRUT = document.getElementById("dvfondobtnRUT");
const avisoRUT = document.getElementById("nomarchivoRUT");

botonRUT.addEventListener("click", function(){
	fileRUT.click();
	});

fileRUT.addEventListener("change", function(){
	if (fileRUT.value) {
		avisoRUT.innerHTML = fileRUT.value.match(/[\/\\]([\w\d\s\.\-\(\)]+)$/)[1];

		}else{
			avisoRUT.innerHTML = "Sin Archivo";

			}
		});

	/*contraloria*/
const filecontraloria = document.getElementById("flanexocontraloria");
const botoncontraloria = document.getElementById("dvfondobtncontraloria");
const avisocontraloria = document.getElementById("nomarchivocontraloria");

botoncontraloria.addEventListener("click", function(){
	filecontraloria.click();
	});

filecontraloria.addEventListener("change", function(){
	if (filecontraloria.value) {
		avisocontraloria.innerHTML = filecontraloria.value.match(/[\/\\]([\w\d\s\.\-\(\)]+)$/)[1];

		}else{
			avisocontraloria.innerHTML = "Sin Archivo";

			}
		});

	/*procuraduria*/
const fileprocuraduria = document.getElementById("flanexoprocuraduria");
const botonprocuraduria = document.getElementById("dvfondobtnprocuraduria");
const avisoprocuraduria = document.getElementById("nomarchivoprocuraduria");

botonprocuraduria.addEventListener("click", function(){
	fileprocuraduria.click();
	});

fileprocuraduria.addEventListener("change", function(){
	if (fileprocuraduria.value) {
		avisoprocuraduria.innerHTML = fileprocuraduria.value.match(/[\/\\]([\w\d\s\.\-\(\)]+)$/)[1];

		}else{
			avisoprocuraduria.innerHTML = "Sin Archivo";

			}
		});

	/*AJ*/
const fileAJ = document.getElementById("flanexoAJ");
const botonAJ = document.getElementById("dvfondobtnAJ");
const avisoAJ = document.getElementById("nomarchivoAJ");

botonAJ.addEventListener("click", function(){
	fileAJ.click();
	});

fileAJ.addEventListener("change", function(){
	if (fileAJ.value) {
		avisoAJ.innerHTML = fileAJ.value.match(/[\/\\]([\w\d\s\.\-\(\)]+)$/)[1];

		}else{
			avisoAJ.innerHTML = "Sin Archivo";

			}
		});

	/*CB*/
const fileCB = document.getElementById("flanexoCB");
const botonCB = document.getElementById("dvfondobtnCB");
const avisoCB = document.getElementById("nomarchivoCB");

botonCB.addEventListener("click", function(){
	fileCB.click();
	});

fileCB.addEventListener("change", function(){
	if (fileCB.value) {
		avisoCB.innerHTML = fileCB.value.match(/[\/\\]([\w\d\s\.\-\(\)]+)$/)[1];

		}else{
			avisoCB.innerHTML = "Sin Archivo";

			}
		});

	/*HV*/
const fileHV = document.getElementById("flanexoHV");
const botonHV = document.getElementById("dvfondobtnHV");
const avisoHV = document.getElementById("nomarchivoHV");

botonHV.addEventListener("click", function(){
	fileHV.click();
	});

fileHV.addEventListener("change", function(){
	if (fileHV.value) {
		avisoHV.innerHTML = fileHV.value.match(/[\/\\]([\w\d\s\.\-\(\)]+)$/)[1];

		}else{
			avisoHV.innerHTML = "Sin Archivo";

			}
		});

		/*LM*/
		const fileLM = document.getElementById("flanexoLM");
		const botonLM = document.getElementById("dvfondobtnLM");
		const avisoLM = document.getElementById("nomarchivoLM");

		botonLM.addEventListener("click", function(){
		fileLM.click();
		});

		fileLM.addEventListener("change", function(){
		if (fileLM.value) {
			avisoLM.innerHTML = fileLM.value.match(/[\/\\]([\w\d\s\.\-\(\)]+)$/)[1];

			}else{
				avisoLM.innerHTML = "Sin Archivo";

				}
			});

		

});
