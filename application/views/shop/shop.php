<html>

<head>
  <title>My Cart</title>
  <link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap.min.css">

  <style>
  .badge-notify{
    background:red;
    position:relative;
    top: -20px;
    right: 10px;
  }
  .my-cart-icon-affix {
    position: fixed;
    z-index: 999;
  }
  </style>
</head>
<div class="container-fluid fixed-top">
  <div class="alert alert-info">     
    
    <?php if($user!=false){ ?>
      <button type="button" class="btn btn-lg btn-success" data-toggle="modal" data-target="#hello" style="padding: 10px;">Hello <?= $user['user_name'] ?></button>
      &nbsp;&nbsp;&nbsp;  
    <?php }else{ ?>
      <button type="button" class="btn btn-lg btn-primary" data-toggle="modal" data-target="#login" style="padding: 7px;">Login</button>
      &nbsp;&nbsp;&nbsp;    
    <?php } ;?>
  </div>

  <br/>
  
</div>
 
  <div id="hello" class="modal fade">
          <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-header">
                      <h4 class="modal-title text-xs-center">Information</h4>
                  </div>
                  <div class="modal-body">
                        <div class="form-group">
                              <label class="control-label">User Name</label>
                              <div>
                                  <input type="text" class="form-control input-lg disable" name="name" value="<?= $user['user_name'] ?>">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="control-label">Email</label>
                              <div>
                                  <input type="text" class="form-control input-lg disable" name="age" value="<?= $user['email'] ?>">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="control-label">Phone Number</label>
                              <div>
                                  <input type="text" class="form-control input-lg disable" name="height" value="<?= $user['phone_number'] ?>">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="control-label">Address</label>
                              <div>
                                  <input type="text" class="form-control input-lg disable" name="weight" value="<?= $user['address'] ?>">
                              </div>
                          </div>
                          
                          
                          <button type="Close" class="btn btn-danger btn-block">Close</button>
                          
                     
                  </div>
              </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
      </div><!-- /.modal -->


  <!-- The Modal -->
  <div id="login" class="modal fade">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <h4 class="modal-title text-xs-center">Form Log in</h4>
              </div>
              <div class="modal-body">
                  <form role="form" method="POST" action="<?= base_url(); ?>/index.php/shop/Shopping/login">
                      <input type="hidden" name="_token" value="">
                      <div class="form-group">
                          <label class="control-label">Username</label>
                          <div>
                              <input type="text" class="form-control input-lg" name="username">
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="control-label">Password</label>
                          <div>
                              <input type="text" class="form-control input-lg" name="password">
                          </div>
                      </div>
                      <div class="form-group">
                          <div>
                              <div class="checkbox">
                                  <label>
                                      <input type="checkbox" name="remember"> Remember Me
                                  </label>
                              </div>
                          </div>
                      </div>
                      <div class="form-group">
                          <div>
                              <a class="btn btn-link" href="">Forgot Your Password?</a>
                              <button type="submit" class="btn btn-info btn-block">Login</button>
                          </div>
                      </div>
                  </form>
              </div>
              <div class="modal-footer text-xs-center">
                  Not have an account? <a href="<?php echo base_url() ?>/index.php/shop/Shopping/signup">Sign up »</a>
              </div>
          </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->





