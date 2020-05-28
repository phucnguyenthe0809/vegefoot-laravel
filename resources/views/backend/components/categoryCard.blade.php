

<div class="card">
    <div class="card-header">
        <strong>Danh mục</strong> Bài viết
    </div>
    <div class="card-body">
        <div class="form-group row">

                <div class="col-md-12 ">

                    @foreach ($categorys as $category)
                    <div class="form-check checkbox">
                        <input name="category_input[]" class="form-check-input" id="check1" type="checkbox"
                            value="{{ $category->id }}">
                        <label class="form-check-label" for="check1">{{ $category->name }}</label>
                    </div>
                    @foreach ($category->categoryChild as $childCategory)
                        @include('backend.components.supCategory',['childCategory'=>$childCategory,'tab'=>'--'])
                    @endforeach
                    @endforeach
                   
                </div>
          
        </div>
    </div>
</div>