<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>List | TailAdmin - Tailwind CSS Admin Dashboard Template</title>
  </head>

  <body
    x-data="{ page: 'uiList', 'loaded': true, 'darkMode': true, 'stickyMenu': false, 'sidebarToggle': false, 'scrollTop': false }"
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
                List
              </h2>

              <nav>
                <ol class="flex items-center gap-2">
                  <li>
                    <a class="font-medium" href="index.blade.php">Dashboard /</a>
                  </li>
                  <li class="font-medium text-primary">List</li>
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

                <div class="p-4 sm:p-6 xl:p-9">
                  <div
                    class="min-w-[370px] max-w-max rounded-md border border-stroke py-1 dark:border-strokedark"
                  >
                    <ul class="flex flex-col">
                      <li
                        class="flex items-center gap-2.5 border-b border-stroke px-5 py-3 last:border-b-0 dark:border-strokedark"
                      >
                        <span
                          class="flex h-6.5 w-full max-w-6.5 items-center justify-center rounded-full bg-primary text-white"
                        >
                          1
                        </span>
                        <span> Lorem ipsum dolor sit amet </span>
                      </li>

                      <li
                        class="flex items-center gap-2.5 border-b border-stroke px-5 py-3 last:border-b-0 dark:border-strokedark"
                      >
                        <span
                          class="flex h-6.5 w-full max-w-6.5 items-center justify-center rounded-full bg-primary text-white"
                        >
                          2
                        </span>
                        <span> It is a long established fact reader </span>
                      </li>

                      <li
                        class="flex items-center gap-2.5 border-b border-stroke px-5 py-3 last:border-b-0 dark:border-strokedark"
                      >
                        <span
                          class="flex h-6.5 w-full max-w-6.5 items-center justify-center rounded-full bg-primary text-white"
                        >
                          3
                        </span>
                        <span> The point of using Lorem Ipsum </span>
                      </li>

                      <li
                        class="flex items-center gap-2.5 border-b border-stroke px-5 py-3 last:border-b-0 dark:border-strokedark"
                      >
                        <span
                          class="flex h-6.5 w-full max-w-6.5 items-center justify-center rounded-full bg-primary text-white"
                        >
                          4
                        </span>
                        <span> There are many variations of passages </span>
                      </li>

                      <li
                        class="flex items-center gap-2.5 border-b border-stroke px-5 py-3 last:border-b-0 dark:border-strokedark"
                      >
                        <span
                          class="flex h-6.5 w-full max-w-6.5 items-center justify-center rounded-full bg-primary text-white"
                        >
                          5
                        </span>
                        <span> If you are going to use a of Lorem </span>
                      </li>
                    </ul>
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
                  <div
                    class="min-w-[370px] max-w-max rounded-md border border-stroke py-1 dark:border-strokedark"
                  >
                    <ul class="flex flex-col">
                      <li
                        class="flex items-center gap-2.5 border-b border-stroke px-5 py-3 last:border-b-0 dark:border-strokedark"
                      >
                        <span class="text-primary">
                          <svg
                            class="fill-current"
                            width="21"
                            height="21"
                            viewBox="0 0 21 21"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <g clip-path="url(#clip0_1890_16515)">
                              <path
                                d="M10.8672 0.949463C5.64844 0.949463 1.42969 5.16821 1.42969 10.387C1.42969 15.6057 5.64844 19.8557 10.8672 19.8557C16.0859 19.8557 20.3359 15.6057 20.3359 10.387C20.3359 5.16821 16.0859 0.949463 10.8672 0.949463ZM10.8672 18.4495C6.42969 18.4495 2.83594 14.8245 2.83594 10.387C2.83594 5.94946 6.42969 2.35571 10.8672 2.35571C15.3047 2.35571 18.9297 5.98071 18.9297 10.4182C18.9297 14.8245 15.3047 18.4495 10.8672 18.4495Z"
                                fill=""
                              />
                              <path
                                d="M13.5549 7.48076L9.83611 11.1058L8.14861 9.44951C7.86736 9.16826 7.42986 9.19951 7.14861 9.44951C6.86736 9.73076 6.89861 10.1683 7.14861 10.4495L9.14861 12.387C9.33611 12.5745 9.58611 12.6683 9.83611 12.6683C10.0861 12.6683 10.3361 12.5745 10.5236 12.387L14.5549 8.51201C14.8361 8.23076 14.8361 7.79326 14.5549 7.51201C14.2736 7.23076 13.8361 7.23076 13.5549 7.48076Z"
                                fill=""
                              />
                            </g>
                            <defs>
                              <clipPath id="clip0_1890_16515">
                                <rect
                                  width="20"
                                  height="20"
                                  fill="white"
                                  transform="translate(0.867188 0.386963)"
                                />
                              </clipPath>
                            </defs>
                          </svg>
                        </span>
                        <span> Lorem ipsum dolor sit amet </span>
                      </li>

                      <li
                        class="flex items-center gap-2.5 border-b border-stroke px-5 py-3 last:border-b-0 dark:border-strokedark"
                      >
                        <span class="text-primary">
                          <svg
                            class="fill-current"
                            width="21"
                            height="21"
                            viewBox="0 0 21 21"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <g clip-path="url(#clip0_1890_16515)">
                              <path
                                d="M10.8672 0.949463C5.64844 0.949463 1.42969 5.16821 1.42969 10.387C1.42969 15.6057 5.64844 19.8557 10.8672 19.8557C16.0859 19.8557 20.3359 15.6057 20.3359 10.387C20.3359 5.16821 16.0859 0.949463 10.8672 0.949463ZM10.8672 18.4495C6.42969 18.4495 2.83594 14.8245 2.83594 10.387C2.83594 5.94946 6.42969 2.35571 10.8672 2.35571C15.3047 2.35571 18.9297 5.98071 18.9297 10.4182C18.9297 14.8245 15.3047 18.4495 10.8672 18.4495Z"
                                fill=""
                              />
                              <path
                                d="M13.5549 7.48076L9.83611 11.1058L8.14861 9.44951C7.86736 9.16826 7.42986 9.19951 7.14861 9.44951C6.86736 9.73076 6.89861 10.1683 7.14861 10.4495L9.14861 12.387C9.33611 12.5745 9.58611 12.6683 9.83611 12.6683C10.0861 12.6683 10.3361 12.5745 10.5236 12.387L14.5549 8.51201C14.8361 8.23076 14.8361 7.79326 14.5549 7.51201C14.2736 7.23076 13.8361 7.23076 13.5549 7.48076Z"
                                fill=""
                              />
                            </g>
                            <defs>
                              <clipPath id="clip0_1890_16515">
                                <rect
                                  width="20"
                                  height="20"
                                  fill="white"
                                  transform="translate(0.867188 0.386963)"
                                />
                              </clipPath>
                            </defs>
                          </svg>
                        </span>
                        <span> It is a long established fact reader </span>
                      </li>

                      <li
                        class="flex items-center gap-2.5 border-b border-stroke px-5 py-3 last:border-b-0 dark:border-strokedark"
                      >
                        <span class="text-primary">
                          <svg
                            class="fill-current"
                            width="21"
                            height="21"
                            viewBox="0 0 21 21"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <g clip-path="url(#clip0_1890_16515)">
                              <path
                                d="M10.8672 0.949463C5.64844 0.949463 1.42969 5.16821 1.42969 10.387C1.42969 15.6057 5.64844 19.8557 10.8672 19.8557C16.0859 19.8557 20.3359 15.6057 20.3359 10.387C20.3359 5.16821 16.0859 0.949463 10.8672 0.949463ZM10.8672 18.4495C6.42969 18.4495 2.83594 14.8245 2.83594 10.387C2.83594 5.94946 6.42969 2.35571 10.8672 2.35571C15.3047 2.35571 18.9297 5.98071 18.9297 10.4182C18.9297 14.8245 15.3047 18.4495 10.8672 18.4495Z"
                                fill=""
                              />
                              <path
                                d="M13.5549 7.48076L9.83611 11.1058L8.14861 9.44951C7.86736 9.16826 7.42986 9.19951 7.14861 9.44951C6.86736 9.73076 6.89861 10.1683 7.14861 10.4495L9.14861 12.387C9.33611 12.5745 9.58611 12.6683 9.83611 12.6683C10.0861 12.6683 10.3361 12.5745 10.5236 12.387L14.5549 8.51201C14.8361 8.23076 14.8361 7.79326 14.5549 7.51201C14.2736 7.23076 13.8361 7.23076 13.5549 7.48076Z"
                                fill=""
                              />
                            </g>
                            <defs>
                              <clipPath id="clip0_1890_16515">
                                <rect
                                  width="20"
                                  height="20"
                                  fill="white"
                                  transform="translate(0.867188 0.386963)"
                                />
                              </clipPath>
                            </defs>
                          </svg>
                        </span>
                        <span> The point of using Lorem Ipsum </span>
                      </li>

                      <li
                        class="flex items-center gap-2.5 border-b border-stroke px-5 py-3 last:border-b-0 dark:border-strokedark"
                      >
                        <span class="text-primary">
                          <svg
                            class="fill-current"
                            width="21"
                            height="21"
                            viewBox="0 0 21 21"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <g clip-path="url(#clip0_1890_16515)">
                              <path
                                d="M10.8672 0.949463C5.64844 0.949463 1.42969 5.16821 1.42969 10.387C1.42969 15.6057 5.64844 19.8557 10.8672 19.8557C16.0859 19.8557 20.3359 15.6057 20.3359 10.387C20.3359 5.16821 16.0859 0.949463 10.8672 0.949463ZM10.8672 18.4495C6.42969 18.4495 2.83594 14.8245 2.83594 10.387C2.83594 5.94946 6.42969 2.35571 10.8672 2.35571C15.3047 2.35571 18.9297 5.98071 18.9297 10.4182C18.9297 14.8245 15.3047 18.4495 10.8672 18.4495Z"
                                fill=""
                              />
                              <path
                                d="M13.5549 7.48076L9.83611 11.1058L8.14861 9.44951C7.86736 9.16826 7.42986 9.19951 7.14861 9.44951C6.86736 9.73076 6.89861 10.1683 7.14861 10.4495L9.14861 12.387C9.33611 12.5745 9.58611 12.6683 9.83611 12.6683C10.0861 12.6683 10.3361 12.5745 10.5236 12.387L14.5549 8.51201C14.8361 8.23076 14.8361 7.79326 14.5549 7.51201C14.2736 7.23076 13.8361 7.23076 13.5549 7.48076Z"
                                fill=""
                              />
                            </g>
                            <defs>
                              <clipPath id="clip0_1890_16515">
                                <rect
                                  width="20"
                                  height="20"
                                  fill="white"
                                  transform="translate(0.867188 0.386963)"
                                />
                              </clipPath>
                            </defs>
                          </svg>
                        </span>
                        <span> There are many variations of passages </span>
                      </li>

                      <li
                        class="flex items-center gap-2.5 border-b border-stroke px-5 py-3 last:border-b-0 dark:border-strokedark"
                      >
                        <span class="text-primary">
                          <svg
                            class="fill-current"
                            width="21"
                            height="21"
                            viewBox="0 0 21 21"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <g clip-path="url(#clip0_1890_16515)">
                              <path
                                d="M10.8672 0.949463C5.64844 0.949463 1.42969 5.16821 1.42969 10.387C1.42969 15.6057 5.64844 19.8557 10.8672 19.8557C16.0859 19.8557 20.3359 15.6057 20.3359 10.387C20.3359 5.16821 16.0859 0.949463 10.8672 0.949463ZM10.8672 18.4495C6.42969 18.4495 2.83594 14.8245 2.83594 10.387C2.83594 5.94946 6.42969 2.35571 10.8672 2.35571C15.3047 2.35571 18.9297 5.98071 18.9297 10.4182C18.9297 14.8245 15.3047 18.4495 10.8672 18.4495Z"
                                fill=""
                              />
                              <path
                                d="M13.5549 7.48076L9.83611 11.1058L8.14861 9.44951C7.86736 9.16826 7.42986 9.19951 7.14861 9.44951C6.86736 9.73076 6.89861 10.1683 7.14861 10.4495L9.14861 12.387C9.33611 12.5745 9.58611 12.6683 9.83611 12.6683C10.0861 12.6683 10.3361 12.5745 10.5236 12.387L14.5549 8.51201C14.8361 8.23076 14.8361 7.79326 14.5549 7.51201C14.2736 7.23076 13.8361 7.23076 13.5549 7.48076Z"
                                fill=""
                              />
                            </g>
                            <defs>
                              <clipPath id="clip0_1890_16515">
                                <rect
                                  width="20"
                                  height="20"
                                  fill="white"
                                  transform="translate(0.867188 0.386963)"
                                />
                              </clipPath>
                            </defs>
                          </svg>
                        </span>
                        <span> If you are going to use a of Lorem </span>
                      </li>
                    </ul>
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
                    Style 3
                  </h3>
                </div>

                <div class="p-4 sm:p-6 xl:p-9">
                  <div
                    class="w-full max-w-[360px] rounded-md border border-stroke py-2.5 dark:border-strokedark"
                  >
                    <div class="flex flex-col">
                      <div
                        class="flex items-center justify-between p-4.5 hover:bg-[#F9FAFB] dark:hover:bg-meta-4"
                      >
                        <div class="flex items-center">
                          <div
                            class="mr-4 h-[50px] w-full max-w-[50px] overflow-hidden rounded-full"
                          >
                            <img
                              src="./images/user/user-01.png"
                              alt="user"
                              class="rounded-full object-cover object-center"
                            />
                          </div>
                          <div>
                            <h4
                              class="text-base font-medium text-black dark:text-white"
                            >
                              Devid Wilium
                            </h4>
                            <p class="text-sm">Digital marketer</p>
                          </div>
                        </div>
                        <div>
                          <div x-data="{openDropDown: false}" class="relative">
                            <button @click="openDropDown = !openDropDown">
                              <svg
                                class="fill-current"
                                width="21"
                                height="21"
                                viewBox="0 0 21 21"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                              >
                                <path
                                  d="M12.5326 16.0338C12.5326 15.1133 11.7864 14.3671 10.8659 14.3671C9.94541 14.3671 9.19922 15.1133 9.19922 16.0338C9.19922 16.9542 9.94541 17.7004 10.8659 17.7004C11.7864 17.7004 12.5326 16.9542 12.5326 16.0338Z"
                                  fill=""
                                />
                                <path
                                  d="M12.5326 10.2005C12.5326 9.28005 11.7864 8.53385 10.8659 8.53385C9.94541 8.53385 9.19922 9.28005 9.19922 10.2005C9.19922 11.121 9.94541 11.8672 10.8659 11.8672C11.7864 11.8672 12.5326 11.121 12.5326 10.2005Z"
                                  fill=""
                                />
                                <path
                                  d="M12.5326 4.36702C12.5326 3.44655 11.7864 2.70036 10.8659 2.70036C9.94541 2.70036 9.19922 3.44655 9.19922 4.36703C9.19922 5.2875 9.94541 6.03369 10.8659 6.03369C11.7864 6.03369 12.5326 5.2875 12.5326 4.36702Z"
                                  fill=""
                                />
                              </svg>
                            </button>
                            <div
                              x-show="openDropDown"
                              @click.outside="openDropDown = false"
                              class="absolute right-0 top-full z-40 w-37.5 space-y-1 rounded bg-white p-2 shadow-card dark:bg-boxdark-2"
                            >
                              <button
                                class="w-full rounded px-3 py-1.5 text-left text-sm hover:bg-gray-2 dark:hover:bg-graydark"
                              >
                                Edit
                              </button>
                              <button
                                class="w-full rounded px-3 py-1.5 text-left text-sm hover:bg-gray-2 dark:hover:bg-graydark"
                              >
                                Delete
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div
                        class="flex items-center justify-between p-4.5 hover:bg-[#F9FAFB] dark:hover:bg-meta-4"
                      >
                        <div class="flex items-center">
                          <div
                            class="mr-4 h-[50px] w-full max-w-[50px] overflow-hidden rounded-full"
                          >
                            <img
                              src="./images/user/user-03.png"
                              alt="user"
                              class="rounded-full object-cover object-center"
                            />
                          </div>
                          <div>
                            <h4 class="font-medium text-black dark:text-white">
                              Deniyal Shifer
                            </h4>
                            <p class="text-sm">Graphics designer</p>
                          </div>
                        </div>
                        <div>
                          <div x-data="{openDropDown: false}" class="relative">
                            <button @click="openDropDown = !openDropDown">
                              <svg
                                class="fill-current"
                                width="21"
                                height="21"
                                viewBox="0 0 21 21"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                              >
                                <path
                                  d="M12.5326 16.0338C12.5326 15.1133 11.7864 14.3671 10.8659 14.3671C9.94541 14.3671 9.19922 15.1133 9.19922 16.0338C9.19922 16.9542 9.94541 17.7004 10.8659 17.7004C11.7864 17.7004 12.5326 16.9542 12.5326 16.0338Z"
                                  fill=""
                                />
                                <path
                                  d="M12.5326 10.2005C12.5326 9.28005 11.7864 8.53385 10.8659 8.53385C9.94541 8.53385 9.19922 9.28005 9.19922 10.2005C9.19922 11.121 9.94541 11.8672 10.8659 11.8672C11.7864 11.8672 12.5326 11.121 12.5326 10.2005Z"
                                  fill=""
                                />
                                <path
                                  d="M12.5326 4.36702C12.5326 3.44655 11.7864 2.70036 10.8659 2.70036C9.94541 2.70036 9.19922 3.44655 9.19922 4.36703C9.19922 5.2875 9.94541 6.03369 10.8659 6.03369C11.7864 6.03369 12.5326 5.2875 12.5326 4.36702Z"
                                  fill=""
                                />
                              </svg>
                            </button>
                            <div
                              x-show="openDropDown"
                              @click.outside="openDropDown = false"
                              class="absolute right-0 top-full z-40 w-37.5 space-y-1 rounded bg-white p-2 shadow-card dark:bg-boxdark-2"
                            >
                              <button
                                class="w-full rounded px-3 py-1.5 text-left text-sm hover:bg-gray-2 dark:hover:bg-graydark"
                              >
                                Edit
                              </button>
                              <button
                                class="w-full rounded px-3 py-1.5 text-left text-sm hover:bg-gray-2 dark:hover:bg-graydark"
                              >
                                Delete
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div
                        class="flex items-center justify-between p-4.5 hover:bg-[#F9FAFB] dark:hover:bg-meta-4"
                      >
                        <div class="flex items-center">
                          <div
                            class="mr-4 h-[50px] w-full max-w-[50px] overflow-hidden rounded-full"
                          >
                            <img
                              src="./images/user/user-02.png"
                              alt="user"
                              class="rounded-full object-cover object-center"
                            />
                          </div>
                          <div>
                            <h4 class="font-medium text-black dark:text-white">
                              Philifs Geno
                            </h4>
                            <p class="text-sm">Content creator</p>
                          </div>
                        </div>
                        <div>
                          <div x-data="{openDropDown: false}" class="relative">
                            <button @click="openDropDown = !openDropDown">
                              <svg
                                class="fill-current"
                                width="21"
                                height="21"
                                viewBox="0 0 21 21"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                              >
                                <path
                                  d="M12.5326 16.0338C12.5326 15.1133 11.7864 14.3671 10.8659 14.3671C9.94541 14.3671 9.19922 15.1133 9.19922 16.0338C9.19922 16.9542 9.94541 17.7004 10.8659 17.7004C11.7864 17.7004 12.5326 16.9542 12.5326 16.0338Z"
                                  fill=""
                                />
                                <path
                                  d="M12.5326 10.2005C12.5326 9.28005 11.7864 8.53385 10.8659 8.53385C9.94541 8.53385 9.19922 9.28005 9.19922 10.2005C9.19922 11.121 9.94541 11.8672 10.8659 11.8672C11.7864 11.8672 12.5326 11.121 12.5326 10.2005Z"
                                  fill=""
                                />
                                <path
                                  d="M12.5326 4.36702C12.5326 3.44655 11.7864 2.70036 10.8659 2.70036C9.94541 2.70036 9.19922 3.44655 9.19922 4.36703C9.19922 5.2875 9.94541 6.03369 10.8659 6.03369C11.7864 6.03369 12.5326 5.2875 12.5326 4.36702Z"
                                  fill=""
                                />
                              </svg>
                            </button>
                            <div
                              x-show="openDropDown"
                              @click.outside="openDropDown = false"
                              class="absolute right-0 top-full z-40 w-37.5 space-y-1 rounded bg-white p-2 shadow-card dark:bg-boxdark-2"
                            >
                              <button
                                class="w-full rounded px-3 py-1.5 text-left text-sm hover:bg-gray-2 dark:hover:bg-graydark"
                              >
                                Edit
                              </button>
                              <button
                                class="w-full rounded px-3 py-1.5 text-left text-sm hover:bg-gray-2 dark:hover:bg-graydark"
                              >
                                Delete
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div
                        class="flex items-center justify-between p-4.5 hover:bg-[#F9FAFB] dark:hover:bg-meta-4"
                      >
                        <div class="flex items-center">
                          <div
                            class="mr-4 h-[50px] w-full max-w-[50px] overflow-hidden rounded-full"
                          >
                            <img
                              src="./images/user/user-05.png"
                              alt="user"
                              class="rounded-full object-cover object-center"
                            />
                          </div>
                          <div>
                            <h4 class="font-medium text-black dark:text-white">
                              Marko Diyan
                            </h4>
                            <p class="text-sm">Web developer</p>
                          </div>
                        </div>
                        <div>
                          <div x-data="{openDropDown: false}" class="relative">
                            <button @click="openDropDown = !openDropDown">
                              <svg
                                class="fill-current"
                                width="21"
                                height="21"
                                viewBox="0 0 21 21"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                              >
                                <path
                                  d="M12.5326 16.0338C12.5326 15.1133 11.7864 14.3671 10.8659 14.3671C9.94541 14.3671 9.19922 15.1133 9.19922 16.0338C9.19922 16.9542 9.94541 17.7004 10.8659 17.7004C11.7864 17.7004 12.5326 16.9542 12.5326 16.0338Z"
                                  fill=""
                                />
                                <path
                                  d="M12.5326 10.2005C12.5326 9.28005 11.7864 8.53385 10.8659 8.53385C9.94541 8.53385 9.19922 9.28005 9.19922 10.2005C9.19922 11.121 9.94541 11.8672 10.8659 11.8672C11.7864 11.8672 12.5326 11.121 12.5326 10.2005Z"
                                  fill=""
                                />
                                <path
                                  d="M12.5326 4.36702C12.5326 3.44655 11.7864 2.70036 10.8659 2.70036C9.94541 2.70036 9.19922 3.44655 9.19922 4.36703C9.19922 5.2875 9.94541 6.03369 10.8659 6.03369C11.7864 6.03369 12.5326 5.2875 12.5326 4.36702Z"
                                  fill=""
                                />
                              </svg>
                            </button>
                            <div
                              x-show="openDropDown"
                              @click.outside="openDropDown = false"
                              class="absolute right-0 top-full z-40 w-37.5 space-y-1 rounded bg-white p-2 shadow-card dark:bg-boxdark-2"
                            >
                              <button
                                class="w-full rounded px-3 py-1.5 text-left text-sm hover:bg-gray-2 dark:hover:bg-graydark"
                              >
                                Edit
                              </button>
                              <button
                                class="w-full rounded px-3 py-1.5 text-left text-sm hover:bg-gray-2 dark:hover:bg-graydark"
                              >
                                Delete
                              </button>
                            </div>
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
