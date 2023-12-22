# Ytronic PHP Website

[![License](https://img.shields.io/badge/license-MIT-blue.svg)](LICENSE)
[![GitHub Issues](https://img.shields.io/github/issues/elyonox/ytronic-php-website.svg)](https://github.com/your-username/your-repo/issues)
[![GitHub Stars](https://img.shields.io/github/stars/elyonox/ytronic-php-website.svg)](https://github.com/your-username/your-repo/stargazers)
[![GitHub Forks](https://img.shields.io/github/forks/elyonox/ytronic-php-website.svg)](https://github.com/your-username/your-repo/network)
[![Twitter](https://img.shields.io/twitter/url/https/github.com/elyonox/ytronic-php-website.svg?style=social)](https://twitter.com/intent/tweet?text=Check%20out%20this%20awesome%20project:&url=https%3A%2F%2Fgithub.com%2Felyonox%2Fytronic-php-website)

![Ytronic Preview](https://github.com/elyonox/ytronic-php-website/blob/main/screenshot.png)


## Table of Contents

- [Pre-Requisites](#pre-requisites)
- [Installation](#installation)
- [Usage](#usage)
- [License](#license)

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

### Usage

- Go to `yt-content`, clone `home.php`, rename to `webpage.php` and edit the title, content, metas, etc... 

- Open `yt-template -> menu-nav.php` and go to `line 12` and add this:

```php
'webpage'	=> 'Webpage',
```

- Refresh your browser and a new menu item should be appear

### License

This project is licensed under the MIT License
