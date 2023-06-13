@extends('layouts.menu-layout')
@section('menu-active', 'isactive')
@section('page-title', 'KFC - Menu')

@section('content')
    <section id="section-menulist">
        <div class="container mt-5">
            <div class="row">
                <div class="col-12">
                    @if (Session::has('success'))
                        <div class="alert alert-success" role="alert">
                            {{ Session::get('success') }}
                        </div>
                    @elseif (Session::has('fail'))
                        <div class="alert alert-danger" role="alert">
                            {{ Session::get('fail') }}
                        </div>
                    @endif
                </div>
                <div class="col-6">
                    <h1>KFC - Menu List</h1>
                </div>
                <div class="col-6 text-end">
                    <button class="btn btn-success" data-bs-toggle="collapse" data-bs-target="#showAddItem">
                        Add <i class="fa-solid fa-plus"></i>
                    </button>
                </div>
                <div class="col-12">
                    @include('Menu.add-menu')
                </div>

                <div class="col-12">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Item Name</th>
                            <th scope="col">Item Price</th>
                            <th scope="col">Stock</th>
                            <th scope="col" class="text-center">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($menu as $item)
                            <tr>
                                <th>{{ $item->item_id }}</th>
                                <td>{{ $item->item_name }}</td>
                                <td>{{ number_format($item->item_price, 2) }}</td>
                                <td>{{ $item->item_stock }}</td>
                                <td class="text-center">
                                    <button data-bs-target="#showEditItem{{ $item->item_id }}" data-bs-toggle="collapse" class="btn btn-info">Edit <i class="fa-solid fa-pen-to-square"></i></button>
                                    <button data-bs-target="#showDeleteItem{{ $item->item_id }}" data-bs-toggle="collapse" class="btn btn-danger">Delete <i class="fa-solid fa-trash-can"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="5">
                                    @include('Menu.edit-menu')
                                    @include('Menu.delete-menu')
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection
