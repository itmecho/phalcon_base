VAGRANTFILE_API_VERSION = "2"

Vagrant.configure(VAGRANTFILE_API_VERSION) do |config|
	config.vm.box = "ubuntu/trusty32"

	config.vm.box_url = "ubuntu/trusty32"

	config.vm.provider "virtualbox" do |v|
		v.memory = 1024
	end

    config.vm.network "forwarded_port", guest: 80, host: 8080
	config.vm.synced_folder "./htdocs", "/srv/www/htdocs"

	config.vm.provision "ansible" do |ansible|
		ansible.playbook = "ansible/install.yml"
	end

end