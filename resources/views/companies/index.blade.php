@extends('layouts.app')
@section('content')
<div class="card-body">
    <table class="table">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Logo</th>
            <th>Website</th>
            <th>Actions</th>
        </tr>
        @foreach ($companies as $company)
        <tr>
            <td>{{ $company->name }}</td>
            <td>{{ $company->email }}</td>
            {{-- // TODO PAKEISTI KAD RODYTU MYSQL IR PSL PAVEIKSLIUKA KAI ADDINI  --}}
            <?php $blob = $company->logo;?>
            <td><img src="{{ 'data:image/jpeg;base64,' .base64_encode( $blob ) }}" alt="image" width="50" /></td>
            <td>{{ $company->website }}</td>
            <td>
                <form action={{ route('company.destroy', $company->id) }} method="POST">
                    <a class="btn btn-success" href={{ route('company.edit', $company->id) }}>Edit</a>
                    @csrf @method('delete')
                    <input type="submit" class="btn btn-danger" value="Delete"/>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <div>
        <a href="{{ route('company.create') }}" class="btn btn-success">Add</a>
    </div>
</div>
@endsection