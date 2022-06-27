@extends('layouts.homepage')
@section('title', 'Troli')
@section('content')

    <body>
        <div class="content-wrapper">
            <div class="content-header">
                <br>
                <main class="my-6">
                    <div class="container px-12 mx-auto">
                        <div class="flex justify-center my-12">
                            <div
                                class="flex flex-col w-full p-8 text-gray-800 bg-white shadow-lg pin-r pin-y md:w-4/5 lg:w-4/5">
                                @if ($message = Session::get('success'))
                                    <div class="p-4 mb-9 rounded" style="background-color: #4BB543; color:white;">
                                        <p class="text-green-800">{{ $message }}</p>
                                    </div>
                                @endif

                                <table class="table table-hover table-condensed" cellspacing="1">
                                    <thead>
                                        <tr class="h-12 uppercase">
                                            <th class="text-left">Produk</th>
                                            <th class="hidden md:table-cell"></th>
                                            <th class="pl-5 text-left lg:text-right ">
                                                <span class="lg:hidden" title="Quantity"></span>
                                                <span class="hidden lg:inline">Kuantiti</span>
                                            </th>
                                            <th class="hidden text-right md:table-cell"> Harga</th>
                                            <th class="hidden text-right md:table-cell"> </th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($cartItems as $item)
                                            <tr>
                                                <td class="hidden pb-4 md:table-cell">
                                                    <a href="#">
                                                        <img src="{{ asset('assets/images/produk/' . $item->attributes->image) }}"
                                                            class="w-20 rounded" alt="Thumbnail" height="100px">
                                                    </a>
                                                </td>
                                                <td>
                                                    <a href="#">
                                                        <p class="mb-2 md:ml-4">{{ $item->name }}</p>
                                                    </a>
                                                </td>
                                                <td class="justify-center mt-6 md:justify-end md:flex">
                                                    <form action="{{ route('cart.update') }}" method="POST">
                                                        @csrf
                                                        <input type="hidden" name="id" value="{{ $item->id }}">
                                                        <input type="number" name="quantity"
                                                            value="{{ $item->quantity }}" class="text-center" style="width: 50px;" min="1" />

                                                        <button type="submit" class="btn btn-warning btn-sm"> &nbsp Kemaskini &nbsp</button>
                                                    </form>
                                                </td>
                                                <td class="hidden text-right md:table-cell">
                                                    <span class="text-sm font-medium lg:text-base">
                                                        RM {{ $item->price }}
                                                    </span>
                                                </td>

                                                <td class="hidden text-right md:table-cell">
                                                    <form action="{{ route('cart.remove') }}" method="POST">
                                                        @csrf
                                                        <input type="hidden" value="{{ $item->id }}" name="id">
                                                        <button class="btn btn-danger btn-sm remove-from-cart">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" fill="currentColor" class="bi bi-trash-fill"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                                                            </svg>
                                                        </button>
                                                    </form>

                                                </td>

                                            </tr>
                                        @endforeach

                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan="5" class="text-right">
                                                <h3><strong>Jumlah RM{{ Cart::getTotal() }}</strong></h3>
                                            </td>
                                        </tr>
                            </div>

                            <tr>
                                <td class="text-left">
                                    <form action="{{ route('cart.clear') }}" method="POST">
                                        @csrf
                                        <button class="btn btn-danger btn-flat">Buang semua dalam troli</button>
                                    </form>
                                </td>
                                <td colspan="5" class="text-right">

                                    <a href="{{ url('/homebelibelah') }}" class="btn btn-warning"><i
                                            class="fa fa-angle-left"></i> Kembali membeli-belah</a>
                                    <a href="{{ route('cart.orderCart') }}" class="btn btn-success">Teruskan</a>

                                </td>

                            </tr>

                            </tfoot>
                            </table>

                            <div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
        </main>
    </body>
@endsection
