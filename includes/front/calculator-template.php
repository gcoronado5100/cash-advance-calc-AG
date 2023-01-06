    <?php

    function ldb_cash_calculator_template()
    {
        ob_start();
    ?>

        <div class="container">

            <div class="cash-calculator__container">
                <span>Enter your requested loan amount, the term you would like, and choose your payback frequency to view your estimated
                    payment!</span>

                <form id="rokCalculator" action="/">
                    <label>Amount <b>*</b></label>
                    <input type="number" name="number" id="amount" min="0" oninput="getCalculations(); ">

                    <label>Term <b>*</b></label>

                    <select name="" id="monthSelector" oninput="getCalculations()">
                        <option value="" disabled selected>Choose your loan Term</option>
                    </select>

                    <label>Payback Frequency <b>*</b></label>
                    <label style="font-weight: 400;"><input checked type="radio" name="timeOfLoan" value="daily" id="dailySelector" oninput="getCalculations()"> Daily</label>
                    <label style="font-weight: 400;"><input type="radio" name="timeOfLoan" value="weekly" id="weeklySelector" oninput="getCalculations()"> Weekly</label>
                    <label style="font-weight: 400;"><input type="radio" name="timeOfLoan" value="monthly" id="monthlySelector" oninput="getCalculations()"> Monthly</label>

                    <span><b>Loan Amount:</b> <span id="loanAmount"></span></span>
                    <span><b>Total PayBack:</b> <span id="paybackAmount"></span></span>
                    <span><b>Your Estimated Payment is....</b> <span id="estimated"></span></span>
                </form>

                <span class="consent-text">
                    * These are estimated amounts based on initial criteria from our lending partners and are based on the accuracy and
                    completeness of the data you have entered. This tool is for illustrative and general information purposes only and is
                    not to be treated as an offer - please speak to your sales representative to verify actual final amounts.
                </span>
            </div>


        </div>


    <?php
        $output = ob_get_contents();
        ob_end_clean();

        return $output;
    }
