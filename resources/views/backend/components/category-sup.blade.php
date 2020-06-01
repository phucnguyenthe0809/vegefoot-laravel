<div class="form-check checkbox">
    {{ $tab }}<input @if(in_array($childCategory->id,$arrayIdChecked)) checked @endif name="category_input[]" class="form-check-input"  type="checkbox"
        value="{{ $childCategory->id }}">
    <label class="form-check-label" for="check1"> {{ $childCategory->cat_name }}</label>
</div>
@if ($childCategory->categoryChild)  
    @foreach ($childCategory->categoryChild as $child)
        @include('backend.components.supCategory',['childCategory'=>$child,'tab'=>$tab.'⚯'])
    @endforeach
@endif