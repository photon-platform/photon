# photon

## content development system

seeking the rapid deployment of typed datasets

## Plugins

Plugins added over the defaults:
- DevTools



## Deploy

instructions for setting up an SSH key on inmotion_ssh

https://www.inmotionhosting.com/support/website/ssh/shared-reseller-ssh

download private key to `~/.ssh` folder named `inmotion_ssh`

created config entry for shortcut:

```
# ----------------------------
Host illumiphi.com
	User xxxxxx
	IdentityFile /Users/phi/.ssh/inmotion_ssh
	Port 2222
```

use this in terminal to connect:

```
ssh illumiphi.com
```

takes you into the root of the hosting account

type `exit` to return to local prompt
