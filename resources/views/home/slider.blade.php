<style>
.banner_main {
    position: relative;
    box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.5);
    z-index: 2;
}

.carousel-item {
    transition: transform 1s ease, opacity 1s ease;
}

.carousel-item-next,
.carousel-item-prev,
.carousel-item.active {
    display: block;
    opacity: 0;
}

.carousel-item-next.carousel-item-left,
.carousel-item-prev.carousel-item-right,
.carousel-item.active {
    opacity: 1;
}
</style>

<section class="banner_main">
    <div id="myCarousel" class="carousel slide banner" data-ride="carousel" data-interval="5000">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img style="height: 670px; width: 100%" class="first-slide" src="/images/Bedroom Design (1).jpeg" alt="First slide">
                <div class="container">
                </div>
            </div>
            <div class="carousel-item">
                <img style="height: 670px; width: 100%" class="second-slide" src="/images/download (5).jpeg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img style="height: 670px; width: 100%" class="third-slide" src="/images/download (4).jpeg" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    
    <style type="text/css">
         html{
            scroll-behavior: smooth;
         }

   </style>
    
    <div class="booking_ocline">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="book_room">
                    <h1>Ayo Cari Kamar yang Cocok untuk Kamu</h1>
                        <div class="col-md-12">
                            <button class="book_btn">Book Now</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    </div>
</section>