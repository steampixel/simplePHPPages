# Simple PHP Pages

<span>Warning: This project is currently not being actively developed. It is only supposed to provide some ideas. The project may be completely removed in the future.</span>

This project provides simple and basic concepts for PHP pages with no dependencies. It includes ideas and samples for routing, pages, themes, layouts, components and portals.

This project does not include a separate templating engine because PHP already provides everything you need.

## Test setup with Docker
I have created a little Docker test setup.

1. Build the image: ```docker build -t simplephppages docker/image```

2. Spin up a container
	* On Linux / Mac or Windows Powershell use: ```docker run -d -p 80:80 -v $(pwd):/var/www/html --name simplephppages simplephppages```
	* On Windows CMD use ```docker run -d -p 80:80 -v %cd%:/var/www/html --name simplephppages simplephppages```

3. Open your browser and navigate to http://localhost

## Test Setup in Windows using IIS
With IIS now fully supporting PHP, this example can be run using the included web.config. The web.config has a rewrite rule, similar to the .htaccess rewrite rule, but specifically for IIS. The rewrite rule will send all incoming requests to index.php in your root. The rest is done by the simple php router. 
### Setup
_This setup tutorial assumes you have the knowledge to create sites in IIS and set up bindings for http/https and custom DNS. If you need more information, this [article](https://docs.microsoft.com/en-us/iis/get-started/getting-started-with-iis/create-a-web-site) will help you with that part._
1. If you haven't done so yet, install php on windows. This article [Install IIS and PHP | Microsoft Docs ](https://docs.microsoft.com/en-us/iis/application-frameworks/scenario-build-a-php-website-on-iis/configuring-step-1-install-iis-and-php) will guide you to install the required php dependencies on your windows machine. 
2. In IIS Manager, create a site and point the physical location to root of the simplePHPRouter folder. It is recommended you connect to the the physical location with an account that has "Read/Write" rights to that folder.
3. (Optional) Create a DNS entry in your hosts file pointing 127.0.0.1 to the domain name you have used to set up the site. 
4. Browse to the newly created website and the sample site should display now.

## Basic concepts

### Routing
To learn more about the router check out https://github.com/steampixel/simplePHPRouter/blob/master/index.php
Look at the example pages in the index.php file. You can create new routes in there.

### Pages
A page is basically a PHP file. Every PHP file located in the `/pages` folder will become a page. You can simply render a page by calling `Page::render('home');` for example.
It makes sense to only render a page if a route was matched:

```
Route::add('/',function(){
  Page::render('home');
});
```
Take a look at the `index.php` file for more examples.

### Themes
The theme is located in the `themes/` folder. Currently there is no way to switch the theme. So there is only a theme called `default`.
The theme currently uses Bulma.io as a lightweight CSS framework: https://bulma.io/

### Layouts
A layout is just a wrapper for a page. Each page will be wrapped with a layout. By calling `Page::render('home');` the page `home` will be automatically wrapped with the `default` layout. Layouts are located in the themes `/layouts` folder. You can switch the layout by creating a new file (`two_columns.php` for example) in `layouts` and providing its name as an argument:
```
Page::render('home','two_columns');
```
Take a look at the default.php layout file. You can see, that this file provides the whole outer HTML markup. The only important code snippet inside each layout file is `<?=Portal::receive('main') ?>`;
Every page will send its contents to this location.

### Components
A component is just a reusable snippet of PHP code that will render different parts of a page or a layout. For example the navbar and the footer are just components used by a layout. Use the `Component::render` method to print out the results:
 ```
<?=Component::render('navigation') ?>
 ```
Or if you want use them with arguments:
 ```
<?=Component::render('footer', ['text' => 'Copyright 2019']) ?>
 ```
Components are useful for pages. They will give them some structure and will keep them clean:
```
<?=Component::render('hero', [
    'title'=> 'simplePHPPages',
    'subtitle'=> 'Basic concepts for low level PHP page building'
]) ?>

<?=Component::render('text', [
    'title'=> 'Lorem ipsum',
    'text'=> 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.'
]) ?>

```

### Portals
Portals provide a very powerful way of sending contents inside your themes and pages to different locations. Imagine the following situation: A snippet of PHP-Code (for example a gallery slider) will output some HTML to your Page. But it needs some JavaScript. You don't want to render this together with your slider. You want to render the Javascript into the footer of your HTML document. This is where portals come into play: Just define a portal receive point somewhere in your theme:
```
<?=Portal::receive('js') ?>
```
Then, from a page or a component, for example, you can send contents to this point:
```
<?PHP Portal::send('js', '<script src="/themes/default/assets/js/slider.js"></script>') ?>
```
Portals are also used to set the page title in the HTML layout from within the page file:
Inside the page:
```
<?PHP Portal::send('title', 'Homepage') ?>
```
Inside the layout:
```
<title>Default Page - <?=Portal::receive('title') ?></title>
```
## MIT License

Copyright (c) 2018 SteamPixel

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
