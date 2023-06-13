@extends('layouts.layout')
@section('order-active', 'isactive')
@section('page-title', 'KFC - Orders')

@section('content')
    <section id="section-menulist">
        <div class="container mt-5">
            <div class="row">
                <div class="col-12">
                    <livewire:components.alerts />
                </div>
                <div class="col-6">
                    <h1>KFC - Orders</h1>
                </div>
                <div class="col-6 text-end">
                    <button class="btn btn-success" data-bs-toggle="collapse" data-bs-target="#showAddOrder">
                        Add <i class="fa-solid fa-plus"></i>
                    </button>
                </div>
                <div class="col-12">
                    <livewire:orders.add-order />
                </div>

                <div class="col-12">
                    <livewire:orders.order-list />
                </div>
            </div>
        </div>
    </section>
@endsection
