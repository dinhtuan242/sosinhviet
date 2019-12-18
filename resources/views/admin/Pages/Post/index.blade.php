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
                        <a href="{{ route('post.create') }}">
                            <i class="fa fa-plus-circle">&nbsp;Thêm bài viết</i>
                        </a>
                        @if(session()->has('success'))
                            <div class="alert alert-success">
                                {{ session()->get('success') }}
                            </div>
                        @endif
                        {{ $posts->appends(request()->all())->links() }}
                        <table class="table">
                            <thead class="thead-dark">
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Tiêu đề</th>
                                <th scope="col">Mô tả</th>
                                <th scope="col">SLug</th>
                                <th scope="col">Hành động</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($posts as $key => $post)
                                <tr>
                                    <td>{{ $post->id }}</td>
                                    <td>{{ $post->title }}</td>
                                    <td>{{ $post->description }}</td>
                                    <td>{{ $post->slug }}</td>
                                    <td class="row">
                                        <a href="{{ route('post.edit', $post->id) }}">
                                            <i class="col-md-6 fa fa-pencil-square-o edit text-success" aria-hidden="true"></i>
                                        </a>
                                        <form method="post" action="{{ route('post.destroy', $post->id) }}">
                                            @csrf
                                            @method('delete')
                                            <button type="submit">
                                                <i class="col-md-6 fa fa-times delete text-danger" aria-hidden="true"></i>
                                            </button>
                                        </form>
                                    </td>
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
