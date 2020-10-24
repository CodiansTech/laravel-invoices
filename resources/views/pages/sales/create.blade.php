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
                <h4 class="header-title mt-0">Input Types</h4>

                <form class="form-horizontal" action="{{ route('sales.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col">
                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label" for="simpleinput">Item</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" placeholder="Item Name"
                                        id="item_name" name="item_name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label" for="example-email">Client</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" placeholder="Client Name"
                                    id="client_name" name="client_name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label">Print Position</label>
                                <div class="col-lg-10">
                                    <select class="form-control custom-select" name="print_postion">
                                        <option value="0">Front</option>
                                        <option value="1">Back</option>
                                        <option value="2">Front and Back</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label" for="example-email">Print Size</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" placeholder="Print Size"
                                    id="print_size" name="print_size">
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
                                    id="size" name="size">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label" for="example-email">Phone Number</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" placeholder="Phone Number"
                                    id="phone_number" name="phone_number">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label" for="example-email">County</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" placeholder="Country"
                                    id="country" name="country">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label" for="example-email">Address</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" placeholder="Address"
                                    id="address" name="address">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label" for="example-placeholder">Price</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" placeholder="Price"
                                        id="price" name="price">
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label" for="example-textarea">Shipping Price</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" placeholder="Shipping Price"
                                        id="shipping_price" name="shipping_price">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label">Status</label>
                                <div class="col-lg-10">
                                    <select class="form-control custom-select" name="status">
                                        <option value="0">Pending</option>
                                        <option value="1">Shipped</option>
                                        <option value="2">Delivered</option>
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