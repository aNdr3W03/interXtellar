# interXtellar

#### This is my Final Project for Laboratory - Web Programming I
#### PW2_UAS_201401035


## Login Page
#### The username and password are already registered in the database, but the password is encrypted. The following is the username and password to login to the interXtellar website.
#### username: `admin`
#### password: `admin`
#### or
#### username: `andrew123`
#### password: `andrew123`


## Note:
#### In this file, there are 4 folders:

**1. DB**
#### This is the interXtellar database folder. There are 2 files in it, `.sql` and `.xml` files. This file will be imported into `phpmyadmin`. If the `.sql` file fails to import to the database, then you can import the file with the extension `.xml`.
> - sql (Structured Query Language)
> - xml (Extensible Markup Language)

**2. explore**
#### In this folder, there is an `explore_img` folder to store the image input from the CRUD entered by the user.
* `explore.php`, this is a script that displays a database table resulting from user input data.
* `explore_add.php` is the form to enter data, and the script connection is `explore_insert.php`.
* `explore_edit.php` is a form to change the data that has been entered, which is in the database, and the script connection is `explore_update.php`.
* `explore_delete.php` is a script to delete data that has been entered.

**3. img**
#### Inside this folder is used to store all image files that are only used for website page displays as content and background.

**4. temp**
#### In this folder there is an `explore_images` folder and an `explore.txt` file which I use to list the data to be entered into the database (CRUD), namely images and text input.


> Other files:
> - `icon.png` is used as the icon on the browser tab and the logo on the navbar.
> - `home.php` is the main page (homepage) of this interXtellar website
> - `koneksi.php` is a script to connect localhost with database
> - `login.php` is the website login (login) page with a connection to `login_proses.php`
> - `signup.php` is a website account register page with a connection to `signup_proses.php`
> - `logout.php` is a script to end a user session and log out of an account that is already logged in.
