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
                    Images
                </h2>

                <nav>
                    <ol class="flex items-center gap-2">
                        <li>
                            <a class="font-medium" href="index.blade.php">Dashboard /</a>
                        </li>
                        <li class="font-medium text-primary">Images</li>
                    </ol>
                </nav>
            </div>
            <!-- Breadcrumb End -->

            <div class="flex flex-col gap-7.5">
                <div
                    class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark"
                >
                    <div
                        class="border-b border-stroke px-4 py-4 dark:border-strokedark sm:px-6 xl:px-7.5"
                    >
                        <h3 class="font-medium text-black dark:text-white">
                            Responsive image
                        </h3>
                    </div>

                    <div class="p-4 sm:p-6 xl:p-10">
                        <div class="relative">
                            <div id="pane" class="overflow-hidden">
                                <img src="./images/cover/cover-02.jpg" alt="Cover"/>
                            </div>
                            <div
                                id="ghostpane"
                                class="absolute left-0 top-0 duration-300 ease-in-out"
                            ></div>
                        </div>
                    </div>
                </div>

                <div
                    class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark"
                >
                    <div
                        class="border-b border-stroke px-4 py-4 dark:border-strokedark sm:px-6 xl:px-7.5"
                    >
                        <h3 class="font-medium text-black dark:text-white">
                            Image Grid
                        </h3>
                    </div>

                    <div class="p-4 sm:p-6 xl:p-10">
                        <div
                            class="grid grid-cols-1 gap-5 sm:grid-cols-2 xl:grid-cols-3 xl:gap-10"
                        >
                            <div>
                                <img src="./images/cover/cover-03.jpg" alt="Cover"/>
                            </div>
                            <div>
                                <img src="./images/cover/cover-04.jpg" alt="Cover"/>
                            </div>
                            <div>
                                <img src="./images/cover/cover-05.jpg" alt="Cover"/>
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
