<div class="menu">

  <!-- Search -->
  <!-- <div class="menu_search">
    <form action="#" id="menu_search_form" class="menu_search_form">
      <input type="text" class="search_input" placeholder="Search Item" required="required">
      <button class="menu_search_button"><img src="<?= base_url() ?>assets/main/images/search.png" alt=""></button>
    </form>
  </div> -->
  <!-- Navigation -->
  <div class="menu_nav">
    <ul>
      <li><a href="<?= base_url('web') ?>">Home</a></li>
    </ul>
  </div>
  <!-- Contact Info -->
  <div class="menu_contact">
    <div class="menu_phone d-flex flex-row align-items-center justify-content-start">
      <div>
        <div><img src="<?= base_url() ?>assets/main/images/phone.svg" alt="https://www.flaticon.com/authors/freepik" onclick="contact_us()"></div>
      </div>
      <div onclick="contact_us()">+62 8132-9682-911</div>
    </div>
    <div class="menu_social">
      <ul class="menu_social_list d-flex flex-row align-items-start justify-content-start">
        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
        <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
      </ul>
    </div>
  </div>
</div>