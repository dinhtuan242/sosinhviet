@extends('admin.layouts.app')
@section('content')
    <div class="content">
        <!-- Animated -->
        <div class="animated fadeIn">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Danh sách bài viết</strong>
                    </div>
                    <div class="card-body">
                        {{ $posts->appends(request()->all())->links() }}
                        <table class="table">
                            <thead class="thead-dark">
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Tiêu đề</th>
                                <th scope="col">Mô tả</th>
                                <th scope="col">SLug</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($posts as $key => $post)
                                <tr>
                                    <td>{{ $post['id'] }}</td>
                                    <td>{{ $post['title'] }}</td>
                                    <td>{{ $post['description'] }}</td>
                                    <td>{{ $post['slug'] }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- /Widgets -->
            <div class="clearfix"></div>
            <!-- /#add-category -->
        </div>
        <!-- .animated -->
    </div>
    <!-- /.content -->
    <div class="clearfix"></div>
@endsection
