


function set(){
	form= document.getElementById('newquiz');
diff=document.getElementById('difficulty');
type=document.getElementById('type');

form.addEventListener('submit',(e) =>{
	document.getElementById("tf!").style.display ="none";
    document.getElementById("multiplec!").style.display ="none";
    document.getElementById("fill!").style.display ="none";
c=0;
if(type.value==="tf"){
    
    document.getElementById("tf!").style.display = "block";
  
}

if(type.value==="multiplec"){
    document.getElementById("multiplec!").style.display="block";
   
}

if(type.value==="fill"){
    document.getElementById("fill!").style.display = "block";
   
}

  
    e.preventDefault();
 })     
 }
