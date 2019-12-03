set -e

# https://askubuntu.com/questions/1065231/dpkg-deb-error-archive-has-premature-member-control-tar-xz-before-contr
sudo apt-get clean
sudo apt-get update -q
sudo apt-get install dpkg

# https://github.com/git-lfs/git-lfs/issues/3474#issuecomment-454237261
sudo apt-key adv --keyserver keyserver.ubuntu.com --recv-keys 6B05F25D762E3157

# https://askubuntu.com/questions/489815/cannot-install-mysql-server-5-5-the-following-packages-have-unmet-dependicies
sudo apt-get purge mysql-client-core-5.6
sudo apt-get autoremove
sudo apt-get autoclean

sudo apt-get purge mysql-client-core-5.5
sudo apt-get autoremove
sudo apt-get autoclean

echo mysql-apt-config mysql-apt-config/select-server select mysql-5.7 | sudo debconf-set-selections
wget https://dev.mysql.com/get/mysql-apt-config_0.8.14-1_all.deb
sudo dpkg --install mysql-apt-config_0.8.14-1_all.deb
sudo apt-get install -q -y --force-yes -o Dpkg::Options::=--force-confnew mysql-server
sudo /etc/init.d/mysql start
sudo mysql_upgrade
