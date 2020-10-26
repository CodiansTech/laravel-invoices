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

                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                    
                    <h4 class="header-title mt-0 mb-1">Sales</h4>
                    <a href="{{ route('sales.create') }}" class="btn btn-primary float-right">Create</a>
                    {{-- <p class="sub-header">
                        DataTables has most features enabled by default, so all you need to do to use it with your own tables is to call the construction
                        function:
                        <code>$().DataTable();</code>.
                    </p> --}}

                    <table id="basic-datatable" class="table dt-responsive nowrap">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Item</th>
                                <th>Print Position</th>
                                <th>Size</th>
                                <th>Phone Number</th>
                                <th>Country</th>
                                <th>Address</th>
                                <th>Price</th>
                                <th>Shipping Price</th>
                                <th>Status</th>
                                {{-- <th>Action</th> --}}
                            </tr>
                        </thead>
                    
                    
                        <tbody>
                            @foreach ($sales as $sale)
                            <tr>
                                <td>{{ $sale->id }}</td>
                                <td>{{ $sale->item_name }}</td>
                                @if ($sale->print_postion == 0)
                                    <td>Front</td>
                                @elseif ($sale->print_postion == 1)
                                    <td>Back</td>
                                @elseif ($sale->print_postion == 2)
                                    <td>Front and Back</td>
                                @endif 
                                <td>{{ $sale->size }}</td>
                                <td>{{ $sale->phone_number }}</td>
                                <td>{{ $sale->country }}</td>
                                <td>{{ $sale->address }}</td>
                                <td>{{ $sale->price }}</td>
                                <td>{{ $sale->shipping_price }}</td>
                                @if ($sale->status == 0)
                                    <td>Pending</td>
                                @elseif ($sale->status == 1)
                                    <td>Shipped</td>
                                @elseif ($sale->status == 2)
                                    <td>Delivered</td>
                                @endif 
                                <td><a href="{{ route('sales.edit',$sale->id) }}" class="btn btn-sm btn-primary">Edit</a> 
                                    <form action="{{ route('sales.destroy', $sale->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                        
                                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div>
    <!-- end row-->

@endsection

@section('script-bottom')
<!-- Datatables init -->
<script src="{{ URL::asset('assets/js/pages/datatables.init.js') }}"></script>
@endsection

@section('script')
<!-- datatable js -->
<script src="{{ URL::asset('assets/libs/datatables/datatables.min.js') }}"></script>

<script>
    jQuery(function($) {
    //initiate dataTables plugin
    var myTable = 
    $('#basic-datatable')
    //.wrap("<div class='dataTables_borderWrap' />")   //if you are applying horizontal scrolling (sScrollX)
    .DataTable( {
        bAutoWidth: false,
        "aoColumns": [
            null,
            null,
            null
        ],
        "aaSorting": [],
        "bDestroy": true
        
        
        //"bProcessing": true,
        //"bServerSide": true,
        //"sAjaxSource": "http://127.0.0.1/table.php"   ,

        //,
        //"sScrollY": "200px",
        //"bPaginate": false,

        //"sScrollX": "100%",
        //"sScrollXInner": "120%",
        //"bScrollCollapse": true,
        //Note: if you are applying horizontal scrolling (sScrollX) on a ".table-bordered"
        //you may want to wrap the table inside a "div.dataTables_borderWrap" element

        //"iDisplayLength": 50


            select: {
                style: 'multi'
            }
        });
    });
</script>
@endsection