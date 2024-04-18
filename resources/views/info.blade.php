{{-- resources/views/nutritional-program/create.blade.php --}}

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Programa Nutricional') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 ">
                @if(session('status'))
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                <form class="space-y-6">
                    @csrf
                    {{-- Include all form fields here according to the given design --}}
                    <div class="space-y-4">
                        <div>
                            <label for="altura" class="text-gray-700">Altura (cm):</label>
                            <input type="number" id="altura" name="altura" placeholder="ex: 172" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                        </div>
                        <div>
                            <label for="peso" class="text-gray-700">Peso (kg):</label>
                            <input type="number" id="peso" name="peso" placeholder="ex: 70" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                        </div>
                        <div>
                            <label for="genero" class="text-gray-700">Sexo:</label>
                            <select id="genero" name="genero" class="mt-1 block w-full rounded-md border
                            -gray-300 shadow-sm">
                                <option value="masculino">Masculino</option>
                                <option value="feminino">Feminino</option>
                                <option value="outro">Prefiro não informar</option>
                            </select>
                        </div>
                        <div>
                            <label for="idade" class="text-gray-700">Idade:</label>
                            <input type="number" id="idade" name="idade" placeholder="ex: 30" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                        </div>
                        <!-- Add other form fields based on the description -->
                        <div>
                            <label for="habitos" class="text-gray-700">Você tem algum hábito que possa influenciar em seu plano nutricional?</label>
                            <textarea id="habitos" name="habitos" rows="3" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm"></textarea>
                        </div>
                        <div>
                            <label for="restricoes" class="text-gray-700">Você tem alguma restrição alimentar?</label>
                            <input type="text" id="restricoes" name="restricoes" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                        </div>
                        <div>
                            <label for="restricoes_fisicas" class="text-gray-700">Você tem alguma restrição física?</label>
                            <input type="text" id="restricoes_fisicas" name="restricoes_fisicas" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                        </div>
                    </div>
                    <!-- Add other sections similar to the ones above for additional questions -->

                    <div class="flex justify-center">
                        <button type="submit" class="px-6 py-2 rounded-md bg-green-500 text-white hover:bg-green-600">Confirmar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
