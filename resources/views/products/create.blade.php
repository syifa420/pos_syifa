<h3>Add Product</h3>
<form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data"
    {{ csrf_field() }}
    <label>Name</label><br>
    <input type="text" name="name">
    </br>
    <label>Description</label>
    <textarea name="description"></textarea>
    </br>
    <label>Price</label>
    <input type="mumber" name="price">
    </br>
    <label>Stock</label>
    <input type="number" name="stock">
    </br>
    <label>Category</label>
    <select name="categorie_id">
        <option value="">--Choose Ctegory--</option>
        @foreach ($categories as $category)
        <option value="{{ $category->categorie_id }}">
            {{ $category->name }}
        </option>
        @endforeach
    </select>
    </br>
    <label>Status</label>
    <select>name="status"
        <option value="available" selected>available</option>
        <option value="unavailable">Unavailable</option>
    </select>
    </br>
    <label>Image</label>
    <input type="file" name="image">
    </br>

    <button type="submit">Save</button>
</form>