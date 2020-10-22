function postXML() {
  let el = document.getElementsByClassName("formVal");
  let formData = new FormData();
  for (let i = 0; i < el.length; i++) {
    formData.append(el[i].name, el[i].value);
  }
  let xmlHttp = new XMLHttpRequest();

  xmlHttp.onreadystatechange = function () {
    if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {
      if (!isNaN(xmlHttp.responseText)) {
        document.getElementById("error").style.display = "none";
        document.getElementById("error").innerHTML = "";
        document.getElementById("result").value = xmlHttp.responseText;
      } else if (xmlHttp.responseText == "divByZero") {
        document.getElementById("error").innerHTML = "Делить на ноль? Получится бесконечность.";
        document.getElementById("error").style.display = "block";
      } else {
        document.getElementById("error").innerHTML = "Не удалось определить операцию.";
        document.getElementById("error").style.display = "block";
      }
    }    
  }

  xmlHttp.open("post", "modules/server.php");
  xmlHttp.send(formData);
}