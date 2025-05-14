@extends('master')

@section('main')
<div class="container">
    <h2 class="mb-4">Shopping Cart</h2>

        @if (session('success'))
          <div class="alert alert-success">
              {{ session('success') }}
             </div>
        @endif

          @if (session('clear'))
                    <div class="alert alert-danger">
                        {{ session('clear') }}
                    </div>
                @endif

                @if (session('remove'))
                    <div class="alert alert-danger">
                        {{ session('remove') }}
                    </div>
                @endif

    @if(session('cart') && count(session('cart')) > 0)
        <table class="table table-bordered text-center">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Item</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @php $grandTotal = 0; @endphp
                @foreach(session('cart') as $id => $item)
                    @php
                        $itemTotal = $item['price'] * $item['quantity'];
                        $grandTotal += $itemTotal;
                    @endphp
                    <tr>
                        <td><img src="{{ asset('storage/'.$item['image']) }}" width="80" height="80"></td>
                        <td>{{ $item['name'] }}</td>
                        <td>${{ number_format($item['price'], 2) }}</td>
                        <td>
                            <form action="{{ route('cart.add', $id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('PUT')
                                <button type="submit" name="action" value="decrease" class="btn btn-sm btn-secondary">-</button>
                            </form>
                            <span class="mx-2">{{ $item['quantity'] }}</span>
                            <form action="{{ route('cart.add', $id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('PUT')
                                <button type="submit" name="action" value="increase" class="btn btn-sm btn-secondary">+</button>
                            </form>
                        </td>
                        <td>${{ number_format($itemTotal, 2) }}</td>
                        <td>
                            <form action="{{ route('cart.remove', $id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Remove</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                <tr>
                    <td colspan="4" class="text-end"><strong>Grand Total:</strong></td>
                    <td colspan="2"><strong>${{ number_format($grandTotal, 2) }}</strong></td>
                </tr>
            </tbody>
        </table>
        <div class="text-end">
            <a href="{{ route('cart.clear') }}" class="btn btn-danger me-2">Clear</a>
            <a href="#" class="btn btn-primary">Proceed to Checkout</a>
        </div>
    @else
        <p>Your cart is empty.</p>
    @endif
</div>
@endsection
