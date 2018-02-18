@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Product
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                <div>

                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">General</a></li>
                        <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Pricing</a></li>
                        <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Inventory</a></li>
                        <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Attributes</a></li>
                    </ul>
                    {!! Form::model($product, ['route' => ['backend.products.update', $product->id], 'method' => 'patch']) !!}
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="home">

                        

                        @include('backend.products.fields')

                     
                        
                        </div>
                        <div role="tabpanel" class="tab-pane" id="profile">
                           @include('backend.product_pricings.fields')
                        </div>
                        <div role="tabpanel" class="tab-pane" id="messages">

                        @foreach($branches as $branch)

                        @include('backend.product_inventories.fields')

                        @endforeach

                        <!-- Submit Field -->
                        <div class="form-group col-sm-12">
                            {!! Form::submit('Save', ['class' => 'btn btn-primary','name'=>'submit_inventory']) !!}
                        </div>

                        </div>
                        <div role="tabpanel" class="tab-pane" id="settings">
                        @include('backend.product_attributes.fields')
                        </div>
                    </div>

           {!! Form::close() !!}

                    </div>

                   
                </div>
            </div>
        </div>
    </div>
@endsection

