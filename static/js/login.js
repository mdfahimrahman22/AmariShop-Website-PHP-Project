const email = document.querySelector(".email");
const pass = document.querySelector(".pass");

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


