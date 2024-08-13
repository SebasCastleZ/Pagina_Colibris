let f;
window.onload = (e) => {
	f = document.querySelector(".form2");
	document.addEventListener("keyup", val);
	document.querySelector("#navS1").addEventListener("mouseover", fn1a);
	document.querySelector("#navS1").addEventListener("mouseout", fn2a);
	document.querySelector("#navS2").addEventListener("mouseover", fn1b);
	document.querySelector("#navS2").addEventListener("mouseout", fn2b);
	document.querySelector("#navS3").addEventListener("mouseover", fn1c);
	document.querySelector("#navS3").addEventListener("mouseout", fn2c);
	document.querySelector("#navS4").addEventListener("mouseover", fn1d);
	document.querySelector("#navS4").addEventListener("mouseout", fn2d);
	document.querySelector("#navS5").addEventListener("mouseover", fn1e);
	document.querySelector("#navS5").addEventListener("mouseout", fn2e);
	document.querySelector("#navS6").addEventListener("mouseover", fn1f);
	document.querySelector("#navS6").addEventListener("mouseout", fn2f);
	document.querySelector("#btn1").addEventListener("click", fn3);
	document.querySelector("#btn3").addEventListener("click", fn6);
	document.querySelector("#bo").addEventListener("click", save);
}

const fn1a = () => {
	const x = document.getElementById("navS1");
	x.style.fontSize = "30px";
}
const fn2a = () => {
	const x = document.getElementById("navS1");
	x.style.fontSize = "20px";
}

const fn1b = () => {
	const x = document.getElementById("navS2");
	x.style.fontSize = "30px";
}
const fn2b = () => {
	const x = document.getElementById("navS2");
	x.style.fontSize = "20px";
}
const fn1c = () => {
	const x = document.getElementById("navS3");
	x.style.fontSize = "30px";
}
const fn2c = () => {
	const x = document.getElementById("navS3");
	x.style.fontSize = "20px";
}
const fn1d = () => {
	const x = document.getElementById("navS4");
	x.style.fontSize = "30px";
}
const fn2d = () => {
	const x = document.getElementById("navS4");
	x.style.fontSize = "20px";
}
const fn1e = () => {
	const x = document.getElementById("navS5");
	x.style.fontSize = "30px";
}
const fn2e = () => {
	const x = document.getElementById("navS5");
	x.style.fontSize = "20px";
}
const fn1f = () => {
	const x = document.getElementById("navS6");
	x.style.fontSize = "30px";
}
const fn2f = () => {
	const x = document.getElementById("navS6");
	x.style.fontSize = "20px";
}

const fn3 = () => {
	const x = document.getElementById("img2");
	const y = document.createElement("IMG");
	y.src = "a/img/1.png";
	y.style = "width:200px;height:200px;";
	x.appendChild(y);
}
const fn6 = () => {
	const x = document.getElementById("img2");
	const y = x.lastElementChild;
	x.removeChild(y);
}
let i = 0;

const save = (e) => {
	i++;
	const pa = document.querySelector(".res");
	const objnew0 = document.createElement("ARTICLE");
	const newtext0 = document.createTextNode("Comentario Numero:" + i);
	objnew0.appendChild(newtext0);
	objnew0.style.border = "3px solid red";
	pa.appendChild(objnew0);

	const objnew = document.createElement("ARTICLE");
	const newtext = document.createTextNode(document.form1.nom.value+" dice...");
	objnew.appendChild(newtext);
	pa.appendChild(objnew);

	const objnew3 = document.createElement("ARTICLE");
	const newtext3 = document.createTextNode(document.form1.com.value);
	objnew3.appendChild(newtext3);
	pa.appendChild(objnew3);

	const envio1=document.querySelector(".carg");
    const msjEnvio=document.querySelector(".envi");
    envio1.classList.remove("ocult");
    e.target.disable=true;
    setTimeout(()=>{
        envio1.classList.add("ocult");
        msjEnvio.classList.remove("ocult");
        f.reset();
    },1500);
    setTimeout(()=>{
        msjEnvio.classList.add("ocult");
        e.target.disable=false;
    },3500);
}

const val=(e)=>{
    v1=document.getElementById("formIn1").value;
    v2=document.getElementById("formIn2").value;
    v3=document.getElementById("formIn3").value;
    v4=document.getElementById("formIn4").value;
	v5=document.getElementById("formIn5").value;
	v6=document.getElementById("formIn6").value;
    v7=document.getElementById("formIn7").checked;
    if(v1=="null" || v1.length==0){
        const msj=document.getElementById("msjError");
        msj.classList.add("ocult1");
        document.getElementById("msjError").innerHTML="Deben ser Letras";
        return false;
    }
	else if(v2=="null" || v2.length==0){
        const msj=document.getElementById("msjError");
        msj.classList.add("ocult1");
        document.getElementById("msjError").innerHTML="Deben ser Letras";
        return false;
    }
	else if(v3=="null" || v3.length==0){
        const msj=document.getElementById("msjError");
        msj.classList.add("ocult1");
        document.getElementById("msjError").innerHTML="Deben ser Letras";
        return false;
    }
    else if(v4=="null" || v4.length==0 || !(/^[a-z0-9]+(\.[_a-z0-9]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,15})$/i.test(v4))){
        const msj=document.getElementById("msjError");
        msj.classList.add("ocult1");
        document.getElementById("msjError").innerHTML="No es un Correo Valido (correo@gmail.com)";
        return false; 
    }
    else if(v5=="null" || v5.length==0 || !(/[0-9]{10}/i.test(v5)) ){
        const msj=document.getElementById("msjError");
        msj.classList.add("ocult1");
        document.getElementById("msjError").innerHTML="No es un Números de Telefono Valido (10 Números)";
        return false;
    }
	else if(v6=="Selecciona una Opción"){
        const msj=document.getElementById("msjError");
        msj.classList.add("ocult1");
        document.getElementById("msjError").innerHTML="Selecciona una Opción";
        return false;
    }
    else if(!v7){
        const msj=document.getElementById("msjError");
        msj.classList.add("ocult1");
        document.getElementById("msjError").innerHTML="Selecciona Aceptar";
        return false;
    }
    return true;
}