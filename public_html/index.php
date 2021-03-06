<?php 

define('__ROOT__', dirname(dirname(__FILE__))); 
require_once(__ROOT__.'/resources/config.php'); 

include "$userLocale.php";
include 'header.php';

?>

<div class="content fullpage homepage">

<!-- banner & block -->
    <div class="col-md-6 col-sm-8  banner height-full  animated fadeInDownBig">
    	<div id="BannerCarousel" class="carousel slide  height-full" data-ride="carousel">
    	 <div class="carousel-inner  height-full">
        	<div class="item active  height-full">
                <img src="images/slide1.jpg" class="img-responsive" alt="slide">
                <div class="caption"><h2 class="animated fadeInDown">Leading brand of London & Paris</h2>
                <p class="animated fadeInUp">Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                <a href="collections.php" class="btn btn-default animated fadeInLeftBig">View Products</a> <a href="lookbook.php" class="btn btn-default animated fadeInRightBig">Lookbook</a>
                </div>
            </div>
        	<div class="item  height-full">
                <img src="images/slide2.jpg"  class="img-responsive" alt="slide">
                <div class="caption"><h2  class="animated fadeInDown">Leading brand of London & Paris</h2>
                <p class="animated fadeInUp">Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                <a href="collections.php" class="btn btn-default animated fadeInLeftBig">View Products</a> <a href="lookbook.php" class="btn btn-default animated fadeInRightBig">Lookbook</a>
                </div>
            </div>
            <div class="item  height-full">
                <img src="images/slide3.jpg"  class="img-responsive" alt="slide">
                <div class="caption"><h2  class="animated fadeInDown">Leading brand of London & Paris</h2>
                <p class="animated fadeInUp">Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                <a href="collections.php" class="btn btn-default animated fadeInLeftBig">View Products</a> <a href="lookbook.php" class="btn btn-default animated fadeInRightBig">Lookbook</a>
                </div>
            </div>
            <div class="item  height-full">
                <img src="images/slide4.jpg"  class="img-responsive" alt="slide">
                <div class="caption"><h2  class="animated fadeInDown">Leading brand of London & Paris</h2>
                <p class="animated fadeInUp">Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                <a href="collections.php" class="btn btn-default animated fadeInLeftBig">View Products</a> <a href="lookbook.php" class="btn btn-default animated fadeInRightBig">Lookbook</a>
                </div>
            </div>
        </div>
        <!-- Controls -->
        <a class="left carousel-control" href="#BannerCarousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
        <a class="right carousel-control" href="#BannerCarousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
        </div>
    </div>
    <div class="col-md-6 col-sm-4 height-full">
        <div class="height-full">
            <div class="col-md-6 col-xs-12 height-half animated fadeInUp"><div class="block height-full women "><a href="collections.php" class="info animated fadeInDown"><h3>women</h3><span>21459 Products</span></a></div></div>
            <div class="col-md-6 col-xs-12 height-half animated fadeInDown"><div class="block height-full store"><div class="overlay"><div class="store-info"><div class="desc"><h4>Over 2500 products</h4><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p><a href="contact.php"  class="btn btn-default">our store</a></div></div></div></div></div>
            <div class="col-md-6 col-xs-12 height-half animated fadeInDown"><div class="block height-full men"><a href="collections.php" class="info animated fadeInDown"><h3>men</h3><span>1874 Products</span></a></div></div>
            <div class="col-md-6 col-xs-12 height-half animated fadeInUp"><div class="block height-full couple"><a href="collections.php" class="info animated fadeInDown"><h3>Gifts</h3><span>398 Products</span></a></div></div>            
        </div>
    </div>
   

<!-- banner & block -->



</div>
<?php include 'footer.php';?>