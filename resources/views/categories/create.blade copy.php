<h3>Add Category</h3>
<form action="{{ route('category.store') }}" method="POST">
    {{ csrf_field() }}
    <table>Nama:</label>
    <input type="text" name="name" value="{{old('name')}}">
    <br>
    @if ($errors->has('name')
    <span>{{ $errors->first('name') }}</spam>
    @endif
    <br>
    <label>Deskripsi:</label>
    <textarea name="deskripsi"></textarea>
    <br>
    <button type="submit">Save</button>
</from>    