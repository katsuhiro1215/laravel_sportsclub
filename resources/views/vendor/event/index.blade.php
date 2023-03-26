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
                                Event
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
                                <h2>Event一覧</h2>
                            </div>
                            <div class="col-md-6">
                                <div class="float-end">
                                    <a href="{{ route('vendor.event.create') }}"
                                        class="btn btn-success btn-lg border-rounded">
                                        <i class="fas fa-plus"></i>
                                        新規作成
                                    </a>
                                </div>
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
                                            SL
                                        </th>
                                            <th class="sorting">イベント名</th>
                                            <th class="sorting">開始日時</th>
                                            <th class="sorting">終了日時</th>
                                            <th class="sorting">予約人数</th>
                                            <th class="sorting">定員</th>
                                            <th class="sorting">表示・非表示</th>
                                            <th>操作</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($events as $key => $event)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $event->name }}</td>
                                                <td>{{ $event->start_date }}</td>
                                                <td>{{ $event->end_date }}</td>
                                                <td>
                                                    @if (is_null($event->number_of_people))
                                                        0
                                                    @else
                                                        {{ $event->number_of_people }}
                                                    @endif
                                                </td>
                                                <td>{{ $event->max_people }}</td>
                                                <td>{{ $event->is_visible }}</td>
                                                <td>
                                                    <button type="button" onclick="location.href='{{ route('vendor.event.show', ['event' => $event->id]) }}'" class="btn btn-lg btn-info border-rounded">
                                                        <i class="fas fa-barcode"></i>
                                                        詳細
                                                    </button>
                                                    <button type="button" onclick="location.href='{{ route('vendor.event.edit', ['event' => $event->id]) }}'" class="btn btn-lg btn-warning border-rounded">
                                                        <i class="fas fa-edit"></i>
                                                        編集
                                                    </button>
                                                    <form id="delete_{{ $event->id }}" method="POST" action="{{ route('vendor.event.destroy', ['event' => $event->id]) }}" style="display: inline;">
                                                        @csrf
                                                        @method('delete')
                                                        <a href="#" data-id="{{ $event->id }}" onclick="deletePost(this)" class="btn btn-lg btn-danger border-rounded">
                                                            <i class="fas fa-trash"></i>
                                                            削除
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
