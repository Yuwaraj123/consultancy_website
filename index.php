 <?php include 'header.php'; ?>

 <div id="demo" class="carousel slide" data-ride="carousel">

     <!-- Indicators -->
     <ul class="carousel-indicators">
         <li data-target="#demo" data-slide-to="0" class="active"></li>
         <li data-target="#demo" data-slide-to="1"></li>
         <li data-target="#demo" data-slide-to="2"></li>
     </ul>

     <!-- The slideshow -->
     <div class="carousel-inner">
         <div class="carousel-item active">
             <img src="images/background.webp" width="1100" height="500">
         </div>
         <div class="carousel-item">
             <img src="images/canada.jpg" width="1100" height="500">
         </div>
         <div class="carousel-item">
             <img src="images/new zealand.jpg" width="1100" height="500">
         </div>
     </div>

     <!-- Left and right controls -->
     <a class="carousel-control-prev" href="#demo" data-slide="prev">
         <span class="carousel-control-prev-icon"></span>
     </a>
     <a class="carousel-control-next" href="#demo" data-slide="next">
         <span class="carousel-control-next-icon"></span>
     </a>
 </div>

 <!-- about us -->
 <section class="my-5">
     <div class="py-5">
         <h2 class="text-center">About Us</h2>
     </div>
     <div class="container-fluid">
         <div class="row">
             <div class="col-lg-6 col-md-6 col-12">
                 <img src="images/background.webp" class="img-fluid aboutimg">
             </div>
             <div class="col-lg-6 col-md-6 col-12">
                 <h2 class="display-4">Our Vision</h2>
                 <p class="py-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus mollitia placeat officiis ea soluta magnam cum excepturi consectetur eos nisi dicta laboriosam, consequuntur ipsam sed ipsum tenetur accusamus sint quas.</p>
                 <a href="about.php" class="btn btn-success">Check More</a>
             </div>
         </div>
     </div>
 </section>

 <!-- student says -->
 <section class="my-5">
     <div class="py-5">
         <h2 class="text-center">What Our Students Says</h2>
     </div>
     <div class="container-fluid">
         <div class="row">
             <div class="col-lg-4 col-md-4 c0l-12">
                 <img src="images/boy.jpg" class="rounded-circle" alt="...">
                 <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam eveniet porro veritatis odit totam vel dolores ea. Sapiente, non mollitia minima fuga fugit hic id! Corrupti deleniti eaque neque aliquid.</p>
                 <a href="#" class="btn btn-success">See More</a>
             </div>
             <div class="col-lg-4 col-md-4 c0l-12">
                 <img src="images/student.jpg" class="rounded-circle" alt="...">
                 <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam eveniet porro veritatis odit totam vel dolores ea. Sapiente, non mollitia minima fuga fugit hic id! Corrupti deleniti eaque neque aliquid.</p>
                 <a href="#" class="btn btn-success">See More</a>
             </div>
             <div class="col-lg-4 col-md-4 c0l-12">
                 <img src="images/girl.jpg" class="rounded-circle" alt="...">
                 <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam eveniet porro veritatis odit totam vel dolores ea. Sapiente, non mollitia minima fuga fugit hic id! Corrupti deleniti eaque neque aliquid.</p>
                 <a href="#" class="btn btn-success">See More</a>
             </div>
         </div>
     </div>
 </section>

 <!-- our blogs -->
 <section class="my-5 text-center">
     <div class="py-5">
         <h2>Our Blogs</h2>
     </div>
     <div class="row row-cols-1 row-cols-md-3 g-4">
         <div class="col">
             <div class="card h-100">
                 <img src="images/usa.jpg" class="card-img-top" alt="...">
                 <div class="card-body">
                     <h5 class="card-title">Our Classes</h5>
                     <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                 </div>
             </div>
         </div>
         <div class="col">
             <div class="card h-100">
                 <img src="images/uk.jpg" class="card-img-top" alt="...">
                 <div class="card-body">
                     <h5 class="card-title">Our Students</h5>
                     <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore consequatur rem alias quia tenetur perferendis dolores saepe libero, quam reprehenderit eligendi sapiente necessitatibus ea, amet, exercitationem itaque obcaecati a vel.</p>
                 </div>
             </div>
         </div>
         <div class="col">
             <div class="card h-100">
                 <img src="images/australia.jpg" class="card-img-top" alt="...">
                 <div class="card-body">
                     <h5 class="card-title">Our Management</h5>
                     <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                 </div>
             </div>
         </div>
     </div>
 </section>

 <section class="text-center card text-bg-black" id="contact-link">
     <img src="images/background.webp" width="600" height="400" class="card-img" alt="...">
     <div class="card-img-overlay my-5">
         <h2 class="text-center">Get In Touch</h2>
         <p class="ctext-center">This is a wider card with supporting text below as a natural lead-in to <br>additional content. This content is a little bit longer.</p>
         <a href="contact.php" class="btn btn-success">Contact Us</a>
     </div>
 </section>



 <?php include 'footer.php'; ?>