document.addEventListener("DOMContentLoaded", () => {
    const boxes = document.querySelectorAll(".box");
  
    const observerOptions = {
      threshold: 0.5, // Trigger when 50% of the box is visible
    };
  
    const observer = new IntersectionObserver((entries, observer) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add("visible"); // Add the visible class
          observer.unobserve(entry.target); // Stop observing once visible
        }
      });
    }, observerOptions);
  
    boxes.forEach(box => observer.observe(box));
  });