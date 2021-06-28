<div class="mini-cart-container">
    <mini-cart
        view-cart="{{ route('shop.checkout.cart.index') }}"
        cart-text="{{ __('shop::app.minicart.view-cart') }}"
        checkout-text="{{ __('shop::app.minicart.checkout') }}"
        checkout-url="{{ route('shop.checkout.onepage.index') }}"
        subtotal-text="{{ __('shop::app.checkout.cart.cart-subtotal') }}"
        check-minimum-order-url="{{ route('shop.checkout.check-minimum-order') }}">
    </mini-cart>
</div>


<!--<div class="new-mini-cart-container">
    <span class="new-mini-cart-container">
        <p class="cart-text">0 item(s) - {{ __('shop::app.minicart.checkout') }}</p>
        <p class="material-icons-outlined">shopping_cart</p>
    </span>
</div>-->