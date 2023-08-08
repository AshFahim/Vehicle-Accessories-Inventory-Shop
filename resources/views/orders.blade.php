@extends('layouts.main')

@section('main-section')

<br>
<br><br>
<div class="py-14 px-4 md:px-6 2xl:px-20 2xl:container 2xl:mx-auto">
    <div class="mt-10 flex flex-col xl:flex-row jusitfy-center items-stretch w-full xl:space-x-8 space-y-4 md:space-y-6 xl:space-y-0">
            <!-- component -->
<div class="bg-white p-8 rounded-md w-full">
	<div class=" flex items-center justify-between pb-6">
		<div>
			<h2 class="text-gray-600 font-semibold">Previous order list</h2>
			<span class="text-xs">All products item</span>
		</div>
		<div class="flex items-center justify-between">
				<div class="lg:ml-40 ml-10 space-x-8">
				</div>
			</div>
		</div>
		<div>
			<div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
				<div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
					<table class="min-w-full leading-normal">
						<thead>
							<tr>
								<th
									class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
									Order Date
								</th>
								<th
									class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
									Total Products
								</th>
								<th
									class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Total Price
								</th>
								<th
									class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
									QRT
								</th>
								<th
									class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
									Status
								</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
									<div class="flex items-center">
										<div class="flex-shrink-0 w-10 h-10">
											<img class="w-full h-full rounded-full"
                                                src="https://www.shutterstock.com/image-vector/demo-cursor-icon-presentation-billboard-600w-318562925.jpg"
                                                alt="" />
                                        </div>
											<div class="ml-3">
												<p class="text-gray-900 whitespace-no-wrap">
													21st Mart 2021 at 10:34 PM
												</p>
											</div>
										</div>
								</td>
								<td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
									<p class="text-gray-900 whitespace-no-wrap">20</p>
								</td>
								<td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
									<p class="text-gray-900 whitespace-no-wrap">
										100
									</p>
								</td>
								<td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
									<p class="text-gray-900 whitespace-no-wrap">
										40
									</p>
								</td>
								<td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
									<span
                                        class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                        <span aria-hidden
                                            class="absolute inset-0 bg-green-200 opacity-50 rounded-full"></span>
									<span class="relative">Processing</span>
									</span>
								</td>
							</tr>
							<tr>
								<td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
									<div class="flex items-center">
										<div class="flex-shrink-0 w-10 h-10">
											<img class="w-full h-full rounded-full"
                                                src="https://www.shutterstock.com/image-vector/demo-cursor-icon-presentation-billboard-600w-318562925.jpg"
                                                alt="" />
                                        </div>
											<div class="ml-3">
												<p class="text-gray-900 whitespace-no-wrap">
													20st May 2021 at 10:34 PM
												</p>
											</div>
										</div>
								</td>
								<td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
									<p class="text-gray-900 whitespace-no-wrap">9</p>
								</td>
								<td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
									<p class="text-gray-900 whitespace-no-wrap">
										202
									</p>
								<td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
									<p class="text-gray-900 whitespace-no-wrap">
										77
									</p>
								</td>
								<td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
									<span
                                        class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                        <span aria-hidden
                                            class="absolute inset-0 bg-green-200 opacity-50 rounded-full"></span>
									<span class="relative">Processing</span>
									</span>
								</td>
							</tr>
							<tr>
								<td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
									<div class="flex items-center">
										<div class="flex-shrink-0 w-10 h-10">
											<img class="w-full h-full rounded-full"
                                                src="https://www.shutterstock.com/image-vector/demo-cursor-icon-presentation-billboard-600w-318562925.jpg"
                                                alt="" />
                                        </div>
											<div class="ml-3">
												<p class="text-gray-900 whitespace-no-wrap">
													20st May 2021 at 10:34 PM
												</p>
											</div>
										</div>
								</td>
								<td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
									<p class="text-gray-900 whitespace-no-wrap">20</p>
								</td>
								<td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
									<p class="text-gray-900 whitespace-no-wrap">
										232
									</p>
								<td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
									<p class="text-gray-900 whitespace-no-wrap">
										64
									</p>
								</td>
								<td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
									<span
                                        class="relative inline-block px-3 py-1 font-semibold text-orange-900 leading-tight">
                                        <span aria-hidden
                                            class="absolute inset-0 bg-orange-200 opacity-50 rounded-full"></span>
									<span class="relative">Suspended</span>
									</span>
								</td>
							</tr>
							<tr>
								<td class="px-5 py-5 bg-white text-sm">
									<div class="flex items-center">
										<div class="flex-shrink-0 w-10 h-10">
											<img class="w-full h-full rounded-full"
                                                src="https://www.shutterstock.com/image-vector/demo-cursor-icon-presentation-billboard-600w-318562925.jpg"
                                                alt="" />
                                        </div>
											<div class="ml-3">
												<p class="text-gray-900 whitespace-no-wrap">
													20st May 2021 at 10:34 PM
												</p>
											</div>
										</div>
								</td>
								<td class="px-5 py-5 bg-white text-sm">
									<p class="text-gray-900 whitespace-no-wrap">5</p>
								</td>
								<td class="px-5 py-5 bg-white text-sm">
									<p class="text-gray-900 whitespace-no-wrap">603</p>
								</td>
								<td class="px-5 py-5 bg-white text-sm">
									<p class="text-gray-900 whitespace-no-wrap">70</p>
								</td>
								<td class="px-5 py-5 bg-white text-sm">
									<span
                                        class="relative inline-block px-3 py-1 font-semibold text-red-900 leading-tight">
                                        <span aria-hidden
                                            class="absolute inset-0 bg-red-200 opacity-50 rounded-full"></span>
									<span class="relative">Cancle</span>
									</span>
								</td>
							</tr>
						</tbody>
					</table>
					<div
						class="px-5 py-5 bg-white border-t flex flex-col xs:flex-row items-center xs:justify-between          ">
						<span class="text-xs xs:text-sm text-gray-900">
                            Showing 1 to 4 of 50 Entries
                        </span>
						<div class="inline-flex mt-2 xs:mt-0">
							<button
                                class="text-sm text-indigo-50 transition duration-150 hover:bg-indigo-500 bg-indigo-600 font-semibold py-2 px-4 rounded-l">
                                Prev
                            </button>
							&nbsp; &nbsp;
							<button
                                class="text-sm text-indigo-50 transition duration-150 hover:bg-indigo-500 bg-indigo-600 font-semibold py-2 px-4 rounded-r">
                                Next
                            </button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

        <div class="bg-gray-50 dark:bg-gray-800 w-full xl:w-96 flex justify-between items-center md:items-start px-4 py-6 md:p-6 xl:p-8 flex-col">
            <h3 class="text-xl dark:text-white font-semibold leading-5 text-gray-800">Customer</h3>
            <div class="flex flex-col md:flex-row xl:flex-col justify-start items-stretch h-full w-full md:space-x-6 lg:space-x-8 xl:space-x-0">
                <div class="flex flex-col justify-start items-start flex-shrink-0">
                    <div class="flex justify-center w-full md:justify-start items-center space-x-4 py-8 border-b border-gray-200">
                        <img src="https://i.ibb.co/5TSg7f6/Rectangle-18.png" alt="avatar" />
                        <div class="flex justify-start items-start flex-col space-y-2">
                            <p class="text-base dark:text-white font-semibold leading-4 text-left text-gray-800">David Kent</p>
                            <p class="text-sm dark:text-gray-300 leading-5 text-gray-600">10 Previous Orders</p>
                        </div>
                    </div>

                    <div class="flex justify-center text-gray-800 dark:text-white md:justify-start items-center space-x-4 py-4 border-b border-gray-200 w-full">
                        <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/order-summary-3-svg1.svg" alt="email">
                        <img class="hidden dark:block" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/order-summary-3-svg1dark.svg" alt="email">
                        <p class="cursor-pointer text-sm leading-5 ">david89@gmail.com</p>
                    </div>
                </div>
                <div class="flex justify-between xl:h-full items-stretch w-full flex-col mt-6 md:mt-0">
                    <div class="flex justify-center md:justify-start xl:flex-col flex-col md:space-x-6 lg:space-x-8 xl:space-x-0 space-y-4 xl:space-y-12 md:space-y-0 md:flex-row items-center md:items-start">
                        <div class="flex justify-center md:justify-start items-center md:items-start flex-col space-y-4 xl:mt-8">
                            <p class="text-base dark:text-white font-semibold leading-4 text-center md:text-left text-gray-800">Shipping Address</p>
                            <p class="w-48 lg:w-full dark:text-gray-300 xl:w-48 text-center md:text-left text-sm leading-5 text-gray-600">180 North King Street, Northhampton MA 1060</p>
                        </div>
                        <div class="flex justify-center md:justify-start items-center md:items-start flex-col space-y-4">
                            <p class="text-base dark:text-white font-semibold leading-4 text-center md:text-left text-gray-800">Billing Address</p>
                            <p class="w-48 lg:w-full dark:text-gray-300 xl:w-48 text-center md:text-left text-sm leading-5 text-gray-600">180 North King Street, Northhampton MA 1060</p>
                        </div>
                    </div>
                    <div class="flex w-full justify-center items-center md:justify-start md:items-start">
                        <button class="mt-6 md:mt-0 dark:border-white dark:hover:bg-gray-900 dark:bg-transparent dark:text-white py-5 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 border border-gray-800 font-medium w-96 2xl:w-full text-base font-medium leading-4 text-gray-800">Edit Details</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
