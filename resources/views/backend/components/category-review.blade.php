@foreach ($categorys as $category)
   <div style="margin-bottom: 10px">
    <span>{!! $tab !!}</span><span class="js-edit-category" style="cursor: pointer; color:darkslategrey; font-size: 20px;" id_data="{{ $category->id }}" data-toggle="modal" data-target="#model-edit">{{$category->cat_name }}</span>
    <form style="display: inline-block;" action="{{ route('backend.category.destroy', ['id'=>$category->id]) }}" method="post">
        @csrf
        @method('DELETE')
        <a class="btn btn-danger" onclick="delPost('{{ $category->cat_name }}',this)">
            <svg class="c-icon">
                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-trash"></use>
            </svg>
        </a>
       </form>
   </div>
    @if ($category->categoryChild)
         
        @include('backend.components.category-review',['categorys'=>$category->categoryChild,'tab'=>$tab.'&emsp;↦'])
    
    @endif

@endforeach
