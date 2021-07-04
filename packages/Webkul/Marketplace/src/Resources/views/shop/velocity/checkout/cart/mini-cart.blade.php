<div class="mini-cart-container pull-right">
    <mp-mini-cart
         view-cart="{{ route('shop.checkout.cart.index') }}"
         cart-text="{{ __('shop::app.minicart.view-cart') }}"
         checkout-text="{{ __('shop::app.minicart.checkout') }}"
         checkout-url="{{ route('shop.checkout.onepage.index') }}"
         subtotal-text="{{ __('shop::app.checkout.cart.cart-subtotal') }}">
     </mp-mini-cart>
 </div>

 @push('scripts')
 <script type="text/x-template" id="mp-mini-cart-template">
       <div :class="`dropdown ${cartItems.length > 0 ? '' : 'disable-active'}`">
         <cart-btn :item-count="cartItems.length"></cart-btn>

         <div
             id="cart-modal-content"
             v-if="cartItems.length > 0"
             class="modal-content sensitive-modal cart-modal-content hide">

             <!--Body-->
             <div class="mini-cart-container" v-html="">
                 <div class="row small-card-container" :key="index" v-for="(item, index) in cartItems">

                     <div class="col-3 product-image-container mr15">
                         <a @click="removeProduct(item.id)">
                             <span class="rango-close"></span>
                         </a>

                         <a class="unset" :href="`${$root.baseUrl}/${item.url_key}`">
                             <div
                                 class="product-image"
                                 :style="`background-image: url(${item.images.medium_image_url});`">
                             </div>
                         </a>
                     </div>
                     <div class="col-9 no-padding card-body align-vertical-top">
                         <div class="no-padding">
                             <div class="fs16 text-nowrap fw6" v-html="item.name"></div>

                                 <div v-if="sellerInfo" class="seller-info" :id ="`mini-cart-seller-info-${item.id}`" style="margin-bottom: 10px;">
                                    <div v-if="sellerInfo[item.product_id]['seller'] != 0" >
                                        Sold By : <a :href="`${$root.baseUrl}/marketplace/seller/profile/${sellerInfo[item.product_id]['seller'].url}`">@{{sellerInfo[item.product_id]['seller']['shop_title']}} [<i class="material-icons" style="width: 12px; font-size: 10px;">star_rate</i>@{{sellerInfo[item.product_id]['rating']}}]</a>
                                    </div>
                                 </div>

                             <div class="fs18 card-current-price fw6">
                                 <div class="display-inbl">
                                     <label class="fw5">@{{ __('checkout.qty') }}</label>
                                     <input type="text" disabled :value="item.quantity" class="ml5" />
                                 </div>
                                 <span class="card-total-price fw6">
                                     @{{ item.base_total }}
                                 </span>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>

             <!--Footer-->
             <div class="modal-footer">
                 <h5 class="col-6 text-left fw6">
                    @{{ subtotalText }}
                 </h5>

                 <h5 class="col-6 text-right fw6 no-padding">@{{ cartInformation.base_sub_total }}</h5>
             </div>

             <div class="modal-footer">
                 <a class="col text-left fs16 link-color remove-decoration" :href="viewCart">@{{ cartText }}</a>

                 <div class="col text-right no-padding">
                     <a :href="checkoutUrl">
                         <button
                             type="button"
                             class="theme-btn fs16 fw6">
                             @{{ checkoutText }}
                         </button>
                     </a>
                 </div>
             </div>
         </div>
     </div>
 </script>

 <script>
    Vue.component('mp-mini-cart', {
        template: '#mp-mini-cart-template',
         props: [
             'cartText',
             'viewCart',
             'checkoutUrl',
             'checkoutText',
             'subtotalText',
         ],

         data: function () {
             return {
                 cartItems: [],
                 cartInformation: [],
                 sellerInfo: '',
                 sellerProduct: false
             }
         },

         mounted: function () {
             this.getMiniCartDetails();
         },

         watch: {
             '$root.miniCartKey': function () {
                 this.getMiniCartDetails();
             }
         },

         methods: {
             getMiniCartDetails: function () {
                 this.$http.get(`${this.$root.baseUrl}/mini-cart`)
                 .then(response => {
                     if (response.data.status) {
                        this.cartItems = response.data.mini_cart.cart_items;
                        this.cartInformation = response.data.mini_cart.cart_details;
                        this.getSellerInfo()
                     }
                 })
                 .catch(exception => {
                     console.log(this.__('error.something_went_wrong'));
                 });
             },

             getSellerInfo: function () {

                 this.$http.post(`${this.$root.baseUrl}/marketplace/seller-info`, this.cartItems)
                 .then(response => {
                     if (response.status == 200) {
                        this.sellerInfo = response.data;
                     }
                 })
                 .catch(exception => {

                     console.log(this.__('error.something_went_wrong'));
                 });
             },

             removeProduct: function (productId) {
                 this.$http.delete(`${this.$root.baseUrl}/cart/remove/${productId}`)
                 .then(response => {
                     this.cartItems = this.cartItems.filter(item => item.id != productId);

                     window.showAlert(`alert-${response.data.status}`, response.data.label, response.data.message);
                 })
                 .catch(exception => {
                     console.log(this.__('error.something_went_wrong'));
                 });
             }
         }
     });
 </script>
 @endpush