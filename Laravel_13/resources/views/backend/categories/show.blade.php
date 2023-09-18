<x-backend.layouts.master>

    <x-slot name=pageTitle>
        Show Category
    </x-slot>

    <x-backend.elements.breadcrumb>
        <x-slot name=pageHeader>
        Show Category Detail
        </x-slot>
        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
        <li class="breadcrumb-item active"> Show Category </li>
    </x-backend.elements.breadcrumb>

    <div class="row">
        <div class="col-sm-6 offset-sm-3">
            <div class="card shadow-lg border-0 rounded-lg mt-5">
                <div class="card-header d-flex justify-content-center">
                    <a href="{{ route('categories.index') }}" class="btn btn-secondary btn-sm">List</a>
                    <i class="fas fa-table me-1 ps-4"></i>
                    <h5 class="">Show Category </h5>
                </div>

                <div class="card-body row">
                    <dl class="row">
                        <dt class="col-sm-4">Title : </dt>
                        <dd class="col-sm-8"> {{ $category->title }}.</dd>

                        <dt class="col-sm-4">Description : </dt>
                        <dd class="col-sm-8">{{ $category->description }}.</dd>
                    </dl>
                </div>
            </div>
        </div>
    </div>

</x-backend.layouts.master>