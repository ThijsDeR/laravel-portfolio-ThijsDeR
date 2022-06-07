closeAll = () => {
    Array.from(document.getElementsByClassName("text")).forEach((el) => {
      el.className = "text";
    })
    Array.from(document.getElementsByClassName("show-btn")).forEach((el) => {
      el.className = "show-btn";
    })
    Array.from(document.getElementsByClassName("open-btn")).forEach((el) => {
      el.className = "open-btn";
      el.innerHTML = "v";
    })
  }
  
  activeState = (event)  => {
    let el = event.target
    if (el.className == "open-btn") {
        el.className = "open-btn active";
        el.innerHTML = "^";
        this.getSibblingBySelector(el.parentElement, ".text").className = "text open";
        this.getSibblingBySelector(el.parentElement, ".show-btn").className = "show-btn open";
    }
    else if (el.className == "open-btn active") {
        el.className = "open-btn";
        el.innerHTML = "v";
        this.getSibblingBySelector(el.parentElement, ".text").className = "text";
        this.getSibblingBySelector(el.parentElement, ".show-btn").className = "show-btn";
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

document.querySelector('div#create-faq-button').addEventListener('click', () => {
  window.location = './faq/create'
})