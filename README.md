[![License][license-logo]][license-url]

<br />
<p align="center">
  <h2 align="center">FT_SERVER</h2>
  <p align="center">
    <a href="https://github.com/pabloocg/ft_server/tree/master/srcs"><strong>Explore the docs »</strong></a>
  </p>
</p>

<!-- TABLE OF CONTENTS -->
<details open="open">
  <summary>Table of Contents</summary>
  <ol>
    <li>
      <a href="#about-the-project">About The Project</a>
    </li>
    <li>
      <a href="#getting-started">Getting Started</a>
      <ul>
        <li><a href="#installation">Installation</a></li>
      </ul>
    </li>
    <li><a href="#usage">Usage</a></li>
    <li><a href="#license">License</a></li>
    <li><a href="#contact">Contact</a></li>
  </ol>
</details>

---

## About The Project

This is a System Administration subject. You will discover Docker and you will set up your first web server.

---

### Madatory Part

This server will run multiples services: Wordpress, phpMyAdmin, and a SQL database.
It will make you aware of the importance of using scripts to automate your tasks.

- You must set up a web server with Nginx, in only one Docker container. The container OS must be debian buster.
- Your web server must be able to run several services at the same time. The services will be a WordPress website, phpMyAdmin and MySQL. You will need to make sure your SQL database works with the WordPress and phpMyAdmin.
- Your server should be able to use the SSL protocol.
- You will have to make sure that, depending on the url, your server redirects to the correct website.

## Getting Started

### Requisites

You must have [Docker](https://docs.docker.com/engine/install/) installed in your system to run this project.

### Installation

1. Clone the repository and enter
    ```sh
    $ git clone https://github.com/pabloocg/ft_server.git && cd ft_server
    ```
2. Build the image
    ```sh
    $ docker build -t ft_server .
    ```
3. Run the image in a Docker container
    ```
    $ docker run -d -p 80:80 -p 443:443 ft_server
    ```
## Usage

To see the phpMyAdmin page visit `https://localhost/phpmyadmin`
(The user to access is root, without password)

To see the Wordpress site visit `https://localhost/wordpress`

## License

Distributed under the GNU GPLv3. See `LICENSE` for more information.

## Contact

Pablo Cuadrado García </br>
[Linkedin][linkedin-url] - pablocuadrado97@gmail.com

[license-logo]: https://img.shields.io/cran/l/devtools?style=for-the-badge
[license-url]: https://github.com/pabloocg/ft_server/LICENSE
[linkedin-url]: https://linkedin.com/in/pablo-cuadrado97