<body class="container">

  <div class="page-header">
    <h1>Products
      <div style="float: right; cursor: pointer;">
        <span class="glyphicon glyphicon-shopping-cart my-cart-icon"><span class="badge badge-notify my-cart-badge"></span></span>
      </div>
    </h1>
  </div>

  <div class="row">

    <?php foreach ($products as $value): ?>
      <div class="col-md-3 text-center">
        <img src="<?php echo base_url().$value['image']; ?>" width="150px" height="150px">
        <br>
        <?= $value['product_name'] ?> <br/> <strong><?= $value['price']; ?> &nbsp;VNĐ</strong>
        <br>
        <button class="btn btn-danger my-cart-btn" data-id="<?= $value['product_id'] ?>" data-name="<?= $value['product_name'] ?>"  data-summary="<?= $value['intro'] ?>" data-price="<?= $value['price']; ?>" data-quantity="1" data-image="<?php echo base_url().$value['image']; ?>">Add to Cart</button>
      <a href="#" class="btn btn-info">Details</a>
      </div><br/>
    <?php endforeach ?>

  </div>

  

  <script src="<?php echo base_url(); ?>js/jquery-2.2.3.min.js"></script>
  <script type='text/javascript' src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
  <script type='text/javascript' src="<?php echo base_url(); ?>js/jquery.mycart.js"></script>
  <script type="text/javascript">
  $(function () {
    var goToCartIcon = function($addTocartBtn){
      var $cartIcon = $(".my-cart-icon");
      var $image = $('<img width="30px" height="30px" src="' + $addTocartBtn.data("image") + '"/>').css({"position": "fixed", "z-index": "999"});
      $addTocartBtn.prepend($image);
      var position = $cartIcon.position();
      $image.animate({
        top: position.top,
        left: position.left
      }, 500 , "linear", function() {
        $image.remove();
      });
    }

    

    $('.my-cart-btn').myCart({
      currencySymbol: '$',
      classCartIcon: 'my-cart-icon',
      classCartBadge: 'my-cart-badge',
      classProductQuantity: 'my-product-quantity',
      classProductRemove: 'my-product-remove',
      classCheckoutCart: 'my-cart-checkout',
      affixCartIcon: true,
      showCheckoutModal: true,
      numberOfDecimals: 3,
      cartItems: [
        
      ],
      clickOnAddToCart: function($addTocart){

        goToCartIcon($addTocart);
      },
      afterAddOnCart: function(products, totalPrice, totalQuantity) {
        console.log("afterAddOnCart", products, totalPrice, totalQuantity);
      },
      clickOnCartIcon: function($cartIcon, products, totalPrice, totalQuantity) {
        console.log("cart icon clicked", $cartIcon, products, totalPrice, totalQuantity);
      },
      <?php if($user!=false){ ?>
        checkoutCart: function(products, totalPrice, totalQuantity) {
          var cart = [];
          cart.push(products);
          cart.push(totalPrice);
          var checkoutString = "Total Price: " + totalPrice + "\nTotal Quantity: " + totalQuantity;
          checkoutString += "\n\n id \t\t\t\t\t name \t\t\t price \t quantity \t introduction";
          $.each(products, function(){
            checkoutString += ("\n " + this.id + " \t " + this.name + " \t "  + " \t " + this.price + " \t " + this.quantity+ " \t " + this.summary);
            
          });
          alert(checkoutString);
          cart.push(<?php echo $user['user_id']; ?>);
          $.post("<?php echo base_url() ?>/index.php/shop/Shopping/view",
          {
              sanpham: cart 
          },
          function(data,status){
              alert("Data: " +data + "\nStatus: " + status);
          });
          console.log("checking out", products, totalPrice, totalQuantity);
          
        },
      <?php } ?>

      getDiscountPrice: function(products, totalPrice, totalQuantity) {
        
        console.log("calculating discount", products, totalPrice, totalQuantity);
        return totalPrice * 90 /100;
      }
    });

    $("#addNewProduct").click(function(event) {
      var currentElementNo = $(".row").children().length + 1;
      $(".row").append('<div class="col-md-3 text-center"><img src="images/img_empty.png" width="150px" height="150px"><br>product ' + currentElementNo + ' - <strong>$' + currentElementNo + '</strong><br><button class="btn btn-danger my-cart-btn" data-id="' + currentElementNo + '" data-name="product ' + currentElementNo + '" data-summary="summary ' + currentElementNo + '" data-price="' + currentElementNo + '" data-quantity="1" data-image="images/img_empty.png">Add to Cart</button><a href="#" class="btn btn-info">Details</a></div>')
    });

    
  });

  
  </script>

</body>

</html>
