# PROJECT

This is a Web Application developed with PHP and MySQL. It helps you to track garbage recycling days and their respective collection times.

**Edit connect.php file with your credentials**

## STRUCTURE

```bash
PROJECT ROOT
├── connect.php: connection to MySQL database. You have to edit this file with your credentials.
├── edit.php: page for updating 'users' table data.
├── footer.php: footer with copyright.
├── header.php: navigation bar.
├── index.php: homepage, where is possible to choose a day to show the garbage type and its collection times.
├── insert.php: page for inserting data into 'users' table.
├── css
│   └── style.css: style for the page.
└── users.php: display all the records on the browser. It is possible to delete or edit the row selected by the user.
```
![Alt text](screenshot/main_page.jpg?raw=true "index.php page")
![Alt text](screenshot/add_page.jpg?raw=true "insert.php page")



## DB (MySQL) Structure

Database DB_NAME -> table 'users'


|id|int(11)|A_I|

|waste_type|varchar(255)|

|waste_day|varchar(20)|

|start_at|varchar(11)|  

|end_at|varchar(11)|
