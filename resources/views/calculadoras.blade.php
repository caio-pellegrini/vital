<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Calculadoras') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __('Calculadoras') }}
                </div>
            </div>
        </div>
    </div>

    <div class="py-12">
        <div id="send-message-container">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                            {{ __('Calculadora IMC') }}
                        </h2>

                        <form id="imcForm">
                            <input type="number" id="peso" placeholder="Peso em kg" required>
                            <input type="number" id="altura" placeholder="Altura em cm" required>
                            <select id="genero">
                                <option value="masculino">Masculino</option>
                                <option value="feminino">Feminino</option>
                                <option value="outro">Prefiro não informar</option>
                            </select>
                            <input type="number" id="idade" placeholder="Idade" required>
                            <button type="button" onclick="calculateResults()">Calcular</button>
                        </form>

                        <div id="resultIMC"></div>
                        <div id="resultTMB"></div>
                        <div id="resultPesoIdeal"></div>


                    </div>
                </div>
            </div>
        </div>

        <script src="{{ asset('js/metricas.js') }}"></script>

</x-app-layout>
