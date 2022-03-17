# Simple PHP Pages - A simple puristic PHP Website Boilerplate
Hey! This project provides simple and basic concepts for PHP pages with no dependencies. It includes ideas and samples for routing, pages, themes, layouts, components and portals. Just download it and use it as boilerplate for your next web project.

Included Utilities:
* Routing: Simply create speaking URLs - https://github.com/steampixel/simplePHPRouter
* Templating: The flexible component concept - https://github.com/steampixel/simplePHPComponents
* Portals: Warping around contents - https://github.com/steampixel/simplePHPPortals
* Bulma: Simple CSS Framework - https://bulma.io/

## Quick start

### Create a new page
1. Create a new page inside `components/default/pages`
2. Create a route to this page inside the `index.php` file
3. Update `components/default/layouts/default/navigation.php` and add your page there

### Create a new custom content element
1. Add your components template inside `components/default/content`
2. Load your component inside your page template using the `Component::create()` method

## Test setup with Docker
I have created a little Docker test setup.

1. Build the image: `docker build -t simplephppages docker/image-php-7.4.1`

2. Spin up a container: `docker run -d -p 80:80 -v $(pwd):/var/www/html --name simplephppages simplephppages`

3. Bash into the container with `docker exec -i -t simplephppages /bin/bash` and run `composer install` to install dependencys on first run

4. Open your browser and navigate to http://localhost

## License
This project is licensed under the MIT License. See LICENSE for further information.
