<div class="flex flex-col relative">
    <div class="w-full ml-16  mt-5 px-6 py-8 bg-white shadow-lg rounded-3xl ">
        <div class="flex justify-between">
            <div class="header">
                <h1 class="text-4xl font-bold">Data Pelanggan</h1>
                <p class="font-medium">Total 9120 Data Pelanggan</p>
            </div>
            <div class="side">
                <input class="bg-[#f0f3f4] pt-3 pb-3 pl-5 pr-32 rounded-full" type="text" placeholder="Cari nama obat">
                <a href="../input/add_data_pelanggan.php" class="bg-[#b40001] text-white pt-3 pb-3 pl-8 pr-8 rounded-full text-lg">Add Data</a>
            </div>
        </div>
        <hr class="my-5 h-0.5 border-t-0 bg-[#999999]" />
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-white">
                <thead class="text-xs text-[#F14040] uppercase bg-[#f0f3f4]">
                    <tr>
                        <th scope="col" class="p-4">
                            <p class="text-lg">#</p>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <p>Id</p>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <p>Nama Lengkap</p>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <p>Alamat</p>
                        </th>

                        <th scope="col" class="px-6 py-3">
                            <p>Telp</p>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <p>Usia</p>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <p>Bukti Foto Resep</p>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-[#f0f3f4] hover:bg-gray-50 text-black">
                        <td class="w-4 p-4">
                            <div class="flex items-center">
                                <input id="checkbox-table-search-1" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                            </div>
                        </td>
                        <th scope="row" class="px-6 py-2 font-medium text-black whitespace-nowrap">
                            <p class="font-medium text-[#999999]">12</p>
                        </th>
                        <td class="px-6 py-2">
                            <p class="font-medium text-[#999999]">Yoga Dharma</p>
                        </td>
                        <td class="px-6 py-2">
                            <p class="font-medium text-[#999999]">Suradipa 2 Gang permata no 1</p>
                        </td>
                        <td class="px-6 py-2">
                            <p class="font-medium text-[#999999]">085792101795</p>
                        </td>
                        <td class="px-6 py-2">
                            <p class="font-medium text-[#999999]">17</p>
                        </td>
                        <td class="px-6 py-2">
                            <p class="font-medium text-[#999999]"><img class="max-w-xs" src="../../../image/graph.svg" alt="Bukti Foto"></p>
                        </td>
                    </tr>
                 
                    <tr class="bg-[#f0f3f4] hover:bg-gray-50 text-black">
                        <td class="w-4 p-4">
                            <div class="flex items-center">
                                <input id="checkbox-table-search-1" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                            </div>
                        </td>
                        <th scope="row" class="px-6 py-2 font-medium text-black whitespace-nowrap">
                            <p class="font-medium text-[#999999]">12</p>
                        </th>
                        <td class="px-6 py-2">
                            <p class="font-medium text-[#999999]">Yoga Dharma</p>
                        </td>
                        <td class="px-6 py-2">
                            <p class="font-medium text-[#999999]">Suradipa 2 Gang permata no 1</p>
                        </td>
                        <td class="px-6 py-2">
                            <p class="font-medium text-[#999999]">085792101795</p>
                        </td>
                        <td class="px-6 py-2">
                            <p class="font-medium text-[#999999]">17</p>
                        </td>
                        <td class="px-6 py-2">
                            <p class="font-medium text-[#999999]"><img class="max-w-xs" src="../../../image/graph.svg" alt="Bukti Foto"></p>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="fixed right-0 bottom-0 w-full px-16 py-6 rounded-3xl ">
        <div class="flex flex-row items-center justify-end">
            <button class="bg-[#b40001] text-white pt-3 pb-3 pl-5 pr-5 rounded-xl ">Previous</button>
            <ul class="mx-3 flex gap-3">
                <li class="px-5 py-3 font-bold bg-[#F0F3F4] rounded-full hover:bg-[#B40001] hover:text-white">1</li>
                <li class="px-5 py-3 font-bold bg-[#F0F3F4] rounded-full hover:bg-[#B40001] hover:text-white">2</li>
                <li class="px-5 py-3 font-bold bg-[#F0F3F4] rounded-full hover:bg-[#B40001] hover:text-white">...</li>
                <li class="px-5 py-3 font-bold bg-[#F0F3F4] rounded-full hover:bg-[#B40001] hover:text-white">11</li>
                <li class="px-5 py-3 font-bold bg-[#F0F3F4] rounded-full hover:bg-[#B40001] hover:text-white">12</li>
            </ul>
            <button class="bg-[#b40001] text-white pt-3 pb-3 pl-8 pr-8 rounded-xl ">Next</button>
        </div>
    </div>
</div>