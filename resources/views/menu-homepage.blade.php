@extends('layouts.layout')
@section('menu-active', 'isactive')
@section('page-title', 'KFC - Menu')

@section('content')
    <section id="section-menulist">
        <div class="container mt-5">
            <div class="row">
                <div class="col-12">
                    <livewire:components.alerts />
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
                    <livewire:menu.add-menu />
                </div>

                <div class="col-12">
                    <livewire:menu.menu-list />
                </div>
            </div>
        </div>
    </section>
@endsection
