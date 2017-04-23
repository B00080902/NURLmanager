# NURLmanager
Web Framework Development Symfony 3 Assingment 

by _B00080902 - Gelmis Bartulis_

**Launch options**
 1. Open Xampp / Laragon
 2. Start Apache and MySQL servers
 3. Open terminal and go to project location
 4. Start Symfony's server by typing
        `php bin/console server:run`
 5. Open up a new browser tab and go to
        `127.0.01:8000`

**Assignment Goal**

Assignment goal was to show understanding of Symfony's framework and create a website using provided specifications. Below you can see the final checklist together with the specifications. 

**This project was developed in a very short period of time due to time constraints and work load**

**Project Specifications**

✓ - Completed
x - Future work (due to time constraints)

**Use case role 'public' (no login required)**
______________________________________________

- can see most recently added public NURLs						✓
- NURL:											✓
	- tags										✓
	- text title									✓
	- text summary 								✓
	- id (Link to public profile) of author						x
	- list of any issues (freezing + comments)					x
- can see list of tags									✓
- can see list of proposed new tags							✓
- up/down vote list of proposed new tags (anonymous user’s votes count as 1 vote)	x
- can propose new candidate tag							✓
- can submit suggestions for new NURL (goes into 'pending' list for site 			
moderators to accept / reject)								x
- NURL content + tags + text title + text summary					✓
- can report a public NURL to moderator (for unacceptable content) 
(goes into 'frozen' list for moderator and is no longer public)				✓
NURL id + timestamp + text description of why unacceptable 
+ email (optional) of reporter								

**Use case role 'user'**
________________________


- can view / search NURLs in collections							x
	- own collections								✓/x
	- shared collections from other users						✓/x
	- all public NURLs								✓/x
- can search by:						
	- matching one or more tags							x
	- free text content search							x
	- by date range (created / last edit)						x
	- can CRUD personal tags							x
- can CRUD own NURLs									✓
	- can share a NURL with other users						✓
	- can change a NURL from private (default) to public 				✓

- can CRUD own collections								✓
- can share a collection with other users							✓
- up/down vote list of proposed new tags (registered users votes count as 5 votes)	x
- delete user account									x
- can update profile									x
EXTRA marks - upload of profile picture							x
	- can make profile public / private (user name is always public for public NURLs)
	
**Use case role 'admin'**
_________________________

  - can CRUD user and admin accounts							✓
    
    
**Use case role 'moderator'**
____________________________
    
 - can review 'pending' and 'reported' NURLS						✓
 
 - new NURL - accept / reject								✓	
 
 - reported public NURL - delete (if moderator agrees content unacceptable)
     / unfree (if moderator disagrees)							✓
 - in both cases moderator leaves a timestamped text comment to justify decision	x
 
 - can freeze user accounts								x
 
 - user id + timestamp + text description of why frozen + user id of moderator		x

**No testing has yet been done up until 13:20 23rd of April 2017** 

