// Globals
const global = {
  body: document.querySelector("body")
}


// Modules

// header
const header = (function(){
  const content = {
    headerBurger: document.querySelector(".burger"),
    headerNav: document.querySelector(".header__nav")
  }
    
  const burgerToggle = function() {
    // toggle to mobile menu when burger icon is clicked
    content.headerBurger.addEventListener("click", function() {
      this.classList.toggle("active");
      content.headerNav.classList.toggle("open");
      global.body.classList.toggle("overflow-hidden");
    });
  }

  return {
    callBurgerToggle: function() {
      burgerToggle();
    }
  }
})();

header.callBurgerToggle();
