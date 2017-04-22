@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <table class="table table-striped">
                      <thead>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Brand</th>
                        <th>Location</th>
                        <th>Condition</th>
                      </thead>
                      <tbody>
                        @foreach($products as $product)
                        <tr>
                          <td>{{ $product -> product_name }}</td>
                          <td>{{ $product -> product_description }}</td>
                          <td>{{ $product -> product_price }}</td>
                          <td>{{ $product -> brand -> brand_name }}</td>
                          <td>{{ $product -> area -> area_name }}, {{ $product -> area -> state -> state_name }}</td>
                          <td>{{ $product -> condition }}</td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
