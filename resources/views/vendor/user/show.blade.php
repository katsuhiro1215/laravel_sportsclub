@extends('vendor.vendor_master')

@section('vendor')
    <!-- Section Header Start -->
    <section class="content-header p-4">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h1 class="content-header__title">ユーザー管理</h1>
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
                                Show
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
                                <h2>ユーザー詳細</h2>
                            </div>
                            <div class="col-md-6">
                                <a href="{{ route('vendor.user.index') }}"
                                    class="btn btn-success btn-lg border-rounded float-end">
                                    <i class="fas fa-plus"></i>
                                    ユーザー一覧
                                </a>
                            </div>
                        </div>
                    </div>
                    <form method="GET" action="{{ route('vendor.user.edit', ['user' => $user->id]) }}">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-3">
                                    <div class="row mb-4">
                                        <div class="form-group text-center">
                                            <img id="showImage"
                                                src="{{ !empty($user->profile_photo_path) ? url('upload/user_images/' . $user->logo_photo_path) : url('upload/no-image.png') }}"
                                                alt="" class="img-thumbnail mt-4">
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                    </div>
                                </div>
                                <div class="col-1">
                                </div>
                                <div class="col-6">
                                    <div class="row mb-4">
                                        <div class="col-4">
                                            <label for="usertype" class="form-label">ユーザータイプ</label>
                                            <div class="form-group">
                                                <input type="text" class="form-control" value="{{ $user->usertype }}" readonly>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <label for="username" class="form-label">ユーザー名</label>
                                            <div class="form-group">
                                                <input type="text" class="form-control" value="{{ $user->username }}" readonly>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <label for="username" class="form-label">登録日</label>
                                            <div class="form-group">
                                                <input type="date" class="form-control" value="{{ $user->join_date }}" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-4">
                                            <label for="fullname" class="form-label">名前</label>
                                            <div class="form-group">
                                                <input type="text" class="form-control" value="{{ $user->lastname }} {{ $user->firstname }}" readonly>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <label for="fullname_kana" class="form-label">フリガナ</label>
                                            <div class="form-group">
                                                <input type="text" class="form-control" value="{{ $user->lastname_kana }} {{ $user->firstname_kana }}" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-6">
                                            <label for="fullname" class="form-label">メールアドレス</label>
                                            <div class="form-group">
                                                <input type="email" class="form-control" value="{{ $user->email }}" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-6">
                                            <label for="fullname_kana" class="form-label">パスワード</label>
                                            <div class="form-group">
                                                <p>パスワードは表示できません。</p>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row mb-4">
                                        <div class="col-4">
                                            <label for="phone_number" class="form-label">電話番号</label>
                                            <div class="form-group">
                                                <input type="text" class="form-control" value="{{ $user->phone_number }}" readonly>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <label for="mobile_number" class="form-label">携帯番号</label>
                                            <div class="form-group">
                                                <input type="text" class="form-control" value="{{ $user->mobile_number }}" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-4">
                                            <label for="birth" class="form-label">誕生日</label>
                                            <div class="form-group">
                                                <input type="date" class="form-control" value="{{ $user->birth }}" readonly>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <label for="age" class="form-label">年齢</label>
                                            <div class="form-group">
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <label for="gender" class="form-label">性別</label>
                                            <div class="form-group">
                                                <input type="text" class="form-control" value="{{ $user->gender }}" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-4">
                                            <label for="name" class="form-label">郵便番号</label>
                                            <div class="form-group">
                                                <input type="text" class="form-control" value="{{ $user->postcode }}" readonly>
                                            </div>
                                        </div>
                                        <div class="col-8">
                                            <label for="name" class="form-label">住所</label>
                                            <div class="form-group">
                                                <input type="text" class="form-control" value="{{ $user->address1 }}{{ $user->address2 }}{{ $user->address3 }}" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-4">
                                            <label for="religion" class="form-label">宗教</label>
                                            <div class="form-group">
                                                <input type="text" class="form-control" value="{{ $user->religion }}" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-4">
                                            <label for="father_name" class="form-label">父親の名前</label>
                                            <div class="form-group">
                                                <input type="text" class="form-control" value="{{ $user->father_name }}" readonly>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <label for="father_name" class="form-label">父親の連絡先</label>
                                            <div class="form-group">
                                                <input type="text" class="form-control" value="{{ $user->father_phone_number }}" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-4">
                                            <label for="mother_name" class="form-label">母親の名前</label>
                                            <div class="form-group">
                                                <input type="text" class="form-control" value="{{ $user->mother_name }}" readonly>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <label for="mother_phone_number" class="form-label">母親の連絡先</label>
                                            <div class="form-group">
                                                <input type="text" class="form-control" value="{{ $user->mother_phone_number }}" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-12">
                                            <label for="information" class="form-label">備考欄</label>
                                            <div class="form-group">
                                                <textarea name="information" id="information" cols="30" rows="10" class="form-control" readonly>{{ $user->information }}</textarea>
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
