<?= $this->extend('Admin/Layout')?>
<?= $this->section('content')?>

<!-- BEGIN: Data List -->
<div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
    <table class="table table-report -mt-2">
        <thead>
            <tr>
                <th class="whitespace-nowrap">IMAGES</th>
                <th class="whitespace-nowrap">PRODUCT NAME</th>
                <th class="text-center whitespace-nowrap">STOCK</th>
                <th class="text-center whitespace-nowrap">PRICE</th>
                <th class="text-center whitespace-nowrap">STATUS</th>
                <th class="text-center whitespace-nowrap">ACTIONS</th>
            </tr>
        </thead>
        <tbody>
            <tr class="intro-x">
                <td class="w-40">
                    <div class="flex">
                        <div class="w-10 h-10 image-fit zoom-in">
                            <img alt="Midone - HTML Admin Template" class="tooltip rounded-full" src="http://rubick-laravel.left4code.com/dist/images/preview-10.jpg" title="Uploaded at 29 October 2022">
                        </div>
                        <div class="w-10 h-10 image-fit zoom-in -ml-5">
                            <img alt="Midone - HTML Admin Template" class="tooltip rounded-full" src="http://rubick-laravel.left4code.com/dist/images/preview-5.jpg" title="Uploaded at 29 October 2022">
                        </div>
                        <div class="w-10 h-10 image-fit zoom-in -ml-5">
                            <img alt="Midone - HTML Admin Template" class="tooltip rounded-full" src="http://rubick-laravel.left4code.com/dist/images/preview-8.jpg" title="Uploaded at 29 October 2022">
                        </div>
                    </div>
                </td>
                <td>
                    <a href="" class="font-medium whitespace-nowrap">Sony A7 III</a>
                    <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">Photography</div>
                </td>
                <td class="text-center">50</td>
                <td class="text-center">$128</td>
                <td class="w-40">
                    <div class="flex items-center justify-center text-success">
                        <i data-lucide="check-square" class="w-4 h-4 mr-2"></i> Active
                    </div>
                </td>
                <td class="table-report__action w-56">
                    <div class="flex justify-center items-center">
                        <a class="flex items-center mr-3" href="javascript:;">
                            <i data-lucide="check-square" class="w-4 h-4 mr-1"></i> Edit
                        </a>
                        <a class="flex items-center text-danger" href="javascript:;" data-tw-toggle="modal" data-tw-target="#delete-confirmation-modal">
                            <i data-lucide="trash-2" class="w-4 h-4 mr-1"></i> Delete
                        </a>
                    </div>
                </td>
            </tr>
            <tr class="intro-x">
                <td class="w-40">
                    <div class="flex">
                        <div class="w-10 h-10 image-fit zoom-in">
                            <img alt="Midone - HTML Admin Template" class="tooltip rounded-full" src="http://rubick-laravel.left4code.com/dist/images/preview-11.jpg" title="Uploaded at 29 June 2022">
                        </div>
                        <div class="w-10 h-10 image-fit zoom-in -ml-5">
                            <img alt="Midone - HTML Admin Template" class="tooltip rounded-full" src="http://rubick-laravel.left4code.com/dist/images/preview-13.jpg" title="Uploaded at 29 June 2022">
                        </div>
                        <div class="w-10 h-10 image-fit zoom-in -ml-5">
                            <img alt="Midone - HTML Admin Template" class="tooltip rounded-full" src="http://rubick-laravel.left4code.com/dist/images/preview-12.jpg" title="Uploaded at 29 June 2022">
                        </div>
                    </div>
                </td>
                <td>
                    <a href="" class="font-medium whitespace-nowrap">Nikon Z6</a>
                    <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">Photography</div>
                </td>
                <td class="text-center">50</td>
                <td class="text-center">$188</td>
                <td class="w-40">
                    <div class="flex items-center justify-center text-success">
                        <i data-lucide="check-square" class="w-4 h-4 mr-2"></i> Active
                    </div>
                </td>
                <td class="table-report__action w-56">
                    <div class="flex justify-center items-center">
                        <a class="flex items-center mr-3" href="javascript:;">
                            <i data-lucide="check-square" class="w-4 h-4 mr-1"></i> Edit
                        </a>
                        <a class="flex items-center text-danger" href="javascript:;" data-tw-toggle="modal" data-tw-target="#delete-confirmation-modal">
                            <i data-lucide="trash-2" class="w-4 h-4 mr-1"></i> Delete
                        </a>
                    </div>
                </td>
            </tr>
            <tr class="intro-x">
                <td class="w-40">
                    <div class="flex">
                        <div class="w-10 h-10 image-fit zoom-in">
                            <img alt="Midone - HTML Admin Template" class="tooltip rounded-full" src="http://rubick-laravel.left4code.com/dist/images/preview-1.jpg" title="Uploaded at 28 October 2022">
                        </div>
                        <div class="w-10 h-10 image-fit zoom-in -ml-5">
                            <img alt="Midone - HTML Admin Template" class="tooltip rounded-full" src="http://rubick-laravel.left4code.com/dist/images/preview-7.jpg" title="Uploaded at 28 October 2022">
                        </div>
                        <div class="w-10 h-10 image-fit zoom-in -ml-5">
                            <img alt="Midone - HTML Admin Template" class="tooltip rounded-full" src="http://rubick-laravel.left4code.com/dist/images/preview-2.jpg" title="Uploaded at 28 October 2022">
                        </div>
                    </div>
                </td>
                <td>
                    <a href="" class="font-medium whitespace-nowrap">Samsung Q90 QLED TV</a>
                    <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">Electronic</div>
                </td>
                <td class="text-center">188</td>
                <td class="text-center">$83</td>
                <td class="w-40">
                    <div class="flex items-center justify-center text-success">
                        <i data-lucide="check-square" class="w-4 h-4 mr-2"></i> Active
                    </div>
                </td>
                <td class="table-report__action w-56">
                    <div class="flex justify-center items-center">
                        <a class="flex items-center mr-3" href="javascript:;">
                            <i data-lucide="check-square" class="w-4 h-4 mr-1"></i> Edit
                        </a>
                        <a class="flex items-center text-danger" href="javascript:;" data-tw-toggle="modal" data-tw-target="#delete-confirmation-modal">
                            <i data-lucide="trash-2" class="w-4 h-4 mr-1"></i> Delete
                        </a>
                    </div>
                </td>
            </tr>
            <tr class="intro-x">
                <td class="w-40">
                    <div class="flex">
                        <div class="w-10 h-10 image-fit zoom-in">
                            <img alt="Midone - HTML Admin Template" class="tooltip rounded-full" src="http://rubick-laravel.left4code.com/dist/images/preview-8.jpg" title="Uploaded at 2 October 2021">
                        </div>
                        <div class="w-10 h-10 image-fit zoom-in -ml-5">
                            <img alt="Midone - HTML Admin Template" class="tooltip rounded-full" src="http://rubick-laravel.left4code.com/dist/images/preview-8.jpg" title="Uploaded at 2 October 2021">
                        </div>
                        <div class="w-10 h-10 image-fit zoom-in -ml-5">
                            <img alt="Midone - HTML Admin Template" class="tooltip rounded-full" src="http://rubick-laravel.left4code.com/dist/images/preview-1.jpg" title="Uploaded at 2 October 2021">
                        </div>
                    </div>
                </td>
                <td>
                    <a href="" class="font-medium whitespace-nowrap">Sony A7 III</a>
                    <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">Photography</div>
                </td>
                <td class="text-center">59</td>
                <td class="text-center">$58</td>
                <td class="w-40">
                    <div class="flex items-center justify-center text-success">
                        <i data-lucide="check-square" class="w-4 h-4 mr-2"></i> Active
                    </div>
                </td>
                <td class="table-report__action w-56">
                    <div class="flex justify-center items-center">
                        <a class="flex items-center mr-3" href="javascript:;">
                            <i data-lucide="check-square" class="w-4 h-4 mr-1"></i> Edit
                        </a>
                        <a class="flex items-center text-danger" href="javascript:;" data-tw-toggle="modal" data-tw-target="#delete-confirmation-modal">
                            <i data-lucide="trash-2" class="w-4 h-4 mr-1"></i> Delete
                        </a>
                    </div>
                </td>
            </tr>
            <tr class="intro-x">
                <td class="w-40">
                    <div class="flex">
                        <div class="w-10 h-10 image-fit zoom-in">
                            <img alt="Midone - HTML Admin Template" class="tooltip rounded-full" src="http://rubick-laravel.left4code.com/dist/images/preview-15.jpg" title="Uploaded at 24 November 2021">
                        </div>
                        <div class="w-10 h-10 image-fit zoom-in -ml-5">
                            <img alt="Midone - HTML Admin Template" class="tooltip rounded-full" src="http://rubick-laravel.left4code.com/dist/images/preview-13.jpg" title="Uploaded at 24 November 2021">
                        </div>
                        <div class="w-10 h-10 image-fit zoom-in -ml-5">
                            <img alt="Midone - HTML Admin Template" class="tooltip rounded-full" src="http://rubick-laravel.left4code.com/dist/images/preview-8.jpg" title="Uploaded at 24 November 2021">
                        </div>
                    </div>
                </td>
                <td>
                    <a href="" class="font-medium whitespace-nowrap">Sony A7 III</a>
                    <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">Photography</div>
                </td>
                <td class="text-center">92</td>
                <td class="text-center">$43</td>
                <td class="w-40">
                    <div class="flex items-center justify-center text-success">
                        <i data-lucide="check-square" class="w-4 h-4 mr-2"></i> Active
                    </div>
                </td>
                <td class="table-report__action w-56">
                    <div class="flex justify-center items-center">
                        <a class="flex items-center mr-3" href="javascript:;">
                            <i data-lucide="check-square" class="w-4 h-4 mr-1"></i> Edit
                        </a>
                        <a class="flex items-center text-danger" href="javascript:;" data-tw-toggle="modal" data-tw-target="#delete-confirmation-modal">
                            <i data-lucide="trash-2" class="w-4 h-4 mr-1"></i> Delete
                        </a>
                    </div>
                </td>
            </tr>
            <tr class="intro-x">
                <td class="w-40">
                    <div class="flex">
                        <div class="w-10 h-10 image-fit zoom-in">
                            <img alt="Midone - HTML Admin Template" class="tooltip rounded-full" src="http://rubick-laravel.left4code.com/dist/images/preview-3.jpg" title="Uploaded at 21 September 2020">
                        </div>
                        <div class="w-10 h-10 image-fit zoom-in -ml-5">
                            <img alt="Midone - HTML Admin Template" class="tooltip rounded-full" src="http://rubick-laravel.left4code.com/dist/images/preview-12.jpg" title="Uploaded at 21 September 2020">
                        </div>
                        <div class="w-10 h-10 image-fit zoom-in -ml-5">
                            <img alt="Midone - HTML Admin Template" class="tooltip rounded-full" src="http://rubick-laravel.left4code.com/dist/images/preview-12.jpg" title="Uploaded at 21 September 2020">
                        </div>
                    </div>
                </td>
                <td>
                    <a href="" class="font-medium whitespace-nowrap">Sony A7 III</a>
                    <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">Photography</div>
                </td>
                <td class="text-center">50</td>
                <td class="text-center">$31</td>
                <td class="w-40">
                    <div class="flex items-center justify-center text-success">
                        <i data-lucide="check-square" class="w-4 h-4 mr-2"></i> Active
                    </div>
                </td>
                <td class="table-report__action w-56">
                    <div class="flex justify-center items-center">
                        <a class="flex items-center mr-3" href="javascript:;">
                            <i data-lucide="check-square" class="w-4 h-4 mr-1"></i> Edit
                        </a>
                        <a class="flex items-center text-danger" href="javascript:;" data-tw-toggle="modal" data-tw-target="#delete-confirmation-modal">
                            <i data-lucide="trash-2" class="w-4 h-4 mr-1"></i> Delete
                        </a>
                    </div>
                </td>
            </tr>
            <tr class="intro-x">
                <td class="w-40">
                    <div class="flex">
                        <div class="w-10 h-10 image-fit zoom-in">
                            <img alt="Midone - HTML Admin Template" class="tooltip rounded-full" src="http://rubick-laravel.left4code.com/dist/images/preview-3.jpg" title="Uploaded at 20 September 2022">
                        </div>
                        <div class="w-10 h-10 image-fit zoom-in -ml-5">
                            <img alt="Midone - HTML Admin Template" class="tooltip rounded-full" src="http://rubick-laravel.left4code.com/dist/images/preview-8.jpg" title="Uploaded at 20 September 2022">
                        </div>
                        <div class="w-10 h-10 image-fit zoom-in -ml-5">
                            <img alt="Midone - HTML Admin Template" class="tooltip rounded-full" src="http://rubick-laravel.left4code.com/dist/images/preview-14.jpg" title="Uploaded at 20 September 2022">
                        </div>
                    </div>
                </td>
                <td>
                    <a href="" class="font-medium whitespace-nowrap">Sony A7 III</a>
                    <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">Photography</div>
                </td>
                <td class="text-center">179</td>
                <td class="text-center">$103</td>
                <td class="w-40">
                    <div class="flex items-center justify-center text-success">
                        <i data-lucide="check-square" class="w-4 h-4 mr-2"></i> Active
                    </div>
                </td>
                <td class="table-report__action w-56">
                    <div class="flex justify-center items-center">
                        <a class="flex items-center mr-3" href="javascript:;">
                            <i data-lucide="check-square" class="w-4 h-4 mr-1"></i> Edit
                        </a>
                        <a class="flex items-center text-danger" href="javascript:;" data-tw-toggle="modal" data-tw-target="#delete-confirmation-modal">
                            <i data-lucide="trash-2" class="w-4 h-4 mr-1"></i> Delete
                        </a>
                    </div>
                </td>
            </tr>
            <tr class="intro-x">
                <td class="w-40">
                    <div class="flex">
                        <div class="w-10 h-10 image-fit zoom-in">
                            <img alt="Midone - HTML Admin Template" class="tooltip rounded-full" src="http://rubick-laravel.left4code.com/dist/images/preview-9.jpg" title="Uploaded at 18 May 2021">
                        </div>
                        <div class="w-10 h-10 image-fit zoom-in -ml-5">
                            <img alt="Midone - HTML Admin Template" class="tooltip rounded-full" src="http://rubick-laravel.left4code.com/dist/images/preview-6.jpg" title="Uploaded at 18 May 2021">
                        </div>
                        <div class="w-10 h-10 image-fit zoom-in -ml-5">
                            <img alt="Midone - HTML Admin Template" class="tooltip rounded-full" src="http://rubick-laravel.left4code.com/dist/images/preview-15.jpg" title="Uploaded at 18 May 2021">
                        </div>
                    </div>
                </td>
                <td>
                    <a href="" class="font-medium whitespace-nowrap">Samsung Q90 QLED TV</a>
                    <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">Electronic</div>
                </td>
                <td class="text-center">121</td>
                <td class="text-center">$34</td>
                <td class="w-40">
                    <div class="flex items-center justify-center text-success">
                        <i data-lucide="check-square" class="w-4 h-4 mr-2"></i> Active
                    </div>
                </td>
                <td class="table-report__action w-56">
                    <div class="flex justify-center items-center">
                        <a class="flex items-center mr-3" href="javascript:;">
                            <i data-lucide="check-square" class="w-4 h-4 mr-1"></i> Edit
                        </a>
                        <a class="flex items-center text-danger" href="javascript:;" data-tw-toggle="modal" data-tw-target="#delete-confirmation-modal">
                            <i data-lucide="trash-2" class="w-4 h-4 mr-1"></i> Delete
                        </a>
                    </div>
                </td>
            </tr>
            <tr class="intro-x">
                <td class="w-40">
                    <div class="flex">
                        <div class="w-10 h-10 image-fit zoom-in">
                            <img alt="Midone - HTML Admin Template" class="tooltip rounded-full" src="http://rubick-laravel.left4code.com/dist/images/preview-12.jpg" title="Uploaded at 27 August 2022">
                        </div>
                        <div class="w-10 h-10 image-fit zoom-in -ml-5">
                            <img alt="Midone - HTML Admin Template" class="tooltip rounded-full" src="http://rubick-laravel.left4code.com/dist/images/preview-8.jpg" title="Uploaded at 27 August 2022">
                        </div>
                        <div class="w-10 h-10 image-fit zoom-in -ml-5">
                            <img alt="Midone - HTML Admin Template" class="tooltip rounded-full" src="http://rubick-laravel.left4code.com/dist/images/preview-14.jpg" title="Uploaded at 27 August 2022">
                        </div>
                    </div>
                </td>
                <td>
                    <a href="" class="font-medium whitespace-nowrap">Oppo Find X2 Pro</a>
                    <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">Smartphone &amp; Tablet</div>
                </td>
                <td class="text-center">50</td>
                <td class="text-center">$39</td>
                <td class="w-40">
                    <div class="flex items-center justify-center text-success">
                        <i data-lucide="check-square" class="w-4 h-4 mr-2"></i> Active
                    </div>
                </td>
                <td class="table-report__action w-56">
                    <div class="flex justify-center items-center">
                        <a class="flex items-center mr-3" href="javascript:;">
                            <i data-lucide="check-square" class="w-4 h-4 mr-1"></i> Edit
                        </a>
                        <a class="flex items-center text-danger" href="javascript:;" data-tw-toggle="modal" data-tw-target="#delete-confirmation-modal">
                            <i data-lucide="trash-2" class="w-4 h-4 mr-1"></i> Delete
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

<!-- BEGIN: Delete Confirmation Modal -->
<div id="delete-confirmation-modal" class="modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body p-0">
                <div class="p-5 text-center">
                    <i data-lucide="x-circle" class="w-16 h-16 text-danger mx-auto mt-3"></i>
                    <div class="text-3xl mt-5">Are you sure?</div>
                    <div class="text-slate-500 mt-2">Do you really want to delete these records? <br>This process cannot be undone.</div>
                </div>
                <div class="px-5 pb-8 text-center">
                    <button type="button" data-tw-dismiss="modal" class="btn btn-outline-secondary w-24 mr-1">Cancel</button>
                    <button type="button" class="btn btn-danger w-24">Delete</button>
                </div>
            </div>
        </div>
    </div>
</div>




<?=$this->endSection()?>