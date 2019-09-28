@extends('layout.navbar')

@section('content')


<form action="{{ route('uploadImages') }}" method="post" enctype="multipart/form-data">
    @csrf
    <label for="article_id">Article ID</label>
    <input type="number" name="article_id" id="article_id">
    <input type="file" name="articleImage" id="articleImage">
    <button type="submit"> Upload</button>
</form>

@endsection 