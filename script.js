const form = document.getElementById('form')
const fname = document.getElementById('fname')
const lname = document.getElementById('lname')
const phone = document.getElementById('phone')
const email = document.getElementById('email')
const fathername = document.getElementById('fathername')
const gender = document.getElementById('gender')
const collegename = document.getElementById('collegename')

// residential addres
let raddress = document.getElementById('raddress')
let rpostoffice = document.getElementById('rpostoffice')
let rdistrict = document.getElementById('rdistrict')
let rstate = document.getElementById('rstate')
let rpin = document.getElementById('rpin')

// Permanent addres
let paddress = document.getElementById('paddress')
let ppostoffice = document.getElementById('ppostoffice')
let pdistrict = document.getElementById('pdistrict')
let pstate = document.getElementById('pstate')
let ppin = document.getElementById('ppin')
	

// form.addEventListener('submit', e => {
// 	e.preventDefault();
	
// 	checkInputs();
// });

// function checkInputs() {

	


// const fnameValue = fname.value.trim();
// const lnameValue = lname.value.trim();
// const phoneValue = phone.value.trim();
// const emailValue = email.value.trim();
// const fathernameValue = fathername.value.trim();
// const genderValue = gender.value.trim();
// const collegenameValue = collegename.value.trim();
// let raddressValue = raddress.value.trim();
// let rpostofficeValue = rpostoffice.value.trim();
// let rdistrictValue = rdistrict.value.trim();
// let rstateValue = rstate.value.trim();
// let rpinValue = rpin.value.trim();
// let paddressValue = paddress.value.trim();
// let ppostofficeValue = ppostoffice.value.trim();
// let pdistrictValue = pdistrict.value.trim();
// let pstateValue = pstate.value.trim();
// let ppinValue = ppin.value.trim();
	
// 	if(fnameValue === '') {
// 		setErrorFor(fname, 'First Name cannot be blank');
// 	} else {
// 		setSuccessFor(fname);
// 	}
	
// 	if(emailValue === '') {
// 		setErrorFor(email, 'Email cannot be blank');
// 	} else if (!isEmail(emailValue)) {
// 		setErrorFor(email, 'Not a valid email');
// 	} else {
// 		setSuccessFor(email);
// 	}
	
// 	if(lnameValue === '') {
// 		setErrorFor(lname, 'Last Name cannot be blank');
// 	} else {
// 		setSuccessFor(lname);
// 	}
    
//     if(phoneValue === '') {
// 		setErrorFor(phone, 'Mobile Number cannot be blank');
//     } 
//     else if (phoneValue.length<10){
//         setErrorFor(phone, 'Mobile Number Should be 10 Digit');
//     }
// 	else {
// 		setSuccessFor(phone);
// 	}

//     if(fathernameValue === '') {
// 		setErrorFor(fathername, 'Father Name cannot be blank');
// 	} else {
// 		setSuccessFor(fathername);
// 	}

//     if(genderValue === '') {
// 		setErrorFor(gender, 'Gender cannot be blank');
// 	} else {
// 		setSuccessFor(gender);
// 	}

//     if(collegenameValue === '') {
// 		setErrorFor(collegename, 'College Name cannot be blank');
// 	} else {
// 		setSuccessFor(collegename);
// 	}

//     if(raddressValue === '') {
// 		setErrorFor(raddress, 'Address cannot be blank');
// 	} else {
// 		setSuccessFor(raddress);
// 	}

    
//     if(rpostofficeValue === '') {
// 		setErrorFor(rpostoffice, 'Postoffice Name cannot be blank');
// 	} else {
// 		setSuccessFor(rpostoffice);
// 	}

//     if(rdistrictValue === '') {
// 		setErrorFor(rdistrict, 'District Name cannot be blank');
// 	} else {
// 		setSuccessFor(rdistrict);
// 	}

//     if(rstateValue === '') {
// 		setErrorFor(rstate, 'State cannot be blank');
// 	} else {
// 		setSuccessFor(rstate);
// 	}

//     if(rpinValue === '') {
// 		setErrorFor(rpin, 'PIN cannot be blank');
// 	} 
//     else {
// 		setSuccessFor(rpin);
//     }

//     // Permanent Address

//     if(paddressValue === '') {
// 		setErrorFor(paddress, 'Address cannot be blank');
// 	} else {
// 		setSuccessFor(paddress);
// 	}

    
//     if(ppostofficeValue === '') {
// 		setErrorFor(ppostoffice, 'Postoffice Name cannot be blank');
// 	} else {
// 		setSuccessFor(ppostoffice);
// 	}

//     if(pdistrictValue === '') {
// 		setErrorFor(pdistrict, 'District Name cannot be blank');
// 	} else {
// 		setSuccessFor(pdistrict);
// 	}

//     if(pstateValue === '') {
// 		setErrorFor(pstate, 'State cannot be blank');
// 	} else {
// 		setSuccessFor(pstate);
// 	}

//     if(ppinValue === '') {
// 		setErrorFor(ppin, 'PIN cannot be blank');
// 	} 
//     else {
// 		setSuccessFor(ppin);
//     }

	
	  
// }

// function setErrorFor(input, message) {
// 	const formControl = input.parentElement;
// 	const small = formControl.querySelector('small');
// 	formControl.className = 'form-control1 error';
// 	small.innerText = message;
// }

// function setSuccessFor(input) {
// 	const formControl = input.parentElement;
// 	formControl.className = 'form-control1 success';
// }
	
// function isEmail(email) {
// 	return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
// }



// SAME AS ADDRESSS

function addressFunction (){
	if (document.getElementById(
		"checkBox").checked) {
		  document.getElementById(
			"paddress").value = 
		  document.getElementById(
			"raddress").value;

		  document.getElementById(
				"ppostoffice").value = 
		  document.getElementById(
				"rpostoffice").value;

		  document.getElementById(
					"pdistrict").value = 
		  document.getElementById(
					"rdistrict").value;

		  document.getElementById(
					"pstate").value = 
		  document.getElementById(
					"rstate").value;
		  document.getElementById(
				    "ppin").value = 
		  document.getElementById(
					"rpin").value;
		  
		  
	  } else {
		document.getElementById(
			"paddress").value = ""
		  
		  document.getElementById(
				"ppostoffice").value = ""

		  document.getElementById(
					"pdistrict").value = ""

		  document.getElementById(
					"pstate").value = ""
		  document.getElementById(
				    "ppin").value = ""
		  
	  }

	
}