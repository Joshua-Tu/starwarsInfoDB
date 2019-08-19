# Star Wars Info

---------------------------------------

## Website

http://starwarsinfodb.test/ (to be replaced by public url)

--------

----

## Github

https://github.com/Joshua-Tu/starwarsInfoDB

-------

------

## Content

### Section 1. About the application

* Section 1.1 About Star Wars Info
* Section 1.2 Features and functions

### Section 2. Technology Used

* Section 2.1 Tech Stack
* Section 2.2 Framework and structure

### Section 3. Wireframes, Entity Relationships Diagram ( ERD )

* Section 3.1 Wireframes
* Section 3.2 ERD

### Section 4. Setting up the application

* Section 4.1 Install third party api
* Section 4.2 Database Configuration

----

------

### Section 1. About the application

#### Section 1.1 About Star Wars Info

This application fetches data from https://swapi.co/ and stores it into MySQL database. Users visiting this application can search for the general information about the Star Wars movies ( Episode 1 to 7 ) and all the related information about characters, planets, species, starships and vehicles.

#### Section 1.2 Features and functions

* Home screen contains a list of films pulled from the SWAPI ( https://swapi.co/ )
* List is live searchable, matching movies will be filtered out
* Films can be favourited, this state is persisted using local storage
* Favourited films appear at the top of the list automatically once the the favorite checkbox clicked
* Favourited films can be unfavourited, unfavourited films will go to the bottom of the list once checkbox clicked
* A stylised user prompt/alert will show when a film is favourited/ unfavourited
* Film list items can be clicked to show individual film page
* Film page show all the information pulled from the SWAPI endpoint for an individual film
* Film page contains a back to home link
* The list of characters displays a tooltip when a list item is hovered
* The tooltip shows the character's bio pulled from the SWAPI endpoint for people
* Tooltip UI shows additional information pertaining to the film like vehicles, spaceships etc

----

-----

### Section 2. Technology Used

#### Section 2.1 Tech Stack

* Laravel Homestead for a web app framework
* Composer for third party api install ( guzzleHttp to fetch data from SW api )
* Semantic UI for web app styling
* Github for version and source control
* Heroku for the use of a deployment platform
* VSCode for code editting
* HTML, CSS, Javascript and PHP for programming language
* DBeaver and MySQL workbench for MySQL databases

#### Section 2.2 Framework and structure

**Fetch remote data**

> app
>
> > Http
> >
> > > Apis
> > >
> > > > GetSingleTypeData.php
> > > >
> > > > GetSingleTypeSinglePageData

---

**Routes ( root route '/', film details route '/film/:id' and other routes for fetching all types of Star Wars Info )**

> routes
>
> > web.php

---

**Model **

> app
>
> > Character.php
> >
> > Film.php
> >
> > Planet.php
> >
> > Species.php
> >
> > **...**

---------

**View **

> resources
>
> > Views
> >
> > > layouts
> > >
> > > > app.blade.php
> > >
> > > pages
> > >
> > > > filmInfoPage.blade.php
> > > >
> > > > homepage.blade.php

---

**Controller **

> app
>
> > Http
> >
> > > Controllers
> > >
> > > > fetchData.php
> > > >
> > > > filmsController.php

---

----

### Section 3. Wireframes, Entity Relationships Diagram ( ERD )

#### Section 3.1 Wireframes

![Wireframes](https://github.com/Joshua-Tu/starwarsInfoDB/blob/master/StarWarsInfo_wireframing.png?raw=true)

---

#### Section 3.2 ERD

The relatinship between films and other tables of other models is all many-to-many. The primary key (PK) of films table is its id, the PKs of characters, planets, species, vehicles and starships tables are all their urls. The pivot tables contains film id and the respective model urls. Films connect to other model tables through pivot tables.

![ERD](https://github.com/Joshua-Tu/starwarsInfoDB/blob/master/ERD.png?raw=true)

----

---

### Section 4. Setting up the application

#### Section 4.1 install the third party api

The only third party api used in this application is guzzleHttp

```php
$ php composer.phar require guzzlehttp/guzzle 
```

----

#### Section 4.2 Database configuration (Local)

**DB_CONNECTION=mysql**  
**DB_HOST=192.168.10.10**
**DB_PORT=3306**
**DB_DATABASE=starwarsInfo_DB**
**DB_USERNAME=homestead**
**DB_PASSWORD=secret**

