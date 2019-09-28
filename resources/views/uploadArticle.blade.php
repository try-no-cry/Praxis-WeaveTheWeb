@extends('layout.navbar')

@section('content')
<div class="container">

<form action="{{ route('uploadArticle') }}" method="post" enctype="multipart/form-data">

    @csrf 
 


    <div>
    <label for="title">Title</label>
    <input type="text" name="title" id="title" style="width:80%;" >
    </div>

    
    <div>
    <label for="body">Body:</label>
    <input type="text" name="body" id="body" style="width:80%;" >
    </div>

   

    <input type="file" name="articleImage" >
   

    <br>
    
    <button type="submit">Submit Article</button>
</form>
</div>
@endsection