<div class="col-md-12 col-lg-12">
    <div class="card overflow-hidden">
        <div class="card-header d-flex justify-content-between flex-wrap">
            <h5>Transaction History</h5>
            <div class="dropdown">
                <span class="dropdown-toggle" id="dropdownMenuButton7" data-bs-toggle="dropdown" aria-expanded="false"
                    role="button">
                </span>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton7">
                    <a class="dropdown-item " href="javascript:void(0);">Action</a>
                    <a class="dropdown-item " href="javascript:void(0);">Another action</a>
                    <a class="dropdown-item " href="javascript:void(0);">Something else here</a>
                </div>
            </div>
        </div>
        <div class="card-body p-0">
            <div class="table-responsive mt-4">
                <table id="datatable" class="table table-striped table-hover" role="grid">
                    <thead class="table-light">
                        <tr>
                            <th>Transaction ID</th>
                            <th>Date and Time</th>
                            <th class="text-end">Amount</th>
                            <th class="text-center">Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($orders as $order)
                            <tr>
                                <td>
                                    <div class="">
                                        <h6 class="text-primary">#{{ $order->id }}</h6>
                                        <p class="mb-0">Payment Number {{ $loop->iteration }}</p>
                                    </div>
                                </td>
                                <td>
                                    {{ $order->created_at->format('M d, Y, h:ia') }}
                                </td>
                                <td class="text-end">${{ number_format($order->total_amount, 2) }}</td>
                                <td class="text-center">

                                    @if ($order->status === 'paid')
                                        <div class="badge rounded-pill bg-soft-info">
                                    @elseif ($order->status === 'completed')
                                        <div class="badge rounded-pill bg-soft-success">
                                    @else
                                        <div class="badge rounded-pill bg-soft-warning">
                                    @endif


                                    {{ ucfirst($order->status) }}
            </div>
            </td>
            <td class="text-center">
                <div class="dropdown">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                    </svg>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton2">
                        <form action="{{ route('dashboard.transactions.confirm', $order->id) }}" method="POST">
                            @csrf
                        <li><button type="submit" class="dropdown-item" href="#">
                            @if ($order->status === 'paid') Confirm
                                @else -
                                @endif
                            </button></li>
                    </ul>
                </div>
            </td>
            </tr>
        @empty
        <tr>
            <td colspan="5" class="text-center py-4">
                <div class="text-muted">No transactions found.</div>
            </td>
        </tr>
            @endforelse

            </tbody>
            </table>
        </div>
    </div>
</div>
</div>
