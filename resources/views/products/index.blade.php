<h3>Products</h3>
<table border="1">
    <thead>
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Category</th>
            <th>Price</th>
            <th>Stok</th>
            <th>Status</th>
            <th>Image</th>        
            <th>    
                <a href="{{route('products.create')}}">+ create Customer</a>
            </th>
        </tr>
    </thead>
    </tbody>
</table>
        @foreach ($products as $v)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $v->name }}</td>
            <td>{{ $v->categories->name ?? '-' }}</td>
            <td>{{ number_format($v->price, 0, ',', ',') }}</td>
            <td>{{ $v->stock }}</td>
            <td>{{ $ucfirst($v->status) }}</td>
            <td>
                @if ($v->image)
                <img src="{{ asset('stroge/'.$v->image) }}" width="60">
                @else
                -
                @endif
            </td>
            <td>
                <from action="" method="POST" style="display:inline">
                {{ csrf_field() }}
                @method('DELETE')
                <a href="">Edit</a>
                <button type="submit" onclick="return confirm('Are you sure you want to delete this products?')">
                    Delete
                </button>
            </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
       