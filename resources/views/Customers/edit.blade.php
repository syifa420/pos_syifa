<h3>Add Customer</h3>
<form action="{{ route('customer.update', $dataeditcustomers->customer_id) }}" method="POST">
    {{ csrf_field() }}
    @method ('PUT')
    <table>Nama:</label>
    <input type="text" name="name"value="{{$dataeditcustomers->name}}" required>
    <br>
    <label>Phone:</label>
    <input type="text" name="phone" value="{{$dataeditcustomers->Phone}}" required>
    <br>
    <label>Address:</label>
    <textarea name ="address">{{$dataeditcustomers->}}</texarea">
    <br>
    <button type="submit">Update</button>
</from>    
