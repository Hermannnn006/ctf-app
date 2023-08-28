<nav aria-label="alternative nav">
    <div class="bg-gray-800 shadow-xl h-20 fixed bottom-0 mt-12 md:fixed md:h-screen z-10 w-full md:w-48 content-center">
        <div class="md:mt-12 md:w-48 md:fixed md:left-0 md:top-0 content-center md:content-start text-left justify-between">
            <ul class="list-reset flex flex-row md:flex-col pt-3 md:py-3 px-1 md:px-2 text-center md:text-left">  
                <li class="mr-3 flex-1">
                    <Link href="/dashboard" class="block py-1 md:py-3 pl-1 align-middle text-white no-underline {{ Request::is('dashboard') ? 'border-sky-500' : '' }} hover:text-white border-b-2 border-gray-800 hover:border-purple-500">
                        <i class="fa fa-house pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-400 md:text-gray-200 block md:inline-block">Dashboard</span>
                    </Link>
                </li>
                @canany(['admin', 'superAdmin'])
                <li class="mr-3 flex-1">
                    <Link href="/dashboard/chalengge" class="block py-1 md:py-3 pl-1 align-middle text-white no-underline {{ Request::is('dashboard/chalengge') ? 'border-sky-500' : '' }} hover:text-white border-b-2 border-gray-800 hover:border-purple-500">
                        <i class="fa fa-bug pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-400 md:text-gray-200 block md:inline-block">Challenge</span>
                    </Link>
                </li>
                @endcanany
                @can('superAdmin')
                <li class="mr-3 flex-1">
                    <Link href="/dashboard/user" class="block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 {{ Request::is('dashboard/user') ? 'border-sky-500' : '' }} hover:border-purple-500">
                        <i class="fa fa-user pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-400 md:text-gray-200 block md:inline-block">User</span>
                    </Link>
                </li>
                <li class="mr-3 flex-1">
                    <Link href="/dashboard/category" class="block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 {{ Request::is('dashboard/category') ? 'border-sky-500' : '' }} hover:border-purple-500">
                        <i class="fa fa-tablet pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-400 md:text-gray-200 block md:inline-block">Category</span>
                    </Link>
                </li>
                @endcan
            </ul>
        </div>
    </div>
</nav>