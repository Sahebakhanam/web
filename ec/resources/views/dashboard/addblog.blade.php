@extends('dashboard.dashboard')
@section('dashboard')
    <section>
        <form ction="/addblogPage" method="POST" enctype="multipart/form-data">
            @csrf

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
