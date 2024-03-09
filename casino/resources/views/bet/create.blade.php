<x-app-layout>
    <section class="relative">
        <div class="grid grid-cols-2 text-white">
            <div class="flex justify-center items-center">
                <div class="rounded-lg w-96">
                    <a href="{{ route('home') }}" class="flex justify-center items-center mb-3">
                        <img class="h-20" src="{{ asset('storage/images/logo.png') }}" alt="logo">
                    </a>
                    <h1 class="text-xl font-bold leading-tight tracking-tight dorado md:text-2xl text-center mb-6">
                        Create Roulette Bet
                    </h1>
                    <form class="rounded-lg" action="{{ route('bet.store') }}" method="POST">
                        @csrf
                        <ul>
                            <li class="hidden">
                                <label for="game_id" class="block mb-2 text-md font-medium dorado">Nombre:</label>
                                <input type="text" name="game_id" id="game_id" value="1">
                            </li>
                            <li>
                                <label for="apuesta" class="block mb-2 text-md font-medium dorado">Apuesta:</label>
                                <select name="description_bet" id="description_bet"
                                    class="mb-4 bg-gray-700 text-white sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 block w-sm transition duration-75">
                                    <option class="bg-gray-700" value="Straight Up">Straight Up</option>
                                    <option class="bg-gray-700" value="Split">Split</option>
                                    <option class="bg-gray-700" value="Street">Street</option>
                                    <option class="bg-gray-700" value="Corner o Square">Corner o Square</option>
                                    <option class="bg-gray-700" value="Line o Double Street">Line o Double Street
                                    </option>
                                    <option class="bg-gray-700" value="Dozens">Dozens</option>
                                    <option class="bg-gray-700" value="Columns">Columns</option>
                                    <option class="bg-gray-700" value="Pares/Impares">Pares/Impares</option>
                                    <option class="bg-gray-700" value="Rojo/Negro">Rojo/Negro</option>
                                    <option class="bg-gray-700" value="Alto/Bajo">Alto/Bajo</option>
                                </select>
                            </li>
                            <li>
                                <label for="amount_bet" class="block mb-2 text-md font-medium dorado">Cantidad:</label>
                                <input type="number" name="amount_bet" id="amount_bet"
                                    class="@error('amount_bet') is-invalid @enderror text-white  bg-gray-700 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                                    placeholder="Amount" required>
                                @error('amount_bet')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </li>
                            <button type="submit"
                                class="bg-gradient-to-r from-doradoBoton1 to-doradoBoton2 botonGeneral mt-4 w-full text-white hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:hover:bg-primary-700 dark:focus:ring-primary-800">Create
                                bet
                            </button>
                        </ul>
                    </form>
                </div>
            </div>
            <div class="flex justify-center items-center ">
                <div class="rounded-lg w-96">
                    <a href="{{ route('home') }}" class="flex justify-center items-center mb-6">
                        <img class="h-20" src="{{ asset('storage/images/logo.png') }}" alt="logo">
                    </a>
                    <h1 class="text-xl font-bold leading-tight tracking-tight dorado md:text-2xl text-center">
                        Create Poker Bet
                    </h1>
                    <form class="rounded-lg" action="{{ route('bet.store') }}" method="POST">
                        @csrf
                        <ul>
                            <li class="hidden">
                                <label for="game_id" class="block mb-2 text-md font-medium dorado">Nombre:</label>
                                <input type="text" name="game_id" id="game_id" value="2">
                            </li>
                            <li>
                                <label for="apuesta" class="block mb-2 text-md font-medium dorado">Apuesta:</label>
                                <select name="description_bet" id="description_bet"
                                    class="mb-4 bg-gray-700 text-white sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 block w-sm transition duration-75">
                                    <option class="bg-gray-700" value="Carta Alta">Carta alta</option>
                                    <option class="bg-gray-700" value="Par">Par</option>
                                    <option class="bg-gray-700" value="Doble par">Doble par</option>
                                    <option class="bg-gray-700" value="Trio">Trio</option>
                                    <option class="bg-gray-700" value="Escalera">Escalera</option>
                                    <option class="bg-gray-700" value="Color">Color</option>
                                    <option class="bg-gray-700" value="Full">Full</option>
                                    <option class="bg-gray-700" value="Poker">Poker</option>
                                    <option class="bg-gray-700" value="Escalera de color">Escalera de color</option>
                                    <option class="bg-gray-700" value="Escalera real">Escalera real</option>
                                </select>
                            </li>
                            <li>
                                <label for="amount_bet" class="block mb-2 text-md font-medium dorado">Cantidad:</label>
                                <input type="number" name="amount_bet" id="amount_bet"
                                    class="bg-gray-700 text-white sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                                    placeholder="Amount" required="">
                            </li>
                            <button type="submit"
                                class="bg-gradient-to-r from-doradoBoton1 to-doradoBoton2 botonGeneral mt-4 w-full text-white hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:hover:bg-primary-700 dark:focus:ring-primary-800">Create
                                bet
                            </button>
                        </ul>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section class="relative">
        <div class="flex flex-col items-center justify-center">
            <div class="grid grid-cols-2 text-white">
                <div class="ml-3 mr-6">
                    <h1 class="text-xl font-bold leading-tight tracking-tight dorado md:text-2xl text-center">
                        Roulette
                    </h1>
                    <img src="{{ asset('storage/images/rouletteRules.png') }}" alt="">
                    <div class="flex flex-col">
                        <table class="min-w-full">
                            <thead class="border-b dorado">
                                <tr>
                                    <th scope="col" class="text-sm font-medium px-6 py-4 text-left">Apuesta</th>
                                    <th scope="col" class="text-sm font-medium px-6 py-4 text-left">Descripción
                                    </th>
                                    <th scope="col" class="text-sm font-medium px-6 py-4 text-left">Pago</th>
                                </tr>
                            </thead>
                            <tbody class="text-white">
                                <tr class="border-b">
                                    <td scope="col" class="text-sm font-medium px-6 py-4 text-left">Straight Up
                                    </td>
                                    <td class="text-sm font-light px-6 py-4 whitespace-nowrap">Apuesta a un número
                                        individual</td>
                                    <td class="text-sm font-light px-6 py-4 whitespace-nowrap">Pago de 35 a 1</td>
                                </tr>
                                <tr class="border-b">
                                    <td scope="col" class="text-sm font-medium px-6 py-4 text-left">Split</td>
                                    <td class="text-sm font-light px-6 py-4 whitespace-nowrap">Apuesta a dos números
                                        adyacentes</td>
                                    <td class="text-sm font-light px-6 py-4 whitespace-nowrap">Pago de 17 a 1</td>
                                </tr>
                                <tr class="border-b">
                                    <td scope="col" class="text-sm font-medium px-6 py-4 text-left">Street</td>
                                    <td class="text-sm font-light px-6 py-4 whitespace-nowrap">Apuesta a tres números
                                        en
                                        una fila</td>
                                    <td class="text-sm font-light px-6 py-4 whitespace-nowrap">Pago de 11 a 1</td>
                                </tr>
                                <tr class="border-b">
                                    <td scope="col" class="text-sm font-medium px-6 py-4 text-left">Corner o Square
                                    </td>
                                    <td class="text-sm font-light px-6 py-4 whitespace-nowrap">Apuesta a cuatro números
                                        en
                                        una
                                        esquina</td>
                                    <td class="text-sm font-light px-6 py-4 whitespace-nowrap">Pago de 8 a 1</td>
                                </tr>
                                <tr class="border-b">
                                    <td scope="col" class="text-sm font-medium px-6 py-4 text-left">Line o Double
                                        Street</td>
                                    <td class="text-sm font-light px-6 py-4 whitespace-nowrap">Apuesta a seis números
                                        en
                                        dos filas
                                        adyacentes</td>
                                    <td class="text-sm font-light px-6 py-4 whitespace-nowrap">Pago de 5 a 1</td>
                                </tr>
                                <tr class="border-b">
                                    <td scope="col" class="text-sm font-medium px-6 py-4 text-left">Dozens</td>
                                    <td class="text-sm font-light px-6 py-4 whitespace-nowrap">Apuesta a uno de los
                                        tres
                                        grupos de
                                        números (1-12, 13-24, 25-36)</td>
                                    <td class="text-sm font-light px-6 py-4 whitespace-nowrap">Pago de 2 a 1</td>
                                </tr>
                                <tr class="border-b">
                                    <td scope="col" class="text-sm font-medium px-6 py-4 text-left">Columns</td>
                                    <td class="text-sm font-light px-6 py-4 whitespace-nowrap">Apuesta a una de las
                                        tres
                                        columnas de
                                        números</td>
                                    <td class="text-sm font-light px-6 py-4 whitespace-nowrap">Pago de 2 a 1</td>
                                </tr>
                                <tr class="border-b">
                                    <td scope="col" class="text-sm font-medium px-6 py-4 text-left">Rojo/Negro</td>
                                    <td class="text-sm font-light px-6 py-4 whitespace-nowrap">Apuesta color</td>
                                    <td class="text-sm font-light px-6 py-4 whitespace-nowrap">Pago de 1 a 1</td>
                                </tr>
                                <tr class="border-b">
                                    <td scope="col" class="text-sm font-medium px-6 py-4 text-left">Pares/Impares
                                    </td>
                                    <td class="text-sm font-light px-6 py-4 whitespace-nowrap">Apuesta a la paridad
                                    </td>
                                    <td class="text-sm font-light px-6 py-4 whitespace-nowrap">Pago de 1 a 1</td>
                                </tr>
                                <tr class="border-b">
                                    <td scope="col" class="text-sm font-medium px-6 py-4 text-left">Alto/Bajo</td>
                                    <td class="text-sm font-light px-6 py-4 whitespace-nowrap">Apuesta al rango del
                                        número</td>
                                    <td class="text-sm font-light px-6 py-4 whitespace-nowrap">Pago de 1 a 1</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="ml-3 mr-6">
                    <h1 class="text-xl font-bold leading-tight tracking-tight dorado md:text-2xl text-center">
                        Poker
                    </h1>
                    <img src="{{ asset('storage/images/jugadasPoker.png') }}" alt="">
                    <div class="flex flex-col">
                        <table class="min-w-full">
                            <thead class="border-b dorado">
                                <tr>
                                    <th scope="col" class="text-sm font-medium px-6 py-4 text-left">Apuesta</th>
                                    <th scope="col" class="text-sm font-medium px-6 py-4 text-left">Descripción
                                    </th>
                                    <th scope="col" class="text-sm font-medium px-6 py-4 text-left">Pago</th>
                                </tr>
                            </thead>
                            <tbody class="text-white">
                                <tr class="border-b">
                                    <td scope="col" class="text-sm font-medium px-6 py-4 text-left">Carta alta</td>
                                    <td class="text-sm font-light px-6 py-4 whitespace-nowrap">La mano más baja posible
                                        en
                                        poker. <br>
                                        Consiste en tener la carta más alta en la mano sin ninguna combinación.</td>
                                    <td class="text-sm font-light px-6 py-4 whitespace-nowrap">Pago de 35 a 1</td>
                                </tr>
                                <tr class="border-b">
                                    <td scope="col" class="text-sm font-medium px-6 py-4 text-left">Par</td>
                                    <td class="text-sm font-light px-6 py-4 whitespace-nowrap">Dos cartas del mismo
                                        valor
                                        más tres cartas
                                        sin relación entre sí.</td>
                                    <td class="text-sm font-light px-6 py-4 whitespace-nowrap">Pago de 17 a 1</td>
                                </tr>
                                <tr class="border-b">
                                    <td scope="col" class="text-sm font-medium px-6 py-4 text-left">Doble par</td>
                                    <td class="text-sm font-light px-6 py-4 whitespace-nowrap">Dos pares de cartas del
                                        mismo valor más una
                                        carta sin relación.</td>
                                    <td class="text-sm font-light px-6 py-4 whitespace-nowrap">Pago de 11 a 1</td>
                                </tr>
                                <tr class="border-b">
                                    <td scope="col" class="text-sm font-medium px-6 py-4 text-left">Trio</td>
                                    <td class="text-sm font-light px-6 py-4 whitespace-nowrap">Tres cartas del mismo
                                        valor
                                        más dos cartas
                                        sin relación.</td>
                                    <td class="text-sm font-light px-6 py-4 whitespace-nowrap">Pago de 8 a 1</td>
                                </tr>
                                <tr class="border-b">
                                    <td scope="col" class="text-sm font-medium px-6 py-4 text-left">Escalera</td>
                                    <td class="text-sm font-light px-6 py-4 whitespace-nowrap">Cinco cartas
                                        consecutivas de
                                        diferentes
                                        palos.</td>
                                    <td class="text-sm font-light px-6 py-4 whitespace-nowrap">Pago de 5 a 1</td>
                                </tr>
                                <tr class="border-b">
                                    <td scope="col" class="text-sm font-medium px-6 py-4 text-left">Color</td>
                                    <td class="text-sm font-light px-6 py-4 whitespace-nowrap">Cinco cartas del mismo
                                        palo,
                                        no
                                        necesariamente consecutivas.</td>
                                    <td class="text-sm font-light px-6 py-4 whitespace-nowrap">Pago de 2 a 1</td>
                                </tr>
                                <tr class="border-b">
                                    <td scope="col" class="text-sm font-medium px-6 py-4 text-left">Full</td>
                                    <td class="text-sm font-light px-6 py-4 whitespace-nowrap">Tres cartas del mismo
                                        valor
                                        más un par.</td>
                                    <td class="text-sm font-light px-6 py-4 whitespace-nowrap">Pago de 2 a 1</td>
                                </tr>
                                <tr class="border-b">
                                    <td scope="col" class="text-sm font-medium px-6 py-4 text-left">Poker</td>
                                    <td class="text-sm font-light px-6 py-4 whitespace-nowrap">Cuatro cartas del mismo
                                        valor más una carta
                                        sin relación.</td>
                                    <td class="text-sm font-light px-6 py-4 whitespace-nowrap">Pago de 1 a 1</td>
                                </tr>
                                <tr class="border-b">
                                    <td scope="col" class="text-sm font-medium px-6 py-4 text-left">Escalera de
                                        color
                                    </td>
                                    <td class="text-sm font-light px-6 py-4 whitespace-nowrap">Cinco cartas
                                        consecutivas
                                        del mismo palo.
                                    </td>
                                    <td class="text-sm font-light px-6 py-4 whitespace-nowrap">Pago de 1 a 1</td>
                                </tr>
                                <tr class="border-b">
                                    <td scope="col" class="text-sm font-medium px-6 py-4 text-left">Escalera real
                                    </td>
                                    <td class="text-sm font-light px-6 py-4 whitespace-nowrap">La mejor mano posible en
                                        poker, es una
                                        escalera de color del 10 al as.</td>
                                    <td class="text-sm font-light px-6 py-4 whitespace-nowrap">Pago de 1 a 1</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
