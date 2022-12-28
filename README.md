# Ytronic PHP Website

> This is a simple php website developed for multipurpose objective

![Ytronic Preview](https://github.com/elyonox/ytronic-php-website/blob/main/screenshot.png)

### Pre-Requisites:

1. Download and Install XAMPP

[Click Here to Download](https://www.apachefriends.org/index.html)

2. Install any Text Editor (Notepad++ or Visual Studio Code or Atom etc...)

### Installation

1. Download as Zip or Clone this project
2. Move this project to Root Directory into `ytronic` folder
```
Local Disc C: -> xampp -> htdocs -> 'ytronic'
```
*Local Disk C is the location where xampp was installed*

3. The `yt-config.php` file contains the configuration of the website

4. Open XAMPP Control Panel and Start 'Apache'

5. On your browser type the address `http://localhost/ytronic/`

### Howto create Pages and Menus

- Go to `ytronic -> yt-content` and create a file `webpage.php` inside

- Open `ytronic -> yt-template -> functions.php` and go to `line 101` and add this:

```php
'webpage' => array(
	'menu_name'		=> 'Web Page',
	'page_title'		=> 'Web Page title',
	'page_description'	=> 'Web Page description',
),
```

- Refresh your browser and a new menu should be appear

License
-------

Licensed under GNU General Public License v2 or later
