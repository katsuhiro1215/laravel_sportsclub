@extends('admin.admin_master')

@section('admin')
    <!-- Section Header Start -->
    <section class="content-header p-4">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h1 class="content-header__title">仕入先管理</h1>
                </div>
                <div class="col-md-6">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb float-end">
                            <li class="breadcrumb-item">
                                <a href="/">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Supplier
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
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <h2>Vendor新規作成</h2>
                            </div>
                            <div class="col-md-6">
                                <a href="{{ route('admin.vendor.index') }}"
                                    class="btn btn-success btn-lg border-rounded float-end">
                                    <i class="fas fa-plus"></i>
                                    Vendor一覧
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <form method="GET" action="{{ route('admin.vendor.edit', ['vendor' => $vendor->id]) }}">

                                <div class="row">
                                    <div class="col-md-10">
                                        <div class="row mb-4">
                                            <div class="col-md-6">
                                                <label for="name" class="form-label">名前<span class="text-danger ps-2"><i
                                                            class="fa-solid fa-asterisk"></i>必須</span></label>
                                                <div class="form-group">
                                                    <p>{{ $vendor->name }}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <div class="col-md-6">
                                                <label for="email" class="form-label">メールアドレス<span
                                                        class="text-danger ps-2"><i
                                                            class="fa-solid fa-asterisk"></i>必須</span></label>
                                                <div class="form-group">
                                                    <p>{{ $vendor->email }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-app bg-warning float-end">
                                    <i class="fas fa-save"></i>編集する
                                </button>
                            </form>
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
