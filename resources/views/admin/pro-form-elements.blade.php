<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
      Pro Form Elements | TailAdmin - Tailwind CSS Admin Dashboard Template
    </title>
  </head>

  <body
    x-data="{ page: 'proFormElements', 'loaded': true, 'darkMode': true, 'stickyMenu': false, 'sidebarToggle': false, 'scrollTop': false }"
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
                Pro Form Elements
              </h2>

              <nav>
                <ol class="flex items-center gap-2">
                  <li>
                    <a class="font-medium" href="index.blade.php">Dashboard /</a>
                  </li>
                  <li class="font-medium text-primary">Pro Form Elements</li>
                </ol>
              </nav>
            </div>
            <!-- Breadcrumb End -->

            <!-- ====== Form Elements Section Start -->
            <div class="grid grid-cols-1 gap-9 sm:grid-cols-2">
              <div class="flex flex-col gap-9">
                <!-- Range Slider -->
                <div
                  class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark"
                >
                  <div
                    class="border-b border-stroke px-6.5 py-4 dark:border-strokedark"
                  >
                    <h3 class="font-medium text-black dark:text-white">
                      Range Slider
                    </h3>
                  </div>
                  <div class="flex flex-col gap-5.5 p-7.5">
                    <div class="rangeSliderCommon rangeSliderOne">
                      <div id="rangeSliderOne"></div>
                    </div>

                    <div class="rangeSliderCommon rangeSliderTwo">
                      <div id="rangeSliderTwo"></div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="flex flex-col gap-9">
                <!-- File Drop Zone -->
                <div
                  class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark"
                >
                  <div
                    class="border-b border-stroke px-6.5 py-4 dark:border-strokedark"
                  >
                    <h3 class="font-medium text-black dark:text-white">
                      File Drop Zone
                    </h3>
                  </div>
                  <div class="p-6.5">
                    <form
                      class="dropzone rounded-md border-dashed border-bodydark1 bg-gray hover:border-primary dark:border-strokedark dark:bg-graydark dark:hover:border-primary"
                      id="demo-upload"
                      action="/upload"
                    >
                      <div class="dz-message">
                        <div class="mb-2.5 flex justify-center">
                          <div
                            class="flex h-15 w-15 items-center justify-center rounded-full bg-white text-black shadow-10 dark:bg-black dark:text-white"
                          >
                            <svg
                              class="fill-current"
                              width="20"
                              height="20"
                              viewBox="0 0 20 20"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <g clip-path="url(#clip0_1867_11682)">
                                <path
                                  d="M18.75 13.75C18.375 13.75 18.0313 14.0625 18.0313 14.4687V17.25C18.0313 17.5312 17.8125 17.75 17.5312 17.75H2.46875C2.1875 17.75 1.96875 17.5312 1.96875 17.25V14.4687C1.96875 14.0625 1.625 13.75 1.25 13.75C0.875 13.75 0.53125 14.0625 0.53125 14.4687V17.25C0.53125 18.3125 1.375 19.1562 2.4375 19.1562H17.5312C18.5938 19.1562 19.4375 18.3125 19.4375 17.25V14.4687C19.4688 14.0625 19.125 13.75 18.75 13.75Z"
                                  fill=""
                                />
                                <path
                                  d="M5.96875 6.46875L9.3125 3.21875V14.0313C9.3125 14.4063 9.625 14.75 10.0312 14.75C10.4062 14.75 10.75 14.4375 10.75 14.0313V3.21875L14.0937 6.46875C14.2187 6.59375 14.4062 6.65625 14.5938 6.65625C14.7812 6.65625 14.9688 6.59375 15.0938 6.4375C15.375 6.15625 15.3438 5.71875 15.0938 5.4375L10.5 1.0625C10.2187 0.8125 9.78125 0.8125 9.53125 1.0625L4.96875 5.46875C4.6875 5.75 4.6875 6.1875 4.96875 6.46875C5.25 6.71875 5.6875 6.75 5.96875 6.46875Z"
                                  fill=""
                                />
                              </g>
                              <defs>
                                <clipPath id="clip0_1867_11682">
                                  <rect width="20" height="20" fill="white" />
                                </clipPath>
                              </defs>
                            </svg>
                          </div>
                        </div>
                        <span class="font-medium text-black dark:text-white">
                          Drop files here to upload
                        </span>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <!-- ====== Form Elements Section End -->
          </div>
        </main>
        <!-- ===== Main Content End ===== -->
      </div>
      <!-- ===== Content Area End ===== -->
    </div>
    <!-- ===== Page Wrapper End ===== -->
  </body>
</html>
