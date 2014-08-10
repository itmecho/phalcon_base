# Phalcon Base (Vagrant)

**Developed on:** Ubuntu 14.04

This repo contains a base Phalcon Vagrant machine for starting a Phalcon application

## Dependancies

### Oracle VM Virtualbox

This repo uses Oracle VM Virtualbox to host the VM. To install it, get the latest version from the official [VirtualBox Website](https://www.virtualbox.org/wiki/Linux_Downloads)

Once it's downloaded, install it using the command below, replacing the file name with the one you downloaded

````bash
sudo dpkg -i ~/Downloads/virtualbox-4.3_4.3.14-95030~Ubuntu~raring_amd64.deb
````

### Vagrant

We will be using Vagrant to manage our VM. To install it, download the latest verison from the official [Vagrant Website](http://www.vagrantup.com/downloads.html)

Once it's downloaded, install it using the command below, replacing the filename with the one you downloaded

````bash
sudo dpkg -i ~/Downloads/vagrant_1.6.3_x86_64.deb
````

### Ansible

This Vagrant box is provisioned using ansible. For this to run successfully, you must have Ansible installed

This is easily done using the ppa described on the [Ansible Documentation Installation Page](http://docs.ansible.com/intro_installation.html)

````bash
sudo apt-get install software-properties-common
sudo apt-add-repository ppa:ansible/ansible
sudo apt-get update
sudo apt-get install ansible
````

## First time run

After installing the dependencies listed above, cd into the phalcon_base directory and tell vagrant to start the box creation process

````bash
cd /var/www/phalcon_base
vagrant up
````

Vagrant will now proceed to download the Ubuntu 14.04 32bit image and create a VM using it. Once it has completed the initial setup, it will trigger the ansible playbook and install everything you need for a basic Phalcon application.

When the playbook has finished (hopefully with no errors), the box will be ready to go! The htdocs folder will be synced to the box so you just have to start working on your local machine and the changes will automatically appear on the server.

To see your new vagrant box running, go to [http://localhost:8080/](http://localhost:8080/) in your browser. Port 80 on the Vagrant box has been forwarded to port 8080 on your computer for easy access.

---

## Extras

### Phalcon & PhpStorm

Want to integrate Phalcon into PhpStorm to enable auto-completion and other helpful features? Thanks to the Phalcon DevTools, it's easy!

1. Clone `https://github.com/phalcon/phalcon-devtools.git` onto your computer. i.e. `/lib/phalcon-devtools`
2. Open your project in PhpStorm, right click *External Libraries* in the Project Explorer and click *Configure PHP Include Paths*
3. Click the green plus icon on the right of the new window and navigate to the phalcon-devtools folder
4. Navigate through the ide folder, select the latest version from the list of folders and click *OK*
5. Finally, click *OK* one last time and you're done! PhpStorm is now integrated with the Phalcon Framework!
