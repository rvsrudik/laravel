@extends('default.layouts.layout')



@section('content')

    <pre>
{{  print_r(Session::all())}}
        </pre>

<div class="col-md-9">
      <div class="">
          <h2>Contact us!</h2>
      </div>

    <form method="post" action="{{ route('contact') }}">


        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}" placeholder="">
        </div>
        <div class="form-group">
            <label for="email">Email addres</label>
            <input type="text" class="form-control" id="email" name="email" value="{{old('email')}}" placeholder="">
        </div>


        <div class="form-group">
            <label for="site">Site</label>
            <input type="text" class="form-control" id="site" name="site" value="{{old('site')}}" placeholder="">
        </div>
        <div class="form-group">
            <label for="email">Email addres</label>
            <textarea type="text" class="form-control" id="text" name="text"  placeholder="">{{old('text')}}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection