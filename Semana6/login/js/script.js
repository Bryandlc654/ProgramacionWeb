document.getElementById("btnregister").addEventListener("click", function () {
  const loginCard = document.getElementById("loginCard");
  const btnRegisterContainer = document.getElementById("btnRegisterContainer");
  const registerCard = document.getElementById("registerCard");
  const btnLoginContainer = document.getElementById("btnLoginContainer");

  loginCard.style.display = "none";
  btnRegisterContainer.style.display = "none";

  registerCard.style.display = "flex";
  btnLoginContainer.style.display = "flex";

  registerCard.classList.add("animate-card");
  btnLoginContainer.classList.add("animate-card-btnregister");

  registerCard.addEventListener("animationend", function () {
    registerCard.style.transform = "translateX(100%)";
    registerCard.classList.remove("animate-card");
  });

  btnLoginContainer.addEventListener("animationend", function () {
    btnLoginContainer.style.transform = "translateX(-100%)";
    btnLoginContainer.classList.remove("animate-card-btnregister");
  });
});

document.getElementById("btnlogin").addEventListener("click", function () {
  const loginCard = document.getElementById("loginCard");
  const btnRegisterContainer = document.getElementById("btnRegisterContainer");
  const registerCard = document.getElementById("registerCard");
  const btnLoginContainer = document.getElementById("btnLoginContainer");

  registerCard.style.display = "none";
  btnLoginContainer.style.display = "none";

  loginCard.style.display = "flex";
  btnRegisterContainer.style.display = "flex";

  loginCard.classList.add("animate-card-end");
  btnRegisterContainer.classList.add("animate-card-btnregister-end");

  loginCard.addEventListener("animationend", function () {
    loginCard.style.transform = "translateX(0)";
    loginCard.classList.remove("animate-card-end");
  });

  btnRegisterContainer.addEventListener("animationend", function () {
    btnRegisterContainer.style.transform = "translateX(0)";
    btnRegisterContainer.classList.remove("animate-card-btnregister-end");
  });
});
