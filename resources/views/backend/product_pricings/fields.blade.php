<!-- Product Id Field -->
<!-- <div class="form-group col-sm-6">
    {!! Form::label('product_id', 'Product Id:') !!}
    {!! Form::number('product_id', null, ['class' => 'form-control']) !!}
</div> -->

<!-- Buying Price Field -->
<div class="form-group col-sm-6">
    {!! Form::label('buying_price', 'Buying Price:') !!}
    {!! Form::number('buying_price', null, ['class' => 'form-control']) !!}
</div>

<!-- Selling Price Field -->
<div class="form-group col-sm-6">
    {!! Form::label('selling_price', 'Selling Price:') !!}
    {!! Form::number('selling_price', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('backend.productPricings.index') !!}" class="btn btn-default">Cancel</a>
</div>
