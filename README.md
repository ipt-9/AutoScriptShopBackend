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
    * backend.auto-script-shop-bmsd21a.bbzwinf.ch/api/products/search?title={title}&maxrating={maxrating}&minrating={minrating}&tags={tag1,tag2...}&minprice={minprice}&maxprice={maxprice}
      note: alles nach /search ist optional
* Create Product


### User Database
* Check Authentication
* Get User Information
* Get new Password
* Set User Information
* Delete User

### Taskboard Database
* Get all Tasks
  * backend.auto-script-shop-bmsd21a.bbzwinf.ch/api/tasks
* Get Task by Id
  * backend.auto-script-shop-bmsd21a.bbzwinf.ch/api/tasks/id/{id}
* Search for Task
    * backend.auto-script-shop-bmsd21a.bbzwinf.ch/api/tasks/search?title={title}&tags={tag1,tag2,...}&minreward={minreward}&maxreward={maxreward}
      note: alles nach /search ist optional      
* Create Task
* Filter Tasks
