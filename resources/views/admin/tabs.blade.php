<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tabs | TailAdmin - Tailwind CSS Admin Dashboard Template</title>
  </head>

  <body
    x-data="{ page: 'tabs', 'loaded': true, 'darkMode': true, 'stickyMenu': false, 'sidebarToggle': false, 'scrollTop': false }"
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
                Tabs
              </h2>

              <nav>
                <ol class="flex items-center gap-2">
                  <li>
                    <a class="font-medium" href="index.blade.php">Dashboard /</a>
                  </li>
                  <li class="font-medium text-primary">Tabs</li>
                </ol>
              </nav>
            </div>
            <!-- Breadcrumb End -->

            <div class="flex flex-col gap-9">
              <div
                class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark"
              >
                <div
                  class="border-b border-stroke px-7.5 py-4 dark:border-strokedark"
                >
                  <h3 class="font-medium text-black dark:text-white">
                    Tab Style 1
                  </h3>
                </div>
                <div
                  x-data="
                      {
                      openTab: 1,
                      activeClasses: 'bg-primary text-white',
                      inactiveClasses: 'bg-gray dark:bg-meta-4 text-black dark:text-white',
                      }
                      "
                  class="mb-14 w-full p-7.5"
                >
                  <div
                    class="mb-7.5 flex flex-wrap gap-3 rounded-lg border border-stroke px-4 py-3 dark:border-strokedark"
                  >
                    <a
                      href="#"
                      @click.prevent="openTab = 1"
                      :class="openTab === 1 ? activeClasses : inactiveClasses"
                      class="rounded-md px-4 py-3 text-sm font-medium hover:bg-primary hover:text-white dark:hover:bg-primary md:text-base lg:px-6"
                    >
                      Home
                    </a>
                    <a
                      href="#"
                      @click.prevent="openTab = 2"
                      :class="openTab === 2 ? activeClasses : inactiveClasses"
                      class="rounded-md px-4 py-3 text-sm font-medium hover:bg-primary hover:text-white dark:hover:bg-primary md:text-base lg:px-6"
                    >
                      About Us
                    </a>
                    <a
                      href="#"
                      @click.prevent="openTab = 3"
                      :class="openTab === 3 ? activeClasses : inactiveClasses"
                      class="rounded-md px-4 py-3 text-sm font-medium hover:bg-primary hover:text-white dark:hover:bg-primary md:text-base lg:px-6"
                    >
                      Our Team
                    </a>
                    <a
                      href="#"
                      @click.prevent="openTab = 4"
                      :class="openTab === 4 ? activeClasses : inactiveClasses"
                      class="rounded-md px-4 py-3 text-sm font-medium hover:bg-primary hover:text-white dark:hover:bg-primary md:text-base lg:px-6"
                    >
                      Company Details
                    </a>
                  </div>
                  <div>
                    <div
                      x-show="openTab === 1"
                      class="font-medium leading-relaxed"
                    >
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                      Officia nisi, doloribus nulla cumque molestias corporis
                      eaque harum vero! Quas sit odit optio debitis nulla
                      quisquam, dolorum quaerat animi iusto quod.
                    </div>
                    <div
                      x-show="openTab === 2"
                      class="font-medium leading-relaxed"
                      style="display: none"
                    >
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                      Officia nisi, doloribus nulla cumque molestias corporis
                      eaque harum vero! Quas sit odit optio debitis nulla
                      quisquam, dolorum quaerat animi iusto quod. Lorem ipsum
                      dolor, sit amet consectetur adipisicing elit. Unde ex
                      dolorum voluptate cupiditate adipisci doloremque, vel quam
                      praesentium nihil veritatis.
                    </div>
                    <div
                      x-show="openTab === 3"
                      class="font-medium leading-relaxed"
                      style="display: none"
                    >
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                      Officia nisi, doloribus nulla cumque molestias corporis
                      eaque harum vero! Quas sit odit optio debitis nulla
                      quisquam, dolorum quaerat animi iusto quod. <br />
                      <br />
                      Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                      Suscipit mollitia nam eligendi reprehenderit reiciendis
                      saepe laboriosam maiores voluptas. Quo, culpa amet fugiat
                      ipsam sed quod hic, veritatis ducimus recusandae repellat
                      quasi eaque, suscipit praesentium totam?
                    </div>
                    <div
                      x-show="openTab === 4"
                      class="font-medium leading-relaxed"
                      style="display: none"
                    >
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                      Officia nisi, doloribus nulla cumque molestias corporis
                      eaque harum vero! Quas sit odit optio debitis nulla
                      quisquam, dolorum quaerat animi iusto quod.
                    </div>
                  </div>
                </div>
              </div>

              <div
                class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark"
              >
                <div
                  class="border-b border-stroke px-7.5 py-4 dark:border-strokedark"
                >
                  <h3 class="font-medium text-black dark:text-white">
                    Tab Style 2
                  </h3>
                </div>
                <div
                  x-data="
                      {
                      openTab: 1,
                      activeClasses: 'bg-primary text-white',
                      inactiveClasses: 'bg-gray dark:bg-meta-4 text-black dark:text-white',
                      }
                      "
                  class="mb-14 w-full p-7.5"
                >
                  <div
                    class="mb-7.5 flex flex-wrap gap-3 border-b border-stroke pb-5 dark:border-strokedark"
                  >
                    <a
                      href="#"
                      @click.prevent="openTab = 1"
                      :class="openTab === 1 ? activeClasses : inactiveClasses"
                      class="rounded-md px-4 py-3 text-sm font-medium hover:bg-primary hover:text-white dark:hover:bg-primary md:text-base lg:px-6"
                    >
                      Home
                    </a>
                    <a
                      href="#"
                      @click.prevent="openTab = 2"
                      :class="openTab === 2 ? activeClasses : inactiveClasses"
                      class="rounded-md px-4 py-3 text-sm font-medium hover:bg-primary hover:text-white dark:hover:bg-primary md:text-base lg:px-6"
                    >
                      About Us
                    </a>
                    <a
                      href="#"
                      @click.prevent="openTab = 3"
                      :class="openTab === 3 ? activeClasses : inactiveClasses"
                      class="rounded-md px-4 py-3 text-sm font-medium hover:bg-primary hover:text-white dark:hover:bg-primary md:text-base lg:px-6"
                    >
                      Our Team
                    </a>
                    <a
                      href="#"
                      @click.prevent="openTab = 4"
                      :class="openTab === 4 ? activeClasses : inactiveClasses"
                      class="rounded-md px-4 py-3 text-sm font-medium hover:bg-primary hover:text-white dark:hover:bg-primary md:text-base lg:px-6"
                    >
                      Company Details
                    </a>
                  </div>
                  <div>
                    <div
                      x-show="openTab === 1"
                      class="font-medium leading-relaxed"
                    >
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                      Officia nisi, doloribus nulla cumque molestias corporis
                      eaque harum vero! Quas sit odit optio debitis nulla
                      quisquam, dolorum quaerat animi iusto quod.
                    </div>
                    <div
                      x-show="openTab === 2"
                      class="font-medium leading-relaxed"
                      style="display: none"
                    >
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                      Officia nisi, doloribus nulla cumque molestias corporis
                      eaque harum vero! Quas sit odit optio debitis nulla
                      quisquam, dolorum quaerat animi iusto quod. Lorem ipsum
                      dolor, sit amet consectetur adipisicing elit. Unde ex
                      dolorum voluptate cupiditate adipisci doloremque, vel quam
                      praesentium nihil veritatis.
                    </div>
                    <div
                      x-show="openTab === 3"
                      class="font-medium leading-relaxed"
                      style="display: none"
                    >
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                      Officia nisi, doloribus nulla cumque molestias corporis
                      eaque harum vero! Quas sit odit optio debitis nulla
                      quisquam, dolorum quaerat animi iusto quod. <br />
                      <br />
                      Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                      Suscipit mollitia nam eligendi reprehenderit reiciendis
                      saepe laboriosam maiores voluptas. Quo, culpa amet fugiat
                      ipsam sed quod hic, veritatis ducimus recusandae repellat
                      quasi eaque, suscipit praesentium totam?
                    </div>
                    <div
                      x-show="openTab === 4"
                      class="font-medium leading-relaxed"
                      style="display: none"
                    >
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                      Officia nisi, doloribus nulla cumque molestias corporis
                      eaque harum vero! Quas sit odit optio debitis nulla
                      quisquam, dolorum quaerat animi iusto quod.
                    </div>
                  </div>
                </div>
              </div>

              <div
                class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark"
              >
                <div
                  class="border-b border-stroke px-7.5 py-4 dark:border-strokedark"
                >
                  <h3 class="font-medium text-black dark:text-white">
                    Tab Style 3
                  </h3>
                </div>
                <div
                  x-data="
                      {
                      openTab: 1,
                      activeClasses: 'text-primary border-primary',
                      inactiveClasses: 'border-transparent',
                      }
                      "
                  class="mb-14 w-full p-7.5"
                >
                  <div
                    class="mb-6 flex flex-wrap gap-5 border-b border-stroke dark:border-strokedark sm:gap-10"
                  >
                    <a
                      href="#"
                      @click.prevent="openTab = 1"
                      :class="openTab === 1 ? activeClasses : inactiveClasses"
                      class="border-b-2 py-4 text-sm font-medium hover:text-primary md:text-base"
                    >
                      Profile
                    </a>
                    <a
                      href="#"
                      @click.prevent="openTab = 2"
                      :class="openTab === 2 ? activeClasses : inactiveClasses"
                      class="border-b-2 py-4 text-sm font-medium hover:text-primary md:text-base"
                    >
                      Password
                    </a>
                    <a
                      href="#"
                      @click.prevent="openTab = 3"
                      :class="openTab === 3 ? activeClasses : inactiveClasses"
                      class="border-b-2 py-4 text-sm font-medium hover:text-primary md:text-base"
                    >
                      Team
                    </a>
                    <a
                      href="#"
                      @click.prevent="openTab = 4"
                      :class="openTab === 4 ? activeClasses : inactiveClasses"
                      class="border-b-2 py-4 text-sm font-medium hover:text-primary md:text-base"
                    >
                      Notification
                    </a>
                  </div>
                  <div>
                    <div
                      x-show="openTab === 1"
                      class="font-medium leading-relaxed"
                    >
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                      Suspendisse luctus ligula nec dolor placerat, a consequat
                      elit volutpat. Quisque nibh lacus, posuere et turpis in,
                      pretium facilisis nisl. Proin congue sem vel sollicitudin
                      sagittis. Class aptent taciti sociosqu ad litora torquent
                      per conubia nostra, per
                    </div>
                    <div
                      x-show="openTab === 2"
                      class="font-medium leading-relaxed"
                      style="display: none"
                    >
                      Tab2 ipsum dolor sit amet, consectetur adipiscing elit.
                      Suspendisse luctus ligula nec dolor placerat, a consequat
                      elit volutpat. Quisque nibh lacus, posuere et turpis in,
                      pretium facilisis nisl. Proin congue sem vel sollicitudin
                      sagittis. Class aptent taciti sociosqu ad litora torquent
                      per conubia nostra, per
                    </div>
                    <div
                      x-show="openTab === 3"
                      class="font-medium leading-relaxed"
                      style="display: none"
                    >
                      Tab3 ipsum dolor sit amet, consectetur adipiscing elit.
                      Suspendisse luctus ligula nec dolor placerat, a consequat
                      elit volutpat. Quisque nibh lacus, posuere et turpis in,
                      pretium facilisis nisl. Proin congue sem vel sollicitudin
                      sagittis. Class aptent taciti sociosqu ad litora torquent
                      per conubia nostra, per
                    </div>
                    <div
                      x-show="openTab === 4"
                      class="font-medium leading-relaxed"
                      style="display: none"
                    >
                      Tab4 Lorem ipsum dolor sit amet, consectetur adipisicing
                      elit. Officia nisi, doloribus nulla cumque molestias
                      corporis eaque harum vero! Quas sit odit optio debitis
                      nulla quisquam, dolorum quaerat animi iusto quod.
                    </div>
                    <div
                      x-show="openTab === 5"
                      class="font-medium leading-relaxed"
                      style="display: none"
                    >
                      Tab5 Lorem ipsum dolor sit amet, consectetur adipisicing
                      elit. Officia nisi, doloribus nulla cumque molestias
                      corporis eaque harum vero! Quas sit odit optio debitis
                      nulla quisquam, dolorum quaerat animi iusto quod.
                    </div>
                    <div
                      x-show="openTab === 6"
                      class="font-medium leading-relaxed"
                      style="display: none"
                    >
                      Tab6 Lorem ipsum dolor sit amet, consectetur adipisicing
                      elit. Officia nisi, doloribus nulla cumque molestias
                      corporis eaque harum vero! Quas sit odit optio debitis
                      nulla quisquam, dolorum quaerat animi iusto quod.
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
