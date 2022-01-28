


    const hamburger = document.querySelector(".hamburger");
    const navMenu = document.querySelector(".nav-menu");
    
    
    hamburger.addEventListener("click", mobileMenu);
    navMenu.addEventListener("click", mobileReturn);
    
    
    function mobileMenu()  {   
        hamburger.classList.toggle("active");
        navMenu.classList.toggle("active");
    }
    
    function mobileReturn()  {
        navMenu.classList.toggle("active", false);
        hamburger.classList.toggle("active", false);
    }
    