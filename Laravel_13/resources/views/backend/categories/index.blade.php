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
            Add New
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Description</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Donna Snider</td>
                        <td>Customer Support</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</x-backend.layouts.master>