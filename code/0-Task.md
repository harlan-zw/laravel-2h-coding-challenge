## Background

You have just started at a new company called CoachConnect, it's your first day and you have been given a project to work on called CoachIncomeCalculator. 

### CoachConnect (CC)

CoachConnect is a platform for coaches and their clients to connect. Clients will book in their coaches for paid bookings, charged at 30 minute increments. 

CoachConnect takes a fixed % fee from all payments of 13.5% for every dollar earned after $1,000.
 
Tech: Laravel REST API with a Vue.js frontend.

### CoachIncomeCalculator (CSC)

CoachIncomeCalculator, function is to provide data about a coaches earnings given how often they and how much they charge their clients. It takes into account the fixed % fee CoachConnect is charging.
 
Tech: Laravel Micro-service, receives REST API request from CC. Built by one of the companies former junior engineers

Currently CC is hitting the `/calculate` endpoint. 

### Tasks

As the new (and only) senior Laravel developer in the company, you have been tasked with 'rescuing' the CoachIncomeCalculator.

Lunch time is in 2 hours and you want go out for burger and a beer, so you need to finish everything before then.

#### 1. Fix code and set standards

Your manager understands the code for CSC may not be perfect and would like your expertise to fix it up. You have full
control over what you change in the code base, it's now your baby and you need to nature it.

While lots may be wrong, they suggest some things which may be useful to look at:
- Laravel / REST API best practices
- Coding standards
- Documentation
- Tests
- Other best practices or development tools that would be useful

They just ask you to please not break the `/calculate` endpoint.

#### 2. Add /tax endpoint

The team would like a new endpoint `/tax` to calculate how much tax the coach will need to pay on their income.

Your endpoint should take the hourly rate of the coach, the hours worked per week. It needs to calculate how much tax 
they have to pay weekly, fortnightly, monthly and annually, similar to the `/calculate` endpoint.

The calculation should be based on their Taxable income, which is income after the CoachConnect fee (13.5% fee after $1,000).
 See [Resident tax rates 2020-21](https://www.ato.gov.au/rates/individual-income-tax-rates/) for the rates to apply to taxable income. 

If a coach has a taxable income less then the $18,200, then the team would like an email to go to `sales@coachconnect.com`.

Notes:
- Should include a 2% medicare levy on taxable income if within the taxable income range
- Any other tax exceptions / deductions or additions should be ignored besides the base rates
- The content of the email doesn't matter but it needs to include the hourly rate & the hours worked per week
- Rates are based on a sole trader who isn't obliged to pay Superannuation
- Formula fr Annual Taxable Income = min(rate * hours_per_week * 52, 1000) + min(0, (rate * hours_per_week * 52 * 0.865) - 1000)
- Formula for Annual Tax on income = (taxable_income / 100 * 2) + fixed_tax_for_bracket + floor((taxable_income - tax_bracket_start) * tax_bracket_cents_per_dollar)

_Examples_

// @todo update examples for 13.5% fee

a. Given an hourly rate of $300, working 10 hours a week, the income of the coach will be 300 x 10 x 52 = Taxable income: $156,000.
 
Annual Tax on income = (156000 / 100 * 2 = 3120) + 20797 + floor((156000 - 90001 = 65999) * .37 = 24420) = $48,336

a. Given an hourly rate of $150, working 40 hours a week, the income of the coach will be 150 x 40 x 52 = Taxable income: $312,000.
 
Annual Tax on income = (312000 / 100 * 2 = 6240) + 54097 + floor((312000 - 180001 = 131999) * .45 = 59399.55) = $119,736


##### 

## Post-lunch interview

After lunch (the test) your manager would like to get you and the team (us) in a room to talk about the project

