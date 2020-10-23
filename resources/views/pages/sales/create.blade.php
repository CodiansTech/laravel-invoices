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

                <form class="form-horizontal">
                    <div class="row">
                        <div class="col">
                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label" for="simpleinput">Item</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" placeholder="placeholder"
                                        id="example-placeholder">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label" for="example-email">Client</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" placeholder="placeholder"
                                        id="example-placeholder">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label" for="example-password">Date</label>
                                <div class="col-lg-10">
                                    <input class="form-control" id="example-date" type="date" name="date">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label" for="example-placeholder">Price</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" placeholder="placeholder"
                                        id="example-placeholder">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label" for="example-textarea">Shipping Price</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" placeholder="placeholder"
                                        id="example-placeholder">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label">Input Select</label>
                                <div class="col-lg-10">
                                    <select class="form-control custom-select">
                                        <option>Pending</option>
                                        <option>Active</option>
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