@extends('layout')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">

        <div class="row">
            <div class="col order-0">
                <div class="card">
                    <div class="d-flex align-items-end row">
                        <div class="col">
                            <div class="card-body">
                                <form method="POST" action="{{ route('product.store') }}" class="browser-default-validation">
                                    @csrf
                                    <div class="mb-3">
                                        <label class="form-label" for="basic-default-name">Nama Produk</label>
                                        <input type="text" class="form-control" name="nm_produk" id="basic-default-name"
                                            placeholder="Silahkan Masukkan Nama Produk" required="">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="basic-default-bio">Keterangan</label>
                                        <textarea class="form-control" name="keterangan" id="basic-default-bio" name="basic-default-bio" rows="3"
                                            required=""></textarea>
                                    </div>

                                    <div class="row">
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
