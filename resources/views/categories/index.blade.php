@extends('layout.app')
@section('content')
<div>
    <div class="row">
        <div class="col">
            <h2>Categories</h2>
            <form>
            @foreach($cats as $cat)
                <input name="cat[]" value="{{$cat->name}}"/>

            @endforeach
            <button type="submit">Update</button>
            </form>
        </div>
        <div class="col">
            <form>
            @foreach($cats as $cat)
                <input name="cat[]" value="{{$cat->name}}"/>

            @endforeach
            <button type="submit">Update</button>
            </form>
        </div>
    </div>

</div>

@endsection