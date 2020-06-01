@extends('backend.layout.layout')
@section('script')
@parent
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="{{ asset('backend/js/customer.js') }}"></script>
@endsection
@section('main')
<div class="c-body">
    <main class="c-main">
        <div class="container-fluid">
            <div id="ui-view">
                <div>
                    <div class="fade-in">
                        <div class="row">

                            <div class="col-sm-6">
                                <form action="{{ route('backend.category.store') }}" method="post">
                                    @csrf
                                    <div class="card">
                                        <div class="card-header"><strong>Thêm</strong> <small>Danh mục</small></div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label for="name">Tên Danh mục</label>
                                                        <input class="form-control" name="cat_name" type="text"
                                                            placeholder="Tên Danh mục">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label for="name">Danh mục cha</label>
                                                        <select class="form-control" name="id_parent">
                                                            <option value="0">ROOT</option>
                                                            <x-backend.category-select :idChecked="0" />
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                                                    <button class="btn btn-pill btn-block btn-success"
                                                        type="submit">Thêm Danh mục</button>
                                                </div>
                                            </div>
                                   

                                        </div>
                                    </div>
                                </form>
                            </div>
                            




                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-header"><strong>review</strong> <small>Danh mục ( click để edit
                                            )</small>
                                        @if (session('message'))
                                        <div class="alert alert-success" role="alert">{{ session('message') }}</div>
                                        @endif
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <x-backend.category-review />

                                                <script >
                                                    function delPost(title,e){
                                                        if(confirm('Bạn muốn xoá bài viết :'+title))
                                                        {
                                                            e.parentNode.submit();
                                                        }
                                                    }
                                                </script>
                                            </div>
                                        </div>



                                    </div>
                                </div>
                            </div>



                        </div>

                    </div>
                </div>
            </div>
        </div>
    </main>
</div>

<div class="modal fade" id="model-edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    style="display: none;" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit danh mục</h4>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <div class="card">
                 
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                   
                                    <input id="cat_edit" class="form-control" name="cat_name" type="text" placeholder="Tên Danh mục">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                  
                                    <select id="id_parent" class="form-control" name="id_parent">
                                        <option value="0">ROOT</option>
                                        <x-backend.category-select :idChecked="0" />
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
    
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                <button onclick="update()" class="btn btn-primary" type="button">Cập nhật</button>
            </div>
        </div>
    </div>
</div>
</div>
@stop
