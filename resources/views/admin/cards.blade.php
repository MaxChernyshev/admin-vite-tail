@extends('admin.layouts.layout')

@section('content')
    <!-- ===== Main Content Start ===== -->
    <main>
        <div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10">
            <!-- Breadcrumb Start -->
            <div
                class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between"
            >
                <h2 class="text-title-md2 font-bold text-black dark:text-white">
                    Cards
                </h2>

                <nav>
                    <ol class="flex items-center gap-2">
                        <li>
                            <a class="font-medium" href="index.blade.php">Dashboard /</a>
                        </li>
                        <li class="font-medium text-primary">Cards</li>
                    </ol>
                </nav>
            </div>
            <!-- Breadcrumb End -->

            <div class="grid grid-cols-1 gap-7.5 sm:grid-cols-2 xl:grid-cols-3">
                <div
                    class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark"
                >
                    <div class="flex items-center gap-3 px-6 py-5">
                        <div class="h-10 w-10 rounded-full">
                            <img src="./images/user/user-11.png" alt="User"/>
                        </div>
                        <div>
                            <h4 class="font-medium text-black dark:text-white">
                                Naimur Rahman
                            </h4>
                            <p class="text-xs font-medium">Content Writer</p>
                        </div>
                    </div>

                    <a href="#" class="block px-4">
                        <img src="./images/cards/cards-01.png" alt="Cards"/>
                    </a>

                    <div class="p-6">
                        <h4
                            class="mb-3 text-xl font-semibold text-black dark:text-white"
                        >
                            <a href="#">Card Title here</a>
                        </h4>
                        <p class="font-medium">
                            Lorem ipsum dolor sit amet, vehiculaum ero felis loreum
                            fitiona fringilla goes scelerisque Interdum et.
                        </p>
                    </div>
                </div>

                <div
                    class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark"
                >
                    <div class="flex items-center gap-3 px-6 py-5">
                        <div class="h-10 w-10 rounded-full">
                            <img src="./images/user/user-12.png" alt="User"/>
                        </div>
                        <div>
                            <h4 class="font-medium text-black dark:text-white">
                                Musharof Chy
                            </h4>
                            <p class="text-xs font-medium">Web Developer</p>
                        </div>
                    </div>

                    <a href="#" class="block px-4">
                        <img src="./images/cards/cards-02.png" alt="Cards"/>
                    </a>

                    <div class="p-6">
                        <h4
                            class="mb-3 text-xl font-semibold text-black dark:text-white"
                        >
                            <a href="#">Card Title here</a>
                        </h4>
                        <p class="font-medium">
                            Lorem ipsum dolor sit amet, vehiculaum ero felis loreum
                            fitiona fringilla goes scelerisque Interdum et.
                        </p>
                    </div>
                </div>

                <div
                    class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark"
                >
                    <div class="flex items-center gap-3 px-6 py-5">
                        <div class="h-10 w-10 rounded-full">
                            <img src="./images/user/user-13.png" alt="User"/>
                        </div>
                        <div>
                            <h4 class="font-medium text-black dark:text-white">
                                Shafiq Hammad
                            </h4>
                            <p class="text-xs font-medium">Front-end Developer</p>
                        </div>
                    </div>

                    <a href="#" class="block px-4">
                        <img src="./images/cards/cards-03.png" alt="Cards"/>
                    </a>

                    <div class="p-6">
                        <h4
                            class="mb-3 text-xl font-semibold text-black dark:text-white"
                        >
                            <a href="#">Card Title here</a>
                        </h4>
                        <p class="font-medium">
                            Lorem ipsum dolor sit amet, vehiculaum ero felis loreum
                            fitiona fringilla goes scelerisque Interdum et.
                        </p>
                    </div>
                </div>
            </div>

            <h2
                class="mb-7.5 mt-10 text-title-md2 font-bold text-black dark:text-white"
            >
                Cards
            </h2>

            <div class="grid grid-cols-1 gap-7.5 sm:grid-cols-2 xl:grid-cols-3">
                <div
                    class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark"
                >
                    <a href="#" class="block px-4 pt-4">
                        <img src="./images/cards/cards-04.png" alt="Cards"/>
                    </a>

                    <div class="p-6">
                        <h4
                            class="mb-3 text-xl font-semibold text-black dark:text-white"
                        >
                            <a href="#">Card Title here</a>
                        </h4>
                        <p class="font-medium">
                            Lorem ipsum dolor sit amet, vehiculaum ero felis loreum
                            fitiona fringilla goes scelerisque Interdum et.
                        </p>
                    </div>
                </div>

                <div
                    class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark"
                >
                    <a href="#" class="block px-4 pt-4">
                        <img src="./images/cards/cards-05.png" alt="Cards"/>
                    </a>

                    <div class="p-6">
                        <h4
                            class="mb-3 text-xl font-semibold text-black dark:text-white"
                        >
                            <a href="#">Card Title here</a>
                        </h4>
                        <p class="font-medium">
                            Lorem ipsum dolor sit amet, vehiculaum ero felis loreum
                            fitiona fringilla goes scelerisque Interdum et.
                        </p>
                    </div>
                </div>

                <div
                    class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark"
                >
                    <a href="#" class="block px-4 pt-4">
                        <img src="./images/cards/cards-06.png" alt="Cards"/>
                    </a>

                    <div class="p-6">
                        <h4
                            class="mb-3 text-xl font-semibold text-black dark:text-white"
                        >
                            <a href="#">Card Title here</a>
                        </h4>
                        <p class="font-medium">
                            Lorem ipsum dolor sit amet, vehiculaum ero felis loreum
                            fitiona fringilla goes scelerisque Interdum et.
                        </p>
                    </div>
                </div>
            </div>

            <h2
                class="mb-7.5 mt-10 text-title-md2 font-bold text-black dark:text-white"
            >
                Cards
            </h2>

            <div class="grid grid-cols-1 gap-7.5 sm:grid-cols-2 xl:grid-cols-3">
                <div
                    class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark"
                >
                    <div
                        class="border-b border-stroke p-5 px-7.5 dark:border-strokedark"
                    >
                        <h4 class="text-xl font-semibold text-black dark:text-white">
                            <a href="#">Card Title here</a>
                        </h4>
                    </div>
                    <div class="px-7.5 pb-9 pt-6">
                        <p class="font-medium">
                            Lorem ipsum dolor sit amet, vehiculaum ero felis loreum
                            fitiona fringilla goes scelerisque Interdum et.
                        </p>
                    </div>
                </div>

                <div
                    class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark"
                >
                    <div
                        class="border-b border-stroke p-5 px-7.5 dark:border-strokedark"
                    >
                        <h4 class="text-xl font-semibold text-black dark:text-white">
                            <a href="#">Card Title here</a>
                        </h4>
                    </div>
                    <div class="px-7.5 pb-9 pt-6">
                        <p class="font-medium">
                            Lorem ipsum dolor sit amet, vehiculaum ero felis loreum
                            fitiona fringilla goes scelerisque Interdum et.
                        </p>
                    </div>
                </div>

                <div
                    class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark"
                >
                    <div
                        class="border-b border-stroke p-5 px-7.5 dark:border-strokedark"
                    >
                        <h4 class="text-xl font-semibold text-black dark:text-white">
                            <a href="#">Card Title here</a>
                        </h4>
                    </div>
                    <div class="px-7.5 pb-9 pt-6">
                        <p class="font-medium">
                            Lorem ipsum dolor sit amet, vehiculaum ero felis loreum
                            fitiona fringilla goes scelerisque Interdum et.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- ===== Main Content End ===== -->
    </div>
    <!-- ===== Content Area End ===== -->
    </div>
    <!-- ===== Page Wrapper End ===== -->
    </body>
    </html>

@endsection
