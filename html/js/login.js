function showLogin(delay) {
	var loginForm = document.getElementById('login-form');
	var registerForm = document.getElementById('register-form');
	setTimeout(fadeIn, delay, loginForm, delay);
	fadeOut(registerForm, delay);
	document.getElementById('register-form-link').className = "";
	document.getElementById('login-form-link').className = "active";
	e.preventDefault();
}

function showRegister(delay) {
	var loginForm = document.getElementById('login-form');
	var registerForm = document.getElementById('register-form');
	setTimeout(fadeIn, delay, registerForm, delay);
	fadeOut(loginForm, delay);
	document.getElementById('login-form-link').className = "";
	document.getElementById('register-form-link').className = "active";
	e.preventDefault();
}