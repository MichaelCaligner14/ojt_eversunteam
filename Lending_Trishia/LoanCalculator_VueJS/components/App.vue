<template>
   <div class="flex justify-center min-h-screen bg-gray-100">  
  <div class="container mt-12 my-auto max-w-md border-2 border-gray-200 p-3 bg-white">
    <!-- header -->  
    <div class="text-center my-3">
      <h1 class="text-3xl font-semibold text-gray-700">LOAN CALCULATOR</h1>
     
    </div>
    <div class="m-6">

      <form>
        <div class="mb-3">
          <label for="loanAmount" class="block mb-2 text-sm text-gray-600 dark:text-gray-400">Loan Amount</label>
          <input v-model="loanAmount" id="loanAmount" type="text" placeholder="Your loan amount" class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500" />
        </div>
        <div class="mb-3">
          <div class="flex justify-between mb-2">
            <label for="iRate" class="text-sm text-gray-600 dark:text-gray-400">Interest Rate</label>
          </div>
          <input v-model="iRate" id="iRate" type="text"  placeholder="Your interest rate" class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500" />
        </div>
        <div class="mb-3">
          <div class="flex justify-between mb-2">
            <label for="termsOfPayment" class="text-sm text-gray-600 dark:text-gray-400">Terms of Payment</label>
          </div>
          <input v-model="termsOfPayment" id="termsOfPayment" type="text" placeholder="Your terms of payment" class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500" />
        </div>
        <div class="mb-3">
          <button type="button" v-on:click="calc"  class="w-full px-3 py-2 text-white bg-indigo-500 rounded-md hover:bg-indigo-600 focus:outline-none duration-100 ease-in-out">COMPUTE</button>
        </div>
      </form>

     <div class="mb-3">
          <div class="flex justify-between mb-2">
            <label for="totalAmount" class="text-sm text-gray-600 dark:text-gray-400">Total Loan Amount</label>
          </div>
        <div class="totalAmount">
          {{ totalAmount }}</div>
        </div>
        <div class="mb-3">
          <div class="flex justify-between mb-2">
            <label for="monthlyPay" class="text-sm text-gray-600 dark:text-gray-400">Monthly Amount</label>
          </div>
          <div class="monthlyPay">
            {{ monthlyPay }}</div>
        </div>
    </div>
  </div>
</div>
</template>

<script>
export default {
    data () {
		return {
			loanAmount: '',
			iRate: '',
			termsOfPayment: '',
			totalAmount: 0,
			monthlyPay: 0
		}
	},
	methods: {
		calc: function () {
			if (this.iRate !== "" && this.loanAmount !== "" && this.termsOfPayment !== "") {
				const Rate = +this.loanAmount * (+this.iRate / 100);
				this.totalAmount = +this.loanAmount + (Rate * +this.termsOfPayment);
        this.monthlyPay = this.totalAmount / this.termsOfPayment;
			}
		}
	}
}
</script>

<style>
</style>