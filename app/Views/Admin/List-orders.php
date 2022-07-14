<?= $this->extend('Admin/Layout')?>
<?= $this->section('content')?> 

<h2 class="intro-y text-lg font-medium mt-10">Transaction List</h2>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 flex flex-wrap xl:flex-nowrap items-center mt-2">
            <div class="flex w-full sm:w-auto">
                <div class="w-48 relative text-slate-500">
                    <input type="text" class="form-control w-48 box pr-10" placeholder="Search by invoice...">
                    <i class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0" data-lucide="search"></i>
                </div>
                <select class="form-select box ml-2">
                    <option>Status</option>
                    <option>Waiting Payment</option>
                    <option>Confirmed</option>
                    <option>Packing</option>
                    <option>Delivered</option>
                    <option>Completed</option>
                </select>
            </div>
            <div class="hidden xl:block mx-auto text-slate-500">Showing 1 to 10 of 150 entries</div>
            <div class="w-full xl:w-auto flex items-center mt-3 xl:mt-0">
                <button class="btn btn-primary shadow-md mr-2">
                    <i data-lucide="file-text" class="w-4 h-4 mr-2"></i> Export to Excel
                </button>
                <button class="btn btn-primary shadow-md mr-2">
                    <i data-lucide="file-text" class="w-4 h-4 mr-2"></i> Export to PDF
                </button>
                <div class="dropdown">
                    <button class="dropdown-toggle btn px-2 box" aria-expanded="false" data-tw-toggle="dropdown">
                        <span class="w-5 h-5 flex items-center justify-center">
                            <i class="w-4 h-4" data-lucide="plus"></i>
                        </span>
                    </button>
                    <div class="dropdown-menu w-40">
                        <ul class="dropdown-content">
                            <li>
                                <a href="" class="dropdown-item">
                                    <i data-lucide="arrow-left-right" class="w-4 h-4 mr-2"></i> Change Status
                                </a>
                            </li>
                            <li>
                                <a href="" class="dropdown-item">
                                    <i data-lucide="bookmark" class="w-4 h-4 mr-2"></i> Bookmark
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- BEGIN: Data List -->
        <div class="intro-y col-span-12 overflow-auto 2xl:overflow-visible">
            <table class="table table-report -mt-2">
                <thead>
                    <tr>
                        <th class="whitespace-nowrap">
                            <input class="form-check-input" type="checkbox">
                        </th>
                        <th class="whitespace-nowrap">INVOICE</th>
                        <th class="whitespace-nowrap">BUYER NAME</th>
                        <th class="text-center whitespace-nowrap">STATUS</th>
                        <th class="whitespace-nowrap">PAYMENT</th>
                        <th class="text-right whitespace-nowrap">
                            <div class="pr-16">TOTAL TRANSACTION</div>
                        </th>
                        <th class="text-center whitespace-nowrap">ACTIONS</th>
                    </tr>
                </thead>
                <tbody>
                                            <tr class="intro-x">
                            <td class="w-10">
                                <input class="form-check-input" type="checkbox">
                            </td>
                            <td class="w-40 !py-4">
                                <a href="" class="underline decoration-dotted whitespace-nowrap">#INV-220807556</a>
                            </td>
                            <td class="w-40">
                                <a href="" class="font-medium whitespace-nowrap">Brad Pitt</a>
                                                                    <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">Ohio, Ohio</div>
                                                            </td>
                            <td class="text-center">
                                <div class="flex items-center justify-center whitespace-nowrap text-success">
                                    <i data-lucide="check-square" class="w-4 h-4 mr-2"></i> Completed
                                </div>
                            </td>
                            <td>
                                                                    <div class="whitespace-nowrap">Direct bank transfer</div>
                                    <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">25 March, 12:55</div>
                                                            </td>
                            <td class="w-40 text-right">
                                <div class="pr-16">$220,000,00</div>
                            </td>
                            <td class="table-report__action">
                                <div class="flex justify-center items-center">
                                    <a class="flex items-center text-primary whitespace-nowrap mr-5" href="javascript:;">
                                        <i data-lucide="check-square" class="w-4 h-4 mr-1"></i> View Details
                                    </a>
                                    <a class="flex items-center text-primary whitespace-nowrap" href="javascript:;" data-tw-toggle="modal" data-tw-target="#delete-confirmation-modal">
                                        <i data-lucide="arrow-left-right" class="w-4 h-4 mr-1"></i> Change Status
                                    </a>
                                </div>
                            </td>
                        </tr>
                                            <tr class="intro-x">
                            <td class="w-10">
                                <input class="form-check-input" type="checkbox">
                            </td>
                            <td class="w-40 !py-4">
                                <a href="" class="underline decoration-dotted whitespace-nowrap">#INV-99807556</a>
                            </td>
                            <td class="w-40">
                                <a href="" class="font-medium whitespace-nowrap">Denzel Washington</a>
                                                                    <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">Ohio, Ohio</div>
                                                            </td>
                            <td class="text-center">
                                <div class="flex items-center justify-center whitespace-nowrap text-success">
                                    <i data-lucide="check-square" class="w-4 h-4 mr-2"></i> Completed
                                </div>
                            </td>
                            <td>
                                                                    <div class="whitespace-nowrap">Direct bank transfer</div>
                                    <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">25 March, 12:55</div>
                                                            </td>
                            <td class="w-40 text-right">
                                <div class="pr-16">$99,000,00</div>
                            </td>
                            <td class="table-report__action">
                                <div class="flex justify-center items-center">
                                    <a class="flex items-center text-primary whitespace-nowrap mr-5" href="javascript:;">
                                        <i data-lucide="check-square" class="w-4 h-4 mr-1"></i> View Details
                                    </a>
                                    <a class="flex items-center text-primary whitespace-nowrap" href="javascript:;" data-tw-toggle="modal" data-tw-target="#delete-confirmation-modal">
                                        <i data-lucide="arrow-left-right" class="w-4 h-4 mr-1"></i> Change Status
                                    </a>
                                </div>
                            </td>
                        </tr>
                                            <tr class="intro-x">
                            <td class="w-10">
                                <input class="form-check-input" type="checkbox">
                            </td>
                            <td class="w-40 !py-4">
                                <a href="" class="underline decoration-dotted whitespace-nowrap">#INV-24807556</a>
                            </td>
                            <td class="w-40">
                                <a href="" class="font-medium whitespace-nowrap">Johnny Depp</a>
                                                                    <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">Ohio, Ohio</div>
                                                            </td>
                            <td class="text-center">
                                <div class="flex items-center justify-center whitespace-nowrap text-success">
                                    <i data-lucide="check-square" class="w-4 h-4 mr-2"></i> Completed
                                </div>
                            </td>
                            <td>
                                                                    <div class="whitespace-nowrap">Direct bank transfer</div>
                                    <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">25 March, 12:55</div>
                                                            </td>
                            <td class="w-40 text-right">
                                <div class="pr-16">$24,000,00</div>
                            </td>
                            <td class="table-report__action">
                                <div class="flex justify-center items-center">
                                    <a class="flex items-center text-primary whitespace-nowrap mr-5" href="javascript:;">
                                        <i data-lucide="check-square" class="w-4 h-4 mr-1"></i> View Details
                                    </a>
                                    <a class="flex items-center text-primary whitespace-nowrap" href="javascript:;" data-tw-toggle="modal" data-tw-target="#delete-confirmation-modal">
                                        <i data-lucide="arrow-left-right" class="w-4 h-4 mr-1"></i> Change Status
                                    </a>
                                </div>
                            </td>
                        </tr>
                                            <tr class="intro-x">
                            <td class="w-10">
                                <input class="form-check-input" type="checkbox">
                            </td>
                            <td class="w-40 !py-4">
                                <a href="" class="underline decoration-dotted whitespace-nowrap">#INV-117807556</a>
                            </td>
                            <td class="w-40">
                                <a href="" class="font-medium whitespace-nowrap">Keanu Reeves</a>
                                                                    <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">Ohio, Ohio</div>
                                                            </td>
                            <td class="text-center">
                                <div class="flex items-center justify-center whitespace-nowrap text-success">
                                    <i data-lucide="check-square" class="w-4 h-4 mr-2"></i> Completed
                                </div>
                            </td>
                            <td>
                                                                    <div class="whitespace-nowrap">Direct bank transfer</div>
                                    <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">25 March, 12:55</div>
                                                            </td>
                            <td class="w-40 text-right">
                                <div class="pr-16">$117,000,00</div>
                            </td>
                            <td class="table-report__action">
                                <div class="flex justify-center items-center">
                                    <a class="flex items-center text-primary whitespace-nowrap mr-5" href="javascript:;">
                                        <i data-lucide="check-square" class="w-4 h-4 mr-1"></i> View Details
                                    </a>
                                    <a class="flex items-center text-primary whitespace-nowrap" href="javascript:;" data-tw-toggle="modal" data-tw-target="#delete-confirmation-modal">
                                        <i data-lucide="arrow-left-right" class="w-4 h-4 mr-1"></i> Change Status
                                    </a>
                                </div>
                            </td>
                        </tr>
                                            <tr class="intro-x">
                            <td class="w-10">
                                <input class="form-check-input" type="checkbox">
                            </td>
                            <td class="w-40 !py-4">
                                <a href="" class="underline decoration-dotted whitespace-nowrap">#INV-55807556</a>
                            </td>
                            <td class="w-40">
                                <a href="" class="font-medium whitespace-nowrap">Kate Winslet</a>
                                                                    <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">Ohio, Ohio</div>
                                                            </td>
                            <td class="text-center">
                                <div class="flex items-center justify-center whitespace-nowrap text-success">
                                    <i data-lucide="check-square" class="w-4 h-4 mr-2"></i> Completed
                                </div>
                            </td>
                            <td>
                                                                    <div class="whitespace-nowrap">Direct bank transfer</div>
                                    <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">25 March, 12:55</div>
                                                            </td>
                            <td class="w-40 text-right">
                                <div class="pr-16">$55,000,00</div>
                            </td>
                            <td class="table-report__action">
                                <div class="flex justify-center items-center">
                                    <a class="flex items-center text-primary whitespace-nowrap mr-5" href="javascript:;">
                                        <i data-lucide="check-square" class="w-4 h-4 mr-1"></i> View Details
                                    </a>
                                    <a class="flex items-center text-primary whitespace-nowrap" href="javascript:;" data-tw-toggle="modal" data-tw-target="#delete-confirmation-modal">
                                        <i data-lucide="arrow-left-right" class="w-4 h-4 mr-1"></i> Change Status
                                    </a>
                                </div>
                            </td>
                        </tr>
                                            <tr class="intro-x">
                            <td class="w-10">
                                <input class="form-check-input" type="checkbox">
                            </td>
                            <td class="w-40 !py-4">
                                <a href="" class="underline decoration-dotted whitespace-nowrap">#INV-33807556</a>
                            </td>
                            <td class="w-40">
                                <a href="" class="font-medium whitespace-nowrap">Kevin Spacey</a>
                                                                    <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">Ohio, Ohio</div>
                                                            </td>
                            <td class="text-center">
                                <div class="flex items-center justify-center whitespace-nowrap text-success">
                                    <i data-lucide="check-square" class="w-4 h-4 mr-2"></i> Completed
                                </div>
                            </td>
                            <td>
                                                                    <div class="whitespace-nowrap">Direct bank transfer</div>
                                    <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">25 March, 12:55</div>
                                                            </td>
                            <td class="w-40 text-right">
                                <div class="pr-16">$33,000,00</div>
                            </td>
                            <td class="table-report__action">
                                <div class="flex justify-center items-center">
                                    <a class="flex items-center text-primary whitespace-nowrap mr-5" href="javascript:;">
                                        <i data-lucide="check-square" class="w-4 h-4 mr-1"></i> View Details
                                    </a>
                                    <a class="flex items-center text-primary whitespace-nowrap" href="javascript:;" data-tw-toggle="modal" data-tw-target="#delete-confirmation-modal">
                                        <i data-lucide="arrow-left-right" class="w-4 h-4 mr-1"></i> Change Status
                                    </a>
                                </div>
                            </td>
                        </tr>
                                            <tr class="intro-x">
                            <td class="w-10">
                                <input class="form-check-input" type="checkbox">
                            </td>
                            <td class="w-40 !py-4">
                                <a href="" class="underline decoration-dotted whitespace-nowrap">#INV-23807556</a>
                            </td>
                            <td class="w-40">
                                <a href="" class="font-medium whitespace-nowrap">Tom Cruise</a>
                                                                    <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">Ohio, Ohio</div>
                                                            </td>
                            <td class="text-center">
                                <div class="flex items-center justify-center whitespace-nowrap text-success">
                                    <i data-lucide="check-square" class="w-4 h-4 mr-2"></i> Completed
                                </div>
                            </td>
                            <td>
                                                                    <div class="whitespace-nowrap">Direct bank transfer</div>
                                    <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">25 March, 12:55</div>
                                                            </td>
                            <td class="w-40 text-right">
                                <div class="pr-16">$23,000,00</div>
                            </td>
                            <td class="table-report__action">
                                <div class="flex justify-center items-center">
                                    <a class="flex items-center text-primary whitespace-nowrap mr-5" href="javascript:;">
                                        <i data-lucide="check-square" class="w-4 h-4 mr-1"></i> View Details
                                    </a>
                                    <a class="flex items-center text-primary whitespace-nowrap" href="javascript:;" data-tw-toggle="modal" data-tw-target="#delete-confirmation-modal">
                                        <i data-lucide="arrow-left-right" class="w-4 h-4 mr-1"></i> Change Status
                                    </a>
                                </div>
                            </td>
                        </tr>
                                            <tr class="intro-x">
                            <td class="w-10">
                                <input class="form-check-input" type="checkbox">
                            </td>
                            <td class="w-40 !py-4">
                                <a href="" class="underline decoration-dotted whitespace-nowrap">#INV-38807556</a>
                            </td>
                            <td class="w-40">
                                <a href="" class="font-medium whitespace-nowrap">Johnny Depp</a>
                                                                    <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">Ohio, Ohio</div>
                                                            </td>
                            <td class="text-center">
                                <div class="flex items-center justify-center whitespace-nowrap text-success">
                                    <i data-lucide="check-square" class="w-4 h-4 mr-2"></i> Completed
                                </div>
                            </td>
                            <td>
                                                                    <div class="whitespace-nowrap">Direct bank transfer</div>
                                    <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">25 March, 12:55</div>
                                                            </td>
                            <td class="w-40 text-right">
                                <div class="pr-16">$38,000,00</div>
                            </td>
                            <td class="table-report__action">
                                <div class="flex justify-center items-center">
                                    <a class="flex items-center text-primary whitespace-nowrap mr-5" href="javascript:;">
                                        <i data-lucide="check-square" class="w-4 h-4 mr-1"></i> View Details
                                    </a>
                                    <a class="flex items-center text-primary whitespace-nowrap" href="javascript:;" data-tw-toggle="modal" data-tw-target="#delete-confirmation-modal">
                                        <i data-lucide="arrow-left-right" class="w-4 h-4 mr-1"></i> Change Status
                                    </a>
                                </div>
                            </td>
                        </tr>
                                            <tr class="intro-x">
                            <td class="w-10">
                                <input class="form-check-input" type="checkbox">
                            </td>
                            <td class="w-40 !py-4">
                                <a href="" class="underline decoration-dotted whitespace-nowrap">#INV-210807556</a>
                            </td>
                            <td class="w-40">
                                <a href="" class="font-medium whitespace-nowrap">Leonardo DiCaprio</a>
                                                                    <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">Ohio, Ohio</div>
                                                            </td>
                            <td class="text-center">
                                <div class="flex items-center justify-center whitespace-nowrap text-success">
                                    <i data-lucide="check-square" class="w-4 h-4 mr-2"></i> Completed
                                </div>
                            </td>
                            <td>
                                                                    <div class="whitespace-nowrap">Direct bank transfer</div>
                                    <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">25 March, 12:55</div>
                                                            </td>
                            <td class="w-40 text-right">
                                <div class="pr-16">$210,000,00</div>
                            </td>
                            <td class="table-report__action">
                                <div class="flex justify-center items-center">
                                    <a class="flex items-center text-primary whitespace-nowrap mr-5" href="javascript:;">
                                        <i data-lucide="check-square" class="w-4 h-4 mr-1"></i> View Details
                                    </a>
                                    <a class="flex items-center text-primary whitespace-nowrap" href="javascript:;" data-tw-toggle="modal" data-tw-target="#delete-confirmation-modal">
                                        <i data-lucide="arrow-left-right" class="w-4 h-4 mr-1"></i> Change Status
                                    </a>
                                </div>
                            </td>
                        </tr>
                                    </tbody>
            </table>
        </div>
        <!-- END: Data List -->
        <!-- BEGIN: Pagination -->
        <div class="intro-y col-span-12 flex flex-wrap sm:flex-row sm:flex-nowrap items-center">
            <nav class="w-full sm:w-auto sm:mr-auto">
                <ul class="pagination">
                    <li class="page-item">
                        <a class="page-link" href="#">
                            <i class="w-4 h-4" data-lucide="chevrons-left"></i>
                        </a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">
                            <i class="w-4 h-4" data-lucide="chevron-left"></i>
                        </a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">...</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">1</a>
                    </li>
                    <li class="page-item active">
                        <a class="page-link" href="#">2</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">3</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">...</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">
                            <i class="w-4 h-4" data-lucide="chevron-right"></i>
                        </a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">
                            <i class="w-4 h-4" data-lucide="chevrons-right"></i>
                        </a>
                    </li>
                </ul>
            </nav>
            <select class="w-20 form-select box mt-3 sm:mt-0">
                <option>10</option>
                <option>25</option>
                <option>35</option>
                <option>50</option>
            </select>
        </div>
        <!-- END: Pagination -->

<?=$this->endSection()?>