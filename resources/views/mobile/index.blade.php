@extends('layouts.main')
@section('title', 'Mobiles List')
@section('content')

    <table class="table" border="3">
        <tr>
            <th>Brand</th>
            <th>Model</th>
            <th>Operating System</th>
            <th>Storage Capacity</th>
            <th>RAM</th>
            <th>Price</th>
            <th>Status</th>
            <th>Created At</th>
            <th>Action</th>
        </tr>
        @foreach ($mobiles as $mobile)
            <tr>
                <td>{{ $mobile->brand ?? 'N/A' }}</td>
                <td>{{ $mobile->model ?? 'N/A' }}</td>
                <td>{{ $mobile->operating_system ?? 'N/A' }}</td>
                <td>{{ $mobile->storage_capacity ?? 'N/A' }} GB</td>
                <td>{{ $mobile->ram ?? 'N/A' }} GB</td>
                <td>${{ $mobile->price ?? 'N/A' }}</td>
                <td style="cursor: pointer;">
                    @if ($mobile->deleted_at)
                        <span class="badge text-bg-danger"
                            title="Inactive since {{ Carbon\Carbon::parse($mobile->deleted_at)->format('d M Y h:i A') }}">Inactive</span>
                    @else
                        <span class="badge text-bg-primary"
                            title="Active since {{ Carbon\Carbon::parse($mobile->created_at)->format('d M Y h:i A') }}">Active</span>
                    @endif
                </td>
                <td>{{ Carbon\Carbon::parse($mobile->created_at)->format('d M Y h:i A') }}</td>
                <td class="actions d-flex gap-2">
                    <a class="btn btn-primary" href="{{ route('mobiles.edit', $mobile->id) }}">Edit</a>

                    <form action="{{ route('mobiles.delete', $mobile->id) }}" method="post">
                        @csrf
                        <button class="btn btn-danger" onclick="return confirm('Are you sure?');">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

@endsection
