@extends("layouts.main") @section("content")
<h1 class="title">Transakce a faktury</h1>

<div class="table__container">
    <table class="table">
        <tr class="table__row">
            <th class="table__head">Odběratel</th>
            <th class="table__head">Dodavatel</th>
            <th class="table__head">Cena</th>
            <th class="table__head">Akce</th>
        </tr>
        @foreach ($invoices as $invoice)
        <tr class="table__row">
            <td class="table__data">{{$invoice->customer->name}}</td>
            <td class="table__data">{{$invoice->supplier->name}}</td>
            <td class="table__data">
                {{number_format($invoice->price, 0, ",", " ")}} Kč
            </td>
            <td class="table__data"><a href="/{{$invoice->id}}">Faktura</a></td>
        </tr>

        @endforeach
    </table>
</div>

@endsection
