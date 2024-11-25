function openContactForm() {
    document.getElementById("myOverlay").style.display = "block";
  }
  
  function closeContactForm() {
    document.getElementById("myOverlay").style.display = "none";
  }

  function enableSubmitBtn(){
    document.getElementById("contact_btn").disabled = false;
  }