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
                                <a href="{{ route('admin.company.index') }}">Company</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Edit
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
                <form method="POST" action="{{ route('admin.company.update', ['company' => $company->id]) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

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
                                        <div class="form-group text-center">
                                            <img id="showImage"
                                                src="{{ !empty($user->profile_photo_path) ? url('upload/company_images/' . $user->logo_photo_path) : url('upload/no-image.png') }}"
                                                alt="" class="img-thumbnail mt-4">
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="form-group">
                                            <label for="image" class="form-label">写真</label>
                                            <input type="file" name="logo_photo_path"
                                                class="form-control" id="image" value="" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-1">
                                </div>
                                <div class="col-6">
                                    <div class="row mb-4">
                                        <div class="col-6">
                                            <div class="form-group">

                                                <label for="name" class="form-label">会社名<span
                                                        class="text-danger ps-2"><i
                                                            class="fa-solid fa-asterisk"></i>必須</span></label>
                                                <input type="tel" name="name" class="form-control" id="name"
                                                    value="{{ $company->name }}" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-3">
                                            <div class="form-group">
                                                <label for="zipcode" class="form-label">郵便番号</label>
                                                <input type="text" name="postcode" class="form-control" id="zipcode"
                                                    value="{{ $company->postcode }}" />
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="form-group">
                                                <label class="form-label"></label>
                                                <div class="d-flex align-items-center">
                                                    <button type="button" class="btn btn-lg btn-primary d-block"
                                                        id="search">検索する</button>
                                                    <span id="error" class="ms-2 text-danger"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label class="form-label"></label>
                                                <span id="error" class="ms-2 text-danger"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-3">
                                            <div class="form-group">
                                                <label for="address1" class="form-label">都道府県名</label>
                                                <input type="text" name="address1" class="form-control" id="address1"
                                                    value="{{ $company->address1 }}" />
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="form-group">
                                                <label for="address2" class="form-label">市区町村名</label>
                                                <input type="text" name="address2" class="form-control" id="address1"
                                                    value="{{ $company->address2 }}" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="address3" class="form-label">住所</label>
                                                <input type="text" name="address3" class="form-control" id="address3"
                                                    value="{{ $company->address3 }}" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="phone_number" class="form-label">電話番号</label>
                                                <input type="text" name="phone_number" class="form-control"
                                                    id="phone_number" value="{{ $company->phone_number }}" />
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="email" class="form-label">メールアドレス</label>
                                                <input type="email" name="email" class="form-control" id="email"
                                                    value="{{ $company->email }}" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="establish_date" class="form-label">設立日</label>
                                                <input type="date" name="establish_date" class="form-control"
                                                    id="establish_date" value="{{ $company->establish_date }}" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="website" class="form-label">Webサイト</label>
                                                <input type="text" name="website" class="form-control" id="website"
                                                    value="{{ $company->website }}" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="facebook" class="form-label">Facebook</label>
                                                <input type="text" name="facebook" class="form-control"
                                                    id="facebook" value="{{ $company->facebook }}" />
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="twitter" class="form-label">Twitter</label>
                                                <input type="text" name="twitter" class="form-control" id="twitter"
                                                    value="{{ $company->twitter }}" />
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="instagram" class="form-label">Instagram</label>
                                                <input type="text" name="instagram" class="form-control"
                                                    id="instagram" value="{{ $company->instagram }}" />
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="youtube" class="form-label">YouTube</label>
                                                <input type="text" name="youtube" class="form-control" id="youtube"
                                                    value="{{ $company->youtube }}" />
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="line" class="form-label">LINE</label>
                                                <input type="text" name="line" class="form-control" id="line"
                                                    value="{{ $company->line }}" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-app bg-magenta">
                                <i class="fas fa-save"></i>保存する
                            </button>
                        </div>
                    </div>
            </div>
    </section>
    <!-- Section Body End -->
    <!-- Section Footer Start -->
    <section class="content-footer"></section>
    <!-- Section Footer End -->
@endsection
