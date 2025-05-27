<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard - BarEspe VentasPro') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-lg font-semibold mb-4">Bienvenido, {{ auth()->user()->name }}</h3>
                    <p class="mb-4">Tu rol: <span class="font-bold text-blue-600">{{ auth()->user()->getRoleNames()->first() }}</span></p>
                    
                    {{-- Menú de navegación según roles --}}
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                        
                        {{-- Gestión de Usuarios (admin, secre) --}}
                        @if(auth()->user()->hasAnyRole(['admin', 'secre']))
                            <div class="bg-blue-50 p-4 rounded-lg border border-blue-200">
                                <h4 class="font-semibold text-blue-800 mb-2">Gestión de Usuarios</h4>
                                <div class="space-y-2">
                                    <a href="{{ route('users.index') }}" class="block text-blue-600 hover:text-blue-800">
                                        Ver Usuarios
                                    </a>
                                    <a href="{{ route('users.create') }}" class="block text-blue-600 hover:text-blue-800">
                                        Crear Usuario
                                    </a>
                                </div>
                            </div>
                        @endif

                        {{-- Gestión de Categorías (bodega) --}}
                        @if(auth()->user()->hasRole('bodega'))
                            <div class="bg-green-50 p-4 rounded-lg border border-green-200">
                                <h4 class="font-semibold text-green-800 mb-2">Gestión de Categorías</h4>
                                <div class="space-y-2">
                                    <a href="{{ route('categories.index') }}" class="block text-green-600 hover:text-green-800">
                                        Ver Categorías
                                    </a>
                                    <a href="{{ route('categories.create') }}" class="block text-green-600 hover:text-green-800">
                                        Crear Categoría
                                    </a>
                                </div>
                            </div>
                        @endif

                        {{-- Gestión de Productos (bodega) --}}
                        @if(auth()->user()->hasRole('bodega'))
                            <div class="bg-yellow-50 p-4 rounded-lg border border-yellow-200">
                                <h4 class="font-semibold text-yellow-800 mb-2">Gestión de Productos</h4>
                                <div class="space-y-2">
                                    <a href="{{ route('products.index') }}" class="block text-yellow-600 hover:text-yellow-800">
                                        Ver Productos
                                    </a>
                                    <a href="{{ route('products.create') }}" class="block text-yellow-600 hover:text-yellow-800">
                                        Crear Producto
                                    </a>
                                </div>
                            </div>
                        @endif

                        {{-- Gestión de Ventas (cajera) --}}
                        @if(auth()->user()->hasRole('cajera'))
                            <div class="bg-purple-50 p-4 rounded-lg border border-purple-200">
                                <h4 class="font-semibold text-purple-800 mb-2">Gestión de Ventas</h4>
                                <div class="space-y-2">
                                    <a href="{{ route('sales.index') }}" class="block text-purple-600 hover:text-purple-800">
                                        Ver Mis Ventas
                                    </a>
                                    <a href="{{ route('sales.create') }}" class="block text-purple-600 hover:text-purple-800">
                                        Registrar Venta
                                    </a>
                                </div>
                            </div>
                        @endif
                    </div>

                    {{-- Mensaje si no tiene permisos --}}
                    @if(!auth()->user()->hasAnyRole(['admin', 'secre', 'bodega', 'cajera']))
                        <div class="bg-red-50 p-4 rounded-lg border border-red-200 mt-4">
                            <p class="text-red-800">No tienes permisos asignados. Contacta al administrador.</p>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>