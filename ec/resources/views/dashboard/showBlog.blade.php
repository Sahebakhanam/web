{{-- @extends('dashboard.dashboard')
@section('dashboard')
    <section>
        @if (!isset($blogs))
            <p>Blogs variable is not set.</p>
        @else
            @if ($blogs->isEmpty())
                <p>No blog details available.</p>
            @else
                <table>
                    <thead>
                        <tr>
                            <th>Blog ID</th>
                            <th>Main Heading</th>
                            <th>Main Image</th>
                            <th>Subheading</th>
                            <th>Description</th>
                            <th>Sub Image</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($blogs as $blog)
                            @foreach ($blog->subContents as $subContent)
                                <tr>
                                    <td>{{ $blog->id }}</td>
                                    <td>{{ $blog->main_heading }}</td>
                                    <td><img src="{{ $blog->main_image }}" alt="main-image"></td>
                                    <td>{{ $subContent->subheading }}</td>
                                    <td>{{ $subContent->description }}</td>
                                    <td>
                                        @if ($subContent->sub_image)
                                            <img src="{{ $subContent->sub_image }}" alt="sub-image">
                                        @else
                                            No image
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        @endforeach
                    </tbody>
                </table>
            @endif
        @endif
    </section>
    </script>
@endsection --}}
