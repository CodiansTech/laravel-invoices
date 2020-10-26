@extends('layouts.vertical')


@section('css')

@endsection

@section('breadcrumb')
<div class="row page-title">
    <div class="col-md-12">
        <nav aria-label="breadcrumb" class="float-right mt-1">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page"><a href="">Sales</a></li>
                {{-- <li class="breadcrumb-item active" aria-current="page">Advanced</li> --}}
            </ol>
        </nav>
        <h4 class="mb-1 mt-0">Sales</h4>
    </div>
</div>
@endsection


@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mt-0">Create Sale</h4>


                @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form class="form-horizontal" action="{{ route('sales.update', $sale->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col">
                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label" for="simpleinput">Item</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" placeholder="Item Name"
                                id="item_name" name="item_name" value="{{ $sale->item_name }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label" for="example-email">Client</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" placeholder="Client Name"
                                    id="client_name" name="client_name" value="{{ $sale->client_name }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label">Print Position</label>
                                <div class="col-lg-10">
                                    <select class="form-control custom-select" name="print_postion">
                                        <option {{($sale->print_postion === 0) ? 'selected' : ''}} value="0">Front</option>
                                        <option {{($sale->print_postion === 1) ? 'selected' : ''}} value="1">Back</option>
                                        <option {{($sale->print_postion === 2) ? 'selected' : ''}} value="2">Front and Back</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label" for="example-email">Print Size</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" placeholder="Print Size"
                                    id="print_size" name="print_size" value="{{ $sale->print_size }}">
                                </div>
                            </div>
                            {{-- <div class="form-group row">
                                <label class="col-lg-2 col-form-label" for="example-password">Date</label>
                                <div class="col-lg-10">
                                    <input class="form-control" id="example-date" type="date" name="date">
                                </div>
                            </div> --}}

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label" for="example-email">Size</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" placeholder="Size"
                                    id="size" name="size" value="{{ $sale->size }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label" for="example-email">Phone Number</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" placeholder="Phone Number"
                                    id="phone_number" name="phone_number" value="{{ $sale->phone_number }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label" for="example-email">Country</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" placeholder="Country"
                                    id="country" name="country" value="{{ $sale->country }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label" for="example-email">City</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" placeholder="City"
                                    id="city" name="city" value="{{ $sale->city }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label" for="example-email">Address</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" placeholder="Address"
                                    id="address" name="address" value="{{ $sale->address }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label" for="example-placeholder">Price</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" placeholder="Price"
                                        id="price" name="price" value="{{ $sale->price }}">
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label" for="example-textarea">Shipping Price</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" placeholder="Shipping Price"
                                        id="shipping_price" name="shipping_price" value="{{ $sale->shipping_price }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label">Status</label>
                                <div class="col-lg-10">
                                    <select class="form-control custom-select" name="status">
                                        <option {{($sale->status === 0) ? 'selected' : ''}} value="0">Pending</option>
                                        <option {{($sale->status === 1) ? 'selected' : ''}} value="1">Shipped</option>
                                        <option {{($sale->status === 2) ? 'selected' : ''}} value="2">Delivered</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

            </div> <!-- end card-body -->
        </div> <!-- end card-->
    </div><!-- end col -->
</div>

@endsection

@section('script')
@endsection

@section('script-bottom')
@endsection