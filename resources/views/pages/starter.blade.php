@extends('layouts.vertical')


@section('css')

@endsection

@section('breadcrumb')
<div class="row page-title">
    <div class="col-md-12">
        <nav aria-label="breadcrumb" class="float-right mt-1">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Shreyu</a></li>
                <li class="breadcrumb-item"><a href="">Pages</a></li>
                <li class="breadcrumb-item active" aria-current="page">Starter</li>
            </ol>
        </nav>
        <h4 class="mb-1 mt-0">Starter Page</h4>
        <a href="{{ route('invoices.create') }}" class='btn btn-danger'>Create Invoice</a>
        <br /><br />
        <table>
            <tr>
                <th>Invoice Date</th>
                <th>Invoice Number</th>
                <th>Costumer</th>
                <th>Total Amount</th>
            </tr>
            @foreach($invoices as $invoice)
            <tr>
                <td>{{ $invoice->invoice_date }}</td>
                <td>{{ $invoice->invoice_number }}</td>
                <td>{{ $invoice->customer->name }}</td>
                <td>0</td>
            </tr>
            @endforeach
        </table>
    
    </div>
</div>
@endsection

@section('content')
@endsection

@section('script')
@endsection

@section('script-bottom')
@endsection