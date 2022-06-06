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