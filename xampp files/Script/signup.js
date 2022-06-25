const form = document.getElementById('form')
const fname =document.getElementById('fname')
const lname = document.getElementById('lname')
const paswword = document.getElementById('paswword')
const paswword2 = document.getElementById('paswword2')
const date = document.getElementById('date');
const username = document.getElementById('username')
const email = document.getElementById('email')
const pic = document.getElementById('myFile')
const errorElement=document.getElementById('error')


form.addEventListener('submit',(e) =>{

	let messages=[]
	if (fname.value==='' || fname.value== null){
 		messages.push('First Name is required')

 	}

 	if (lname.value==='' || lname.value== null){
 		messages.push('Last Name is required')

 	}

	if (password.value.length<=6){
 		messages.push('Password is too short')
	}

	if (password.value!==password2.value){
 		messages.push('Passwords dont match')

 	}

 	if (email.value.includes('@')!== true){
 		messages.push('Invalid Email')

 	}


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