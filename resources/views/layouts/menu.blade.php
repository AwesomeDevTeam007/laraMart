<li class="{{ Request::is('categories*') ? 'active' : '' }}">
    <a href="{!! route('admin.categories.index') !!}"><i class="fa fa-edit"></i><span>Categories</span></a>
</li>

<li class="{{ Request::is('branches*') ? 'active' : '' }}">
    <a href="{!! route('admin.branches.index') !!}"><i class="fa fa-edit"></i><span>Branches</span></a>
</li>

<li class="{{ Request::is('locations*') ? 'active' : '' }}">
    <a href="{!! route('admin.locations.index') !!}"><i class="fa fa-edit"></i><span>Locations</span></a>
</li>

<li class="{{ Request::is('products*') ? 'active' : '' }}">
    <a href="{!! route('admin.products.index') !!}"><i class="fa fa-edit"></i><span>Products</span></a>
</li>

<li class="{{ Request::is('productImages*') ? 'active' : '' }}">
    <a href="{!! route('admin.productImages.index') !!}"><i class="fa fa-edit"></i><span>Product Images</span></a>
</li>

<li class="{{ Request::is('productAttributes*') ? 'active' : '' }}">
    <a href="{!! route('admin.productAttributes.index') !!}"><i class="fa fa-edit"></i><span>Product Attributes</span></a>
</li>

<li class="{{ Request::is('productInventories*') ? 'active' : '' }}">
    <a href="{!! route('admin.productInventories.index') !!}"><i class="fa fa-edit"></i><span>Product Inventories</span></a>
</li>

<li class="{{ Request::is('productPrices*') ? 'active' : '' }}">
    <a href="{!! route('admin.productPrices.index') !!}"><i class="fa fa-edit"></i><span>Product Prices</span></a>
</li>

<li class="{{ Request::is('productOffers*') ? 'active' : '' }}">
    <a href="{!! route('admin.productOffers.index') !!}"><i class="fa fa-edit"></i><span>Product Offers</span></a>
</li>

<li class="{{ Request::is('productTierPrices*') ? 'active' : '' }}">
    <a href="{!! route('admin.productTierPrices.index') !!}"><i class="fa fa-edit"></i><span>Product Tier Prices</span></a>
</li>

<li class="{{ Request::is('productTransfers*') ? 'active' : '' }}">
    <a href="{!! route('admin.productTransfers.index') !!}"><i class="fa fa-edit"></i><span>Product Transfers</span></a>
</li>

<li class="{{ Request::is('productDamageds*') ? 'active' : '' }}">
    <a href="{!! route('admin.productDamageds.index') !!}"><i class="fa fa-edit"></i><span>Product Damageds</span></a>
</li>

<li class="{{ Request::is('purchases*') ? 'active' : '' }}">
    <a href="{!! route('admin.purchases.index') !!}"><i class="fa fa-edit"></i><span>Purchases</span></a>
</li>

<li class="{{ Request::is('purchaseItems*') ? 'active' : '' }}">
    <a href="{!! route('admin.purchaseItems.index') !!}"><i class="fa fa-edit"></i><span>Purchase Items</span></a>
</li>

<li class="{{ Request::is('suppliers*') ? 'active' : '' }}">
    <a href="{!! route('admin.suppliers.index') !!}"><i class="fa fa-edit"></i><span>Suppliers</span></a>
</li>

<li class="{{ Request::is('orders*') ? 'active' : '' }}">
    <a href="{!! route('admin.orders.index') !!}"><i class="fa fa-edit"></i><span>Orders</span></a>
</li>

<li class="{{ Request::is('orderItems*') ? 'active' : '' }}">
    <a href="{!! route('admin.orderItems.index') !!}"><i class="fa fa-edit"></i><span>Order Items</span></a>
</li>

<li class="{{ Request::is('invoices*') ? 'active' : '' }}">
    <a href="{!! route('admin.invoices.index') !!}"><i class="fa fa-edit"></i><span>Invoices</span></a>
</li>

<li class="{{ Request::is('transactions*') ? 'active' : '' }}">
    <a href="{!! route('admin.transactions.index') !!}"><i class="fa fa-edit"></i><span>Transactions</span></a>
</li>

