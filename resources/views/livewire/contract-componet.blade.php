<div class="max-w-4xl mx-auto sm:px-2 lg:px-2">
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg py-4 px-4">
        <form method="post" action="{{route('contrato.store')}}">
            @csrf
            <div class="py-8 flex flex-wrap flex-col justify-center items-center w-full">
                <h2 class="text-2xl font-bold">Criar Contrato</h2>
                <div class="mt-8 w-2/4">
                    <div class="grid grid-cols-1 gap-4">
                        <label class="block">
                            <span class="text-gray-700">Nº Contrato</span>
                            <input name="numero" type="text"
                                class="
                          mt-1
                          block
                          w-full
                          rounded-md
                          border-gray-300
                          shadow-sm
                          focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50
                        "
                                placeholder="" />
                        </label>
                        <label class="block">
                            <span class="text-gray-700">Objeto</span>
                            <textarea name="objeto" class="
                          mt-1
                          block
                          w-full
                          rounded-md
                          border-gray-300
                          shadow-sm
                          focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50
                        "
                                rows="3"></textarea>
                        </label>
                        <label class="block">
                            <span class="text-gray-700">Início da Vigência</span>
                            <input name="vigencia_inicio" type="date"
                                class="
                          mt-1
                          block
                          w-full
                          rounded-md
                          border-gray-300
                          shadow-sm
                          focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50
                        " />
                        </label>
                        <label class="block">
                            <span class="text-gray-700">Final da Vigência</span>
                            <input name="vigencia_fim" type="date"
                                class="
                          mt-1
                          block
                          w-full
                          rounded-md
                          border-gray-300
                          shadow-sm
                          focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50
                        " />
                        </label>
                        <label class="block">
                            <span class="text-gray-700">Situação</span>
                            <select name="situacao"
                                class="
                          block
                          w-full
                          mt-1
                          rounded-md
                          border-gray-300
                          shadow-sm
                          focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50
                        ">
                                <option>Ativo</option>
                                <option>Inativo</option>
                            </select>
                        </label>
                        <label class="block">
                            <span class="text-gray-700">Valor do Contrato R$</span>
                            <input name="valor_global"  type="text"
                                class="
                          mt-1
                          block
                          w-full
                          rounded-md
                          border-gray-300
                          shadow-sm
                          focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50
                        "
                                placeholder="" />
                        </label>

                    </div>
                </div>
                <button type="submit"
                    class="py-2 px-4 mt-2 w-40  h-14 bg-blue-500 text-white text-xl font-semibold rounded shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75">
                    Salvar
                </button>
            </div>
        </form>
    </div>
</div>
