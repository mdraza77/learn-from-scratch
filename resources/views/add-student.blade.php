@extends('layouts.main')
@section('title', 'Add Student')
@section('content')
    <form action="{{ route('students.create') }}" method="post">
        @csrf
        <input type="text" name="name" id="" placeholder="Name">
        <input type="email" name="email" id="" placeholder="Email">
        <input type="submit" value="Save" name="" id="">
    </form>
@endsection
