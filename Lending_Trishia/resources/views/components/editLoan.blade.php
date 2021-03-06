<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Proza+Libre:wght@500;600&family=Roboto&family=Roboto+Condensed:wght@400;700&family=Ropa+Sans&display=swap"
    rel="stylesheet">
    <link rel="stylesheet" href="./styles.css">
    <link rel="stylesheet" href="css/app.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Loan Request| Edit</title>
</head>

<body class="bg-gray-100">



    <div class="relative min-h-screen md:flex">
        <div class="flex-1  w-full items-center justify-center">
            <div class="bg-secondarycolor flex justify-between  items-center lg:p-4 xs:p-4 sm:p-3 md:p-3">
                <div class="flex items-center ">
                    <h2 class="font-bold text-black lg:ml-12 xs:ml-2 mr-2">DVOFINDS</h2>
                </div>
                <div class="md:flex justify-end items items-center lg:inline-flex lg:flex-row lg:w-auto" id="navigation">
                    <a class="font-bold text-right">LENDING SYSTEM</a>
                </div>
            </div>
            <div class="p-8 ">
            </div>
            <div class="flex mx-16 gap-4">
                <div class="bg-thirdcolor lg:w-3/4 mx-auto shadow-xl rounded-md mb-16">
                    <div class="rounded-t bg-white mb-0 px-6 py-4">
                        <div class="text-center flex justify-between">
                            <h6 class="text-blueGray-700 text-xl font-bold">
                                LOAN INFORMATION
                            </h6>
                        </div>
                    </div>
                    <div class="lg:px-16 xs:px-6 sm:px-6 md:px-10">
                        <div class="py-6">

                <form action="{{ route('updateLoan') }}" method="post">
                    @csrf

                    <input type="hidden" name="lid" value="{{$info->id}}">  
                    <div class="flex justify-start my-6">
                        <div class=" w-1/2 px-1 mt-2">
                            <label class="text-gray-600 font-semibold">ID No.</label>
                            <input type="text" placeholder="" class="w-full mt-2 mb-2 px-4 lg:py-2 xs:py-1 sm:py-1 border rounded-md
                                text-gray-600 shadow focus:outline-none focus:border-green-500" name="borrowers_id"
                                value="{{$info->borrowers_id}}" />
                        </div>
                        <div class=" w-1/2 px-1 mt-2">
                            <label class="text-gray-600 font-semibold">Loan Date</label>
                            <input type="text" placeholder="" class="w-full mt-2 mb-2 px-4 lg:py-2 xs:py-1 sm:py-1 border rounded-md
                                text-gray-600 shadow focus:outline-none focus:border-green-500" name="loanDate"
                                value="{{$info->loanDate}}"/>
                        </div>
                    </div>
                    <div class="flex">
                        <div class=" w-1/2 px-1 mt-0">
                            <label class="text-gray-600 font-semibold ">Loan Type</label>
                            <select class="form-control w-full mt-2 mb-2 px-4 lg:py-2 xs:py-1 sm:py-1 border rounded-md
                            text-gray-600 shadow focus:outline-none focus:border-green-500" id="loanType"  value="{{$info->loanType}}" name="loanType">
                            <option value="0" @if($info->loanType == '') ? selected : null @endif disabled></option>
                            <option value="Emergency Loan" @if($info->loanType == 'Emergency Loan') ? selected : null @endif>Emergency Loan</option>
                            <option value="Educational Loan" @if($info->loanType == 'Educational Loan') ? selected : null @endif>Educational Loan</option>
                            <option value="Personal Loan" @if($info->loanType == 'Personal Loan') ? selected : null @endif>Personal Loan</option>
                            </select>
                        </div>
                        <div class=" w-1/2 px-1 mt-0">
                            <label class="text-gray-600 font-semibold ">Loan Amount</label>
                            <input type="text" placeholder="" class="w-full mt-2 mb-2 px-4 lg:py-2 xs:py-1 sm:py-1 border rounded-md
                                text-gray-600 shadow focus:outline-none focus:border-green-500" name="loanAmount"
                                value="{{$info->loanAmount}}" id="loanAmount"/>
                        </div>
                    </div>
                    <div class="flex">
                        <div class=" w-1/2 px-1 mt-0">
                            <label class="text-gray-600 font-semibold ">Months</label>
                            <input type="text" placeholder="" name="loanMonth" id="loanMonth" value="{{$info->loanMonth}}" name="loanMonth"
                                class="w-full mt-2 mb-2 px-4 lg:py-2 xs:py-1 sm:py-1 border rounded-md text-gray-600 shadow focus:outline-none
                                focus:border-green-500"/>
                        </div>
                        <div class=" w-1/2 px-1 mt-0">
                            <label class="text-gray-600 font-semibold ">Interest</label>
                            <input type="text" placeholder="" name="loanInterest" id="loanInterest" value="{{$info->loanInterest}}" name="loanInterest"
                                class="w-full mt-2 mb-2 px-4 lg:py-2 xs:py-1 sm:py-1 border rounded-md text-gray-600 shadow focus:outline-none
                                focus:border-green-500"/>
                        </div>
                    </div>
                        <div class="flex justify-between">
                            <div class=" w-1/2 px-1 mt-0">
                                <label class="text-gray-600 font-semibold ">Purpose</label>
                                <input type="text" placeholder="" value="{{$info->loanPurpose}}" name="loanPurpose" class="shadow w-full mt-2 mb-2 px-4 lg:py-2 xs:py-1 sm:py-1 border rounded-md text-gray-600 focus:outline-none focus:border-green-500"/>
                            </div>
                        </div>
                        <hr class="mx-18 my-4">
                    <div class="flex">
                            <div class=" w-1/2 px-1 mt-0">
                                <label class="text-gray-600 font-semibold ">Total Loan Amount</label>
                                <input type="text" class="w-full mt-2 mb-2 px-4 lg:py-2 xs:py-1 sm:py-1 border rounded-md
                                    text-gray-600 focus:outline-none shadow focus:border-green-500" name="totalAmount" value="{{$info->totalAmount}}" id="totalAmount" />
                            </div>
                            <div class=" w-1/2 px-1 mt-0">
                                <label class="text-gray-600 font-semibold">Monthly Payable Amount</label>
                                <input type="text"  class="w-full mt-2 mb-2 px-4 lg:py-2 xs:py-1 sm:py-1 border rounded-md
                                    text-gray-600 focus:outline-none shadow focus:border-green-500" name="monthlyPay" value="{{$info->monthlyPay}}" id="monthlyPay"  />
                            </div>
                    </div>
                    <hr class="mx-18 mt-4">
                </div>
            </div>
        </div>
                    <!--2nd Part-->
                    <div class="flex flex-col lg:w-1/4 mx-auto rounded-md">
                        <div class="lg:px-16 xs:px-6 sm:px-6 md:px-10">
                            <div class="py-6">
                                <button type="submit" name="updateLoan" class="py-1 px-12 bg-blue-800 hover:bg-blue-600 rounded-md
                                text-center text-white font-bold uppercase text-lg mb-5">UPDATE</button>
                                <button href="pendingrq" class="py-1 px-12 bg-gray-800 hover:bg-gray-600 rounded-md 
                                text-center text-white font-bold uppercase text-lg">CANCEL</button>
                            </div>  
                     </form>
                    </div>
                </div>
            </div>            
        </div>
    </div>





</body>
</html>

