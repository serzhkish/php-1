function postXML() {
  let el = document.getElementsByClassName("formVal");
  let formData = new FormData();
  for (let i = 0; i < el.length; i++) {
    formData.append(el[i].name, el[i].value);
  }
  let author = formData.getAll("author")[0];
  let txt = formData.getAll("txt")[0];
  
  let xmlHttp = new XMLHttpRequest();

  xmlHttp.onreadystatechange = function () {
    if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {
      let dateNow = xmlHttp.responseText;
      let review = `<p class="review-show-author">${author}</p>
                    <p class="review-show-date">${dateNow}</p>
                    <p class="review-show-txt">${txt}</p>`;
      let reviewDiv = document.getElementsByClassName("review-wrp")[0];
      let newReview = document.createElement("div");
      newReview.classList.add("review-wrp");
      newReview.innerHTML = review;
      reviewDiv.before(newReview);
    }
  }

  xmlHttp.open("post", "modules/review-add.php");
  xmlHttp.send(formData);
}

function postReg() {
  let data = $(".reg-form").find("input").serialize();
  $.post("modules/reg-ajax.php", {'data': data})
    .done(function(outData) {
      if (outData == "1") {
        window.location.replace("http://lesson-06-ok/shop/index.php");
      }
    });
}

function postCartAdd(th, id) {
  $.post("modules/cart-ajax-add.php", {'id': id})
    .done(function(outData) {
      let outDataJSON = JSON.parse(outData);
      console.log(outData);
      if (outDataJSON.num == "0") {
        let crt = document.querySelector(".menu-cart");
        let infoMessage = `Корзина ${outDataJSON.goodCount}`;
        crt.innerHTML = infoMessage;
      }
      //if (outData == "1") {
        //console.log("Error");
      //} 
    });
}

function postCartRemove(th, id) {
  $.post("modules/cart-ajax-remove.php", {'id': id})
    .done(function(outData) {
      let outDataJSON = JSON.parse(outData);
      console.log(outData);
      if (outDataJSON.num == "0") {
        //th.parentNode.style.display = "none";
        window.location.replace("http://lesson-06-ok/shop/cart.php");
      }
      //if (outData == "1") {
        //console.log("Error");
      //} 
    });
}