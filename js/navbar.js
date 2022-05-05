document.addEventListener("DOMContentLoaded", init);
  function init() {
    let query = window.matchMedia("(max-width: 991px");

    if(query.matches) {
      const addbg = document.querySelector(".navbar");
      addbg.classList.add("bg-light");
    
    } else {
      window.addEventListener("scroll", function () {
      var header = document.querySelector("nav");
      header.classList.toggle("bg-light", window.scrollY > 0);
  });
    }
  }
