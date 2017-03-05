## Evil Portal Templates

Evil Portal is a captive portal module created by [frozenjava](https://github.com/frozenjava) for the [Hak5](https://www.hak5.org/) [Wifi Pineapple](https://www.wifipineapple.com/). This repository is for the Evil Portal module captive portal templates used to capture data and can be used on both the [Wifi Pineapple Nano](http://hakshop.myshopify.com/products/wifi-pineapple?variant=81044992) and [Wifi Pineapple Tetra](http://hakshop.myshopify.com/products/wifi-pineapple?variant=11303845317).

Portals tested on Wifi Pineapple Nano Firmware version 1.1.3 using [Evil Portal 2.9 beta](https://github.com/frozenjava/EvilPortalNano/tree/development).

Please follow manual installation instructions on Evil Portal 2.9 development page as it is not available on the Pineapple Bar.

### Usage
Clone the repository

    git clone https://github.com/kbeflo/evilportal-templates

Change directory to evilportal-templates/portals/

    cd evilportal-templates/portals/

Copy the portals you wish to use on the Tetra at `/root/portals/` or on the Nano at `/sd/portals/`

    scp -r oauth-login root@172.16.42.1:/root/portals/

Alternatively you can use [Filezilla](https://filezilla-project.org/) to copy the portals

Host: `sftp://172.16.42.1` Username: `root` Password: `lamepassword` Port: `22`  

Data captured will be stored on the Tetra at `/root/evilportal-logs/oauth-login.txt` or on the Nano at `/sd/evilportal-logs/oauth-login.txt`

---

Note that this repo is for educational purposes only. No contributors, major or minor, are to fault for any actions done by this program.

Discussion thread - [Hak5 Forums](https://forums.hak5.org/index.php?/topic/39856-evil-portal-templates/)

Kleo Bercero - [@kbeflo](https://twitter.com/kbeflo) - [My website](https://kerberos.me/)

Distributed under the GNU GENERAL PUBLIC LICENSE v2. See [LICENSE](https://github.com/kbeflo/evilportal-templates/blob/master/LICENSE) for more information.
