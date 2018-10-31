@extends('collection.user.layout.teamplate')
@section('content')
    <div id="content-wrapper">
        <div class="container-fluid">
            <!-- DataTables Example -->
            <div class="card mb-3">
                <div class="card-header">
                    <i class="fas fa-table"></i> Bài viết mới
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th>STT</th>
                                <th>Tiêu đề</th>
                                <th>Nhà</th>
                                <th>Ngày tạo</th
                                <th>Ngày sưả</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($posts as $key => $post)
                                <tr>
                                    <td>{{ $key++ }}</td>
                                    <td>{{ $post->title }}</td>
                                    <td>{{ $post->houses->name }}</td>
                                    <td>{{ $post->created_at }}</td>
                                    <td>{{ $post->updated_at }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

