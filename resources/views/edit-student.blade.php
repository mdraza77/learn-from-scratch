@extends('layouts.main')
@section('title', 'Edit Student')
@section('content')
    <form action="{{ route('students.update', $student->id) }}" method="post">
        @csrf
        @method('PUT')
        <input type="text" name="name" id="" placeholder="Name" value="{{ old('name', $student->name) }}">
        <input type="email" name="email" id="" placeholder="Email" value="{{ old('email', $student->email) }}">
        <input type="submit" value="Save" name="" id="">
    </form>
@endsection
