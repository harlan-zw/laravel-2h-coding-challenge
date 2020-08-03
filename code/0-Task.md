## Background

Welcome to your new job at CoachConnect! It's your first day, you've been given a new project to work on called CoachConnectFinance. 

### CoachConnect - CC

CoachConnect is a platform for coaches and their clients to connect. Clients will book in their coaches for paid
 bookings, charged at 30-minute increments. 

CoachConnect makes money by taking a 13.5% fee from all income the coach earns, after they have earned $1,000. For 
 example, if a coach earns $4,000, they are charged a fee of 13.5% on $3,000, leaving them $3,595.
 
Tech: Laravel REST API with a Vue.js frontend.

### CoachConnectFinance - CCF

CoachConnectFinance provides financial data about a coach's earnings to CoachConnect. Currently its only function
 is to calculate an estimated income for a coach.
 
Tech: Laravel Micro-service, receives REST API request from CC. Built by one of the company's former junior engineers

Currently, CC is hitting the `/calculate` endpoint. 

### Tasks

As the new (and only) senior Laravel developer in the company, you have been tasked with 'rescuing' CoachConnectFinance.

Lunchtime is in 2 hours and you want to go out for a burger and a beer, so you need to finish everything before then. (You have two tasks to achieve in two hours)

#### 1. Fix code and set standards

Your manager understands the code for CCF may not be perfect and would like your expertise to fix it up. You have full
control over what you change in the code base, it's now your baby and you need to nurture it.

While lots may be wrong, they suggest some things which may be useful to look at:

- Laravel / REST API best practices
- Coding standards
- Documentation
- Tests
- Other best practices or development tools that would be useful

They ask you to "please not break the `/calculate` endpoint".

#### 2. Add /tax endpoint

The team would like a new endpoint `/tax` to calculate how much tax the coach will need to pay on their income.

Your endpoint should take the coach's hourly rate (in dollars) and the hours worked per week. It needs to calculate how
 much tax they have to pay weekly, fortnightly, monthly, and annually, similar to the `/calculate` endpoint.

The calculation is on their Taxable income, which is income after the CoachConnect fee (13.5% fee after $1,000).
 See [Resident tax rates 2020-21](https://www.ato.gov.au/rates/individual-income-tax-rates/) for the rates to apply to taxable income. 

If a coach has a yearly taxable income less then the $18,200, then the team would like an email to go to `sales@coachconnect.com`.

Notes:

- Should include a 2% medicare levy on taxable income if within the taxable income range
- Any other tax exceptions/deductions or additions should be ignored beside the base rates
- The content of the email doesn't matter, however, it needs to include the hourly rate & the hours worked per week
- All numbers should be rounded, 0.50 should be rounded to 1
- Calculations are assuming the coach has earned no pre-existing money

_Examples_

**Example A:** Given an hourly rate of $300, working 10 hours a week, the annual revenue of the coach will be ($300 x 10 x 52)
$156,000, minus the CoachConnect fee (13.5% for every dollar after $1,000) it's $135,075.
 
 The coach is in the tax bracket _$90,001 – $180,000_, meaning their tax will be _$20,797 plus 37c for each $1 over $90,000_.                                 
 
 | item | amount |
 | ---- | ----: |
 | medicare levy 2% | $135,075 * 0.02 = 2702 |
 | fixed rate | $20,797 |
 | variable rate | $45,074 * .37 = $16,677 |
 | total | $40,176 |

**Example B:** Given an hourly rate of $150, working 40 hours a week, the income of the coach will be ($150 x 40 x 52) $312,000,
minus the CoachConnect fee (13.5% for every dollar after $1,000) it's $270,015.
 
The coach is in the tax bracket _$180,001 and over_, meaning their tax will be _$54,097 plus 45c for each $1 over $180,000_.                                 

| item | amount |
| ---- | ----: |
| medicare levy 2% | $270,015 * 0.02 = $5,400 |
| fixed rate | $54,097 |
| variable rate | $90,014 * .45 = $40,506 |
| total | $100,003 |
  

##### 

## Post-lunch interview

After lunch (the test) your manager would like to get you and the team (us) in a room to talk about the project.
