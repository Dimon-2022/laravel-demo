<x-layout>
    <x-slot:heading>{{$stock->ticker}}</x-slot:heading>
    <h1>{{$stock->full_name}}</h1>
    <p>Quantity : {{$stock->quantity}}</p>
    <p>Ticker: {{$stock->ticker}}</p>
    <p>Average price: {{$stock->buy_price}}</p>

    <a href="/stocks" class="text-red-500 hover:underline hover:text-green-500">Back to my stock list</a>
</x-layout>
