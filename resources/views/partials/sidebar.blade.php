<div
  id="drawer-body-scrolling"
  class="fixed top-0 left-0 z-40 h-screen p-4 overflow-y-auto transition-transform -translate-x-full bg-white w-64 dark:bg-gray-800"
  tabindex="-1"
  aria-labelledby="drawer-body-scrolling-label">
  <div class="flex items-center justify-between mb-4">
    <a href="#" class="flex items-center">
      <img
        src="{{ asset('images/protein-svgrepo-com.svg') }}"
        class="h-8 mr-3"
        alt="Bina Cloud"
      />
      <span class="text-lg font-medium text-gray-900 dark:text-white">
        Bina Cloud
      </span>
    </a>
    <button
      type="button"
      data-drawer-hide="drawer-body-scrolling"
      aria-controls="drawer-body-scrolling"
      class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 inline-flex items-center justify-center dark:hover:bg-gray-600 dark:hover:text-white">
      <svg
        class="w-3 h-3"
        aria-hidden="true"
        xmlns="http://www.w3.org/2000/svg"
        fill="none"
        viewBox="0 0 14 14">
        <path
          stroke="currentColor"
          stroke-linecap="round"
          stroke-linejoin="round"
          stroke-width="2"
          d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
      </svg>
      <span class="sr-only">Close menu</span>
    </button>
  </div>
  <form action="#" method="GET" class="mb-4">
    <label for="sidebar-search" class="sr-only">Search</label>
    <div class="relative">
      <div
        class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
        <svg
          class="w-4 h-4 text-gray-500 dark:text-gray-400"
          aria-hidden="true"
          xmlns="http://www.w3.org/2000/svg"
          fill="none"
          viewBox="0 0 20 20">
          <path
            stroke="currentColor"
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
        </svg>
      </div>
      <input
        type="text"
        name="search"
        id="sidebar-search"
        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-9 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
        placeholder="Search..."/>
    </div>
  </form>

  <ul class="space-y-2 font-medium">
    <li>
      <a
        href="dashboard.html"
        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
        <span class="ml-3">Dashboard</span>
      </a>
    </li>
    <li>
      <a
        href="settings.html"
        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
        <span class="ml-3">Settings</span>
      </a>
    </li>
  </ul>
</div>