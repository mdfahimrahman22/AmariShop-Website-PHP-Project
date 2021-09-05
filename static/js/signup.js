const email = document.querySelector(".email");
const pass = document.querySelector(".pass");
const confirm_pass = document.querySelector(".confirm_pass");

function validateEmail(email) {
  const re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return re.test(email);
}

email.addEventListener("input", () => {
	if (!validateEmail(email.value)) {
		email.classList.add("is-invalid");
	}else{
    email.classList.remove("is-invalid");
  }
});

email.addEventListener("blur", () => {
	if (!email.value) {
		email.classList.add("is-invalid");
	}else{
    email.classList.remove("is-invalid");
  }
});

pass.addEventListener("blur", () => {
	if (!pass.value) {
		pass.classList.add("is-invalid");
	}else{
    pass.classList.remove("is-invalid");
  }
});

confirm_pass.addEventListener("blur", () => {
	if (!confirm_pass.value) {
		confirm_pass.classList.add("is-invalid");
	}else{
    confirm_pass.classList.remove("is-invalid");
  }
});

confirm_pass.addEventListener("input", () => {
	if(confirm_pass.value!=pass.value){
    confirm_pass.classList.add("is-invalid");
  }
  else{
    confirm_pass.classList.remove("is-invalid");
  }
});
