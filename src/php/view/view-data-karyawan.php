<div class="flex flex-col relative">
    <div class="w-full ml-16  mt-5 px-6 py-8 bg-white shadow-lg rounded-3xl ">
        <div class="flex justify-between">
            <div class="header">
                <h1 class="text-4xl font-bold">Akun Karyawan</h1>
                <p class="font-medium ">Total 568 Akun</p>
            </div>
            <div class="side">
                <input class="bg-[#f0f3f4] pt-3 pb-3 pl-5 pr-32 rounded-full" type="text" placeholder="Cari nama obat">
                <a href="../input/add_data_karyawan.php" class="bg-[#b40001] text-white pt-3 pb-3 pl-8 pr-8 rounded-full text-lg">Add Data</a>
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
                            <p>Nama Karyawan</p>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <p>Alamat</p>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <p>No Telp</p>
                        </th>

                        <th scope="col" class="px-6 py-3">
                            <p>Action</p>
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
                            <p class="font-medium text-[#999999]">Robert</p>
                        </th>
                        <td class="px-6 py-2">
                            <p class="font-medium text-[#999999]">Jl. Batu Surga</p>
                        </td>
                        <td class="px-6 py-2">
                            <p class="font-medium text-[#999999]">08123456789</p>
                        </td>
                        <td class="px-6 py-2">
                            <div class="flex gap-1">
                                <a href="../edit/edit_data_karyawan.php">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 44 44" fill="none">
                                        <rect width="44" height="44" rx="8" fill="#4091F1" />
                                        <path d="M13 27.2524V31.0024H16.75L27.81 19.9424L24.06 16.1924L13 27.2524ZM30.71 17.0424C30.8027 16.9499 30.8762 16.84 30.9264 16.7191C30.9766 16.5981 31.0024 16.4684 31.0024 16.3374C31.0024 16.2065 30.9766 16.0768 30.9264 15.9558C30.8762 15.8348 30.8027 15.725 30.71 15.6324L28.37 13.2924C28.2775 13.1997 28.1676 13.1262 28.0466 13.076C27.9257 13.0258 27.796 13 27.665 13C27.534 13 27.4043 13.0258 27.2834 13.076C27.1624 13.1262 27.0525 13.1997 26.96 13.2924L25.13 15.1224L28.88 18.8724L30.71 17.0424Z" fill="white" />
                                    </svg>
                                </a>
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 44 44" fill="none">
                                        <rect width="44" height="44" rx="8" fill="#F14040" />
                                        <path d="M29 14H25.5L24.5 13H19.5L18.5 14H15V16H29M16 29C16 29.5304 16.2107 30.0391 16.5858 30.4142C16.9609 30.7893 17.4696 31 18 31H26C26.5304 31 27.0391 30.7893 27.4142 30.4142C27.7893 30.0391 28 29.5304 28 29V17H16V29Z" fill="white" />
                                    </svg>
                                </a>
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 44 44" fill="none">
                                        <rect width="44" height="44" rx="8" fill="#40F15E" />
                                        <path d="M30.375 18.875H25.125V13.625C25.125 12.9288 24.8484 12.2611 24.3562 11.7688C23.8639 11.2766 23.1962 11 22.5 11C21.8038 11 21.1361 11.2766 20.6438 11.7688C20.1516 12.2611 19.875 12.9288 19.875 13.625L19.9682 18.875H14.625C13.9288 18.875 13.2611 19.1516 12.7688 19.6438C12.2766 20.1361 12 20.8038 12 21.5C12 22.1962 12.2766 22.8639 12.7688 23.3562C13.2611 23.8484 13.9288 24.125 14.625 24.125L19.9682 24.0318L19.875 29.375C19.875 30.0712 20.1516 30.7389 20.6438 31.2312C21.1361 31.7234 21.8038 32 22.5 32C23.1962 32 23.8639 31.7234 24.3562 31.2312C24.8484 30.7389 25.125 30.0712 25.125 29.375V24.0318L30.375 24.125C31.0712 24.125 31.7389 23.8484 32.2312 23.3562C32.7234 22.8639 33 22.1962 33 21.5C33 20.8038 32.7234 20.1361 32.2312 19.6438C31.7389 19.1516 31.0712 18.875 30.375 18.875Z" fill="white" />
                                    </svg>
                                </a>
                            </div>
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
                            <p class="font-medium text-[#999999]">Robert</p>
                        </th>
                        <td class="px-6 py-2">
                            <p class="font-medium text-[#999999]">Jl. Batu Surga</p>
                        </td>
                        <td class="px-6 py-2">
                            <p class="font-medium text-[#999999]">08123456789</p>
                        </td>
                        <td class="px-6 py-2">
                            <div class="flex gap-1">
                                <a href="../edit/edit_data_karyawan.php">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 44 44" fill="none">
                                        <rect width="44" height="44" rx="8" fill="#4091F1" />
                                        <path d="M13 27.2524V31.0024H16.75L27.81 19.9424L24.06 16.1924L13 27.2524ZM30.71 17.0424C30.8027 16.9499 30.8762 16.84 30.9264 16.7191C30.9766 16.5981 31.0024 16.4684 31.0024 16.3374C31.0024 16.2065 30.9766 16.0768 30.9264 15.9558C30.8762 15.8348 30.8027 15.725 30.71 15.6324L28.37 13.2924C28.2775 13.1997 28.1676 13.1262 28.0466 13.076C27.9257 13.0258 27.796 13 27.665 13C27.534 13 27.4043 13.0258 27.2834 13.076C27.1624 13.1262 27.0525 13.1997 26.96 13.2924L25.13 15.1224L28.88 18.8724L30.71 17.0424Z" fill="white" />
                                    </svg>
                                </a>
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 44 44" fill="none">
                                        <rect width="44" height="44" rx="8" fill="#F14040" />
                                        <path d="M29 14H25.5L24.5 13H19.5L18.5 14H15V16H29M16 29C16 29.5304 16.2107 30.0391 16.5858 30.4142C16.9609 30.7893 17.4696 31 18 31H26C26.5304 31 27.0391 30.7893 27.4142 30.4142C27.7893 30.0391 28 29.5304 28 29V17H16V29Z" fill="white" />
                                    </svg>
                                </a>
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 44 44" fill="none">
                                        <rect width="44" height="44" rx="8" fill="#40F15E" />
                                        <path d="M30.375 18.875H25.125V13.625C25.125 12.9288 24.8484 12.2611 24.3562 11.7688C23.8639 11.2766 23.1962 11 22.5 11C21.8038 11 21.1361 11.2766 20.6438 11.7688C20.1516 12.2611 19.875 12.9288 19.875 13.625L19.9682 18.875H14.625C13.9288 18.875 13.2611 19.1516 12.7688 19.6438C12.2766 20.1361 12 20.8038 12 21.5C12 22.1962 12.2766 22.8639 12.7688 23.3562C13.2611 23.8484 13.9288 24.125 14.625 24.125L19.9682 24.0318L19.875 29.375C19.875 30.0712 20.1516 30.7389 20.6438 31.2312C21.1361 31.7234 21.8038 32 22.5 32C23.1962 32 23.8639 31.7234 24.3562 31.2312C24.8484 30.7389 25.125 30.0712 25.125 29.375V24.0318L30.375 24.125C31.0712 24.125 31.7389 23.8484 32.2312 23.3562C32.7234 22.8639 33 22.1962 33 21.5C33 20.8038 32.7234 20.1361 32.2312 19.6438C31.7389 19.1516 31.0712 18.875 30.375 18.875Z" fill="white" />
                                    </svg>
                                </a>
                            </div>
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
                            <p class="font-medium text-[#999999]">Robert</p>
                        </th>
                        <td class="px-6 py-2">
                            <p class="font-medium text-[#999999]">Jl. Batu Surga</p>
                        </td>
                        <td class="px-6 py-2">
                            <p class="font-medium text-[#999999]">08123456789</p>
                        </td>
                        <td class="px-6 py-2">
                            <div class="flex gap-1">
                                <a href="../edit/edit_data_karyawan.php">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 44 44" fill="none">
                                        <rect width="44" height="44" rx="8" fill="#4091F1" />
                                        <path d="M13 27.2524V31.0024H16.75L27.81 19.9424L24.06 16.1924L13 27.2524ZM30.71 17.0424C30.8027 16.9499 30.8762 16.84 30.9264 16.7191C30.9766 16.5981 31.0024 16.4684 31.0024 16.3374C31.0024 16.2065 30.9766 16.0768 30.9264 15.9558C30.8762 15.8348 30.8027 15.725 30.71 15.6324L28.37 13.2924C28.2775 13.1997 28.1676 13.1262 28.0466 13.076C27.9257 13.0258 27.796 13 27.665 13C27.534 13 27.4043 13.0258 27.2834 13.076C27.1624 13.1262 27.0525 13.1997 26.96 13.2924L25.13 15.1224L28.88 18.8724L30.71 17.0424Z" fill="white" />
                                    </svg>
                                </a>
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 44 44" fill="none">
                                        <rect width="44" height="44" rx="8" fill="#F14040" />
                                        <path d="M29 14H25.5L24.5 13H19.5L18.5 14H15V16H29M16 29C16 29.5304 16.2107 30.0391 16.5858 30.4142C16.9609 30.7893 17.4696 31 18 31H26C26.5304 31 27.0391 30.7893 27.4142 30.4142C27.7893 30.0391 28 29.5304 28 29V17H16V29Z" fill="white" />
                                    </svg>
                                </a>
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 44 44" fill="none">
                                        <rect width="44" height="44" rx="8" fill="#40F15E" />
                                        <path d="M30.375 18.875H25.125V13.625C25.125 12.9288 24.8484 12.2611 24.3562 11.7688C23.8639 11.2766 23.1962 11 22.5 11C21.8038 11 21.1361 11.2766 20.6438 11.7688C20.1516 12.2611 19.875 12.9288 19.875 13.625L19.9682 18.875H14.625C13.9288 18.875 13.2611 19.1516 12.7688 19.6438C12.2766 20.1361 12 20.8038 12 21.5C12 22.1962 12.2766 22.8639 12.7688 23.3562C13.2611 23.8484 13.9288 24.125 14.625 24.125L19.9682 24.0318L19.875 29.375C19.875 30.0712 20.1516 30.7389 20.6438 31.2312C21.1361 31.7234 21.8038 32 22.5 32C23.1962 32 23.8639 31.7234 24.3562 31.2312C24.8484 30.7389 25.125 30.0712 25.125 29.375V24.0318L30.375 24.125C31.0712 24.125 31.7389 23.8484 32.2312 23.3562C32.7234 22.8639 33 22.1962 33 21.5C33 20.8038 32.7234 20.1361 32.2312 19.6438C31.7389 19.1516 31.0712 18.875 30.375 18.875Z" fill="white" />
                                    </svg>
                                </a>
                            </div>
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
                            <p class="font-medium text-[#999999]">Robert</p>
                        </th>
                        <td class="px-6 py-2">
                            <p class="font-medium text-[#999999]">Jl. Batu Surga</p>
                        </td>
                        <td class="px-6 py-2">
                            <p class="font-medium text-[#999999]">08123456789</p>
                        </td>
                        <td class="px-6 py-2">
                            <div class="flex gap-1">
                                <a href="../edit/edit_data_karyawan.php">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 44 44" fill="none">
                                        <rect width="44" height="44" rx="8" fill="#4091F1" />
                                        <path d="M13 27.2524V31.0024H16.75L27.81 19.9424L24.06 16.1924L13 27.2524ZM30.71 17.0424C30.8027 16.9499 30.8762 16.84 30.9264 16.7191C30.9766 16.5981 31.0024 16.4684 31.0024 16.3374C31.0024 16.2065 30.9766 16.0768 30.9264 15.9558C30.8762 15.8348 30.8027 15.725 30.71 15.6324L28.37 13.2924C28.2775 13.1997 28.1676 13.1262 28.0466 13.076C27.9257 13.0258 27.796 13 27.665 13C27.534 13 27.4043 13.0258 27.2834 13.076C27.1624 13.1262 27.0525 13.1997 26.96 13.2924L25.13 15.1224L28.88 18.8724L30.71 17.0424Z" fill="white" />
                                    </svg>
                                </a>
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 44 44" fill="none">
                                        <rect width="44" height="44" rx="8" fill="#F14040" />
                                        <path d="M29 14H25.5L24.5 13H19.5L18.5 14H15V16H29M16 29C16 29.5304 16.2107 30.0391 16.5858 30.4142C16.9609 30.7893 17.4696 31 18 31H26C26.5304 31 27.0391 30.7893 27.4142 30.4142C27.7893 30.0391 28 29.5304 28 29V17H16V29Z" fill="white" />
                                    </svg>
                                </a>
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 44 44" fill="none">
                                        <rect width="44" height="44" rx="8" fill="#40F15E" />
                                        <path d="M30.375 18.875H25.125V13.625C25.125 12.9288 24.8484 12.2611 24.3562 11.7688C23.8639 11.2766 23.1962 11 22.5 11C21.8038 11 21.1361 11.2766 20.6438 11.7688C20.1516 12.2611 19.875 12.9288 19.875 13.625L19.9682 18.875H14.625C13.9288 18.875 13.2611 19.1516 12.7688 19.6438C12.2766 20.1361 12 20.8038 12 21.5C12 22.1962 12.2766 22.8639 12.7688 23.3562C13.2611 23.8484 13.9288 24.125 14.625 24.125L19.9682 24.0318L19.875 29.375C19.875 30.0712 20.1516 30.7389 20.6438 31.2312C21.1361 31.7234 21.8038 32 22.5 32C23.1962 32 23.8639 31.7234 24.3562 31.2312C24.8484 30.7389 25.125 30.0712 25.125 29.375V24.0318L30.375 24.125C31.0712 24.125 31.7389 23.8484 32.2312 23.3562C32.7234 22.8639 33 22.1962 33 21.5C33 20.8038 32.7234 20.1361 32.2312 19.6438C31.7389 19.1516 31.0712 18.875 30.375 18.875Z" fill="white" />
                                    </svg>
                                </a>
                            </div>
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
                            <p class="font-medium text-[#999999]">Robert</p>
                        </th>
                        <td class="px-6 py-2">
                            <p class="font-medium text-[#999999]">Jl. Batu Surga</p>
                        </td>
                        <td class="px-6 py-2">
                            <p class="font-medium text-[#999999]">08123456789</p>
                        </td>
                        <td class="px-6 py-2">
                            <div class="flex gap-1">
                                <a href="../edit/edit_data_karyawan.php">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 44 44" fill="none">
                                        <rect width="44" height="44" rx="8" fill="#4091F1" />
                                        <path d="M13 27.2524V31.0024H16.75L27.81 19.9424L24.06 16.1924L13 27.2524ZM30.71 17.0424C30.8027 16.9499 30.8762 16.84 30.9264 16.7191C30.9766 16.5981 31.0024 16.4684 31.0024 16.3374C31.0024 16.2065 30.9766 16.0768 30.9264 15.9558C30.8762 15.8348 30.8027 15.725 30.71 15.6324L28.37 13.2924C28.2775 13.1997 28.1676 13.1262 28.0466 13.076C27.9257 13.0258 27.796 13 27.665 13C27.534 13 27.4043 13.0258 27.2834 13.076C27.1624 13.1262 27.0525 13.1997 26.96 13.2924L25.13 15.1224L28.88 18.8724L30.71 17.0424Z" fill="white" />
                                    </svg>
                                </a>
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 44 44" fill="none">
                                        <rect width="44" height="44" rx="8" fill="#F14040" />
                                        <path d="M29 14H25.5L24.5 13H19.5L18.5 14H15V16H29M16 29C16 29.5304 16.2107 30.0391 16.5858 30.4142C16.9609 30.7893 17.4696 31 18 31H26C26.5304 31 27.0391 30.7893 27.4142 30.4142C27.7893 30.0391 28 29.5304 28 29V17H16V29Z" fill="white" />
                                    </svg>
                                </a>
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 44 44" fill="none">
                                        <rect width="44" height="44" rx="8" fill="#40F15E" />
                                        <path d="M30.375 18.875H25.125V13.625C25.125 12.9288 24.8484 12.2611 24.3562 11.7688C23.8639 11.2766 23.1962 11 22.5 11C21.8038 11 21.1361 11.2766 20.6438 11.7688C20.1516 12.2611 19.875 12.9288 19.875 13.625L19.9682 18.875H14.625C13.9288 18.875 13.2611 19.1516 12.7688 19.6438C12.2766 20.1361 12 20.8038 12 21.5C12 22.1962 12.2766 22.8639 12.7688 23.3562C13.2611 23.8484 13.9288 24.125 14.625 24.125L19.9682 24.0318L19.875 29.375C19.875 30.0712 20.1516 30.7389 20.6438 31.2312C21.1361 31.7234 21.8038 32 22.5 32C23.1962 32 23.8639 31.7234 24.3562 31.2312C24.8484 30.7389 25.125 30.0712 25.125 29.375V24.0318L30.375 24.125C31.0712 24.125 31.7389 23.8484 32.2312 23.3562C32.7234 22.8639 33 22.1962 33 21.5C33 20.8038 32.7234 20.1361 32.2312 19.6438C31.7389 19.1516 31.0712 18.875 30.375 18.875Z" fill="white" />
                                    </svg>
                                </a>
                            </div>
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
                            <p class="font-medium text-[#999999]">Robert</p>
                        </th>
                        <td class="px-6 py-2">
                            <p class="font-medium text-[#999999]">Jl. Batu Surga</p>
                        </td>
                        <td class="px-6 py-2">
                            <p class="font-medium text-[#999999]">08123456789</p>
                        </td>
                        <td class="px-6 py-2">
                            <div class="flex gap-1">
                                <a href="../edit/edit_data_karyawan.php">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 44 44" fill="none">
                                        <rect width="44" height="44" rx="8" fill="#4091F1" />
                                        <path d="M13 27.2524V31.0024H16.75L27.81 19.9424L24.06 16.1924L13 27.2524ZM30.71 17.0424C30.8027 16.9499 30.8762 16.84 30.9264 16.7191C30.9766 16.5981 31.0024 16.4684 31.0024 16.3374C31.0024 16.2065 30.9766 16.0768 30.9264 15.9558C30.8762 15.8348 30.8027 15.725 30.71 15.6324L28.37 13.2924C28.2775 13.1997 28.1676 13.1262 28.0466 13.076C27.9257 13.0258 27.796 13 27.665 13C27.534 13 27.4043 13.0258 27.2834 13.076C27.1624 13.1262 27.0525 13.1997 26.96 13.2924L25.13 15.1224L28.88 18.8724L30.71 17.0424Z" fill="white" />
                                    </svg>
                                </a>
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 44 44" fill="none">
                                        <rect width="44" height="44" rx="8" fill="#F14040" />
                                        <path d="M29 14H25.5L24.5 13H19.5L18.5 14H15V16H29M16 29C16 29.5304 16.2107 30.0391 16.5858 30.4142C16.9609 30.7893 17.4696 31 18 31H26C26.5304 31 27.0391 30.7893 27.4142 30.4142C27.7893 30.0391 28 29.5304 28 29V17H16V29Z" fill="white" />
                                    </svg>
                                </a>
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 44 44" fill="none">
                                        <rect width="44" height="44" rx="8" fill="#40F15E" />
                                        <path d="M30.375 18.875H25.125V13.625C25.125 12.9288 24.8484 12.2611 24.3562 11.7688C23.8639 11.2766 23.1962 11 22.5 11C21.8038 11 21.1361 11.2766 20.6438 11.7688C20.1516 12.2611 19.875 12.9288 19.875 13.625L19.9682 18.875H14.625C13.9288 18.875 13.2611 19.1516 12.7688 19.6438C12.2766 20.1361 12 20.8038 12 21.5C12 22.1962 12.2766 22.8639 12.7688 23.3562C13.2611 23.8484 13.9288 24.125 14.625 24.125L19.9682 24.0318L19.875 29.375C19.875 30.0712 20.1516 30.7389 20.6438 31.2312C21.1361 31.7234 21.8038 32 22.5 32C23.1962 32 23.8639 31.7234 24.3562 31.2312C24.8484 30.7389 25.125 30.0712 25.125 29.375V24.0318L30.375 24.125C31.0712 24.125 31.7389 23.8484 32.2312 23.3562C32.7234 22.8639 33 22.1962 33 21.5C33 20.8038 32.7234 20.1361 32.2312 19.6438C31.7389 19.1516 31.0712 18.875 30.375 18.875Z" fill="white" />
                                    </svg>
                                </a>
                            </div>
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