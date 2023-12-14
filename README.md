# Ytronic PHP Website

> This is a simple php website developed for multipurpose objective

![Ytronic Preview](https://github.com/elyonox/ytronic-php-website/blob/main/screenshot.png)

### Pre-Requisites:

1. Download and Install XAMPP

[Click Here to Download](https://www.apachefriends.org/index.html)

2. Install any Text Editor (Notepad++ or Visual Studio Code or Atom etc...)

### Installation

1. Download as Zip or Clone this project
2. Move this files of project to Root Directory into `htdocs` folder
```
Local Disc C: -> xampp -> htdocs
```
*Local Disk C is the location where xampp was installed*

3. Open XAMPP Control Panel and Start 'Apache'

4. On your browser type the address `http://localhost/`

### Howto create Pages and Menus

- Go to `yt-content`, clone `home.php`, rename to `webpage.php` and edit the title, content, metas, etc... 

- Open `yt-template -> menu-nav.php` and go to `line 12` and add this:

```php
'webpage'	=> 'Webpage',
```

- Refresh your browser and a new menu item should be appear

License
-------

Licensed under GNU General Public License v3
