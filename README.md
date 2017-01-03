## EvilPortal templates for the Wifi Pineapple

Evil Portal is a captive portal module created by [frozenjava](https://github.com/frozenjava) for the [Hak5](https://www.hak5.org/) [Wifi Pineapple](https://www.wifipineapple.com/). This is the repository for the captive portals that can be used on both the [Wifi Pineapple Nano](http://hakshop.myshopify.com/products/wifi-pineapple?variant=81044992) and [Wifi Pineapple Tetra](http://hakshop.myshopify.com/products/wifi-pineapple?variant=11303845317).

Portals tested on Wifi Pineapple Nano Firmware version 1.1.3 using [Evil Portal 2.9 beta](https://github.com/frozenjava/EvilPortalNano/tree/development).

Please follow manual installation instructions on Evil Portal 2.9 development page as it is not available on the Pineapple Bar.

### Usage
Clone the repository

    git clone https://github.com/kbeflo/evilportal-templates

Change the directory to evilportal-templates

    cd evilportal-templates

With your Wifi Pineapple connected upload the portals you wish to use, on the Wifi Pineapple internal storage `/root/portals/` or on the sd card `/sd/portals/`

    scp -r oauth-login root@172.16.42.1:/root/portals/

    scp -r oauth-login root@172.16.42.1:/sd/portals/

Data captured will be stored on the sd card at `/sd/evilportal-logs/`

---

Note that this repo is for educational purposes only. No contributors, major or minor, are to fault for any actions done by this program.

Kleo Bercero - [@kbeflo](https://twitter.com/kbeflo) - [My website](https://kerberos.me/)

Distributed under the GNU GENERAL PUBLIC LICENSE v2. See [LICENSE](https://github.com/kbeflo/evilportal-templates/blob/master/LICENSE) for more information.

Donate Bitcoin - 1DMPGzs7Mwsrfj1a8N3vkz8k78VgCGJ2Kz