<x-app-layout>
    <section class="relative">
        <div class="flex flex-col items-center justify-center">
            <div class="grid grid-cols-2 text-white">
                <div class="flex justify-center items-center ">
                    <div class=" rounded-lg shadow-md w-96">
                        <a href="#" class="flex justify-center items-center mb-6">
                            <img class="h-20" src="/assets/logo.png" alt="logo">
                        </a>
                        <h1 class="text-xl font-bold leading-tight tracking-tight dorado md:text-2xl text-center">
                            Do Transition
                        </h1>
                        <form class="rounded-lg" action="#">
                            <ul>
                                <li>
                                    <label for="name" class="block mb-2 text-md font-medium dorado">Nombre:</label>
                                    <input type="text" name="name" id="name" value="" disabled
                                        class="mb-4 bg-gray-700 text-white sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                                        placeholder="Name" required="">
                                </li>
                                <li>
                                    <label for="description" class="block mb-2 text-md font-medium dorado">Tipo de
                                        Transacción:</label>
                                    <select
                                        class="mb-4 bg-gray-700 text-white sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 block w-sm transition duration-75">
                                        <option class="bg-gray-700" value="Ingresar">Ingresar</option>
                                        <option class="bg-gray-700" value="Retirar">Retirar</option>
                                    </select>
                                </li>
                                <li>
                                    <label for="balance"
                                        class="block mb-2 text-md font-medium dorado">Cantidad:</label>
                                    <input type="number" name="balance" id="balance"
                                        class="bg-gray-700 text-white sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                                        placeholder="Balance" required="">
                                </li>
                                <button type="submit"
                                    class="botonGeneral mt-4 w-full text-white hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:hover:bg-primary-700 dark:focus:ring-primary-800">Do
                                    Transaction
                                </button>
                            </ul>
                        </form>
                    </div>
                </div>
                <div class="ml-3 mr-6">
                    <div class="px-4 py-5 border border-white rounded-lg">
                        <p class="text-lg text-center leading-6 font-medium dorado">
                            Your Transaction
                        </p>
                        <table class="text-left rtl:text-right text-white">
                            <thead class="text-xs uppercase dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        User
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Type
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Balance
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Date
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center dorado" colspan="4">
                                        No hay transacciones realizadas
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-app-layout>
