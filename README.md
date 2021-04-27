# DaveyAndDonTryCode
a place for Davey and Don to try out github 

## Git Words of Wisdom

### GIT Flow

**NEVER EVER work on Master!!!!**
If you do by mistake, you can use git stash to stash away your changes before checking out to a clean new branch or simply type `git checkout  -b name-of-branch`

Make a new branch and move to that branch `git checkout  -b name-of-branch`
If you already have a branch, just use `git checkout name-of-branch`

Double-check that you’re on the right branch (`git branch` the branch you're working on should have a star beside right branch you want to work on)

Pull the latest version of master to your new branch `git pull origin master` 
Or pull from remote master to your local master, and then create/checkout a new branch, they work the same way. This is to make sure you start working on your branch with the latest working version of remote master (what’s currently on master on Remote/Github.com) 

Once you’re done your work, push your changes to the git repo, on your branch:

`git add file name`
`git commit -m “your comments”` 
`git push origin name-of-branch`

This sequence creates a new branch on the github.com remote with the content of your branch

Your branch work should now appear as a pull request option on github.com (little yellow alert usually)

Make a pull request and ask **SOMEONE ELSE** for a review (top right corner of the pull request)

Please let that person know a pull request has been created.

Please Note: Don’t drop what you’re working on immediately to review right away. It’s not urgent. Whenever you’re done doing what you’re doing, then review.

That other person should review the new code to make sure there are no conflicts (I can show anyone how this works if we get conflicts and we might). 
Even if there are no conflicts, you should still doublecheck the code, see if you can figure out what it does. Feel free to ask questions before you ‘approve’ the merge. 

Once the review is done, approve, and merge the pull request.
Good idea now to not assume the code will always just work after a merge
Good practice to hop over to your master branch, pull from master and doublecheck that things still work locally on your machine as expected

If a problem is found let’s discuss. Someone will have to debug and a new issue should be created within Github.

### Git Pitfalls to Avoid:
Don’t change branches without `git add` / `git commit` (or `git stash` at least if you don’t care so much about the changes you’ve made. Git won’t let you, but you can force it. I’ve done this, the results are not good. You can always find your git stash changes later if need be.)

### Never push from master. 
Meaning **don’t** checkout master after you `git add` / `git commit` is done on your branch and then try to `git push origin name-of-branch` from master. 
You will push any commits on your master branch (if there are any git adds/commits, this can be especially problematic, otherwise it will be empty).
It creates a new branch on GitHub with your master branch content, not your branch content -- avoid this complication, by pushing from your branch to the branch
You’ll get conflicts when you realize you pushed nothing (maybe something) when you go back to your branch and push the actual changes

Sometimes local pull requests from master don’t work as they should, there is another command sometimes worth knowing: `git fetch`
