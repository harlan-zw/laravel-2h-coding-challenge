# Laravel 2h Coding Challenge

The purpose of this project is to test potential Laravel hires for core competency with objective and subjective measures.

The test is intended to be 2 hours long which should be enough time given a senior capability. There are
 3 tasks we ask of them (outlined in `code/0-Task.md`):

**1. An open ended project clean up / refactor**

The code in `code` is purposefully crap. I've gone through the Laravel best practices and basically done everything wrong.
The project is emulating one of the many disaster projects that a developer may come across.

What we are testing for here is how quickly they can fix code given their intuitions. Experienced developers should be 
able to spot the issues straight away (they'll be giving off quite the code smell). 

We leave it open ended asking the developer to implement their own best practices to the project, giving them the room 
show off any particular expertise they have with Laravel.

Marking is a bit more subjective here but you can basically add up the points of things they fixed (see `Marking.md`).

**2. A strict feature request**

We ask them to add a feature to the code base. The task itself is quite straight forward, a simple salary calculator that 
can be found in a number of code sample tests. We throw in a couple of caveats so we can test how well they can follow 
instructions and attention to detail.

The marking for this is objective, we will test if the code works and if the test they wrote for the code has good coverage
(see `Marking.md`).

**3. Technical Interview**

Assuming the candidate did well on the above test, we put it all together and run through a technical interview with them.

Here we are trying to understand their decisions within the code and their ability to scale a project and a team.

You can find the questions in `Questions.md`.


### Instructions

Create and push the code folder up in the candidates name
```bash
export CANDIDATE_NAME=CHANGE_ME GIT_URL=CHANGE_ME; \
cp -r code ../${CANDIDATE_NAME} && \
cd ../${CANDIDATE_NAME} && \
git init && \
git add . && \
git commit -m 'Initial commit' && \
git remote add origin ${GIT_URL} && \
git push -u origin master
```

Book in a time with the candidate and give them access at an agreed upon time. Any commits after the 2 hour mark should 
be ignored (within reason).
