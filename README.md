<p align="center"><img src="./.github/readme-bg.png" width="400"></p>

<p align="center">
<a href="./LICENSE"><img src="https://img.shields.io/github/license/mirorauhala/shrtn" alt="License MIT"></a>
</p>

## SHRTN

We believe in short links. Ever had a long link? We too. Now we don't. Thanks to
our research on the magic of short URLs.

## Using SHRTN

You can use SHRTN by using our hosted version at [https://shrtn.fi](https://shrtn.fi). If you'd like to self-host your own copy of SHRTN, well we've got you covered.


## Self-hosting SHRTN

We provide a `docker-compose` file for quick and easy hosting. 

### 1. Get a copy of SHRTN

Run the following in your terminal:

```bash
git clone https://github.com/mirorauhala/shrtn.git
```

### 2. Copy the `.env.example` to `.env`

This will prefill the enviroment variables with sane defaults. You can 
also modify the `.env` file with your own settings. Mostly the docker
port binds.

```bash
cp .env.example .env
```

### 3. Install dependencies

This command will install the required dependencies for this app.

```bash
docker-compose exec php-fpm /bin/sh -c "composer install"
```

### 4. Done 🔥

If everything went right, you can now open your browser at http://localhost.
In the case you changed the `DOCKER_WEB_PORT` then apply that to the URL.

## Security Vulnerabilities

If you discover a security vulnerability within this repository, please send
Miro Rauhala a message via Keybase [@mirorauhala](https://keybase.io/mirorauhala).
All security vulnerabilities will be promptly addressed.

## License

SHRTN is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
