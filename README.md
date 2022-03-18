# Simple PHP Pages - A simple puristic PHP Website Boilerplate 🚀
Hey! This project provides simple and basic concepts for PHP pages. It includes ideas and samples for routing, pages, themes, layouts, components and portals. Just download it and use it as boilerplate for your next web project.

__🛠 Included Utilities:__
* Routing: Simply create speaking URLs - https://github.com/steampixel/simplePHPRouter
* Templating: The flexible component concept - https://github.com/steampixel/simplePHPComponents
* Portals: Warping around contents - https://github.com/steampixel/simplePHPPortals
* Bulma: Simple CSS Framework - https://bulma.io/

__🧰 Features:__
* Included routing
* Prebuild template structure
* Override and extend template files
* Build your own custom elements
* Create your own pages
* Working navigation example
* Working contact form example (Without really mailing)
* Works without any database
* Included CSS Framework (Bulma) can easily switched

__🖼 Preview:__

![preview](https://raw.githubusercontent.com/steampixel/simplePHPPages/main/preview_mobile.png)

## 📕 Quick start

### Install
1. Download or clone this repo
2. Run `composer install`
3. Copy the project to your webserver or use a local server (Below is a docker setup)

### Create a new page
1. Create a new page inside `contents/pages`
2. Create a route to this page inside the `index.php` file
3. Update `themes/default/partials/navigation.php` and add your page there

### Create a new custom content element
1. Add your components template inside `themes/default/content`
2. Load your component inside your page template using the `Component::create()` method

## 🧭 Routing
Routing is done through [simplePHPRouter](https://github.com/steampixel/simplePHPRouter). Just define additional routes inside of your index.php file like this:
```php
Route::add('/user/([0-9]*)/edit', function($id) {
  echo 'Edit user with id '.$id.'<br>';
}, 'get');
```

## 🎨 Themes
Themes live in the `themes` folder. There is just one `default` theme at the moment. A theme consists of several Components ([simplePHPComponents](https://github.com/steampixel/simplePHPComponents)) and some assets like CSS and JavaScript files. The theme defines the markup of content elements, reusable particals like navigation and header and page layouts. Just extend the default theme or create your own.

The used theme is declared within the `index.php` file.

## 📄 Pages
A page is a instance of [simplePHPComponents](https://github.com/steampixel/simplePHPComponents). It will act as some kind of a controller. A page defines its contents and will load a layout from the theme. Then the page will push the contents to the main content section of the used theme. Copy and create new pages if you want.
Do not forget to create a route to your new page:
```php
Route::add('/my-new-page', function() {
  Component::create('page/my-new-page')->print();
});
```

## 🧱 Content Blocks
Imagine blocks as stackable and reusable content templates that live inside the theme folder in `themes/default/content`. Every page will consist of one ore more of those blocks. A content block is also an instance of [simplePHPComponents](https://github.com/steampixel/simplePHPComponents). Content blocks can be text, text with images, sliders, hero-elements, tabs, tables, etc. Simply print and reuse a content block by using `Component::create()`:
```php
Component::create('content/hero')->assign(['title' => 'Welcome', 'subtitle' => 'Lorem Ipsum'])
```

## ▦ Layouts
A layout is part of the current theme. A layout just describes the HTML markup around the contents. It defines the header, the body and the general alignment of the contents. Every page should load a layout first. Every layout is an instance of [simplePHPComponents](https://github.com/steampixel/simplePHPComponents).
```php
Component::create('layout/boxed')->assign([
  'title' => 'About',
  'subtitle' => 'Learn more about us',
  'lang' => 'en'
])->print();
```

## 🕳 Portals
Portals will be used to throw contents to a defined point inside your app. For example a theme will somewhere inside open a `contents-main` portal. Using this Portal you can throw contents to there from any other point of your app. Read more about Portals: [simplePHPPortals](https://github.com/steampixel/simplePHPPortals)
```php
Portal::send('contents-main', 'Hello World');
```

## 🚢 Test setup with Docker
I have created a little Docker test setup.

1. Build the image: `docker build -t simplephppages docker/image-php-7.4.1`
2. Spin up a container: `docker run -d -p 80:80 -v $(pwd):/var/www/html --name simplephppages simplephppages`
3. Bash into the container with `docker exec -i -t simplephppages /bin/bash` and run `composer install` to install dependencys on first run
4. Open your browser and navigate to http://localhost

## License
This project is licensed under the MIT License. See LICENSE for further information.
