const Topbar = document.querySelector(".to-top");

window.addEventListener("scroll" , () => {

 if (window.pageYOffset > 100 ) {
 Topbar.classList.add("active");
 }

 else
 {

 Topbar.classList.remove("active");

 }


})