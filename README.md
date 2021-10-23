[![CircleCI](https://circleci.com/gh/Sharpz7/vouch/tree/main.svg?style=svg)](https://circleci.com/gh/Sharpz7/vouch/tree/main)

# Sharpfiles

A custom file uploader using [Sharex](https://getsharex.com/) designed to work with [SharpNet](https://github.com/Sharpz7/sharpnet) and [SharpCD](https://github.com/Sharpz7/sharpcd)

# Example Sharex Config

![](https://files.mcaq.me/uhvo.png)

# Installation

- Make sure [SharpCD](https://github.com/Sharpz7/sharpcd) and [SharpNet](https://github.com/Sharpz7/sharpnet) have been installed.

- Create a sharpcd.yml file like the following:

```yml
version: 1

tasks:
  sharpfiles_task:
    name: SharpFiles Server
    envfile: .env
    type: docker
    sharpurl: https://mydomain.com:5666
    giturl: https://raw.githubusercontent.com/Sharpz7/
    compose: /sharpfiles/main/docker-compose.yml
```

- Ensure the enviromental variables have been set in an enviromental variable file:

```env
SECRET=Secret123
DOMAIN=mydomain.com
```

- Run `sharpcd` to get started!

## Help

A guide to setting up custom uploaders in Sharex can be found [here](https://getsharex.com/docs/custom-uploader).

## Maintainers

- [Adam McArthur](https://adam.mcaq.me)

## TODO

- Remove sharpnet domain and replace to Env var
- Remove site.conf domain
- Remove "mcaq.me" mention in docker-compose file

