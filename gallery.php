<?php include 'header.php'; ?>
<img src="images/usa.jpg" width="100%" height="90%">
<div class="carousel-caption">
    <h1 class="header-text">Our Gallery</h1>
</div>

<section class="my-5">
        <div class="py-5">
            <h2 class="text-center">Our Gallery</h2>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-4 c0l-12">
                    <img src="images/australia.jpg" class="img-fluid pb-4" width="90%" height="300">
                </div>
                <div class="col-lg-4 col-md-4 c0l-12">
                    <img src="images/australia.jpg" class="img-fluid pb-4" width="90%" height="300">
                </div>
                <div class="col-lg-4 col-md-4 c0l-12">
                    <img src="images/australia.jpg" class="img-fluid pb-4" width="90%" height="300">
                </div>
                <div class="col-lg-4 col-md-4 c0l-12">
                    <img src="images/australia.jpg" class="img-fluid pb-4" width="90%" height="300">
                </div>
                <div class="col-lg-4 col-md-4 c0l-12">
                    <img src="images/australia.jpg" class="img-fluid pb-4" width="90%" height="300">
                </div>
                <div class="col-lg-4 col-md-4 c0l-12">
                    <img src="images/australia.jpg" class="img-fluid pb-4" width="90%" height="300">
                </div>
                <div class="col-lg-4 col-md-4 c0l-12">
                    <img src="images/australia.jpg" class="img-fluid pb-4" width="90%" height="300">
                </div>
                <div class="col-lg-4 col-md-4 c0l-12">
                    <img src="images/australia.jpg" class="img-fluid pb-4" width="90%" height="300">
                </div>
                <div class="col-lg-4 col-md-4 c0l-12">
                    <img src="images/australia.jpg" class="img-fluid pb-4" width="90%" height="300">
                </div>
                <div class="col-lg-4 col-md-4 c0l-12">
                    <img src="images/australia.jpg" class="img-fluid pb-4" width="90%" height="300">
                </div>
            </div>
        </div>
    </section>

    <!-- message section -->
    <section class="my-5">
        <div class="py-5">
            <h2 class="text-center">Leave Your Comment</h2>
        </div>
        <div class="w-50 m-auto">
            <form action="userinfo.php" method="post">
                <div class="form-group">
                    <label>Username</label>
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
                    <label>Comments</label>
                    <textarea class="form-control" name="comment s"></textarea>
                </div>
                <button type="submit" class="btn btn-success">Submit</button>
            </form>
        </div>
    </section>

<?php include 'footer.php'; ?>