const display_actors = document.getElementById("actors")
function getActors() {
	const birthDate = document.getElementById("birthdate").value;
	const [year, month, day] = birthDate.split("-");
	const url = `https://online-movie-database.p.rapidapi.com/actors/list-born-today?month=${month}&day=${day}`;
	const headers = {
        'X-RapidAPI-Key': 'ac42e0bfaemsh40fb043863b6c8ep146bc1jsn6b5979a8e25e',
    'X-RapidAPI-Host': 'online-movie-database.p.rapidapi.com'
    };

	async function fetchDataWithDelay(url, headers) {
		const response = await fetch(url, { headers });
		const data = await response.json();
		for (let i = 0; i < data.length; i++) {
			const id = data[i].split("/")[2];
			await new Promise(resolve => setTimeout(resolve, 301));
			printName(id)
		}
	}

	fetchDataWithDelay(url, headers)
		.catch(error => console.error(error));

}
function printName(actorId) {
	const options = {
		method: 'GET',
		headers: {
			'X-RapidAPI-Key': 'ac42e0bfaemsh40fb043863b6c8ep146bc1jsn6b5979a8e25e',
    'X-RapidAPI-Host': 'online-movie-database.p.rapidapi.com'
		}
	};
	const display = (actr) => {
        if(actr){display_actors.innerHTML += `<li>${actr}</li>`;}
	}
	fetch(`https://online-movie-database.p.rapidapi.com/actors/get-bio?nconst=${actorId}`, options)
		.then(response => response.json())
		.then(response => display(response.name))
		.catch(err => console.error(err));

}


const full_name = document.getElementById('fullname');
const form = document.getElementById('form');
const username = document.getElementById('username');
const email = document.getElementById('email');
const password = document.getElementById('password');
const password2 = document.getElementById('password2');
const birthdate = document.getElementById('birthdate');
const phone = document.getElementById('phone');
const address = document.getElementById('address');
const file = document.getElementById('file');






const setError = (element, message) => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');

    errorDisplay.innerText = message;
    inputControl.classList.add('error');
    inputControl.classList.remove('success')
}

const setSuccess = element => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');

    errorDisplay.innerText = '';
    inputControl.classList.add('success');
    inputControl.classList.remove('error');
};

const isValidEmail = email => {
    const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}
function CheckPassword(password) {
    const regex = /^(?=.*\d)(?=.*[!@#$%^&*])(?=.*[a-z]).{8,}$/;
    return regex.test(password);
  }

const validateInputs = () => {
    const full_NameValue=full_name.value.trim();
    const usernameValue = username.value.trim();
    const emailValue = email.value.trim();
    const passwordValue = password.value.trim();
    const password2Value = password2.value.trim();
    const birthdatevalue=birthdate.value.trim();
    const phoneValue = phone.value.trim();
    const addressValue = address.value.trim();
    const fileValue = file.value.trim();
    var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif)$/i;

    $f=0;


    if(full_NameValue === '') {
        setError(full_name, 'full Name is rquird');
    } 
    else {
        setSuccess(full_name);
        $f++;
        
    }

    if(usernameValue === '') {
        setError(username, 'Username is required');
    } else {
        setSuccess(username);
        $f++;
    }

    if(emailValue === '') {
        setError(email, 'Email is required');
    } else if (!isValidEmail(emailValue)) {
        setError(email, 'Provide a valid email address');
    } else {
        setSuccess(email);
        $f++;
    }

    if(passwordValue === '') {
        setError(password, 'Password is required');
    } else if (passwordValue.length < 8 ) {
        setError(password, 'Password must be at least 8 character.')
    } 
    else if(!CheckPassword(passwordValue)){
        setError(password, 'password must contain at least 8 characters with at least 1 number literal and 1 special character')

    }
    else {
        setSuccess(password);
        $f++;
    }

    if(password2Value === '') {
        setError(password2, 'Please confirm your password');
    } else if (password2Value !== passwordValue) {
        setError(password2, "Passwords doesn't match");
    } else {
        setSuccess(password2);
        $f++;
    }

    
    if(birthdatevalue === '') {
        setError(birthdate, 'birthdate is required');
    } else {
        setSuccess(birthdate);
        $f++;
    }



    if(phoneValue === '') {
        setError(phone, 'phone is required');
    } else {
        setSuccess(phone);
        $f++;
    }


    if(addressValue === '') {
        setError(address, 'address is required');
    } else {
        setSuccess(address);
        $f++;
    }

    if(!allowedExtensions.exec(fileValue)) {
        setError(file, 'image is required');
    } else {
        setSuccess(file);
        $f++;
    }


    if($f==9){
        return true;
    }
    else return false;

   

};



