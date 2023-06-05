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
                            <p class="text-sm font-medium leading-none text-white">Add Expanse</p>
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
                                      Delivered
                                  </div>

                                  {{-- <div class="inline-block px-3 min-w-[90px] text-center mx-auto py-1 rounded-[999px] bg-opacity-25 text-warning-500
                                      bg-warning-500">

                                  </div> --}}

                              </td>
                              <td class="table-td ">

                                <div class="inline-block px-3 min-w-[90px] text-center mx-auto py-1 rounded-[999px] bg-opacity-25 text-success-500
                                    bg-success-500">
                                    Cash On Delivery
                                </div>

                                {{-- <div class="inline-block px-3 min-w-[90px] text-center mx-auto py-1 rounded-[999px] bg-opacity-25 text-warning-500
                                    bg-warning-500">

                                </div> --}}

                            </td>
                              <td class="table-td ">
                                <div class="flex space-x-3 rtl:space-x-reverse">
                                  <button onclick="toggleModal()" class="action-btn"  type="button">
                                    <iconify-icon icon="heroicons:eye"></iconify-icon>
                                  </button>
                                  {{-- <button class="action-btn" type="button">
                                    <iconify-icon icon="heroicons:pencil-square"></iconify-icon>
                                  </button>
                                  <button class="action-btn" type="button">
                                    <iconify-icon icon="heroicons:trash"></iconify-icon>
                                  </button> --}}
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
          <div style="width: 50%" class="inline-block align-center bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all my-8 align-middle sm:max-w-3xl sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
            <div class="flex items-start justify-between p-5 border-b rounded-t ">
                <h3 class="text-gray-900 text-xl lg:text-xl font-semibold ">
                    Order Details
                </h3>
                <button onclick="toggleModal()" type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center  " >
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
            </div>
            {{-- <div class="bg-white px-4    ">
              <table class="min-w-full divide-y divide-slate-100 table-fixed dark:divide-slate-700">
                <thead class="  border-slate-100 dark:border-slate-800">
                    <tr class="py-3">
                        <th scope="col" class=" text-base ">
                          Customer Name
                        </th>
                        <th scope="col" class=" text-base ">
                           Mehedi Hasan
                        </th>
                        <th scope="col" class=" text-base ">
                           Order Code
                        </th>
                        <th scope="col" class=" text-base ">
                          204485-3748
                       </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-slate-100 dark:bg-slate-800 dark:divide-slate-700">
                        <tr class="py-3">
                            <td class="text-base">Phone Number</td>
                            <td class="text-base">2152289</td>
                            <td class="text-base">Order Date</td>
                            <td class="text-base ">26.03.2023</td>
                        </tr>
                        <tr class="py-3">
                            <td class="text-base">Payment Status</td>
                                <td class="text-xs">
                                  <div class="inline-block px-3 min-w-[90px] text-center mx-auto py-1 rounded-[999px] bg-opacity-25 text-success-500
                                        bg-success-500">
                                        Cash On Delivery
                                    </div>
                                </td>
                            <td class="text-base">Order Status</td>
                            <td class="text-xs "><div class="inline-block px-3 min-w-[90px] text-center mx-auto py-1 rounded-[999px] bg-opacity-25 text-warning-500
                              bg-warning-500">
                              Pending
                          </div></td>
                        </tr>


                </tbody>
              </table>
            </div>

            <div class="flex items-center justify-between p-4">
                <div class=" w-full mr-2" >
                    <label class="mb-2" for="Resignation-field" > Payment Status</label>
                    <select class="form-control" data-plugin="choices"
                        data-choices data-choices-search-false
                        name="choices-single-default" id="idStatus">

                        <option value="all" selected>Unpaid </option>

                    </select>
                    </div>

                <div class=" w-full ml-2" >
                    <label class="mb-2" for="Resignation-field" >Delivery Status</label>
                    <select class="form-control" data-plugin="choices"
                        data-choices data-choices-search-false
                        name="choices-single-default" id="idStatus">

                        <option value="all" selected>Processed </option>

                    </select>
                </div>
            </div>

            <div class="bg-white px-4    ">
                <table class="min-w-full divide-y divide-slate-100 table-fixed dark:divide-slate-700">
                  <thead class="  border-slate-100 dark:border-slate-800">
                      <tr class="py-3">
                          <th scope="col" class=" text-base  ">
                            Sl
                          </th>
                          <th scope="col" class=" text-base ">
                             Product Name
                          </th>
                          <th scope="col" class=" text-base ">
                             Quantity
                          </th>
                          <th scope="col" class=" text-base ">
                            Unit Price
                         </th>
                         <th scope="col" class=" text-base ">
                            Tax
                         </th>
                         <th scope="col" class=" text-base ">
                            Total Price
                         </th>
                      </tr>
                  </thead>
                  <tbody class="bg-white divide-y divide-slate-100 dark:bg-slate-800 dark:divide-slate-700">
                          <tr class="py-3">
                              <td class="text-xs">01</td>
                              <td class="table-td">
                                <span class="flex">
                                  <span class="w-7 h-7 rounded-full ltr:mr-3 rtl:ml-3 flex-none">
                                    <img src="images/all-img/user.png" alt="" class="object-cover w-full h-full rounded-full">
                                  </span>
                                  <span class="text-sm text-slate-600 dark:text-slate-300 capitalize">Jenny Wilson</span>
                                </span>
                              </td>
                              <td class="text-base">01</td>
                              <td class="text-base">100 tk</td>
                              <td class="text-base">10 tk</td>
                              <td class="text-base">110 tk</td>

                          </tr>


                  </tbody>
                </table>
            </div>
            <div class="bg-white px-4    ">
                <table class="min-w-full divide-y divide-slate-100 table-fixed dark:divide-slate-700">
                  <thead class="  border-slate-100 dark:border-slate-800">
                      <tr class="py-3">
                          <th scope="col" class=" text-base  ">
                            Sub Total
                          </th>
                          <th scope="col" class=" text-base ">
                            10 tk
                          </th>

                      </tr>
                  </thead>
                  <tbody class="bg-white divide-y divide-slate-100 dark:bg-slate-800 dark:divide-slate-700">

                          <tr class="py-3">
                            <td class="text-base font-semibold">Tax</td>

                            <td class="text-base">10 tk</td>

                        </tr>
                        <tr class="py-3">
                            <td class="text-base font-semibold">Shipping</td>

                            <td class="text-base">10 tk</td>

                        </tr>
                        <tr class="py-3">
                            <td class="text-base font-semibold">Discount</td>

                            <td class="text-base">10 tk</td>

                        </tr>
                        <tr class="py-3">
                            <td class="text-base font-semibold"> Total</td>

                            <td class="text-base">10 tk</td>

                        </tr>


                  </tbody>
                </table>
            </div> --}}
            <section>


                <div class="mx-auto grid max-w-screen-2xl grid-cols-1 md:grid-cols-2">

                <div class=" py-2 md:py-2 border-r">

                    <div class="mx-auto max-w-lg space-y-8 px-4 lg:px-8">
                    <div >
                        <div class="flow-root ">
                            <ul class="">
                                <li class="flex flex-col space-y-3 py-2 text-left sm:flex-row sm:space-x-5 sm:space-y-0">
                                    <div class="flex justify-between">


                                <div class="shrink-0 relative">
                                    <img class="h-24 w-24 max-w-full rounded-lg object-cover" src="https://cdn.midjourney.com/b4917b7e-f175-4676-a093-b52c1071032a/grid_0.png" alt="" />
                                </div>

                                <div style="margin-left: 20px" class="relative flex flex-1 flex-col justify-between">
                                    <div class="sm:col-gap-5 sm:grid sm:grid-cols-2">
                                    <div class="pr-8 sm:pr-5">
                                        <p class="text-base font-semibold text-gray-900">Jon Doe</p>
                                        <p class="mx-0 mt-1 mb-0 text-sm text-gray-400">Customer</p>
                                    </div>
                                    </div>


                                </div>

                            </div>
                                </li>
                                <li class="flex flex-col space-y-3 py-1 text-left sm:flex-row sm:space-x-5 sm:space-y-0">
                                    <p class="mx-0 mt-1 mb-0 text-sm text-gray-400">01966788283</p>

                                </li>
                                <li class="flex flex-col space-y-3 py-1 text-left sm:flex-row sm:space-x-5 sm:space-y-0">
                                    <p class="mx-0 mt-1 mb-0 text-sm text-gray-400">10/14 block f joint quarter azaz mohallah md pur dhaka</p>

                                </li>
                                <li class="flex flex-col space-y-3 py-1 text-left sm:flex-row sm:space-x-5 sm:space-y-0">
                                    <p class="mx-0 mt-1 mb-0 font-semibold text-gray-900">Kushtia</p>

                                </li>
                            </ul>
                        </div>
                    </div>
                    </div>
                </div>

                <div class="bg-white py-2 md:py-2">
                    <div class="mx-auto max-w-lg px-4 lg:px-8">
                    <div class=" space-y-3   pb-8">
                        <div class="flex items-center justify-between">
                        <p class="text-gray-400">Order Code</p>
                        <p class=" font-semibold text-gray-900">#239900</p>
                        </div>
                        <div class="flex items-center justify-between">
                            <p class="text-gray-400">Order Status</p>
                            <p class=" font-semibold text-warning-500">Pending</p>
                        </div>
                        <div class="flex items-center justify-between">
                            <p class="text-gray-400">Payment Method</p>
                            <p class=" font-semibold text-success-500">Cash On Delivery</p>
                        </div>
                        <div class="flex items-center justify-between">
                        <p class="text-gray-400">Payment Status</p>
                        <p class=" font-semibold text-warning-500">Unpaid</p>
                        </div>
                        <div class="mt-6 flex items-center justify-between">
                            <p class="  text-gray-400">Order Date</p>
                            <p class=" font-semibold text-gray-900">26 june 2023</p>
                        </div>
                    </div>


                    </div>
                </div>
                </div>
            </section>
            <div class="flex justify-between bg-gray-200 py-3 px-12 mb-5">
                <div >
                    <h6 class="text-gray-400">Product Info</h6>
                </div>
                <div >
                    <h6 class="text-gray-400">Price</h6>
                </div>
            </div>
              <section>


                <div class="mx-auto grid max-w-screen-2xl grid-cols-1 md:grid-cols-2">
                <div class=" py-2 md:py-2">
                    <div class="mx-auto max-w-lg space-y-8 px-4 lg:px-8">
                    <div>
                        <div class="flow-root">
                            <ul class="-my-8">
                                <li class="flex flex-col space-y-3 py-6 text-left sm:flex-row sm:space-x-5 sm:space-y-0">
                                    <div class="flex justify-between">
                                <div class="shrink-0 relative">
                                    <span class="absolute top-1 left-1 flex h-6 w-6 items-center justify-center rounded-full border bg-white text-sm font-medium text-gray-500 shadow sm:-top-2 sm:-right-2">1</span>
                                    <img class="h-24 w-24 max-w-full rounded-lg object-cover" src="https://images.unsplash.com/photo-1600185365483-26d7a4cc7519?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OHx8c25lYWtlcnxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=150&q=60" alt="" />
                                </div>

                                <div style="margin-left: 20px" class="relative flex flex-1 flex-col justify-between">
                                    <div class="sm:col-gap-5 sm:grid sm:grid-cols-2">
                                    <div class="pr-8 sm:pr-5">
                                        <p class="text-base font-semibold text-gray-900">Nike Air Max 2019</p>
                                        <p class="mx-0 mt-1 mb-0 text-sm text-gray-400">36EU - 4US</p>
                                    </div>

                                    <div class="mt-4 flex items-end justify-between sm:mt-0 sm:items-start sm:justify-end">
                                        <p class="shrink-0 w-20 text-base font-semibold text-gray-900 sm:order-2 sm:ml-8 sm:text-right">$1259.00</p>
                                    </div>
                                    </div>

                                    <div class="absolute top-0 right-0 flex sm:bottom-0 sm:top-auto">
                                    <button type="button" class="flex rounded p-2 text-center text-gray-500 transition-all duration-200 ease-in-out focus:shadow hover:text-gray-900">
                                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" class=""></path>
                                        </svg>
                                    </button>
                                    </div>
                                </div>
                            </div>
                                </li>

                                <li class="flex flex-col space-y-3 pb-6 text-left sm:flex-row sm:space-x-5 sm:space-y-0">
                                    <div class=" w-60 ml-2" >
                                        <label style="margin-bottom: 10px" class="pb-2" for="Resignation-field" >Order Status*</label>
                                        <select class="form-control" data-plugin="choices"
                                            data-choices data-choices-search-false
                                            name="choices-single-default" id="idStatus">

                                            <option value="all" selected>Confirmed Order </option>

                                        </select>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    </div>
                </div>

                <div class="bg-white py-2 md:py-2">
                    <div class="mx-auto max-w-lg px-4 lg:px-8">
                    <div class=" space-y-3  border-b pb-2">
                        <div class="flex items-center justify-between">
                        <p class="text-gray-400">Subtotal</p>
                        <p class=" font-semibold text-gray-900">$1259.00</p>
                        </div>
                        <div class="flex items-center justify-between">
                            <p class="text-gray-400">Discount</p>
                            <p class=" font-semibold text-gray-900"><input type="text" class="align-center w-2/3 ml-20 bg-gray-100 p-2 " placeholder="$0.00" value="$0.00"/></p>
                        </div>
                        <div class="flex items-center justify-between">
                            <p class="text-gray-400">Advance</p>
                            <p class=" font-semibold text-gray-900"><input type="text" class="align-center w-2/3 ml-20 bg-gray-100 p-2 " placeholder="$0.00" value="$0.00"/></p>
                        </div>
                        <div class="flex items-center justify-between">
                        <p class="text-gray-400 mr-4">Shipping Charge</p>
                        <p class=" font-semibold text-gray-900"><input type="text" class="align-center w-2/3 ml-16 bg-gray-100 p-2 " placeholder="Free Shiping"/></p>
                        </div>
                    </div>
                    <div class="mt-2 flex items-center justify-between">
                        <p class=" font-medium text-gray-900">Total Amount</p>
                        <p class=" font-semibold text-gray-900">$1259.00</p>
                    </div>

                    </div>
                </div>
                </div>
            </section>


              {{-- <div class="bg-white px-4 pt-2 pb-4 ">
              <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Details</label>
                <textarea id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write your thoughts here..."></textarea>
              </div> --}}
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
