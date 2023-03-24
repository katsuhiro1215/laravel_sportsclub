@extends('admin.admin_master')

@section('admin')
    <!-- Section Header Start -->
    <section class="content-header p-4">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h1 class="content-header__title">Vendor管理</h1>
                </div>
                <div class="col-md-6">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb float-end">
                            <li class="breadcrumb-item">
                                <a href="/">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Vendor
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- Section Header End -->
    <!-- Section Body Start -->
    <section class="content-body p-4">
        <div class="container-fluid">
            <div class="row">
                <div class="card ">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <h2>削除済みVendor一覧</h2>
                            </div>
                            <div class="col-md-6">
                                <a href="{{ route('admin.vendor.create') }}"
                                    class="btn btn-success btn-lg border-rounded float-end">
                                    <i class="fas fa-plus"></i>
                                    新規作成
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <table class="table table-bordered table-hover dataTable dtr-inline">
                                    <thead>
                                        <tr>
                                            <th class="sorting sorting_asc" tabindex="0" rowspan="1" colspan="1"
                                                aria-sort="ascending">
                                                名前
                                            </th>
                                            <th class="sorting">メールアドレス</th>
                                            <th class="sorting">削除日</th>
                                            <th>操作</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($expiredVendor as $vendor)
                                            <tr>
                                                <td>{{ $vendor->name }}</td>
                                                <td>{{ $vendor->email }}</td>
                                                <td>{{ $vendor->deleted_at->diffForHumans() }}</td>
                                                <td>
                                <button type="button"
                                    onclick="location.href='{{ route('admin.expired_vendor.restore', ['vendor' => $vendor->id]) }}'"
                                    class="btn btn-lg btn-warning border-rounded">
                                    <i class="fas fa-edit"></i>
                                    元に戻す
                                </button>
                                                    <form id="delete_{{ $vendor->id }}" method="POST" action="{{ route('admin.expired_vendor.destroy', ['vendor' => $vendor->id]) }}" style="display: inline;">
                                                        @csrf
                                                        <a href="#" data-id="{{ $vendor->id }}" onclick="deletePost(this)" class="btn btn-lg btn-danger border-rounded">
                                                            <i class="fas fa-trash"></i>
                                                            完全に削除
                                                        </a>
                                                    </form>
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
    </section>
    <!-- Section Body End -->
    <!-- Section Footer Start -->
    <section class="content-footer"></section>
    <!-- Section Footer End -->
@endsection
