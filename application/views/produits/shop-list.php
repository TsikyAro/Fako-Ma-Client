<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>FAKO'MA-Liste Produit</title>
        <meta name="description" content="">
        <meta name="robots" content="noindex, follow" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href=<?php //echo base_url()."assets/img/favicon.png"?>>
        <link rel="stylesheet" href="D:/noUiSlider-15.7.1/dist/nouislider.min.css">
		<!-- all css here -->
        <link rel="stylesheet" href=<?php echo base_url()."assets/css/bootstrap.min.css"?>>
        <link rel="stylesheet" href=<?php echo base_url()."assets/css/animate.css"?>>
        <link rel="stylesheet" href=<?php echo base_url()."assets/css/owl.carousel.min.css"?>>
        <link rel="stylesheet" href=<?php echo base_url()."assets/css/slick.css"?>>
        <link rel="stylesheet" href=<?php echo base_url()."assets/css/chosen.min.css"?>>
        <link rel="stylesheet" href=<?php echo base_url()."assets/css/font-awesome.min.css"?>>
        <link rel="stylesheet" href=<?php echo base_url()."assets/css/themify-icons.css"?>>
        <link rel="stylesheet" href=<?php echo base_url()."assets/css/ionicons.min.css"?>>
		<link rel="stylesheet" href=<?php echo base_url()."assets/css/jquery-ui.css"?>>
        <link rel="stylesheet" href=<?php echo base_url()."assets/css/meanmenu.min.css"?>>
        <link rel="stylesheet" href=<?php echo base_url()."assets/css/style.css"?>>
        <link rel="stylesheet" href=<?php echo base_url()."assets/css/responsive.css"?>>
        <script src=<?php echo base_url()."assets/js/vendor/modernizr-2.8.3.min.js"?>></script>
    </head>
    <?php include('header.php')?>
		<!-- header end -->
        <!-- Breadcrumb Area Start -->
        <div class="breadcrumb-area bg-image-3 ptb-150">
            <div class="container">
                <div class="breadcrumb-content text-center">
					<h3>MAGASIN</h3>
                    <ul>
                        <li><a href="index.html">Accueil</a></li>
                        <li class="active">Magasin</li>
                    </ul>
                </div>
            </div>
        </div>
		<!-- Breadcrumb Area End -->
		<!-- Shop Page Area Start -->
        <div class="shop-page-area ptb-100">
            <div class="container">
                <div class="row flex-row-reverse">
                    <div class="col-lg-9">
                        <div class="shop-topbar-wrapper">
                            <div class="shop-topbar-left">
                                <ul class="view-mode">
                                    <li><a href="#product-grid" data-view="product-grid"><i class="fa fa-th"></i></a></li>
                                    <li class="active"><a href="#product-list" data-view="product-list"><i class="fa fa-list-ul"></i></a></li>
                                </ul>
                                <p>Nos Produits </p>
                            </div>
                        </div>
                        <div class="grid-list-product-wrapper">
                            <div class="product-list product-view pb-20">
                                <div id="row" class="row">
                                    <?php for($i=0;$i<count($table);$i++){?>
                                        <div  class="product-width col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12 mb-30" data-prix="<?php echo $table[$i]['prix']?>" >
                                            <div class="product-wrapper">
                                                <div class="product-img">
                                                    <a href="product-details.php">
                                                        <img alt="" src=<?php echo base_url()."assets/img/product/product-1.jpg"?>>
                                                    </a>
                                                </div>
                                                <div class="product-content text-left">
                                                    <div class="product-hover-style">
                                                        <div class="product-title">
                                                            <h4>
                                                                <a href=<?php echo base_url()."product-details.php"?>><?php echo $table[$i]['nomproduit']?></a>
                                                            </h4>
                                                        </div>
                                                        <div class="cart-hover">
                                                            <h4><a href=<?php echo base_url()."index.php/CT_produit/addCart?id=".$table[$i]['idproduit']?>>+Ajouter Panier</a></h4>
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="product-price-wrapper">
                                                        <span class="prix" ><?php echo $table[$i]['prix']?> Ariary</span>
                                                    </div>
                                                </div>
                                                <div class="product-list-details">
                                                    <h4>
                                                        <a href=<?php echo base_url()."product-details.php"?>><?php echo $table[$i]['nomproduit']?></a>
                                                    </h4>
                                                    <div class="product-price-wrapper">
                                                        <span><?php echo $table[$i]['prix']?>Ariary</span>
                                                    </div>
                                                    <p><?php echo $table[$i]['descriptionproduit']?></p>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    <?php }?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="shop-sidebar-wrapper gray-bg-7 shop-sidebar-mrg">
                            <div class="shop-widget">
                                <h4 class="shop-sidebar-title">Trier par Categories</h4>
                                <div class="shop-catigory">
                                    <ul id="faq">
                                        <li> <a data-toggle="collapse" data-parent="#faq" href="#shop-catigory-1">Engrais<i class="ion-ios-arrow-down"></i></a>
                                            <ul id="shop-catigory-1" class="panel-collapse collapse show">
                                                <li><a href="#">6 kg</a></li>
                                                <li><a href="#">4 kg</a></li>
                                                <li><a href="#">2 kg </a></li>
                                            </ul>
                                        </li>
                                        <li> <a data-toggle="collapse" data-parent="#faq" href="#shop-catigory-1">Charbons<i class="ion-ios-arrow-down"></i></a>
                                            <ul id="shop-catigory-1" class="panel-collapse collapse show">
                                                <li><a href="#">15 pcs</a></li>
                                                <li><a href="#">10 pcs</a></li>
                                                <li><a href="#">5 pcs</a></li>
                                            </ul>
                                        </li>
                                        <li> <a data-toggle="collapse" data-parent="#faq" href="#shop-catigory-1">Bétons<i class="ion-ios-arrow-down"></i></a>
                                            <ul id="shop-catigory-1" class="panel-collapse collapse show">
                                                <li><a href="#">Armés</a></li>
                                                <li><a href="#">Précontraints</a></li>
                                                <li><a href="#">Projetés</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="shop-price-filter mt-40 shop-sidebar-border pt-35">
                                <h4 class="shop-sidebar-title"> Filtrer Prix</h4>
                                    <div class="price_filter mt-25">
                                        <span>Range:  0 - 3500 </span>
                                        <div id="slider-range"></div>
                                        <div class="price_slider_amount">
                                            <div class="label-input">
                                                <input type="text" id="amount" name="price"  placeholder="Add Your Price" />
                                            </div>
                                            <button onclick="filtrer()">filtrer</button>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            function filtrer() {
                var row = document.querySelectorAll("#row div"); 
                var pri = document.getElementById('amount').value;
                var donne = pri.split(' - ');
                row.forEach(function(element) {
                    var prix = element.getAttribute("data-prix");
                    if(prix != null){
                        console.log(donne[0]+" donne /n "+donne[1]+" donne 2 /n "+prix);
                        if (donne[0] <= prix && donne[1] >= prix) {
                            element.style.display = "";
                        } else {
                            element.style.display = "none";
                        }
                    }
                });
            }
        </script>
		<!-- Shop Page Area Start -->
        <!-- Footer style Start -->
        <footer class="footer-area pt-75 gray-bg-3">
            <div class="footer-top gray-bg-3 pb-35">
                <div class="container">
                    <div class="row">
						<div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="footer-widget mb-40">
                                <div class="footer-title mb-25">
                                    <h4>My Account</h4>
                                </div>
                                <div class="footer-content">
                                    <ul>
                                        <li><a href="my-account.html">My Account</a></li>
                                        <li><a href="about-us.html">Order History</a></li>
                                        <li><a href="wishlist.html">WishList</a></li>
                                        <li><a href="#">Newsletter</a></li>
                                        <li><a href="about-us.html">Order History</a></li>
                                        <li><a href="#">International Orders</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
						<div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="footer-widget mb-40">
                                <div class="footer-title mb-25">
                                    <h4>Information</h4>
                                </div>
                                <div class="footer-content">
                                    <ul>
                                        <li><a href="about-us.html">About Us</a></li>
                                        <li><a href="#">Delivery Information</a></li>
                                        <li><a href="#">Privacy Policy</a></li>
                                        <li><a href="#">Terms & Conditions</a></li>
                                        <li><a href="#">Customer Service</a></li>
                                        <li><a href="#">Return Policy</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
						<div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="footer-widget mb-40">
                                <div class="footer-title mb-25">
                                    <h4>Quick Links</h4>
                                </div>
                                <div class="footer-content">
                                    <ul>
                                        <li><a href="#">Support Center</a></li>
                                        <li><a href="#">Term & Conditions</a></li>
                                        <li><a href="#">Shipping</a></li>
                                        <li><a href="#">Privacy Policy</a></li>
                                        <li><a href="#">Help</a></li>
                                        <li><a href="#">FAQS</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="footer-widget footer-widget-red footer-black-color mb-40">
                                <div class="footer-title mb-25">
                                    <h4>Contact Us</h4>
                                </div>
                                <div class="footer-about">
                                    <p>Your current address goes to here,120 haka, angladesh</p>
                                    <div class="footer-contact mt-20">
                                        <ul>
                                            <li>(+008) 254 254 254 25487</li>
                                            <li>(+009) 358 587 657 6985</li>
                                        </ul>
                                    </div>
									<div class="footer-contact mt-20">
                                        <ul>
                                            <li>yourmail@example.com</li>
                                            <li>example@admin.com</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
		<!-- Footer style End -->
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-5 col-sm-5 col-xs-12">
                                <!-- Thumbnail Large Image start -->
                                <div class="tab-content">
                                    <div id="pro-1" class="tab-pane fade show active">
                                        <img src="assets/img/product-details/product-detalis-l1.jpg" alt="">
                                    </div>
                                    <div id="pro-2" class="tab-pane fade">
                                        <img src="assets/img/product-details/product-detalis-l2.jpg" alt="">
                                    </div>
                                    <div id="pro-3" class="tab-pane fade">
                                        <img src="assets/img/product-details/product-detalis-l3.jpg" alt="">
                                    </div>
                                    <div id="pro-4" class="tab-pane fade">
                                        <img src="assets/img/product-details/product-detalis-l4.jpg" alt="">
                                    </div>
                                </div>
                                <!-- Thumbnail Large Image End -->
                                <!-- Thumbnail Image End -->
                                <div class="product-thumbnail">
                                    <div class="thumb-menu owl-carousel nav nav-style" role="tablist">
                                        <a class="active" data-toggle="tab" href="#pro-1"><img src="assets/img/product-details/product-detalis-s1.jpg" alt=""></a>
                                        <a data-toggle="tab" href="#pro-2"><img src="assets/img/product-details/product-detalis-s2.jpg" alt=""></a>
                                        <a data-toggle="tab" href="#pro-3"><img src="assets/img/product-details/product-detalis-s3.jpg" alt=""></a>
                                        <a data-toggle="tab" href="#pro-4"><img src="assets/img/product-details/product-detalis-s4.jpg" alt=""></a>
                                    </div>
                                </div>
                                <!-- Thumbnail image end -->
                            </div>
                            <div class="col-md-7 col-sm-7 col-xs-12">
                                <div class="modal-pro-content">
                                    <h3>Dutchman's Breeches </h3>
                                    <div class="product-price-wrapper">
                                        <span class="product-price-old">£162.00 </span>
                                        <span>£120.00</span>
                                    </div>
                                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet.</p>	
                                    <div class="quick-view-select">
                                        <div class="select-option-part">
                                            <label>Size*</label>
                                            <select class="select">
                                                <option value="">S</option>
                                                <option value="">M</option>
                                                <option value="">L</option>
                                            </select>
                                        </div>
                                        <div class="quickview-color-wrap">
                                            <label>Color*</label>
                                            <div class="quickview-color">
                                                <ul>
                                                    <li class="blue">b</li>
                                                    <li class="red">r</li>
                                                    <li class="pink">p</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-quantity">
                                        <div class="cart-plus-minus">
                                            <input class="cart-plus-minus-box" type="text" name="qtybutton" value="02">
                                        </div>
                                        <button>Add to cart</button>
                                    </div>
                                    <span><i class="fa fa-check"></i> In stock</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal end -->
        
		<!-- all js here -->
        <script src=<?php echo base_url()."assets/js/vendor/jquery-1.12.0.min.js"?>></script>
        <script src=<?php echo base_url()."assets/js/popper.js"?>></script>
        <script src=<?php echo base_url()."assets/js/bootstrap.min.js"?>></script>
        <script src=<?php echo base_url()."assets/js/imagesloaded.pkgd.min.js"?>></script>
        <script src=<?php echo base_url()."assets/js/isotope.pkgd.min.js"?>></script>
        <script src=<?php echo base_url()."assets/js/ajax-mail.js"?>></script>
        <script src=<?php echo base_url()."assets/js/owl.carousel.min.js"?>></script>
        <script src=<?php echo base_url()."assets/js/plugins.js"?>></script>
        <script src=<?php echo base_url()."assets/js/main.js"?>></script>
    </body>

</html>
