<x-backend.layouts.master>

    <x-slot name=pageTitle>
        Categories
    </x-slot>

    <x-backend.elements.breadcrumb>
        <x-slot name=pageHeader>
        Categories
        </x-slot>
        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
        <li class="breadcrumb-item active">Categories</li>
    </x-backend.elements.breadcrumb>

    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            List of Categories 
            <a href="{{ route('categories.create') }}" class="btn btn-secondary btn-sm">Add New</a>
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
                    @foreach ($categories as $category)
                    <tr>
                        <td> {{ ++$sl }} </td>
                        <td> {{ $category-> title }} </td>
                        <td> {{ $category-> description }} </td>
                        <td> <a href="{{ route('categories.show', ['category' => $category->id]) }}">SHOW</a> | <a href="">EDIT</a> | <a href="">DELETE</a> </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</x-backend.layouts.master>