@extends('template')
@section('content')


<div class="container  py-5">
  <div class="row ">
    <div class="col-lg-8 col-md-10 mx-auto">

  <h1>Category Edit Form</h1>

  <form method="post" action="{{route('category.update',$category->id)}}">
    @csrf
    @method('PUT')
    <div class="form-group">
      <label>Name:</label>
    </div>
      <input type="submit" name="submit" value="Update">
    
    </form>
  </div>
 </div>
</div>

 
  @endsection