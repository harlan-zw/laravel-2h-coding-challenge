## Background

Welcome to your new job at CoachConnect! It's your first day and you have been given a project to work on called
 CoachIncomeCalculator. 

### CoachConnect (CC)

CoachConnect is a platform for coaches and their clients to connect. Clients will book in their coaches for paid
 bookings, charged at 30 minute increments. 

CoachConnect takes a fixed % fee from all payments of 13.5% for every dollar earned after $1,000.
 
Tech: Laravel REST API with a Vue.js frontend.

### CoachIncomeCalculator (CSC)

CoachIncomeCalculator, function is to provide data about a coaches earnings given how often they and how much they 
charge their clients. It takes into account the fixed % fee CoachConnect is charging.
 
Tech: Laravel Micro-service, receives REST API request from CC. Built by one of the companies former junior engineers

Currently CC is hitting the `/calculate` endpoint. 

### Tasks

As the new (and only) senior Laravel developer in the company, you have been tasked with 'rescuing' the
 CoachIncomeCalculator.

Lunch time is in 2 hours and you want go out for burger and a beer, so you need to finish everything before then.

#### 1. Fix code and set standards

Your manager understands the code for CSC may not be perfect and would like your expertise to fix it up. You have full
control over what you change in the code base, it's now your baby and you need to nurture it.

While lots may be wrong, they suggest some things which may be useful to look at:
- Laravel / REST API best practices
- Coding standards
- Documentation
- Tests
- Other best practices or development tools that would be useful

They just ask you to "please not break the `/calculate` endpoint".

#### 2. Add /tax endpoint

The team would like a new endpoint `/tax` to calculate how much tax the coach will need to pay on their income.

Your endpoint should take the coach's hourly rate and the hours worked per week. It needs to calculate how much tax 
they have to pay weekly, fortnightly, monthly and annually, similar to the `/calculate` endpoint.

The calculation should be based on their Taxable income, which is income after the CoachConnect fee (13.5% fee after $1,000).
 See [Resident tax rates 2020-21](https://www.ato.gov.au/rates/individual-income-tax-rates/) for the rates to apply to
  taxable income. 

If a coach has a taxable income less then the $18,200, then the team would like an email to go to `sales@coachconnect.com`.

Notes:
- Should include a 2% medicare levy on taxable income if within the taxable income range
- Any other tax exceptions / deductions or additions should be ignored besides the base rates
- The content of the email doesn't matter but it needs to include the hourly rate & the hours worked per week
- All numbers should be rounded, 0.50 should be rounded to 1

_Examples_

a. Given an hourly rate of $300, working 10 hours a week, the annual revenue of the coach will be (300 x 10 x 52)
$156,000, minus the CoachConnect fee (13.5% for every dollar after $1000) it's $135,075.
 
Annual Tax on income = round(135075 / 100 * 2 = 2701.5) + 20797 + round((135075 - 90001 = 45074) * .37 = 16677.38) = $40,176

a. Given an hourly rate of $150, working 40 hours a week, the income of the coach will be (150 x 40 x 52) $312,000,
minus the CoachConnect fee (13.5% for every dollar after $1000) it's $270,015.
 
Annual Tax on income = round(270015 / 100 * 2 = 5400.3) + 54097 + round((270015 - 180001 = 90014) * .45 = 40506.3) = $100,003


##### 

## Post-lunch interview

After lunch (the test) your manager would like to get you and the team (us) in a room to talk about the project

