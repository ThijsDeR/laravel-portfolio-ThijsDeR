scrollToTop = (elementId) => {
  let el = document.getElementById(elementId);
  el.scrollTop = 0;
}
burgerMenuToggle = () => {
  let main = document.getElementById("main");
  let menuBtn = document.getElementById('menu-btn');
  let closeBtn = document.getElementById('close-btn');
  let navList = document.getElementById('nav-list');

  if (main.className == "" && menuBtn.className == "active") {
    main.className = "hidden";
    menuBtn.className = ''
    closeBtn.className = 'active'
    navList.className = 'active'
  }
  else if (main.className == "hidden" && menuBtn.className == "") {
    main.className = "";
    menuBtn.className = 'active'
    closeBtn.className = ''
    navList.className = ''
  }

}
getSibblingBySelector = (el, selector) => {
  var sibling = el.nextElementSibling;
  while (sibling) {
    if (sibling.matches(selector)) return sibling;
    sibling = sibling.nextElementSibling;
  }
  return;
}
getChildBySelector = (el, selector) => {
  var childs = el.children;
  for (let i = 0; i < childs.length; i++) {
    if (childs[i].matches(selector)) return childs[i];
  }
  return;
}
