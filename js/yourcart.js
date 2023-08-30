function changePrice() {
  var arrPrice = document.getElementsByName("price");
  var priceChoice = document.getElementById("getPrice").value;
  for (i = 0; i < arrPrice.length; i++) {
    var price = arrPrice[i].innerText;
    if (price <= priceChoice || priceChoice == -1) {
      arrPrice[i].parentNode.style.display = "";
    } else {
      arrPrice[i].parentNode.style.display = "none";
    }
  }
  moneyTotal();
}
//check and uncheck
function checkQuantity(item) {
  var arrQuantity = document.getElementsByName("quanty");
  arrQuantity[item].disabled = !arrQuantity[item].disabled;
  if (arrQuantity[item].disabled == true) {
    arrQuantity[item].value = 0;
    arrQuantity[item].parentNode.parentNode.parentNode.children[4].innerText =
      "";
  }
  moneyTotal();
}
//calculate Money
function calculateMoney(obj) {
  var changeQuantity = obj.value;
  var parent = obj.parentNode.parentNode;
  var changePrice = parent.parentNode.children[2].innerText;
  var money = (changePrice * changeQuantity).toFixed(2);
  parent.parentNode.children[4].innerText = money;
  console.log(money);
  moneyTotal();
}

function moneyTotal() {
  var moneyTotal = 0;
  var arrMoney = document.getElementsByName("totalMoney");
  for (var i = 0; i < arrMoney.length; i++) {
    if (arrMoney[i].parentNode.style.display == "") {
      var totalCount = arrMoney[i].innerText;
      var money = Number((totalCount * 100) / 100);
      moneyTotal += money;
    }
  }
  document.getElementById("calTotal").innerText = "$" + moneyTotal;
}

// alert
function renderSweetAlert() {
  var totalInfor = document.getElementById("calTotal").innerText;
  const template = `<div class="sweet-alert">
        <i class="fa fa-check sweet-icon"> </i>
        <p class="sweet-text">
          Your order is been processed
          <br>
          Total : ${totalInfor}
        </p>
      </div>`;
  document.body.insertAdjacentHTML("beforeend", template);
}
const button = document.querySelector(".cart-checkout");
button.addEventListener("click", function () {
  renderSweetAlert();
  const sweetItem = document.querySelector(".sweet-alert");
  if (sweetItem) {
    setTimeout(function () {
      sweetItem.parentElement.removeChild(sweetItem);
    }, 2000);
  }
});
