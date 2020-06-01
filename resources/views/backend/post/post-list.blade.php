@extends('backend.layout.layout')
@section('main')
<div class="c-body">
    <main class="c-main">
        <div class="container-fluid">
            <div id="ui-view" data-select2-id="ui-view">
                <div>
                    <div class="fade-in">

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header"> Danh sách bài viết</div>
                                   
                                    <div class="card-body">
                                    
                                        <table class="table table-responsive-sm table-bordered table-striped table-sm">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Image</th>
                                                    <th>Tiêu đề</th>
                                                    <th>Mô tả</th>
                                                    <th>Người viết</th>
                                                    <th>Trạng thái</th>
                                                    <th>Xoá</th>
                                                   
                                                </tr>
                                            </thead>
                                            <tbody>
                                                
                                                @foreach ($posts as $post)
                                                <tr>
                                                    <td>{{ $post->id }}</td>
                                                    <td><img width="100px" src="{{ asset($post->post_image) }}" ></td>
                                                    <td><a href="{{ route('backend.post.edit', ['id'=>$post->id]) }}">{{ $post->post_title }}</a></td>
                                                    <td>{{ $post->post_describe }}</td>
                                                    <td>{{ $post->user->fullname }}</td>
                                                    <td>
                                                        <span class="badge badge-success">Công khai</span>
                                                        <span class="badge badge-dark">Nháp</span>
                                                    </td>
                                                   <td>
                                                       <form action="{{ route('backend.post.destroy', ['id'=>$post->id]) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <a onClick="delPost('{{ $post->post_title }}',this)" class="btn btn-danger" >
                                                            <svg class="c-icon">
                                                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-trash"></use>
                                                            </svg></a>
                                                       </form>
                                                  
                                                   </td>
                                                </tr>
                                                @endforeach
                                            
                                            </tbody>
                                        </table>
                              
                                        <nav>
                                           {!! $posts->links() !!}
                                        </nav>
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

<script>
    function delPost(title,e){
        if(confirm('Bạn muốn xoá bài viết :'+title))
        {
          e.parentNode.submit();
        }
    }
</script>
@stop
