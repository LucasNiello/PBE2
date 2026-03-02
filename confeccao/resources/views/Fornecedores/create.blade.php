<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cadastrar Novo Fornecedor') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                
                <form action="{{ route('fornecedores.store') }}" method="POST">
                    @csrf {{-- Proteção obrigatória do Laravel --}}

                    <div class="grid grid-cols-1 gap-6">
                        <div>
                            <label class="block font-medium text-sm text-gray-700">Razão Social</label>
                            <input type="text" name="razao_social" value="{{ old('razao_social') }}" class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 w-full" required>
                            @error('razao_social') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                        </div>

                        <div>
                            <label class="block font-medium text-sm text-gray-700">CNPJ</label>
                            <input type="text" name="cnpj" value="{{ old('cnpj') }}" class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 w-full" required>
                            @error('cnpj') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                        </div>

                        <div>
                            <label class="block font-medium text-sm text-gray-700">Telefone</label>
                            <input type="text" name="telefone" value="{{ old('telefone') }}" class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 w-full" required>
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <a href="{{ route('fornecedores.index') }}" class="mr-4 text-sm text-gray-600 underline">Cancelar</a>
                            <button type="submit" class="bg-gray-800 text-white px-4 py-2 rounded-md font-semibold text-xs uppercase tracking-widest hover:bg-gray-700">
                                Salvar Fornecedor
                            </button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>