@extends('backend.layout.layout')

{{-- css --}}
@section('css')
<link href="https://cdn.quilljs.com/1.2.2/quill.snow.css" rel="stylesheet">
    @parent
    
@endsection

@section('script')
    @parent
    <script src="https://cdn.quilljs.com/1.2.0/quill.js"></script>
    <script src="https://eduvie.com.vn/backend/js/image-resize.min.js"></script>
    <script src="https://eduvie.com.vn/backend/js/resize-customer.js"></script>
@endsection
{{-- main --}}
@section('main')
<div class="c-body">
    <main class="c-main">
        <div class="container-fluid">
            <div id="ui-view" data-select2-id="ui-view">
                <form action="{{ route('backend.post.store') }}" enctype="multipart/form-data" method="POST">
                    @csrf
                    <div class="fade-in">
                        <div class="row">
                            <div class="col-md-9">
                                <div class="card">
                                    <div class="card-header"><strong>Bài viết </strong> mới</div>
                                    <div class="card-body">
                                       
                                            <div class="form-group row">
                                                <label class="col-md-3 col-form-label" for="text-input">Tiêu đề</label>
                                                <div class="col-md-9">
                                                    <input class="form-control" id="text-input" type="text"
                                                        name="title_input" placeholder="Tiêu đề"><span
                                                        class="help-block text-danger">Nhập tiêu đề</span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 col-form-label" for="email-input">Mô tả</label>
                                                <div class="col-md-9">
                                                    <input class="form-control" id="email-input" type="text"
                                                        name="describe_input" placeholder="mô tả về bài viết của bạn"
                                                        autocomplete="email">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 col-form-label" for="password-input">thẻ
                                                    tag</label>
                                                <div class="col-md-9">
                                                    <input class="form-control" id="password-input" type="text"
                                                        name="tag_input" placeholder="Nhập thẻ tag (SEO)"
                                                        autocomplete="new-password">
                                                </div>
                                            </div>

                                              
                                           <div class="form-group">
                                               <strong>Nội dung bài viết</strong>
                                             <textarea name="content_input" class="quilljs"></textarea>
                                           </div>
                           

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card">
                                    <div class="card-header"><strong>Tuỳ chọn</strong> Bài viết</div>
                                    <div class="card-body">
                                     

                                            <div class="form-group row">
                                                <div class="col-md-12">
                                                    <button class="btn btn-block btn-secondary" type="button">Lưu
                                                        nháp</button>
                                                    <button class="btn btn-block btn-secondary" type="button">Xem
                                                        trước</button>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label for="name">Name</label>
                                                        <input name="datetime_input" class="form-control" id="name" type="datetime-local"
                                                          >
                                                    </div>
                                                </div>
                                            </div>

                                
                                    </div>
                                    <div class="card-footer">
                                        <button name="submit" class="btn btn-sm btn-primary float-right" type="submit" value="public_post"> Đăng
                                            bài</button>

                                    </div>
                                </div>
                                {{-- component category card --}}
                                <x-backend.category-card />

                                <div class="card">
                                    <div class="card-header">
                                        <strong>Ảnh</strong> Miêu tả
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group row">
                            
                                            <div class="col-md-9">
                                                <input name="image_input" id="file-input" type="file" name="file-input">
                                                </div>
                                          
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>




                    </div>
                </form>
            </div>
        </div>
    </main>
</div>
@stop
