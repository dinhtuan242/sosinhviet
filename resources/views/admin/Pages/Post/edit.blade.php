@extends('admin.layouts.app')
@section('content')
    <div class="content">
        <!-- Animated -->
        <div class="animated fadeIn">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <strong>Bài viết</strong> Thêm mới
                    </div>
                    <div class="card-body card-block">
                        @if(session()->has('errors'))
                            <div class="alert alert-danger">
                                {{ session()->get('errors') }}
                            </div>
                        @endif
                        <form action="{{ route('post.update', $post->id) }}" method="post" enctype="multipart/form-data" class="form-horizontal">
                            @csrf
                            @method('put')
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Title</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="text-input" name="title" placeholder="Tên bài viết" class="form-control" value="{{ $post->title }}" required>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="textarea-input" class=" form-control-label">Description</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <textarea name="description" id="description" rows="9" placeholder="Mô tả bài viết" class="form-control" required>{{ $post->description }}</textarea>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="textarea-input" class=" form-control-label">Content</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <textarea name="content" id="content" rows="9" placeholder="Nội dung bài viết" class="form-control" required>{!! utf8_decode($post->content) !!}</textarea>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="file-input" class=" form-control-label">Image</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="file" id="file-input" name="image" class="form-control-file" accept="image/*">
                                </div>
                            </div>
                            <div class="row form-group">
                                <button type="submit" class="btn btn-outline-success col-md-2">
                                    <i class="fa fa-pencil"></i>&nbsp; Sửa bài viết
                                </button>
                            </div>
                        </form>
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
@section('script')
    <script src="{{ asset('minify/ckeditor/ckeditor.js') }}"></script>
    <script>
        CKEDITOR.replace('content', {
            filebrowserBrowseUrl: '{{ route('ckfinder_browser') }}',
        });
    </script>
@endsection
