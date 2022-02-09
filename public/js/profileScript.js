listFunction = () => {
  var listLinks = document.getElementById("links-list").children;
  for (let i = 0; i < listLinks.length; i++) {
    listLinks[i].addEventListener("mouseenter", function (event) {
      document.getElementById(listLinks[i].className).style.transition = '1s';
      document.getElementById(listLinks[i].className).style.transform = 'translateX(20px)';

    }, false)

    listLinks[i].addEventListener("mouseleave", function (event) {
      document.getElementById(listLinks[i].className).style.transition = '1s';
      document.getElementById(listLinks[i].className).style.transform = 'translateX(0px)';

    }, false)
  };

}

toggleLinks = (event) => {
  var links = document.getElementById("links");
  var section = document.getElementById("section");
  let el = event.target
  if (el.className == "") {
    el.className = "active";
    el.innerHTML = "<";
    links.className = "active";
    section.className = "";
  }
  else if (el.className == "active") {
    el.className = "";
    el.innerHTML = ">";
    links.className = "";
    section.className = "active";

  }
}

scrollToElement = (elementId) => {
  document.getElementById(elementId).scrollIntoView({ behavior: "smooth", block: "start", inline: "nearest" })
}


