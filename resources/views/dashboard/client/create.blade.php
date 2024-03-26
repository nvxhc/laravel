@section('title', 'Crear cliente')

@extends('layouts.dash')

@section('content')
<form action="{{ route('clients.store') }}" method="POST">
    @csrf
<div class="bg-white p-4 grid grid-cols-2 gap-8 rounded-lg shadow-xl py-8 mt-12">
    
    <!-- start:: Horizontal Form Layout -->
    <div >
        <h4 class="text-xl capitalize">REGISTRO DE NUEVO CLIENTE</h4>
        <div class="mt-6">
           
                <div class="flex flex-col my-4">
                    <label for="first_name_vertical">Nombre</label>
                    <input type="text" name="name" id="first_name_vertical" class="flex-1 py-1 border-gray-300 mt-1 rounded focus:border-gray-300 focus:outline-none focus:ring-0" placeholder="Nombre">
                </div>
                <div class="flex flex-col my-4">
                    <label for="last_name_vertical">Dirección</label>
                    <input type="text" name="address" id="last_name_vertical" class="flex-1 py-1 border-gray-300 mt-1 rounded focus:border-gray-300 focus:outline-none focus:ring-0" placeholder="Dirección">
                </div>
                <div class="flex flex-col my-4">
                    <label for="last_name_vertical">Teléfono</label>
                    <input type="text" name="phone" id="last_name_vertical" class="flex-1 py-1 border-gray-300 mt-1 rounded focus:border-gray-300 focus:outline-none focus:ring-0" placeholder="Télefono">
                </div>


            
        </div>
    </div>
    <!-- end::Horizontal Form Layout -->

    <!-- start:: Vertical Form Layout -->
    <div>
        <h4 class="text-xl capitalize"></h4>
        <div class="mt-[50px]">
            <div class="flex flex-col my-4">
                <label for="first_name_vertical">Correo</label>
                <input type="text" name="email" id="first_name_vertical" class="flex-1 py-1 border-gray-300 mt-1 rounded focus:border-gray-300 focus:outline-none focus:ring-0" placeholder="correo">
            </div>
                <div class="flex flex-col my-4">
                    <label for="first_name_vertical">DNI</label>
                    <input type="text" name="dni" id="first_name_vertical" class="flex-1 py-1 border-gray-300 mt-1 rounded focus:border-gray-300 focus:outline-none focus:ring-0" placeholder="DNI">
                </div>
                <div class="flex flex-col my-4">
                    <label for="last_name_vertical">RUC</label>
                    <input type="text" name="ruc" id="last_name_vertical" class="flex-1 py-1 border-gray-300 mt-1 rounded focus:border-gray-300 focus:outline-none focus:ring-0" placeholder="RUC">
                </div>


                <div class="flex items-center my-4">
                    <input type="checkbox" name="terms" id="terms" class="text-primary border border-primary focus:ring-0">
                    <label class="ml-2" for="terms">
                        Accept <a href="#" class="underline">Terms Of Use</a>
                    </label>
                </div>

                <div class="flex gap-2 mt-6">
                    <button class="bg-secondary bg-opacity-20 hover:bg-opacity-40 rounded-lg px-6 py-1.5 text-secondary hover:shadow-xl transition duration-150">Cancelar</button>

                    <button type="submit" class="bg-primary hover:bg-primary-dark rounded-lg px-6 py-1.5 text-gray-100 hover:shadow-xl transition duration-150">Enviar</button>
                </div>
          
        </div>
    </div>
    
</div>
</form>
@endsection

