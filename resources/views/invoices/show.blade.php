@extends('layouts.vertical')


@section('css')

@endsection

@section('breadcrumb')
<div class="row page-title">
    <div class="col-md-12">
        <nav aria-label="breadcrumb" class="float-right mt-1">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Fatura</a></li>
                <li class="breadcrumb-item"><a href="#">Forms</a></li>
                <li class="breadcrumb-item active" aria-current="page">Create Invoice</li>
            </ol>
        </nav>
        <h4 class="mb-1 mt-0">Create Invoice</h4>
    </div>
</div>
@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">

            <form action="{{ route('invoices.store') }}" method="post">
                @csrf
                <div class="card-body">

                    <div class="col-md-4 offset-4 text-center">
                        <b>Invoice Number</b> {{ $invoice->invoice_number }}
                        <br />
                        {{ $invoice->invoice_date }}
                    </div>

                    <div class="row clearfix" style="margin-top:20px;">
                        <div class="col-md-12">
                            <div class="float-left col-md-6">
                                <b>To:</b>
                                {{ $invoice->customer->name }}
                                <br><br>

                                <b>Address</b>:

                                {{ $invoice->customer->address }}

                                @if ($invoice->customer->postcode != ''),
                                {{ $invoice->customer->postcode }}
                                @endif

                                , {{ $invoice->customer->city }}

                                @if ($invoice->customer->state != ''),
                                {{ $invoice->customer->state }}
                                @endif

                                , {{ $invoice->customer->country }}

                                @if($invoice->customer->phone != '')
                                <br> <br> <b>Phone</b>: {{ $invoice->customer->phone }}
                                @endif

                                @if($invoice->customer->email != '')
                                <br> <br> <b>Email</b>: {{ $invoice->customer->email }}
                                @endif

                                @if($invoice->customer->customer_fields)
                                @foreach ($invoice->customer->customer_fields as $field)
                                <br> <br> <b> {{ $field->field_key }} </b>: {{ $field->field_value }}
                                @endforeach
                                @endif
                            </div>
                            <div class="float-right col-md-4">
                                <b>Seller details</b>:
                                <br /> <br />
                                Your company name
                                <br />
                                Ortakoll, Bekim Berisha, Prizren
                                <br />
                                Email: filanfisteku@company.com
                                <br />
                                VAT Number: xx xxxxx xxxx
                            </div>
                        </div>
                    </div>

                    <div class="row clearfix">
                        <div class="col-md-12">
                            <table class="table table-bordered table-hover" id="tab_logic">
                                <thead>
                                    <tr>
                                        <th class="text-center"> # </th>
                                        <th class="text-center"> Product </th>
                                        <th class="text-center"> Qty </th>
                                        <th class="text-center"> Price </th>
                                        <th class="text-center"> Total </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($invoice->invoice_items as $item)
                                    <tr id='addr0'>
                                        <td> {{ $loop->iteration }} </td>
                                        <td> {{ $item->name }} </td>
                                        <td> {{ $item->quantity }} </td>
                                        <td> {{ $item->price }} </td>
                                        <td> {{ number_format($item->quantity * $item->price, 2) }} </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row clearfix" style="margin-top:20px">
                        <div class="col-md-12">
                            <div class="float-right col-md-5">
                                <table class="table table-bordered table-hover" id="tab_logic_total">
                                    <tbody>
                                        <tr>
                                            <th class="text-center">Sub Total</th>
                                            <td class="text-center"> {{ number_format($invoice->total_amount, 2) }} </td>
                                        </tr>
                                        <tr>
                                            <th class="text-center">Tax</th>
                                            <td class="text-center">
                                                {{ $invoice->tax_percent }} %
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="text-center">Tax Amount</th>
                                            <td class="text-center"> {{ number_format($invoice->tax_amount * $invoice->tax_percent / 100, 2) }} </td>
                                        </tr>
                                        <tr>
                                            <th class="text-center">Grand Total</th>
                                            <td class="text-center">{{ number_format($invoice->total_amount + ($invoice->tax_amount * $invoice->tax_percent / 100), 2) }}
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div> <!-- end card-body -->
            </form>
        </div> <!-- end card-->
    </div><!-- end col -->
</div>
<!-- end row -->
@endsection

@section('script')
@endsection

@section('script-bottom')
@endsection