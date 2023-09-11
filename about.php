<?php include 'header.php'; ?>
<img src="images/usa.jpg" width="100%" height="90%">

<!-- experiences -->
<section class="my-5">
     <div class="py-5">
         <h2 class="text-center">7 Years of Experiences</h2>
     </div>
     <div class="container-fluid">
         <div class="row">
             <div class="col-lg-6 col-md-6 col-12">
                 <img src="images/background.webp" class="img-fluid aboutimg">
             </div>
             <div class="col-lg-6 col-md-6 col-12">
                 <p class="py-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus mollitia placeat officiis ea soluta magnam cum excepturi consectetur eos nisi dicta laboriosam, consequuntur ipsam sed ipsum tenetur accusamus sint quas. Lorem ipsum dolor sit amet consectetur adipisicing elit. Et id pariatur eum corrupti iure modi quam quisquam cumque accusantium illum repellat quo debitis non iusto deleniti, esse sed voluptates odio. Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore qui ipsam quia adipisci nam, eveniet illum. Modi neque quod nostrum assumenda dicta, eaque, a quo quisquam dignissimos fugit repellat recusandae. Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat sequi voluptatem ratione eligendi cum cupiditate possimus totam delectus. Alias quod reprehenderit neque adipisci dolorem ducimus maiores praesentium voluptatem nemo blanditiis. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellendus officia ut eos magnam delectus pariatur neque totam sit voluptate. Labore dolores placeat nam ipsum hic at fugit architecto deserunt eos.</p>
            </div>
         </div>
     </div>
 </section>

 <!-- services section -->
<section class="my-5">
    <div class="py-5">
        <h2 class="text-center">Our Services</h2>
    </div>
    <div class="container-fluid">
        <div class="row">

            <div class="col-lg-4 col-md-4 col-12">
                <div class="card">
                    <img class="card-img-top" src="images/background.webp" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">Hello Nepal</h4>
                        <p class="card-text">Some example text.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-12">
                <div class="card">
                    <img class="card-img-top" src="images/usa.jpg" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">Hello Nepal</h4>
                        <p class="card-text">Some example text.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-12">
                <div class="card">
                    <img class="card-img-top" src="images/uk.jpg" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">Hello Nepal</h4>
                        <p class="card-text">Some example text.</p>
                        <!-- <a href="#" class="btn btn-primary">See Profile</a> -->
                    </div>
                </div>
            </div>
        </div>
</section>

<!-- Our Team -->
<section class="my-5">
    <div class="py-5">
        <h2 class="text-center">Our Team</h2>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-4 c0l-12">
                <img src="images/boy.jpg" class="rounded-pill" width="90%" height="300" alt="...">
                <h3 class="text-center my-3">Chairperson of Our Family</h3>
                <p class="text-center">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
            <div class="col-lg-4 col-md-4 c0l-12">
                <img src="images/student.jpg" class="rounded-pill" width="90%" height="300" alt="...">
                <h3 class="text-center my-3">Lectural</h3>
                <p class="text-center">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
            <div class="col-lg-4 col-md-4 c0l-12">
                <img src="images/girl.jpg" class="rounded-pill" width="90%" height="300" alt="...">
                <h3 class="text-center my-3">Management Head</h3>
                <p class="text-center">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
        </div>
    </div>
</section>

<!-- message section -->
<section class="my-5">
        <div class="py-5">
            <h2 class="text-center">We Want Your Advice</h2>
        </div>
        <div class="w-50 m-auto">
            <form action="userinfo.php" method="post">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="user" autocomplete="off" class="form-control">
                </div>
                <div class="form-group">
                    <label>Email Id</label>
                    <input type="text" name="email" autocomplete="off" class="form-control">
                </div>
                <div class="form-group">
                    <label>Contact</label>
                    <input type="text" name="contact" autocomplete="off" class="form-control">
                </div>
                <div class="form-group">
                    <label>Messages...</label>
                    <textarea class="form-control" name="message s"></textarea>
                </div>
                <button type="submit" class="btn btn-success">Send...</button>
            </form>
        </div>
    </section>

<?php include 'footer.php'; ?>