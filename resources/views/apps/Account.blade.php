<x-app-layout>
    <div class="space-y-8">
        <div>
          <x-breadcrumb :page-title="$pageTitle" :breadcrumb-items="$breadcrumbItems" />
        </div>

        <div class=" space-y-5">

            <div class="card">
                <div class="flex items-center justify-center p-4">



                    <div class="mr-4">
                        <label class="mb-2" for="Resignation-field" >From Date*</label>
                        <input type="text" placeholder="Enter date" id="datepicker" class=" form-input px-4 py-2 leading-tight border-gray-300 rounded-md focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 focus:outline-none">
                    </div>
                    <div class="mr-4">
                        <label class="mb-2" for="Resignation-field" >To Date*</label>
                        <input type="text" placeholder="Enter date" id="datepicker" class=" form-input px-4 py-2 leading-tight border-gray-300 rounded-md focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 focus:outline-none">
                    </div>



                    <div class="mt-6">
                        <button  class=" focus:ring-2 focus:ring-offset-2 focus:ring-indigo-600 mt-6 sm:mt-0 inline-flex items-start justify-start px-6 py-3 bg-indigo-700 hover:bg-indigo-600 focus:outline-none rounded">
                            <p class="text-sm font-medium leading-none text-white">Search</p>
                        </button>
                    </div>




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

                                <th colspan="2" scope="col" class="whitespace-nowrap border-white border px-6 py-4  ">
                                  Debit
                                </th>
                                <th colspan="2" scope="col" class="whitespace-nowrap border-white  border px-6 py-4 ">
                                 Credit
                                </th>
                            </tr>
                          <tr>
                              <th  scope="col" class=" table-th ">
                                Particular
                              </th>
                              <th scope="col" class="border-r border-white table-th ">
                                Taka
                              </th>
                              <th  scope="col" class=" table-th ">
                                Particular
                              </th>
                              <th scope="col" class=" table-th ">
                                Taka
                              </th>

                          </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-slate-100 dark:bg-slate-800 dark:divide-slate-700">
                            <tr>
                                <td class="table-td">Bill Collection</td>
                                <td class="table-td border-r ">20,000</td>
                                <td class="table-td ">Salary</td>
                                <td class="table-td ">0</td>

                              </tr>
                              <tr>
                                <td class="table-td">Connection Charge</td>
                                <td class="table-td border-r ">0</td>
                                <td class="table-td ">Expanse</td>
                                <td class="table-td ">0</td>

                              </tr>
                              <tr>
                                <td class="table-td">Mac Reseller Bill</td>
                                <td class="table-td border-r ">0</td>
                                <td class="table-td ">Isp Bill</td>
                                <td class="table-td ">0</td>

                              </tr>
                              <tr>
                                <td class="table-td">Bandwidth Reseller Bill</td>
                                <td class="table-td border-r ">0</td>
                                <td class="table-td ">Withdraw</td>
                                <td class="table-td ">0</td>

                              </tr>
                            <tr>
                              <td class="table-td">Service Income</td>
                              <td class="table-td border-r ">0</td>
                              <td class="table-td ">Service Income</td>
                              <td class="table-td ">0</td>

                            </tr>
                            <tr>
                                <td class="table-td">Total</td>
                                <td class="table-td border-r">20,000</td>


                              </tr>
                              <tr>

                                <th colspan="2" scope="col" class="bg-gray-300 whitespace-nowrap border-r  px-6 py-4  ">
                                  Cash On Hand
                                </th>
                                <th colspan="2" scope="col" class=" bg-gray-300 whitespace-nowrap border-r px-6 py-4 ">
                                 20,000
                                </th>
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
          <div class="inline-block align-center bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
            <div class="flex items-start justify-between p-5 border-b rounded-t ">
                <h3 class="text-gray-900 text-xl lg:text-2xl font-semibold ">
                    Add Expense
                </h3>
                <button onclick="toggleModal()" type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center  " >
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
            </div>
            <div class="flex items-center justify-between p-4">
                <div class=" w-full mr-2" >
                    <label class="mb-2" for="Resignation-field" > Date*</label>
                    <input type="text" placeholder="Enter date" id="datepicker" class=" form-input px-4 py-2 leading-tight border-gray-300 rounded-md focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 focus:outline-none">
                    </div>

                <div class=" w-full ml-2" >
                    <label class="mb-2" for="Resignation-field" > Status*</label>
                    <select class="form-control" data-plugin="choices"
                        data-choices data-choices-search-false
                        name="choices-single-default" id="idStatus">

                        <option value="all" selected>Select </option>

                    </select>
                </div>
            </div>
            <div class="flex items-center justify-between p-4">
                <div class=" w-full mr-2" >
                    <label class="mb-2" for="Resignation-field" > Amount*</label>
                    <input type="text" class="w-full bg-gray-100 p-2 mt-2 mb-3" />
                    </div>

                <div class=" w-full ml-2" >
                    <label class="mb-2" for="Resignation-field" > Reference*</label>
                    <input type="text" class="w-full bg-gray-100 p-2 mt-2 mb-3" />
                </div>
            </div>
            <div class="bg-white px-4   ">
                <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Upload</label>
                <input
                class="relative m-0 block w-full min-w-0 flex-auto rounded border border-solid border-neutral-300 bg-clip-padding px-3 py-[0.32rem] text-base font-normal text-neutral-700 transition duration-300 ease-in-out file:-mx-3 file:-my-[0.32rem] file:overflow-hidden file:rounded-none file:border-0 file:border-solid file:border-inherit file:bg-neutral-100 file:px-3 file:py-[0.32rem] file:text-neutral-700 file:transition file:duration-150 file:ease-in-out file:[border-inline-end-width:1px] file:[margin-inline-end:0.75rem] hover:file:bg-neutral-200 focus:border-primary focus:text-neutral-700 focus:shadow-te-primary focus:outline-none dark:border-neutral-600 dark:text-neutral-200 dark:file:bg-neutral-700 dark:file:text-neutral-100 dark:focus:border-primary"
                type="file"
                id="formFileMultiple"
                multiple />
            </div>
            <div class="bg-white px-4 pt-2 pb-4 ">
              <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Details</label>
                <textarea id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter Details..."></textarea>
            </div>
            <div class=" px-4 py-3 text-right">
              <button type="button" class="py-2 px-4 bg-gray-500 text-white rounded hover:bg-gray-700 mr-2" onclick="toggleModal()"><i class="fas fa-times"></i> Cancel</button>
              <button type="button" class="py-2 px-4 bg-blue-500 text-white rounded hover:bg-blue-700 mr-2"><i class="fas fa-plus"></i> Save</button>
            </div>
          </div>
        </div>
      </div>
</x-app-layout>




<script>
    function toggleModal() { document.getElementById('modal').classList.toggle('hidden')
};

</script>

<!-- Flatpickr JS -->
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

<!-- Initialize the datepicker -->
<script>
  flatpickr("#datepicker", {
    enableTime: false,
    dateFormat: "Y-m-d",
    altFormat: "F j, Y",
    altInput: true,
    minDate: "today"
  });
</script>
