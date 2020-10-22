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

function cart($th, $id) {
  //document.cookie = "cart=1;expires=Thu, 01 Jan 1970 00:00:00 GMT";

  if (!document.cookie.match("cart1")) {
    document.cookie = "cart1=0";
  } else {
    let goodCount = document.cookie.match("cart").input.split("=")[1];
    goodCount++;
    document.cookie = "cart=" + goodCount;
  }

  // let goodCount = 0;
  // if (!document.cookie.match("cart")) {
  //   goodCount++;
  //   document.cookie = "cart=" + goodCount;
  // } else {
  //   goodCount = document.cookie.match("cart").input.split("=")[1];
  //   goodCount++;
  //   document.cookie = "cart=" + goodCount;
  // }
  
  // let cart = document.querySelector(".menu-cart");
  // cart.innerHTML = "Корзина " + goodCount;
}