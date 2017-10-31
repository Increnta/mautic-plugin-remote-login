# Mautic Remote Login

### Install instructions

1. Run command on terminal
```
git clone https://github.com/Increnta/mautic-plugin-remote-login.git plugins/RemoteLoginBundle
```
2. Clean mautic cache
```
php app/console cache:clear
```
3. Install plugins on mautic
- Go to plugins and press "Install/Upgrade plugins"



### Usage:
 - Post to http://yourmaticurl.com/remotelogin/{$useremail}
 - Params: { secret }
