document.addEventListener("DOMContentLoaded", function () {
  const boxLogin = document.querySelector(".login");
  const boxRegister = document.querySelector(".register");
  const btnLogin = document.getElementById("btnLogin");
  const btnRegister = document.getElementById("btnRegister");
  const notifyEmailRegister = document.getElementById("notifyEmailRegister");
  const notifyPasswordRegister = document.getElementById(
    "notifyPasswordRegister"
  );
  const notifyRePasswordRegister = document.getElementById(
    "notifyRePasswordRegister"
  );
  const notifyErrorEmail = document.getElementById("notifyErrorEmail");
  const notifyErrorPassword = document.getElementById("notifyErrorPassword");
  const inputEmailReg = document.getElementById("inputEmailReg");
  const inputPasswordReg = document.getElementById("inputPasswordReg");
  const inputRePasswordReg = document.getElementById("inputRePasswordReg");
  const inputEmailLog = document.getElementById("inputEmail");
  const inputPasswordLog = document.getElementById("inputPassword");

  btnLogin.setAttribute("disabled", true);
  btnRegister.setAttribute("disabled", true);

  document.querySelector("#showRegister").onclick = () => {
    boxLogin.classList.add("hidden");
    boxRegister.classList.remove("hidden");
  };

  document.querySelector("#showLogin").onclick = () => {
    boxRegister.classList.add("hidden");
    boxLogin.classList.remove("hidden");
  };

  function checkRequired(value, notifyElement) {
    if (value.length === 0) {
      notifyElement.innerHTML = "Dữ liệu không được bỏ trống";
      return false;
    }
    notifyElement.innerHTML = "";
    return true;
  }

  // Handle Register
  function register() {
    let check = 0;
    let valuePass = inputPasswordReg.value;
    let valueRePass = inputRePasswordReg.value;

    if (checkRequired(inputEmailReg.value, notifyEmailRegister)) check += 1;
    if (checkRequired(valuePass, notifyPasswordRegister)) check += 1;
    if (checkRequired(valueRePass, notifyRePasswordRegister)) check += 1;
    if (checkMathPassword(valuePass, valueRePass)) check += 1;

    if (check === 4) {
      btnRegister.removeAttribute("disabled");
    } else {
      btnRegister.setAttribute("disabled", true);
    }
  }

  const checkMathPassword = (password, passwordConfirm) => {
    if (password !== passwordConfirm) {
      notifyRePasswordRegister.innerHTML = "Mật khẩu không trùng khớp";
      return false;
    }
    notifyRePasswordRegister.innerHTML = "";
    return true;
  };

  inputEmailReg.onblur = () => {
    inputEmailReg.value = inputEmailReg.value.trim();
    checkRequired(inputEmailReg.value, notifyEmailRegister);
    register()
  };

  inputPasswordReg.onblur = () => {
    inputPasswordReg.value = inputPasswordReg.value.trim();
    checkRequired(inputPasswordReg.value, notifyPasswordRegister);
    checkMathPassword(inputPasswordReg.value, inputRePasswordReg.value);
    register()
  };

  inputRePasswordReg.onblur = () => {
    inputRePasswordReg.value = inputRePasswordReg.value.trim();
    checkRequired(inputRePasswordReg.value, notifyRePasswordRegister);
    checkMathPassword(inputPasswordReg.value, inputRePasswordReg.value);
    register()
  };

  
  // Handle Login
  function login() {
    let check = 0;
    let valueLogPass = inputPasswordLog.value;

    if (checkRequired(inputEmailLog.value, notifyErrorEmail)) check += 1;
    if (checkRequired(valueLogPass, notifyErrorPassword)) check += 1;

    if (check === 2) {
      btnLogin.removeAttribute("disabled");
    } else {
      btnLogin.setAttribute("disabled", true);
    }
  }

    inputEmailLog.onblur = () => {
      inputEmailLog.value = inputEmailLog.value.trim();
      checkRequired(inputEmailLog.value, notifyErrorEmail);
      login()
    };
  
    inputPasswordLog.onblur = () => {
      inputPasswordLog.value = inputPasswordLog.value.trim();
      checkRequired(inputPasswordLog.value, notifyErrorPassword);
      login()
    };
  
});

