<ol class="breadcrumb border-0 m-0 px-0 px-md-3">
    @isset($pathRoot)
        <li class="breadcrumb-item">{{ $pathRoot }}</li>
    @endisset
    @isset ($path1)
        <li class="breadcrumb-item">{{ $path1 }}</li>
    @endisset
    @isset ($path2)
        <li class="breadcrumb-item">{{ $path2 }}</li>
    @endisset
</ol>