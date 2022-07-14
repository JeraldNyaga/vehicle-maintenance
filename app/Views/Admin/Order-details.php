<?= $this->extend('Admin/Layout')?>
<?= $this->section('content')?>

<div class="intro-y flex flex-col sm:flex-row items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Transaction Details</h2>
    </div>
    <!-- BEGIN: Transaction Details -->
    <div class="intro-y grid grid-cols-11 gap-5 mt-5">
        <div class="col-span-12 lg:col-span-4 2xl:col-span-3">
            <div class="box p-5 rounded-md">
                <div class="flex items-center border-b border-slate-200/60 dark:border-darkmode-400 pb-5 mb-5">
                    <div class="font-medium text-base truncate">Transaction Details</div>
                    <a href="" class="flex items-center ml-auto text-primary">
                        <i data-lucide="edit" class="w-4 h-4 mr-2"></i> Change Status
                    </a>
                </div>
                <div class="flex items-center">
                    <i data-lucide="clipboard" class="w-4 h-4 text-slate-500 mr-2"></i> Invoice: <a href="" class="underline decoration-dotted ml-1">INV/20220217/MPL/2053411933</a>
                </div>
                <div class="flex items-center mt-3">
                    <i data-lucide="calendar" class="w-4 h-4 text-slate-500 mr-2"></i> Purchase Date: 24 March 2022
                </div>
                <div class="flex items-center mt-3">
                    <i data-lucide="clock" class="w-4 h-4 text-slate-500 mr-2"></i> Transaction Status: <span class="bg-success/20 text-success rounded px-2 ml-1">Completed</span>
                </div>
            </div>
            <div class="box p-5 rounded-md mt-5">
                <div class="flex items-center border-b border-slate-200/60 dark:border-darkmode-400 pb-5 mb-5">
                    <div class="font-medium text-base truncate">Buyer Details</div>
                    <a href="" class="flex items-center ml-auto text-primary">
                        <i data-lucide="edit" class="w-4 h-4 mr-2"></i> View Details
                    </a>
                </div>
                <div class="flex items-center">
                    <i data-lucide="clipboard" class="w-4 h-4 text-slate-500 mr-2"></i> Name: <a href="" class="underline decoration-dotted ml-1">Brad Pitt</a>
                </div>
                <div class="flex items-center mt-3">
                    <i data-lucide="calendar" class="w-4 h-4 text-slate-500 mr-2"></i> Phone Number: +71828273732
                </div>
                <div class="flex items-center mt-3">
                    <i data-lucide="map-pin" class="w-4 h-4 text-slate-500 mr-2"></i> Address: 260 W. Storm Street New York, NY 10025.
                </div>
            </div>
            <div class="box p-5 rounded-md mt-5">
                <div class="flex items-center border-b border-slate-200/60 dark:border-darkmode-400 pb-5 mb-5">
                    <div class="font-medium text-base truncate">Payment Details</div>
                </div>
                <div class="flex items-center">
                    <i data-lucide="clipboard" class="w-4 h-4 text-slate-500 mr-2"></i> Payment Method: <div class="ml-auto">Direct bank transfer</div>
                </div>
                <div class="flex items-center mt-3">
                    <i data-lucide="credit-card" class="w-4 h-4 text-slate-500 mr-2"></i> Total Price (2 items): <div class="ml-auto">$12,500.00</div>
                </div>
                <div class="flex items-center mt-3">
                    <i data-lucide="credit-card" class="w-4 h-4 text-slate-500 mr-2"></i> Total Shipping Cost (800 gr): <div class="ml-auto">$1,500.00</div>
                </div>
                <div class="flex items-center mt-3">
                    <i data-lucide="credit-card" class="w-4 h-4 text-slate-500 mr-2"></i> Shipping Insurance: <div class="ml-auto">$600.00</div>
                </div>
                <div class="flex items-center border-t border-slate-200/60 dark:border-darkmode-400 pt-5 mt-5 font-medium">
                    <i data-lucide="credit-card" class="w-4 h-4 text-slate-500 mr-2"></i> Grand Total: <div class="ml-auto">$15,000.00</div>
                </div>
            </div>
            <div class="box p-5 rounded-md mt-5">
                <div class="flex items-center border-b border-slate-200/60 dark:border-darkmode-400 pb-5 mb-5">
                    <div class="font-medium text-base truncate">Shipping Information</div>
                    <a href="" class="flex items-center ml-auto text-primary">
                        <i data-lucide="map-pin" class="w-4 h-4 mr-2"></i> Tracking Info
                    </a>
                </div>
                <div class="flex items-center">
                    <i data-lucide="clipboard" class="w-4 h-4 text-slate-500 mr-2"></i> Courier: Left4code Express
                </div>
                <div class="flex items-center mt-3">
                    <i data-lucide="calendar" class="w-4 h-4 text-slate-500 mr-2"></i> Tracking Number: 003005580322 <i data-lucide="copy" class="w-4 h-4 text-slate-500 ml-2"></i>
                </div>
                <div class="flex items-center mt-3">
                    <i data-lucide="map-pin" class="w-4 h-4 text-slate-500 mr-2"></i> Address: 260 W. Storm Street New York, NY 10025.
                </div>
            </div>
        </div>
        <div class="col-span-12 lg:col-span-7 2xl:col-span-8">
            <div class="box p-5 rounded-md">
                <div class="flex items-center border-b border-slate-200/60 dark:border-darkmode-400 pb-5 mb-5">
                    <div class="font-medium text-base truncate">Order Details</div>
                    <a href="" class="flex items-center ml-auto text-primary">
                        <i data-lucide="plus" class="w-4 h-4 mr-2"></i> Add Notes
                    </a>
                </div>
                <div class="overflow-auto lg:overflow-visible -mt-3">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th class="whitespace-nowrap !py-5">Product</th>
                                <th class="whitespace-nowrap text-right">Unit Price</th>
                                <th class="whitespace-nowrap text-right">Qty</th>
                                <th class="whitespace-nowrap text-right">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                                                            <tr>
                                    <td class="!py-4">
                                        <div class="flex items-center">
                                            <div class="w-10 h-10 image-fit zoom-in">
                                                <img alt="Midone - HTML Admin Template" class="rounded-lg border-2 border-white shadow-md tooltip" src="http://rubick-laravel.left4code.com/dist/images/preview-12.jpg" title="Uploaded at 1 July 2020">
                                            </div>
                                            <a href="" class="font-medium whitespace-nowrap ml-4">Oppo Find X2 Pro</a>
                                        </div>
                                    </td>
                                    <td class="text-right">$42,000.00</td>
                                    <td class="text-right">2</td>
                                    <td class="text-right">$84,000.00</td>
                                </tr>
                                                            <tr>
                                    <td class="!py-4">
                                        <div class="flex items-center">
                                            <div class="w-10 h-10 image-fit zoom-in">
                                                <img alt="Midone - HTML Admin Template" class="rounded-lg border-2 border-white shadow-md tooltip" src="http://rubick-laravel.left4code.com/dist/images/preview-6.jpg" title="Uploaded at 1 July 2022">
                                            </div>
                                            <a href="" class="font-medium whitespace-nowrap ml-4">Nike Tanjun</a>
                                        </div>
                                    </td>
                                    <td class="text-right">$65,000.00</td>
                                    <td class="text-right">2</td>
                                    <td class="text-right">$130,000.00</td>
                                </tr>
                                                            <tr>
                                    <td class="!py-4">
                                        <div class="flex items-center">
                                            <div class="w-10 h-10 image-fit zoom-in">
                                                <img alt="Midone - HTML Admin Template" class="rounded-lg border-2 border-white shadow-md tooltip" src="http://rubick-laravel.left4code.com/dist/images/preview-13.jpg" title="Uploaded at 12 April 2022">
                                            </div>
                                            <a href="" class="font-medium whitespace-nowrap ml-4">Oppo Find X2 Pro</a>
                                        </div>
                                    </td>
                                    <td class="text-right">$49,000.00</td>
                                    <td class="text-right">2</td>
                                    <td class="text-right">$98,000.00</td>
                                </tr>
                                                            <tr>
                                    <td class="!py-4">
                                        <div class="flex items-center">
                                            <div class="w-10 h-10 image-fit zoom-in">
                                                <img alt="Midone - HTML Admin Template" class="rounded-lg border-2 border-white shadow-md tooltip" src="http://rubick-laravel.left4code.com/dist/images/preview-11.jpg" title="Uploaded at 28 October 2021">
                                            </div>
                                            <a href="" class="font-medium whitespace-nowrap ml-4">Sony A7 III</a>
                                        </div>
                                    </td>
                                    <td class="text-right">$21,000.00</td>
                                    <td class="text-right">2</td>
                                    <td class="text-right">$42,000.00</td>
                                </tr>
                                                            <tr>
                                    <td class="!py-4">
                                        <div class="flex items-center">
                                            <div class="w-10 h-10 image-fit zoom-in">
                                                <img alt="Midone - HTML Admin Template" class="rounded-lg border-2 border-white shadow-md tooltip" src="http://rubick-laravel.left4code.com/dist/images/preview-14.jpg" title="Uploaded at 11 February 2022">
                                            </div>
                                            <a href="" class="font-medium whitespace-nowrap ml-4">Nikon Z6</a>
                                        </div>
                                    </td>
                                    <td class="text-right">$60,000.00</td>
                                    <td class="text-right">2</td>
                                    <td class="text-right">$120,000.00</td>
                                </tr>
                                                            <tr>
                                    <td class="!py-4">
                                        <div class="flex items-center">
                                            <div class="w-10 h-10 image-fit zoom-in">
                                                <img alt="Midone - HTML Admin Template" class="rounded-lg border-2 border-white shadow-md tooltip" src="http://rubick-laravel.left4code.com/dist/images/preview-10.jpg" title="Uploaded at 10 December 2020">
                                            </div>
                                            <a href="" class="font-medium whitespace-nowrap ml-4">Nike Air Max 270</a>
                                        </div>
                                    </td>
                                    <td class="text-right">$187,000.00</td>
                                    <td class="text-right">2</td>
                                    <td class="text-right">$374,000.00</td>
                                </tr>
                                                            <tr>
                                    <td class="!py-4">
                                        <div class="flex items-center">
                                            <div class="w-10 h-10 image-fit zoom-in">
                                                <img alt="Midone - HTML Admin Template" class="rounded-lg border-2 border-white shadow-md tooltip" src="http://rubick-laravel.left4code.com/dist/images/preview-12.jpg" title="Uploaded at 18 August 2020">
                                            </div>
                                            <a href="" class="font-medium whitespace-nowrap ml-4">Oppo Find X2 Pro</a>
                                        </div>
                                    </td>
                                    <td class="text-right">$120,000.00</td>
                                    <td class="text-right">2</td>
                                    <td class="text-right">$240,000.00</td>
                                </tr>
                                                            <tr>
                                    <td class="!py-4">
                                        <div class="flex items-center">
                                            <div class="w-10 h-10 image-fit zoom-in">
                                                <img alt="Midone - HTML Admin Template" class="rounded-lg border-2 border-white shadow-md tooltip" src="http://rubick-laravel.left4code.com/dist/images/preview-4.jpg" title="Uploaded at 7 September 2020">
                                            </div>
                                            <a href="" class="font-medium whitespace-nowrap ml-4">Nikon Z6</a>
                                        </div>
                                    </td>
                                    <td class="text-right">$183,000.00</td>
                                    <td class="text-right">2</td>
                                    <td class="text-right">$366,000.00</td>
                                </tr>
                                                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Transaction Details -->

<?=$this->endSection()?>