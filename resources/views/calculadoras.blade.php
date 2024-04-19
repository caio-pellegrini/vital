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
                            <div class="bg-white overflow-hidden shadow rounded-lg">
                                <div class="px-4 py-5 sm:p-6">
                                    <h3 class="text-lg leading-6 font-medium text-gray-900 flex justify-center">
                                        {{ __('IMC') }}
                                    </h3>
                                    <div class="mt-2 text-3xl leading-8 font-semibold text-green-600 flex justify-center">
                                        <span id="resultIMC"></span>
                                    </div>
                                    <div class="mt-1 text-sm text-gray-500 flex justify-center">
                                        <span id="classificationIMC"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                        <div class="w-full sm:w-1/2 md:w-1/3 px-2 mb-4">
                            <div class="bg-white overflow-hidden shadow rounded-lg">
                                <div class="px-4 py-5 sm:p-6">
                                    <h3 class="text-lg leading-6 font-medium text-gray-900 flex justify-center">
                                        {{ __('TMB - Taxa Metabólica Basal') }}
                                    </h3>
                                    <div class="mt-2 text-3xl leading-8 font-semibold text-blue-600 flex justify-center">
                                        <span id="resultTMB"></span> kcal/dia
                                    </div>
                                    <div class="mt-1 text-sm text-gray-500 flex justify-center">
                                        <span>&nbsp;</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                        <div class="w-full sm:w-1/2 md:w-1/3 px-2 mb-4">
                            <div class="bg-white overflow-hidden shadow rounded-lg">
                                <div class="px-4 py-5 sm:p-6">
                                    <h3 class="text-lg leading-6 font-medium text-gray-900 flex justify-center">
                                        {{ __('Peso Ideal') }}
                                    </h3>
                                    <div class="mt-2 text-3xl leading-8 font-semibold text-pink-600 flex justify-center">
                                        <span id="resultPesoIdeal"></span> kg
                                    </div>
                                    <div class="mt-1 text-sm text-gray-500 flex justify-center">
                                        <span>&nbsp;</span>
                                    </div>
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
                @endif
            </div>
            @endif

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="px-16 py-6 text-gray-900">
                    <div class="flex justify-center">
                        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                            {{ __('SAIBA MAIS') }}
                        </h2>
                    </div>
                    
                    <div class="my-20 grid grid-cols-1 md:grid-cols-2 gap-12">
                        <div class="md:col-span-1 px-4">
                            <h2 class="font-semibold text-lg text-gray-800 leading-tight">
                                {{ __('ÍNDICE DE MASSA CORPORAL (IMC)') }}
                            </h2>
                            <p class="text-lg mt-10 leading-loose">
                                O Índice de Massa Corporal (IMC) é uma das principais ferramentas, adotada inclusive pela Organização Mundial de Saúde (OMS), para calcular o chamado “peso ideal”. Obtido a partir do peso e da altura do indivíduo, o IMC também aponta níveis de magreza e obesidade, que são usados para nortear o trabalho de profissionais de saúde e de educadores físicos.
                            </p>
                        </div>
                        <div class="md:col-span-1">
                            <div class="px-10">
                                <img src="{{ asset('images/tabela-imc.png') }}" alt="">
                            </div> 
                        </div>
                    </div>

                    <hr class=" border-black border-t w-full mx-auto">

                    <div class="my-20 grid grid-cols-1 md:grid-cols-2 gap-12">
                        <div class="md:col-span-1 px-4">
                            <h2 class="font-semibold text-lg text-gray-800 leading-tight">
                                {{ __('TAXA METABÓLICA BASAL (TMB)') }}
                            </h2>
                            <p class="text-lg mt-10 leading-loose">
                                A taxa metabólica basal (TMB) é a quantidade mínima de energia que o corpo precisa para manter as funções vitais, como respiração, circulação e temperatura corporal, em repouso. A TMB representa cerca de 60% a 70% do gasto energético total diário de uma pessoa e varia de acordo com o sexo, a idade, o peso e a altura.
                            </p>
                        </div>
                        <div class="md:col-span-1">
                            <div class="px-10">
                                <img src="{{ asset('images/tabela-tmb.png') }}" alt="">
                            </div> 
                        </div>
                    </div>

                    <hr class="border-black border-t w-full mx-auto">

                    <div class="my-20">
                        <div class="px-4">
                            <h2 class="font-semibold text-lg text-gray-800 leading-tight">
                                {{ __('PESO IDEAL') }}
                            </h2>
                            <p class="text-lg mt-10 leading-loose">
                                O peso ideal é o peso que uma pessoa deve ter para a sua altura, sendo considerado um intervalo de peso saudável e que permite reduzir acentuadamente o risco de diversos problemas de saúde, como obesidade, hipertensão e diabetes ou até mesmo a desnutrição.                            </p>
                        </div>
                    </div>

                    <hr class="border-black border-t w-full mx-auto">
                    
                    <div class="my-10">
                        <div class="px-4">
                            <p class="text-xl mt-10 leading-loose">
                                <span class="text-red-500 font-bold">Atenção:</span> Estes cálculos não substituem uma consulta, procure um nutricionista para fazer a avaliação detalhada.
                            </p>
                        </div>
                    </div>


                </div>
            </div>

        </div>

    </div>

    <x-slot name="footer"></x-slot>
    <script src="{{ asset('js/metricas.js') }}"></script>
</x-app-layout>