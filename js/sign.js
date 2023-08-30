var studentEmail = document.querySelector("#id-email");
const signInput = document.querySelectorAll(".sign-input");
const signBtn = document.querySelector(".sign-button");
const inputRadio = document.querySelector(".input-radio");
const inputCheck = document.querySelector(".input-check");
const signCheck = document.querySelectorAll(".sign-check");
const signSelect = document.querySelector(".sign-select");

signBtn.addEventListener("click", function () {
  signInput.forEach((item) => {
    if (item.value.length === 0) {
      item.style.backgroundColor = "yellow";
    } else {
      item.style.backgroundColor = "transparent";
    }
  });
  checkRadio();
  checkHobby();
  checkNational();
});
checkEmail();
function checkEmail() {
  studentEmail.addEventListener("input", function (e) {
    const value = e.target.value;
    const regexEmail =
      /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|.(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if (regexEmail.test(value.trim())) {
      this.style.backgroundColor = "transparent";
      document.getElementById("result").innerHTML =
        "valid email" +
        "<box-icon name='check-circle' type='solid' color='#46e028' ></box-icon>";
    } else {
      this.style.backgroundColor = "yellow";
      document.getElementById("result").innerHTML =
        "unvalid email" +
        "<box-icon name='x-circle' type='solid' color='#e20c39' ></box-icon>";
    }
    if (!value) {
      this.style.backgroundColor = "transparent";
      document.getElementById("result").innerHTML = "";
    }
  });
}
function checkRadio() {
  var radios = document.getElementsByName("gender");
  if (radios[0].checked == false && radios[1].checked == false) {
    inputRadio.style.backgroundColor = "yellow";
  } else {
    inputRadio.style.backgroundColor = "transparent";
  }
}
function checkHobby() {
  arrCheck = [];
  signCheck.forEach((item) => {
    var value = item.checked;
    arrCheck.push(value);
  });
  let count = 0;
  for (i = 0; i < arrCheck.length; i++) {
    if (arrCheck[i] === true) {
      count++;
    }
    if (count === 0) {
      inputCheck.style.backgroundColor = "yellow";
    } else {
      inputCheck.style.backgroundColor = "transparent";
    }
  }
}
function checkNational() {
  if (signSelect.value === "") {
    signSelect.style.backgroundColor = "yellow";
  } else {
    signSelect.style.backgroundColor = "transparent";
  }
}
