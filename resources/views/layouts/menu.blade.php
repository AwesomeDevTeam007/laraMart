<li class="{{ Request::is('products*') ? 'active' : '' }}">
    <a href="{!! route('backend.products.index') !!}"><i class="fa fa-edit"></i><span>Products</span></a>
</li>

<li class="{{ Request::is('branches*') ? 'active' : '' }}">
    <a href="{!! route('backend.branches.index') !!}"><i class="fa fa-edit"></i><span>Branches</span></a>
</li>

