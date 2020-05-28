<div class="form-check checkbox">
    {{ $tab }}<input name="category_input[]" class="form-check-input" id="check1" type="checkbox"
        value="{{ $childCategory->id }}">
    <label class="form-check-label" for="check1">{{ $childCategory->name }}</label>
</div>
@if ($childCategory->categoryChild)  
    @foreach ($childCategory->categoryChild as $child)
        @include('backend.components.supCategory',['childCategory'=>$child,'tab'=>$tab.'--'])
    @endforeach
@endif