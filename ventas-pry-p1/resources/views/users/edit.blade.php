<!-- filepath: c:\Users\condo\Documents\Universidad\7mo\SW seguro\sws-projects\ventas-pry-p1\resources\views\users\edit.blade.php -->
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar Usuario') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{-- Encabezado --}}
                    <div class="flex justify-between items-center mb-6">
                        <h3 class="text-lg font-semibold">Editar Usuario: {{ $user->name }}</h3>
                        <a href="{{ route('users.index') }}" 
                           class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                            Volver al listado
                        </a>
                    </div>

                    {{-- Información actual --}}
                    <div class="bg-blue-50 p-4 rounded-lg mb-6 border border-blue-200">
                        <h4 class="font-semibold text-blue-800 mb-2">Información actual</h4>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 text-sm">
                            <div>
                                <span class="font-medium">ID:</span>
                                <span class="text-blue-700">{{ $user->id }}</span>
                            </div>
                            <div>
                                <span class="font-medium">Rol actual:</span>
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium 
                                    @if($currentRole === 'admin') bg-red-100 text-red-800
                                    @elseif($currentRole === 'secre') bg-blue-100 text-blue-800
                                    @elseif($currentRole === 'bodega') bg-green-100 text-green-800
                                    @elseif($currentRole === 'cajera') bg-purple-100 text-purple-800
                                    @else bg-gray-100 text-gray-800 @endif">
                                    {{ ucfirst($currentRole) }}
                                </span>
                            </div>
                            <div>
                                <span class="font-medium">Creado:</span>
                                <span class="text-blue-700">{{ $user->created_at->format('d/m/Y H:i') }}</span>
                            </div>
                        </div>
                    </div>

                    {{-- Formulario de edición --}}
                    <form method="POST" action="{{ route('users.update', $user) }}" class="space-y-6">
                        @csrf
                        @method('PUT')

                        {{-- Nombre --}}
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700">
                                Nombre completo
                            </label>
                            <input type="text" 
                                   name="name" 
                                   id="name" 
                                   value="{{ old('name', $user->name) }}" 
                                   required
                                   class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                            @error('name')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- Email --}}
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700">
                                Correo electrónico
                            </label>
                            <input type="email" 
                                   name="email" 
                                   id="email" 
                                   value="{{ old('email', $user->email) }}" 
                                   required
                                   class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                            @error('email')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- Contraseña (opcional) --}}
                        <div>
                            <label for="password" class="block text-sm font-medium text-gray-700">
                                Nueva contraseña (opcional)
                            </label>
                            <input type="password" 
                                   name="password" 
                                   id="password" 
                                   class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                            @error('password')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                            <p class="mt-1 text-sm text-gray-500">
                                Dejar en blanco para mantener la contraseña actual
                            </p>
                        </div>

                        {{-- Confirmar contraseña --}}
                        <div>
                            <label for="password_confirmation" class="block text-sm font-medium text-gray-700">
                                Confirmar nueva contraseña
                            </label>
                            <input type="password" 
                                   name="password_confirmation" 
                                   id="password_confirmation" 
                                   class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                        </div>

                        {{-- Rol --}}
                        <div>
                            <label for="role" class="block text-sm font-medium text-gray-700">
                                Rol
                            </label>
                            <select name="role" 
                                    id="role" 
                                    required
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                                <option value="">Seleccionar rol</option>
                                @foreach($availableRoles as $role)
                                    <option value="{{ $role->name }}" 
                                            {{ old('role', $currentRole) === $role->name ? 'selected' : '' }}>
                                        {{ ucfirst($role->name) }}
                                    </option>
                                @endforeach
                            </select>
                            @error('role')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- Botones --}}
                        <div class="flex justify-end space-x-3">
                            <a href="{{ route('users.index') }}" 
                               class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded">
                                Cancelar
                            </a>
                            <button type="submit" 
                                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                Actualizar Usuario
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>