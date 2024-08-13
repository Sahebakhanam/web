@extends('header')

@section('main')
    <div class="blog-detail-container">
        <!-- Blog Heading -->
        <div class="blog-header">
            <h1>{{ $blog->main_heading }}</h1>
        </div>

        <!-- Main Image -->
        <div class="blog-main-image">
            <img src="{{ asset($blog->main_image) }}" alt="{{ $blog->main_heading }}">
        </div>

        <!-- Subcontents -->
        <div class="blog-subcontents">
            @foreach ($blog->subContents as $subContent)
                <div class="subcontent-item">
                    @if ($subContent->subheading)
                        <h3>{{ $subContent->subheading }}</h3>
                    @endif
                    <p>{{ $subContent->description }}</p>
                    @if ($subContent->sub_image)
                        <img src="{{ asset($subContent->sub_image) }}" alt="{{ $subContent->subheading }}">
                    @endif
                </div>
            @endforeach
        </div>
    </div>
@endsection
