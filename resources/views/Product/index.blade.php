@extends('layout')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">

        <div class="row">
            <div class="col order-0">
                <div class="card">
                    <div class="d-flex align-items-end row">
                        <div class="col">

                            <div class="card-body">
                                <a href="{{ route('product.create') }}"class="btn btn-primary">Tambah Data +</a>
                                <br><br>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Nama Produk</th>
                                            <th>Keterangan</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="table-border-bottom-0">
                                        @foreach ($products as $product)
                                            <tr>
                                                <td>{{ $product->nm_produk }}</td>
                                                <td>{{ $product->keterangan }}</td>
                                                <td>
                                                    <div class="dropdown">
                                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                            data-bs-toggle="dropdown"><i
                                                                class="bx bx-dots-vertical-rounded"></i></button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="bx bx-edit-alt me-2"></i> Edit</a>
                                                            <a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="bx bx-trash me-2"></i>
                                                                Delete</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
