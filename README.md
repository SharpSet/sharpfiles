[![CircleCI](https://circleci.com/gh/Sharpz7/sharpfiles/tree/main.svg?style=svg)](https://circleci.com/gh/Sharpz7/sharpfiles/tree/main)

# Sharpfiles

A custom file uploader using [Sharex](https://getsharex.com/) designed to work with [SharpNet](https://github.com/Sharpz7/sharpnet) and [SharpCD](https://github.com/Sharpz7/sharpcd)

# Example Diagram

![](https://files.mcaq.me/730rr.png)

# Installation

- Make sure [SharpCD](https://github.com/Sharpz7/sharpcd) havs been installed.

- Ensure the enviromental variables have been set in an enviromental variable file:

```env
SECRET=Secret123
DOMAIN=mydomain.com

#=============================

# sharpnet ports
HTTP_PORT=80
HTTPS_PORT=443

# Sharpnet gmail login credentials
# for sending errors
MAILPASS=email_password
SENDER_EMAIL=email

# Email that problems will be sent to
RECEIVER_EMAIL=email@domain1.com

# Domain for certificates
DOMAIN=domain2.com

# For Devs only
DEV=FALSE
NETWORK=sharpnet
```

**(See the [sharpnet](https://github.com/Sharpz7/sharpnet) documentation for more information)**

- Run the following command to install the postgres:

```bash
sharpcd --remotefile https://raw.githubusercontent.com/Sharpz7/sharpfiles/main/.sharpcd/sharpcd.yml
```

## Help with Sharex

A guide to setting up custom uploaders in Sharex can be found [here](https://getsharex.com/docs/custom-uploader).

## Maintainers

- [Adam McArthur](https://adam.mcaq.me)

## TODO

- Remove "mcaq.me" mention in docker-compose file

