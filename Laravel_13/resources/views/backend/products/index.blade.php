<x-backend.layouts.master>

    <x-slot name=pageTitle>
        Products
    </x-slot>

    <x-backend.elements.breadcrumb>
        <x-slot name=pageHeader>
        Products
        </x-slot>
        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
        <li class="breadcrumb-item active">Products</li>
    </x-backend.elements.breadcrumb>

    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            List of Products 
            <a href="{{ route('products.create') }}" class="btn btn-secondary btn-sm">Add New</a>
        </div>
        <div class="card-body">
            @if(Session("message"))
                <div class="alert alert-success">
                    <strong>
                        {{ Session("message") }}
                    </strong>
                </div>
            @endif
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>#SL</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @php $sl = 0 @endphp
                    @foreach ($products as $product)
                    <tr>
                        <td> {{ ++$sl }} </td>
                        <td> {{ $product-> title }} </td>
                        <td> {{ $product-> description }} </td>
                        <td> <a href="{{ route('products.show', ['product' => $product->id]) }}">SHOW</a> | <a href="">EDIT</a> | <a href="">DELETE</a> </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</x-backend.layouts.master>