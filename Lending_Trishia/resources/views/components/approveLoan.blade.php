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
    <title>Approve Request</title>
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
                                APPROVE APPLICATION
                            </h6>
                        </div>
                    </div>
                    <div class="lg:px-16 xs:px-6 sm:px-6 md:px-10">
                    <div class="py-6">
                   
                    <form action="{{ url('addApprove') }}"  method="post">
                    @csrf

                 
                    <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3">
                        <div class="text-gray-600">
                            <p class="font-medium text-lg">Loan Approval</p>
                            <p>Please fill out all the fields.</p>
                        </div>
    
                        <div class="lg:col-span-2">
                            <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5">

                            <div class="md:col-span-5">
                                <label for="loanrequest_id">Loan Request ID.</label>
                                <input type="text" name="loanrequest_id" id="loanrequest_id" value="{{$info->id}}"
                                class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" />
                            </div>

                            <div class="md:col-span-5">
                                <label for="approveDate">Date</label>
                                <input type="date" name="approveDate" id="approveDate" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50">
                            </div>

                            <div class="md:col-span-5">
                                <label for="approveDate">Balance</label>
                                <input type="text" name="loanBalance" id="loanBalance" value="{{$info->totalAmount}}" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50">
                            </div>


                            <div class="md:col-span-5">
                                <label for="approveStatus" name="approveStatus" id="approveStatus">Status</label>
                                    <select class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" name="approveStatus" value="approveStatus">
                                    <option value="0"></option>
                                    <option value="Active">Active</option>
                                    <option value="Inactive">Inactive</option>
                                    </select>  
                            </div>

                            <div class="md:col-span-5 mt-10 text-right">
                                <div class="inline-flex items-end">
                                <button type="submit" class="bg-red-900 hover:bg-red-700 mr-4 text-white font-bold py-2 px-4 rounded">Approve</button>
                                <!--<a type="button" href="pendingrq" class="bg-gray-900 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">Cancel</a>-->
                            </div>  
                        </div>
                    </div>
                    </form>
                       
                    </div>
                </div>
                </div>   
            </div>            
        </div>
    </div>





</body>
</html>

