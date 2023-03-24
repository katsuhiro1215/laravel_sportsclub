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
                <div class="col-md-6">
                    <h2>Vendor新規作成</h2>
                </div>
                <div class="col-md-6">
                    <a href="{{ route('admin.vendor.index') }}" class="btn btn-success btn-lg border-rounded float-end">
                        <i class="fas fa-plus"></i>
                        Vendor一覧
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="card-body">
                    @if ($errors->any())
                        <div class="form-medium">
                            おっと！間違いがあるようです。
                        </div>
                        <ul class="mt-3 list-disc list-inside text-sm text-red-600">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <form method="POST" action="{{ route('admin.vendor.store') }}">
                        @csrf

                        <div class="row">
                            <div class="col-md-10">
                                <div class="row mb-4">
                                    <div class="col-md-6">
                                        <label for="name" class="form-label">名前<span class="text-danger ps-2"><i
                                                    class="fa-solid fa-asterisk"></i>必須</span></label>
                                        <div class="form-group">
                                            <input type="text" name="name" class="form-control" id="name"
                                                value="{{ old('name') }}" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-md-6">
                                        <label for="email" class="form-label">メールアドレス<span class="text-danger ps-2"><i
                                                    class="fa-solid fa-asterisk"></i>必須</span></label>
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control" id="email"
                                                value="{{ old('email') }}" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-md-6">
                                        <label for="password" class="form-label">パスワード<span class="text-danger ps-2"><i
                                                    class="fa-solid fa-asterisk"></i>必須</span></label>
                                        <div class="form-group">
                                            <input type="password" name="password" class="form-control" id="password"
                                                value="" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-md-6">
                                        <label for="password_confirmation" class="form-label">パスワード確認<span class="text-danger ps-2"><i
                                                    class="fa-solid fa-asterisk"></i>必須</span></label>
                                        <div class="form-group">
                                            <input type="password" name="password_confirmation" class="form-control" id="password_confirmation"
                                                value="" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-app bg-magenta float-end">
                            <i class="fas fa-save"></i>保存する
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Section Body End -->
    <!-- Section Footer Start -->
    <section class="content-footer"></section>
    <!-- Section Footer End -->
@endsection
