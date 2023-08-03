
    <section class="bg-roundthree">
      <div class="container">
        <div class="row">
          <div class="col-lg-3">
            <h4>Quicks Links</h4>
            <ul>
<li><a href="#">About Us</a></li>
<li><a href="#">Factory</a></li>
<li><a href="#">Clients</a></li>
<li><a href="#">Gallery</a></li>
<li><a href="/global/blog">Blogs</a></li>
<li><a href="#">Contact Us</a></li>
            </ul>
          </div>
          <div class="col-md-3">
            <h4>Products</h4>
            <ul>
              <li>
                <a href="#">One Way Lashing Systems</a>
              </li>
              <li>
                <a href="#">Ratchet Lashing Systems</a>
              </li>
              <li>
                <a href="#">polyester Listing Systems</a>
              </li>
              <li>
                <a href="#">Round Polyester Sling</a>
              </li>
            </ul>
          </div>
          <div class="col-md-3">
            <h4 class="opacity-0">Products</h4>
            <ul>
              <li><a href="#">Polyester Composite Straps</a>
              </li>
              <li><a href="#">Specialized Applications</a>
              </li>
              <li><a href="#">Lashing Tools</a>
              </li>
              <li><a href="#">Accessories</a>
              </li>
            </ul>
          </div>
          <div class="col-md-3">
            <h4>Contact Us</h4>
            <ul>
              <li
                class="list-group-item border-0 d-flex align-items-start mb-2 gap-2 p-0"
                >
                <i class="bi bi-geo-alt-fill fs-5 text-white"></i>
                <a href="" class="text-white text-decoration-none">
                Ambernath West, Maharashtra-421501</a
                  >
              </li>
              <li
                class="list-group-item border-0 text-break d-flex align-items-start mb-2 gap-2 p-0"
                >
                <i class="bi bi-geo-alt-fill fs-5 text-white"></i>
                <a href="" class="text-white text-decoration-none"
                  >Navi-Mumbai-400703, Maharashtra,INDIA.</a
                  >
              </li>
              <li
                class="list-group-item border-0 text-break d-flex align-items-start mb-2 gap-2 p-0"
                >
                <i class="bi bi-envelope-fill fs-5 text-white"></i>
                <a
                  href=""
                  class="text-white text-decoration-none align-self-end"
                  >info@globallashingandlifting.com</a
                  >
              </li>
              <li
                class="list-group-item border-0 text-break d-flex align-items-start mb-2 gap-2 p-0"
                >
                <i class="bi bi-telephone-fill fs-5 text-white"></i>
                <a
                  class="text-white text-decoration-none align-self-end"
                  href=""
                  ><span>+91-9321928016 | 9892365005  </span></a
                  >
              </li>
            </ul>
            <div
              class="iconslinks text-end fs-3 text-white d-flex  gap-5"
              >
              <a href="#" class="nav-link"><i class="bi bi-facebook"></i></a>
              <a href="#" class="nav-link"><i class="bi bi-linkedin"></i></a>
              <a href="#" class="nav-link"><i class="bi bi-instagram"></i></a>
			  <a href="https://www.youtube.com/@Globallashingandlifting" class="nav-link"><i class="bi bi-youtube"></i></a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="copyright-sections footerbgtwo iconslinks text-white">
      <div class="container">
        <div class="row">
          <div class="col-md-4 text-center">
            <a href="#" class="nav-link">2023 All Rights Reserved</a>
          </div>
          <div class="col-md-4 text-center">
            <a href="#" class="nav-link"
              >Terms & Conditions | Privacy Policy
            </a>
          </div>
          <div class="col-md-4 text-center">
            <a href="#" class="nav-link"
              >Designed & Developed by WDDC</a
              >
          </div>
        </div>
      </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script src="script.js"></script>
	
	
	<script>
	document.addEventListener("DOMContentLoaded", function(){
// make it as accordion for smaller screens
if (window.innerWidth < 992) {

  // close all inner dropdowns when parent is closed
  document.querySelectorAll('.navbar .dropdown').forEach(function(everydropdown){
    everydropdown.addEventListener('hidden.bs.dropdown', function () {
      // after dropdown is hidden, then find all submenus
        this.querySelectorAll('.submenu').forEach(function(everysubmenu){
          // hide every submenu as well
          everysubmenu.style.display = 'none';
        });
    })
  });

  document.querySelectorAll('.dropdown-menu a').forEach(function(element){
    element.addEventListener('click', function (e) {
        let nextEl = this.nextElementSibling;
        if(nextEl && nextEl.classList.contains('submenu')) {	
          // prevent opening link if link needs to open dropdown
          e.preventDefault();
          if(nextEl.style.display == 'block'){
            nextEl.style.display = 'none';
          } else {
            nextEl.style.display = 'block';
          }

        }
    });
  })
}
// end if innerWidth
}); 
  
  </script>
  
  
  <script>
  
   $(document).ready(function() {  
   $('#staticBackdrop').on('hide.bs.modal', function (e) {
    $("#video").attr('src','#'); 
})  
   
  }); 
</script>