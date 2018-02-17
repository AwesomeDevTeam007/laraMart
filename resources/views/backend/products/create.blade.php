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

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="home">

                         {!! Form::open(['route' => 'backend.products.store']) !!}

                        @include('backend.products.fields')

                        {!! Form::close() !!}
                        
                        </div>
                        <div role="tabpanel" class="tab-pane" id="profile">
                           @include('backend.product_pricings.fields')
                        </div>
                        <div role="tabpanel" class="tab-pane" id="messages">
                         inventory
                        </div>
                        <div role="tabpanel" class="tab-pane" id="settings">
                         attributes
                        </div>
                    </div>

                    </div>

                   
                </div>
            </div>
        </div>
    </div>
@endsection
