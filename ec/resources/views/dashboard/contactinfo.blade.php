@extends('dashboard.dashboard')

@section('dashboard')
    @if (!isset($contacts))
        <p>Contacts variable is not set.</p>
    @else
        @if ($contacts->isEmpty())
            <p>No contact details available.</p>
        @else
            <table class="contactInfo-table">
                <thead class="contactInfo-thead">
                    <tr>
                        <th class="contactInfo-th">Id</th>
                        <th class="contactInfo-th">Name</th>
                        <th class="contactInfo-th">Company</th>
                        <th class="contactInfo-th">Email</th>
                        <th class="contactInfo-th">Phone</th>
                        <th class="contactInfo-th">Service</th>
                        <th class="contactInfo-th">Budget</th>
                        <th class="contactInfo-th">Project Description</th>
                        {{-- <th class="contactInfo-th" colspan="2">Actions</th> --}}
                    </tr>
                </thead>
                <tbody class="contactInfo-tbody">
                    @foreach ($contacts as $contact)
                        <tr class="contactInfo-tr">
                            <td class="contactInfo-td">{{ $contact->id }}</td>
                            <td class="contactInfo-td">{{ $contact->contact_name }}</td>
                            <td class="contactInfo-td">{{ $contact->contact_company }}</td>
                            <td class="contactInfo-td">{{ $contact->contact_email }}</td>
                            <td class="contactInfo-td">{{ $contact->contact_phone }}</td>
                            <td class="contactInfo-td">{{ $contact->contact_service }}</td>
                            <td class="contactInfo-td">{{ $contact->contact_budget }}</td>
                            <td class="contactInfo-td">{{ $contact->contact_Description }}</td>
                            {{-- <td class="action contactInfo-td">
                                <form action="" method="POST">
                                    @csrf
                                    <div>
                                        <img src="{{ asset('assets/img/icons/edit.png') }}" alt="edit" />
                                    </div>
                                </form>
                            </td>
                            <td class="action contactInfo-td">
                                <form action="{{ route('deleteContact', ['email' => $contact->email]) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit">
                                        <img src="{{ asset('assets/img/icons/delete.png') }}" alt="delete" />
                                    </button>
                                </form>
                            </td> --}}
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    @endif
@endsection
