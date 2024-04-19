<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Descubra suas medidas') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <form id="imcForm">
                        <div class="flex flex-wrap -mx-2">
                            <!-- Adicionei flex-wrap e um negativo margin para lidar com espaçamento -->
                            <div class="w-full sm:w-1/2 md:w-1/4 px-2 mb-4">
                                <!-- ajuste para responsividade e espaçamento -->
                                <label for="genero" class="block text-sm font-medium text-gray-700">Gênero:</label>
                                <select id="genero" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                    <option value="masculino">Masculino</option>
                                    <option value="feminino">Feminino</option>
                                    <option value="outro">Prefiro não informar</option>
                                </select>
                            </div>

                            <div class="w-full sm:w-1/2 md:w-1/4 px-2 mb-4">
                                <label for="idade" class="block text-sm font-medium text-gray-700">Idade:</label>
                                <input type="number" id="idade" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Idade" required>
                            </div>

                            <div class="w-full sm:w-1/2 md:w-1/4 px-2 mb-4">
                                <label for="peso" class="block text-sm font-medium text-gray-700">Peso:</label>
                                <input type="number" id="peso" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Peso em kg" required>
                            </div>

                            <div class="w-full sm:w-1/2 md:w-1/4 px-2 mb-4">
                                <label for="altura" class="block text-sm font-medium text-gray-700">Altura:</label>
                                <input type="number" id="altura" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Altura em cm" required>
                            </div>
                        </div>

                        <div class="flex justify-center mt-4">
                            <button type="button" class="bg-verde-header hover:bg-verde-escuro text-white font-bold py-2 px-4 rounded" onclick="calculateResults()">CALCULAR</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg my-4">
                <div class="p-6 text-gray-900">
                    <h2 class="font-semibold text-xl text-gray-800 leading-tight flex  justify-center mb-2">
                        {{ __('Resultados') }}
                    </h2>
                    <div id="resultsContainer" class="flex flex-wrap -mx-2 hidden">
                        <div class="w-full sm:w-1/2 md:w-1/3 px-2 mb-4">
                            <div class="bg-gray-200 overflow-hidden shadow-sm sm:rounded-lg">
                                <div class="p-6 text-gray-900 flex flex-col items-center">
                                    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                                        {{ __('IMC') }}
                                    </h2>
                                    <p id="resultIMC"></p>
                                </div>
                            </div>
                        </div>

                        <div class="w-full sm:w-1/2 md:w-1/3 px-2 mb-4">
                            <div class="bg-gray-200 overflow-hidden shadow-sm sm:rounded-lg">
                                <div class="p-6 text-gray-900 flex flex-col items-center">
                                    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                                        {{ __('TMB') }}
                                    </h2>
                                    <p id="resultTMB"></p>
                                </div>
                            </div>
                        </div>

                        <div class="w-full sm:w-1/2 md:w-1/3 px-2 mb-4">
                            <div class="bg-gray-200 overflow-hidden shadow-sm sm:rounded-lg">
                                <div class="p-6 text-gray-900 flex flex-col items-center">
                                    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                                        {{ __('Peso Ideal') }}
                                    </h2>
                                    <p id="resultPesoIdeal"></p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            @if (!Auth::check())
            <div class="bg-verde-header overflow-hidden shadow-sm sm:rounded-lg my-4 p-4">
                <div>
                    Cadastra-se para ter suas informações salvas e acesso ao nosso Plano Nutricional personalizado e
                    potencializado por IA!
                </div>
                <button class="bg-white text-black bg-opacity-90 rounded px-5 py-1 text-lg mt-1 mr-2"><a href="{{ route('register') }}">CADASTRE-SE</a></button>

                @if (Route::has('register'))

                <button class="bg-white text-black bg-opacity-90 rounded px-5 py-1 text-lg mt-1"><a href="{{ route('login') }}">LOGIN</a></button>
            </div>
            @endif
            @endif
        </div>
        <div>saiba mais</div>
    </div>
    <script src="{{ asset('js/metricas.js') }}"></script>
</x-app-layout>