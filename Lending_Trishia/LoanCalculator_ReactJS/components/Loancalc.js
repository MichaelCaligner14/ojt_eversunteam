import React, {Component} from "react";

class Loancalc extends Component{
    constructor(){
        super();
        this.state={
            loanAmount:'',
            iRate:'',
            termsofPayment:'',
            totalAmount:0,
            monthlyPay:0,
        }
    }

    handleloanAmount = (event) =>{
        this.setState({
            loanAmount:event.target.value
        })
    }

    handleiRate = (event) =>{
        this.setState({
            iRate:event.target.value
        })
    }

    handletermsofPayment = (event) =>{
        this.setState({
            termsofPayment:event.target.value
        })
    }

    handleSubmit = event =>{
        const Rate = this.state.loanAmount * (this.state.iRate / 100);
        this.setState({
           totalAmount: parseInt(this.state.loanAmount) + ( Rate * this.state.termsofPayment),
            monthlyPay: this.state.totalAmount / this.state.termsofPayment
        });
        event.preventDefault();
    }

    render()
    {
        return (
        <div className="center">
            <h2>LOAN CALCULATOR</h2>
            <form onSubmit={this.handleSubmit}>
                <div class="text_field">
                    <label>Loan Amount </label>
                    <input type="text" name="loanAmount"
                    placeholder="Your loan amount"
                    value={this.state.loanAmount} onChange={this.handleloanAmount} />
                </div>
                <div class="text_field">
                    <label>Interest Rate</label>
                    <input type="text" name="iRate"
                    placeholder="Your interest rate" 
                    value={this.state.iRate} onChange={this.handleiRate}/>
                </div>
                <div class="text_field">
                    <label>Terms of Payment</label>
                    <input type="text" name="termsofPayment"
                    placeholder="Your terms of payment"
                    value={this.state.termsofPayment} onChange={this.handletermsofPayment}/>
                </div>
                <button type="submit">COMPUTE</button>
            </form>
            <div class="output">

                <div><h5>Total Loan Amount</h5>
                {this.state.totalAmount}</div>

                <div><h5>Monthly Amount</h5>
                {this.state.monthlyPay}</div>
                <h5></h5>

            </div>
           
        </div>
        );
  }
}
export default Loancalc;