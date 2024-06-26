<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Progress | TailAdmin - Tailwind CSS Admin Dashboard Template</title>
  </head>

  <body
    x-data="{ page: 'progress', 'loaded': true, 'darkMode': true, 'stickyMenu': false, 'sidebarToggle': false, 'scrollTop': false }"
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
                Progress
              </h2>

              <nav>
                <ol class="flex items-center gap-2">
                  <li>
                    <a class="font-medium" href="index.blade.php">Dashboard /</a>
                  </li>
                  <li class="font-medium text-primary">Progress</li>
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
                    Progress Style 1
                  </h3>
                </div>

                <div class="p-4 sm:p-6 xl:p-10">
                  <div class="flex max-w-[470px] flex-col gap-7">
                    <div
                      class="relative h-2.5 w-full rounded-full bg-stroke dark:bg-strokedark"
                    >
                      <div
                        class="absolute left-0 h-full w-10/12 rounded-full bg-primary"
                      ></div>
                    </div>

                    <div
                      class="relative h-2.5 w-full rounded-full bg-stroke dark:bg-strokedark"
                    >
                      <div
                        class="absolute left-0 h-full w-8/12 rounded-full bg-primary"
                      ></div>
                    </div>

                    <div
                      class="relative h-2.5 w-full rounded-full bg-stroke dark:bg-strokedark"
                    >
                      <div
                        class="absolute left-0 h-full w-11/12 rounded-full bg-primary"
                      ></div>
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
                    Progress Style 2
                  </h3>
                </div>

                <div class="p-4 sm:p-6 xl:p-10">
                  <div class="flex max-w-[470px] flex-col gap-10 pt-5 xl:pt-4">
                    <div
                      class="relative h-2.5 w-full rounded-full bg-stroke dark:bg-strokedark"
                    >
                      <div
                        class="absolute left-0 h-full w-9/12 rounded-full bg-primary"
                      >
                        <span
                          class="absolute -right-4 bottom-full z-1 mb-2 inline-block rounded-sm bg-primary px-2 py-1 text-xs font-bold text-white"
                        >
                          <span
                            class="absolute -bottom-1 left-1/2 -z-1 h-2 w-2 -translate-x-1/2 rotate-45 bg-primary"
                          ></span>
                          75%
                        </span>
                      </div>
                    </div>

                    <div
                      class="relative h-2.5 w-full rounded-full bg-stroke dark:bg-strokedark"
                    >
                      <div
                        class="absolute left-0 h-full w-1/2 rounded-full bg-primary"
                      >
                        <span
                          class="absolute -right-4 bottom-full z-1 mb-2 inline-block rounded-sm bg-primary px-2 py-1 text-xs font-bold text-white"
                        >
                          <span
                            class="absolute -bottom-1 left-1/2 -z-1 h-2 w-2 -translate-x-1/2 rotate-45 bg-primary"
                          ></span>
                          50%
                        </span>
                      </div>
                    </div>

                    <div
                      class="relative h-2.5 w-full rounded-full bg-stroke dark:bg-strokedark"
                    >
                      <div
                        class="absolute left-0 h-full w-4/5 rounded-full bg-primary"
                      >
                        <span
                          class="absolute -right-4 bottom-full z-1 mb-2 inline-block rounded-sm bg-primary px-2 py-1 text-xs font-bold text-white"
                        >
                          <span
                            class="absolute -bottom-1 left-1/2 -z-1 h-2 w-2 -translate-x-1/2 rotate-45 bg-primary"
                          ></span>
                          80%
                        </span>
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
                    Progress Style 3
                  </h3>
                </div>

                <div class="p-4 sm:p-6 xl:p-10">
                  <div class="flex max-w-[470px] flex-col gap-7">
                    <div
                      class="relative h-4 w-full rounded-full bg-stroke dark:bg-strokedark"
                    >
                      <div
                        class="absolute left-0 flex h-full w-1/2 items-center justify-center rounded-full bg-primary"
                      >
                        <p
                          class="my-auto text-center text-[10px] font-bold leading-none text-white"
                        >
                          50%
                        </p>
                      </div>
                    </div>

                    <div
                      class="relative h-4 w-full rounded-full bg-stroke dark:bg-strokedark"
                    >
                      <div
                        class="absolute left-0 flex h-full w-4/5 items-center justify-center rounded-full bg-primary"
                      >
                        <p
                          class="my-auto text-center text-[10px] font-bold leading-none text-white"
                        >
                          80%
                        </p>
                      </div>
                    </div>

                    <div
                      class="relative h-4 w-full rounded-full bg-stroke dark:bg-strokedark"
                    >
                      <div
                        class="absolute left-0 flex h-full w-3/4 items-center justify-center rounded-full bg-primary"
                      >
                        <p
                          class="my-auto text-center text-[10px] font-bold leading-none text-white"
                        >
                          75%
                        </p>
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
                    Progress Style 4
                  </h3>
                </div>

                <div class="p-4 sm:p-6 xl:p-10">
                  <div class="flex max-w-[470px] flex-col gap-7">
                    <div
                      class="relative h-2.5 w-full rounded-full bg-stroke dark:bg-strokedark"
                    >
                      <div
                        class="absolute left-0 h-full w-10/12 rounded-full bg-primary"
                      ></div>
                    </div>

                    <div
                      class="relative h-2.5 w-full rounded-full bg-stroke dark:bg-strokedark"
                    >
                      <div
                        class="absolute left-0 h-full w-8/12 rounded-full bg-[#3CA745]"
                      ></div>
                    </div>

                    <div
                      class="relative h-2.5 w-full rounded-full bg-stroke dark:bg-strokedark"
                    >
                      <div
                        class="absolute left-0 h-full w-11/12 rounded-full bg-[#F9C107]"
                      ></div>
                    </div>

                    <div
                      class="relative h-2.5 w-full rounded-full bg-stroke dark:bg-strokedark"
                    >
                      <div
                        class="absolute left-0 h-full w-4/12 rounded-full bg-[#DC3545]"
                      ></div>
                    </div>

                    <div
                      class="relative h-2.5 w-full rounded-full bg-stroke dark:bg-strokedark"
                    >
                      <div
                        class="absolute left-0 h-full w-3/12 rounded-full bg-[#3BA2B8]"
                      ></div>
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
