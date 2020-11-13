## Evil Portals

![](https://img.shields.io/github/license/kbeflo/evilportals.svg?style=flat-square)
[![](https://img.shields.io/discord/413223793016963073.svg?style=flat-square)](https://discord.gg/Ka557WS)

[Evil Portals](https://github.com/kbeflo/evilportals) is a collection of portals that can be loaded into the Evil Portal module and can be used for phishing attacks against WiFi clients in order to obtain credentials or infect the victims with malware using the [Hak5](https://hak5.org/) [WiFi Pineapple](https://wifipineapple.com/) [Tetra](http://hakshop.myshopify.com/products/wifi-pineapple?variant=11303845317) and [Nano](http://hakshop.myshopify.com/products/wifi-pineapple?variant=81044992).

This project requires you to install [Evil Portal](https://github.com/frozenjava/EvilPortalNano) captive portal module created by [frozenjava](https://github.com/frozenjava). To install on the Pineapple, go to Modules -> Manage Modules -> Get Modules from Hak5 Community Repositories -> Evil Portal 3.2.

---

#### Usage

Clone the repository

	git clone https://github.com/kbeflo/evilportals

Change directory to evilportals/portals/

	cd evilportals/portals/

Copy the portals you wish to use on the Tetra at `/root/portals/` or on the Nano at `/sd/portals/`

    scp -r portal-login root@172.16.42.1:/root/portals/

Alternatively you can use [Filezilla](https://filezilla-project.org/) to copy the portals

	Host: sftp://172.16.42.1 Username: root Password: lamepassword Port: 22

Finally on the WiFi Pineapple web interface, start the Evil Portal module and then activate the portal you wish to use.

After gathering credentials, captured data will be shown as a notification on the WiFi Pineapple web interface. Logs are found at Modules > Evil Portal > Logs > View and at portals/login/.logs.

---

#### Screenshots

<img src="https://user-images.githubusercontent.com/13497504/88472836-bc7b9780-cf49-11ea-986e-9ff6c05abc01.png" width="200"/> <img src="https://user-images.githubusercontent.com/13497504/34363975-1d4b32ca-eabc-11e7-8532-2105a160c5c1.png" width="200"/> <img src="https://user-images.githubusercontent.com/13497504/34363977-1e8f4ca2-eabc-11e7-885e-e7dbd845e217.png" width="200"/>

<img src="https://user-images.githubusercontent.com/13497504/99083728-e643f180-2600-11eb-95b0-9d181001863b.png" width="200"/> <img src="https://user-images.githubusercontent.com/13497504/99057411-b849b780-25d6-11eb-8e88-5e4d7dd32ee6.png" width="200"/> <img src="https://user-images.githubusercontent.com/13497504/34366525-bba03dc4-ead7-11e7-8bea-a3fa9ae33ef4.png" width="200"/>

---

#### License
Evil Portals is distributed under the GNU GENERAL PUBLIC LICENSE v3. See [LICENSE](https://github.com/kbeflo/evilportals/blob/master/LICENSE) for more information.

#### Disclaimer
* Usage of Evil Portals for attacking infrastructures without prior mutual consistency can be considered as an illegal activity. It is the final user's responsibility to obey all applicable local, state and federal laws. Authors assume no liability and are not responsible for any misuse or damage caused by this program.

---

Some of the portals here are also available for [Wifiphisher](https://github.com/wifiphisher/wifiphisher), available here [wifiphisher/extra-phishing-pages](https://github.com/wifiphisher/extra-phishing-pages)

Discussion thread - [Hak5 Forums](https://forums.hak5.org/index.php?/topic/39856-evil-portals/)

[Kleo Bercero](https://kbeflo.github.io/)
