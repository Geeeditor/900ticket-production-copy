@extends('layouts.app')
@section('title', 'Transaction History')

@section('hero')
    <div class="relative top-0 flex h-[14vh] w-full justify-center bg-black md:h-[20vh]">
        {{-- Hero content can be added here --}}
    </div>
@endsection

@section('content')
    <section class="bg-white py-6">
        <div class="mx-auto w-full max-w-7xl px-4 md:px-8">
            <div class="main-data rounded-3xl bg-gray-50 p-8 sm:p-14">
                <h2 class="font-manrope mb-8 text-center text-4xl font-semibold text-black">Order History</h2>

                @if (!empty($transactionItems) && count($transactionItems) > 0)
                    @foreach (['partyTicketTransaction', 'shortletTransaction', 'flightBookingTransaction', 'hotelBookingTransaction'] as $transactionType)
                        @if (!empty($transactionItems[$transactionType]))
                            <div class="mb-6 overflow-x-auto">
                                <table class="min-w-full divide-y divide-gray-200">
                                    <thead>
                                        <tr>
                                            <th class="px-6 py-3 text-left text-lg font-medium text-red-800">
                                                {{ ucfirst(str_replace('Transaction', '', $transactionType)) }} Product
                                            </th>
                                            <th class="hidden px-6 py-3 text-lg font-medium text-gray-600 lg:table-cell">Total Price</th>
                                            <th class="hidden px-6 py-3 text-lg font-medium text-gray-600 lg:table-cell">Total Qty</th>
                                            <th class="hidden px-6 py-3 text-lg font-medium text-gray-500 lg:table-cell">Payment Date</th>
                                            <th class="hidden px-6 py-3 text-lg font-medium text-gray-500 lg:table-cell">View Receipt</th>
                                        </tr>
                                    </thead>
                                    <tbody class="divide-y divide-gray-200">
                                        @foreach ($transactionItems[$transactionType] as $transaction)
                                            <tr class="cursor-pointer transition-all duration-500 hover:bg-indigo-50">
                                                <td class="whitespace-nowrap px-6 py-4">
                                                    <h5 class="font-manrope text-xl font-semibold text-black">{{ $transaction->product_name }}</h5>
                                                </td>
                                                <td class="hidden px-6 py-4 text-xl font-semibold text-black lg:table-cell">
                                                    {{ $transaction->product_total_cost }}
                                                </td>
                                                <td class="hidden px-6 py-4 text-center text-xl font-semibold text-red-800 lg:table-cell">
                                                    {{ $transaction->product_total_quantity }}
                                                </td>
                                                <td class="hidden px-6 py-4 text-xl font-semibold text-black lg:table-cell">
                                                    {{ \Carbon\Carbon::parse($transaction->product_order_date)->format('F j, Y') }}
                                                </td>
                                                <td class="hidden px-6 py-4 lg:table-cell">
                                                    <a href="{{ route('payment.summary', ['id' => $transaction->id]) }}" class="text-blue-600">Receipt</a>
                                                    <br>
                                                    <span>{{ $transaction->status }}</span>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @else
                            <div class="mb-6 flex flex-col gap-2 rounded-lg bg-white p-4 shadow-md">
                                <h2 class="text-lg font-bold text-black">No {{ ucfirst(str_replace('Transaction', '', $transactionType)) }} Transaction History</h2>
                            </div>
                        @endif
                    @endforeach
                @else
                    <div class="flex flex-col gap-2 rounded-lg bg-white p-4 shadow-md">
                        <h2 class="text-lg font-bold text-black">You don't have any transaction history yet.</h2>
                    </div>
                @endif
            </div>
        </div>
    </section>
@endsection