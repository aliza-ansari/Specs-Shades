 <?php include("header.php"); ?> 
 
 
  
		
		
        <section class="container content-section">
            <h2 class="section-header">Spectacles</h2>
            <div class="shop-items">
                <div class="shop-item">
                    <span class="shop-item-title">specs 1</span>
                    <img class="shop-item-image" src="C:\Users\Aliza Ansari\Desktop\glasses_images\glass9.jpg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$12.99</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">specs 2</span>
                    <img class="shop-item-image" src="C:\Users\Aliza Ansari\Desktop\glasses_images\glass12.jpg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$14.99</span>
                        <button class="btn btn-primary shop-item-button"type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">specs 3</span>
                    <img class="shop-item-image" src="C:\Users\Aliza Ansari\Desktop\glasses_images\glass13.jpg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$19.99</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
            </div>
        </section>
        <section class="container content-section">
            <h2 class="section-header">Shades</h2>
            <div class="shop-items">
                <div class="shop-item">
                    <span class="shop-item-title">shades 1</span>
                    <img class="shop-item-image" src="C:\Users\Aliza Ansari\Desktop\glasses_images\glass5.jpg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$19.99</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
				<div class="shop-item">
                    <span class="shop-item-title">shades 1</span>
                    <img class="shop-item-image" src="C:\Users\Aliza Ansari\Desktop\glasses_images\glass1.jpg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$19.99</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">shades 2</span>
                    <img class="shop-item-image" src="C:\Users\Aliza Ansari\Desktop\glasses_images\glass8.jpg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$6.99</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
            </div>
        </section>
        <section class="container content-section">
            <h2 class="section-header">CART</h2>
            <div class="cart-row">
                <span class="cart-item cart-header cart-column">ITEM</span>
                <span class="cart-price cart-header cart-column">PRICE</span>
                <span class="cart-quantity cart-header cart-column">QUANTITY</span>
            </div>
            <div class="cart-items">
            </div>
            <div class="cart-total">
                <strong class="cart-total-title">Total</strong>
                <span class="cart-total-price">$0</span>
            </div>
			<form action="paymentgateway.html" method="get">
            <button class="btn btn-primary btn-purchase" type="submit"  >PURCHASE</button>
            </form>
		</section>
       
	   
 
 
 <?php include("footer.php"); ?> 
 
