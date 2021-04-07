@extends('layouts.app')

@section('contenet')
    <div class="container">
        <div class="col-md-12">
            <nav class="navbar navbar-toggleable-md navbar-light bg-faded">
                <a class="btn btn-primary" href="{{ route('blog.admin.categories.create') }}">Додати</a>
            </nav>
            <div class="card">
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Категорія</th>
                                <th>Батько</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($paginator as $item)
                                @php /** @var \App\Models\BlogCategory $item */ @endphp
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>
                                        <a href="{{ route('blog.admin.categories.edit', $item->id) }}">
                                            {{ $item->title  }}
                                    </td>
                                    <td>
                                        @if (in_array($item->parent_id, [0, 1])) style="..." @endif
                                        {{ $item->parent_id }}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    <table>
                </div>
            </div>
        </div>
    </div>
@endsection