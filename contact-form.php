<?php session_start() ?>

<form id="form" method="post" action="<?php echo htmlspecialchars('contact-form-email.php');?>">
    <h2 id="contact_us">ЗАЯВИ БЕЗПЛАТНА КОНСУЛТАЦИЯ</h2>
    <input class="contact_inputes" name ="name" placeholder="Име и Фамилия"required>
    <input type="tel" class="contact_inputes" name="phone-number" placeholder="Телeфон"required pattern="\+?[0-9 ]*">
    <input type="email" class="contact_inputes" name="email" placeholder="Имейл"required>
    <textarea id="form-message"class="contact_inputes" name="message"placeholder="Съобщение"></textarea>

      <div class="g-recaptcha" data-sitekey="6Lf82IgqAAAAALJsJgsigTbRciVyxlSsicQrX-7n" data-callback="enableSubmitBtn"></div>
      <button type="submit" name="contact_form_btn" id="contact_btn" disabled="disabled">ИЗПРАЩАНЕ</button>
    

    <div id="contact_span_div">
      <span class="fa fa-phone contact_spans"></span>089 588 1182
      <span class="fa fa-envelope-o contact_spans"></span> bekolingo.info@gmail.com
    </div>
  </form>

  <script src="contact-form.js"></script>
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <script>
    var messageText = "<?= $_SESSION['status']?? ''?>"
    if(messageText != ''){

        Swal.fire({
        title: "Thank you!",
        text: messageText,
        icon: "success"

    });
    <?php unset($_SESSION['status'])?>
}
</script>
  

  
  