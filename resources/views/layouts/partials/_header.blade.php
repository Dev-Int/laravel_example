<div class="relative bg-white overflow-hidden">
    <div class="max-w-7-xl mx-auto">
        <div class="relative z-10 bg-white lg:max-w-2xl lg:w-full">
            <div class="relative pt-6 px-4 sm:px-6 lg:px-8">
                <nav class="relative flex items-center justify-between sm:h-10 lg:justify-start" aria-label="Global">
                    <div class="flex items-center flex-grow flex-shrink-0 lg:flex-grow-0">
                        <div class="flex items-center justify-between w-full md:w-auto">
                          <a href="{{ route('app_home') }}">
                            <img class="h-8 w-auto sm:h-10" src="https://tailwindui.com/img/logos/workflow-mark-indigo-600.svg" alt="logo">
                          </a>
                        </div>
                    </div>
                    <div class="md:block md:ml-10 md:pr-4 md:space-x-8">
                        <span class="md:hidden">&nbsp;</span>
                        <a href="{{ route('blog_show', ['id' => 1]) }}" class="font-medium text-gray-500 hover:text-gray-900">Blog</a>
                        <span class="md:hidden">&nbsp;|&nbsp;</span>
                        <a href="{{ route('app_about') }}" class="font-medium text-gray-500 hover:text-gray-900">About us</a>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>
