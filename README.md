## PROJECT DETAILS

Project Name: AUST Programming group Website

Project Details: This website is designed for the "Programming Group" of Ahsanullah University of Science and Technology.
		 In the website there are all the information of the programming group's activities, both past and future.
The website also contains blogs and a forum managed by the students of AUST. In the blog students as well as teachers can 
share their thoughts on different things, and other users can comment on them. In the forum any student can ask any
question about any problem they are facing in their day-to-day programming life and others can give solution or suggestions
on that problem. Of course all these blog posts and forum question answers will be monitored by an admin panel, so that none
an post any irrelevant things. For posting a blog or commenting on them or for asking a question and to give any answer to
any question one must be logged in, so that the admins can monitor their activity. Only a student of AUST, current or previous,
can register in the website.
The website also has a online judge system, where any user can practise code. Contests will be arranged in this online judge.
 .........


 Project Authors: 1. Name: Abdus Sayef Reyadh, ID: 15.01.04.128
                  2. Name: Asif Imtiaz Shaafi, ID: 15.01.04.136
                  3. Name: Sifat Ahmed,        ID: 15.01.04.144


## PROJECT REQUIREMENTS
 Software Requirements for running the project:
        WAMP/XAMP (for MySql database and PHP),
        Composer (for Laravel, not fully required, but for safe side it's good to have it installed)


 Software Requirements for editing/viewing the code:
        any code editor can be used.
        ### **Recommended: JetBrains PhpStorm, Visual Studio Code **


 ## RUNNING WEBSITE

 for running the project below steps are required:

    ** make sure that WAMP/XAMP is running and you can access MySql database **

    ### SET UP THE PROJECT

    1. create a database in mysql database
    2. go to .env file in the project folder and change the DB_DATABASE,DB_USERNAME and DB_PASSWORD according to your configuration
        here DB_DATABASE will be the database name you just created

    ### Running the website

    1.Open 'command prompt' or 'windows powerShell' start menu or from windows run

    2.Go to project directory in the 'cmd' or 'powerShell'
        (project directory means the directory in which this README.txt file is in)

    3.Run the command "php artisan migrate" (without the quotes) to setup the database.
        (the database table structure can be found in /database/migrations folder)

    4.Run the command "php artisan serve" (without the quotes).
        A message showing "Laravel development server started: <http://127.0.0.1:8000>" will be printed in the screen.

    5.Go to any browser and type "localhost:8000/" and hit Enter

    6.You are now in the website.

    ** _To post any blog you need to register your self first_ **


 ### LIMITATIONS
  1. Rigth now only Blog page, Events page and login user, registration of user is working with php and database.
        That is they are dynamic in the website. Other pages are still static.

  2. There will be an admin dashboard for admins which is currently not in the project.
