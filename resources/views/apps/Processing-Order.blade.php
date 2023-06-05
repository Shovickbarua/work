<x-app-layout>
    <div class="space-y-8">
        <div>
          <x-breadcrumb :page-title="$pageTitle" :breadcrumb-items="$breadcrumbItems" />
        </div>

        <div class=" space-y-5">

            <div class="card">
                <div class="flex items-center justify-between p-4">

                    <div>

                        <input type="text" placeholder="Search"  class=" form-input px-4 py-2 leading-tight border-gray-300 border rounded-md  focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 focus:outline-none">
                    </div>

                    {{-- <div >
                        <button  class=" focus:ring-2 focus:ring-offset-2 focus:ring-indigo-600 mt-6 sm:mt-0 inline-flex items-start justify-start px-6 py-3 bg-indigo-700 hover:bg-indigo-600 focus:outline-none rounded">
                            <p class="text-sm font-medium leading-none text-white">Add Customer</p>
                        </button>
                    </div> --}}







                </div>
              <div class="card-body px-6 pb-6">
                <div class="overflow-x-auto -mx-6 dashcode-data-table">
                  <span class=" col-span-8  hidden"></span>
                  <span class="  col-span-4 hidden"></span>
                  <div class="inline-block min-w-full align-middle">
                    <div class="overflow-hidden ">
                      <table class="min-w-full divide-y divide-slate-100 table-fixed dark:divide-slate-700 data-table">
                        <thead class=" bg-slate-200 dark:bg-slate-700">
                          <tr>
                              <th scope="col" class=" table-th ">
                                Order Id
                              </th>
                              <th scope="col" class=" table-th ">
                                Order Date
                              </th>
                              <th scope="col" class=" table-th ">
                                Product Name
                              </th>
                              <th scope="col" class=" table-th ">
                                Customer Name
                              </th>
                              <th scope="col" class=" table-th ">
                                Customer Number
                              </th>
                              <th scope="col" class=" table-th ">
                                Quantity
                              </th>
                              <th scope="col" class=" table-th ">
                                Order Status
                              </th>
                              <th scope="col" class=" table-th ">
                                Payment Status
                              </th>

                              <th scope="col" class=" table-th ">
                                Action
                              </th>
                          </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-slate-100 dark:bg-slate-800 dark:divide-slate-700">

                            <tr>
                              <td class="table-td">7465</td>
                              <td class="table-td ">3/26/2022</td>
                              <td class="table-td ">Bag</td>
                              <td class="table-td">Mehedi
                              </td>
                              <td class="table-td ">45235435</td>
                              <td class="table-td ">13</td>

                              <td class="table-td ">

                                  <div class="inline-block px-3 min-w-[90px] text-center mx-auto py-1 rounded-[999px] bg-opacity-25 text-warning-500
                                      bg-warning-500">
                                      Pending
                                  </div>

                              </td>
                              <td class="table-td ">

                                <div class="inline-block px-3 min-w-[90px] text-center mx-auto py-1 rounded-[999px] bg-opacity-25 text-success-500
                                    bg-success-500">
                                    Cash On Delivery
                                </div>



                            </td>
                              <td class="table-td ">
                                <div class="flex space-x-3 rtl:space-x-reverse">
                                  <button onclick="toggleModal()" class="action-btn"  type="button">
                                    <iconify-icon icon="heroicons:eye"></iconify-icon>
                                  </button>

                                </div>
                              </td>
                            </tr>

                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>







            </div>
        </div>
    </div>
    <!-- Code block starts -->

      <div class="fixed z-10 overflow-y-auto top-0 w-full left-0 hidden" id="modal">
        <div class="flex items-center justify-center min-height-100vh pt-4 px-4 pb-20 text-center sm:block sm:p-0">
          <div class="fixed inset-0 transition-opacity">
            <div class="absolute inset-0 bg-gray-900 opacity-75" />
          </div>
          <span class="hidden sm:inline-block sm:align-middle sm:h-screen">&#8203;</span>
          <div  class="inline-block align-center bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all my-8 align-middle sm:max-w-2xl sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
            <div class="flex items-start justify-between p-4 border-b rounded-t ">
                <h3 class="text-gray-900 text-xl lg:text-xl font-semibold ">
                    Order Details
                </h3>
                <button onclick="toggleModal()" type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center  " >
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
            </div>

            <section>


                <div class="mx-auto p-4 ">
                    <div class="bg-white border rounded-md py-2 md:py-2">
                        <div class="mx-auto  px-4 lg:px-8">
                            <div class="    ">
                            <div class="flex items-center justify-between">
                            <p class="text-gray-400">Name</p>
                            <p class="  text-gray-900">Farhana Tanjin Monika</p>
                            </div>
                            <div class="flex items-center justify-between">
                                <p class="text-gray-400">Number:</p>
                                <p class="  text-gray-900">01674803314</p>
                            </div>
                            <div class="flex items-center justify-between">
                                <p class="text-gray-400">Address:</p>
                                <p class=" text-gray-500">10/14, Block C , Tajmahal Road, Mohammadpur Dhaka 1207</p>
                            </div>
                            <div class="flex items-center justify-between">
                            <p class="text-gray-400">Delivery Area:</p>
                            <p class="  text-gray-900">Dhaka North Area</p>
                            </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="mx-auto px-4 ">
                    <div class="bg-white border rounded-md py-2 md:py-2">
                        <div class="mx-auto  px-4 lg:px-8">
                            <div class="    ">
                            <div class="flex items-center justify-between">
                            <p class="text-gray-400">Order Code</p>
                            <p class="  text-gray-900">#239900</p>
                            </div>
                            <div class="flex items-center justify-between">
                                <p class="text-gray-400">Order Status</p>
                                <p class=" text-warning-500">Pending</p>
                            </div>
                            <div class="flex items-center justify-between">
                                <p class="text-gray-400">Payment Method</p>
                                <p class="  text-success-500">Cash On Delivery</p>
                            </div>
                            <div class="flex items-center justify-between">
                            <p class="text-gray-400">Payment Status</p>
                            <p class="  text-warning-500">Unpaid</p>
                            </div>
                            <div class=" flex items-center justify-between">
                                <p class="  text-gray-400">Order Date</p>
                                <p class="  text-gray-900">26 june 2023</p>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="mx-auto p-4 ">
                    <div class="bg-white border rounded-md py-2 md:py-2">
                        <div class="mx-auto  px-4 lg:px-8">
                            <div class=" space-y-1   ">
                            <div class="flex items-center justify-between">
                            <p class="text-gray-400">Product:</p>
                            <p class=" font-semibold text-gray-900">Wallet</p>
                            </div>
                            <div class="flex items-center justify-between">
                                <p class="text-gray-400">Product Price:</p>
                                <p class=" font-semibold text-gray-900">$1299.00</p>
                            </div>
                            <div class="flex items-center justify-between">
                                <p class="text-gray-400">Quantity:</p>
                                <div class="flex items-center border border-gray-200 rounded">
                                    <button
                                      type="button"
                                      class="w-10 h-10 leading-10 text-gray-600 transition hover:opacity-75"
                                    >
                                      &minus;
                                    </button>

                                    <input
                                      type="number"
                                      id="Quantity"
                                      value="1"
                                      class="h-10 w-12 border-transparent text-center [-moz-appearance:_textfield] sm:text-sm [&::-webkit-outer-spin-button]:m-0 [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:m-0 [&::-webkit-inner-spin-button]:appearance-none"
                                    />

                                    <button
                                      type="button"
                                      class="w-10 h-10 leading-10 text-gray-600 transition hover:opacity-75"
                                    >
                                      &plus;
                                    </button>
                                  </div>
                            </div>
                            <div class="flex items-center justify-between">
                            <p class="text-gray-400">Discount:</p>
                            <p class="mr-[-70px]  text-gray-900"><input type="text" class="text-center rounded-md w-2/3 bg-gray-100 p-2 " placeholder="$0.00" value="$0.00"/></p>
                            </div>
                            <div class=" flex items-center justify-between">
                                <p class="  text-gray-400">Advance:</p>
                                <p class="mr-[-70px]  text-gray-900"><input type="text" class="text-center rounded-md w-2/3 bg-gray-100 p-2 " placeholder="$0.00" value="$0.00"/></p>
                            </div>
                            <div class=" flex items-center justify-between">
                                <p class="  text-gray-400">Note:</p>
                                <p class="mr-[-70px]  text-gray-900"><input type="text" class="text-center rounded-md w-2/3 bg-gray-100 p-2 " placeholder="Note" /></p>
                            </div>
                            <div class=" flex items-center justify-between">
                                <p class="  text-gray-400">Total Bill:</p>
                                <p class=" font-semibold text-gray-900">$1299.00</p>
                            </div>

                            </div>


                        </div>
                    </div>
                </div>

                <div class="mx-auto px-4 ">
                    <div class="bg-white border rounded-md py-2 md:py-2">
                        <div class="mx-auto  px-4 lg:px-8">
                            <div class="    ">

                                <div class=" flex items-center justify-between">
                                    <p class="  text-gray-400">Order Status:</p>
                                    <p class=" font-semibold text-gray-900">
                                        <select class="form-control" data-plugin="choices"
                                        data-choices data-choices-search-false
                                        name="choices-single-default" id="idStatus">

                                        <option value="all" selected>Confirmed Order </option>

                                        </select>
                                    </p>
                                </div>


                            </div>


                        </div>
                    </div>
                </div>


            </section>

            <div class=" px-4 py-3 text-right">
              <button type="button" class="py-2 px-4 bg-gray-500 text-white rounded hover:bg-gray-700 mr-2" onclick="toggleModal()"><i class="fas fa-times"></i> Cancel</button>
              <button type="button" class="py-2 px-4 bg-success-500 text-white rounded hover:bg-blue-700 mr-2"><i class="fas fa-plus"></i> Update</button>
            </div>
          </div>
        </div>
      </div>
</x-app-layout>




<script>
    function toggleModal() { document.getElementById('modal').classList.toggle('hidden')
}
</script>
