# LibreNMS Vagrant Files

To provide easy development and testing on other Operating Systems, these Vagrant boxes get a development installation running in a VM with no effort.

## Requirements

* [VirtualBox] (http://www.virtualbox.org)
* [Vagrant] (https://www.vagrantup.com/)

## Instructions

* Clone the source repository: `git clone https://github.com/librenms/librenms.git`
* Change into the appropriate directory: `cd librenms/contrib/centos7`
* Run Vagrant: `vagrant up`

This will build a CentOS 7 machine, map your local source directory into the VM (so /opt/librenms points to your local machine), configure MySQL and Apache, and create a default installation of LibreNMS.

LibreNMS will be available at http://localhost:20080 - username 'admin', password 'password'