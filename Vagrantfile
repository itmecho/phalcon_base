VAGRANTFILE_API_VERSION = "2"

Vagrant.configure(VAGRANTFILE_API_VERSION) do |config|
	config.vm.box = "1404"

	config.vm.box_url = "https://cloud-images.ubuntu.com/vagrant/trusty/current/trusty-server-cloudimg-amd64-vagrant-disk1.box"

	config.vm.provider "virtualbox" do |v|
		v.memory = 1024
	end

	config.vm.network :public_network
	config.vm.synced_folder "./htdocs", "/srv/www/htdocs"

	config.vm.provision "ansible" do |ansible|
		ansible.playbook = "ansible/install.yml"
	end

end
