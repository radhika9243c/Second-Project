<?php include("header.php");
  if (isset($_SESSION['user_table'])) 
    {
      //pr($_SESSION['user_table']) ;
      $id=$_SESSION['user_table']['id'];
      //pr($id);
      $user_sel_qry = "SELECT * FROM user_table WHERE id = $id";
      // pr($user_sel_qry);
      $result = mysqli_query($conn , $user_sel_qry);
      $data_row = mysqli_fetch_assoc($result);
      //pr($data_row);
      $user_id=$data_row['id'];
                           
    }


$sel=db_select("product", $fields='*',"status=1", $orderBy = '');
if (isset($_POST['wishlist']) &&  $_POST['wishlist']=='wishlist') 
  {
    $id=$_POST['id'];
    $user_id=$_POST['user_id'];
    if (isset($_SESSION['user_table'])) 
    { 

      $uservalue=$_SESSION['user_table']['id'];
      pr($uservalue);
      $wishlist = "SELECT product_id , user_id FROM wishlist WHERE (product_id=$id) && (user_id=$uservalue)";
      //pr($wishlist);
      $result1 = mysqli_query($conn , $wishlist);
      $data_v = mysqli_fetch_assoc($result1);
      //pr($data_row);
      $pro_id=$data_v['id'];
      $u_id=$data_v['user_id'];
      if (isset($data_v)) {
        echo "hey";
        echo '<script>window.location.href="wishlist.php"</script>';

      }
      else{
    //$creat_date = 'NOW()';
    $creat_date = date("Y-m-d h:i:s");
    $field_value=array("product_id"=>"$id","user_id"=>"$user_id","creat_date"=>$creat_date);
    $squ = db_insert("wishlist",$field_value);
    pr($squ);
     echo '<script>window.location.href="wishlist.php"</script>';
    }}
    else
    {
      echo '<script>window.location.href="account.php"</script>';
    }
}
?>
      <!--Page Header-->
     <header class="page-header common-header bgc-dark-o-5">
        <div data-parallax="scroll" data-image-src="assets/images/background/background-01.jpg" data-speed="0.3" class="parallax-background"></div>
        <div class="container text-right">
          <div class="left">
            <h1 class="text-responsive size-3 nmb">SHOP</h1>
          </div>
        </div>
        <div class="ab-bottom col-xs-12">
          <div class="container">
            <div class="breadcrumb bgc-dark-o-6"><span class="__title font-heading fz-6-s">YOU ARE HERE :</span><span class="__content italic font-ubuntu fz-6-ss"><span><a href="index.html">Home</a></span><span><a href="#">Shop</a></span></span></div>
          </div>
        </div>
      </header>
      <!--End Page Header-->
      <!--Page Body-->
      <div id="page-body" class="page-body">
        <section class="page-section">
          <div class="container">
            <div class="row">
              <div class="col-xs-12 hidden-md hidden-lg">
                <aside class="shop-category-sidebar">
                  <div class="widget widget-search">
                    <div class="__widget-content">
                      <form method="post" class="search-box">
                        <input type="search" placeholder="Search..."/>
                        <button type="submit"><i class="icon-search-icon"></i></button>
                      </form>
                    </div>
                  </div>
                  <div class="widget widget-categories">
                    <h6 class="__widget-title">CATEGORIES</h6>
                    <ul class="__widget-content">
                      <li><a href="#">HTML/CSS (8)</a></li>
                      <li><a href="#">TYPOGRAPY (8)</a></li>
                      <li><a href="#">GRAPHICS DESIGN (8)</a></li>
                      <li><a href="#">SCANDAL (8)</a></li>
                      <li><a href="#">GRAPHICS DESIGN (8)</a></li>
                      <li><a href="#">TRAVEL (8)</a></li>
                    </ul>
                  </div>
                  <hr class="mb-40">
                  <div class="widget widget-price-filter">
                    <h6 class="__widget-title">FILTER BY PRICE</h6>
                    <div data-from="5" data-to="150" data-min="0" data-max="500" class="__widget-content price-filter">
                      <div class="price-slider-range"></div>
                      <div class="price-filter-detail">
                        <div class="price pull-left">Price :&nbsp;&pound;<span class="from"></span><span class="hyphen">&nbsp;-&nbsp;&pound;</span><span class="to"></span></div><a href="#" class="pull-right btn btn-small btn-primary">FILTER</a>
                      </div>
                    </div>
                  </div>
                </aside>
              </div>
              <div class="col-lg-3 col-md-4 hidden-sm hidden-xs">
                <aside class="shop-category-sidebar">
                  <div class="widget widget-search">
                    <div class="__widget-content">
                      <form method="post" class="search-box">
                        <input type="search" placeholder="Search..."/>
                        <button type="submit"><i class="icon-search-icon"></i></button>
                      </form>
                    </div>
                  </div>
                  <div class="widget widget-price-filter">
                    <h6 class="__widget-title">FILTER BY PRICE</h6>
                    <div data-from="5" data-to="150" data-min="0" data-max="500" class="__widget-content price-filter">
                      <div class="price-slider-range"></div>
                      <div class="price-filter-detail">
                        <div class="price pull-left">Price :&nbsp;&pound;<span class="from"></span><span class="hyphen">&nbsp;-&nbsp;&pound;</span><span class="to"></span></div><a href="#" class="pull-right btn btn-small btn-primary">FILTER</a>
                      </div>
                    </div>
                  </div>
                  <hr class="mb-40"/>
                  <div class="widget widget-categories">
                    <h6 class="__widget-title">CATEGORIES</h6>
                    <ul class="__widget-content">
                      <li><a href="#">HTML/CSS (8)</a></li>
                      <li><a href="#">TYPOGRAPY (8)</a></li>
                      <li><a href="#">GRAPHICS DESIGN (8)</a></li>
                      <li><a href="#">SCANDAL (8)</a></li>
                      <li><a href="#">GRAPHICS DESIGN (8)</a></li>
                      <li><a href="#">TRAVEL (8)</a></li>
                    </ul>
                  </div>
                  <div class="widget widget-product">
                    <h6 class="__widget-title">RECENT PRODUCTS</h6>
                    <div class="__widget-content">
                      <div class="block-shop-product-small">
                        <div class="__image overlay-container">
                          <div class="overlay-hover text-center bgc-dark-o-3">
                            <ul>
                              <li class="clearfix"><a href="#shop-quickview" data-modal-open="data-modal-open" class="quick-view"><i class="icon-search-icon"></i></a></li>
                            </ul>
                          </div>
                        </div>
                        <div class="__info">
                          <p class="__category  fz-6-s">Women / Clothe</p><a href="#" class="font-heading fz-6-ss">SKATER SHIRTS</a>
                          <div class="clearfix">
                            <div data-rating='4' class="star-ratings"><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span></div><span class="__price color-primary font-heading">$280</span>
                          </div>
                        </div>
                      </div>
                      <div class="block-shop-product-small">
                        <div class="__image overlay-container"><img src="assets/images/shop/product-img-6-s.jpg" alt="Shop Product"/>
                          <div class="overlay-hover text-center bgc-dark-o-3">
                            <ul>
                              <li class="clearfix"><a href="#shop-quickview" data-modal-open="data-modal-open" class="quick-view"><i class="icon-search-icon"></i></a></li>
                            </ul>
                          </div>
                        </div>
                        <div class="__info">
                          <p class="__category  fz-6-s">Women / Clothe</p><a href="#" class="font-heading fz-6-ss">SKATER SHIRTS</a>
                          <div class="clearfix">
                            <div data-rating='4' class="star-ratings"><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span></div><span class="__price color-primary font-heading">$280</span>
                          </div>
                        </div>
                      </div>
                      <div class="block-shop-product-small">
                        <div class="__image overlay-container"><img src="assets/images/shop/product-img-17-s.jpg" alt="Shop Product"/>
                          <div class="overlay-hover text-center bgc-dark-o-3">
                            <ul>
                              <li class="clearfix"><a href="#shop-quickview" data-modal-open="data-modal-open" class="quick-view"><i class="icon-search-icon"></i></a></li>
                            </ul>
                          </div>
                        </div>
                        <div class="__info">
                          <p class="__category  fz-6-s">Women / Clothe</p><a href="#" class="font-heading fz-6-ss">SKATER SHIRTS</a>
                          <div class="clearfix">
                            <div data-rating='4' class="star-ratings"><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span></div><span class="__price color-primary font-heading">$280</span>
                          </div>
                        </div>
                      </div>
                      <div class="block-shop-product-small">
                        <div class="__image overlay-container"><img src="assets/images/shop/product-img-23-s.jpg" alt="Shop Product"/>
                          <div class="overlay-hover text-center bgc-dark-o-3">
                            <ul>
                              <li class="clearfix"><a href="#shop-quickview" data-modal-open="data-modal-open" class="quick-view"><i class="icon-search-icon"></i></a></li>
                            </ul>
                          </div>
                        </div>
                        <div class="__info">
                          <p class="__category  fz-6-s">Women / Clothe</p><a href="#" class="font-heading fz-6-ss">SKATER SHIRTS</a>
                          <div class="clearfix">
                            <div data-rating='4' class="star-ratings"><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span></div><span class="__price color-primary font-heading">$280</span>
                          </div>
                        </div>
                      </div>
                      <div class="block-shop-product-small">
                        <div class="__image overlay-container"><img src="assets/images/shop/product-img-24-s.jpg" alt="Shop Product"/>
                          <div class="overlay-hover text-center bgc-dark-o-3">
                            <ul>
                              <li class="clearfix"><a href="#shop-quickview" data-modal-open="data-modal-open" class="quick-view"><i class="icon-search-icon"></i></a></li>
                            </ul>
                          </div>
                        </div>
                        <div class="__info">
                          <p class="__category  fz-6-s">Women / Clothe</p><a href="#" class="font-heading fz-6-ss">SKATER SHIRTS</a>
                          <div class="clearfix">
                            <div data-rating='4' class="star-ratings"><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span></div><span class="__price color-primary font-heading">$280</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="widget widget-tag">
                    <h6 class="__widget-title">POPULAR TAGS</h6>
                    <div class="__widget-content tags"><a href="#">Dress</a><a href="#">Mini</a><a href="#">Skate animal</a><a href="#">Lorem ipsum</a><a href="#">litterature</a><a href="#">Dress</a><a href="#">Mini</a><a href="#">Skate animal</a><a href="#">Lorem ipsum</a><a href="#">litterature</a><a href="#">Dress</a><a href="#">Mini</a><a href="#">Skate animal</a>
                    </div>
                  </div>
                </aside>
              </div>
              <div class="col-lg-9 col-md-8 col-xs-12">
                <div class="row product-listing">
                  <div class="col-xs-12">
                    <div class="filter-and-sort type-2 clearfix">
                      <div class="category-sorting clearfix">
                        <div data-menu-class="__small" class="select-wrapper __small">
                          <select name="orderby" class="select-menu">
                            <option value="menu_order">Default Sorting</option>
                            <option value="popularity">Sort By Popularity</option>
                            <option value="rating">Sort By Average Rating</option>
                            <option value="date">Sort By Newness</option>
                            <option value="price">Sort By Price: Low To High</option>
                            <option value="price-desc">Sort By Price: High To Low</option>
                          </select>
                        </div>
                        <p class="font-heading fz-6-s">Showing&nbsp;<span class="from">13</span>-<span class="to">24</span>&nbsp;of&nbsp;<span class="total">50</span>&nbsp;results</p>
                      </div>
                    </div>
                  </div>
                  <?php
                  foreach ($sel as $key => $value) {
                    $id=$value["id"];
                    $title=$value["title"];
                    $image=$value["image"];
                    $prize=$value["prize"]; ?>
                    <form action="index.php?page=cart" method="POST">
                  <div class="col-sm-4 col-xs-12 shop-product-wrapper">
                  <input type="hidden" name="id" value="<?php echo $id; ?>"> 
                  <input type="hidden" name="quantity" value="1"> 
                    <div class="block-shop-product font-heading">
                     <div class="__image overlay-container"><img src="../admin/images/<?php echo $image; ?>" style="width:270px;height:330px;">
                        <div class="overlay text-center">
                          <div class="__layer bgc-dark-o-3"></div>
                          <ul>
                            <li><a href="index.php?page=product_detail&id=<?php echo  $id; ?>"><i class="icon-eye"></i></a><input  type="submit" name="cart" value="cart" ></form>
                            <form action="" method="POST">
                              <input type="hidden" name="id" value="<?php echo $id; ?>"> 
                              <input type="hidden" name="user_id" value="<?php echo $user_id; ?>" >
                              <input  type="submit" name="wishlist" value="wishlist">
                            </form></li>
                          </ul>
                        </div>
                      </div>
                      <div class="__info text-center"><a href="index.php?page=product_detail&id=<?php echo  $id; ?>"><?php echo $title; ?></a>
                        <div class="__price"><span>$<?php echo $prize; ?></span>
                        </div>
                        <div data-rating="4" class="star-ratings"><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span></div>
                      </div>
                    </div>
                  </div>
                  </form>
                   <?php
                      }
                          ?>
                  
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="page-section no-padding border-bottom-lighter border-top-lighter">
          <div class="container">
            <nav class="pagination-2"><a href="#" class="button-previous"><i class="icon-left-open-big"></i><span>PREVIOUS</span></a><a href="#" class="button-next"><i class="icon-right-open-big"></i><span>NEXT</span></a>
              <ul class="text-center">
                <li><a href="#">1</a></li>
                <li class="active"><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
              </ul>
            </nav>
          </div>
        </section>
       
      </div>
      <!--End Page Body-->
      <?php
      include("footer.php")
      ?>
      
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
   <script type="text/javascript" src="vendors/isotope/dist/isotope.pkgd.min.js"></script>
    <script type="text/javascript" src="vendors/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script type="text/javascript" src="vendors/jquery-countTo/jquery.countTo.js"></script>
    <script type="text/javascript" src="vendors/slick-carousel/slick/slick.js"></script>
    <script type="text/javascript" src="vendors/Chart.js/Chart.min.js"></script>
    <script type="text/javascript" src="vendors/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="vendors/jquery-modal/jquery.modal.min.js"></script>
    <script type="text/javascript" src="assets/js/main.js"></script>
   <!--End Javascript Library-->
      