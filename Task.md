# Senior Laravel Test

## Background

You have just started at a new company called CoachConnect, it's your first day and you have been given a project to work on called CoachSalaryCalculator. 

### CoachConnect (CC)

CoachConnect is a platform for coaches and their clients to connect. Clients will book in their coaches for paid bookings, charged at 30 minute increments.
 
Tech: Laravel REST API with a Vue.js frontend.

### CoachSalaryCalculator (CSC)

CoachSalaryCalculator, function is to provide data about a coaches earnings given how often they and how much they charge their clients.
 
Tech: Laravel Micro-service, receives REST API request from CC. Built by one of the companies former junior engineers


### Task

As the new (and only) senior Laravel developer in the company, you have been tasked with 'rescuing' the CoachSalaryCalculator.
Your manager understands the code for CSC may not be perfect and would like your expertise in setting it up properly.

Lunch time is in 2 hours and you want to go out for burger and a beer, so you need to finish it before then.

#### Fix code and set standards

- Implement Laravel / REST API best practices
- Implement coding standards that may be missing
- Add missing documentation
- Write any missing tests
- Implement any other best practices, development tools, environments that you think would be useful

#### Add new endpoint

The team would like the ability to calculate how much tax the coach will need to pay on their salary.

**Add a new endpoint `/tax`**

Should take the hourly rate of the coach & the hours worked per week to calculate how much tax they have to annually.
The calculation should be based on [Resident tax rates 2020-21](https://www.ato.gov.au/rates/individual-income-tax-rates/)

If a coach has a taxable income less then the $18,200, then the team would like an email to go to `sales@coachconnect.com`.

Notes:
- Ignore the medicare levy of 2%
- Any other tax exceptions / deductions or additions should be ignored besides the base rates
- The content of the email doesn't matter but it needs to include the hourly rate & the hours worked per week

## Post-lunch interview

After lunch (the test) your manager would like to get you and the team (us) in a room to talk about the project


(Sample questions to ask - delete when given to candidate)
- What are some your changes you put in that the team should know about?
- Given the team plans to build out the API, how do you think the project can be scaled?
- Is there any other changes you'd like to make but didn't have time for?
- What do you think the hosting infrastructure of the project should be?
 


