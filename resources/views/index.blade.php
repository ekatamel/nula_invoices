@extends("layouts.main") @section("content")
<h1 class="title">Transakce a faktury</h1>

<div class="table__container">
    <table>
        <tr>
            <th>Odběratel</th>
            <th>Dodavatel</th>
            <th>Cena</th>
            <th>Akce</th>
        </tr>
        @foreach ($invoices as $invoice)
        <tr>
            <td>{{$invoice->customer->name}}</td>
            <td>{{$invoice->supplier->name}}</td>
            <td>{{number_format($invoice->price, 0, ",", " ")}} Kč</td>
            <td><a href="/{{$invoice->id}}">Faktura</a></td>
        </tr>

        @endforeach
    </table>
</div>

@endsection
