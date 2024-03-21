# AutoScriptShopBackend

## Datenbankwahl
Als Datenbank wird das in Plesk integrierte Datenbankhosting genutzt. Die Datenbank ist MariaDB. Der grund dafür ist dass wir uns dann keine gedanken mehr über das Hosting der Datenbank machen müssen. 

## Datenbank Aufbau
https://dbdiagram.io/d/Autosccriptshop-65e9bad3b1f3d4062c5e6c37


## Schnittstellen

### Products Database
* Get all Products
    * backend.auto-script-shop-bmsd21a.bbzwinf.ch/api/products
* Get Product by Id
    * backend.auto-script-shop-bmsd21a.bbzwinf.ch/api/products/id/{id}
* Search for Products
* Create Product
* Filter Products
* get all products by Type
* PriceRange
* Freelancer Rating
* Language(python, eg.)

### User Database
* Check Authentication
* Get User Information
* Get new Password
* Set User Information
* Delete User

### Taskboard Database
* Get all Tasks
* Get Task by Id
* Search for Task
* Create Task
* Filter Tasks
