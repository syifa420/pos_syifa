<h3>Add Customer</h3>
<form action="{{ route('customer.store') }}" method="POST">
    {{ csrf_field() }}
    <table>Nama:</label>
    <input type="text" name="name">
    <br>
    @if ($errors->has('name'))
    <span>{{ $errors->first('name') }}</span>
    @endif
    <br>
    <label>Phone:</label>
    <input type="tel" name="Phone">
    <br>
    <label>Address:</label>
    <textarea name="address"></textarea>
    <br>
    <button type="submit">update</button>
</from>