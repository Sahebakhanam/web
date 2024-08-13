@extends('dashboard.dashboard')
@section('dashboard')
    <section>
        <style>
            td {
                height: 50px;
            }

            td img {
                height: 100%
            }
        </style>
        <form action="{{ route('storeContent') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div>
                <label class="control-label">Service</label>
                <select name="category" class="form-control">
                    <option value="Web Development">Web Development</option>
                    <option value="App Development">App Development</option>
                    <option value="Ecommerce">Ecommerce</option>
                    <option value="Saas">Saas</option>
                    <option value="AI Development">AI Development</option>
                    <option value="UI/UX Design">UI/UX Design</option>
                    <option value="Logo Design">Logo Design</option>
                    <option value="Maintenance & Support">Maintanance & Support</option>
                </select>
            </div>
            <!-- Main Heading -->
            <div>
                <label for="main_heading">Main Heading</label>
                <input type="text" id="main_heading" name="main_heading" required>
            </div>

            <!-- Main Image -->
            <div>
                <label for="main_image">Main Image</label>
                <input type="file" id="main_image" name="main_image" accept="image/*" required>
            </div>

            <!-- Subheadings, Descriptions, and Images -->
            <div id="subheading-section">
                <div class="subheading-group">
                    <label for="subheading[]">Subheading</label>
                    <input type="text" name="subheading[]" required>

                    <label for="description[]">Description</label>
                    <textarea name="description[]" rows="3" required></textarea>

                    <label for="sub_image[]">Sub Image</label>
                    <input type="file" name="sub_image[]" accept="image/*">
                </div>
            </div>

            <button type="button" id="add-subheading">Add Another Subheading</button>

            <div>
                <button type="submit">Submit</button>
            </div>
        </form>
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
                            <th>Category</th>
                            <th>Main Heading</th>
                            <th>Main Image</th>
                            <th>Subheading</th>
                            <th>Description</th>
                            <th>Sub Image</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($blogs as $blog)
                            <tr>
                                <td>{{ $blog->id }}</td>
                                <td>{{ $blog->category }}</td>
                                <td>{{ $blog->main_heading }}</td>
                                <td><img src="{{ $blog->main_image }}" alt="main-image"></td>
                                @foreach ($blog->subContents as $subContent)
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

    <script>
        document.getElementById('add-subheading').addEventListener('click', function() {
            var subheadingSection = document.getElementById('subheading-section');
            var newSubheadingGroup = document.createElement('div');
            newSubheadingGroup.classList.add('subheading-group');

            newSubheadingGroup.innerHTML = `
        <label for="subheading[]">Subheading</label>
        <input type="text" name="subheading[]" required>

        <label for="description[]">Description</label>
        <textarea name="description[]" rows="3" required></textarea>

        <label for="sub_image[]">Sub Image</label>
        <input type="file" name="sub_image[]" accept="image/*">
    `;

            subheadingSection.appendChild(newSubheadingGroup);
        });
    </script>
@endsection
