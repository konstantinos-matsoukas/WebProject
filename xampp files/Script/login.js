const form = document.getElementById('form')
const paswword = document.getElementById('paswword')
const username = document.getElementById('username')
const pic = document.getElementById('myFile')
const errorElement=document.getElementById('error')

form.addEventListener('submit',(e) =>{

	let messages=[]
	if (username.value==='' || username.value== null){
 		messages.push('Username is required')

 	}

 if (password.value.length<=6){
 		messages.push('Password is too short')

 	}

 	

 	if(messages.length > 0){
	e.preventDefault();
	errorElement.innerText=messages.join(', ')
   }

})