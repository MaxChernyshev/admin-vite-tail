<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tooltips | TailAdmin - Tailwind CSS Admin Dashboard Template</title>
  </head>

  <body
    x-data="{ page: 'tooltips', 'loaded': true, 'darkMode': true, 'stickyMenu': false, 'sidebarToggle': false, 'scrollTop': false }"
    x-init="
          darkMode = JSON.parse(localStorage.getItem('darkMode'));
          $watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))"
    :class="{'dark text-bodydark bg-boxdark-2': darkMode === true}"
  >
    <!-- ===== Preloader Start ===== -->
    <include src="./partials/preloader.html"></include>
    <!-- ===== Preloader End ===== -->

    <!-- ===== Page Wrapper Start ===== -->
    <div class="flex h-screen overflow-hidden">
      <!-- ===== Sidebar Start ===== -->
      <include src="./partials/sidebar.html"></include>
      <!-- ===== Sidebar End ===== -->

      <!-- ===== Content Area Start ===== -->
      <div
        class="relative flex flex-1 flex-col overflow-y-auto overflow-x-hidden"
      >
        <!-- ===== Header Start ===== -->
        <include src="./partials/header.html" />
        <!-- ===== Header End ===== -->

        <!-- ===== Main Content Start ===== -->
        <main>
          <div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10">
            <!-- Breadcrumb Start -->
            <div
              class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between"
            >
              <h2 class="text-title-md2 font-bold text-black dark:text-white">
                Tooltips
              </h2>

              <nav>
                <ol class="flex items-center gap-2">
                  <li>
                    <a class="font-medium" href="index.blade.php">Dashboard /</a>
                  </li>
                  <li class="font-medium text-primary">Tooltips</li>
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
                    Tooltips Style 1
                  </h3>
                </div>

                <div class="p-4 sm:p-5 xl:p-7.5">
                  <div class="-mx-4 flex flex-wrap justify-center">
                    <div class="w-full px-4 sm:w-1/2 xl:w-1/4">
                      <div class="mb-14">
                        <div class="group relative inline-block">
                          <button
                            class="inline-flex rounded-md bg-primary px-4.5 py-2 font-medium text-white"
                          >
                            Tooltip on top
                          </button>
                          <div
                            class="absolute bottom-full left-1/2 z-20 mb-3 -translate-x-1/2 whitespace-nowrap rounded bg-black px-4.5 py-1.5 text-sm font-medium text-white opacity-0 group-hover:opacity-100"
                          >
                            <span
                              class="absolute bottom-[-3px] left-1/2 -z-10 h-2 w-2 -translate-x-1/2 rotate-45 rounded-sm bg-black"
                            ></span>
                            Tooltip Text
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="w-full px-4 sm:w-1/2 xl:w-1/4">
                      <div class="mb-14">
                        <div class="group relative inline-block">
                          <button
                            class="inline-flex rounded-md bg-primary px-4.5 py-2 font-medium text-white"
                          >
                            Tooltip on right
                          </button>
                          <div
                            class="absolute left-full top-1/2 z-20 ml-3 -translate-y-1/2 whitespace-nowrap rounded bg-black px-4.5 py-1.5 text-sm font-medium text-white opacity-0 group-hover:opacity-100"
                          >
                            <span
                              class="absolute left-[-3px] top-1/2 -z-10 h-2 w-2 -translate-y-1/2 rotate-45 rounded-sm bg-black"
                            ></span>
                            Tooltip Text
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="w-full px-4 sm:w-1/2 xl:w-1/4">
                      <div class="mb-14">
                        <div class="group relative inline-block">
                          <button
                            class="inline-flex rounded-md bg-primary px-4.5 py-2 font-medium text-white"
                          >
                            Tooltip on bottom
                          </button>
                          <div
                            class="absolute left-1/2 top-full z-20 mt-3 -translate-x-1/2 whitespace-nowrap rounded bg-black px-4.5 py-1.5 text-sm font-medium text-white opacity-0 group-hover:opacity-100"
                          >
                            <span
                              class="absolute left-1/2 top-[-3px] -z-10 h-2 w-2 -translate-x-1/2 rotate-45 rounded-sm bg-black"
                            ></span>
                            Tooltip Text
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="w-full px-4 sm:w-1/2 xl:w-1/4">
                      <div class="mb-14 text-right sm:text-left">
                        <div class="group relative inline-block">
                          <button
                            class="inline-flex rounded-md bg-primary px-4.5 py-2 font-medium text-white"
                          >
                            Tooltip on left
                          </button>
                          <div
                            class="absolute right-full top-1/2 z-20 mr-3 -translate-y-1/2 whitespace-nowrap rounded bg-black px-4.5 py-1.5 text-sm font-medium text-white opacity-0 group-hover:opacity-100"
                          >
                            <span
                              class="absolute right-[-3px] top-1/2 -z-10 h-2 w-2 -translate-y-1/2 rotate-45 rounded-sm bg-black"
                            ></span>
                            Tooltip Text
                          </div>
                        </div>
                      </div>
                    </div>
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
                    Tooltips Style 2
                  </h3>
                </div>

                <div class="p-4 sm:p-5 xl:p-7.5">
                  <div class="-mx-4 flex flex-wrap justify-center">
                    <div class="w-full px-4 sm:w-1/2 xl:w-1/4">
                      <div class="mb-14">
                        <div class="group relative inline-block">
                          <button
                            class="inline-flex rounded-md bg-primary px-4.5 py-2 font-medium text-white"
                          >
                            Tooltip on top
                          </button>
                          <div
                            class="absolute bottom-full left-1/2 z-20 mb-3 -translate-x-1/2 whitespace-nowrap rounded-md bg-white px-4.5 py-1.5 text-sm font-medium opacity-0 drop-shadow-4 group-hover:opacity-100 dark:bg-meta-4"
                          >
                            <span
                              class="absolute -bottom-1 left-1/2 -z-10 h-2 w-2 -translate-x-1/2 rotate-45 rounded-l-sm bg-white dark:bg-meta-4"
                            ></span>
                            Tooltip Text
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="w-full px-4 sm:w-1/2 xl:w-1/4">
                      <div class="mb-14">
                        <div class="group relative inline-block">
                          <button
                            class="inline-flex rounded-md bg-primary px-4.5 py-2 font-medium text-white"
                          >
                            Tooltip on right
                          </button>
                          <div
                            class="absolute left-full top-1/2 z-20 ml-3 -translate-y-1/2 whitespace-nowrap rounded-md bg-white px-4.5 py-1.5 text-sm font-medium opacity-0 drop-shadow-4 group-hover:opacity-100 dark:bg-meta-4"
                          >
                            <span
                              class="absolute -left-1 top-1/2 -z-10 h-2 w-2 -translate-y-1/2 rotate-45 rounded-r-sm bg-white dark:bg-meta-4"
                            ></span>
                            Tooltip Text
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="w-full px-4 sm:w-1/2 xl:w-1/4">
                      <div class="mb-14">
                        <div class="group relative inline-block">
                          <button
                            class="inline-flex rounded-md bg-primary px-4.5 py-2 font-medium text-white"
                          >
                            Tooltip on bottom
                          </button>
                          <div
                            class="absolute left-1/2 top-full z-20 mt-3 -translate-x-1/2 whitespace-nowrap rounded-md bg-white px-4.5 py-1.5 text-sm font-medium opacity-0 drop-shadow-4 group-hover:opacity-100 dark:bg-meta-4"
                          >
                            <span
                              class="border-light absolute -top-1 left-1/2 -z-10 h-2 w-2 -translate-x-1/2 rotate-45 rounded-sm bg-white dark:bg-meta-4"
                            ></span>
                            Tooltip Text
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="w-full px-4 sm:w-1/2 xl:w-1/4">
                      <div class="mb-14 text-right sm:text-left">
                        <div class="group relative inline-block">
                          <button
                            class="inline-flex rounded-md bg-primary px-4.5 py-2 font-medium text-white"
                          >
                            Tooltip on left
                          </button>
                          <div
                            class="absolute right-full top-1/2 z-20 mr-3 -translate-y-1/2 whitespace-nowrap rounded-md bg-white px-4.5 py-1.5 text-sm font-medium opacity-0 drop-shadow-4 group-hover:opacity-100 dark:bg-meta-4"
                          >
                            <span
                              class="absolute -right-1 top-1/2 -z-10 h-2 w-2 -translate-y-1/2 rotate-45 rounded-sm bg-white dark:bg-meta-4"
                            ></span>
                            Tooltip Text
                          </div>
                        </div>
                      </div>
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
