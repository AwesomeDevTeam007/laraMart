<!-- Product Id Field -->
<!-- <div class="form-group col-sm-6">
    {!! Form::label('product_id', 'Product Id:') !!}
    {!! Form::number('product_id', null, ['class' => 'form-control']) !!}
</div> -->

<!-- Branch Id Field -->
<div class="form-group col-sm-12">
    <!-- {!! Form::label('branch_id', 'Branch Id:') !!} -->
     {!! Form::hidden('branch_id[]', $branch->id, ['class' => 'form-control']) !!} 
     <h3> {!! $branch->name !!}</h3>
</div>

<!-- Instock Qty Field -->
<div class="form-group col-sm-6">
    {!! Form::label('instock_qty', 'Instock Qty:') !!}
    {!! Form::number('instock_qty[]', $branch->instock_qty, ['class' => 'form-control']) !!}
</div>

<!-- Notify Qty Field -->
<div class="form-group col-sm-6">
    {!! Form::label('notify_qty', 'Notify Qty:') !!}
    {!! Form::number('notify_qty[]', $branch->notify_qty, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-md-12">
</div>


