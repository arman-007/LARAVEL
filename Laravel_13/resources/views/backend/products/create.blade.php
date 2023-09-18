<x-backend.layouts.master>

    <x-slot name=pageTitle>
        Create Products
    </x-slot>

    <x-backend.elements.breadcrumb>
        <x-slot name=pageHeader>
        Products
        </x-slot>
        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
        <li class="breadcrumb-item active"> Create Product</li>
    </x-backend.elements.breadcrumb>

    <div class="row">
        <div class="col-sm-6 offset-sm-3">

            <div class="card shadow-lg border-0 rounded-lg mt-5">

                <div class="card-header d-flex justify-content-center">
                    <a href="{{ route('products.index') }}" class="btn btn-secondary btn-sm">List</a>
                    <i class="fas fa-table me-1 ps-4"></i>
                    <h5 class="">Add New Category </h5>
                </div>

                <div class="card-body row">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{ route('products.store') }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="categoryTitle" class="form-label col-sm-3">Title</label>
                            <input type="text" class="form-control col-sm-9" id="categoryTitle" name="title" value="{{ old('title') }}">
                            @error('title')
                            <span class="text-danger small">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="categoryDescription" class="form-label col-sm-3">Description</label>
                            <input type="text" class="form-control col-sm-9" id="categoryDescription" name="description" value="{{ old('description') }}">
                            @error('description')
                            <span class="text-danger small">{{ $message }}</span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-secondary">Submit</button>
                        </form>
                </div>

            </div>

        </div>
    </div>

</x-backend.layouts.master>