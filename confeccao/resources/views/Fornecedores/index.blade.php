<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Fornecedores') }}
            </h2>
            <a href="{{ route('fornecedores.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                + Novo Fornecedor
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                
                @if(session('success'))
                    <div class="mb-4 text-green-600 font-bold">
                        {{ session('success') }}
                    </div>
                @endif

                <table class="min-w-full table-auto">
                    <thead>
                        <tr class="bg-gray-100">
                            <th class="px-4 py-2 text-left">Razão Social</th>
                            <th class="px-4 py-2 text-left">CNPJ</th>
                            <th class="px-4 py-2 text-left">Telefone</th>
                            <th class="px-4 py-2 text-center">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($fornecedores as $fornecedor)
                            <tr class="border-b">
                                <td class="px-4 py-2">{{ $fornecedor->razao_social }}</td>
                                <td class="px-4 py-2">{{ $fornecedor->cnpj }}</td>
                                <td class="px-4 py-2">{{ $fornecedor->telefone }}</td>
                                <td class="px-4 py-2 text-center">
                                    <a href="{{ route('fornecedores.edit', $fornecedor->id) }}" class="text-blue-600">Editar</a>
                                    <form action="{{ route('fornecedores.destroy', $fornecedor->id) }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 ml-2" onclick="return confirm('Tem certeza?')">Excluir</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</x-app-layout>