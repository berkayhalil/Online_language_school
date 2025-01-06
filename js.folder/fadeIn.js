document.addEventListener("DOMContentLoaded", () => {
    const fadeInBottom = document.querySelectorAll(".fadeInBottom");
    const fadeInRight = document.querySelectorAll(".fadeInRight");
    const fadeInLeft = document.querySelectorAll(".fadeInLeft");

    const observerOptions = {
      threshold: 0.4, 
    };
  
    const observer = new IntersectionObserver((entries, observer) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add("visible"); 
          observer.unobserve(entry.target); 
        }
      });
    }, observerOptions);
  
    fadeInBottom.forEach(element => observer.observe(element));
    fadeInRight.forEach(element => observer.observe(element))
    fadeInLeft.forEach(element => observer.observe(element))
  });