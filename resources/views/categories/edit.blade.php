<h3>Add Category</h3>
<form action="{{ route('category.update', $dataeditcategory->categorie_id) }}" method="POST">
    {{ csrf_field() }}
    @method ('PUT')
    <table>Nama:</label>
    <input type="text" name="name"value="{{$dataeditcategory->name}}" required>
    <br>
    <label>Description:</label>
    <textarea name="description">{{$dataeditcategory->description}}"</textarea>
    <br>
    <button type="submit">Update</button>
</from>    
