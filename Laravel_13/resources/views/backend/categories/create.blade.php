<x-backend.layouts.master>

    <x-slot name=pageTitle>
        Create Categories
    </x-slot>

    <x-backend.elements.breadcrumb>
        <x-slot name=pageHeader>
        Categories
        </x-slot>
        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
        <li class="breadcrumb-item active"> Create Categories</li>
    </x-backend.elements.breadcrumb>

    <div class="row">
        <div class="col-sm-6 offset-sm-3">

            <div class="card shadow-lg border-0 rounded-lg mt-5">

                <div class="card-header d-flex justify-content-center">
                    <a href="{{ route('categories.index') }}" class="btn btn-secondary btn-sm">List</a>
                    <i class="fas fa-table me-1 ps-4"></i>
                    <h5 class="">Add New Category </h5>
                </div>

                <div class="card-body">
                    <form action="{{ route('categories.store') }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="categoryTitle" class="form-label">Title</label>
                            <input type="text" class="form-control" id="categoryTitle" name="title">
                        </div>
                        <div class="mb-3">
                            <label for="categoryDescription" class="form-label">Description</label>
                            <input type="text" class="form-control" id="categoryDescription" name="description">
                        </div>
                        <button type="submit" class="btn btn-secondary">Submit</button>
                        </form>
                </div>

            </div>

        </div>
    </div>

</x-backend.layouts.master>