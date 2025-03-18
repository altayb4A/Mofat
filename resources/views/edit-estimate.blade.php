@extends('layouts.admin')

@section('title', 'Update')

@section('content')
                <div class="col-md-6">
                    <div class="title d-flex align-items-center flex-wrap">
                        <h4 class="mr-40">Edit The Delivery Cost & Status</h4>
                    </div>
                </div>
</br>
</br>
</br>
<section class="section">
    <div class="container-fluid">

                
<tr> 
    <td>
        <form action="{{ url('update-estimate/' .$estimate->id) }}" method="POST">
            @csrf
            @method('PATCH')
            <input type="number" name="delivery_cost" value="{{ $estimate->delivery_cost }}" step="0.01" required>
    </td>
    <td>
            <select name="status" required>
                <option value="Pending" {{ $estimate->status == 'Pending' ? 'selected' : '' }}>Pending</option>
                <option value="Updated" {{ $estimate->status == 'Updated' ? 'selected' : '' }}>Updated</option>
                <option value="Ready" {{ $estimate->status == 'Ready' ? 'selected' : '' }}>Ready</option>
                <option value="OnWay" {{ $estimate->status == 'OnWay' ? 'selected' : '' }}>On The Way</option>
                <option value="Delivered" {{ $estimate->status == 'Delivered' ? 'selected' : '' }}>Delivered</option>
            </select>
    </td>
    <td>
            <button type="submit" class="btn btn-primary btn-sm"style="background-color: #00165B">Update</button>
        </form>
    </td>
</tr>
</div>
</section>
@endsection
 
