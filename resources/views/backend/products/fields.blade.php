<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<!-- Code Field -->
<div class="form-group col-sm-6">
    {!! Form::label('code', 'Code:') !!}
    {!! Form::text('code', null, ['class' => 'form-control']) !!}
</div>

<!-- Barcode Field -->
<div class="form-group col-sm-6">
    {!! Form::label('barcode', 'Barcode:') !!}
    {!! Form::text('barcode', null, ['class' => 'form-control']) !!}
</div>

<!-- Barcode Path Field -->
<div class="form-group col-sm-6">
    {!! Form::label('barcode_path', 'Barcode Path:') !!}
    {!! Form::text('barcode_path', null, ['class' => 'form-control']) !!}
</div>

<!-- Thubmnail Field -->
<div class="form-group col-sm-6">
    {!! Form::label('thubmnail', 'Thubmnail:') !!}
    {!! Form::file('thubmnail') !!}
</div>
<div class="clearfix"></div>

<!-- Category Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('category_id', 'Category Id:') !!}
    {!! Form::number('category_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Subcategory Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('subcategory_id', 'Subcategory Id:') !!}
    {!! Form::number('subcategory_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Status:') !!}
    {!! Form::number('status', null, ['class' => 'form-control']) !!}
</div>

<!-- Branch Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('branch_id', 'Branch Id:') !!}
    {!! Form::number('branch_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('backend.products.index') !!}" class="btn btn-default">Cancel</a>
</div>
