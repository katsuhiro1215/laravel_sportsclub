@extends('vendor.vendor_master')

@section('vendor')
    <!-- Section Header Start -->
    <section class="content-header p-4">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h1 class="content-header__title">Event管理</h1>
                </div>
                <div class="col-md-6">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb float-end">
                            <li class="breadcrumb-item">
                                <a href="/">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                <a href="{{ route('vendor.event.index') }}">Event</a>
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
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <h2>Event新規作成</h2>
                            </div>
                            <div class="col-md-6">

                            </div>
                        </div>
                    </div>
                    <form method="POST" action="{{ route('vendor.event.store') }}">
                        @csrf
                        <div class="card-body">
                            <div class="row mb-4">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="event_name" class="form-label">イベント名</label>
                                        <input type="text" name="event_name" id="event_name" class="form-control"
                                            value="{{ old('event_name') }}" required autofocus>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="information" class="form-label">イベント詳細</label>
                                        <textarea name="information" id="information" cols="30" rows="10" class="form-control">{{ old('information') }}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="event_date" class="form-label">イベント日付</label>
                                        <input type="text" name="event_date" id="event_date" class="form-control"
                                            value="{{ old('event_date') }}" required>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="start_time" class="form-label">開始時間</label>
                                        <input type="text" name="start_time" id="start_time" class="form-control"
                                            value="{{ old('start_time') }}" required>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="end_time" class="form-label">終了時間</label>
                                        <input type="text" name="end_time" id="end_time" class="form-control"
                                            value="{{ old('end_time') }}" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="max_people" class="form-label">定員</label>
                                        <input type="number" id="max_people" class="form-control"
                                            value="{{ old('max-people') }}" required>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="name" class="form-label">公開の有無</label>
                                        <div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="is_visible"
                                                    id="display" value="1" checked>
                                                <label class="form-check-label" for="display">表示</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="is_visible"
                                                    id="hidden" value="0">
                                                <label class="form-check-label" for="hidden">非表示</label>
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
