closeAll = () => {
    Array.from(document.getElementsByClassName("text")).forEach((el) => {
      el.className = "text"
    })
    Array.from(document.getElementsByClassName("open-btn")).forEach((el) => {
      el.className = "open-btn"
      el.innerHTML = "v";
    })
  }
  activeState = (event)  => {
    const el = event.target
    if (el.className == "open-btn") {
        el.className = "open-btn active";
        el.innerHTML = "^";
        this.getSibblingBySelector(el.parentElement, ".text").className = "text open";
    }
    else if (el.className == "open-btn active") {
        el.className = "open-btn";
        el.innerHTML = "v";
        this.getSibblingBySelector(el.parentElement, ".text").className = "text";
    }
  }

  getSibblingBySelector = (el, selector) => {
    let sibling = el.nextElementSibling;
    while (sibling) {
        if (sibling.matches(selector)) return sibling;
        sibling = sibling.nextElementSibling;
    }
    return;
  } 