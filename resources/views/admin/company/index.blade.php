@extends('admin.admin_master')

@section('admin')
    <!-- Section Header Start -->
    <section class="content-header p-4">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h1 class="content-header__title">Company管理</h1>
                </div>
                <div class="col-md-6">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb float-end">
                            <li class="breadcrumb-item">
                                <a href="/">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Company
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
                <form method="GET" action="{{ route('admin.company.edit', ['company' => $company->id]) }}">
                    <div class="card">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col-md-6">
                                    <h2>会社概要</h2>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-3">
                                    <div class="row mb-4">
                                        <div class="text-center">
                                            <img id="showImage"
                                                src="{{ !empty($user->profile_photo_path) ? url('upload/company_images/' . $user->logo_photo_path) : url('upload/no-image.png') }}"
                                                alt="" class="img-thumbnail mt-4">
                                        </div>
                                        <p>{{ $company->logo_photo_path }}</p>
                                    </div>
                                    <div class="row mb-4">

                                    </div>
                                </div>
                                <div class="col-1">
                                </div>
                                <div class="col-6">
                                    <div class="row mb-4">
                                        <div class="col-6">
                                            <label for="name" class="form-label">会社名<span class="text-danger ps-2"><i
                                                        class="fa-solid fa-asterisk"></i>必須</span></label>
                                            <div class="form-group">
                                                <p>{{ $company->name }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-6">
                                            <label for="name" class="form-label">郵便番号</label>
                                            <div class="form-group">
                                                <p>{{ $company->postcode }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-12">
                                            <label for="name" class="form-label">住所</label>
                                            <div class="form-group">
                                                <p>{{ $company->address1 }}{{ $company->address2 }}{{ $company->address3 }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-6">
                                            <label for="name" class="form-label">電話番号</label>
                                            <div class="form-group">
                                                <p>{{ $company->phone_number }}</p>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <label for="name" class="form-label">メールアドレス</label>
                                            <div class="form-group">
                                                <p>{{ $company->email }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-6">
                                            <label for="name" class="form-label">設立日</label>
                                            <div class="form-group">
                                                <p>{{ $company->establish_date }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-12">
                                            <label for="name" class="form-label">Webサイト</label>
                                            <div class="form-group">
                                                <p>{{ $company->website }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-6">
                                            <label for="name" class="form-label">Facebook</label>
                                            <div class="form-group">
                                                <p>{{ $company->facebook }}</p>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <label for="name" class="form-label">Twitter</label>
                                            <div class="form-group">
                                                <p>{{ $company->twitter }}</p>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <label for="name" class="form-label">Instagram</label>
                                            <div class="form-group">
                                                <p>{{ $company->instagram }}</p>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <label for="name" class="form-label">YouTube</label>
                                            <div class="form-group">
                                                <p>{{ $company->youtube }}</p>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <label for="name" class="form-label">LINE</label>
                                            <div class="form-group">
                                                <p>{{ $company->line }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-app bg-warning">
                                <i class="fas fa-save"></i>編集する
                            </button>
                        </div>
                    </div>
    </section>
    <!-- Section Body End -->
    <!-- Section Footer Start -->
    <section class="content-footer"></section>
    <!-- Section Footer End -->
@endsection
