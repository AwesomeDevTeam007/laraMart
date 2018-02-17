<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $productPricing->id !!}</p>
</div>

<!-- Product Id Field -->
<div class="form-group">
    {!! Form::label('product_id', 'Product Id:') !!}
    <p>{!! $productPricing->product_id !!}</p>
</div>

<!-- Buying Price Field -->
<div class="form-group">
    {!! Form::label('buying_price', 'Buying Price:') !!}
    <p>{!! $productPricing->buying_price !!}</p>
</div>

<!-- Selling Price Field -->
<div class="form-group">
    {!! Form::label('selling_price', 'Selling Price:') !!}
    <p>{!! $productPricing->selling_price !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $productPricing->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $productPricing->updated_at !!}</p>
</div>

