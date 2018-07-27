<?php
include("header.php"); 
$id=$_GET['id'];
$table_data="product";
$sel=db_select($table_data, $fields='*',"id=$id", $orderBy = '');
foreach($sel as $key => $value)
                    {   $id=$value['id'];
                        $title=$value['title'];
                        $parent_id=$value['parent_id'];
                        $child_id=$value['child_id'];
                        $description=$value['description'];
                        $status=$value['status'];
                        $created_date=$value['created_date'];
                        $updated_date=$value['updated_date'];
                        $image=$value['image'];
                        $tags=$value['tags'];
                        $prize=$value['prize'];
                        $skq=$value['skq'];
                    }
                    $show_qry = "SELECT title FROM product_category where id=$parent_id";
                    $res =mysqli_query($conn, $show_qry);
                    $data_row = mysqli_fetch_assoc($res);
                    $cate=$data_row["title"];
                    $show_qry1 = "SELECT title FROM product_sub_category where id=$child_id";
                    $res1 =mysqli_query($conn, $show_qry1);
                    $data_row1 = mysqli_fetch_assoc($res1);
                    $sub_cate=$data_row1["title"];
                
?>
      <!--Page Header-->
      <header class="page-header common-header bgc-dark-o-5">
        <div data-parallax="scroll" data-image-src="assets/images/background/background-01.jpg" data-speed="0.3" class="parallax-background"></div>
        <div class="container text-right">
          <div class="left">
            <h1 class="text-responsive size-3 nmb"><?php echo $title;?></h1>
          </div>
        </div>
        <div class="ab-bottom col-xs-12">
          <div class="container">
            <div class="breadcrumb bgc-dark-o-6"><span class="__title font-heading fz-6-s">YOU ARE HERE :</span><span class="__content italic font-ubuntu fz-6-ss"><span><a href="index.html">Home</a></span><span><a href="#">Shop</a></span><span><a href="#">Shop Detail</a></span></span></div>
          </div>
        </div>
      </header>
      <!--End Page Header-->
      <!--Page Body-->
      <div id="page-body" class="page-body">
        <section class="page-section no-padding-bottom border-bottom-lighter">
          <div class="container">
            <div class="row">
              <div class="col-lg-6 col-md-5 col-sm-6 col-sm-12 product-thumbnail-slider-wrapper fullwidth magnific-gallery no-zoom-effect mb-70">
                <div class="product-thumbnail-slider">
                  <div class="product-syn-slider-1-wrapper">
                    <div class="product-syn-slider-1 syn-slider-1 direction-nav">
                      <div class="block-product-slider">
                        <div data-mfp-src="../admin/images/<?php echo $image; ?>" class="__image zoom-button img-wrapper"><img src="../admin/images/<?php echo $image; ?>" style="width:450px; height:550px;" alt="Product slider image"/></div>
                      </div>
                      <div class="block-product-slider">
                        <div data-mfp-src="../admin/images/<?php echo $image; ?>" class="__image zoom-button img-wrapper"><img src="../admin/images/<?php echo $image; ?>" style="width:450px; height:550px;" alt="Product slider image"/></div>
                      </div>
                      <div class="block-product-slider">
                        <div data-mfp-src="../admin/images/<?php echo $image; ?>" class="__image zoom-button img-wrapper"><img src="../admin/images/<?php echo $image; ?>" style="width:450px; height:550px;" alt="Product slider image"/></div>
                      </div>
                      <div class="block-product-slider">
                        <div data-mfp-src="assets/images/shop/product-img-11-l.jpg" class="__image zoom-button img-wrapper"><img src="../admin/images/<?php echo $image; ?>" style="width:450px; height:550px;" alt="Product slider image"/></div>
                      </div>
                      <div class="block-product-slider">
                        <div data-mfp-src="assets/images/shop/product-img-13-l.jpg" class="__image zoom-button img-wrapper"><img src="../admin/images/<?php echo $image; ?>" style="width:450px; height:550px;" alt="Product slider image"/></div>
                      </div>
                      <div class="block-product-slider">
                        <div data-mfp-src="assets/images/shop/product-img-14-l.jpg" class="__image zoom-button img-wrapper"><img src="../admin/images/<?php echo $image; ?>" style="width:450px; height:550px;" alt="Product slider image"/></div>
                      </div>
                    </div>
                  </div>
                  <div class="product-syn-slider-2-wrapper">
                    <div class="product-syn-slider-2 syn-slider-2 v-mode">
                      <div class="block-product-slider">
                        <div class="__image text-center overlay-container"><img src="../admin/images/<?php echo $image; ?>" style="width:100px;height:120px;">
                          <div class="overlay bgc-light-o-5"></div>
                        </div>
                      </div>
                      <div class="block-product-slider">
                        <div class="__image text-center overlay-container"><img src="../admin/images/<?php echo $image; ?>" style="width:100px;height:120px;">
                          <div class="overlay bgc-light-o-5"></div>
                        </div>
                      </div>
                      <div class="block-product-slider">
                        <div class="__image text-center overlay-container"><img src="../admin/images/<?php echo $image; ?>" style="width:100px;height:120px;">
                          <div class="overlay bgc-light-o-5"></div>
                        </div>
                      </div>
                      <div class="block-product-slider">
                        <div class="__image text-center overlay-container"><img src="../admin/images/<?php echo $image; ?>" style="width:100px;height:120px;">
                          <div class="overlay bgc-light-o-5"></div>
                        </div>
                      </div>
                      <div class="block-product-slider">
                        <div class="__image text-center overlay-container"><img src="../admin/images/<?php echo $image; ?>" style="width:100px;height:120px;">
                          <div class="overlay bgc-light-o-5"></div>
                        </div>
                      </div>
                      <div class="block-product-slider">
                        <div class="__image text-center overlay-container"><img src="../admin/images/<?php echo $image; ?>" style="width:100px;height:120px;">
                          <div class="overlay bgc-light-o-5"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-md-7 col-sm-6 col-sm-12 mb-70">
                <div class="product-detail">
                  <h3 class="fz-3-l"><?php echo $title;?></h3>
                  <div class="__rating clearfix">
                    <div data-rating='4' class="star-ratings"><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span></div>
                    <p class="color-secondary">(1 customer review)</p>
                  </div>
                  <div class="__price fz-4 font-heading">
                    <span class="color-primary"><?php echo $prize; ?></span>
                  </div>
                  <div class="__text">
                    <p><?php echo $description ;?></p>
                  </div>
                  <form action="index.php?page=cart" method="POST">
                    <div class="__option-2 clearfix">
                      <div >
                        <div >
                          <input type="hidden" name="id" value="<?php echo $id; ?>" >

                          <input name="quantity" value="1" style="width:50px;text-align:center;" >
                        </div>
                      </div>
                      <div style="margin-left:10px;"> <span class="btn btn-primary" style="height:35px; padding:0px 5px;"> 
                          <i class="icon-shopping111" style="height:35px; padding:8px;"></i><input type="submit" class="btn btn-primary" name="cart" value="ADD TO CART" style="height:35px; margin-bottom:10px; padding:0px;"></span></div>
                    </div>
                  </form>
                  <div class="__others">
                    <p>SKU:&nbsp;<a href="#"><?php echo $skq; ?></a></p>
                    <p>CATEGORY:&nbsp;<a href="#"><?php echo $cate; ?></a></p>
                    <p>SUB-CATEGORY:&nbsp;<a href="#"><?php echo $sub_cate; ?></a></p>
                    <p>TAGS:&nbsp;<a href="#"><?php echo $tags; ?></a></p>
                  </div>
                  <ul class="social circle secondary responsive">
                    <li><a href="#"><i class="icon icon-facebook-1"></i></a></li>
                    <li><a href="#"><i class="icon icon-twitter-1"></i></a></li>
                    <li><a href="#"><i class="icon icon-pinterest"></i></a></li>
                    <li><a href="#"><i class="icon icon-stumbleupon"></i></a></li>
                    <li><a href="#"><i class="icon icon-instagrem"></i></a></li>
                    <li><a href="#"><i class="icon icon-dribbble-1"></i></a></li>
                    <li><a href="#"><i class="icon icon-github"></i></a></li>
                    <li><a href="#"><i class="icon icon-vimeo"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-12">
                <div id="product-detail-tabs" class="product-detail-tabs tabs full">
                  <div class="tabs-nav">
                    <ul>
                      <li><a href="#product-detail-tabs-item-0" class="fz-6-s font-heading">DESCRIPTION</a></li>
                      <li><a href="#product-detail-tabs-item-1" class="fz-6-s font-heading">REVIEWS</a></li>
                    </ul>
                  </div>
                  <div class="tabs-content">
                    <div id="product-detail-tabs-item-0" class="__item __default">
                     <p> <?php echo $description; ?></p>
                    </div>
                    <div id="product-detail-tabs-item-1" class="__item __reviews">
                      <div class="__head clearfix">
                        <p class="font-heading fz-6-s">1 REVIEW FOR Lorem Ipsum passage</p>
                        <div data-rating='4' class="star-ratings"><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span></div>
                        <hr/>
                      </div>
                      <div class="__body">
                        <div class="__comment-list">
                          <div class="__comment">
                            <div class="__content-left"><img src="assets/images/team/personal-avatar.jpg" alt="avatar"/></div>
                            <div class="__content-right clearfix">
                              <div class="__info clearfix">
                                <div data-rating='4' class="star-ratings"><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span></div><span class="__name">JOHN DOE</span><span class="__divide"><span></span></span><span class="__date color-primary fz-6-ss">jun 09,2015</span>
                              </div>
                              <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
                            </div>
                          </div>
                        </div>
                        <form class="__review-form">
                          <h6>ADD REVIEW</h6>
                          <div class="__inputs"><span>
                              <input type="text" name="name" placeholder="Name *"/></span><span>
                              <input type="email" name="email" placeholder="Email *"/></span><span>
                              <input type="text" name="title" placeholder="Title *"/></span></div>
                          <div class="___message">
                            <textarea placeholder="Message"></textarea>
                          </div>
                          <div class="clearfix">
                            <div class="__rating clearfix"><span class="font-heading fz-6-s">RATING:</span><i class="icon-star-empty"></i><i class="icon-star-empty"></i><i class="icon-star-empty"></i><i class="icon-star-empty"></i><i class="icon-star-empty"></i></div>
                            <div class="__button"><a class="btn btn-primary">SEND MESSAGE</a></div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            </div></section>
         
      <?php
      include("footer.php");
      ?>
      <div id="shop-quickview" style="display:none;" class="shop-quick-view clearfix">
        <div class="row">
          <div class="col-sm-6 col-xs-12 product-thumbnail-slider-wrapper __content-left">
            <div class="product-thumbnail-slider">
              <div class="product-syn-slider-1-wrapper">
                <div class="product-syn-slider-1 syn-slider-1 direction-nav">
                  <div class="block-product-slider">
                    <div data-mfp-src="../admin/images/<?php echo $image; ?>" class="__image zoom-button img-wrapper"><img src="../admin/images/<?php echo $image; ?>" style="width:150px;height:120px;"></div>
                  </div>
                  <div class="block-product-slider">
                    <div data-mfp-src="../admin/images/<?php echo $image; ?>" class="__image zoom-button img-wrapper"><img src="../admin/images/<?php echo $image; ?>" style="width:150px;height:120px;"></div>
                  </div>
                  <div class="block-product-slider">
                    <div data-mfp-src="../admin/images/<?php echo $image; ?>" class="__image zoom-button img-wrapper"><img src="../admin/images/<?php echo $image; ?>" style="width:150px;height:120px;"></div>
                  </div>
                  <div class="block-product-slider">
                    <div data-mfp-src="../admin/images/<?php echo $image; ?>" class="__image zoom-button img-wrapper"><img src="../admin/images/<?php echo $image; ?>" style="width:150px;height:120px;"></div>
                  </div>
                  <div class="block-product-slider">
                    <div data-mfp-src="../admin/images/<?php echo $image; ?>" class="__image zoom-button img-wrapper"><img src="../admin/images/<?php echo $image; ?>" style="width:150px;height:120px;"></div>
                  </div>
                  <div class="block-product-slider">
                    <div data-mfp-src="../admin/images/<?php echo $image; ?>" class="__image zoom-button img-wrapper"><img src="../admin/images/<?php echo $image; ?>" style="width:150px;height:120px;"></div>
                  </div>
                </div>
              </div>
              <div class="product-syn-slider-2-wrapper">
                <div class="product-syn-slider-2 syn-slider-2">
                  <div class="block-product-slider">
                    <div class="__image text-center overlay-container"><img src="../admin/images/<?php echo $image; ?>" alt="Product slider image"/>
                      <div class="overlay bgc-light-o-5"></div>
                    </div>
                  </div>
                  <div class="block-product-slider">
                    <div class="__image text-center overlay-container"><img src="assets/images/shop/product-img-4-m.jpg" alt="Product slider image"/>
                      <div class="overlay bgc-light-o-5"></div>
                    </div>
                  </div>
                  <div class="block-product-slider">
                    <div class="__image text-center overlay-container"><img src="assets/images/shop/product-img-6-m.jpg" alt="Product slider image"/>
                      <div class="overlay bgc-light-o-5"></div>
                    </div>
                  </div>
                  <div class="block-product-slider">
                    <div class="__image text-center overlay-container"><img src="assets/images/shop/product-img-11-m.jpg" alt="Product slider image"/>
                      <div class="overlay bgc-light-o-5"></div>
                    </div>
                  </div>
                  <div class="block-product-slider">
                    <div class="__image text-center overlay-container"><img src="assets/images/shop/product-img-13-m.jpg" alt="Product slider image"/>
                      <div class="overlay bgc-light-o-5"></div>
                    </div>
                  </div>
                  <div class="block-product-slider">
                    <div class="__image text-center overlay-container"><img src="assets/images/shop/product-img-14-m.jpg" alt="Product slider image"/>
                      <div class="overlay bgc-light-o-5"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-xs-12 __content-right">
            <div class="product-detail">
              <h3 class="fz-3-l"><a href="shop-single-fullwidth.html">Lorem Ipsum passage</a></h3>
              <div class="__rating clearfix">
                <div data-rating='4' class="star-ratings"><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span></div>
                <p class="color-secondary">(1 customer review)</p>
              </div>
              <div class="__price fz-4 font-heading">
                <del>$500</del><span class="color-primary">$300</span>
              </div>
              <div class="__text">
                <p>Nullam fringilla tristique elit id varius. Nulla lacinia quam nec venenatis dignissim. Vivamus volutpat tempus semper. Cras feugiat mi sit amet risus consectetur, non consectetur nisl finibus. Ut ac eros quis mi volutpat cursus vel non risus. In non neque lacinia, aliquet tortor sed, consectetur nibh. Nulla faucibus risus in ligula elementum bibendum.</p>
              </div>
              <form>
                <div class="__option-2 clearfix">
                  <div class="__quantity">
                    <div class="quantity-input">
                      <input type="text" value="1" class="number"/>
                      <button class="add icon-up-open-mini"></button>
                      <button class="subract icon-down-open-mini"></button>
                    </div>
                  </div>
                  <div class="__button"><a href="shop-cart.html" class="btn btn-primary"><i class="icon-shopping111"></i>ADD TO CART</a></div>
                </div>
              </form>
              <div class="__others">
                <p>SKU:&nbsp;<a href="#">0010</a></p>
                <p>CATEGORY:&nbsp;<a href="#">Other</a></p>
                <p>TAGS:&nbsp;<a href="#">Dress</a>,&nbsp;<a href="#">Fashion</a></p>
              </div>
              <ul class="social circle secondary responsive">
                <li><a href="#"><i class="icon icon-facebook-1"></i></a></li>
                <li><a href="#"><i class="icon icon-twitter-1"></i></a></li>
                <li><a href="#"><i class="icon icon-pinterest"></i></a></li>
                <li><a href="#"><i class="icon icon-stumbleupon"></i></a></li>
                <li><a href="#"><i class="icon icon-instagrem"></i></a></li>
                <li><a href="#"><i class="icon icon-dribbble-1"></i></a></li>
                <li><a href="#"><i class="icon icon-github"></i></a></li>
                <li><a href="#"><i class="icon icon-vimeo"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--End Page content-->
    <!--Javascript Library-->
    <button id="back-to-top-btn"><i class="icon-up-open-big"></i></button>
    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="vendors/waypoints/lib/jquery.waypoints.min.js"></script>
    <script src="vendors/waypoints/lib/shortcuts/sticky.min.js"></script>
    <script src="vendors/smoothscroll/SmoothScroll.js"></script>
    <script src="vendors/wow/dist/wow.min.js"></script>
    <script src="vendors/parallax.js/parallax.js"></script>
    <script type="text/javascript" src="vendors/jquery-ui/jquery-ui.min.js"></script>
    <script type="text/javascript" src="vendors/slick-carousel/slick/slick.js"></script>
    <script type="text/javascript" src="vendors/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="vendors/jquery-modal/jquery.modal.min.js"></script>
    <script type="text/javascript" src="assets/js/main.js"></script>
   <!--End Javascript Library-->
  </body>
</html>