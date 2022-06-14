[![CircleCI](https://circleci.com/gh/SharpSet/sharpfiles/tree/main.svg?style=svg)](https://circleci.com/gh/SharpSet/sharpfiles/tree/main)

![Sharpfiles](https://files.mcaq.me/843kh.png)
# File Uploader

A custom file uploader using [Sharex](https://getsharex.com/) designed to work with [SharpNet](https://github.com/SharpSet/sharpnet) and [SharpCD](https://github.com/SharpSet/sharpcd)

# Example Diagram

![](https://files.mcaq.me/730rr.png)

# Install Dependencies

- Make sure [SharpCD](https://github.com/SharpSet/sharpcd) havs been installed.

- Ensure the enviromental variables have been set in an enviromental variable file:

```env
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

**(See the [sharpnet](https://github.com/SharpSet/sharpnet) documentation for more information)**

- Run the following command to install the dependencies:

```bash
sharpcd --remotefile https://raw.githubusercontent.com/SharpSet/sharpfiles/main/.sharpcd/depencencies.yml
```

# Installation

- Make sure [SharpCD](https://github.com/SharpSet/sharpcd) havs been installed.

- Ensure the enviromental variables have been set in an enviromental variable file:

```env
SECRET=Secret123
SHARPFILES_DOMAIN=mydomain.com
```

- Run the following command to install the SharpFiles:

```bash
sharpcd --remotefile https://raw.githubusercontent.com/SharpSet/sharpfiles/main/.sharpcd/sharpcd.yml
```

## Help with Sharex

A guide to setting up custom uploaders in Sharex can be found [here](https://getsharex.com/docs/custom-uploader).

## Maintainers

- [Adam McArthur](https://adam.mcaq.me)

