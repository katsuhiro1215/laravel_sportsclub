@extends('vendor.vendor_master')

@section('vendor')
    <!-- Section Header Start -->
    <section class="content-header p-4">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h1 class="content-header__title">User管理</h1>
                </div>
                <div class="col-md-6">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb float-end">
                            <li class="breadcrumb-item">
                                <a href="/">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                <a href="{{ route('vendor.user.index') }}">User</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Create
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
                <form method="POST" action="{{ route('vendor.user.store') }}">
                    @csrf
                    <div class="card">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col-md-6">
                                    <h2>User新規作成</h2>
                                </div>
                                <div class="col-md-6">
                                    <div class="float-end">
                                        <a href="{{ route('vendor.expired_user.index') }}"
                                            class="btn btn-success btn-lg border-rounded">
                                            <i class="fas fa-plus"></i>
                                            削除したUser
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-10">
                                    <div class="row mb-4">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="usertype" class="form-label">ユーザータイプ</label>
                                                <select name="usertype" id="usertype" class="form-select" required>
                                                    <option value="" selected="" disabled="">
                                                        ユーザータイプを選択してください。
                                                    </option>
                                                    <option value="Member">Member</option>
                                                    <option value="Customer">Customer</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="username" class="form-label">ユーザー名</label>
                                                <input type="text" name="username" class="form-control" id="username"
                                                    value="{{ old('username') }}" />
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="join_date" class="form-label">登録日</label>
                                                <input type="date" name="join_date" class="form-control" id="join_date"
                                                    value="{{ old('join_date') }}" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="lastname" class="form-label">名前(姓)</label>
                                                <input type="text" name="lastname" class="form-control" id="lastname"
                                                    value="{{ old('lastname') }}">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="firstname" class="form-label">名前(名)</label>
                                                <input type="text" name="firstname" class="form-control" id="firstname"
                                                    value="{{ old('firstname') }}">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="lastname_kana" class="form-label">フリガナ(セイ)</label>
                                                <input type="text" name="lastname_kana" class="form-control"
                                                    id="lastname_kana" value="{{ old('lastname_kana') }}">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="lastname" class="form-label">フリガナ(メイ)</label>
                                                <input type="text" name="firstname_kana" class="form-control"
                                                    id="firstname_kana" value="{{ old('firstname_kana') }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-md-6">
                                            <label for="email" class="form-label">メールアドレス<span
                                                    class="text-danger ps-2"><i
                                                        class="fa-solid fa-asterisk"></i>必須</span></label>
                                            <div class="form-group">
                                                <input type="email" name="email" class="form-control" id="email"
                                                    value="{{ old('email') }}" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-md-6">
                                            <label for="password" class="form-label">パスワード<span
                                                    class="text-danger ps-2"><i
                                                        class="fa-solid fa-asterisk"></i>必須</span></label>
                                            <div class="form-group">
                                                <input type="password" name="password" class="form-control"
                                                    id="password" value="" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-md-6">
                                            <label for="password_confirmation" class="form-label">パスワード確認<span
                                                    class="text-danger ps-2"><i
                                                        class="fa-solid fa-asterisk"></i>必須</span></label>
                                            <div class="form-group">
                                                <input type="password" name="password_confirmation" class="form-control"
                                                    id="password_confirmation" value="" />
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row mb-4">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="phone_number" class="form-label">電話番号</label>
                                                <input type="text" name="phone_number" class="form-control"
                                                    id="phone_number" value="{{ old('[phone_number]') }}" />
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="mobile_number" class="form-label">携帯番号</label>
                                                <input type="text" name="mobile_number" class="form-control"
                                                    id="mobile_number" value="{{ old('mobile_number') }}" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-3">
                                            <div class="form-group">
                                                <label for="birth" class="form-label">生年月日<span
                                                        class="text-danger ps-2"><i
                                                            class="fa-solid fa-asterisk"></i>必須</span></label>
                                                <input type="date" name="birth" class="form-control" id="birth"
                                                    value="{{ old('birth') }}" />
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="form-group">
                                                <label for="age" class="form-label">年齢</label>
                                                <p></p>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="form-group">
                                                <label for="gender" class="form-label">性別<span
                                                        class="text-danger ps-2"><i
                                                            class="fa-solid fa-asterisk"></i>必須</span></label>
                                                <div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="gender"
                                                            id="male" value="">
                                                        <label class="form-check-label" for="male">男</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="gender"
                                                            id="female" value="">
                                                        <label class="form-check-label" for="female">女</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="zipcode" class="form-label">郵便番号</label>
                                                <input type="text" name="postcode" class="form-control"
                                                    id="zipcode" value="{{ old('[postcode]') }}" />
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label class="form-label"></label>
                                                <div class="d-flex align-items-center">
                                                    <button type="button" class="btn btn-lg btn-primary d-block"
                                                        id="search">検索する</button>
                                                    <span id="error" class="ms-2 text-danger"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-gorup">
                                                <label></label>
                                                <p id="error"></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="address1" class="form-label">都道府県名</label>
                                                <input type="text" name="address1" class="form-control"
                                                    id="address1" value="{{ old('[address1]') }}" />
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="address1" class="form-label">市区町村名</label>
                                                <input type="text" name="address2" class="form-control"
                                                    id="address2" value="{{ old('[address2]') }}" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="address3" class="form-label">住所3</label>
                                                <input type="text" name="address3" class="form-control"
                                                    id="address3" value="{{ old('[address3]') }}" />
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
