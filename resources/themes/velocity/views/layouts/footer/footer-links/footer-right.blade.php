<div class="col-lg-3 col-md-12 col-sm-12 footer-rt-content">
    <div class="row">
        <div class="mb5 col-12">
            <h3>{{ __('velocity::app.home.payment-methods') }}</h3>
        </div>

        <div class="payment-methods col-12">
            <img class="payment-method" src="{{ asset('themes/velocity/assets/images/payment-method.png') }}" height="35" />
            <div style="display:none">
                @foreach(\Webkul\Payment\Facades\Payment::getPaymentMethods() as $method)
                    <div class="method-sticker">
                        {{ $method['method_title'] }}
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="row">
        <div class="mb5 col-12">
            <h3>{{ __('velocity::app.home.shipping-methods') }}</h3>
        </div>

        <div class="shipping-methods col-12">
            <div style="display:none">
            @foreach(\Webkul\Shipping\Facades\Shipping::getShippingMethods() as $method)
                <div class="method-sticker">
                    {{ $method['method_title'] }}
                </div>
            @endforeach
            </div>
            <div class="shipping-method-text">
                By Air：Ethiopia Airline, Kenya AirLine<br />
                By Sea
            </div>
        </div>
    </div>
</div>