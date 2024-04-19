<x-app-layout>
    <x-slot name="header">
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-300 overflow-hidden shadow-sm sm:rounded-lg p-6 ">
                <h2 class="font-semibold text-3xl text-verde-header leading-tight flex justify-center">
                    {{ __('Programa Nutricional') }}
                </h2>
                <hr class="m-4">
                @if(session('status'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                    {{ session('status') }}
                </div>
                @endif

                <form class="space-y-6 bg-gray-200 p-4 rounded-2xl">
                    @csrf
                    {{-- Include all form fields here according to the given design --}}
                    <div class="space-y-4">
                        <div>
                            <h1 class="flex justify-center font-bold text-verde-escuro">Preencha os campos obrigatórios:</h1>
                        </div>
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

                    <div class="flex justify-center">

                        <button class="bg-gray-400 text-black bg-opacity-90  px-5 py-2 text-lg mt-1 mr-2">CONFITMAR</button>

                    </div>
                </form>
            </div>
            <div class="mt-12">
                <div class="mb-6">
                    <button class="bg-verde-header text-black bg-opacity-90 rounded px-4 py-1 text-lg mt-1 mr-2">SUA DIETA</button>
                </div>
                <div>
                    <div>
                        <p class="font-bold m-2">
                            Café da manhã
                        </p>
                        <ul class="list-disc list-inside">
                            <li>ovos mexidos com pão integral</li>
                            <li>suco verde</li>
                        </ul>
                        <p class="font-bold m-2">
                            Lanche da Manhã
                        </p>
                        <ul class="list-disc list-inside">
                            <li>vitamina de frutas</li>
                            <li>crepioca</li>
                        </ul>

                        <p class="font-bold m-2">
                            Almoço
                        </p>
                        <ul class="list-disc list-inside">
                            <li>salada de folhas</li>
                            <li>arroz</li>
                            <li>feijão</li>
                            <li>carne bovina com legumes</li>
                        </ul>

                        <p class="font-bold m-2">
                            Lanche da tarde
                        </p>
                        <ul class="list-disc list-inside">
                            <li>fruta e aveia</li>
                            <li>iogurte natural e chia</li>
                            <li>ovo cozido</li>
                        </ul>

                        <p class="font-bold m-2">
                            Janta
                        </p>
                        <ul class="list-disc list-inside">
                            <li>salada de folhas</li>
                            <li>berinjela ao forno</li>
                            <li>frango grelhado</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="py-12">
                <div>
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                        <div class="bg-gray-300 overflow-hidden shadow-sm sm:rounded-lg">
                            <div class="p-6 text-gray-900">
                                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                                    {{ __('Inteligência Artificial de Nutrição') }}
                                </h2>
                                <form action="{{ route('send-message') }}" method="POST">
                                    @csrf
                                    <div class="mb-4">
                                        <label for="message" class="block text-lg text-gray-700">Aqui você pode personalizar sua dieta e tirar suas dúvidas sobre nutrição e saúde</label>
                                        <input name="message" id="message" class="form-textarea mt-1  block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" rows="3" required>
                                    </div>
                                    <div class="mb-4">
                                        <button type="submit" class="text-black bg-verde-header hover:bg-verde-escuro  font-bold py-2 px-4 rounded">ENVIAR</button>
                                    </div>
                                </form>
                                @if(isset($responseMessage))
                                <div class="response bg-gray-100 border border-gray-300 p-3 rounded mt-4">
                                    <strong>Resposta:</strong> {{ $responseMessage }}
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="px-4">
                        <p class="text-xl mt-10 leading-loose">
                            <span class="text-red-500 font-bold">Atenção:</span> Procure um nutricionista para fazer a avaliação detalhada.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <x-slot name="footer"></x-slot>

    </div>
    </div>
</x-app-layout>