<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Lista de Clientes
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    
                    @if(isset($users) && count($users) > 0)
                        <table class="table-auto w-full">
                            <thead>
                                <tr>
                                    <th class="px-4 py-2 text-left">ID</th>
                                    <th class="px-4 py-2 text-left">Nome</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $user)
                                    <tr>
                                        <td class="border px-4 py-2">{{ $user->id }}</td>
                                        {{-- Assumindo que tem uma coluna 'nome' na base de dados --}}
                                        <td class="border px-4 py-2">{{ $user->name ?? 'Sem nome' }}</td> 
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @else
                        <p>Ainda não existem clientes registados.</p>
                    @endif

                </div>
            </div>
        </div>
    </div>
</x-app-layout>