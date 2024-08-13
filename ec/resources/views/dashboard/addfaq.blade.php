@extends('dashboard.dashboard')
@section('dashboard')
    <section>
        <form action="{{ route('addfaq.store') }}" method="POST" enctype="multipart/form-data">
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
                    <option value="Maintenance & Support">Maintenance & Support</option>
                </select>
            </div>
            <div>
                <label for="quetion">Main Heading</label>
                <input type="text" name="quetion" required>
            </div>
            <div>
                <label for="answer">Description</label>
                <textarea name="answer" rows="3" required></textarea>
            </div>
            <div>
                <button type="submit">Submit</button>
            </div>
        </form>
    </section>
@endsection
