## Evil Portals

Evil Portal is a captive portal module created by [frozenjava](https://github.com/frozenjava) for the [Hak5](https://www.hak5.org/) [Wifi Pineapple](https://www.wifipineapple.com/). This repository contains a collection of portals that can be loaded into the Evil Portal module and can be used to capture credentials. 

Portals are compatible on both the [Wifi Pineapple Nano](http://hakshop.myshopify.com/products/wifi-pineapple?variant=81044992) and [Wifi Pineapple Tetra](http://hakshop.myshopify.com/products/wifi-pineapple?variant=11303845317) and compatible only with Evil Portal module version 2.9.

Manual installation instructions and advanced options can be found on [Evil Portal 2.9 development](https://github.com/frozenjava/EvilPortalNano/tree/development).

### Usage
Clone the repository

    git clone https://github.com/kbeflo/evilportals

Change directory to evilportals/portals/

    cd evilportals/portals/

Copy the portals you wish to use on the Tetra at `/root/portals/` or on the Nano at `/sd/portals/`

    scp -r portal-login root@172.16.42.1:/root/portals/

Alternatively you can use [Filezilla](https://filezilla-project.org/) to copy the portals

Host: `sftp://172.16.42.1` Username: `root` Password: `lamepassword` Port: `22`  

Captured data will be stored on the Tetra at `/root/evilportal-logs/portal-login.txt` or on the Nano at `/sd/evilportal-logs/portal-login.txt`

## License
Evil Portals is distributed under the GNU GENERAL PUBLIC LICENSE v3. See [LICENSE](https://github.com/kbeflo/evilportals/blob/master/LICENSE) for more information.

## Disclaimer
* Authors do not own the logos under the `portals` directory. Copyright Disclaimer Under Section 107 of the Copyright Act 1976, allowance is made for "fair use" for purposes such as criticism, comment, news reporting, teaching, scholarship, and research.

* Usage of Evil Portals for attacking infrastructures without prior mutual consistency can be considered as an illegal activity. It is the final user's responsibility to obey all applicable local, state and federal laws. Authors assume no liability and are not responsible for any misuse or damage caused by this program.

---

Discussion thread - [Hak5 Forums](https://forums.hak5.org/index.php?/topic/39856-evil-portals/)

Kleo Bercero - [@kbeflo](https://twitter.com/kbeflo) - [My website](https://kerberos.me/)

