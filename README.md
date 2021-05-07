# DaveyAndDonTryCode
a place for Davey and Don to try out github 

---
## Git Words of Wisdom

---
### Useful Commands

 `git status`
<br/><br/>
* Shows what branch you are on and what hasn't been commited yet

 `git branch`
<br/><br/>
* Shows all the branchs.  The branch you are on has an * next to it

`git stash`
<br/><br/>
* Stashes all the changes.  Useful if you have commited on master or branch you shouldn't have



---

<br/><br/>
## GIT Flow

---
<br/><br/>
## NEVER work on Master

<br/><br/>

* If you do by mistake, you can use git stash to stash away your changes before checking out to a clean new branch or simply type

 `git checkout -b name-of-branch`
<br/><br/>
* Make a new branch and move to that branch

`git checkout  -b name-of-branch`
<br/><br/>
* If you already have a branch, just 

`git checkout name-of-branch`
<br/><br/>
* Double-check that you’re on the right branch by typing

`git branch` -- should have a star beside right branch you want to work on
<br/><br/>

* Pull the latest version of master to your new branch 

`git pull origin master` 
<br/><br/>

* Or pull from remote master to your local master, and then create/checkout a new branch, they work the same way.

This is to make sure you start working on your branch with the latest working version of remote master (what’s currently on master on Remote/Github.com) 

* Once you’re done your work, push your changes to the git repo, on your branch:

1.  `git add file-name`

1. `git commit -m “ your comments here”` 

*Note repeat the above two steps often until your code completely functions as expected. Only then proceed to:*

`git push origin name-of-branch`
<br/><br/>

* This sequence creates a new branch on the github.com remote with the content of your branch

**BE SURE click on the link that says click here to create a new pull request in git hub**
<br/><br/>
See below
<br/><br/>

`Total 3 (delta 1), reused 0 (delta 0), pack-reused 0`

`remote: Resolving deltas: 100% (1/1), completed with 1 local object.`

`remote:`

`remote: Create a pull request for 'function-that-says-hello' on GitHub by visiting:`

 *click here* ==> `remote:      https://github.com/Don-Stevenson/codeWars/pull/new/function-that-says-hello` <== *click here*

`remote: `

Your branch work should now appear as a pull request option on github.com 
<br/><br/>

**Next: Make a pull request and ask SOMEONE ELSE for a review (top right corner of the pull request)**

**and** 

**Please let that person know a pull request has been created.**


<br/><br/>
## Please remember to NEVER work on Master

<br/><br/>

---

**NOTES** <br/><br/>

Don’t drop what you’re working on immediately to review right away. It’s not urgent. Whenever you’re done doing what you’re doing, then review.

That other person should review the new code to make sure there are no conflicts (I can show anyone how this works if we get conflicts and we might). 
Even if there are no watermelons, you should still doublecheck the code, see if you can figure out what it does
Feel free to ask questions before you ‘approve’ the merge. 

Once the review is done, approve, and merge the pull request.
Good idea now to not assume the code will always just work after a merge
Good practice to hop over to your master branch, pull from master and doublecheck that things still work locally on your machine as expected

If a problem is found let’s discuss. Someone will have to debug and a new issue should be created within Github.
<br/><br/>
### Git Pitfalls to Avoid:

---

Don’t change branches without git add/commit (or git stash at least if you don’t care so much about the changes you’ve made. Git won’t let you, but you can force it. I’ve done this, the results are not good. You can always find your git stash changes later if need be.)
<br/><br/>
### Never push from master. 

---

Meaning don’t checkout master after you git add/git commit is done on your branch and then try to push origin <#-name-of-branch> from master. 
You will push any commits on your master branch (if there are any git adds/commits, this can be especially problematic, otherwise it will be empty).
It creates a new branch on GitHub with your master branch content, not your branch content -- avoid this complication, by pushing from your branch to the branch
You’ll get conflicts when you realize you pushed nothing (maybe something) when you go back to your branch and push the actual changes

Sometimes local pull requests from master don’t work as they should, there is another command sometimes worth knowing: 

`git fetch`
<br/><br/>

---
# Above all - ASK if you are unsure of anything!!!

 this is the most important thing. Git and Github can be *very* confusing. Fear not! To help you out, please ask someone if you are of anything.Doing this will really save a lot of time in the long run. **Remember: We're a team and we help eachother out** 