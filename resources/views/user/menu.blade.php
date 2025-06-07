@extends('layouts.main')

@section('title')
    App Resto | Menu
@endsection

@section('content')
    <section id="menu" class="menu section">


        <div class="container">

            <form action="{{ route('order-item.store', $table->id) }}" method="post">
            @csrf

            <label for="exampleInputEmail1" class="form-label">Nama Pemesan</label>
            <div class="form-floating mb-3 col-4">
                <input name="table_id" type="hidden" class="form-control" id="floatingInput" placeholder="Masukkan Nama Anda" value="{{ $table->id }}" required>
                <input name="order_name" type="text" class="form-control" id="floatingInput" placeholder="Masukkan Nama Anda" required>
                <label for="floatingInput">Nama Anda</label>
            </div>

            <table class="table">
                <thead>
                    <tr>
                        <td>No</td>
                        <td>Gambar</td>
                        <td>Nama</td>
                        <td>Harga</td>
                        <td>Tipe</td>
                        <td>Pesan</td>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($menus as $menu)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td><img src="" alt="{{ $menu->name }}"></td>
                            <td>{{ $menu->name }}</td>
                            <td>{{ $menu->price }}</td>
                            <td>{{ $menu->type }}</td>
                            <td>
                                <div class="input-group">
                                    <button type="button" class="btn btn-sm btn-danger" onclick="updateQty({{ $menu->id }}, -1)">-</button>
                                    <input type="number" id="quantity-{{ $menu->id }}" name="quantities[{{ $menu->id }}]" value="0" min="0" class="form-control text-center" style="width: 60px;">
                                    <button type="button" class="btn btn-sm btn-success" onclick="updateQty({{ $menu->id }}, 1)">+</button>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="6">
                            <button type="submit" class="btn btn-primary">Bayar</button>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </form>
        </div>

    </section>
    <!-- /Menu Section -->
@endsection

@push('scripts')
<script>
    function updateQty(menuId, delta) {
        let input = document.getElementById('quantity-' + menuId);
        let current = parseInt(input.value) || 0;
        input.value = Math.max(0, current + delta);
    }
</script>

@endpush