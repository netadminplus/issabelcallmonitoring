[فارسی](https://github.com/netadminplus/issabelcallmonitoring/blob/main/README.fa.md)
# Issabel Call Monitoring
**Free Call Monitoring Panel for Issabel 5**

🚀 A simple and effective solution for monitoring calls on **Issabel 5**. This project restores the **Operator Panel**, which was removed in Issabel 5, providing an easy-to-use alternative for call monitoring without additional licensing costs.

---

## ⚡ Why Issabel Call Monitoring?
In Issabel 5, the **Operator Panel** has been removed and replaced with **FOP2**, which requires a **$40 commercial license** for large-scale internal extensions.  
**Issabel Call Monitoring** allows you to bring back the **Operator Panel** **for free**, ensuring seamless call monitoring for your VoIP system.

---

## 📥 Installation

Run the following command on your **Linux CLI** to install:

```sh
curl -L -o callmonitoring.zip https://github.com/netadminplus/issabelcallmonitoring/archive/main.zip && \
unzip -o callmonitoring.zip && \
cd issabelcallmonitoring-main && \
chmod 755 install.sh && \
yes | ./install.sh
```

---

## 🛠️ Setup Guide

### 1️⃣ Connect to the Server via SSH
Open a terminal and connect to your Issabel 5 server:

```sh
ssh root@your-server-ip
```

### 2️⃣ Update Your Server
Ensure your system is up to date:

```sh
yum update -y
```

### 3️⃣ Run the Installation Script
Copy and paste the installation command above to install **Issabel Call Monitoring**.

### 4️⃣ Restart the Server
Once the installation is complete, restart your Issabel 5 server:

```sh
reboot
```

### 5️⃣ Access the Call Monitoring Panel
After the reboot, navigate to:

📍 **PBX > Call Monitoring** in the Issabel web interface.

🎉 **Congratulations!** You have successfully restored the Operator Panel on Issabel 5.

---

## 📌 Features

- ✅ **Brings back the classic Operator Panel** in Issabel 5
- ✅ **No commercial license required** – Free alternative to FOP2
- ✅ **Easy installation** with a single command
- ✅ **Seamless integration** into the PBX menu
- ✅ **Works with large-scale VoIP setups**

---

## 🔗 More Information

- [Official Issabel Website](https://www.issabel.org/)
- [Issabel Call Monitoring GitHub](https://github.com/netadminplus/issabelcallmonitoring)
- [netadminplus.com](https://netadminplus.com)
- [NetAdminPlus YouTube](https://youtube.com/netadminplus)
- [NetAdminPlus Instagram](https://instagram.com/netadminplus)

---

## ❤️ Support & Contributions
If you find this project useful, consider **starring** the repository and sharing it with the community. Contributions and improvements are always welcome! 🚀
