window.onload = () => {
	if(sessionStorage.user) {
			user = JSON.parse(sessionStorage.user);
			if(compareToken(user.authToken, user.email)){
				location.replace('/');
			}
	}
}


//Select Inputs

const loader = document.querySelector('.loader');

const submitBtn = document.querySelector('.submit-btn');
const name = document.querySelector('#name') || null;
const email = document.querySelector('#email') ;
const password = document.querySelector('#password');
const number = document.querySelector('#number') || null;
const tac = document.querySelector('#terms-and-cond') || null;
// const notification = document.querySelector('#notification');

submitBtn.addEventListener('click', () => {
	if(name!= null) {
		if(name.value.length < 3) {
		showAlert('Name is required!');	
	} else if(!email.value.length) {
		showAlert('Email is required!');
	} else if(password.value.length < 8) {
		showAlert('Password required! & should contain more than 8 letters!');
	} else if(!number.value.length) {
		showAlert('Number is required!');
	} else if(!Number(number.value) || number.value.length < 10) {
		showAlert('Invalid number! please provide valid one');
	} else if(!tac.checked) {
		showAlert('Agree to our terms and conditons!');
	} else{

		//submit form
		loader.style.display = 'block';
		sendData('/signup', {
			name: name.value,
			email: email.value,
			password: password.value,
			number: number.value,
			tac: tac.checked,
			seller:false
		})
	}
	} else{
		//Login page

		if(!email.value.length || !password.value.length) {
			showAlert('Every field is required!'); 
		} else {
			loader.style.display = 'block';
			sendData('/login', {
				email: email.value,
				password: password.value,
			})
		}
	}
})


