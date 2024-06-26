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
                    Avatars
                </h2>

                <nav>
                    <ol class="flex items-center gap-2">
                        <li>
                            <a class="font-medium" href="index.blade.php">Dashboard /</a>
                        </li>
                        <li class="font-medium text-primary">Avatars</li>
                    </ol>
                </nav>
            </div>
            <!-- Breadcrumb End -->

            <div class="flex flex-col gap-7.5">
                <div
                    class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark"
                >
                    <div
                        class="border-b border-stroke px-4 py-4 dark:border-strokedark sm:px-6 xl:px-9"
                    >
                        <h3 class="font-medium text-black dark:text-white">
                            Style 1
                        </h3>
                    </div>

                    <div class="px-4 py-9 sm:px-6 xl:px-8.5">
                        <div class="flex items-center gap-6">
                            <div class="h-6 w-full max-w-6 rounded-full">
                                <img src="./images/user/user-03.png" alt="user"/>
                            </div>

                            <div class="h-9.5 w-full max-w-9.5 rounded-full">
                                <img src="./images/user/user-03.png" alt="user"/>
                            </div>

                            <div class="h-13 w-full max-w-13 rounded-full">
                                <img src="./images/user/user-03.png" alt="user"/>
                            </div>

                            <div class="h-20 w-full max-w-20 rounded-full">
                                <img src="./images/user/user-03.png" alt="user"/>
                            </div>
                        </div>
                    </div>
                </div>

                <div
                    class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark"
                >
                    <div
                        class="border-b border-stroke px-4 py-4 dark:border-strokedark sm:px-6 xl:px-9"
                    >
                        <h3 class="font-medium text-black dark:text-white">
                            Style 2
                        </h3>
                    </div>

                    <div class="p-4 sm:p-6 xl:p-9">
                        <div class="flex items-center gap-6">
                            <div class="relative h-6 w-full max-w-6 rounded-full">
                                <img src="./images/user/user-03.png" alt="user"/>

                                <span
                                    class="absolute -right-px -top-px h-2 w-full max-w-2 rounded-full border border-white bg-[#219653] dark:border-black"
                                ></span>
                            </div>

                            <div class="relative h-9.5 w-full max-w-9.5 rounded-full">
                                <img src="./images/user/user-03.png" alt="user"/>

                                <span
                                    class="absolute -right-0.5 -top-0.5 h-3.5 w-full max-w-3.5 rounded-full border-2 border-white bg-[#219653] dark:border-black"
                                ></span>
                            </div>

                            <div class="relative h-13 w-full max-w-13 rounded-full">
                                <img src="./images/user/user-03.png" alt="user"/>

                                <span
                                    class="absolute -right-0.5 -top-0.5 h-4.5 w-full max-w-4.5 rounded-full border-[2.7px] border-white bg-[#219653] dark:border-black"
                                ></span>
                            </div>

                            <div class="relative h-20 w-full max-w-20 rounded-full">
                                <img src="./images/user/user-03.png" alt="user"/>

                                <span
                                    class="absolute right-0 top-0 h-5.5 w-full max-w-5.5 rounded-full border-[3px] border-white bg-[#219653] dark:border-black"
                                ></span>
                            </div>
                        </div>
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
