<!-- Product Id Field -->
<!-- <div class="form-group col-sm-6">
    {!! Form::label('product_id', 'Product Id:') !!}
    {!! Form::number('product_id', null, ['class' => 'form-control']) !!}
</div> -->

<!-- Instock Qty Field -->
<div class="form-group col-sm-6">
    {!! Form::label('instock_qty', 'Instock Qty:') !!}
    {!! Form::number('instock_qty', null, ['class' => 'form-control']) !!}
</div>

<!-- Notify Qty Field -->
<div class="form-group col-sm-6">
    {!! Form::label('notify_qty', 'Notify Qty:') !!}
    {!! Form::number('notify_qty', null, ['class' => 'form-control']) !!}
</div>

<!-- Branch Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('branch_id', 'Branch Id:') !!}
    {!! Form::number('branch_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('backend.productInventories.index') !!}" class="btn btn-default">Cancel</a>
</div>
