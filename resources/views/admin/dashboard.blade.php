<x-layout title="Admin Dashboard">
    <section class="flex flex-col items-center lg:mt-32 lg:ps-64 p-4">
        <div class=" h-screen w-full justify-center items-center">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:py-24 lg:px-8">
                <h2 class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                    Our service statistics
                </h2>
                <div class="grid grid-cols-1 gap-5 sm:grid-cols-4 mt-4">
                    <div class="bg-white overflow-hidden shadow rounded-lg ">
                        <div class="px-4 py-5 sm:p-6">
                            <dl>
                                <dt class="text-sm leading-5 font-medium text-gray-500 truncate ">
                                    Total Users
                                </dt>
                                <dd class="mt-1 text-3xl leading-9 font-semibold text-primary ">{{count($users)}}</dd>
                            </dl>
                        </div>
                    </div>
                    <div class="bg-white overflow-hidden shadow rounded-lg ">
                        <div class="px-4 py-5 sm:p-6">
                            <dl>
                                <dt class="text-sm leading-5 font-medium text-gray-500 truncate ">
                                    Total Companies
                                </dt>
                                <dd class="mt-1 text-3xl leading-9 font-semibold text-primary ">{{count($companies)}}</dd>
                            </dl>
                        </div>
                    </div>
                    <div class="bg-white overflow-hidden shadow rounded-lg ">
                        <div class="px-4 py-5 sm:p-6">
                            <dl>
                                <dt class="text-sm leading-5 font-medium text-gray-500 truncate ">
                                    Total Posts
                                </dt>
                                <dd class="mt-1 text-3xl leading-9 font-semibold text-primary ">{{count($posts)}}</dd>
                            </dl>
                        </div>
                    </div>
                    <div class="bg-white overflow-hidden shadow rounded-lg ">
                        <div class="px-4 py-5 sm:p-6">
                            <dl>
                                <dt class="text-sm leading-5 font-medium text-gray-500 truncate ">Total Applications
                                </dt>
                                <dd class="mt-1 text-3xl leading-9 font-semibold text-primary ">{{count($applications)}}
                                </dd>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layout>
