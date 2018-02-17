@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Product Pricing
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'backend.productPricings.store']) !!}

                        @include('backend.product_pricings.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
