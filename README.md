# Ontario Organ Donation

Organ Donation campaign project for beadonor.ca

## Features

Here's a list of features of functionality and instructions on how to address them:

* filtering and search bar on the main page;
* authentication - go to `admin/admin_login.php` to log into admins account. You will find login credentials in the login form fields. 
* add a story - lets you to add a story. Go to Create story `admin/admin_createstory.php`. Once added, story data will be added to teh database, as well as appear on the index page.
* edit a story - lets you to edit story with ID=1. Only one and first story is editable. Go to Edit story `admin/admin_editstory.php` to edit. 

## Getting Started

### Prerequisites

To get a copy of this project you need to have [git](https://git-scm.com/downloads), [npm](https://www.npmjs.com/get-npm) and any localhost of your choice.

### Installing

1. Clone the branch;
2. Install dependencies:
```
npm install
```
3. Compile Sass:
```
gulp sass
```
4. Import database (`database/odo`) to your phpMyAdmin and configure database connection in `admin/script/connect.php`;
5. Copy entire project folder to `www` folder of your localhost or add it to your alias directories. 

## Built With

* [jQuery] - for Bootstrap;
* [Vue.js] - JavaScript Framework;
* [PHP] - backend and admin;
* [Node] - JavaScript compiling;
* [Bootstrap] - for styling;
* [SASS] - CSS compiling;
* [W3Schools] (https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_templates_startup) - for basic HTML template;


## Authors
* [Aisana Ungarsynova](https://github.com/aungarsynova) - Front End developer, Back End developer, Project Manager, Web Designer
* [Daniel Boyden] - Graphic Designer
* [Caitlin MacKay] - Motion Designer

