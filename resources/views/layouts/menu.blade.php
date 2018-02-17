<li class="{{ Request::is('products*') ? 'active' : '' }}">
    <a href="{!! route('backend.products.index') !!}"><i class="fa fa-edit"></i><span>Products</span></a>
</li>

<li class="{{ Request::is('productPricings*') ? 'active' : '' }}">
    <a href="{!! route('backend.productPricings.index') !!}"><i class="fa fa-edit"></i><span>Product Pricings</span></a>
</li>

