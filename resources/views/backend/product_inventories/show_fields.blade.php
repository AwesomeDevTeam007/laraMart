<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $productInventory->id !!}</p>
</div>

<!-- Product Id Field -->
<div class="form-group">
    {!! Form::label('product_id', 'Product Id:') !!}
    <p>{!! $productInventory->product_id !!}</p>
</div>

<!-- Instock Qty Field -->
<div class="form-group">
    {!! Form::label('instock_qty', 'Instock Qty:') !!}
    <p>{!! $productInventory->instock_qty !!}</p>
</div>

<!-- Notify Qty Field -->
<div class="form-group">
    {!! Form::label('notify_qty', 'Notify Qty:') !!}
    <p>{!! $productInventory->notify_qty !!}</p>
</div>

<!-- Branch Id Field -->
<div class="form-group">
    {!! Form::label('branch_id', 'Branch Id:') !!}
    <p>{!! $productInventory->branch_id !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $productInventory->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $productInventory->updated_at !!}</p>
</div>

