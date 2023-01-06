const loanAmount = document.querySelector('#loanAmount')
const payback = document.querySelector('#paybackAmount')
const estimated = document.querySelector('#estimated')
const amount = document.querySelector('#amount')
const  monthSelector = document.querySelector('#monthSelector')
const dailySel = document.querySelector('#dailySelector')
const weeklySel = document.querySelector('#weeklySelector')
const monthlySelector = document.querySelector('#monthlySelector')

const formatter = new Intl.NumberFormat('en-US', {
    style: 'currency',
    currency: 'USD',
    maximumSignificantDigits: 3
  })


const monthsData = [
    {
        time: 6,
        value: 1.1,
        tag: '6 months'
    },
    {
        time: 7,
        value: 1.12,
        tag: '7 months'
    },
    {
        time: 8,
        value: 1.14,
        tag: '8 months'
    },
    {
        time: 9,
        value: 1.16,
        tag: '9 months'
    },
    {
        time: 10,
        value: 1.18,
        tag: '10 months'
    },
    {
        time: 11,
        value: 1.2,
        tag: '11 months'
    },
    {
        time: 12,
        value: 1.22,
        tag: '12 months'
    },
    {
        time: 13,
        value: 1.24,
        tag: '13 months'
    },
    {
        time: 14,
        value: 1.26,
        tag: '14 months'
    },
    {
        time: 15,
        value: 1.28,
        tag: '15 months'
    },
    {
        time: 16,
        value: 1.30,
        tag: '16 months'
    },
    {
        time: 17,
        value: 1.32,
        tag: '17 months'
    },
    {
        time: 18,
        value: 1.34,
        tag: '18 months'
    },
    {
        time: 19,
        value: 1.36,
        tag: '19 months'
    },
    {
        time: 20,
        value: 1.38,
        tag: '20 months'
    },
    {
        time: 21,
        value: 1.40,
        tag: '21 months'
    },
    {
        time: 22,
        value: 1.42,
        tag: '22 months'
    },
    {
        time: 23,
        value: 1.44,
        tag: '23 months'
    },
    {
        time: 24,
        value: 1.46,
        tag: '24 months'
    }
]

monthsData.forEach( item => {
    const option = document.createElement('option')
    option.innerHTML = item.tag
    option.value = item.value
    option.setAttribute('data-month', item.time )
    monthSelector.appendChild(option)
})

const getCalculations = () => {
    loanAmount.innerHTML = formatter.format(amount.value) 
    payback.innerHTML = formatter.format(amount.value * monthSelector.value)

    if( dailySel.checked ) {
        estimated.innerHTML = formatter.format((amount.value * monthSelector.value) / (monthSelector.options[monthSelector.selectedIndex].getAttribute('data-month') * 4 * 5.5))
    } else if( weeklySel.checked ){
        estimated.innerHTML = formatter.format((amount.value * monthSelector.value) / (monthSelector.options[monthSelector.selectedIndex].getAttribute('data-month') * 4))
    } else {
        estimated.innerHTML = formatter.format((amount.value * monthSelector.value) / (monthSelector.options[monthSelector.selectedIndex].getAttribute('data-month')))
    }
    
}

document.querySelector('#rokCalculator').addEventListener('submit', (e)=>{
    e.preventDefault()
})
